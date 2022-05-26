<?php 
    class ordersmodel extends Dmodel {
        public function __construct()
        {
           parent::__construct();
        }
        public function get_list_orders($loadTable_orders){
            $sql = "SELECT *FROM $loadTable_orders ORDER BY id_order DESC";
            return $this->db->select_db($sql);
            // $sql = "SELECT *FROM orders ORDER BY id_order DESC";
            // $query = $this->db->query($sql);
            // $rs = $query->fetchAll();
            // return $rs;
        }
        // tham số được thay thế bằng tham số đinh danh hoặc ẩn(tên bất kì :id)
        public function get_ordersId($loadTable_orders, $id){
            $sql = "SELECT *FROM $loadTable_orders WHERE id_order =:id";
            $data = array(':id' => $id);
            return $this->db->select_db($sql,$data);
            // $stmt = $this->db->prepare($sql);
            // $stmt->bindParam(':id',$id);
            // $stmt->execute();
            // return $stmt->fetchAll();     
        } 
        public function insert_orders($loadTable_orders, $data){
            return $this->db->insert_db($loadTable_orders, $data);
        } 
        public function update_orders($loadTable_orders, $data,$condition) {
            return $this->db->update_db($loadTable_orders, $data,$condition);
        }
        public function delete_orders($loadTable_orders, $condition) {
            return $this->db->delete_db($loadTable_orders, $condition);
        }
    }
?>