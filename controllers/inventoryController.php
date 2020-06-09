<?php
class inventoryController extends controller {

    public function __construct() {
        $u = new Users();
        if ($u->isLogged() == false) {
            header("Location: " . BASE_URL . "/login");
            exit;
        }
    }

    public function index() {
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_email'] = $u->getEmail();
        if ($u->hasPermission('inventory_view')) {
            $i = new Inventory();
            $offset = 0;
            $data['inventory_list'] = $i->getList($offset, $u->getCompany());
            $data['add_permission'] = $u->hasPermission('inventory_add');
            $data['edit_permission'] = $u->hasPermission('inventory_edit');
            $pcontrol = new permissionsController();
            $data['menu'] = $pcontrol->disableMenu();
            $this->loadTemplate('inventory', $data);
        } else {
            header("Location: " . BASE_URL);
        }
    }

    public function add(){
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_email'] = $u->getEmail();
        if ($u->hasPermission('inventory_add')) {
            if(isset($_POST['name']) && !empty($_POST['name'])) {
                $i = new inventory;
                $name = addslashes($_POST['name']);
                $price = addslashes($_POST['price']);
                $quant = addslashes($_POST['quant']);
                $min_quant = addslashes($_POST['min_quant']);
                $price = str_replace(',','.', $price);
                $i->add($name, $price, $quant, $min_quant, $u->getCompany(), $u->getId());
                header("Location: ".BASE_URL."/inventory");
            }

            $pcontrol = new permissionsController();
            $data['menu'] = $pcontrol->disableMenu();
            $this->loadTemplate('inventory_add', $data);
        }
    }



}