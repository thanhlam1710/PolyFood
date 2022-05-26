<?php
    class adminmenu extends Dcontroller{
        public function __construct()
        {
            $data = array();
            parent::__construct();

        }
        public function index(){
			$this->addmenu();	
		}
		public function addmenu(){
            session::checkSessionAdmin();
			$this->load->view('admin/header');
            $this->load->view('admin/aside');
			$this->load->view('admin/menu/addmenu');	
		}
        public function insertmenu() {
            $nameCate = $_POST['name_menu'];
            // $descCate = $_POST['desc_menu'];
            $table = 'menu';
            $data = array(
                'name_menu' => $nameCate,
                // 'desc_menu' => $descCate 
            );
            $menuModel = $this->load->model('menumodel');
            $rs = $menuModel->insert_menu($table,$data);
            $mess = array();
            if($rs == true) {
                $mess['alert'] = "Thêm loại thành công";
                header('Location:'.ROOT_URL."adminmenu/listmenu?alert=".urlencode(serialize($mess)));
            }else {
                $mess['alert'] = "Thêm loại thất bại";
                header('Location:'.ROOT_URL."adminmenu?alert=".urlencode(serialize($mess)));
            }
        }
        public function listmenu(){
            session::checkSessionAdmin();
			$this->load->view('admin/header');
            $this->load->view('admin/aside');
         
			$table = "menu";
			$menuModel = $this->load->model('menumodel');
			$data['listmenu'] = $menuModel->get_list_menu($table);

			$this->load->view('admin/menu/listmenu',$data);
		}
        public function deletemenu($idMenu) {
            $menuModel= $this->load->model('menumodel');
            $table = 'menu';
            $condition = "menu.id_menu='$idMenu'";
            $rs = $menuModel->delete_menu($table, $condition);
            $mess = array();
            if($rs == true) {
                $mess['alert'] = "Xóa thành công";
                header('Location:'.ROOT_URL."adminmenu/listmenu?alert=".urlencode(serialize($mess)));
            }else {
                $mess['alert'] = "Xóa thất bại";
                header('Location:'.ROOT_URL."adminmenu/listmenu?alert=".urlencode(serialize($mess)));
            }
        }    
        public function editmenu($idMenu) {
            session::checkSessionAdmin();
            $this->load->view('admin/header');
            $this->load->view('admin/aside');
            $table = "menu";
            $condition = "menu.id_menu='$idMenu'";
			$menuModel = $this->load->model('menumodel');
			$data['editmenu'] = $menuModel->get_menuId($table,$condition);
			$this->load->view('admin/menu/editmenu',$data);
        }
        public function updatemenu($idMenu) {
            if(isset($_POST['updatemenu'])){
                $nameCate = $_POST['name_menu'];
                $table = "menu"; 
                $data = array(
                    'name_menu' => $nameCate,
                );
                $condition = "id_menu='$idMenu'";
                $menuModel = $this->load->model('menumodel');
                $rs = $menuModel->update_menu($table, $data, $condition);
                $mess = array();
                if($rs == 1) {
                    $mess['alert'] = "Cập nhật thành công";
                    header('Location:'.ROOT_URL."adminmenu/listmenu?alert=".urlencode(serialize($mess)));
                }else {
                    $mess['alert'] = "Cập nhật thất bại";
                    header('Location:'.ROOT_URL."adminmenu/listmenu?alert=".urlencode(serialize($mess)));
                }
            }
        }
    }
?>