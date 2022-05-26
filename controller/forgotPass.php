<?php
    class forgotPass extends Dcontroller{
        public function __construct()
        {
            parent::__construct();
            
        }

        public function index() {
            $this->forgotPass();
        }

        public function forgotPass() {
            $this->load->view('login_signup/forgotPass');
        }
    }
?>