<?php 
    class homemodel extends Dmodel {
        public function __construct()
        {
           parent::__construct();
        }

        public function get_info_store($loadTable_store){
            $sql = "SELECT *FROM $loadTable_store ORDER BY id_store DESC";
            return $this->db->select_db($sql);
            // $sql = "SELECT *FROM menu ORDER BY id_menu DESC";
            // $query = $this->db->query($sql);
            // $rs = $query->fetchAll();
            // return $rs;
        }
        public function get_info_store_limit($loadTable_store){
            $sql = "SELECT *FROM $loadTable_store ORDER BY id_store DESC LIMIT 8";
            return $this->db->select_db($sql);
            // $sql = "SELECT *FROM menu ORDER BY id_menu DESC";
            // $query = $this->db->query($sql);
            // $rs = $query->fetchAll();
            // return $rs;
        }
        public function get_info_store_view($loadTable_store){
            $sql = "SELECT *FROM $loadTable_store ORDER BY view_store DESC LIMIT 4";
            return $this->db->select_db($sql);
            // $sql = "SELECT *FROM menu ORDER BY id_menu DESC";
            // $query = $this->db->query($sql);
            // $rs = $query->fetchAll();
            // return $rs;
        }
        // tham số được thay thế bằng tham số đinh danh hoặc ẩn(tên bất kì :id)
        public function get_storeId($loadTable_store, $id){
            $sql = "SELECT *FROM $loadTable_store WHERE fk_id_account =:id";
            $data = array(':id' => $id);
            return $this->db->select_db($sql,$data);
            // $stmt = $this->db->prepare($sql);
            // $stmt->bindParam(':id',$id);
            // $stmt->execute();
            // return $stmt->fetchAll();     
        }
        public function get_storeByIdStore($loadTable_store, $id){
            $sql = "SELECT *FROM $loadTable_store WHERE id_store =:id";
            $data = array(':id' => $id);
            return $this->db->select_db($sql,$data);
            // $stmt = $this->db->prepare($sql);
            // $stmt->bindParam(':id',$id);
            // $stmt->execute();
            // return $stmt->fetchAll();     
        } 
        public function insert_store($loadTable_store, $data){
            return $this->db->insert_db($loadTable_store, $data);
        } 
        public function update_store($loadTable_store, $data,$condition) {
            return $this->db->update_db($loadTable_store, $data,$condition);
        }
        public function delete_store($loadTable_store, $condition) {
            return $this->db->delete_db($loadTable_store, $condition);
        }
    }
?>