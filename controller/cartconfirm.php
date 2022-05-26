<?php
    class cartconfirm extends Dcontroller{
        public function __construct()
        {
            parent::__construct();
        }
        public function index() {
            $this->cartcomplete();
        }

        public function cartcomplete() {
            if(isset( $_SESSION['user'])) {
                if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
                    $temp = count($_SESSION['cart']);
                    $data['temp'] = $temp;

                    $provinceModel= $this->load->model('location');
                    $loadTable_province = 'province';
                    $data['province'] = $provinceModel->get_province($loadTable_province);

                    $districtModel= $this->load->model('location');
                    $loadTable_district = 'district';
                    $data['district'] = $districtModel->get_district($loadTable_district);

                    $wardModel= $this->load->model('location');        
                    $loadTable_ward = 'ward';
                    $data['ward'] = $wardModel->get_ward($loadTable_ward);
                
                    $table_store = 'store';
                    $table_bill = 'bill';

                    $conditionBill =  $_SESSION['user'][0]['id_account'];
                    $billModel = $this->load->model('billmodel');
                    $data['listbill'] = $billModel->get_bill_confirm($table_bill,$table_store,$conditionBill);
                    $this->load->view('header');
                    $this->load->view('cartconfirm',$data);
                    $this->load->view('footer');
                }else{
                    echo "<p style='color: #0288d1; font-size: 1.5rem; text-transform:uppercase;font-weight: bold; position: absolute; top: 40%; left: 50%; transform: translate(-50%,-50%);'>Giỏ hàng trống!</p>";
                }
            }else {
                echo "<p style='color: #0288d1; font-size: 1.5rem; text-transform:uppercase;font-weight: bold; position: absolute; top: 40%; left: 50%; transform: translate(-50%,-50%);'>Vui lòng đăng nhập trong...3 2 1!</p>";
                header('refresh: 3;'.ROOT_URL."login");
            }
        }

        public function addOrder() {
            if(isset($_SESSION['cart']) && isset($_POST['cartorder'])) {
                $totalOrder = $_POST['total_order'];
                $idBill = $_POST['id_bill'];
                $table_order = "orders";
                $table_bill = "bill";
                $condition = 'id_bill = '.$idBill;
                foreach($_SESSION['cart'] as $cart) {
                    // var_dump($cart);
                    $numberFood = $cart['number_food'];
                    $idFood = $cart['id_food'];
                    
                    $data_order = array(
                         'number_food' => $numberFood,
                         'total_order' => $totalOrder,
                         'fk_id_food' => $idFood,
                         'fk_id_bill' => $idBill
                    );
                    $orderModel = $this->load->model('ordersmodel');
                    $rs = $orderModel->insert_orders($table_order, $data_order);
                }
                $data_bill = array(
                    'status_bill' => 1
                );
                $billModel = $this->load->model('billmodel');
                $billModel->update_bill($table_bill, $data_bill,$condition);
                if($rs == true) {
                    $mess['alert'] = "Đặt hàng thành công";
                    header('Location:'.ROOT_URL."account/orderDetail?alert=".urlencode(serialize($mess)));
                }else {
                    $mess['alert'] = "Đặt hàng thất bại";
                    header('Location:'.ROOT_URL."product/productDetail?alert=".urlencode(serialize($mess)));
                }
                
            }
        }
    }
?>