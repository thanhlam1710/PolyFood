<?php
    class registerStore extends Dcontroller{
        public function __construct()
        {
            parent::__construct();
        }
        public function index() {
            $this->registerStore();
        }

        public function registerStore() {
            if(isset($_SESSION['user'])){
                $menuModel= $this->load->model('menumodel');
                $loadTable_menu = 'menu';
                $data['menuid'] = $menuModel->get_list_menu($loadTable_menu);

                $provinceModel= $this->load->model('location');
                $loadTable_province = 'province';
                $data['province'] = $provinceModel->get_province($loadTable_province);

                $this->load->model('tagmodel');
                $this->load->view('header');
                $this->load->view('registerStore/registerStore',$data);
                $this->load->view('footer');
            } else{
                $this->load->view('error404');
            }
            
        }
        public function loadDistrict($str){
            $districtModel= $this->load->model('location');
            $loadTable_district = 'district';
            $id = $str;
            $data['district'] = $districtModel->get_districtByProvince($loadTable_district,$id);
            // var_dump($_SESSION['district']);
            echo "<option selected disabled value=''>Chọn Quận</option>";
            foreach ($data['district'] as $district) {
                echo "<option value='".$district['id']."'>".$district['_name']."</option>";
            }
        }
        public function loadWard($str){
            $wardModel= $this->load->model('location');
            $loadTable_ward = 'ward';
            $id = $str;
            $data['ward'] = $wardModel->get_wardByDistrict($loadTable_ward,$id);
            var_dump($id);
            echo "<option selected disabled value=''>Chọn Phường</option>";
            foreach ($data['ward'] as $ward) {
                echo "<option value='".$ward['id']."'>".$ward['_name']."</option>";
            }
        }
        public function register() {
            if(isset($_SESSION['user'])){
                if(isset($_POST['register'])) {
                    $name_store = $_POST['name_store'];
                    $signature_food = $_POST['signature_food'];
                    $street_store = $_POST['street_store'];
                    $email_store = $_POST['email_store'];
                    $phone_store = $_POST['phone_store'];
                    $tag_store = $_POST['tag_store'];
                    $city_store = $_POST['city_store'];
                    $district_store = $_POST['district_store'];
                    $ward_store = $_POST['ward_store'];
                    $number_store = $_POST['number_store'];
                    $id = $_POST['id_account'];

                    $img = $_FILES['avatar_store']['name'];
                    //Thư mục bạn sẽ lưu file upload
                    $target_dir = "./view/uploads/avatarStore/";
                    //Vị trí file lưu tạm trong server (file sẽ lưu trong images, với tên giống tên ban đầu)
                    $target_file = $target_dir . basename($_FILES["avatar_store"]["name"]);
                    if (move_uploaded_file($_FILES["avatar_store"]["tmp_name"], $target_file)) {
                        // echo "File ". basename( $_FILES["img"]["name"]);
                        // echo "File lưu tại " . $target_file;
                    } else {
                        
                    } 

                    $data = [
                        'name_store' => $name_store,
                        'signature_food' => $signature_food,
                        'street_store' => $street_store,
                        'email_store' => $email_store,
                        'phone_store' => $phone_store,
                        'avatar_store'=> $img,
                        'city_store' => $city_store,
                        'district_store' => $district_store,
                        'ward_store' => $ward_store,
                        'number_store' => $number_store,
                        'fk_id_menu' => $tag_store,
                        'fk_id_account' => $id
                    ];
                    if(isset($data)){
                        $tableStore = 'store';
                        $storeModel = $this->load->model('storemodel');
                        $storeModel->insert_store($tableStore, $data);

                        header("Location:".ROOT_URL."storeList");
                    }else{
                        header("Location:".ROOT_URL."registerStore");
                    }

                    // var_dump($data);
                    
                    
                }
            } else{
                $this->load->view('error404');
            }
            
        }
    }
?>