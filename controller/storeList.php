<?php
    class storeList extends Dcontroller{
       public function __construct()
        {
            parent::__construct();   
        }

        public function index(){
            $this->storeList();
        }

        public function storeList() {
            if(isset($_SESSION['user'])){
				$rs = $_SESSION['user'];
                $tableStore = 'store';
                $storeModel = $this->load->model('storemodel');
                $storeInfo = $storeModel->get_storeId($tableStore, $rs[0]['id_account']);
                $data['store'] = $storeInfo;
                $provinceModel= $this->load->model('location');
                $loadTable_province = 'province';
                $data['province'] = $provinceModel->get_province($loadTable_province);

                $districtModel= $this->load->model('location');
                $loadTable_district = 'district';
                $data['district'] = $districtModel->get_district($loadTable_district);

                $wardModel= $this->load->model('location');
                $loadTable_ward = 'ward';
                $data['ward'] = $wardModel->get_ward($loadTable_ward);
                $this->load->view('storeList/storeList',$data);
                $this->load->view('footer');
                // var_dump($_SESSION['store']);
			} else{
				$this->load->view('error404');
			}
        }
    }
?>