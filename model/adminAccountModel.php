<?php 
    class adminAccountModel extends Dmodel {
        public function __construct()
        {
           parent::__construct();
        }
        public function get_list_account($table){
            $sql = "SELECT *FROM $table ORDER BY id_account";
            return $this->db->select_db($sql);
            // $sql = "SELECT *FROM menu ORDER BY id_store DESC";
            // $query = $this->db->query($sql);
            // $rs = $query->fetchAll();
            // return $rs;
        }
        // tham số được thay thế bằng tham số đinh danh hoặc ẩn(tên bất kì :id)
        public function get_accountId($table, $condition){
            $sql = "SELECT *FROM $table WHERE $condition";
            // $data = array(':id' => $id);
            return $this->db->select_db($sql);
            // $stmt = $this->db->prepare($sql);
            // $stmt->bindParam(':id',$id);
            // $stmt->execute();
            // return $stmt->fetchAll();     
        } 
        public function insert_account($loadTable_menu, $data){
            return $this->db->insert_db($loadTable_menu, $data);
        } 
        public function update_account($table, $data,$condition) {
            return $this->db->update_db($table, $data,$condition);
        }
        public function delete_account($table, $condition) {
            return $this->db->delete_db($table, $condition);
        }
    }
?>