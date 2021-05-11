# public.mail_message

## Description

Message

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('mail_message_id_seq'::regclass) | false | [public.mail_tracking_value](public.mail_tracking_value.md) [public.mail_message_res_partner_needaction_rel](public.mail_message_res_partner_needaction_rel.md) [public.mail_message](public.mail_message.md) [public.message_attachment_rel](public.message_attachment_rel.md) [public.mail_message_res_partner_rel](public.mail_message_res_partner_rel.md) [public.mail_message_mail_channel_rel](public.mail_message_mail_channel_rel.md) [public.mail_message_res_partner_starred_rel](public.mail_message_res_partner_starred_rel.md) [public.mail_mail](public.mail_mail.md) [public.mail_channel_partner](public.mail_channel_partner.md) [public.mail_compose_message](public.mail_compose_message.md) [public.mail_resend_message](public.mail_resend_message.md) [public.rating_rating](public.rating_rating.md) |  |  |
| subject | varchar |  | true |  |  | Subject |
| date | timestamp without time zone |  | true |  |  | Date |
| body | text |  | true |  |  | Contents |
| parent_id | integer |  | true |  | [public.mail_message](public.mail_message.md) | Parent Message |
| model | varchar |  | true |  |  | Related Document Model |
| res_id | integer |  | true |  |  | Related Document ID |
| record_name | varchar |  | true |  |  | Message Record Name |
| message_type | varchar |  | false |  |  | Type |
| subtype_id | integer |  | true |  | [public.mail_message_subtype](public.mail_message_subtype.md) | Subtype |
| mail_activity_type_id | integer |  | true |  | [public.mail_activity_type](public.mail_activity_type.md) | Mail Activity Type |
| email_from | varchar |  | true |  |  | From |
| author_id | integer |  | true |  | [public.res_partner](public.res_partner.md) | Author |
| no_auto_thread | boolean |  | true |  |  | No threading for answers |
| message_id | varchar |  | true |  |  | Message-Id |
| reply_to | varchar |  | true |  |  | Reply-To |
| mail_server_id | integer |  | true |  | [public.ir_mail_server](public.ir_mail_server.md) | Outgoing mail server |
| moderation_status | varchar |  | true |  |  | Moderation Status |
| moderator_id | integer |  | true |  | [public.res_users](public.res_users.md) | Moderated By |
| layout | varchar |  | true |  |  | Layout |
| add_sign | boolean |  | true |  |  | Add Sign |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |
| website_published | boolean |  | true |  |  | Published |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| mail_message_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| mail_message_moderator_id_fkey | FOREIGN KEY | FOREIGN KEY (moderator_id) REFERENCES res_users(id) ON DELETE SET NULL |
| mail_message_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| mail_message_author_id_fkey | FOREIGN KEY | FOREIGN KEY (author_id) REFERENCES res_partner(id) ON DELETE SET NULL |
| mail_message_mail_server_id_fkey | FOREIGN KEY | FOREIGN KEY (mail_server_id) REFERENCES ir_mail_server(id) ON DELETE SET NULL |
| mail_message_subtype_id_fkey | FOREIGN KEY | FOREIGN KEY (subtype_id) REFERENCES mail_message_subtype(id) ON DELETE SET NULL |
| mail_message_parent_id_fkey | FOREIGN KEY | FOREIGN KEY (parent_id) REFERENCES mail_message(id) ON DELETE SET NULL |
| mail_message_pkey | PRIMARY KEY | PRIMARY KEY (id) |
| mail_message_mail_activity_type_id_fkey | FOREIGN KEY | FOREIGN KEY (mail_activity_type_id) REFERENCES mail_activity_type(id) ON DELETE SET NULL |

## Indexes

| Name | Definition |
| ---- | ---------- |
| mail_message_pkey | CREATE UNIQUE INDEX mail_message_pkey ON public.mail_message USING btree (id) |
| mail_message_parent_id_index | CREATE INDEX mail_message_parent_id_index ON public.mail_message USING btree (parent_id) |
| mail_message_model_index | CREATE INDEX mail_message_model_index ON public.mail_message USING btree (model) |
| mail_message_res_id_index | CREATE INDEX mail_message_res_id_index ON public.mail_message USING btree (res_id) |
| mail_message_subtype_id_index | CREATE INDEX mail_message_subtype_id_index ON public.mail_message USING btree (subtype_id) |
| mail_message_mail_activity_type_id_index | CREATE INDEX mail_message_mail_activity_type_id_index ON public.mail_message USING btree (mail_activity_type_id) |
| mail_message_author_id_index | CREATE INDEX mail_message_author_id_index ON public.mail_message USING btree (author_id) |
| mail_message_message_id_index | CREATE INDEX mail_message_message_id_index ON public.mail_message USING btree (message_id) |
| mail_message_moderation_status_index | CREATE INDEX mail_message_moderation_status_index ON public.mail_message USING btree (moderation_status) |
| mail_message_moderator_id_index | CREATE INDEX mail_message_moderator_id_index ON public.mail_message USING btree (moderator_id) |
| mail_message_model_res_id_idx | CREATE INDEX mail_message_model_res_id_idx ON public.mail_message USING btree (model, res_id) |

## Relations

![er](public.mail_message.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
