# public.ir_ui_menu_group_rel

## Description

RELATION BETWEEN ir_ui_menu AND res_groups

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| menu_id | integer |  | false |  | [public.ir_ui_menu](public.ir_ui_menu.md) |  |
| gid | integer |  | false |  | [public.res_groups](public.res_groups.md) |  |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| ir_ui_menu_group_rel_gid_fkey | FOREIGN KEY | FOREIGN KEY (gid) REFERENCES res_groups(id) ON DELETE CASCADE |
| ir_ui_menu_group_rel_menu_id_fkey | FOREIGN KEY | FOREIGN KEY (menu_id) REFERENCES ir_ui_menu(id) ON DELETE CASCADE |
| ir_ui_menu_group_rel_menu_id_gid_key | UNIQUE | UNIQUE (menu_id, gid) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| ir_ui_menu_group_rel_menu_id_gid_key | CREATE UNIQUE INDEX ir_ui_menu_group_rel_menu_id_gid_key ON public.ir_ui_menu_group_rel USING btree (menu_id, gid) |
| ir_ui_menu_group_rel_menu_id_idx | CREATE INDEX ir_ui_menu_group_rel_menu_id_idx ON public.ir_ui_menu_group_rel USING btree (menu_id) |
| ir_ui_menu_group_rel_gid_idx | CREATE INDEX ir_ui_menu_group_rel_gid_idx ON public.ir_ui_menu_group_rel USING btree (gid) |

## Relations

![er](public.ir_ui_menu_group_rel.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)