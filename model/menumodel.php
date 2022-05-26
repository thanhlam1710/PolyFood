<?php 
    class menumodel extends Dmodel {
        public function __construct()
        {
           parent::__construct();
        }
        public function get_list_menu($table){
            $sql = "SELECT *FROM $table ORDER BY id_menu ";
            return $this->db->select_db($sql);
            // $sql = "SELECT *FROM menu ORDER BY id_menu DESC";
            // $query = $this->db->query($sql);
            // $rs = $query->fetchAll();
            // return $rs;
        }
        // tham số được thay thế bằng tham số đinh danh hoặc ẩn(tên bất kì :id)
        public function get_menuId($table, $condition){
            $sql = "SELECT *FROM $table WHERE $condition";
            // $data = array(':id' => $id);
            return $this->db->select_db($sql);
            // $stmt = $this->db->prepare($sql);
            // $stmt->bindParam(':id',$id);
            // $stmt->execute();
            // return $stmt->fetchAll();     
        } 
        public function insert_menu($loadTable_menu, $data){
            return $this->db->insert_db($loadTable_menu, $data);
        } 
        public function update_menu($table, $data,$condition) {
            return $this->db->update_db($table, $data,$condition);
        }
        public function delete_menu($table, $condition) {
            return $this->db->delete_db($table, $condition);
        }
    }
?>