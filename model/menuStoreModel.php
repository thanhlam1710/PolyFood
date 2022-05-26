<?php 
    class menuStoreModel extends Dmodel {
        public function __construct()
        {
           parent::__construct();
        }
        public function get_list_menu_store($table){
            $sql = "SELECT *FROM $table ORDER BY id_menu_store ";
            return $this->db->select_db($sql);
        }
        // tham số được thay thế bằng tham số đinh danh hoặc ẩn(tên bất kì :id)
        public function get_menuId_store($table, $condition){
            $sql = "SELECT *FROM $table WHERE $condition";
            return $this->db->select_db($sql);   
        } 
        public function insert_menu_store($loadTable_menu, $data){
            return $this->db->insert_db($loadTable_menu, $data);
        } 
        public function update_menu_store($table, $data,$condition) {
            return $this->db->update_db($table, $data,$condition);
        }
        public function delete_menu_store($table, $condition) {
            return $this->db->delete_db($table, $condition);
        }
    }
?>