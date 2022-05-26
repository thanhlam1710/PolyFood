<?php
    class product extends Dcontroller{
        public function __construct()
        {
            parent::__construct();
        }
		public function productdetail() {
            if (isset($_GET['id'])&&($_GET['id']>0)) {
                $id_store=$_GET['id'];
                $tableStore = 'store';
                $storeModel = $this->load->model('storemodel');
                $data['storeInfo'] = $storeModel->get_storeByIdStore($tableStore, $id_store);
                $indexCart = 0;
                $_SESSION['cart']=[];
                $data['indexCart'] = [
                    'indexCart' => $indexCart
                ];
                $event = 'onclick="showErrorToast();"';
                if (isset($_SESSION['user'])) {
                    $event = 'onclick="showSuccessToast();"';
                }
                $data['toast'] = $event;
                $tableMenu = 'menu';
                $menuModel = $this->load->model('menumodel');
                $data['tag'] = $menuModel->get_list_menu($tableMenu);
                $tableMenu_Store = 'menu_store';
                $conditionMenuStore = 'fk_id_store = '.$id_store;
                $menuStoreModel = $this->load->model('menuStoreModel');
                $data['menu'] = $menuStoreModel->get_menuId_store($tableMenu_Store,$conditionMenuStore);

                $tableFood = 'food';
                $conditionFoodStore = 'fk_food_id_store = '.$id_store;
                $foodModel = $this->load->model('foodmodel');
                $data['food'] = $foodModel->get_foodId($tableFood,$conditionFoodStore);

                $provinceModel= $this->load->model('location');
                $loadTable_province = 'province';
                $data['province'] = $provinceModel->get_province($loadTable_province);

                $districtModel= $this->load->model('location');
                $loadTable_district = 'district';
                $data['district'] = $districtModel->get_district($loadTable_district);

                $wardModel= $this->load->model('location');
                $loadTable_ward = 'ward';
                $data['ward'] = $wardModel->get_ward($loadTable_ward);
                
                // var_dump($data['food']);

                $this->load->view('header');
                $this->load->view('product/product',$data);
                if(isset($_SESSION['user'][0]['id_account'])) {
                    $this->load->view('modal',$data);
                }else {
                
                }
                $this->load->view('footer');
            } else {
                $this->load->view('error404');
            }
		}
        
        public function addcart() {
            if(isset($_SESSION['user'][0]['id_account'])) {
                $totalItem = 0;
                $totalPrice = 0;
                $tempNumberFood = 0;
                $idFood = $_POST['idFood'];
                $idStore = $_POST['idStore'];
                $nameFood = $_POST['nameFood'];
                $priceFood = $_POST['priceFood'];
                // $newCart = [$idFood ,$nameFood, $priceFood,$idStore,$quantity];
                for ($count = 0; $count < count($idFood) ; $count++) { 
                    $cart_product_id = array_keys($_SESSION["cart"]);
                    if(in_array($idFood[$count], $cart_product_id)){
                        $_SESSION["cart"][$idFood[$count]]['number_food']++;
                    } else {
                        $item_array = array(
                            'id_food'             =>     $idFood[$count],  
                            'name_food'           =>     $nameFood[$count],
                            'price_food'          =>     $priceFood[$count],
                            'number_food'         =>     1,
                            'id_store'            =>     $idStore[$count]
                        );
                        $_SESSION["cart"][$idFood[$count]] = $item_array;
                    }             
                }
            }
        }
        public function loadcart() {
            $totalItem = 0;
            $totalPrice = 0;
            if (!empty($_SESSION['cart'])) {
                echo '
                <button onclick="deleteCart()" type="button" class="bill-delete" id="bill-delete" style="margin: 1rem 0 0 1rem;">
                    Xóa
                </button>
                ';
                // array_push($_SESSION['cart'],$newCart);
                // var_dump($_SESSION['cart']);
                // var_dump(count($idFood));
                foreach ($_SESSION['cart'] as $cart) {
                    echo "
                        <li class='ordering-item'>
                            <div class='ordering-edit'>
                                <input readonly name='quantity' type='text' class='ordering-quantity' value='".$cart['number_food']."' id='input-quantity'>
                                <span class='ordering-name'>".$cart['name_food']."</span>
                            </div>
                            <div class='ordering-note'>
                                <input type='text' class='ordering-input' placeholder='Thêm chú thích...'>
                                <span class='ordering-price'>
                                    <span hidden class='ordering-price-number'>".$cart['price_food']."</span>
                                    <span class='ordering-price-total' id='ordering-price-total'>".($cart['number_food'] * $cart['price_food'])."</span>
                                    <span class='ordering-price-unit'>đ</span>
                                </span>
                            </div>
                        </li>
                    ";
                    $totalPrice = $totalPrice + ($cart['number_food'] * $cart['price_food']);
                } 
                echo '
                <div class="bill-total">
                    <div class="row">
                        <div class="col l-8">Tổng cộng</div>
                        <div class="col l-4">
                            <span class="total-price">
                                <span class="total-number total-order">'.($totalPrice).'</span>
                                <span class="total-unit">đ</span>
                            </span>
                        </div>
                    </div>
                </div>
                ';
            } else {

            }
        }
        public function loadbill() {
            $totalItem = 0;
            $totalPrice = 0;
            if (!empty($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $cart) {
                    echo '
                        <li class="order-right-item">
                            <input type="text" hidden name="number_food" value="'.$cart['number_food'].'">
                            <span class="order-right-item-number">'.$cart['number_food'].'</span>
                            <div class="order-right-item-name">
                                <span>'.$cart['name_food'].'</span>
                            </div>
                            <div class="order-right-item-price">
                                <input type="text" hidden name="total_bill" value="'.$cart['number_food'] * $cart['price_food'].'">
                                <span class="right-item-number" id="ordering-price-total">'.($cart['number_food'] * $cart['price_food']).'</span>
                                <span class="right-item-unit">đ</span>
                            </div>
                        </li>
                    ';
                }
            } else {

            }
            
        }
        
        public function deleteCart() {
            $_SESSION['cart']=[];
            // var_dump($_SESSION['cart']);
        }
        
        public function addBillDetail() {
            if(isset($_SESSION['cart']) && isset($_POST['cartcheckout'])) {
                $fullName = $_POST['name_customer'];
                $tel = $_POST['phone_customer'];
                $address = $_POST['address_customer'];
                $methodPay = $_POST['payment_methods'];
                $note = $_POST['note_bill'];
                $total = $_POST['totalBill'];
                $table_bill = "bill";
                $table_order = "orders";
                $table_account = "account";
                $idStore = $_POST['id_store'];
                $idAccount = $_SESSION['user'][0]['id_account'];
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $date=date("d/m/Y h:i:s", time());
                $data_bill = array(
                    // 'status_bill' => 0,
                    'purchase_time' => $date,
                    'note_bill' => $note,
                    'name_customer' => $fullName,
                    'address_customer' => $address,
                    'phone_customer' => $tel,
                    'total_bill' => $total,
                    'payment_methods' => $methodPay,
                    'fk_id_store' => $idStore,
                    'fk_id_account' => $idAccount
                );
        
                $billmodel = $this->load->model('billmodel');
                $rs = $billmodel->insert_bill($table_bill, $data_bill);
                if($rs == true) {
                    $mess['alert'] = "Chèn thành công";
                    header('Location:'.ROOT_URL."cartconfirm?alert=".urlencode(serialize($mess)));
                }else {
                    $mess['alert'] = "Chèn thất bại";
                    header('Location:'.ROOT_URL."cartconfirm?alert=".urlencode(serialize($mess)));
                }
            }
        }
    } 
?>
<script src='<?php echo ROOT_URL ?>view/js/cart.js'></script>
<script src="<?php echo ROOT_URL ?>view/js/ajax_database.js"></script>