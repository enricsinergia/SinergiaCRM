<?php
/**
 * This file is part of KReporter. KReporter is an enhancement developed
 * by Christian Knoll. All rights are (c) 2012 by Christian Knoll
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * You can contact Christian Knoll at info@kreporter.org
 */
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$customFunctionInclude = 'modules/KReports/KReportCustomFunctions.php';

$kreportEmailTemplate = 'dd457b9e-ec56-70c7-5b74-4d9c6d0938b6';
$kreportEmailSubject = 'K Reporter';
$kreportEmailBody = 'This is your scheduled Report';

// exculde Modules from Selection in Reports
$excludedModules = array(
    // 'Accounts',
    'ACL',
    'ACLActions',
    'ACLRoles',
    'Activities',
    'Administration',
    'Alerts',
    'AM_ProjectTemplates',
    'AM_TaskTemplates',
    'AOBH_BusinessHours',
    'AOD_Index',
    'AOD_IndexEvent',
    'AOK_Knowledge_Base_Categories',
    'AOK_KnowledgeBase',
    'AOP_Case_Events',
    'AOP_Case_Updates',
    'AOR_Charts',
    'AOR_Conditions',
    'AOR_Fields',
    'AOR_Reports',
    'AOR_Scheduled_Reports',
    //'AOS_Contracts',
    //'AOS_Invoices',
    'AOS_Line_Item_Groups',
    'AOS_PDF_Templates',
    //'AOS_Product_Categories',
    //'AOS_Products',
    //'AOS_Products_Quotes',
    //'AOS_Quotes',
    'AOW_Actions',
    'AOW_Conditions',
    // 'AOW_Processed',
    'AOW_WorkFlow',
    'Audit',
    // 'Bugs',
    'Calendar',
    // 'Calls',
    'Calls_Reschedule',
    // 'CampaignLog',
    // 'Campaigns',
    'CampaignTrackers',
    // 'Cases',
    'Charts',
    'Configurator',
    'Connectors',
    // 'Contacts',
    'ContractTypes',
    'Currencies',
    'Delegates',
    'DHA_PlantillasDocumentos',
    'DocumentRevisions',
    // 'Documents',
    'DynamicFields',
    'EAPM',
    // 'EmailAddresses',
    'EmailMan',
    'EmailMarketing',
    'Emails',
    'EmailTemplates',
    'EmailText',
    // 'Employees',
    'FAQ',
    'Favorites',
    'Feeds',
    // 'FP_Event_Locations',
    'FP_events',
    'Groups',
    'Help',
    'History',
    'Home',
    'iCals',
    'iFrames',
    'Import',
    'InboundEmail',
    'JAccount',
    'jjwg_Address_Cache',
    'jjwg_Areas',
    'jjwg_Maps',
    'jjwg_Markers',
    'jjwp_Partners',
    'KBDocuments',
    'KReports',
    'LabelEditor',
    // 'Leads',
    'Library',
    'MailMerge',
    // 'Meetings',
    'MergeRecords',
    'ModuleBuilder',
    'MySettings',
    'Newsletters',
    // 'Notes',
    'Notifications',
    'OAuth2Clients',
    'OAuth2Tokens',
    'OAuthKeys',
    'OAuthTokens',
    // 'Opportunities',
    'OptimisticLock',
    'OutboundEmailAccounts',
    // 'Project',
    // 'ProjectTask',
    // 'ProspectLists',
    'Prospects',
    'Queues',
    'Relationships',
    'Releases',
    'Reminders',
    'Reminders_Invitees',
    'ResourceCalendar',
    'Roles',
    'SavedSearch',
    'Schedulers',
    'SchedulersJobs',
    // 'SecurityGroups',
    'SharedSecurityRulesActions',
    'SharedSecurityRulesFields',
    'SharedSecurityRules',
    'Spots',
    // 'stic_Accounts_Relationships',
    // 'stic_Attendances',
    // 'stic_Bookings',
    'stic_Bookings_Calendar',
    // 'stic_Contacts_Relationships',
    // 'stic_Events',
    // 'stic_FollowUps',
    // 'stic_Goals',
    'stic_Incorpora',
    'stic_Incorpora_Locations',
    // 'stic_Job_Applications',
    // 'stic_Job_Offers',
    // 'stic_Payment_Commitments',
    // 'stic_Payments',
    // 'stic_Personal_Environment',
    // 'stic_Registrations',
    // 'stic_Remittances',
    // 'stic_Sepe_Actions',
    // 'stic_Sepe_Files',
    // 'stic_Sepe_Incidents',
    // 'stic_Sessions',
    'stic_Settings',
    'stic_Validation_Actions',
    'stic_Web_Forms',
    'Studio',
    'SugarFavorites',
    'SugarFeed',
    // 'SurveyQuestionOptions',
    // 'SurveyQuestionResponses',
    // 'SurveyQuestions',
    // 'SurveyResponses',
    // 'Surveys',
    'Sync',
    // 'Tasks',
    'TemplateEditor',
    'TemplateSectionLine',
    'TimePeriods',
    'TrackerQueries',
    'Trackers',
    'TrackerSessions',
    'UpgradeWizard',
    'UserPreferences',
    // 'Users',
    'vCals',
);

?>
