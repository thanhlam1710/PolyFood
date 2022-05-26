<?php
    class register extends Dcontroller{
        public function __construct()
        {
            parent::__construct();
        }
        public function index() {
            $this->register();
        }

        public function register() {
            $this->load->view('login_signup/register');
        }

        public function auth() {
            if(isset($_POST['register'])) {
                // nhận dữ liệu về từ form và gán cho các biến
                // $alert = array();
                $email_account = trim($_POST['email_account']);
                $name_account = $_POST['name_account'];
                $pass_account = $_POST['pass_account'];

                // tạo biến $data làm mảng chứa dữ liệu
                $data = [
                    // 'email_account' là key (tên cột trong db)
                    // $email_account là dữ liệu nhận về từ form
                    'email_account' => $email_account,
                    'name_account' => $name_account,
                    'pass_account' => $pass_account];
                
                //gán tên bảng cho biến $tableAccount
                $tableAccount = 'account';
                if (($email_account == "" || (!filter_var($email_account, FILTER_VALIDATE_EMAIL))) || $name_account == "" || (($pass_account == "" || (strlen($pass_account)) < 8))) {
                    $mess['alert'] = "Đăng kí thất bại";
                    header('Location:'.ROOT_URL."register?alert=".urlencode(serialize($mess)));
                }else {
                    //tạo biến chứa các phương thức của accountmodel.php
                    $accountModel = $this->load->model('accountmodel');
                    $accountModel->insert_account($tableAccount, $data);
                    // var_dump($email_account,$name_account,$pass_account);
                    //gọi ra phương thức insert_account, truyền tên bảng và biến data đã có ở dòng 23
                    $mess['alert'] = "Đăng kí thành công";
                    header('refresh: 1;'.ROOT_URL."login?alert=".urlencode(serialize($mess)));
                }
            }
        }
    }
?>