<?php 
    class accountmodel extends Dmodel {
        public function __construct()
        {
           parent::__construct();
        }
        public function get_info_account($loadTable_account){
            $sql = "SELECT *FROM $loadTable_account ORDER BY id_account DESC";
            return $this->db->select_db($sql);
            // $sql = "SELECT *FROM menu ORDER BY id_menu DESC";
            // $query = $this->db->query($sql);
            // $rs = $query->fetchAll();
            // return $rs;
        }
        // tham số được thay thế bằng tham số đinh danh hoặc ẩn(tên bất kì :id)
        public function get_accountId($loadTable_account, $id){
            $sql = "SELECT *FROM $loadTable_account WHERE id_account =:id";
            $data = array(':id' => $id);
            return $this->db->select_db($sql,$data);
            // $stmt = $this->db->prepare($sql);
            // $stmt->bindParam(':id',$id);
            // $stmt->execute();
            // return $stmt->fetchAll();     
        } 
        public function insert_account($loadTable_account, $data){
            return $this->db->insert_db($loadTable_account, $data);
        } 
        public function update_account($loadTable_account, $data,$condition) {
            return $this->db->update_db($loadTable_account, $data,$condition);
        }
        public function delete_account($loadTable_account, $condition) {
            return $this->db->delete_db($loadTable_account, $condition);
        }
    }
?>