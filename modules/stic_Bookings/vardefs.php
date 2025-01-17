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
$dictionary['stic_Bookings'] = array(
    'table' => 'stic_bookings',
    'audited' => true,
    'inline_edit' => 1,
    'duplicate_merge' => true,
    'fields' => array(
        'status' => array(
            'required' => true,
            'name' => 'status',
            'vname' => 'LBL_STATUS',
            'type' => 'enum',
            'massupdate' => 1,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'enabled',
            'duplicate_merge_dom_value' => '2',
            'inline_edit' => 1,
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'enabled',
            'len' => 100,
            'size' => '20',
            'options' => 'stic_bookings_status_list',
            'studio' => 'visible',
            'dependency' => false,
        ),
        'all_day' => array(
            'required' => false,
            'name' => 'all_day',
            'vname' => 'LBL_ALL_DAY',
            'type' => 'bool',
            'no_default' => false,
            'massupdate' => 0,
            'inline_edit' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'ENABLED',
            'duplicate_merge_dom_value' => '2',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'enabled',
            'popupHelp' => 'LBL_ALL_DAY_HELP',
        ),
        'start_date' => array(
            'required' => true,
            'name' => 'start_date',
            'vname' => 'LBL_START_DATE',
            'type' => 'datetimecombo',
            'massupdate' => '1',
            'no_default' => false,
            'display_default' => '',
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'enabled',
            'duplicate_merge_dom_value' => '2',
            'inline_edit' => 0,
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'enabled',
            'size' => '20',
            'enable_range_search' => true,
            'options' => 'date_range_search_dom',
            'dbType' => 'datetime',
        ),
        'end_date' => array(
            'required' => true,
            'name' => 'end_date',
            'vname' => 'LBL_END_DATE',
            'type' => 'datetimecombo',
            'massupdate' => '1',
            'no_default' => false,
            'display_default' => '',
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'enabled',
            'duplicate_merge_dom_value' => '2',
            'inline_edit' => 0,
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'enabled',
            'size' => '20',
            'enable_range_search' => true,
            'options' => 'date_range_search_dom',
            'dbType' => 'datetime',
        ),
        'code' => array(
            'name' => 'code',
            'vname' => 'LBL_CODE',
            'type' => 'int',
            'massupdate' => '0',
            'readonly' => 1,
            'len' => 11,
            'required' => 1,
            'auto_increment' => 1,
            'comment' => 'Visual unique identifier',
            'duplicate_merge' => 'enabled',
            'duplicate_merge_dom_value' => '2',
            'inline_edit' => 0,
            'disable_num_format' => 1,
            'studio' => array(
                'editview' => false,
                'quickcreate' => false,
            ),
        ),
        'parent_name' => array(
            'required' => false,
            'source' => 'non-db',
            'name' => 'parent_name',
            'vname' => 'LBL_FLEX_RELATE',
            'type' => 'parent',
            'massupdate' => 1,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'enabled',
            'duplicate_merge_dom_value' => '2',
            'inline_edit' => 1,
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'enabled',
            'len' => 25,
            'size' => '20',
            'options' => 'parent_type_display',
            'studio' => 'visible',
            'type_name' => 'parent_type',
            'id_name' => 'parent_id',
            'parent_type' => 'record_type_display',
        ),
        'parent_type' => array(
            'required' => false,
            'name' => 'parent_type',
            'vname' => 'LBL_PARENT_TYPE',
            'type' => 'parent_type',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => 0,
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'enabled',
            'len' => 255,
            'size' => '20',
            'dbType' => 'varchar',
            'studio' => 'hidden',
        ),
        'parent_id' => array(
            'required' => false,
            'name' => 'parent_id',
            'vname' => 'LBL_PARENT_ID',
            'type' => 'id',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => 0,
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'enabled',
            'len' => 36,
            'size' => '20',
        ),
        'stic_resources_stic_bookings' => array(
            'name' => 'stic_resources_stic_bookings',
            'type' => 'link',
            'relationship' => 'stic_resources_stic_bookings',
            'source' => 'non-db',
            'vname' => 'LBL_STIC_RESOURCES_STIC_BOOKINGS_FROM_STIC_RESOURCES_TITLE',
        ),

        'stic_bookings_contacts' => array(
            'name' => 'stic_bookings_contacts',
            'type' => 'link',
            'relationship' => 'stic_bookings_contacts',
            'source' => 'non-db',
            'vname' => 'LBL_STIC_BOOKINGS_CONTACTS_FROM_CONTACTS_TITLE',
            'id_name' => 'stic_bookings_contactscontacts_ida',
        ),
        'stic_bookings_contacts_name' => array(
            'name' => 'stic_bookings_contacts_name',
            'type' => 'relate',
            'source' => 'non-db',
            'vname' => 'LBL_STIC_BOOKINGS_CONTACTS_FROM_CONTACTS_TITLE',
            'save' => true,
            'id_name' => 'stic_bookings_contactscontacts_ida',
            'link' => 'stic_bookings_contacts',
            'table' => 'contacts',
            'module' => 'Contacts',
            'rname' => 'name',
            'db_concat_fields' => array(
                0 => 'first_name',
                1 => 'last_name',
            ),
            'massupdate' => 1,
            'inline_edit' => 1,
        ),
        'stic_bookings_contactscontacts_ida' => array(
            'name' => 'stic_bookings_contactscontacts_ida',
            'type' => 'link',
            'relationship' => 'stic_bookings_contacts',
            'source' => 'non-db',
            'reportable' => false,
            'side' => 'right',
            'vname' => 'LBL_STIC_BOOKINGS_CONTACTS_FROM_STIC_BOOKINGS_TITLE',
        ),
        'stic_bookings_accounts' => array(
            'name' => 'stic_bookings_accounts',
            'type' => 'link',
            'relationship' => 'stic_bookings_accounts',
            'source' => 'non-db',
            'vname' => 'LBL_STIC_BOOKINGS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
            'id_name' => 'stic_bookings_accountsaccounts_ida',
        ),
        'stic_bookings_accounts_name' => array(
            'name' => 'stic_bookings_accounts_name',
            'type' => 'relate',
            'source' => 'non-db',
            'vname' => 'LBL_STIC_BOOKINGS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
            'save' => true,
            'id_name' => 'stic_bookings_accountsaccounts_ida',
            'link' => 'stic_bookings_accounts',
            'table' => 'accounts',
            'module' => 'Accounts',
            'rname' => 'name',
            'massupdate' => 1,
            'inline_edit' => 1,
        ),
        'stic_bookings_accountsaccounts_ida' => array(
            'name' => 'stic_bookings_accountsaccounts_ida',
            'type' => 'link',
            'relationship' => 'stic_bookings_accounts',
            'source' => 'non-db',
            'reportable' => false,
            'side' => 'right',
            'vname' => 'LBL_STIC_BOOKINGS_ACCOUNTS_FROM_STIC_BOOKINGS_TITLE',
        ),
    ),
    'indices' => array(
        'code_autoincrement' => array(
            'name' => 'code_autoincrement',
            'type' => 'unique',
            'fields' => array(
                'code',
            ),
        ),
    ),
    'relationships' => array(),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
    require_once 'include/SugarObjects/VardefManager.php';
}
VardefManager::createVardef('stic_Bookings', 'stic_Bookings', array('basic', 'assignable', 'security_groups'));

// Set special values for SuiteCRM base fields
$dictionary['stic_Bookings']['fields']['name']['required'] = '0'; // Name is not required in this module
$dictionary['stic_Bookings']['fields']['name']['importable'] = true; // Name is importable but not required in this module
$dictionary['stic_Bookings']['fields']['description']['rows'] = '2'; // Make textarea fields shorter
