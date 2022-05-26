<?php 
    class location extends Dmodel {
        public function __construct()
        {
           parent::__construct();
        }
        public function get_province($loadTable_province){
            $sql = "SELECT *FROM $loadTable_province";
            return $this->db->select_db($sql);
        }
        public function get_district($loadTable_district){
            $sql = "SELECT *FROM $loadTable_district";
            return $this->db->select_db($sql);
        }
        public function get_ward($loadTable_ward){
            $sql = "SELECT *FROM $loadTable_ward";
            return $this->db->select_db($sql);
        }
        public function get_districtByProvince($loadTable_district,$id){
            $sql = "SELECT *FROM $loadTable_district WHERE _province_id =:id";
            $data = array(':id' => $id);
            return $this->db->select_db($sql,$data);
        }
        public function get_wardByDistrict($loadTable_ward,$id){
            $sql = "SELECT *FROM $loadTable_ward WHERE _district_id =:id";
            $data = array(':id' => $id);
            return $this->db->select_db($sql,$data);
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