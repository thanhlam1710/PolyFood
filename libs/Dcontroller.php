<?php
class Dcontroller{
    protected $load = array();
    public function __construct(){
        session::start();
       $this->load = new load();
    }
}
?>