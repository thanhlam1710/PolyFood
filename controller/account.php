<?php
    class account extends Dcontroller{
        public function __construct()
        {
            parent::__construct();
			
        }
		public function index() {
            $this->updateAccount();
        }
		public function updateAccount() {
			if(isset($_SESSION['user'])){
				$this->load->view('header');
				$this->load->view('account/updateAccount');
				$this->load->view('footer');

				$tableAccount = 'account';
			} else{
				$this->load->view('error404');
			}
			

			// $accountModel = $this->load->model('accountmodel');
			// $accountModel->get_accountId($tableAccount, $id);
		}

		public function editAvatar() {
			if(isset($_POST['editAvatar'])) {
				$img = $_FILES['img']['name'];
				$id = $_POST['id_account'];
				$condition = 'id_account = '.$id;
				//Thư mục bạn sẽ lưu file upload
				$target_dir = "./view/uploads/avatarAccount/";
				//Vị trí file lưu tạm trong server (file sẽ lưu trong images, với tên giống tên ban đầu)
				$target_file = $target_dir . basename($_FILES["img"]["name"]);
				if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
					// echo "File ". basename( $_FILES["img"]["name"]);
					// echo "File lưu tại " . $target_file;
				} else {
					
				}
				// var_dump($target_dir,$target_file);
                $data = ['avatar_account' => $img];
                
                $tableAccount = 'account';

                $accountModel = $this->load->model('accountmodel');

                $accountModel->update_account($tableAccount, $data, $condition);

				$_SESSION['user'] = $accountModel->get_accountId($tableAccount, $id);

                header("Location:".ROOT_URL."account");
            }
		}

		public function editInfo(){
			if(isset($_POST['editInfo'])) {
				$name = $_POST['name_account'];
				$gender = $_POST['gender_account'];
				$email = $_POST['email_account'];
				$id = $_POST['id_account'];
				$condition = 'id_account = '.$id;

                $data = [
					'name_account' => $name,
					'gender_account' => $gender,
					'email_account' => $email
				];
                
                $tableAccount = 'account';

                $accountModel = $this->load->model('accountmodel');

                $accountModel->update_account($tableAccount, $data, $condition);

				$_SESSION['user'] = $accountModel->get_accountId($tableAccount, $id);
                header("Location:".ROOT_URL."account");
            }
		}

		public function editPass() {
			# code... 
		}

		public function editPhone() {
			if(isset($_POST['editPhone'])) {
				$phone = $_POST['phone_account'];
				$id = $_POST['id_account'];
				$condition = 'id_account = '.$id;
				
                $data = ['phone_account' => $phone];
                
                $tableAccount = 'account';

                $accountModel = $this->load->model('accountmodel');

                $accountModel->update_account($tableAccount, $data, $condition);
				
				$_SESSION['user'] = $accountModel->get_accountId($tableAccount, $id);
                header("Location:".ROOT_URL."account");
            }
		}

        public function orderDetail() {
			if(isset($_SESSION['user'])){
                $table_bill = 'bill';
				$table_account = 'account';
				$table_store = 'store';
				$id_user = $_SESSION['user'][0]['id_account'];
				$billModel = $this->load->model('billmodel');

				$provinceModel= $this->load->model('location');
				$loadTable_province = 'province';
				$data['province'] = $provinceModel->get_province($loadTable_province);

				$districtModel= $this->load->model('location');
				$loadTable_district = 'district';
				$data['district'] = $districtModel->get_district($loadTable_district);

				$wardModel= $this->load->model('location');
				$loadTable_ward = 'ward';
				$data['ward'] = $wardModel->get_ward($loadTable_ward);
				// $_SESSION['billUser'] = $billModel->get_billByUser($tableBill,$id_user);
				$_SESSION['billUser'] = $billModel->get_bill_detail($table_bill,$table_account, $table_store, $id_user);

				// var_dump($_SESSION['billUser']);

				$this->load->view('header');
				$this->load->view('account/orderDetail',$data);
				$this->load->view('footer');
            } else{
                $this->load->view('error404');
            }
		}
    }
	

?>