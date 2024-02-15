# public.account_fiscal_position_account

## Description

Accounts Mapping of Fiscal Position

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('account_fiscal_position_account_id_seq'::regclass) | false |  |  |  |
| position_id | integer |  | false |  | [public.account_fiscal_position](public.account_fiscal_position.md) | Fiscal Position |
| account_src_id | integer |  | false |  | [public.account_account](public.account_account.md) | Account on Product |
| account_dest_id | integer |  | false |  | [public.account_account](public.account_account.md) | Account to Use Instead |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition | Comment |
| ---- | ---- | ---------- | ------- |
| account_fiscal_position_account_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |  |
| account_fiscal_position_account_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |  |
| account_fiscal_position_account_position_id_fkey | FOREIGN KEY | FOREIGN KEY (position_id) REFERENCES account_fiscal_position(id) ON DELETE CASCADE |  |
| account_fiscal_position_account_pkey | PRIMARY KEY | PRIMARY KEY (id) |  |
| account_fiscal_position_account_account_src_dest_uniq | UNIQUE | UNIQUE (position_id, account_src_id, account_dest_id) | unique (position_id,account_src_id,account_dest_id) |
| account_fiscal_position_account_account_dest_id_fkey | FOREIGN KEY | FOREIGN KEY (account_dest_id) REFERENCES account_account(id) ON DELETE SET NULL |  |
| account_fiscal_position_account_account_src_id_fkey | FOREIGN KEY | FOREIGN KEY (account_src_id) REFERENCES account_account(id) ON DELETE SET NULL |  |

## Indexes

| Name | Definition |
| ---- | ---------- |
| account_fiscal_position_account_pkey | CREATE UNIQUE INDEX account_fiscal_position_account_pkey ON public.account_fiscal_position_account USING btree (id) |
| account_fiscal_position_account_account_src_dest_uniq | CREATE UNIQUE INDEX account_fiscal_position_account_account_src_dest_uniq ON public.account_fiscal_position_account USING btree (position_id, account_src_id, account_dest_id) |

## Relations

![er](public.account_fiscal_position_account.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)