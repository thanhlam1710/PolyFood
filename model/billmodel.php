<?php 
    class billmodel extends Dmodel {
        public function __construct()
        {
           parent::__construct();
        }
        public function get_list_bill($loadTable_bill){
            $sql = "SELECT *FROM $loadTable_bill ORDER BY id_bill DESC";
            return $this->db->select_db($sql);
        }

        public function get_bill_confirm($loadTable_bill, $loadTable_store, $conditionBill){
            $sql = "SELECT *FROM $loadTable_bill, $loadTable_store WHERE $loadTable_bill.fk_id_store = $loadTable_store.id_store AND $loadTable_bill.fk_id_account = $conditionBill ORDER BY $loadTable_bill.id_bill DESC";
            return $this->db->select_db($sql);
        }
        // tham số được thay thế bằng tham số đinh danh hoặc ẩn(tên bất kì :id)
        public function get_billId($loadTable_bill, $id){
            $sql = "SELECT *FROM $loadTable_bill WHERE id_bill =:id";
            $data = array(':id' => $id);
            return $this->db->select_db($sql,$data); 
        }
        public function get_one_bill($loadTable_bill, $id) {
            $sql = "SELECT *FROM $loadTable_bill WHERE id_bill =:id";
            $data = array(':id' => $id);
            return $this->db->select_db_one($sql,$data);
        }
        public function get_billByUser($loadTable_bill, $id_user){
            $sql = "SELECT *FROM $loadTable_bill WHERE fk_id_account =:id";
            $data = array(':id' => $id_user);
            return $this->db->select_db($sql,$data); 
        }
        public function get_bill_detail($table_bill,$table_account, $table_store,$id_user){
            $sql = "SELECT *FROM $table_bill, $table_account, $table_store WHERE $table_bill.fk_id_account = $id_user AND $table_account.id_account = $table_bill.fk_id_account  AND $table_bill.fk_id_store = $table_store.id_store GROUP BY $table_bill.id_bill ORDER BY $table_bill.id_bill DESC";
            return $this->db->select_db($sql);
        }

        //=== các function lấy thông tin bill cửa hàng ===

        // public function get_bill_store($table_bill,$table_orders, $table_food, $id_store){
        //     $sql = "SELECT *FROM $table_bill, $table_orders, $table_food WHERE $table_bill.fk_id_store = $id_store AND $table_bill.status_bill = 1 AND $table_bill.id_bill = $table_orders.fk_id_bill AND $table_food.id_food = $table_orders.fk_id_food GROUP BY $table_bill.id_bill ORDER BY $table_bill.id_bill DESC";
        //     return $this->db->select_db($sql);
        // }
        public function get_billByStore($table_bill, $id_store){
            $sql = "SELECT *FROM $table_bill WHERE $table_bill.fk_id_store = $id_store AND $table_bill.status_bill = 1 ORDER BY id_bill DESC";
            return $this->db->select_db($sql);
        }
        public function get_ordersByBill($table_orders, $idBill){
            $sql = "SELECT *FROM $table_orders WHERE fk_id_bill = $idBill";
            return $this->db->select_db($sql);
        }
        public function get_foodByOrders($table_food, $idOrders){
            $sql = "SELECT *FROM $table_food WHERE id_food = $idOrders GROUP BY id_food";
            return $this->db->select_db($sql);
        }
        //=== end function lấy thông tin bill cửa hàng ===

        public function insert_bill($loadTable_bill, $data){
            return $this->db->insert_db($loadTable_bill, $data);
        } 
        public function update_bill($loadTable_bill, $data,$condition) {
            return $this->db->update_db($loadTable_bill, $data,$condition);
        }
        public function delete_bill($loadTable_bill, $condition) {
            return $this->db->delete_db($loadTable_bill, $condition);
        }
    }
?>