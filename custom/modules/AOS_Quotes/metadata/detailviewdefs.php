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
$module_name = 'AOS_Quotes';
$_object_name = 'aos_quotes';
$viewdefs[$module_name] =
array(
    'DetailView' => array(
        'templateMeta' => array(
            'form' => array(
                'buttons' => array(
                    0 => 'EDIT',
                    1 => 'DUPLICATE',
                    2 => 'DELETE',
                    3 => 'FIND_DUPLICATES',
                    4 => array(
                        'customCode' => '<input type="button" class="button" onClick="showPopup(\'pdf\');" value="{$MOD.LBL_PRINT_AS_PDF}">',
                    ),
                    5 => array(
                        'customCode' => '<input type="button" class="button" onClick="showPopup(\'emailpdf\');" value="{$MOD.LBL_EMAIL_PDF}">',
                    ),
                    6 => array(
                        'customCode' => '<input type="button" class="button" onClick="showPopup(\'email\');return false;" value="{$MOD.LBL_EMAIL_QUOTE}">',
                    ),
                    7 => array(
                        'customCode' => '<input type="submit" class="button" onClick="this.form.action.value=\'createOpportunity\';" value="{$MOD.LBL_CREATE_OPPORTUNITY}">',
                        'sugar_html' => array(
                            'type' => 'submit',
                            'value' => '{$MOD.LBL_CREATE_OPPORTUNITY}',
                            'htmlOptions' => array(
                                'class' => 'button',
                                'id' => 'create_contract_button',
                                'title' => '{$MOD.LBL_CREATE_OPPORTUNITY}',
                                'onclick' => 'this.form.action.value=\'createOpportunity\';',
                                'name' => 'Create Opportunity',
                            ),
                        ),
                    ),
                    8 => array(
                        'customCode' => '<input type="submit" class="button" onClick="this.form.action.value=\'createContract\';" value="{$MOD.LBL_CREATE_CONTRACT}">',
                        'sugar_html' => array(
                            'type' => 'submit',
                            'value' => '{$MOD.LBL_CREATE_CONTRACT}',
                            'htmlOptions' => array(
                                'class' => 'button',
                                'id' => 'create_contract_button',
                                'title' => '{$MOD.LBL_CREATE_CONTRACT}',
                                'onclick' => 'this.form.action.value=\'createContract\';',
                                'name' => 'Create Contract',
                            ),
                        ),
                    ),
                    9 => array(
                        'customCode' => '<input type="submit" class="button" onClick="this.form.action.value=\'converToInvoice\';" value="{$MOD.LBL_CONVERT_TO_INVOICE}">',
                        'sugar_html' => array(
                            'type' => 'submit',
                            'value' => '{$MOD.LBL_CONVERT_TO_INVOICE}',
                            'htmlOptions' => array(
                                'class' => 'button',
                                'id' => 'convert_to_invoice_button',
                                'title' => '{$MOD.LBL_CONVERT_TO_INVOICE}',
                                'onclick' => 'this.form.action.value=\'converToInvoice\';',
                                'name' => 'Convert to Invoice',
                            ),
                        ),
                    ),
                ),
            ),
            'maxColumns' => '2',
            'widths' => array(
                0 => array(
                    'label' => '10',
                    'field' => '30',
                ),
                1 => array(
                    'label' => '10',
                    'field' => '30',
                ),
            ),
            'useTabs' => true,
            'tabDefs' => array(
                'LBL_DEFAULT_PANEL' => array(
                    'newTab' => true,
                    'panelDefault' => 'expanded',
                ),
                'LBL_QUOTE_TO' => array(
                    'newTab' => false,
                    'panelDefault' => 'expanded',
                ),
                'LBL_LINE_ITEMS' => array(
                    'newTab' => false,
                    'panelDefault' => 'expanded',
                ),
                'LBL_PANEL_RECORD_DETAILS' => array(
                    'newTab' => true,
                    'panelDefault' => 'expanded',
                ),
            ),
        ),
        'panels' => array(
            'LBL_DEFAULT_PANEL' => array(
                0 => array(
                    0 => array(
                        'name' => 'name',
                        'label' => 'LBL_NAME',
                    ),
                    1 => array(
                        'name' => 'assigned_user_name',
                        'label' => 'LBL_ASSIGNED_TO',
                    ),
                ),
                1 => array(
                    0 => array(
                        'name' => 'number',
                        'label' => 'LBL_QUOTE_NUMBER',
                    ),
                    1 => '',
                ),
                2 => array(
                    0 => array(
                        'name' => 'stage',
                        'label' => 'LBL_STAGE',
                    ),
                    1 => array(
                        'name' => 'expiration',
                        'label' => 'LBL_EXPIRATION',
                    ),
                ),
                3 => array(
                    0 => array(
                        'name' => 'approval_status',
                        'label' => 'LBL_APPROVAL_STATUS',
                    ),
                    1 => array(
                        'name' => 'invoice_status',
                        'label' => 'LBL_INVOICE_STATUS',
                    ),
                ),
                4 => array(
                    0 => array(
                        'name' => 'term',
                        'label' => 'LBL_TERM',
                    ),
                    1 => array(
                        'name' => 'opportunity',
                        'label' => 'LBL_OPPORTUNITY',
                    ),
                ),
                5 => array(
                    0 => array(
                        'name' => 'terms_c',
                        'studio' => 'visible',
                        'label' => 'LBL_TERMS_C',
                    ),
                    1 => array(
                        'name' => 'approval_issue',
                        'label' => 'LBL_APPROVAL_ISSUE',
                    ),
                ),
                6 => array(
                    0 => array(
                        'name' => 'description',
                        'comment' => 'Full text of the note',
                        'label' => 'LBL_DESCRIPTION',
                    ),
                ),
            ),
            'LBL_QUOTE_TO' => array(
                0 => array(
                    0 => array(
                        'name' => 'billing_account',
                        'label' => 'LBL_BILLING_ACCOUNT',
                    ),
                    1 => array(
                        'name' => 'billing_contact',
                        'label' => 'LBL_BILLING_CONTACT',
                    ),
                ),
                1 => array(
                    0 => array(
                        'name' => 'billing_address_street',
                        'label' => 'LBL_BILLING_ADDRESS',
                        'type' => 'address',
                        'displayParams' => array(
                            'key' => 'billing',
                        ),
                    ),
                    1 => array(
                        'name' => 'shipping_address_street',
                        'label' => 'LBL_SHIPPING_ADDRESS',
                        'type' => 'address',
                        'displayParams' => array(
                            'key' => 'shipping',
                        ),
                    ),
                ),
            ),
            'lbl_line_items' => array(
                0 => array(
                    0 => array(
                        'name' => 'currency_id',
                        'studio' => 'visible',
                        'label' => 'LBL_CURRENCY',
                    ),
                    1 => '',
                ),
                1 => array(
                    0 => array(
                        'name' => 'line_items',
                        'label' => 'LBL_LINE_ITEMS',
                    ),
                ),
                2 => array(
                    0 => '',
                ),
                3 => array(
                    0 => array(
                        'name' => 'total_amt',
                        'label' => 'LBL_TOTAL_AMT',
                    ),
                    1 => '',
                ),
                4 => array(
                    0 => array(
                        'name' => 'discount_amount',
                        'label' => 'LBL_DISCOUNT_AMOUNT',
                    ),
                    1 => '',
                ),
                5 => array(
                    0 => array(
                        'name' => 'subtotal_amount',
                        'label' => 'LBL_SUBTOTAL_AMOUNT',
                    ),
                    1 => '',
                ),
                6 => array(
                    0 => array(
                        'name' => 'shipping_amount',
                        'label' => 'LBL_SHIPPING_AMOUNT',
                    ),
                    1 => '',
                ),
                7 => array(
                    0 => array(
                        'name' => 'shipping_tax_amt',
                        'label' => 'LBL_SHIPPING_TAX_AMT',
                    ),
                    1 => '',
                ),
                8 => array(
                    0 => array(
                        'name' => 'tax_amount',
                        'label' => 'LBL_TAX_AMOUNT',
                    ),
                    1 => '',
                ),
                9 => array(
                    0 => array(
                        'name' => 'total_amount',
                        'label' => 'LBL_GRAND_TOTAL',
                    ),
                    1 => '',
                ),
            ),
            'LBL_PANEL_RECORD_DETAILS' => array(
                0 => array(
                    0 => array(
                        'name' => 'created_by_name',
                        'label' => 'LBL_CREATED',
                    ),
                    1 => array(
                        'name' => 'date_entered',
                        'comment' => 'Date record created',
                        'label' => 'LBL_DATE_ENTERED',
                    ),
                ),
                1 => array(
                    0 => array(
                        'name' => 'modified_by_name',
                        'label' => 'LBL_MODIFIED_NAME',
                    ),
                    1 => array(
                        'name' => 'date_modified',
                        'comment' => 'Date record last modified',
                        'label' => 'LBL_DATE_MODIFIED',
                    ),
                ),
            ),
        ),
    ),
);
