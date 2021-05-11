# public.stock_move

## Description

Stock Move

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('stock_move_id_seq'::regclass) | false | [public.account_move](public.account_move.md) [public.stock_move](public.stock_move.md) [public.stock_move_move_rel](public.stock_move_move_rel.md) [public.stock_location_route_move](public.stock_location_route_move.md) [public.stock_move_line](public.stock_move_line.md) [public.stock_scrap](public.stock_scrap.md) [public.stock_return_picking_line](public.stock_return_picking_line.md) [public.mrp_product_produce_line](public.mrp_product_produce_line.md) |  |  |
| name | varchar |  | false |  |  | Description |
| sequence | integer |  | true |  |  | Sequence |
| priority | varchar |  | true |  |  | Priority |
| create_date | timestamp without time zone |  | true |  |  | Creation Date |
| date | timestamp without time zone |  | false |  |  | Date |
| company_id | integer |  | false |  | [public.res_company](public.res_company.md) | Company |
| date_expected | timestamp without time zone |  | false |  |  | Expected Date |
| product_id | integer |  | false |  | [public.product_product](public.product_product.md) | Product |
| product_qty | numeric |  | true |  |  | Real Quantity |
| product_uom_qty | numeric |  | false |  |  | Initial Demand |
| product_uom | integer |  | false |  | [public.uom_uom](public.uom_uom.md) | Unit of Measure |
| product_packaging | integer |  | true |  | [public.product_packaging](public.product_packaging.md) | Preferred Packaging |
| location_id | integer |  | false |  | [public.stock_location](public.stock_location.md) | Source Location |
| location_dest_id | integer |  | false |  | [public.stock_location](public.stock_location.md) | Destination Location |
| partner_id | integer |  | true |  | [public.res_partner](public.res_partner.md) | Destination Address  |
| picking_id | integer |  | true |  | [public.stock_picking](public.stock_picking.md) | Transfer Reference |
| note | text |  | true |  |  | Notes |
| state | varchar |  | true |  |  | Status |
| price_unit | double precision |  | true |  |  | Unit Price |
| origin | varchar |  | true |  |  | Source Document |
| procure_method | varchar |  | false |  |  | Supply Method |
| scrapped | boolean |  | true |  |  | Scrapped |
| group_id | integer |  | true |  | [public.procurement_group](public.procurement_group.md) | Procurement Group |
| rule_id | integer |  | true |  | [public.stock_rule](public.stock_rule.md) | Stock Rule |
| propagate | boolean |  | true |  |  | Propagate cancel and split |
| picking_type_id | integer |  | true |  | [public.stock_picking_type](public.stock_picking_type.md) | Operation Type |
| inventory_id | integer |  | true |  | [public.stock_inventory](public.stock_inventory.md) | Inventory |
| origin_returned_move_id | integer |  | true |  | [public.stock_move](public.stock_move.md) | Origin return move |
| restrict_partner_id | integer |  | true |  | [public.res_partner](public.res_partner.md) | Owner  |
| warehouse_id | integer |  | true |  | [public.stock_warehouse](public.stock_warehouse.md) | Warehouse |
| additional | boolean |  | true |  |  | Whether the move was added after the picking's confirmation |
| reference | varchar |  | true |  |  | Reference |
| package_level_id | integer |  | true |  | [public.stock_package_level](public.stock_package_level.md) | Package Level |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |
| to_refund | boolean |  | true |  |  | To Refund (update SO/PO) |
| value | double precision |  | true |  |  | Value |
| remaining_qty | double precision |  | true |  |  | Remaining Qty |
| remaining_value | double precision |  | true |  |  | Remaining Value |
| sale_line_id | integer |  | true |  | [public.sale_order_line](public.sale_order_line.md) | Sale Line |
| purchase_line_id | integer |  | true |  | [public.purchase_order_line](public.purchase_order_line.md) | Purchase Order Line |
| created_purchase_line_id | integer |  | true |  | [public.purchase_order_line](public.purchase_order_line.md) | Created Purchase Order Line |
| created_production_id | integer |  | true |  | [public.mrp_production](public.mrp_production.md) | Created Production Order |
| production_id | integer |  | true |  | [public.mrp_production](public.mrp_production.md) | Production Order for finished products |
| raw_material_production_id | integer |  | true |  | [public.mrp_production](public.mrp_production.md) | Production Order for raw materials |
| unbuild_id | integer |  | true |  | [public.mrp_unbuild](public.mrp_unbuild.md) | Disassembly Order |
| consume_unbuild_id | integer |  | true |  | [public.mrp_unbuild](public.mrp_unbuild.md) | Consumed Disassembly Order |
| operation_id | integer |  | true |  | [public.mrp_routing_workcenter](public.mrp_routing_workcenter.md) | Operation To Consume |
| workorder_id | integer |  | true |  | [public.mrp_workorder](public.mrp_workorder.md) | Work Order To Consume |
| bom_line_id | integer |  | true |  | [public.mrp_bom_line](public.mrp_bom_line.md) | BoM Line |
| unit_factor | double precision |  | true |  |  | Unit Factor |
| is_done | boolean |  | true |  |  | Done |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| stock_move_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| stock_move_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| stock_move_company_id_fkey | FOREIGN KEY | FOREIGN KEY (company_id) REFERENCES res_company(id) ON DELETE SET NULL |
| stock_move_partner_id_fkey | FOREIGN KEY | FOREIGN KEY (partner_id) REFERENCES res_partner(id) ON DELETE SET NULL |
| stock_move_restrict_partner_id_fkey | FOREIGN KEY | FOREIGN KEY (restrict_partner_id) REFERENCES res_partner(id) ON DELETE SET NULL |
| stock_move_product_uom_fkey | FOREIGN KEY | FOREIGN KEY (product_uom) REFERENCES uom_uom(id) ON DELETE SET NULL |
| stock_move_product_id_fkey | FOREIGN KEY | FOREIGN KEY (product_id) REFERENCES product_product(id) ON DELETE SET NULL |
| stock_move_product_packaging_fkey | FOREIGN KEY | FOREIGN KEY (product_packaging) REFERENCES product_packaging(id) ON DELETE SET NULL |
| stock_move_sale_line_id_fkey | FOREIGN KEY | FOREIGN KEY (sale_line_id) REFERENCES sale_order_line(id) ON DELETE SET NULL |
| stock_move_inventory_id_fkey | FOREIGN KEY | FOREIGN KEY (inventory_id) REFERENCES stock_inventory(id) ON DELETE SET NULL |
| stock_move_location_dest_id_fkey | FOREIGN KEY | FOREIGN KEY (location_dest_id) REFERENCES stock_location(id) ON DELETE SET NULL |
| stock_move_location_id_fkey | FOREIGN KEY | FOREIGN KEY (location_id) REFERENCES stock_location(id) ON DELETE SET NULL |
| stock_move_origin_returned_move_id_fkey | FOREIGN KEY | FOREIGN KEY (origin_returned_move_id) REFERENCES stock_move(id) ON DELETE SET NULL |
| stock_move_pkey | PRIMARY KEY | PRIMARY KEY (id) |
| stock_move_picking_type_id_fkey | FOREIGN KEY | FOREIGN KEY (picking_type_id) REFERENCES stock_picking_type(id) ON DELETE SET NULL |
| stock_move_picking_id_fkey | FOREIGN KEY | FOREIGN KEY (picking_id) REFERENCES stock_picking(id) ON DELETE SET NULL |
| stock_move_rule_id_fkey | FOREIGN KEY | FOREIGN KEY (rule_id) REFERENCES stock_rule(id) ON DELETE RESTRICT |
| stock_move_group_id_fkey | FOREIGN KEY | FOREIGN KEY (group_id) REFERENCES procurement_group(id) ON DELETE SET NULL |
| stock_move_warehouse_id_fkey | FOREIGN KEY | FOREIGN KEY (warehouse_id) REFERENCES stock_warehouse(id) ON DELETE SET NULL |
| stock_move_package_level_id_fkey | FOREIGN KEY | FOREIGN KEY (package_level_id) REFERENCES stock_package_level(id) ON DELETE SET NULL |
| stock_move_created_purchase_line_id_fkey | FOREIGN KEY | FOREIGN KEY (created_purchase_line_id) REFERENCES purchase_order_line(id) ON DELETE SET NULL |
| stock_move_purchase_line_id_fkey | FOREIGN KEY | FOREIGN KEY (purchase_line_id) REFERENCES purchase_order_line(id) ON DELETE SET NULL |
| stock_move_bom_line_id_fkey | FOREIGN KEY | FOREIGN KEY (bom_line_id) REFERENCES mrp_bom_line(id) ON DELETE SET NULL |
| stock_move_operation_id_fkey | FOREIGN KEY | FOREIGN KEY (operation_id) REFERENCES mrp_routing_workcenter(id) ON DELETE SET NULL |
| stock_move_created_production_id_fkey | FOREIGN KEY | FOREIGN KEY (created_production_id) REFERENCES mrp_production(id) ON DELETE SET NULL |
| stock_move_production_id_fkey | FOREIGN KEY | FOREIGN KEY (production_id) REFERENCES mrp_production(id) ON DELETE SET NULL |
| stock_move_raw_material_production_id_fkey | FOREIGN KEY | FOREIGN KEY (raw_material_production_id) REFERENCES mrp_production(id) ON DELETE SET NULL |
| stock_move_consume_unbuild_id_fkey | FOREIGN KEY | FOREIGN KEY (consume_unbuild_id) REFERENCES mrp_unbuild(id) ON DELETE SET NULL |
| stock_move_unbuild_id_fkey | FOREIGN KEY | FOREIGN KEY (unbuild_id) REFERENCES mrp_unbuild(id) ON DELETE SET NULL |
| stock_move_workorder_id_fkey | FOREIGN KEY | FOREIGN KEY (workorder_id) REFERENCES mrp_workorder(id) ON DELETE SET NULL |

