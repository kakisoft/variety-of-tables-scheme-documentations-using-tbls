# public.account_reconcile_model

## Description

Preset to create journal entries during a invoices and payments matching

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('account_reconcile_model_id_seq'::regclass) | false | [public.account_journal_account_reconcile_model_rel](public.account_journal_account_reconcile_model_rel.md) [public.account_reconcile_model_res_partner_rel](public.account_reconcile_model_res_partner_rel.md) [public.account_reconcile_model_res_partner_category_rel](public.account_reconcile_model_res_partner_category_rel.md) [public.account_analytic_tag_account_reconcile_model_rel](public.account_analytic_tag_account_reconcile_model_rel.md) |  |  |
| name | varchar |  | false |  |  | Name |
| sequence | integer |  | false |  |  | Sequence |
| company_id | integer |  | false |  | [public.res_company](public.res_company.md) | Company |
| rule_type | varchar |  | false |  |  | Type |
| auto_reconcile | boolean |  | true |  |  | Auto-validate |
| match_nature | varchar |  | false |  |  | Amount Nature |
| match_amount | varchar |  | true |  |  | Amount |
| match_amount_min | double precision |  | true |  |  | Amount Min Parameter |
| match_amount_max | double precision |  | true |  |  | Amount Max Parameter |
| match_label | varchar |  | true |  |  | Label |
| match_label_param | varchar |  | true |  |  | Label Parameter |
| match_same_currency | boolean |  | true |  |  | Same Currency Matching |
| match_total_amount | boolean |  | true |  |  | Amount Matching |
| match_total_amount_param | double precision |  | true |  |  | Amount Matching % |
| match_partner | boolean |  | true |  |  | Partner Is Set |
| account_id | integer |  | true |  | [public.account_account](public.account_account.md) | Account |
| journal_id | integer |  | true |  | [public.account_journal](public.account_journal.md) | Journal |
| label | varchar |  | true |  |  | Journal Item Label |
| amount_type | varchar |  | false |  |  | Amount Type |
| force_tax_included | boolean |  | true |  |  | Tax Included in Price |
| amount | numeric |  | false |  |  | Write-off Amount |
| tax_id | integer |  | true |  | [public.account_tax](public.account_tax.md) | Tax |
| analytic_account_id | integer |  | true |  | [public.account_analytic_account](public.account_analytic_account.md) | Analytic Account |
| has_second_line | boolean |  | true |  |  | Add a second line |
| second_account_id | integer |  | true |  | [public.account_account](public.account_account.md) | Second Account |
| second_journal_id | integer |  | true |  | [public.account_journal](public.account_journal.md) | Second Journal |
| second_label | varchar |  | true |  |  | Second Journal Item Label |
| second_amount_type | varchar |  | false |  |  | Second Amount type |
| force_second_tax_included | boolean |  | true |  |  | Second Tax Included in Price |
| second_amount | numeric |  | false |  |  | Second Write-off Amount |
| second_tax_id | integer |  | true |  | [public.account_tax](public.account_tax.md) | Second Tax |
| second_analytic_account_id | integer |  | true |  | [public.account_analytic_account](public.account_analytic_account.md) | Second Analytic Account |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| account_reconcile_model_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| account_reconcile_model_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| account_reconcile_model_company_id_fkey | FOREIGN KEY | FOREIGN KEY (company_id) REFERENCES res_company(id) ON DELETE SET NULL |
| account_reconcile_model_analytic_account_id_fkey | FOREIGN KEY | FOREIGN KEY (analytic_account_id) REFERENCES account_analytic_account(id) ON DELETE SET NULL |
| account_reconcile_model_second_analytic_account_id_fkey | FOREIGN KEY | FOREIGN KEY (second_analytic_account_id) REFERENCES account_analytic_account(id) ON DELETE SET NULL |
| account_reconcile_model_account_id_fkey | FOREIGN KEY | FOREIGN KEY (account_id) REFERENCES account_account(id) ON DELETE CASCADE |
| account_reconcile_model_second_account_id_fkey | FOREIGN KEY | FOREIGN KEY (second_account_id) REFERENCES account_account(id) ON DELETE CASCADE |
| account_reconcile_model_journal_id_fkey | FOREIGN KEY | FOREIGN KEY (journal_id) REFERENCES account_journal(id) ON DELETE CASCADE |
| account_reconcile_model_second_journal_id_fkey | FOREIGN KEY | FOREIGN KEY (second_journal_id) REFERENCES account_journal(id) ON DELETE CASCADE |
| account_reconcile_model_second_tax_id_fkey | FOREIGN KEY | FOREIGN KEY (second_tax_id) REFERENCES account_tax(id) ON DELETE RESTRICT |
| account_reconcile_model_tax_id_fkey | FOREIGN KEY | FOREIGN KEY (tax_id) REFERENCES account_tax(id) ON DELETE RESTRICT |
| account_reconcile_model_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| account_reconcile_model_pkey | CREATE UNIQUE INDEX account_reconcile_model_pkey ON public.account_reconcile_model USING btree (id) |

## Relations

![er](public.account_reconcile_model.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
