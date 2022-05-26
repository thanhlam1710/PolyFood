<?php
    class loginadmin extends Dcontroller{
        public function __construct()
        {
            $message = array();
            parent::__construct();
        }
        public function index() {
            $this->loginadmin();
        }
        public function loginadmin() {
            $this->load->view('admin/loginadmin');  
            // session::start();
            if(session::getSession('loginadmin') == true) {
                header("Location:".ROOT_URL."loginadmin/dashboard");
            }
        }
     
        public function dashboard() {
            session::checkSessionAdmin(); // Kiểm trá có đăng nhập hay ko, có thằng redirect tới trang dashboard này
            $this->load->view('admin/header');
            $this->load->view('admin/aside');
            $this->load->view('admin/article');
        }

        public function auth() {
            if(isset($_POST['loginadmin'])) {
                $username = $_POST['username'];
                $pass = $_POST['password'];
                $tableAccount = 'admin_account';
                $loginAdminModel = $this->load->model('loginAdminModel');
                $count = $loginAdminModel->login($tableAccount,$username,$pass);
            }
            if($count == 0) {
                header("Location:".ROOT_URL."loginadmin");
            }else {
                $rs = $loginAdminModel->get_login($tableAccount,$username,$pass);
                //save session
                session::start(); // access class session
                session::setSession('loginadmin', true); // check session['login'] đúng thì redirect tới trang dashboard
                session::setSession('username',$rs[0]['name_account']); // set session username = name_account
                session::setSession('userid',$rs[0]['id_account']); //set session username = id_account
                header("Location:".ROOT_URL."loginadmin/dashboard");
            }
        }
        public function logout() {
            session::start();
            session::unset('loginadmin');
            // session::destroy();
            header("Location:".ROOT_URL."loginadmin");
        }
    }
?>