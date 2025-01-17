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

class stic_RemittancesUtils {
    /**
     * Mark all payments related to the remittance as paid, by changing its status to "sent"
     *
     * @param Object $remittanceBean Then bean with remittance
     * @return void
     */
    public static function markPaymentsAsPaidIfRemittanceIsSent($remittanceBean) {

        // In card payments remittances the payment status should not be globally updated as it will be managed on individual payment execution
        if ($remittanceBean->type == 'cards') {
            return;
        }

        // We will only change the payment status if the remittance changes status, not if any other field is modified
        if ($remittanceBean->status == 'sent' && $remittanceBean->fetched_row['status'] != $remittanceBean->status) {

            // We do not update payments that are already paid because in this way their date of last modification is at the first moment they were marked with that status.
            $GLOBALS['log']->debug(__METHOD__ . ": Payment status will be updated [{$remittanceBean->fetched_row['status']}] -> [{$remittanceBean->status}] ...");

            // We use the tables specified in the relationship so that the code is transparent to a change of tables if necessary
            global $current_user;

            $sql = "UPDATE
                    stic_payments
                SET
                    status = 'paid',
                    date_modified = NOW(),
                    modified_user_id = '{$current_user->id}'
                WHERE
                    id IN (
                    SELECT
                        stic_payments_stic_remittancesstic_payments_idb
                    FROM
                        stic_payments_stic_remittances_c spsrc
                    WHERE
                        spsrc.deleted = 0
                        AND spsrc.stic_payments_stic_remittancesstic_remittances_ida = '{$remittanceBean->id}')
                    AND status != 'paid'
                    AND deleted = 0";

            $GLOBALS['log']->debug(__METHOD__ . ": Payment status update SQL [{$sql}]");

            // Retrieve the database object
            $db = DBManagerFactory::getInstance();
            $GLOBALS['log']->debug(__METHOD__ . ": Updating payment status ...");
            $res = $db->query($sql);
            if ($res === false) {
                $GLOBALS['log']->ERROR(__METHOD__ . ": An error occurred updating the status of payments linked to the remittance [{$remittanceBean->id} - {$remittanceBean->name}]");
            } else {
                $GLOBALS['log']->INFO(__METHOD__ . ": [" . $db->getAffectedRowCount($res) . "] payments linked to the remittance [{$remittanceBean->id} - {$remittanceBean->name}] have been updated to paid status.");
            }
        }

    }

/**
 * Returns the link to formatted edition to use
 *
 * @param String $module
 * @param String $record
 * @param String $text
 * @return String  The link to formatted edition to use
 */
    public static function goToEdit($module, $record, $text) {

        return '<i>' . $text . '</i> - <a target="_blank" href="index.php?module=' . $module . '&action=EditView&record=' . $record . '" ><b>' . translate('LBL_SEPA_FIX_REMITTANCE_ERROR') . '</b></a>';

    }

}
