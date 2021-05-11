# public.product_product

## Description

Product

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('product_product_id_seq'::regclass) | false | [public.res_config_settings](public.res_config_settings.md) [public.account_analytic_line](public.account_analytic_line.md) [public.product_price_history](public.product_price_history.md) [public.product_attribute_value_product_product_rel](public.product_attribute_value_product_product_rel.md) [public.product_packaging](public.product_packaging.md) [public.product_supplierinfo](public.product_supplierinfo.md) [public.product_pricelist_item](public.product_pricelist_item.md) [public.account_invoice_line](public.account_invoice_line.md) [public.account_move_line](public.account_move_line.md) [public.sale_order_line](public.sale_order_line.md) [public.sale_advance_payment_inv](public.sale_advance_payment_inv.md) [public.product_accessory_rel](public.product_accessory_rel.md) [public.stock_fixed_putaway_strat](public.stock_fixed_putaway_strat.md) [public.stock_inventory](public.stock_inventory.md) [public.stock_inventory_line](public.stock_inventory_line.md) [public.stock_move](public.stock_move.md) [public.stock_move_line](public.stock_move_line.md) [public.stock_production_lot](public.stock_production_lot.md) [public.stock_quant](public.stock_quant.md) [public.stock_warehouse_orderpoint](public.stock_warehouse_orderpoint.md) [public.stock_scrap](public.stock_scrap.md) [public.stock_return_picking_line](public.stock_return_picking_line.md) [public.stock_change_product_qty](public.stock_change_product_qty.md) [public.stock_rules_report](public.stock_rules_report.md) [public.stock_warn_insufficient_qty_scrap](public.stock_warn_insufficient_qty_scrap.md) [public.product_replenish](public.product_replenish.md) [public.stock_track_line](public.stock_track_line.md) [public.sale_order_option](public.sale_order_option.md) [public.sale_order_template_line](public.sale_order_template_line.md) [public.sale_order_template_option](public.sale_order_template_option.md) [public.purchase_order_line](public.purchase_order_line.md) [public.hr_expense](public.hr_expense.md) [public.pos_config](public.pos_config.md) [public.pos_order_line](public.pos_order_line.md) [public.mrp_bom](public.mrp_bom.md) [public.mrp_bom_line](public.mrp_bom_line.md) [public.mrp_production](public.mrp_production.md) [public.mrp_unbuild](public.mrp_unbuild.md) [public.mrp_workorder](public.mrp_workorder.md) [public.mrp_product_produce](public.mrp_product_produce.md) [public.mrp_product_produce_line](public.mrp_product_produce_line.md) [public.stock_warn_insufficient_qty_unbuild](public.stock_warn_insufficient_qty_unbuild.md) |  |  |
| message_main_attachment_id | integer |  | true |  | [public.ir_attachment](public.ir_attachment.md) | Main Attachment |
| default_code | varchar |  | true |  |  | Internal Reference |
| active | boolean |  | true |  |  | Active |
| product_tmpl_id | integer |  | false |  | [public.product_template](public.product_template.md) | Product Template |
| barcode | varchar |  | true |  |  | Barcode |
| volume | double precision |  | true |  |  | Volume |
| weight | numeric |  | true |  |  | Weight |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition | Comment |
| ---- | ---- | ---------- | ------- |
| product_product_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |  |
| product_product_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |  |
| product_product_message_main_attachment_id_fkey | FOREIGN KEY | FOREIGN KEY (message_main_attachment_id) REFERENCES ir_attachment(id) ON DELETE SET NULL |  |
| product_product_product_tmpl_id_fkey | FOREIGN KEY | FOREIGN KEY (product_tmpl_id) REFERENCES product_template(id) ON DELETE CASCADE |  |
| product_product_pkey | PRIMARY KEY | PRIMARY KEY (id) |  |
| product_product_barcode_uniq | UNIQUE | UNIQUE (barcode) | unique(barcode) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| product_product_pkey | CREATE UNIQUE INDEX product_product_pkey ON public.product_product USING btree (id) |
| product_product_message_main_attachment_id_index | CREATE INDEX product_product_message_main_attachment_id_index ON public.product_product USING btree (message_main_attachment_id) |
| product_product_default_code_index | CREATE INDEX product_product_default_code_index ON public.product_product USING btree (default_code) |
| product_product_product_tmpl_id_index | CREATE INDEX product_product_product_tmpl_id_index ON public.product_product USING btree (product_tmpl_id) |
| product_product_barcode_uniq | CREATE UNIQUE INDEX product_product_barcode_uniq ON public.product_product USING btree (barcode) |

## Relations

![er](public.product_product.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
