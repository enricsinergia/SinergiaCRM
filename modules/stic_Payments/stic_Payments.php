<?php
/**
 * This file is part of SinergiaCRM.
 * SinergiaCRM is a work developed by SinergiaTIC Association, based on SuiteCRM.
 * Copyright (C) 2013 - 2023 SinergiaTIC Association
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SinergiaTIC Association at email address info@sinergiacrm.org.
 */

class stic_Payments extends Basic
{
    public $new_schema = true;
    public $module_dir = 'stic_Payments';
    public $object_name = 'stic_Payments';
    public $table_name = 'stic_payments';
    public $importable = true;

    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $SecurityGroups;
    public $payment_type;
    public $bank_account;
    public $amount;
    public $currency_id;
    public $payment_method;
    public $transaction_type;
    public $mandate;
    public $segmentation;
    public $in_kind_description;
    public $banking_concept;
    public $status;
    public $m182_excluded;
    public $sepa_rejected_reason;
    public $rejection_date;
    public $c19_rejected_reason;
    public $payment_date;
	
    public function bean_implements($interface)
    {
        switch($interface)
        {
            case 'ACL':
                return true;
        }

        return false;
    }

    /**
     * Overriding SugarBean save function to insert additional logic:
     * 1) Build the name of the payment using the name of the PC and the payment date
     * 2) Get the mandate from the PC and set it in the payment
     * 3) Create a call record for unpaid payments
     *
     * @param boolean $check_notify
     * @return void
     */
    public function save($check_notify = false) {
        
        include_once 'SticInclude/Utils.php';
        include_once 'modules/stic_Payments/Utils.php';

        // Get payment commitment bean. Depending on the context (editview, subpanel, workflow, etc.)
	// stic_paymebfe2itments_ida will be an string that contains the id of the related payment 
	// commitment or will be an object of type Link2, so let's manage it properly. 
        if ($this->stic_paymebfe2itments_ida instanceof Link2) {
            $PCBean = SticUtils::getRelatedBeanObject($this, 'stic_payments_stic_payment_commitments');
        } else {
            $PCBean = BeanFactory::getBean('stic_Payment_Commitments', $this->stic_paymebfe2itments_ida);
        }

        if ($PCBean) {
            // Create name if empty
            if (empty($this->name)) {
                global $timedate, $current_user;
                $userDate = $timedate->fromUserDate($this->payment_date, false, $current_user);
                if ($userDate) {
                    $this->name = $PCBean->name . ' - ' . $userDate->asDBDate();
                } else { 
                    // The payment is created from the pop-up view where the format of the date type fields is from the database
                    $this->name = $PCBean->name . ' - ' . $this->payment_date;
                }
            }

            // Get mandate from payment commitment if empty (for manual payment creation)
            if (empty($this->mandate) && $this->payment_method == 'direct_debit') {
                $this->mandate = $PCBean->mandate;
            }

            // Create call if unpaid
            if ($this->status == 'unpaid' && $this->fetched_row['status'] != 'unpaid') {
                stic_PaymentsUtils::generateCallFromUnpaid($this);
            }
        }
        
        // Call the generic save() function from the SugarBean class
        parent::save();
    }

    /**
     * Overriding SugarBean save_relationship_changes function to insert additional logic: 
     * 1) Remove previous relationship with contact/account when needed
     * 2) Get the contact/account from the payment commitment and set it in the payment
     *
     * @param bool $is_update
     * @param array $exclude
     * @return void
     */
    public function save_relationship_changes($is_update, $exclude = array())
    {
        include_once 'SticInclude/Utils.php';

        // If parent payment commitment has changed...
        if (!empty($this->stic_paymebfe2itments_ida) && (trim($this->stic_paymebfe2itments_ida) != trim($this->rel_fields_before_value['stic_paymebfe2itments_ida']))) {
            // Get new parent payment commitment bean
            $PCBean = BeanFactory::getBean('stic_Payment_Commitments', $this->stic_paymebfe2itments_ida);
            // Get payment commmitment related contact (usual case)
            $contactId = SticUtils::getRelatedBeanObject($PCBean, 'stic_payment_commitments_contacts')->id;
            if (!empty($contactId)) {
                // Remove previous relationship with an account, if any 
                // (a payment can only be related with a single contact or account, not both)
                $this->stic_payments_accountsaccounts_ida = '';
                // Set the relationship between payment and contact
                $this->stic_payments_contactscontacts_ida = $contactId;
            } else {
                // Get payment commitment related account
                $accountId = SticUtils::getRelatedBeanObject($PCBean, 'stic_payment_commitments_accounts')->id;
                if (!empty($accountId)) {
                    // Remove previous relationship with a contact, if any
                    // (a payment can only be related with a single contact or account, not both)
                    $this->stic_payments_contactscontacts_ida = '';
                    // Set the relationship between payment and account
                    $this->stic_payments_accountsaccounts_ida = $accountId;
                }
            }
        }

        // Call the generic save_relationship_changes() function from the SugarBean class
        parent::save_relationship_changes($is_update, $exclude);
    }
}