## Indexes

| Name | Definition |
| ---- | ---------- |
| stock_move_pkey | CREATE UNIQUE INDEX stock_move_pkey ON public.stock_move USING btree (id) |
| stock_move_name_index | CREATE INDEX stock_move_name_index ON public.stock_move USING btree (name) |
| stock_move_create_date_index | CREATE INDEX stock_move_create_date_index ON public.stock_move USING btree (create_date) |
| stock_move_date_index | CREATE INDEX stock_move_date_index ON public.stock_move USING btree (date) |
| stock_move_company_id_index | CREATE INDEX stock_move_company_id_index ON public.stock_move USING btree (company_id) |
| stock_move_date_expected_index | CREATE INDEX stock_move_date_expected_index ON public.stock_move USING btree (date_expected) |
| stock_move_product_id_index | CREATE INDEX stock_move_product_id_index ON public.stock_move USING btree (product_id) |
| stock_move_location_id_index | CREATE INDEX stock_move_location_id_index ON public.stock_move USING btree (location_id) |
| stock_move_location_dest_id_index | CREATE INDEX stock_move_location_dest_id_index ON public.stock_move USING btree (location_dest_id) |
| stock_move_picking_id_index | CREATE INDEX stock_move_picking_id_index ON public.stock_move USING btree (picking_id) |
| stock_move_state_index | CREATE INDEX stock_move_state_index ON public.stock_move USING btree (state) |
| stock_move_origin_returned_move_id_index | CREATE INDEX stock_move_origin_returned_move_id_index ON public.stock_move USING btree (origin_returned_move_id) |
| stock_move_product_location_index | CREATE INDEX stock_move_product_location_index ON public.stock_move USING btree (product_id, location_id, location_dest_id, company_id, state) |
| stock_move_sale_line_id_index | CREATE INDEX stock_move_sale_line_id_index ON public.stock_move USING btree (sale_line_id) |
| stock_move_purchase_line_id_index | CREATE INDEX stock_move_purchase_line_id_index ON public.stock_move USING btree (purchase_line_id) |

## Relations

![er](public.stock_move.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
