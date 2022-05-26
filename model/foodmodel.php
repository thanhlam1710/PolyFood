<?php 
    class foodmodel extends Dmodel {
        public function __construct()
        {
           parent::__construct();
        }

        public function get_list_food($table_food,$table_menu, $table_store){
            $sql = "SELECT *FROM $table_food, $table_menu, $table_store WHERE $table_food.fk_id_menustore = $table_menu.id_menu_store AND $table_menu.fk_id_store = $table_store.id_store ORDER BY $table_menu.id_menu_store DESC";
        
            // $sql = "SELECT *FROM $table_food, $table_menu WHERE $table_food.fk_id_menustore = $table_menu.id_menu_store ORDER BY $table_food.id_food DESC";
           
            // $sql = "SELECT *FROM 
            // $table_food JOIN $table_menu ON $table_food.fk_id_menustore = $table_menu.id_menu_store JOIN $table_store ON $table_store.id_store = $table_menu.fk_id_store
            // ORDER BY $table_food.id_food DESC";
            return $this->db->select_db($sql);

            // $sql = "SELECT *FROM food ORDER BY id_food DESC";
            // $query = $this->db->query($sql);
            // $rs = $query->fetchAll();
            // return $rs;
        }

        // tham số được thay thế bằng tham số đinh danh hoặc ẩn(tên bất kì :id)
        public function get_foodId($table, $condition){
            $sql = "SELECT *FROM $table WHERE $condition";
            return $this->db->select_db($sql);
            // $sql = "SELECT *FROM $loadTable_food WHERE id_food =:id";
            // $data = array(':id' => $id);
            // return $this->db->select_db($sql,$data);
            // $stmt = $this->db->prepare($sql);
            // $stmt->bindParam(':id',$id);
            // $stmt->execute();
            // return $stmt->fetchAll();     
        }

        public function insert_food($table, $data){
            return $this->db->insert_db($table, $data);
        } 

        public function update_food($table, $data,$condition) {
            return $this->db->update_db($table, $data,$condition);
        }

        public function delete_food($loadTable_food, $condition) {
            return $this->db->delete_db($loadTable_food, $condition);
        }
    }
?>