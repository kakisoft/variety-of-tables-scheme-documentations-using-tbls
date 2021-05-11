# odoo

## Tables

| Name | Columns | Comment | Type |
| ---- | ------- | ------- | ---- |
| [public.ir_actions](public.ir_actions.md) | 10 |  | BASE TABLE |
| [public.ir_act_window](public.ir_act_window.md) | 25 |  | BASE TABLE |
| [public.ir_act_report_xml](public.ir_act_report_xml.md) | 19 |  | BASE TABLE |
| [public.ir_act_url](public.ir_act_url.md) | 12 |  | BASE TABLE |
| [public.ir_act_server](public.ir_act_server.md) | 29 |  | BASE TABLE |
| [public.ir_act_client](public.ir_act_client.md) | 15 |  | BASE TABLE |
| [public.res_users](public.res_users.md) | 22 |  | BASE TABLE |
| [public.res_groups](public.res_groups.md) | 10 |  | BASE TABLE |
| [public.ir_module_category](public.ir_module_category.md) | 11 |  | BASE TABLE |
| [public.ir_module_module](public.ir_module_module.md) | 29 |  | BASE TABLE |
| [public.ir_module_module_dependency](public.ir_module_module_dependency.md) | 7 |  | BASE TABLE |
| [public.ir_model_data](public.ir_model_data.md) | 12 |  | BASE TABLE |
| [public.res_currency](public.res_currency.md) | 13 |  | BASE TABLE |
| [public.res_company](public.res_company.md) | 88 |  | BASE TABLE |
| [public.res_partner](public.res_partner.md) | 69 |  | BASE TABLE |
| [public.ir_model](public.ir_model.md) | 14 | Models | BASE TABLE |
| [public.ir_model_fields](public.ir_model_fields.md) | 36 | Fields | BASE TABLE |
| [public.ir_model_fields_group_rel](public.ir_model_fields_group_rel.md) | 2 | RELATION BETWEEN ir_model_fields AND res_groups | BASE TABLE |
| [public.ir_model_constraint](public.ir_model_constraint.md) | 12 | Model Constraint | BASE TABLE |
| [public.ir_model_relation](public.ir_model_relation.md) | 10 | Relation Model | BASE TABLE |
| [public.ir_model_access](public.ir_model_access.md) | 13 | Model Access | BASE TABLE |
| [public.wizard_ir_model_menu_create](public.wizard_ir_model_menu_create.md) | 7 | Create Menu Wizard | BASE TABLE |
| [public.ir_sequence](public.ir_sequence.md) | 16 | Sequence | BASE TABLE |
| [public.ir_sequence_date_range](public.ir_sequence_date_range.md) | 9 | Sequence Date Range | BASE TABLE |
| [public.ir_ui_menu](public.ir_ui_menu.md) | 12 | Menu | BASE TABLE |
| [public.ir_ui_menu_group_rel](public.ir_ui_menu_group_rel.md) | 2 | RELATION BETWEEN ir_ui_menu AND res_groups | BASE TABLE |
| [public.ir_ui_view_custom](public.ir_ui_view_custom.md) | 8 | Custom View | BASE TABLE |
| [public.ir_ui_view](public.ir_ui_view.md) | 23 | View | BASE TABLE |
| [public.ir_ui_view_group_rel](public.ir_ui_view_group_rel.md) | 2 | RELATION BETWEEN ir_ui_view AND res_groups | BASE TABLE |
| [public.ir_act_window_group_rel](public.ir_act_window_group_rel.md) | 2 | RELATION BETWEEN ir_act_window AND res_groups | BASE TABLE |
| [public.ir_act_window_view](public.ir_act_window_view.md) | 10 | Action Window View | BASE TABLE |
| [public.rel_server_actions](public.rel_server_actions.md) | 2 | RELATION BETWEEN ir_act_server AND ir_act_server | BASE TABLE |
| [public.ir_server_object_lines](public.ir_server_object_lines.md) | 9 | Server Action value mapping | BASE TABLE |
| [public.ir_actions_todo](public.ir_actions_todo.md) | 9 | Configuration Wizards | BASE TABLE |
| [public.res_groups_report_rel](public.res_groups_report_rel.md) | 2 | RELATION BETWEEN ir_act_report_xml AND res_groups | BASE TABLE |
| [public.ir_attachment](public.ir_attachment.md) | 28 | Attachment | BASE TABLE |
| [public.ir_cron](public.ir_cron.md) | 15 | Scheduled Actions | BASE TABLE |
| [public.ir_filters](public.ir_filters.md) | 14 | Filters | BASE TABLE |
| [public.ir_default](public.ir_default.md) | 10 | Default Values | BASE TABLE |
| [public.ir_translation](public.ir_translation.md) | 10 | Translation | BASE TABLE |
| [public.ir_exports](public.ir_exports.md) | 7 | Exports | BASE TABLE |
| [public.ir_exports_line](public.ir_exports_line.md) | 7 | Exports Line | BASE TABLE |
| [public.ir_rule](public.ir_rule.md) | 14 | Record Rule | BASE TABLE |
| [public.rule_group_rel](public.rule_group_rel.md) | 2 | RELATION BETWEEN ir_rule AND res_groups | BASE TABLE |
| [public.ir_config_parameter](public.ir_config_parameter.md) | 7 | System Parameter | BASE TABLE |
| [public.ir_mail_server](public.ir_mail_server.md) | 14 | Mail Server | BASE TABLE |
| [public.ir_logging](public.ir_logging.md) | 13 | Logging | BASE TABLE |
| [public.ir_property](public.ir_property.md) | 16 | Company Property | BASE TABLE |
| [public.ir_module_module_exclusion](public.ir_module_module_exclusion.md) | 7 | Module exclusion | BASE TABLE |
| [public.ir_demo](public.ir_demo.md) | 5 | Demo | BASE TABLE |
| [public.ir_demo_failure](public.ir_demo_failure.md) | 8 | Demo failure | BASE TABLE |
| [public.ir_demo_failure_wizard](public.ir_demo_failure_wizard.md) | 5 | Demo Failure wizard | BASE TABLE |
| [public.report_paperformat](public.report_paperformat.md) | 18 | Paper Format Config | BASE TABLE |
| [public.res_country](public.res_country.md) | 13 | Country | BASE TABLE |
| [public.res_country_res_country_group_rel](public.res_country_res_country_group_rel.md) | 2 | RELATION BETWEEN res_country AND res_country_group | BASE TABLE |
| [public.res_country_group](public.res_country_group.md) | 6 | Country Group | BASE TABLE |
| [public.res_country_state](public.res_country_state.md) | 8 | Country state | BASE TABLE |
| [public.res_lang](public.res_lang.md) | 17 | Languages | BASE TABLE |
| [public.res_partner_category](public.res_partner_category.md) | 10 | Partner Tags | BASE TABLE |
| [public.res_partner_res_partner_category_rel](public.res_partner_res_partner_category_rel.md) | 2 | RELATION BETWEEN res_partner_category AND res_partner | BASE TABLE |
| [public.res_partner_title](public.res_partner_title.md) | 7 | Partner Title | BASE TABLE |
| [public.res_partner_industry](public.res_partner_industry.md) | 8 | Industry | BASE TABLE |
| [public.res_bank](public.res_bank.md) | 16 | Bank | BASE TABLE |
| [public.res_partner_bank](public.res_partner_bank.md) | 13 | Bank Accounts | BASE TABLE |
| [public.res_config](public.res_config.md) | 5 | Config | BASE TABLE |
| [public.res_config_installer](public.res_config_installer.md) | 5 | Config Installer | BASE TABLE |
| [public.res_config_settings](public.res_config_settings.md) | 165 | Config Settings | BASE TABLE |
| [public.res_currency_rate](public.res_currency_rate.md) | 9 | Currency Rate | BASE TABLE |
| [public.res_company_users_rel](public.res_company_users_rel.md) | 2 | RELATION BETWEEN res_company AND res_users | BASE TABLE |
| [public.res_groups_users_rel](public.res_groups_users_rel.md) | 2 | RELATION BETWEEN res_groups AND res_users | BASE TABLE |
| [public.res_groups_implied_rel](public.res_groups_implied_rel.md) | 2 | RELATION BETWEEN res_groups AND res_groups | BASE TABLE |
| [public.res_users_log](public.res_users_log.md) | 5 | Users Log | BASE TABLE |
| [public.change_password_wizard](public.change_password_wizard.md) | 5 | Change Password Wizard | BASE TABLE |
| [public.change_password_user](public.change_password_user.md) | 9 | User, Change Password Wizard | BASE TABLE |
| [public.base_module_update](public.base_module_update.md) | 8 | Update Module | BASE TABLE |
| [public.base_language_install](public.base_language_install.md) | 8 | Install Language | BASE TABLE |
| [public.base_language_import](public.base_language_import.md) | 10 | Language Import | BASE TABLE |
| [public.base_module_upgrade](public.base_module_upgrade.md) | 6 | Upgrade Module | BASE TABLE |
| [public.base_module_uninstall](public.base_module_uninstall.md) | 7 | Module Uninstall | BASE TABLE |
| [public.base_language_export](public.base_language_export.md) | 10 | Language Export | BASE TABLE |
| [public.rel_modules_langexport](public.rel_modules_langexport.md) | 2 | RELATION BETWEEN base_language_export AND ir_module_module | BASE TABLE |
| [public.base_update_translations](public.base_update_translations.md) | 6 | Update Translations | BASE TABLE |
| [public.base_partner_merge_line](public.base_partner_merge_line.md) | 8 | Merge Partner Line | BASE TABLE |
| [public.base_partner_merge_automatic_wizard](public.base_partner_merge_automatic_wizard.md) | 17 | Merge Partner Wizard | BASE TABLE |
| [public.base_partner_merge_automatic_wizard_res_partner_rel](public.base_partner_merge_automatic_wizard_res_partner_rel.md) | 2 | RELATION BETWEEN base_partner_merge_automatic_wizard AND res_partner | BASE TABLE |
| [public.report_layout](public.report_layout.md) | 8 | Report Layout | BASE TABLE |
| [public.base_import_mapping](public.base_import_mapping.md) | 8 | Base Import Mapping | BASE TABLE |
| [public.base_import_import](public.base_import_import.md) | 9 | Base Import | BASE TABLE |
| [public.base_import_tests_models_char](public.base_import_tests_models_char.md) | 6 | Tests : Base Import Model, Character | BASE TABLE |
| [public.base_import_tests_models_char_required](public.base_import_tests_models_char_required.md) | 6 | Tests : Base Import Model, Character required | BASE TABLE |
| [public.base_import_tests_models_char_readonly](public.base_import_tests_models_char_readonly.md) | 6 | Tests : Base Import Model, Character readonly | BASE TABLE |
| [public.base_import_tests_models_char_states](public.base_import_tests_models_char_states.md) | 6 | Tests : Base Import Model, Character states | BASE TABLE |
| [public.base_import_tests_models_char_noreadonly](public.base_import_tests_models_char_noreadonly.md) | 6 | Tests : Base Import Model, Character No readonly | BASE TABLE |
| [public.base_import_tests_models_char_stillreadonly](public.base_import_tests_models_char_stillreadonly.md) | 6 | Tests : Base Import Model, Character still readonly | BASE TABLE |
| [public.base_import_tests_models_m2o](public.base_import_tests_models_m2o.md) | 6 | Tests : Base Import Model, Many to One | BASE TABLE |
| [public.base_import_tests_models_m2o_related](public.base_import_tests_models_m2o_related.md) | 6 | Tests : Base Import Model, Many to One related | BASE TABLE |
| [public.base_import_tests_models_m2o_required](public.base_import_tests_models_m2o_required.md) | 6 | Tests : Base Import Model, Many to One required | BASE TABLE |
| [public.base_import_tests_models_m2o_required_related](public.base_import_tests_models_m2o_required_related.md) | 6 | Tests : Base Import Model, Many to One required related | BASE TABLE |
| [public.base_import_tests_models_o2m](public.base_import_tests_models_o2m.md) | 5 | Tests : Base Import Model, One to Many | BASE TABLE |
| [public.base_import_tests_models_o2m_child](public.base_import_tests_models_o2m_child.md) | 7 | Tests : Base Import Model, One to Many child | BASE TABLE |
| [public.base_import_tests_models_preview](public.base_import_tests_models_preview.md) | 8 | Tests : Base Import Model Preview | BASE TABLE |
| [public.base_import_tests_models_float](public.base_import_tests_models_float.md) | 8 | Tests: Base Import Model Float | BASE TABLE |
| [public.base_import_tests_models_complex](public.base_import_tests_models_complex.md) | 11 | Tests: Base Import Model Complex | BASE TABLE |
| [public.web_editor_converter_test](public.web_editor_converter_test.md) | 17 | Web Editor Converter Test | BASE TABLE |
| [public.web_editor_converter_test_sub](public.web_editor_converter_test_sub.md) | 6 | Web Editor Converter Subtest | BASE TABLE |
| [public.web_tour_tour](public.web_tour_tour.md) | 3 | Tours | BASE TABLE |
| [public.iap_account](public.iap_account.md) | 8 | IAP Account | BASE TABLE |
| [public.resource_calendar](public.resource_calendar.md) | 9 | Resource Working Time | BASE TABLE |
| [public.resource_calendar_attendance](public.resource_calendar_attendance.md) | 13 | Work Detail | BASE TABLE |
| [public.resource_resource](public.resource_resource.md) | 13 | Resources | BASE TABLE |
| [public.resource_calendar_leaves](public.resource_calendar_leaves.md) | 12 | Resource Leaves Detail | BASE TABLE |
| [public.resource_test](public.resource_test.md) | 9 | Test Resource Model | BASE TABLE |
| [public.utm_medium](public.utm_medium.md) | 7 | UTM Medium | BASE TABLE |
| [public.utm_campaign](public.utm_campaign.md) | 6 | UTM Campaign | BASE TABLE |
| [public.utm_source](public.utm_source.md) | 6 | UTM Source | BASE TABLE |
| [public.bus_bus](public.bus_bus.md) | 7 | Communication Bus | BASE TABLE |
| [public.bus_presence](public.bus_presence.md) | 5 | User Presence | BASE TABLE |
| [public.mail_message_subtype](public.mail_message_subtype.md) | 14 | Message subtypes | BASE TABLE |
| [public.mail_tracking_value](public.mail_tracking_value.md) | 22 | Mail Tracking Value | BASE TABLE |
| [public.mail_alias](public.mail_alias.md) | 13 | Email Aliases | BASE TABLE |
| [public.mail_followers](public.mail_followers.md) | 5 | Document Followers | BASE TABLE |
| [public.mail_followers_mail_message_subtype_rel](public.mail_followers_mail_message_subtype_rel.md) | 2 | RELATION BETWEEN mail_followers AND mail_message_subtype | BASE TABLE |
| [public.mail_message_res_partner_needaction_rel](public.mail_message_res_partner_needaction_rel.md) | 9 | Message Notifications | BASE TABLE |
| [public.mail_message](public.mail_message.md) | 26 | Message | BASE TABLE |
| [public.message_attachment_rel](public.message_attachment_rel.md) | 2 | RELATION BETWEEN mail_message AND ir_attachment | BASE TABLE |
| [public.mail_message_res_partner_rel](public.mail_message_res_partner_rel.md) | 2 | RELATION BETWEEN mail_message AND res_partner | BASE TABLE |
| [public.mail_message_mail_channel_rel](public.mail_message_mail_channel_rel.md) | 2 | RELATION BETWEEN mail_message AND mail_channel | BASE TABLE |
| [public.mail_message_res_partner_starred_rel](public.mail_message_res_partner_starred_rel.md) | 2 | RELATION BETWEEN mail_message AND res_partner | BASE TABLE |
| [public.mail_activity_type](public.mail_activity_type.md) | 18 | Activity Type | BASE TABLE |
| [public.mail_activity_rel](public.mail_activity_rel.md) | 2 | RELATION BETWEEN mail_activity_type AND mail_activity_type | BASE TABLE |
| [public.mail_activity_type_mail_template_rel](public.mail_activity_type_mail_template_rel.md) | 2 | RELATION BETWEEN mail_activity_type AND mail_template | BASE TABLE |
| [public.mail_activity](public.mail_activity.md) | 20 | Activity | BASE TABLE |
| [public.mail_mail](public.mail_mail.md) | 17 | Outgoing Mails | BASE TABLE |
| [public.mail_mail_res_partner_rel](public.mail_mail_res_partner_rel.md) | 2 | RELATION BETWEEN mail_mail AND res_partner | BASE TABLE |
| [public.mail_blacklist](public.mail_blacklist.md) | 8 | Mail Blacklist | BASE TABLE |
| [public.mail_channel_partner](public.mail_channel_partner.md) | 11 | Listeners of a Channel | BASE TABLE |
| [public.mail_moderation](public.mail_moderation.md) | 8 | Channel black/white list | BASE TABLE |
| [public.mail_channel](public.mail_channel.md) | 19 | Discussion Channel | BASE TABLE |
| [public.mail_channel_res_groups_rel](public.mail_channel_res_groups_rel.md) | 2 | RELATION BETWEEN mail_channel AND res_groups | BASE TABLE |
| [public.mail_channel_moderator_rel](public.mail_channel_moderator_rel.md) | 2 | RELATION BETWEEN mail_channel AND res_users | BASE TABLE |
| [public.mail_template](public.mail_template.md) | 29 | Email Templates | BASE TABLE |
| [public.email_template_attachment_rel](public.email_template_attachment_rel.md) | 2 | RELATION BETWEEN mail_template AND ir_attachment | BASE TABLE |
| [public.mail_shortcode](public.mail_shortcode.md) | 8 | Canned Response / Shortcode | BASE TABLE |
| [public.ir_act_server_res_partner_rel](public.ir_act_server_res_partner_rel.md) | 2 | RELATION BETWEEN ir_act_server AND res_partner | BASE TABLE |
| [public.ir_act_server_mail_channel_rel](public.ir_act_server_mail_channel_rel.md) | 2 | RELATION BETWEEN ir_act_server AND mail_channel | BASE TABLE |
| [public.mail_wizard_invite](public.mail_wizard_invite.md) | 9 | Invite wizard | BASE TABLE |
| [public.mail_wizard_invite_res_partner_rel](public.mail_wizard_invite_res_partner_rel.md) | 2 | RELATION BETWEEN mail_wizard_invite AND res_partner | BASE TABLE |
| [public.mail_channel_mail_wizard_invite_rel](public.mail_channel_mail_wizard_invite_rel.md) | 2 | RELATION BETWEEN mail_wizard_invite AND mail_channel | BASE TABLE |
| [public.mail_compose_message](public.mail_compose_message.md) | 34 | Email composition wizard | BASE TABLE |
| [public.mail_compose_message_res_partner_rel](public.mail_compose_message_res_partner_rel.md) | 2 | RELATION BETWEEN mail_compose_message AND res_partner | BASE TABLE |
| [public.mail_compose_message_ir_attachments_rel](public.mail_compose_message_ir_attachments_rel.md) | 2 | RELATION BETWEEN mail_compose_message AND ir_attachment | BASE TABLE |
| [public.mail_resend_message](public.mail_resend_message.md) | 6 | Email resend wizard | BASE TABLE |
| [public.mail_message_res_partner_needaction_rel_mail_resend_message_rel](public.mail_message_res_partner_needaction_rel_mail_resend_message_rel.md) | 2 | RELATION BETWEEN mail_resend_message AND mail_message_res_partner_needaction_rel | BASE TABLE |
| [public.mail_resend_partner](public.mail_resend_partner.md) | 9 | Partner with additionnal information for mail resend | BASE TABLE |
| [public.mail_resend_cancel](public.mail_resend_cancel.md) | 6 | Dismiss notification for resend by model | BASE TABLE |
| [public.email_template_preview](public.email_template_preview.md) | 30 | Email Template Preview | BASE TABLE |
| [public.email_template_preview_res_partner_rel](public.email_template_preview_res_partner_rel.md) | 2 | RELATION BETWEEN email_template_preview AND res_partner | BASE TABLE |
| [public.calendar_contacts](public.calendar_contacts.md) | 8 | Calendar Contacts | BASE TABLE |
| [public.calendar_attendee](public.calendar_attendee.md) | 12 | Calendar Attendee Information | BASE TABLE |
| [public.calendar_alarm](public.calendar_alarm.md) | 10 | Event Alarm | BASE TABLE |
| [public.calendar_event_type](public.calendar_event_type.md) | 6 | Event Meeting Type | BASE TABLE |
| [public.calendar_event](public.calendar_event.md) | 47 | Event | BASE TABLE |
| [public.meeting_category_rel](public.meeting_category_rel.md) | 2 | RELATION BETWEEN calendar_event AND calendar_event_type | BASE TABLE |
| [public.calendar_event_res_partner_rel](public.calendar_event_res_partner_rel.md) | 2 | RELATION BETWEEN calendar_event AND res_partner | BASE TABLE |
| [public.calendar_alarm_calendar_event_rel](public.calendar_alarm_calendar_event_rel.md) | 2 | RELATION BETWEEN calendar_event AND calendar_alarm | BASE TABLE |
| [public.fetchmail_server](public.fetchmail_server.md) | 21 | Incoming Mail Server | BASE TABLE |
| [public.res_partner_autocomplete_sync](public.res_partner_autocomplete_sync.md) | 7 | Partner Autocomplete Sync | BASE TABLE |
| [public.portal_share](public.portal_share.md) | 8 | Portal Sharing | BASE TABLE |
| [public.portal_share_res_partner_rel](public.portal_share_res_partner_rel.md) | 2 | RELATION BETWEEN portal_share AND res_partner | BASE TABLE |
| [public.portal_wizard](public.portal_wizard.md) | 6 | Grant Portal Access | BASE TABLE |
| [public.portal_wizard_user](public.portal_wizard_user.md) | 10 | Portal User Config | BASE TABLE |
| [public.crm_team](public.crm_team.md) | 24 | Sales Team | BASE TABLE |
| [public.team_favorite_user_rel](public.team_favorite_user_rel.md) | 2 | RELATION BETWEEN crm_team AND res_users | BASE TABLE |
| [public.sms_send_sms](public.sms_send_sms.md) | 7 | Send SMS | BASE TABLE |
| [public.snailmail_letter](public.snailmail_letter.md) | 16 | Snailmail Letter | BASE TABLE |
| [public.digest_digest](public.digest_digest.md) | 20 | Digest | BASE TABLE |
| [public.digest_digest_res_users_rel](public.digest_digest_res_users_rel.md) | 2 | RELATION BETWEEN digest_digest AND res_users | BASE TABLE |
| [public.digest_tip](public.digest_tip.md) | 8 | Digest Tips | BASE TABLE |
| [public.digest_tip_res_users_rel](public.digest_tip_res_users_rel.md) | 2 | RELATION BETWEEN digest_tip AND res_users | BASE TABLE |
| [public.crm_stage](public.crm_stage.md) | 13 | CRM Stages | BASE TABLE |
| [public.crm_lead](public.crm_lead.md) | 49 | Lead/Opportunity | BASE TABLE |
| [public.crm_lead_tag_rel](public.crm_lead_tag_rel.md) | 2 | RELATION BETWEEN crm_lead AND crm_lead_tag | BASE TABLE |
| [public.crm_lead_tag](public.crm_lead_tag.md) | 7 | Lead Tag | BASE TABLE |
| [public.crm_lost_reason](public.crm_lost_reason.md) | 7 | Opp. Lost Reason | BASE TABLE |
| [public.crm_activity_report](public.crm_activity_report.md) | 16 |  | VIEW |
| [public.crm_lead_lost](public.crm_lead_lost.md) | 6 | Get Lost Reason | BASE TABLE |
| [public.crm_partner_binding](public.crm_partner_binding.md) | 7 | Partner linking/binding in CRM wizard | BASE TABLE |
| [public.crm_lead2opportunity_partner](public.crm_lead2opportunity_partner.md) | 10 | Convert Lead to Opportunity (not in mass) | BASE TABLE |
| [public.crm_lead_crm_lead2opportunity_partner_rel](public.crm_lead_crm_lead2opportunity_partner_rel.md) | 2 | RELATION BETWEEN crm_lead2opportunity_partner AND crm_lead | BASE TABLE |
| [public.crm_lead2opportunity_partner_mass](public.crm_lead2opportunity_partner_mass.md) | 12 | Convert Lead to Opportunity (in mass) | BASE TABLE |
| [public.crm_lead2opportunity_partner_mass_res_users_rel](public.crm_lead2opportunity_partner_mass_res_users_rel.md) | 2 | RELATION BETWEEN crm_lead2opportunity_partner_mass AND res_users | BASE TABLE |
| [public.crm_lead_crm_lead2opportunity_partner_mass_rel](public.crm_lead_crm_lead2opportunity_partner_mass_rel.md) | 2 | RELATION BETWEEN crm_lead2opportunity_partner_mass AND crm_lead | BASE TABLE |
| [public.crm_merge_opportunity](public.crm_merge_opportunity.md) | 7 | Merge Opportunities | BASE TABLE |
| [public.merge_opportunity_rel](public.merge_opportunity_rel.md) | 2 | RELATION BETWEEN crm_merge_opportunity AND crm_lead | BASE TABLE |
| [public.website](public.website.md) | 38 | Website | BASE TABLE |
| [public.website_country_group_rel](public.website_country_group_rel.md) | 2 | RELATION BETWEEN website AND res_country_group | BASE TABLE |
| [public.website_lang_rel](public.website_lang_rel.md) | 2 | RELATION BETWEEN website AND res_lang | BASE TABLE |
| [public.website_page](public.website_page.md) | 14 | Page | BASE TABLE |
| [public.website_menu](public.website_menu.md) | 14 | Website Menu | BASE TABLE |
| [public.website_redirect](public.website_redirect.md) | 11 | Website Redirect | BASE TABLE |
| [public.base_language_install_website_rel](public.base_language_install_website_rel.md) | 2 | RELATION BETWEEN base_language_install AND website | BASE TABLE |
| [public.theme_ir_ui_view](public.theme_ir_ui_view.md) | 14 | Theme UI View | BASE TABLE |
| [public.theme_ir_attachment](public.theme_ir_attachment.md) | 8 | Theme Attachments | BASE TABLE |
| [public.theme_website_menu](public.theme_website_menu.md) | 11 | Website Theme Menu | BASE TABLE |
| [public.theme_website_page](public.theme_website_page.md) | 8 | Website Theme Page | BASE TABLE |
| [public.decimal_precision](public.decimal_precision.md) | 7 | Decimal Precision | BASE TABLE |
| [public.decimal_precision_test](public.decimal_precision_test.md) | 8 | Decimal Precision Test | BASE TABLE |
| [public.uom_category](public.uom_category.md) | 8 | Product UoM Categories | BASE TABLE |
| [public.uom_uom](public.uom_uom.md) | 12 | Product Unit of Measure | BASE TABLE |
| [public.account_analytic_distribution](public.account_analytic_distribution.md) | 8 | Analytic Account Distribution | BASE TABLE |
| [public.account_analytic_tag](public.account_analytic_tag.md) | 10 | Analytic Tags | BASE TABLE |
| [public.account_analytic_group](public.account_analytic_group.md) | 11 | Analytic Categories | BASE TABLE |
| [public.account_analytic_account](public.account_analytic_account.md) | 12 | Analytic Account | BASE TABLE |
| [public.account_analytic_line](public.account_analytic_line.md) | 22 | Analytic Line | BASE TABLE |
| [public.account_analytic_line_tag_rel](public.account_analytic_line_tag_rel.md) | 2 | RELATION BETWEEN account_analytic_line AND account_analytic_tag | BASE TABLE |
| [public.product_template](public.product_template.md) | 59 | Product Template | BASE TABLE |
| [public.product_category](public.product_category.md) | 10 | Product Category | BASE TABLE |
| [public.product_price_history](public.product_price_history.md) | 9 | Product Price List History | BASE TABLE |
| [public.product_product](public.product_product.md) | 12 | Product | BASE TABLE |
| [public.product_attribute_value_product_product_rel](public.product_attribute_value_product_product_rel.md) | 2 | RELATION BETWEEN product_product AND product_attribute_value | BASE TABLE |
| [public.product_packaging](public.product_packaging.md) | 10 | Product Packaging | BASE TABLE |
| [public.product_supplierinfo](public.product_supplierinfo.md) | 18 | Supplier Pricelist | BASE TABLE |
| [public.product_attribute](public.product_attribute.md) | 9 | Product Attribute | BASE TABLE |
| [public.product_attribute_value](public.product_attribute_value.md) | 10 | Attribute Value | BASE TABLE |
| [public.product_template_attribute_line](public.product_template_attribute_line.md) | 7 | Product Template Attribute Line | BASE TABLE |
| [public.product_attribute_value_product_template_attribute_line_rel](public.product_attribute_value_product_template_attribute_line_rel.md) | 2 | RELATION BETWEEN product_template_attribute_line AND product_attribute_value | BASE TABLE |
| [public.product_template_attribute_value](public.product_template_attribute_value.md) | 8 | Product Attribute Value | BASE TABLE |
| [public.product_template_attribute_exclusion](public.product_template_attribute_exclusion.md) | 7 | Product Template Attribute Exclusion | BASE TABLE |
| [public.product_attr_exclusion_value_ids_rel](public.product_attr_exclusion_value_ids_rel.md) | 2 | RELATION BETWEEN product_template_attribute_exclusion AND product_template_attribute_value | BASE TABLE |
| [public.product_pricelist](public.product_pricelist.md) | 14 | Pricelist | BASE TABLE |
| [public.res_country_group_pricelist_rel](public.res_country_group_pricelist_rel.md) | 2 | RELATION BETWEEN product_pricelist AND res_country_group | BASE TABLE |
| [public.product_pricelist_item](public.product_pricelist_item.md) | 25 | Pricelist Item | BASE TABLE |
| [public.product_price_list](public.product_price_list.md) | 11 | Product Price per Unit Based on Pricelist Version | BASE TABLE |
| [public.account_fiscal_position](public.account_fiscal_position.md) | 16 | Fiscal Position | BASE TABLE |
| [public.account_fiscal_position_res_country_state_rel](public.account_fiscal_position_res_country_state_rel.md) | 2 | RELATION BETWEEN account_fiscal_position AND res_country_state | BASE TABLE |
| [public.account_fiscal_position_tax](public.account_fiscal_position_tax.md) | 8 | Tax Mapping of Fiscal Position | BASE TABLE |
| [public.account_fiscal_position_account](public.account_fiscal_position_account.md) | 8 | Accounts Mapping of Fiscal Position | BASE TABLE |
| [public.account_account_type](public.account_account_type.md) | 10 | Account Type | BASE TABLE |
| [public.account_account_tag](public.account_account_tag.md) | 9 | Account Tag | BASE TABLE |
| [public.account_account](public.account_account.md) | 17 | Account | BASE TABLE |
| [public.account_account_tax_default_rel](public.account_account_tax_default_rel.md) | 2 | RELATION BETWEEN account_account AND account_tax | BASE TABLE |
| [public.account_account_account_tag](public.account_account_account_tag.md) | 2 | RELATION BETWEEN account_account AND account_account_tag | BASE TABLE |
| [public.account_group](public.account_group.md) | 9 | Account Group | BASE TABLE |
| [public.account_journal](public.account_journal.md) | 31 | Journal | BASE TABLE |
| [public.account_journal_type_rel](public.account_journal_type_rel.md) | 2 | RELATION BETWEEN account_journal AND account_account_type | BASE TABLE |
| [public.account_account_type_rel](public.account_account_type_rel.md) | 2 | RELATION BETWEEN account_journal AND account_account | BASE TABLE |
| [public.account_journal_inbound_payment_method_rel](public.account_journal_inbound_payment_method_rel.md) | 2 | RELATION BETWEEN account_journal AND account_payment_method | BASE TABLE |
| [public.account_journal_outbound_payment_method_rel](public.account_journal_outbound_payment_method_rel.md) | 2 | RELATION BETWEEN account_journal AND account_payment_method | BASE TABLE |
| [public.account_tax_group](public.account_tax_group.md) | 7 | Tax Group | BASE TABLE |
| [public.account_tax](public.account_tax.md) | 22 | Tax | BASE TABLE |
| [public.account_tax_filiation_rel](public.account_tax_filiation_rel.md) | 2 | RELATION BETWEEN account_tax AND account_tax | BASE TABLE |
| [public.account_tax_account_tag](public.account_tax_account_tag.md) | 2 | RELATION BETWEEN account_tax AND account_account_tag | BASE TABLE |
| [public.account_reconcile_model](public.account_reconcile_model.md) | 37 | Preset to create journal entries during a invoices and payments matching | BASE TABLE |
| [public.account_journal_account_reconcile_model_rel](public.account_journal_account_reconcile_model_rel.md) | 2 | RELATION BETWEEN account_reconcile_model AND account_journal | BASE TABLE |
| [public.account_reconcile_model_res_partner_rel](public.account_reconcile_model_res_partner_rel.md) | 2 | RELATION BETWEEN account_reconcile_model AND res_partner | BASE TABLE |
| [public.account_reconcile_model_res_partner_category_rel](public.account_reconcile_model_res_partner_category_rel.md) | 2 | RELATION BETWEEN account_reconcile_model AND res_partner_category | BASE TABLE |
| [public.account_analytic_tag_account_reconcile_model_rel](public.account_analytic_tag_account_reconcile_model_rel.md) | 2 | RELATION BETWEEN account_reconcile_model AND account_analytic_tag | BASE TABLE |
| [public.account_payment_method](public.account_payment_method.md) | 8 | Payment Methods | BASE TABLE |
| [public.account_register_payments](public.account_register_payments.md) | 20 | Register Payments | BASE TABLE |
| [public.account_invoice_account_register_payments_rel](public.account_invoice_account_register_payments_rel.md) | 2 | RELATION BETWEEN account_register_payments AND account_invoice | BASE TABLE |
| [public.account_payment](public.account_payment.md) | 27 | Payments | BASE TABLE |
| [public.account_invoice_payment_rel](public.account_invoice_payment_rel.md) | 2 | RELATION BETWEEN account_payment AND account_invoice | BASE TABLE |
| [public.account_invoice](public.account_invoice.md) | 55 | Invoice | BASE TABLE |
| [public.account_invoice_account_move_line_rel](public.account_invoice_account_move_line_rel.md) | 2 | RELATION BETWEEN account_invoice AND account_move_line | BASE TABLE |
| [public.account_invoice_line](public.account_invoice_line.md) | 25 | Invoice Line | BASE TABLE |
| [public.account_invoice_line_tax](public.account_invoice_line_tax.md) | 2 | RELATION BETWEEN account_invoice_line AND account_tax | BASE TABLE |
| [public.account_analytic_tag_account_invoice_line_rel](public.account_analytic_tag_account_invoice_line_rel.md) | 2 | RELATION BETWEEN account_invoice_line AND account_analytic_tag | BASE TABLE |
| [public.account_invoice_tax](public.account_invoice_tax.md) | 17 | Invoice Tax | BASE TABLE |
| [public.account_analytic_tag_account_invoice_tax_rel](public.account_analytic_tag_account_invoice_tax_rel.md) | 2 | RELATION BETWEEN account_invoice_tax AND account_analytic_tag | BASE TABLE |
| [public.account_payment_term](public.account_payment_term.md) | 10 | Payment Terms | BASE TABLE |
| [public.account_payment_term_line](public.account_payment_term_line.md) | 12 | Payment Terms Line | BASE TABLE |
| [public.account_cashbox_line](public.account_cashbox_line.md) | 9 | CashBox Line | BASE TABLE |
| [public.account_bank_statement_cashbox](public.account_bank_statement_cashbox.md) | 5 | Bank Statement Cashbox | BASE TABLE |
| [public.account_bank_statement_closebalance](public.account_bank_statement_closebalance.md) | 5 | Bank Statement Closing Balance | BASE TABLE |
| [public.account_bank_statement](public.account_bank_statement.md) | 23 | Bank Statement | BASE TABLE |
| [public.account_bank_statement_line](public.account_bank_statement_line.md) | 24 | Bank Statement Line | BASE TABLE |
| [public.account_move](public.account_move.md) | 21 | Journal Entries | BASE TABLE |
| [public.account_move_line](public.account_move_line.md) | 41 | Journal Item | BASE TABLE |
| [public.account_move_line_account_tax_rel](public.account_move_line_account_tax_rel.md) | 2 | RELATION BETWEEN account_move_line AND account_tax | BASE TABLE |
| [public.account_analytic_tag_account_move_line_rel](public.account_analytic_tag_account_move_line_rel.md) | 2 | RELATION BETWEEN account_move_line AND account_analytic_tag | BASE TABLE |
| [public.account_partial_reconcile](public.account_partial_reconcile.md) | 13 | Partial Reconcile | BASE TABLE |
| [public.account_full_reconcile](public.account_full_reconcile.md) | 7 | Full Reconcile | BASE TABLE |
| [public.account_account_template](public.account_account_template.md) | 14 | Templates for Accounts | BASE TABLE |
| [public.account_account_template_tax_rel](public.account_account_template_tax_rel.md) | 2 | RELATION BETWEEN account_account_template AND account_tax_template | BASE TABLE |
| [public.account_account_template_account_tag](public.account_account_template_account_tag.md) | 2 | RELATION BETWEEN account_account_template AND account_account_tag | BASE TABLE |
| [public.account_chart_template](public.account_chart_template.md) | 26 | Account Chart Template | BASE TABLE |
| [public.account_tax_template](public.account_tax_template.md) | 22 | Templates for Taxes | BASE TABLE |
| [public.account_tax_template_filiation_rel](public.account_tax_template_filiation_rel.md) | 2 | RELATION BETWEEN account_tax_template AND account_tax_template | BASE TABLE |
| [public.account_account_tag_account_tax_template_rel](public.account_account_tag_account_tax_template_rel.md) | 2 | RELATION BETWEEN account_tax_template AND account_account_tag | BASE TABLE |
| [public.account_fiscal_position_template](public.account_fiscal_position_template.md) | 15 | Template for Fiscal Position | BASE TABLE |
| [public.account_fiscal_position_template_res_country_state_rel](public.account_fiscal_position_template_res_country_state_rel.md) | 2 | RELATION BETWEEN account_fiscal_position_template AND res_country_state | BASE TABLE |
| [public.account_fiscal_position_tax_template](public.account_fiscal_position_tax_template.md) | 8 | Tax Mapping Template of Fiscal Position | BASE TABLE |
| [public.account_fiscal_position_account_template](public.account_fiscal_position_account_template.md) | 8 | Accounts Mapping Template of Fiscal Position | BASE TABLE |
| [public.account_reconcile_model_template](public.account_reconcile_model_template.md) | 33 | Reconcile Model Template | BASE TABLE |
| [public.account_journal_account_reconcile_model_template_rel](public.account_journal_account_reconcile_model_template_rel.md) | 2 | RELATION BETWEEN account_reconcile_model_template AND account_journal | BASE TABLE |
| [public.account_reconcile_model_template_res_partner_rel](public.account_reconcile_model_template_res_partner_rel.md) | 2 | RELATION BETWEEN account_reconcile_model_template AND res_partner | BASE TABLE |
| [public.account_reconcile_model_template_res_partner_category_rel](public.account_reconcile_model_template_res_partner_category_rel.md) | 2 | RELATION BETWEEN account_reconcile_model_template AND res_partner_category | BASE TABLE |
| [public.product_taxes_rel](public.product_taxes_rel.md) | 2 | RELATION BETWEEN product_template AND account_tax | BASE TABLE |
| [public.product_supplier_taxes_rel](public.product_supplier_taxes_rel.md) | 2 | RELATION BETWEEN product_template AND account_tax | BASE TABLE |
| [public.account_fiscal_year](public.account_fiscal_year.md) | 9 | Fiscal Year | BASE TABLE |
| [public.account_cash_rounding](public.account_cash_rounding.md) | 11 | Account Cash Rounding | BASE TABLE |
| [public.account_incoterms](public.account_incoterms.md) | 8 | Incoterms | BASE TABLE |
| [public.account_invoice_import_wizard](public.account_invoice_import_wizard.md) | 6 | Import Your Vendor Bills from Files. | BASE TABLE |
| [public.account_invoice_import_wizard_ir_attachment_rel](public.account_invoice_import_wizard_ir_attachment_rel.md) | 2 | RELATION BETWEEN account_invoice_import_wizard AND ir_attachment | BASE TABLE |
| [public.account_unreconcile](public.account_unreconcile.md) | 5 | Account Unreconcile | BASE TABLE |
| [public.account_invoice_refund](public.account_invoice_refund.md) | 9 | Credit Note | BASE TABLE |
| [public.account_invoice_confirm](public.account_invoice_confirm.md) | 5 | Confirm the selected invoices | BASE TABLE |
| [public.validate_account_move](public.validate_account_move.md) | 5 | Validate Account Move | BASE TABLE |
| [public.cash_box_in](public.cash_box_in.md) | 8 | Cash Box In | BASE TABLE |
| [public.cash_box_out](public.cash_box_out.md) | 7 | Cash Box Out | BASE TABLE |
| [public.account_move_reversal](public.account_move_reversal.md) | 7 | Account Move Reversal | BASE TABLE |
| [public.account_common_report](public.account_common_report.md) | 9 | Account Common Report | BASE TABLE |
| [public.account_common_report_account_journal_rel](public.account_common_report_account_journal_rel.md) | 2 | RELATION BETWEEN account_common_report AND account_journal | BASE TABLE |
| [public.account_common_journal_report](public.account_common_journal_report.md) | 10 | Common Journal Report | BASE TABLE |
| [public.account_common_journal_report_account_journal_rel](public.account_common_journal_report_account_journal_rel.md) | 2 | RELATION BETWEEN account_common_journal_report AND account_journal | BASE TABLE |
| [public.account_print_journal](public.account_print_journal.md) | 11 | Account Print Journal | BASE TABLE |
| [public.account_journal_account_print_journal_rel](public.account_journal_account_print_journal_rel.md) | 2 | RELATION BETWEEN account_print_journal AND account_journal | BASE TABLE |
| [public.account_financial_year_op](public.account_financial_year_op.md) | 6 | Opening Balance of Financial Year | BASE TABLE |
| [public.account_setup_bank_manual_config](public.account_setup_bank_manual_config.md) | 8 | Bank setup manual config | BASE TABLE |
| [public.tax_adjustments_wizard](public.tax_adjustments_wizard.md) | 13 | Tax Adjustments Wizard | BASE TABLE |
| [public.account_invoice_send](public.account_invoice_send.md) | 12 | Account Invoice Send | BASE TABLE |
| [public.account_invoice_account_invoice_send_rel](public.account_invoice_account_invoice_send_rel.md) | 2 | RELATION BETWEEN account_invoice_send AND account_invoice | BASE TABLE |
| [public.account_bank_statement_import](public.account_bank_statement_import.md) | 7 | Import Bank Statement | BASE TABLE |
| [public.account_bank_statement_import_journal_creation](public.account_bank_statement_import_journal_creation.md) | 6 | Journal Creation on Bank Statement Import | BASE TABLE |
| [public.payment_acquirer](public.payment_acquirer.md) | 34 | Payment Acquirer | BASE TABLE |
| [public.payment_country_rel](public.payment_country_rel.md) | 2 | RELATION BETWEEN payment_acquirer AND res_country | BASE TABLE |
| [public.payment_acquirer_payment_icon_rel](public.payment_acquirer_payment_icon_rel.md) | 2 | RELATION BETWEEN payment_acquirer AND payment_icon | BASE TABLE |
| [public.payment_icon](public.payment_icon.md) | 6 | Payment Icon | BASE TABLE |
| [public.payment_transaction](public.payment_transaction.md) | 33 | Payment Transaction | BASE TABLE |
| [public.account_invoice_transaction_rel](public.account_invoice_transaction_rel.md) | 2 | RELATION BETWEEN payment_transaction AND account_invoice | BASE TABLE |
| [public.payment_token](public.payment_token.md) | 11 | Payment Token | BASE TABLE |
| [public.payment_acquirer_onboarding_wizard](public.payment_acquirer_onboarding_wizard.md) | 15 | Payment acquire onboarding wizard | BASE TABLE |
| [public.snailmail_letter_account_invoice_send_rel](public.snailmail_letter_account_invoice_send_rel.md) | 2 | RELATION BETWEEN account_invoice_send AND snailmail_letter | BASE TABLE |
| [public.rating_rating](public.rating_rating.md) | 22 | Rating | BASE TABLE |
| [public.sale_order_line_invoice_rel](public.sale_order_line_invoice_rel.md) | 2 | RELATION BETWEEN account_invoice_line AND sale_order_line | BASE TABLE |
| [public.product_optional_rel](public.product_optional_rel.md) | 2 | RELATION BETWEEN product_template AND product_template | BASE TABLE |
| [public.product_attribute_custom_value](public.product_attribute_custom_value.md) | 8 | Product Attribute Custom Value | BASE TABLE |
| [public.sale_order](public.sale_order.md) | 48 | Sale Order | BASE TABLE |
| [public.sale_order_transaction_rel](public.sale_order_transaction_rel.md) | 2 | RELATION BETWEEN sale_order AND payment_transaction | BASE TABLE |
| [public.sale_order_line](public.sale_order_line.md) | 40 | Sales Order Line | BASE TABLE |
| [public.account_tax_sale_order_line_rel](public.account_tax_sale_order_line_rel.md) | 2 | RELATION BETWEEN sale_order_line AND account_tax | BASE TABLE |
| [public.product_template_attribute_value_sale_order_line_rel](public.product_template_attribute_value_sale_order_line_rel.md) | 2 | RELATION BETWEEN sale_order_line AND product_template_attribute_value | BASE TABLE |
| [public.account_analytic_tag_sale_order_line_rel](public.account_analytic_tag_sale_order_line_rel.md) | 2 | RELATION BETWEEN sale_order_line AND account_analytic_tag | BASE TABLE |
| [public.account_invoice_report](public.account_invoice_report.md) | 31 |  | VIEW |
| [public.report_all_channels_sales](public.report_all_channels_sales.md) | 16 |  | VIEW |
| [public.sale_payment_acquirer_onboarding_wizard](public.sale_payment_acquirer_onboarding_wizard.md) | 15 | Sale Payment acquire onboarding wizard | BASE TABLE |
| [public.sale_advance_payment_inv](public.sale_advance_payment_inv.md) | 10 | Sales Advance Payment Invoice | BASE TABLE |
| [public.account_tax_sale_advance_payment_inv_rel](public.account_tax_sale_advance_payment_inv_rel.md) | 2 | RELATION BETWEEN sale_advance_payment_inv AND account_tax | BASE TABLE |
| [public.sale_product_configurator](public.sale_product_configurator.md) | 7 | Sale Product Configurator | BASE TABLE |
| [public.product_style](public.product_style.md) | 7 | Product Style | BASE TABLE |
| [public.product_public_category](public.product_public_category.md) | 13 | Website Product Category | BASE TABLE |
| [public.product_alternative_rel](public.product_alternative_rel.md) | 2 | RELATION BETWEEN product_template AND product_template | BASE TABLE |
| [public.product_accessory_rel](public.product_accessory_rel.md) | 2 | RELATION BETWEEN product_template AND product_product | BASE TABLE |
| [public.product_style_product_template_rel](public.product_style_product_template_rel.md) | 2 | RELATION BETWEEN product_template AND product_style | BASE TABLE |
| [public.product_public_category_product_template_rel](public.product_public_category_product_template_rel.md) | 2 | RELATION BETWEEN product_template AND product_public_category | BASE TABLE |
| [public.product_image](public.product_image.md) | 7 | Product Image | BASE TABLE |
| [public.website_sale_payment_acquirer_onboarding_wizard](public.website_sale_payment_acquirer_onboarding_wizard.md) | 15 | website.sale.payment.acquirer.onboarding.wizard | BASE TABLE |
| [public.project_task_type](public.project_task_type.md) | 16 | Task Stage | BASE TABLE |
| [public.project_task_type_rel](public.project_task_type_rel.md) | 2 | RELATION BETWEEN project_task_type AND project_project | BASE TABLE |
| [public.project_project](public.project_project.md) | 27 | Project | BASE TABLE |
| [public.project_favorite_user_rel](public.project_favorite_user_rel.md) | 2 | RELATION BETWEEN project_project AND res_users | BASE TABLE |
| [public.project_task](public.project_task.md) | 35 | Task | BASE TABLE |
| [public.project_tags_project_task_rel](public.project_tags_project_task_rel.md) | 2 | RELATION BETWEEN project_task AND project_tags | BASE TABLE |
| [public.project_tags](public.project_tags.md) | 7 | Project Tags | BASE TABLE |
| [public.report_project_task_user](public.report_project_task_user.md) | 17 |  | VIEW |
| [public.barcode_nomenclature](public.barcode_nomenclature.md) | 7 | Barcode Nomenclature | BASE TABLE |
| [public.barcode_rule](public.barcode_rule.md) | 12 | Barcode Rule | BASE TABLE |
| [public.product_removal](public.product_removal.md) | 7 | Removal Strategy | BASE TABLE |
| [public.product_putaway](public.product_putaway.md) | 6 | Put Away Strategy | BASE TABLE |
| [public.stock_fixed_putaway_strat](public.stock_fixed_putaway_strat.md) | 10 | Fixed Putaway Strategy on Location | BASE TABLE |
| [public.stock_inventory](public.stock_inventory.md) | 18 | Inventory | BASE TABLE |
| [public.stock_inventory_line](public.stock_inventory_line.md) | 15 | Inventory Line | BASE TABLE |
| [public.stock_location](public.stock_location.md) | 24 | Inventory Locations | BASE TABLE |
| [public.stock_location_route](public.stock_location_route.md) | 15 | Inventory Routes | BASE TABLE |
| [public.stock_route_product](public.stock_route_product.md) | 2 | RELATION BETWEEN stock_location_route AND product_template | BASE TABLE |
| [public.stock_location_route_categ](public.stock_location_route_categ.md) | 2 | RELATION BETWEEN stock_location_route AND product_category | BASE TABLE |
| [public.stock_route_warehouse](public.stock_route_warehouse.md) | 2 | RELATION BETWEEN stock_location_route AND stock_warehouse | BASE TABLE |
| [public.stock_move](public.stock_move.md) | 54 | Stock Move | BASE TABLE |
| [public.stock_move_move_rel](public.stock_move_move_rel.md) | 2 | RELATION BETWEEN stock_move AND stock_move | BASE TABLE |
| [public.stock_location_route_move](public.stock_location_route_move.md) | 2 | RELATION BETWEEN stock_move AND stock_location_route | BASE TABLE |
| [public.stock_move_line](public.stock_move_line.md) | 29 | Product Moves (Stock Move Line) | BASE TABLE |
| [public.stock_move_line_consume_rel](public.stock_move_line_consume_rel.md) | 2 | RELATION BETWEEN stock_move_line AND stock_move_line | BASE TABLE |
| [public.stock_production_lot](public.stock_production_lot.md) | 11 | Lot/Serial | BASE TABLE |
| [public.stock_picking_type](public.stock_picking_type.md) | 21 | Picking Type | BASE TABLE |
| [public.stock_picking](public.stock_picking.md) | 28 | Transfer | BASE TABLE |
| [public.stock_quant](public.stock_quant.md) | 14 | Quants | BASE TABLE |
| [public.stock_quant_package](public.stock_quant_package.md) | 9 | Packages | BASE TABLE |
| [public.stock_rule](public.stock_rule.md) | 24 | Stock Rule | BASE TABLE |
| [public.procurement_group](public.procurement_group.md) | 9 | Procurement Group | BASE TABLE |
| [public.stock_traceability_report](public.stock_traceability_report.md) | 5 | Traceability Report | BASE TABLE |
| [public.stock_warehouse](public.stock_warehouse.md) | 40 | Warehouse | BASE TABLE |
| [public.stock_wh_resupply_table](public.stock_wh_resupply_table.md) | 2 | RELATION BETWEEN stock_warehouse AND stock_warehouse | BASE TABLE |
| [public.stock_warehouse_orderpoint](public.stock_warehouse_orderpoint.md) | 17 | Minimum Inventory Rule | BASE TABLE |
| [public.stock_scrap](public.stock_scrap.md) | 21 | Scrap | BASE TABLE |
| [public.stock_package_level](public.stock_package_level.md) | 8 | Stock Package Level | BASE TABLE |
| [public.report_stock_forecast](public.report_stock_forecast.md) | 6 |  | VIEW |
| [public.stock_return_picking_line](public.stock_return_picking_line.md) | 10 | Return Picking Line | BASE TABLE |
| [public.stock_return_picking](public.stock_return_picking.md) | 10 | Return Picking | BASE TABLE |
| [public.stock_change_product_qty](public.stock_change_product_qty.md) | 9 | Change Product Quantity | BASE TABLE |
| [public.stock_scheduler_compute](public.stock_scheduler_compute.md) | 5 | Run Scheduler Manually | BASE TABLE |
| [public.stock_immediate_transfer](public.stock_immediate_transfer.md) | 5 | Immediate Transfer | BASE TABLE |
| [public.stock_picking_transfer_rel](public.stock_picking_transfer_rel.md) | 2 | RELATION BETWEEN stock_immediate_transfer AND stock_picking | BASE TABLE |
| [public.stock_backorder_confirmation](public.stock_backorder_confirmation.md) | 5 | Backorder Confirmation | BASE TABLE |
| [public.stock_picking_backorder_rel](public.stock_picking_backorder_rel.md) | 2 | RELATION BETWEEN stock_backorder_confirmation AND stock_picking | BASE TABLE |
| [public.stock_overprocessed_transfer](public.stock_overprocessed_transfer.md) | 6 | Transfer Over Processed Stock | BASE TABLE |
| [public.stock_quantity_history](public.stock_quantity_history.md) | 7 | Stock Quantity History | BASE TABLE |
| [public.stock_rules_report](public.stock_rules_report.md) | 8 | Stock Rules report | BASE TABLE |
| [public.stock_rules_report_stock_warehouse_rel](public.stock_rules_report_stock_warehouse_rel.md) | 2 | RELATION BETWEEN stock_rules_report AND stock_warehouse | BASE TABLE |
| [public.stock_warn_insufficient_qty_scrap](public.stock_warn_insufficient_qty_scrap.md) | 8 | Warn Insufficient Scrap Quantity | BASE TABLE |
| [public.product_replenish](public.product_replenish.md) | 12 | Product Replenish | BASE TABLE |
| [public.product_replenish_stock_location_route_rel](public.product_replenish_stock_location_route_rel.md) | 2 | RELATION BETWEEN product_replenish AND stock_location_route | BASE TABLE |
| [public.stock_track_confirmation](public.stock_track_confirmation.md) | 6 | Stock Track Confirmation | BASE TABLE |
| [public.stock_track_line](public.stock_track_line.md) | 8 | Stock Track Line | BASE TABLE |
| [public.stock_package_destination](public.stock_package_destination.md) | 7 | Stock Package Destination | BASE TABLE |
| [public.stock_change_standard_price](public.stock_change_standard_price.md) | 8 | Change Standard Price | BASE TABLE |
| [public.stock_location_route_stock_rules_report_rel](public.stock_location_route_stock_rules_report_rel.md) | 2 | RELATION BETWEEN stock_rules_report AND stock_location_route | BASE TABLE |
| [public.sale_order_option](public.sale_order_option.md) | 14 | Sale Options | BASE TABLE |
| [public.sale_order_template](public.sale_order_template.md) | 12 | Quotation Template | BASE TABLE |
| [public.sale_order_template_line](public.sale_order_template_line.md) | 14 | Quotation Template Line | BASE TABLE |
| [public.sale_order_template_option](public.sale_order_template_option.md) | 12 | Quotation Template Option | BASE TABLE |
| [public.sale_order_tag_rel](public.sale_order_tag_rel.md) | 2 | RELATION BETWEEN sale_order AND crm_lead_tag | BASE TABLE |
| [public.purchase_order](public.purchase_order.md) | 31 | Purchase Order | BASE TABLE |
| [public.account_invoice_purchase_order_rel](public.account_invoice_purchase_order_rel.md) | 2 | RELATION BETWEEN purchase_order AND account_invoice | BASE TABLE |
| [public.purchase_order_line](public.purchase_order_line.md) | 27 | Purchase Order Line | BASE TABLE |
| [public.account_tax_purchase_order_line_rel](public.account_tax_purchase_order_line_rel.md) | 2 | RELATION BETWEEN purchase_order_line AND account_tax | BASE TABLE |
| [public.account_analytic_tag_purchase_order_line_rel](public.account_analytic_tag_purchase_order_line_rel.md) | 2 | RELATION BETWEEN purchase_order_line AND account_analytic_tag | BASE TABLE |
| [public.purchase_bill_union](public.purchase_bill_union.md) | 10 |  | VIEW |
| [public.purchase_order_stock_picking_rel](public.purchase_order_stock_picking_rel.md) | 2 | RELATION BETWEEN purchase_order AND stock_picking | BASE TABLE |
| [public.purchase_report](public.purchase_report.md) | 28 |  | VIEW |
| [public.hr_employee_category](public.hr_employee_category.md) | 7 | Employee Category | BASE TABLE |
| [public.employee_category_rel](public.employee_category_rel.md) | 2 | RELATION BETWEEN hr_employee_category AND hr_employee | BASE TABLE |
| [public.hr_job](public.hr_job.md) | 16 | Job Position | BASE TABLE |
| [public.hr_employee](public.hr_employee.md) | 54 | Employee | BASE TABLE |
| [public.hr_department](public.hr_department.md) | 14 | HR Department | BASE TABLE |
| [public.hr_department_mail_channel_rel](public.hr_department_mail_channel_rel.md) | 2 | RELATION BETWEEN mail_channel AND hr_department | BASE TABLE |
| [public.hr_contract_type](public.hr_contract_type.md) | 7 | Contract Type | BASE TABLE |
| [public.hr_contract](public.hr_contract.md) | 22 | Contract | BASE TABLE |
| [public.hr_expense](public.hr_expense.md) | 28 | Expense | BASE TABLE |
| [public.expense_tax](public.expense_tax.md) | 2 | RELATION BETWEEN hr_expense AND account_tax | BASE TABLE |
| [public.account_analytic_tag_hr_expense_rel](public.account_analytic_tag_hr_expense_rel.md) | 2 | RELATION BETWEEN hr_expense AND account_analytic_tag | BASE TABLE |
| [public.hr_expense_sheet](public.hr_expense_sheet.md) | 19 | Expense Report | BASE TABLE |
| [public.hr_expense_refuse_wizard](public.hr_expense_refuse_wizard.md) | 7 | Expense Refuse Reason Wizard | BASE TABLE |
| [public.hr_expense_hr_expense_refuse_wizard_rel](public.hr_expense_hr_expense_refuse_wizard_rel.md) | 2 | RELATION BETWEEN hr_expense_refuse_wizard AND hr_expense | BASE TABLE |
| [public.hr_expense_sheet_register_payment_wizard](public.hr_expense_sheet_register_payment_wizard.md) | 13 | Expense Register Payment Wizard | BASE TABLE |
| [public.lunch_order_line_lucky](public.lunch_order_line_lucky.md) | 8 | Lunch Order Line Lucky | BASE TABLE |
| [public.lunch_order_line_lucky_res_partner_rel](public.lunch_order_line_lucky_res_partner_rel.md) | 2 | RELATION BETWEEN lunch_order_line_lucky AND res_partner | BASE TABLE |
| [public.lunch_order](public.lunch_order.md) | 11 | Lunch Order | BASE TABLE |
| [public.lunch_order_line](public.lunch_order_line.md) | 14 | Lunch Order Line | BASE TABLE |
| [public.lunch_product](public.lunch_product.md) | 11 | Lunch Product | BASE TABLE |
| [public.lunch_product_category](public.lunch_product_category.md) | 6 | Lunch Product Category | BASE TABLE |
| [public.lunch_cashmove](public.lunch_cashmove.md) | 11 | Lunch Cashmove | BASE TABLE |
| [public.lunch_alert](public.lunch_alert.md) | 19 | Lunch Alert | BASE TABLE |
| [public.pos_category](public.pos_category.md) | 8 | Point of Sale Category | BASE TABLE |
| [public.pos_config](public.pos_config.md) | 60 | Point of Sale Configuration | BASE TABLE |
| [public.pos_config_journal_rel](public.pos_config_journal_rel.md) | 2 | RELATION BETWEEN pos_config AND account_journal | BASE TABLE |
| [public.pos_config_product_pricelist_rel](public.pos_config_product_pricelist_rel.md) | 2 | RELATION BETWEEN pos_config AND product_pricelist | BASE TABLE |
| [public.account_fiscal_position_pos_config_rel](public.account_fiscal_position_pos_config_rel.md) | 2 | RELATION BETWEEN pos_config AND account_fiscal_position | BASE TABLE |
| [public.pos_order](public.pos_order.md) | 28 | Point of Sale Orders | BASE TABLE |
| [public.pos_order_line](public.pos_order_line.md) | 15 | Point of Sale Order Lines | BASE TABLE |
| [public.account_tax_pos_order_line_rel](public.account_tax_pos_order_line_rel.md) | 2 | RELATION BETWEEN pos_order_line AND account_tax | BASE TABLE |
| [public.pos_pack_operation_lot](public.pos_pack_operation_lot.md) | 7 | Specify product lot/serial number in pos order line | BASE TABLE |
| [public.pos_session](public.pos_session.md) | 16 | Point of Sale Session | BASE TABLE |
| [public.report_pos_order](public.report_pos_order.md) | 24 |  | VIEW |
| [public.pos_details_wizard](public.pos_details_wizard.md) | 7 | Point of Sale Details Report | BASE TABLE |
| [public.pos_detail_configs](public.pos_detail_configs.md) | 2 | RELATION BETWEEN pos_details_wizard AND pos_config | BASE TABLE |
| [public.pos_open_statement](public.pos_open_statement.md) | 5 | Point of Sale Open Statement | BASE TABLE |
| [public.pos_make_payment](public.pos_make_payment.md) | 10 | Point of Sale Payment | BASE TABLE |
| [public.sale_report](public.sale_report.md) | 34 |  | VIEW |
| [public.mrp_document](public.mrp_document.md) | 8 | Production Document | BASE TABLE |
| [public.mrp_bom](public.mrp_bom.md) | 18 | Bill of Material | BASE TABLE |
| [public.mrp_bom_line](public.mrp_bom_line.md) | 12 | Bill of Material Line | BASE TABLE |
| [public.mrp_bom_line_product_attribute_value_rel](public.mrp_bom_line_product_attribute_value_rel.md) | 2 | RELATION BETWEEN mrp_bom_line AND product_attribute_value | BASE TABLE |
| [public.mrp_routing](public.mrp_routing.md) | 11 | Routings | BASE TABLE |
| [public.mrp_routing_workcenter](public.mrp_routing_workcenter.md) | 17 | Work Center Usage | BASE TABLE |
| [public.mrp_workcenter](public.mrp_workcenter.md) | 21 | Work Center | BASE TABLE |
| [public.mrp_workcenter_productivity_loss_type](public.mrp_workcenter_productivity_loss_type.md) | 6 | MRP Workorder productivity losses | BASE TABLE |
| [public.mrp_workcenter_productivity_loss](public.mrp_workcenter_productivity_loss.md) | 10 | Workcenter Productivity Losses | BASE TABLE |
| [public.mrp_workcenter_productivity](public.mrp_workcenter_productivity.md) | 14 | Workcenter Productivity Log | BASE TABLE |
| [public.mrp_production](public.mrp_production.md) | 29 | Production Order | BASE TABLE |
| [public.mrp_unbuild](public.mrp_unbuild.md) | 16 | Unbuild Order | BASE TABLE |
| [public.mrp_workorder](public.mrp_workorder.md) | 27 | Work Order | BASE TABLE |
| [public.mrp_product_produce](public.mrp_product_produce.md) | 11 | Record Production | BASE TABLE |
| [public.mrp_product_produce_line](public.mrp_product_produce_line.md) | 13 | Record Production Line | BASE TABLE |
| [public.change_production_qty](public.change_production_qty.md) | 7 | Change Production Qty | BASE TABLE |
| [public.stock_warn_insufficient_qty_unbuild](public.stock_warn_insufficient_qty_unbuild.md) | 8 | Warn Insufficient Unbuild Quantity | BASE TABLE |
| [public.blog_blog](public.blog_blog.md) | 14 | Blogs | BASE TABLE |
| [public.blog_tag_category](public.blog_tag_category.md) | 6 | Blog Tag Category | BASE TABLE |
| [public.blog_tag](public.blog_tag.md) | 11 | Blog Tag | BASE TABLE |
| [public.blog_post_blog_tag_rel](public.blog_post_blog_tag_rel.md) | 2 | RELATION BETWEEN blog_tag AND blog_post | BASE TABLE |
| [public.blog_post](public.blog_post.md) | 22 | Blog Post | BASE TABLE |

## Relations

![er](schema.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
