<?php
    class storemanage extends Dcontroller{
        public function __construct()
        {
            parent::__construct();
        
        }
        public function index() {
            $this->storemanage(); 
        }

        public function storemanage() {
            if (isset($_GET['id'])&&($_GET['id']>0)) {
                $id_store=$_GET['id'];
                $tableStore = 'store';
                $storeModel = $this->load->model('storemodel');
                $storeInfo = $storeModel->get_storeByIdStore($tableStore, $id_store);
                $_SESSION['store'] = $storeInfo;
                             
                $tableMenu = 'menu';
                $menuModel = $this->load->model('menumodel');
                $menuInfo = $menuModel->get_list_menu($tableMenu);

                $provinceModel= $this->load->model('location');
                $loadTable_province = 'province';
                $data['province'] = $provinceModel->get_province($loadTable_province);

                $districtModel= $this->load->model('location');
                $loadTable_district = 'district';
                $data['district'] = $districtModel->get_district($loadTable_district);

                $wardModel= $this->load->model('location');
                $loadTable_ward = 'ward';
                $data['ward'] = $wardModel->get_ward($loadTable_ward);
                
                $_SESSION['menu'] = $menuInfo;
                // var_dump($_SESSION['store']);
                if ($_SESSION['store'] == true && $_SESSION['store'][0]['fk_id_account'] == $_SESSION['user'][0]['id_account']) {
                    $this->load->view('storeManage/storeheader');
                    $this->load->view('storeManage/storemenu');
                    $this->load->view('storeManage/home',$data);
                    $this->load->view('footer');
                } else {
                    $this->load->view('error404');
                }
            } else {
                $this->load->view('error404');
            }
        }

        public function updateStore() {
            if(isset($_POST['updateStore'])){
                $name_store = $_POST['name_store'];
                $signature_food = $_POST['signature_food'];
                $street_store = $_POST['street_store'];
                $email_store = $_POST['email_store'];
                $phone_store = $_POST['phone_store'];
                $city_store = $_POST['city_store'];
                $district_store = $_POST['district_store'];
                $ward_store = $_POST['ward_store'];
                $number_store = $_POST['number_store'];
                $fk_id_menu = $_POST['fk_id_menu'];
                $status_store = $_POST['status_store'];
                $id_store = $_POST['id_store'];
                $condition = 'id_store = '.$id_store;
                $data = [
					'name_store' => $name_store,
					'signature_food' => $signature_food,
					'street_store' => $street_store,
                    'email_store' => $email_store,
                    'phone_store' => $phone_store,
                    'city_store' => $city_store,
                    'district_store' => $district_store,
                    'ward_store' => $ward_store,
                    'number_store' => $number_store,
                    'fk_id_menu' => $fk_id_menu,
                    'status_store' => $status_store,
				];
                
                $tableStore = 'store';

                $storeModel = $this->load->model('storemodel');

                $storeModel->update_store($tableStore, $data, $condition);
                header("Location:".ROOT_URL."storemanage&id=".$id_store);
            }
        }

        public function updateAvatar() {
            
        }
        
        public function addmenustore() {
            // session::checkSessionStoreManage();
            $this->load->view('storeManage/storeheader');
            $this->load->view('storeManage/storemenu');
            $storeModel= $this->load->model('storemodel');
            $table = 'store';
            // $id = "store.id_store";
            $data['idstore'] = $storeModel->get_list_store($table);
			// $data['idstore'] = $storeModel->get_storeByIdStore($table,$id);
            $this->load->view('storeManage/addmenustore',$data);
            $this->load->view('footer');
        }

        public function insertMenuStore() {
            $nameMenu = $_POST['name_menu_store'];
            $descMenu = $_POST['desc_menu_store'];
            $idStore = $_POST['id_store'];
            $table = 'menu_store';
            $data = [
                'name_menu_store' => $nameMenu,
                'desc_menu_store' => $descMenu,
                'fk_id_store'   => $idStore
            ];
            $menuModel = $this->load->model('menuStoreModel');
            $rs = $menuModel->insert_menu_store($table,$data);
            // var_dump($nameMenu, $descMenu, $idStore);
            if($rs == true) {
                $mess['alert'] = "Thêm thực đơn thành công";
                header('Location:'.ROOT_URL."storemanage/listmenustore?alert=".urlencode(serialize($mess)));
            }else {
                $mess['alert'] = "Thêm thực đơn thất bại";
                header('Location:'.ROOT_URL."storemanage/addmenustore?alert=".urlencode(serialize($mess)));
            }
        }

        public function listmenustore(){
            // session::checkSessionStoreManage();
			$this->load->view('storeManage/storeheader');
            $this->load->view('storeManage/storemenu');
            
            $conditionListMenu = 'fk_id_store='.$_SESSION['store'][0]['id_store'];
			$table = "menu_store";
			$menuModel = $this->load->model('menuStoreModel');
			$data['listmenustore'] = $menuModel->get_menuId_store($table,$conditionListMenu);

			$this->load->view('storeManage/listmenustore',$data);
			// $this->load->view('footer');	
		}

        public function deleteStoreMenu($idMenu) {
            $menuModel= $this->load->model('menuStoreModel');
            $table = 'menu_store';
            $condition = 'id_menu_store='.$idMenu;
            $rs = $menuModel->delete_menu_store($table, $condition);
            if($rs == true) {
                $message['msg'] = "Xóa thành công";
                header('Location:'.ROOT_URL."storemanage/listmenustore?msg=".urlencode(serialize($message['msg'])));
            }else {
                $message['msg'] = "Xóa thất bại";
                header('Location:'.ROOT_URL."storemanage/listmenustore?msg=".urlencode(serialize($message['msg'])));
            }
        }    

        public function editstoremenu($idMenu) {
            // session::checkSessionStoreManage();
            $this->load->view('storeManage/storeheader');
            $this->load->view('storeManage/storemenu');
            $table = "menu_store";
            $condition = "id_menu_store='$idMenu'";
			$menuModel = $this->load->model('menuStoreModel');
			$data['editstoremenu'] = $menuModel->get_menuId_store($table,$condition);
			$this->load->view('storeManage/editstoremenu',$data);
        }

        public function updateStoreMenu($idMenu) {
            $nameMenu = $_POST['name_menu_store'];
            $descMenu = $_POST['desc_menu_store'];
            $table = "menu_store"; 
            $data = array(
                'name_menu_store' => $nameMenu,
                'desc_menu_store' => $descMenu
            );
            $condition = "id_menu_store=".$idMenu;
            $menuModel = $this->load->model('menuStoreModel');
            $rs = $menuModel->update_menu_store($table, $data,$condition);
            if($rs == 1) {
                $mess['alert'] = "Cập nhật thành công";
                header('Location:'.ROOT_URL."storemanage/listmenustore?alert=".urlencode(serialize($mess)));
            }else {
                $mess['alert'] = "Cập nhật thất bại";
                header('Location:'.ROOT_URL."storemanage/addmenustore?alert=".urlencode(serialize($mess)));
            }
        }   

        public function addfood() {
            // session::checkSessionStoreManage();
            $this->load->view('storeManage/storeheader');
            $this->load->view('storeManage/storemenu');
            $table = "menu_store"; 
            $conditionMenuStore = 'fk_id_store = '.$_SESSION['store'][0]['id_store'];
            $menuModel = $this->load->model('menuStoreModel');
			$data['listmenustore'] = $menuModel->get_menuId_store($table,$conditionMenuStore);
            $this->load->view('storeManage/food/addfood', $data);
            $this->load->view('footer');
        }

        public function insertFood() {
            $nameFood = $_POST['name_food'];
            $priceFood = $_POST['price_food'];
            $descFood = $_POST['description_food'];
            $imageFood = $_FILES['image_food']['name'];
			$tmp_image = $_FILES['image_food']['tmp_name'];
            $menuStore = $_POST['menu_store'];
            $table = 'food';
            $id_store = $_SESSION['store'][0]['id_store'];
            
			$tag = explode('.', $imageFood);
			$file_ext = strtolower(end($tag));
			$unique_image = $tag[0].time().'.'.$file_ext; // add the time to avoid the duplicate image

			$path_upload = "public/upload/product/".$unique_image;
            $data = array(
                'name_food' => $nameFood,
                'price_food' => $priceFood,
                'description_food' =>$descFood,
                'image_food' => $unique_image,
                'fk_id_menustore' => $menuStore,
                'fk_food_id_store' => $id_store
            );
            $foodModel = $this->load->model('foodmodel');
            $rs = $foodModel->insert_food($table,$data);
            if($rs == true) {
                move_uploaded_file($tmp_image, $path_upload); // move new image to the path
                $mess['alert'] = "Thêm sản phẩm thành công";
                header('Location:'.ROOT_URL."storemanage/listfood?alert=".urlencode(serialize($mess)));
            }else {
                $mess['alert'] = "Thêm sản phẩm thất bại";
                header('Location:'.ROOT_URL."storemanage/addfood?alert=".urlencode(serialize($mess)));
            }
        }

        public function listfood(){
            // session::checkSessionStoreManage();
			$this->load->view('storeManage/storeheader');
			$this->load->view('storeManage/storemenu');
			$table_food = "food";
            $table_menu = 'menu';
            $table_store = 'store';
            // $id_store = $_SESSION['store'][0]['id_store'];
            $conditionFoodStore = 'fk_food_id_store = '.$_SESSION['store'][0]['id_store'];
            // $id_store = 'store.id_store';
            // $storeModel = $this->load->model('storemodel');
            // $data['idstore'] = $storeModel->load->get_storeByIdMenu($table_store,$id_store);
			$foodModel = $this->load->model('foodmodel');
			$data['listfood'] = $foodModel->get_foodId($table_food,$conditionFoodStore);

            $conditionListMenu = 'fk_id_store='.$_SESSION['store'][0]['id_store'];
			$table = "menu_store";
			$menuModel = $this->load->model('menuStoreModel');
			$data['listmenustore'] = $menuModel->get_menuId_store($table,$conditionListMenu);
            
			$this->load->view('storeManage/food/listfood',$data);
		}

        public function deleteFood($idFood) {
            $menuModel= $this->load->model('foodmodel');
            $table = 'food';
            $condition = "food.id_food='$idFood'";
            $rs = $menuModel->delete_food($table, $condition);
            if($rs == true) {
                $message['msg'] = "Xóa thành công";
                header('Location:'.ROOT_URL."storemanage/listfood?msg=".urlencode(serialize($message['msg'])));
            }else {
                $message['msg'] = "Xóa thất bại";
                header('Location:'.ROOT_URL."storemanage/listfood?msg=".urlencode(serialize($message['msg'])));
            }
        }

        public function editfood($idFood) {
            $this->load->view('storeManage/storeheader');
            $this->load->view('storeManage/storemenu');
            $table_food = "food";
            $table_menu = "menu_store";
            $condition = "id_food='$idFood'";
            $conditionMenuStore = 'fk_id_store = '.$_SESSION['store'][0]['id_store'];
			$foodModel = $this->load->model('foodmodel');
			$menuModel = $this->load->model('menuStoreModel');
			$data['listfood'] = $foodModel->get_foodId($table_food,$condition);
            $data['listmenustore'] = $menuModel->get_menuId_store($table_menu,$conditionMenuStore);
			$this->load->view('storeManage/food/editfood',$data);
        }
        
        public function updateFood($idFood) {
            if(isset($_POST['updatefood'])) {
                $table = 'food';
                $condition = "id_food='$idFood'";
                $foodModel = $this->load->model('foodmodel');
                $nameFood = $_POST['name_food'];
                $priceFood = $_POST['price_food'];
                $descFood = $_POST['description_food'];
                $imageFood = $_FILES['image_food']['name'];
                $tmp_image = $_FILES['image_food']['tmp_name'];
                $menuStore = $_POST['menu_store'];
                
                $tag = explode('.', $imageFood);
                $file_ext = strtolower(end($tag));
                $unique_image = $tag[0].time().'.'.$file_ext;

                $path_upload = "./public/upload/product/".$unique_image;
                if($imageFood) {
                    $data['idfood'] = $foodModel->get_foodId($table,$condition);
                    foreach($data['idfood'] as $val) {
                        $unlink = "./public/upload/product/"; 
                        unlink($unlink.$val);// remove the old image
                    }
                    $data = array(          
                        'name_food' => $nameFood,
                        'price_food' => $priceFood,
                        'description_food' => $descFood,
                        'image_food' => $unique_image,
                        'fk_id_menustore' => $menuStore,
                    );
                    move_uploaded_file($tmp_image, $path_upload); // move new image to the path
                }else {
                    $data = array(
                        'name_food' => $nameFood,
                        'price_food' => $priceFood,
                        'description_food' =>$descFood,
                        'fk_id_menustore' => $menuStore,
                    );
                }
                $rs = $foodModel->update_food($table,$data,$condition);
         
                if($rs == true) {              
                    $mess['alert'] = "Cập nhật sản phẩm thành công";
                    header('Location:'.ROOT_URL."storemanage/listfood?alert=".urlencode(serialize($mess)));
                }else {
                    $mess['alert'] = "Cập nhật sản phẩm thất bại";
                    header('Location:'.ROOT_URL."storemanage/addfood?alert=".urlencode(serialize($mess)));
                }
            }
        }

        public function listBill(){
            if(isset($_SESSION['user'])){
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    $id_store = $_GET['id'];
                    $tableStore = 'store';
                    $storeModel = $this->load->model('storemodel');
                    $storeInfo = $storeModel->get_storeByIdStore($tableStore, $id_store);
                    $data['store'] = $storeInfo;

                    $tableBill = 'bill';
                    $tableOrders = 'orders';
                    $tableFood = 'food';
                    $billModel = $this->load->model('billmodel');
                    
                    $billInfo = $billModel->get_billByStore($tableBill, $id_store);
                    $data['bill'] = $billInfo;
                    if(!empty($data['bill'])){
                        $countOrders = 0;
                        $countFood = 0;
                        foreach($data['bill'] as $bill){
                            
                            $orderInfo = $billModel->get_ordersByBill($tableOrders, $bill['id_bill']);
                            $data['orders'][$countOrders] = $orderInfo;
                            
                            foreach($data['orders'][$countOrders] as $orders){
                                $foodInfo = $billModel->get_foodByOrders($tableFood, $orders['fk_id_food']);
                                $data['food'][$countFood] = $foodInfo;
                                $countFood++;
                            }
                            $countOrders++;
                        }
                        
                    }
                    if($data['store'] == true && $data['store'][0]['fk_id_account'] == $_SESSION['user'][0]['id_account']){
                        $this->load->view('storeManage/storeheader');
                        $this->load->view('storeManage/storemenu');
                        
                        $this->load->view('storeManage/bill/listbill',$data);
                        $this->load->view('footer');
                    }else{
                        $this->load->view('error404');
                    }
                } else{
                    $this->load->view('error404');
                }
            } else{
                $this->load->view('error404');
            }
            
        }
    }
     
?>