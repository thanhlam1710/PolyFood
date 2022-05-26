<?php 
    class loginmodel extends Dmodel {
        public function __construct()
        {
           parent::__construct();
        }
        public function login($tableAccount,$email,$pass){
            $sql = "SELECT *FROM $tableAccount WHERE email_account='$email' AND pass_account='$pass'";
            return $this->db->affect_rows($sql,$email,$pass);
        }
        public function get_login($tableAccount,$email,$pass){
            $sql = "SELECT *FROM $tableAccount WHERE email_account='$email' AND pass_account='$pass'";
            return $this->db->select_user($sql,$email,$pass);
        }
    }
?>