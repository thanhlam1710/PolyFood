<?php 
    class tagmodel extends Dmodel {
        public function __construct()
        {
           parent::__construct();
        }
        public function get_info_tag($loadTable_tag){
            $sql = "SELECT *FROM $loadTable_tag ORDER BY id_product_tag DESC";
            return $this->db->select_db($sql);
            // $sql = "SELECT *FROM menu ORDER BY id_menu DESC";
            // $query = $this->db->query($sql);
            // $rs = $query->fetchAll();
            // return $rs;
        }
        // tham số được thay thế bằng tham số đinh danh hoặc ẩn(tên bất kì :id)
        public function get_tagId($loadTable_tag, $id){
            $sql = "SELECT *FROM $loadTable_tag WHERE id_product_tag =:id";
            $data = array(':id' => $id);
            return $this->db->select_db($sql,$data);
            // $stmt = $this->db->prepare($sql);
            // $stmt->bindParam(':id',$id);
            // $stmt->execute();
            // return $stmt->fetchAll();     
        } 
        public function insert_tag($loadTable_tag, $data){
            return $this->db->insert_db($loadTable_tag, $data);
        } 
        public function update_tag($loadTable_tag, $data,$condition) {
            return $this->db->update_db($loadTable_tag, $data,$condition);
        }
        public function delete_tag($loadTable_tag, $condition) {
            return $this->db->delete_db($loadTable_tag, $condition);
        }
    }
?>