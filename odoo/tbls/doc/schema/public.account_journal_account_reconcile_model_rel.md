# public.account_journal_account_reconcile_model_rel

## Description

RELATION BETWEEN account_reconcile_model AND account_journal

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| account_reconcile_model_id | integer |  | false |  | [public.account_reconcile_model](public.account_reconcile_model.md) |  |
| account_journal_id | integer |  | false |  | [public.account_journal](public.account_journal.md) |  |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| account_journal_account_reconcile_model_account_journal_id_fkey | FOREIGN KEY | FOREIGN KEY (account_journal_id) REFERENCES account_journal(id) ON DELETE CASCADE |
| account_journal_account_reconci_account_reconcile_model_id_fkey | FOREIGN KEY | FOREIGN KEY (account_reconcile_model_id) REFERENCES account_reconcile_model(id) ON DELETE CASCADE |
| account_journal_account_recon_account_reconcile_model_id_ac_key | UNIQUE | UNIQUE (account_reconcile_model_id, account_journal_id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| account_journal_account_recon_account_reconcile_model_id_ac_key | CREATE UNIQUE INDEX account_journal_account_recon_account_reconcile_model_id_ac_key ON public.account_journal_account_reconcile_model_rel USING btree (account_reconcile_model_id, account_journal_id) |
| account_journal_account_reconcil_account_reconcile_model_id_idx | CREATE INDEX account_journal_account_reconcil_account_reconcile_model_id_idx ON public.account_journal_account_reconcile_model_rel USING btree (account_reconcile_model_id) |
| account_journal_account_reconcile_model__account_journal_id_idx | CREATE INDEX account_journal_account_reconcile_model__account_journal_id_idx ON public.account_journal_account_reconcile_model_rel USING btree (account_journal_id) |

## Relations

![er](public.account_journal_account_reconcile_model_rel.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)