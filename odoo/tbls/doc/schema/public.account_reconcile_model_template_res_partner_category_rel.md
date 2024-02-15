# public.account_reconcile_model_template_res_partner_category_rel

## Description

RELATION BETWEEN account_reconcile_model_template AND res_partner_category

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| account_reconcile_model_template_id | integer |  | false |  | [public.account_reconcile_model_template](public.account_reconcile_model_template.md) |  |
| res_partner_category_id | integer |  | false |  | [public.res_partner_category](public.res_partner_category.md) |  |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| account_reconcile_model_template_r_res_partner_category_id_fkey | FOREIGN KEY | FOREIGN KEY (res_partner_category_id) REFERENCES res_partner_category(id) ON DELETE CASCADE |
| account_reconcile_model_temp_account_reconcile_model_temp_fkey1 | FOREIGN KEY | FOREIGN KEY (account_reconcile_model_template_id) REFERENCES account_reconcile_model_template(id) ON DELETE CASCADE |
| account_reconcile_model_templ_account_reconcile_model_temp_key1 | UNIQUE | UNIQUE (account_reconcile_model_template_id, res_partner_category_id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| account_reconcile_model_templ_account_reconcile_model_temp_key1 | CREATE UNIQUE INDEX account_reconcile_model_templ_account_reconcile_model_temp_key1 ON public.account_reconcile_model_template_res_partner_category_rel USING btree (account_reconcile_model_template_id, res_partner_category_id) |
| account_reconcile_model_templ_account_reconcile_model_temp_idx1 | CREATE INDEX account_reconcile_model_templ_account_reconcile_model_temp_idx1 ON public.account_reconcile_model_template_res_partner_category_rel USING btree (account_reconcile_model_template_id) |
| account_reconcile_model_template_re_res_partner_category_id_idx | CREATE INDEX account_reconcile_model_template_re_res_partner_category_id_idx ON public.account_reconcile_model_template_res_partner_category_rel USING btree (res_partner_category_id) |

## Relations

![er](public.account_reconcile_model_template_res_partner_category_rel.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)