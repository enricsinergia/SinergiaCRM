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
$module_name = 'stic_Job_Offers';
$searchdefs[$module_name] =
array(
    'layout' => array(
        'basic_search' => array(
            'name' => array(
                'name' => 'name',
                'default' => true,
                'width' => '10%',
            ),
            'offer_code' => array(
                'type' => 'varchar',
                'label' => 'LBL_OFFER_CODE',
                'width' => '10%',
                'default' => true,
                'name' => 'offer_code',
            ),
            'status' => array(
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_STATUS',
                'width' => '10%',
                'default' => true,
                'name' => 'status',
            ),
            'type' => array(
                'type' => 'multienum',
                'studio' => 'visible',
                'label' => 'LBL_TYPE',
                'width' => '10%',
                'default' => true,
                'name' => 'type',
            ),
            'stic_job_offers_accounts_name' => array(
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_STIC_JOB_OFFERS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
                'id' => 'STIC_JOB_OFFERS_ACCOUNTSACCOUNTS_IDA',
                'width' => '10%',
                'default' => true,
                'name' => 'stic_job_offers_accounts_name',
            ),
            'professional_profile' => array(
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_PROFESSIONAL_PROFILE',
                'width' => '10%',
                'default' => true,
                'name' => 'professional_profile',
            ),
            'assigned_user_id' => array(
                'name' => 'assigned_user_id',
                'label' => 'LBL_ASSIGNED_TO',
                'type' => 'enum',
                'function' => array(
                    'name' => 'get_user_array',
                    'params' => array(
                        0 => false,
                    ),
                ),
                'width' => '10%',
                'default' => true,
            ),
            'current_user_only' => array(
                'label' => 'LBL_CURRENT_USER_FILTER',
                'type' => 'bool',
                'default' => true,
                'width' => '10%',
                'name' => 'current_user_only',
            ),
            'favorites_only' => array(
                'name' => 'favorites_only',
                'label' => 'LBL_FAVORITES_FILTER',
                'type' => 'bool',
                'default' => true,
                'width' => '10%',
            ),
        ),
        'advanced_search' => array(
            'name' => array(
                'name' => 'name',
                'default' => true,
                'width' => '10%',
            ),
            'offer_code' => array(
                'type' => 'varchar',
                'label' => 'LBL_OFFER_CODE',
                'width' => '10%',
                'default' => true,
                'name' => 'offer_code',
            ),
            'status' => array(
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_STATUS',
                'width' => '10%',
                'default' => true,
                'name' => 'status',
            ),
            'type' => array(
                'type' => 'multienum',
                'studio' => 'visible',
                'label' => 'LBL_TYPE',
                'width' => '10%',
                'default' => true,
                'name' => 'type',
            ),
            'stic_job_offers_accounts_name' => array(
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_STIC_JOB_OFFERS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
                'id' => 'STIC_JOB_OFFERS_ACCOUNTSACCOUNTS_IDA',
                'width' => '10%',
                'default' => true,
                'name' => 'stic_job_offers_accounts_name',
            ),
            'professional_profile' => array(
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_PROFESSIONAL_PROFILE',
                'width' => '10%',
                'default' => true,
                'name' => 'professional_profile',
            ),
            'assigned_user_id' => array(
                'name' => 'assigned_user_id',
                'label' => 'LBL_ASSIGNED_TO',
                'type' => 'enum',
                'function' => array(
                    'name' => 'get_user_array',
                    'params' => array(
                        0 => false,
                    ),
                ),
                'width' => '10%',
                'default' => true,
            ),
            'process_start_date' => array(
                'type' => 'date',
                'label' => 'LBL_PROCESS_START_DATE',
                'width' => '10%',
                'default' => true,
                'name' => 'process_start_date',
            ),
            'process_end_date' => array(
                'type' => 'date',
                'label' => 'LBL_PROCESS_END_DATE',
                'width' => '10%',
                'default' => true,
                'name' => 'process_end_date',
            ),
            'hours_per_week' => array(
                'type' => 'decimal',
                'label' => 'LBL_HOURS_PER_WEEK',
                'width' => '10%',
                'default' => true,
                'name' => 'hours_per_week',
            ),
            'offered_positions' => array(
                'type' => 'int',
                'label' => 'LBL_OFFERED_POSITIONS',
                'width' => '10%',
                'default' => true,
                'name' => 'offered_positions',
            ),
            'retribution' => array(
                'type' => 'currency',
                'label' => 'LBL_RETRIBUTION',
                'currency_format' => true,
                'width' => '10%',
                'default' => true,
                'name' => 'retribution',
            ),
            'applications_start_date' => array(
                'type' => 'date',
                'label' => 'LBL_APPLICATIONS_START_DATE',
                'width' => '10%',
                'default' => true,
                'name' => 'applications_start_date',
            ),
            'inc_contract_type' => array(
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_INC_CONTRACT_TYPE',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_contract_type',
            ),
            'sepe_contract_type' => array(
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_SEPE_CONTRACT_TYPE',
                'width' => '10%',
                'default' => true,
                'name' => 'sepe_contract_type',
            ),
            'applications_end_date' => array(
                'type' => 'date',
                'label' => 'LBL_APPLICATIONS_END_DATE',
                'width' => '10%',
                'default' => true,
                'name' => 'applications_end_date',
            ),
            'interlocutor' => array(
                'type' => 'relate',
                'studio' => 'visible',
                'label' => 'LBL_INTERLOCUTOR',
                'id' => 'CONTACT_ID_C',
                'link' => true,
                'width' => '10%',
                'default' => true,
                'name' => 'interlocutor',
            ),
            'offer_origin' => array(
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_OFFER_ORIGIN',
                'width' => '10%',
                'default' => true,
                'name' => 'offer_origin',
            ),
            'contract_duration_details' => array(
                'type' => 'text',
                'studio' => 'visible',
                'label' => 'LBL_CONTRACT_DURATION_DETAILS',
                'sortable' => false,
                'width' => '10%',
                'default' => true,
                'name' => 'contract_duration_details',
            ),
            'contract_description' => array(
                'type' => 'text',
                'studio' => 'visible',
                'label' => 'LBL_CONTRACT_DESCRIPTION',
                'sortable' => false,
                'width' => '10%',
                'default' => true,
                'name' => 'contract_description',
            ),
            'retribution_conditions' => array(
                'type' => 'text',
                'studio' => 'visible',
                'label' => 'LBL_RETRIBUTION_CONDITIONS',
                'sortable' => false,
                'width' => '10%',
                'default' => true,
                'name' => 'retribution_conditions',
            ),
            'job_requirements' => array(
                'type' => 'text',
                'studio' => 'visible',
                'label' => 'LBL_JOB_REQUIREMENTS',
                'sortable' => false,
                'width' => '10%',
                'default' => true,
                'name' => 'job_requirements',
            ),
            'sepe_covered_date' => array(
                'type' => 'date',
                'label' => 'LBL_SEPE_COVERED_DATE',
                'width' => '10%',
                'default' => true,
                'name' => 'sepe_covered_date',
            ),
            'sepe_activation_date' => array(
                'type' => 'date',
                'label' => 'LBL_SEPE_ACTIVATION_DATE',
                'width' => '10%',
                'default' => true,
                'name' => 'sepe_activation_date',
            ),
            'inc_id' => array(
                'type' => 'varchar',
                'label' => 'LBL_INC_ID',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_id',
            ),
            'inc_incorpora_record' => array(
                'type' => 'bool',
                'label' => 'LBL_INC_INCORPORA_RECORD',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_incorpora_record',
            ),
            'inc_contract_start_date' => array(
                'type' => 'date',
                'label' => 'LBL_INC_CONTRACT_START_DATE',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_contract_start_date',
            ),
            'inc_collective_requirements' => array(
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_INC_COLLECTIVE_REQUIREMENTS',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_collective_requirements',
            ),
            'inc_state' => array(
                'type' => 'varchar',
                'studio' => array(
                    'no_duplicate' => true,
                    'editview' => false,
                    'quickcreate' => false,
                ),
                'label' => 'LBL_INC_STATE',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_state',
            ),
            'inc_municipality' => array(
                'type' => 'varchar',
                'studio' => array(
                    'no_duplicate' => true,
                    'editview' => false,
                    'quickcreate' => false,
                ),
                'label' => 'LBL_INC_MUNICIPALITY',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_municipality',
            ),
            'inc_town' => array(
                'type' => 'varchar',
                'studio' => array(
                    'no_duplicate' => true,
                    'editview' => false,
                    'quickcreate' => false,
                ),
                'label' => 'LBL_INC_TOWN',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_town',
            ),
            'inc_country' => array(
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_INC_COUNTRY',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_country',
            ),
            'inc_offer_origin' => array(
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_INC_OFFER_ORIGIN',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_offer_origin',
            ),
            'inc_contract_duration' => array(
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_INC_CONTRACT_DURATION',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_contract_duration',
            ),
            'inc_working_day' => array(
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_INC_WORKING_DAY',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_working_day',
            ),
            'inc_status' => array(
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_INC_STATUS',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_status',
            ),
            'inc_status_details' => array(
                'type' => 'varchar',
                'studio' => array(
                    'editview' => false,
                    'quickcreate' => false,
                ),
                'label' => 'LBL_INC_STATUS_DETAILS',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_status_details',
            ),
            'inc_officer_email' => array(
                'type' => 'varchar',
                'label' => 'LBL_INC_OFFICER_EMAIL',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_officer_email',
            ),
            'inc_officer_telephone' => array(
                'type' => 'varchar',
                'label' => 'LBL_INC_OFFICER_TELEPHONE',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_officer_telephone',
            ),
            'inc_register_start_date' => array(
                'type' => 'date',
                'label' => 'LBL_INC_REGISTER_START_DATE',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_register_start_date',
            ),
            'inc_register_end_date' => array(
                'type' => 'date',
                'label' => 'LBL_INC_REGISTER_END_DATE',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_register_end_date',
            ),
            'inc_reference_group' => array(
                'type' => 'enum',
                'studio' => array(
                    'no_duplicate' => true,
                    'editview' => false,
                    'quickcreate' => false,
                ),
                'label' => 'LBL_INC_REFERENCE_GROUP',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_reference_group',
            ),
            'inc_reference_entity' => array(
                'type' => 'enum',
                'studio' => array(
                    'no_duplicate' => true,
                    'editview' => false,
                    'quickcreate' => false,
                ),
                'label' => 'LBL_INC_REFERENCE_ENTITY',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_reference_entity',
            ),
            'inc_reference_officer' => array(
                'type' => 'int',
                'studio' => array(
                    'no_duplicate' => true,
                    'editview' => false,
                    'quickcreate' => false,
                ),
                'label' => 'LBL_INC_REFERENCE_OFFICER',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_reference_officer',
            ),
            'inc_checkin_date' => array(
                'type' => 'date',
                'label' => 'LBL_INC_CHECKIN_DATE',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_checkin_date',
            ),
            'inc_remuneration' => array(
                'type' => 'float',
                'label' => 'LBL_INC_REMUNERATION',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_remuneration',
            ),
            'inc_tasks_responsabilities' => array(
                'type' => 'text',
                'studio' => 'visible',
                'label' => 'LBL_INC_TASKS_RESPONSABILITIES',
                'sortable' => false,
                'width' => '10%',
                'default' => true,
                'name' => 'inc_tasks_responsabilities',
            ),
            'inc_cno_n1' => array(
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_INC_CNO_N1',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_cno_n1',
            ),
            'inc_cno_n2' => array(
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_INC_CNO_N2',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_cno_n2',
            ),
            'inc_cno_n3' => array(
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_INC_CNO_N3',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_cno_n3',
            ),
            'inc_location' => array(
                'type' => 'relate',
                'studio' => 'visible',
                'label' => 'LBL_INC_LOCATION',
                'id' => 'STIC_INCORPORA_LOCATIONS_ID',
                'link' => true,
                'width' => '10%',
                'default' => true,
                'name' => 'inc_location',
            ),
            'inc_observations' => array(
                'type' => 'text',
                'studio' => 'visible',
                'label' => 'LBL_INC_OBSERVATIONS',
                'sortable' => false,
                'width' => '10%',
                'default' => true,
                'name' => 'inc_observations',
            ),
            'inc_professional_licenses' => array(
                'type' => 'varchar',
                'label' => 'LBL_INC_PROFESSIONAL_LICENSES',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_professional_licenses',
            ),
            'inc_driving_licenses' => array(
                'type' => 'varchar',
                'label' => 'LBL_INC_DRIVING_LICENSES',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_driving_licenses',
            ),
            'inc_maximum_age' => array(
                'type' => 'varchar',
                'label' => 'LBL_INC_MAXIMUM_AGE',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_maximum_age',
            ),
            'inc_minimum_age' => array(
                'type' => 'varchar',
                'label' => 'LBL_INC_MINIMUM_AGE',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_minimum_age',
            ),
            'inc_education_languages' => array(
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_INC_EDUCATION_LANGUAGES',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_education_languages',
            ),
            'inc_working_experience' => array(
                'type' => 'text',
                'studio' => 'visible',
                'label' => 'LBL_INC_WORKING_EXPERIENCE',
                'sortable' => false,
                'width' => '10%',
                'default' => true,
                'name' => 'inc_working_experience',
            ),
            'inc_education' => array(
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_INC_EDUCATION',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_education',
            ),
            'inc_synchronization_log' => array(
                'type' => 'text',
                'studio' => array(
                    'no_duplicate' => true,
                    'editview' => false,
                    'quickcreate' => false,
                ),
                'label' => 'LBL_INC_SYNCHRONIZATION_LOG',
                'sortable' => false,
                'width' => '10%',
                'default' => true,
                'name' => 'inc_synchronization_log',
            ),
            'inc_synchronization_errors' => array(
                'type' => 'bool',
                'studio' => array(
                    'no_duplicate' => true,
                    'editview' => false,
                    'quickcreate' => false,
                ),
                'label' => 'LBL_INC_SYNCHRONIZATION_ERRORS',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_synchronization_errors',
            ),
            'inc_synchronization_date' => array(
                'type' => 'datetimecombo',
                'studio' => array(
                    'no_duplicate' => true,
                    'editview' => false,
                    'quickcreate' => false,
                ),
                'label' => 'LBL_INC_SYNCHRONIZATION_DATE',
                'width' => '10%',
                'default' => true,
                'name' => 'inc_synchronization_date',
            ),
            'description' => array(
                'type' => 'text',
                'label' => 'LBL_DESCRIPTION',
                'sortable' => false,
                'width' => '10%',
                'default' => true,
                'name' => 'description',
            ),
            'date_modified' => array(
                'type' => 'datetime',
                'label' => 'LBL_DATE_MODIFIED',
                'width' => '10%',
                'default' => true,
                'name' => 'date_modified',
            ),
            'modified_user_id' => array(
                'type' => 'assigned_user_name',
                'label' => 'LBL_MODIFIED',
                'width' => '10%',
                'default' => true,
                'name' => 'modified_user_id',
            ),
            'created_by' => array(
                'type' => 'assigned_user_name',
                'label' => 'LBL_CREATED',
                'width' => '10%',
                'default' => true,
                'name' => 'created_by',
            ),
            'date_entered' => array(
                'type' => 'datetime',
                'label' => 'LBL_DATE_ENTERED',
                'width' => '10%',
                'default' => true,
                'name' => 'date_entered',
            ),
            'current_user_only' => array(
                'label' => 'LBL_CURRENT_USER_FILTER',
                'type' => 'bool',
                'default' => true,
                'width' => '10%',
                'name' => 'current_user_only',
            ),
            'favorites_only' => array(
                'name' => 'favorites_only',
                'label' => 'LBL_FAVORITES_FILTER',
                'type' => 'bool',
                'default' => true,
                'width' => '10%',
            ),
        ),
    ),
    'templateMeta' => array(
        'maxColumns' => '3',
        'maxColumnsBasic' => '4',
        'widths' => array(
            'label' => '10',
            'field' => '30',
        ),
    ),
);

?>
