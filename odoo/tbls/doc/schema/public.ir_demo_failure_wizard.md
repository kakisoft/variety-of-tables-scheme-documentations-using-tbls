# public.ir_demo_failure_wizard

## Description

Demo Failure wizard

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('ir_demo_failure_wizard_id_seq'::regclass) | false | [public.ir_demo_failure](public.ir_demo_failure.md) |  |  |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| ir_demo_failure_wizard_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| ir_demo_failure_wizard_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| ir_demo_failure_wizard_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| ir_demo_failure_wizard_pkey | CREATE UNIQUE INDEX ir_demo_failure_wizard_pkey ON public.ir_demo_failure_wizard USING btree (id) |

## Relations

![er](public.ir_demo_failure_wizard.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)