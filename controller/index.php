<?php
    class index extends Dcontroller{
        public function __construct()
        {
            $data = array();
            parent::__construct();
            // return $data;
        }
        public function index() {
            return $this->home();
        }
        public function home() {
            $tableStore = 'store';
            $tableMenu = 'menu';

            //lấy dữ liệu menu phân loại
            $menuModel = $this->load->model('menumodel');
            $menu = $menuModel->get_list_menu($tableMenu);
            $_SESSION['menu'] = $menu;

            //lấy dữ liệu 4 cửa hàng
            $homeModel = $this->load->model('homemodel');
            $promotionStore = $homeModel->get_info_store_limit($tableStore);
            $data['promotionStore'] = $promotionStore;

            //lấy dữ liệu cửa hàng bán chạy theo lượt view
            $viewStore = $homeModel->get_info_store_view($tableStore);
            $data['viewStore'] = $viewStore;

            $provinceModel= $this->load->model('location');
            $loadTable_province = 'province';
            $data['province'] = $provinceModel->get_province($loadTable_province);

            $districtModel= $this->load->model('location');
            $loadTable_district = 'district';
            $data['district'] = $districtModel->get_district($loadTable_district);

            $wardModel= $this->load->model('location');
            $loadTable_ward = 'ward';
            $data['ward'] = $wardModel->get_ward($loadTable_ward);

            $this->load->view('header');
            $this->load->view('slider');
            $this->load->view('home',$data);
            $this->load->view('footer');
        }

        public function error404() {
            $this->load->view('error404');
        }
   
    }
?>