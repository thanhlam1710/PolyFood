<?php
    class adminstore extends Dcontroller{
        public function __construct()
        {
            $data = array();
            parent::__construct();
        }
        public function index(){
			$this->listStore();	
		}
		public function listStore(){
            session::checkSessionAdmin();
			$this->load->view('admin/header');
            $this->load->view('admin/aside');

            $table = "store";
			$storeModel = $this->load->model('adminstoremodel');
			$data['listStore'] = $storeModel->get_list_store($table);

			$this->load->view('admin/store/listStore', $data);	
		}
        public function updateStore($idStore){
            $this->load->view('admin/header');
            $this->load->view('admin/aside');

            $table = "store";
            $condition = "id_store='$idStore'"; 
			$storeModel = $this->load->model('adminstoremodel');
			$data['listStore'] = $storeModel->get_storeId($table, $condition);

            $this->load->view('admin/store/updateStore', $data);
        }   

        public function editStore(){
            if(isset($_POST['saveAll'])){
                $status_store = $_POST['status_store'];
                $id = $_POST['id_store'];
                $condition = "id_store='$id'";
                $table = "store";

                $data = [
                    'status_store' => $status_store,
                ];
                
                $storeModel = $this->load->model('adminstoremodel');
			    $storeModel->update_store($table, $data, $condition);
                header("Location:".ROOT_URL."adminstore/listStore");
            }
        }
    }
?>