<?php
    class login extends Dcontroller{
        public function __construct()
        {
            $message = array();
            parent::__construct();
        }
        public function index() {
            $this->login();
        }
        public function login() {
            $this->load->view('login_signup/login');
            // session::start();
            if(session::getSession('login') == true) {
                header("Location:".ROOT_URL."index/home");
            }
        }

        // public function home(){
        //     session::checkSession();
        //     $this->load->view('header');
        //     $this->load->view('slider');
        //     $this->load->view('home');
        //     $this->load->view('footer');
        // }
        // public function dashboard() {
        //     session::checkSession(); // Kiểm trá có đăng nhập hay ko, có thằng redirect tới trang dashboard này
        //     $this->load->view('header');
        //     $this->load->view('home');
            
        // }
        // public function dashboard() {
        //     echo "Login Successful ";
        // }
        public function auth() {
            if(isset($_POST['login'])) {
                $email = $_POST['email_account'];
                $pass = $_POST['pass_account'];
                $tableAccount = 'account';
                $loginModel = $this->load->model('loginmodel');
                $count = $loginModel->login($tableAccount,$email,$pass);
            }
            if($count == 0) {
                header("Location:".ROOT_URL."login");
            }else {
                $rs = $loginModel->get_login($tableAccount,$email,$pass);
                //save session
                // session::start(); // access class session
                session::setSession('login', true); // check session['login'] đúng thì redirect tới trang dashboard
                session::setSession('email',$rs[0]['email_account']); // set session email = email_account
                session::setSession('userid',$rs[0]['id_account']); //set session userid = id_account
                $_SESSION['user'] = $rs;
                header("Location:".ROOT_URL."index/home");
            }
        }
        public function logout() {
            session::start();
            session::destroy();
            header("Location:".ROOT_URL."");
        }
    }
?>
