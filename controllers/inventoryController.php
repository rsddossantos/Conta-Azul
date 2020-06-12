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
        if ($u->hasPermission('inventory_edit')) {
            if(isset($_POST['name']) && !empty($_POST['name'])) {
                $i = new inventory;
                $name = addslashes($_POST['name']);
                $price = addslashes($_POST['price']);
                $quant = addslashes($_POST['quant']);
                $min_quant = addslashes($_POST['min_quant']);
                $price = str_replace('.','', $price);
                $price = str_replace(',','.', $price);
                $i->add($name, $price, $quant, $min_quant, $u->getCompany(), $u->getId());
                header("Location: ".BASE_URL."/inventory");
            }
            $pcontrol = new permissionsController();
            $data['menu'] = $pcontrol->disableMenu();
            $this->loadTemplate('inventory_add', $data);
        } else {
            //Caso não tenha permissão de Adicionar pode ser que tenha para visualizar/edição. Se não tiver, o index manda pra HOME
            header("Location: " . BASE_URL."/inventory");
        }
    }

    public function edit($id){
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_email'] = $u->getEmail();
        if ($u->hasPermission('inventory_edit')) {
            $i = new inventory;
            if(isset($_POST['name']) && !empty($_POST['name'])) {
                $name = addslashes($_POST['name']);
                $price = addslashes($_POST['price']);
                $quant = addslashes($_POST['quant']);
                $min_quant = addslashes($_POST['min_quant']);
                $price = str_replace('.','', $price);
                $price = str_replace(',','.', $price);
                $i->edit($id, $name, $price, $quant, $min_quant, $u->getCompany(), $u->getId());
                header("Location: ".BASE_URL."/inventory");
            }
            $data['inventory_info'] = $i->getInfo($id, $u->getCompany());
            $pcontrol = new permissionsController();
            $data['menu'] = $pcontrol->disableMenu();
            $this->loadTemplate('inventory_edit', $data);
        } else {
            //Caso não tenha permissão de Edição pode ser que tenha para visualizar. Se não tiver, o index manda pra HOME
            header("Location: " . BASE_URL."/inventory");
        }
    }

    public function view($id) {
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_email'] = $u->getEmail();
        if ($u->hasPermission('inventory_view')) {
            $i = new inventory;
            $data['inventory_info'] = $i->getInfo($id, $u->getCompany());
            $pcontrol = new permissionsController();
            $data['menu'] = $pcontrol->disableMenu();
            $this->loadTemplate('inventory_view', $data);
        } else {
            header("Location: " . BASE_URL."/inventory");
        }
    }

    public function delete($id) {
        $u = new Users();
        $u->setLoggedUser();
        if($u->hasPermission('inventory_edit')) {
            $i = new inventory;
            $i->delete($id, $u->getCompany(), $u->getId());
            header("Location: ".BASE_URL."/inventory");
        }
    }



}