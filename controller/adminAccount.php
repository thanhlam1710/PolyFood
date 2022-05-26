<?php
    class adminAccount extends Dcontroller{
        public function __construct()
        {
            $data = array();
            parent::__construct();

        }
        public function index(){
			$this->listAccount();	
		}
		public function listAccount(){
            session::checkSessionAdmin();
			$this->load->view('admin/header');
            $this->load->view('admin/aside');

            $table = "account";
			$accountModel = $this->load->model('adminAccountModel');
			$data['listAccount'] = $accountModel->get_list_account($table);

			$this->load->view('admin/account/listAccount', $data);
		}
        public function deleteAccount($idAccount) {
            $table = "account";
			$accountModel = $this->load->model('adminAccountModel');
            $condition = "account.id_account='$idAccount'";
            $rs = $accountModel->delete_account($table, $condition);
            $mess = array();
            if($rs == true) {
                $mess['alert'] = "Xóa thành công";
                header('Location:'.ROOT_URL."adminAccount/listAccount?alert=".urlencode(serialize($mess)));
            }else {
                $mess['alert'] = "Xóa thất bại";
                header('Location:'.ROOT_URL."adminAccount/listAccount?alert=".urlencode(serialize($mess)));
            }
        }   
        public function updateAccount(){
            
			$this->load->view('admin/header');
            $this->load->view('admin/menu');

            // $table = "account";
			// $accountModel = $this->load->model('adminAccountModel');
			// $data['listAccount'] = $accountModel->get_list_account($table);
            // var_dump($data);

			$this->load->view('admin/account/updateAccount');
			$this->load->view('admin/footer');	
		} 
    }
?>