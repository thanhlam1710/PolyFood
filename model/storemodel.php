<?php 
    class storemodel extends Dmodel {
        public function __construct()
        {
           parent::__construct();
        }
        // public function get_info_store($loadTable_store){
        //     $sql = "SELECT *FROM $loadTable_store ORDER BY id_store DESC";
        //     return $this->db->select_db($sql);
        //     // $sql = "SELECT *FROM menu ORDER BY id_menu DESC";
        //     // $query = $this->db->query($sql);
        //     // $rs = $query->fetchAll();
        //     // return $rs;
        // }
        
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
        public function get_store_detail($table_store,$table_province, $table_ward,$id_user){
            $sql = "SELECT *FROM $table_store, $table_province, $table_ward WHERE ";
            return $this->db->select_db($sql);

            // $sql = "SELECT *FROM food ORDER BY id_food DESC";
            // $query = $this->db->query($sql);
            // $rs = $query->fetchAll();
            // return $rs;
        }
        public function get_list_store($table) {
            $sql = "SELECT *FROM $table ORDER BY id_store DESC";
            return $this->db->select_db($sql);
        }
        public function get_storeByIdStore($loadTable_store, $id){
            $sql = "SELECT *FROM $loadTable_store WHERE id_store =:id";
            $data = array(':id' => $id);
            return $this->db->select_db($sql,$data);
        //     // $stmt = $this->db->prepare($sql);
        //     // $stmt->bindParam(':id',$id);
        //     // $stmt->execute();
        //     // return $stmt->fetchAll();     
        } 

        // testing
        public function get_storeBySearch($loadTable_store,$keyword,$id_menu){
            $getData = "";
            $loadData = "";
            $sql = "SELECT *FROM $loadTable_store WHERE 1";
            if($keyword != "") {
                $sql.=" and signature_food like '%".$keyword."%' or name_store like '%".$keyword."%' or street_store like '%".$keyword."%' ";
                // $data = array(':id' => $keyword);
                $loadData = $this->db->pdo_query($sql);
            } 
            if($id_menu != "" && $id_menu>0){
                $sql.=" and fk_id_menu ='".$id_menu."'";
                // $data = array(':id' => $id_menu);
                $loadData = $this->db->pdo_query($sql);
            }
            $sql.=" ORDER BY id_store desc";
            if ($loadData != "") {
                $getData = $loadData;
            } else {
                $getData = $this->db->pdo_query($sql);
            }
            return $getData;
        }
        public function get_storeByIdMenu($loadTable_store, $id){
            $sql = "SELECT *FROM $loadTable_store WHERE 1";
            if($id>0){
                $sql.=" and fk_id_menu=:id";
            }
            $sql.=" order by id_store desc";
            $data = array(':id' => $id);
            return $this->db->select_db($sql,$data); 
        } 
        public function get_storeByIdKeyword($loadTable_store, $keyword){
            $sql = "SELECT *FROM $loadTable_store WHERE fk_id_menu =:keyword";
            $data = array(':keyword' => $keyword);
            return $this->db->select_db($sql,$data); 
        } 

        // end testing


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