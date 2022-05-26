<?php
    class resultSearch extends Dcontroller{
        public function __construct()
        {   
            $data = array();
            $alert = array();
            parent::__construct();
        }
        public function index() {
            $this->resultSearch();
        }

        public function resultSearch() {
            if (isset($_POST['keyword'])&&($_POST['keyword']!="")) {
                $keyword=$_POST['keyword'];
            } else {
                $keyword="";
            }

            if (isset($_GET['id'])&&($_GET['id']>0)) {
                $id_menu=$_GET['id'];
                
            } else {
                $id_menu=0;
            }
            // $data = [
            //     'keyword' => $keyword,
            //     'id_menu' => $id_menu
            // ];
            // var_dump($id_menu);
            $tableStore = 'store';
            $storeModel = $this->load->model('storemodel');
            $data['storeInfo'] = $storeModel->get_storeBySearch($tableStore,$keyword,$id_menu);
            // $_SESSION['storeInfo'] = $storeInfo;
            // var_dump($_SESSION['storeInfo']);
            $this->load->view('header');
            $this->load->view('resultSearch/resultSearch',$data);
            $this->load->view('footer');
            
        }
     
        public function menulist() {
            $this->load->view('header');
            $menuModel= $this->load->model('menumodel');
            $loadTable_menu = 'menu';
            $data['menuid'] = $menuModel->get_list_menu($loadTable_menu);
            $this->load->view('resultSearch/resultSearch',$data);
            $this->load->view('footer');
        }

        // ------------------ testing ------------------------- //
        public function menuid() {
            $this->load->view('header');
            $menuModel= $this->load->model('menumodel');
            $id = 3;
            $loadTable_menu = 'menu';
            $data['menuid'] = $menuModel->get_menuId($loadTable_menu, $id);
            $this->load->view('menuid',$data);
            $this->load->view('footer');
        }
        // --------------------------------------------------- //
        
        public function insertmenu() {
            $menuModel= $this->load->model('menumodel');
            $loadTable_menu = 'menu';
            $name = $_POST['name'];
            $desc = $_POST['desc'];
            $data = array(
                'name_menu' => $name,
                'desc_menu' => $desc,
            );
            // $data['menuid'] = $menuModel->insert_menu($loadTable_menu, $data);
            $rs = $menuModel->insert_menu($loadTable_menu, $data);
            if($rs == 1){
                $alert['alert'] = 'Thành công';
            }else{
                $alert['alert'] = 'Thất bại';       
            }
            $this->load->view('form',$alert);
        }
     
        public function updatemenu() {
            $menuModel= $this->load->model('menumodel');
            $loadTable_menu = 'menu';
            $id = 3;
            $condition = "menu.id_menu='$id'";
            $data = array(
                'name_menu' => 'Bia',
                'desc_menu' => 'Bia ngon',
            );
            $rs = $menuModel->update_menu($loadTable_menu, $data, $condition);
            if($rs == 1){
                echo "Cập nhật thành công";
            }else{
                echo "Cập nhật thất bại";      
            }
        }

        public function deletemenu($id) {
            $menuModel= $this->load->model('menumodel');
            $table = 'menu';
            $condition = "menu.id_menu='$id'";
            $rs = $menuModel->delete_menu($table, $condition);
            if($rs == 1){
                echo "Xóa thành công";
            }else{
                echo "Xóa thất bại";      
            }
        }
    }
?>