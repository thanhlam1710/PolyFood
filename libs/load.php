<?php
    class load{
        protected $load = array();
        public function __construct(){
          
        }
        public function view($filename, $data="") {      
            include_once './view/'.$filename.'.php';  
            return $data;         
        }
        public function model($filename) {
            include_once './model/'.$filename.'.php';
            return new $filename;
        }
    }
?>