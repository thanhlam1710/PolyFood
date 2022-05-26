<?php

    class app{
        public $url;
        public $ctrlName = "index";
        public $methodName = "index";
        public $path = "./controller/";
        public $controller;

        public function __construct(){
            $this->getUrl();
            $this->loadctlr();
            $this->callMethod();
        }
        public function getUrl(){
            $this->url = isset($_GET['url']) ? $_GET['url'] : NULL;
                
            if($this->url!=NULL){
                $this->url = rtrim($this->url, '/');
                $this->url = explode('/', filter_var($this->url, FILTER_SANITIZE_URL));
            }else{
                unset($this->url);
            }
        }
        public function loadctlr(){
            if(!isset($this->url[0])){ 
                include $this->path.$this->ctrlName.'.php';
                $this->controller = new $this->ctrlName();
            }else{

                $this->ctrlName = $this->url[0];
                $fileName = $this->path.$this->ctrlName.'.php';

                if(file_exists($fileName)){
                    include $fileName;

                    if(class_exists($this->ctrlName)){
                        $this->controller = new $this->ctrlName();
                    }else{

                    }

                }else{

                }
            }
        }
        public function callMethod(){
            if(isset($this->url[2])){
                $this->methodName = $this->url[1];
                if(method_exists($this->controller, $this->methodName)){
                    $this->controller->{$this->methodName}($this->url[2]);
                }else{
                    header("Location:".ROOT_URL."index/error404/");
                }
            }else{
                if(isset($this->url[1])){
                    $this->methodName = $this->url[1];

                    if(method_exists($this->controller, $this->methodName)){

                    $this->controller->{$this->methodName}();

                    }else{
                        header("Location:".ROOT_URL."index/error404/");
                    }
                }else{

                    if(method_exists($this->controller, $this->methodName)){

                    $this->controller->{$this->methodName}();

                    }else{
                        header("Location:".ROOT_URL."index/error404/");
                    }
                }
            }
        }
    }
?>