<?php 
    class loginAdminModel extends Dmodel {
        public function __construct()
        {
           parent::__construct();
        }
        public function login($tableAccount,$username,$pass){
            $sql = "SELECT *FROM $tableAccount WHERE name_account=? AND pass=?";
            return $this->db->affect_rows($sql,$username,$pass);
        }
        public function get_login($tableAccount,$username,$pass){
            $sql = "SELECT *FROM $tableAccount WHERE name_account=? AND pass=?";
            return $this->db->select_user($sql,$username,$pass);
        }
    }
?>