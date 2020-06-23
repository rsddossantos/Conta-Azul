<?php
class ajaxController extends controller {

    public function __construct() {
        $u = new Users();
        if ($u->isLogged() == false) {
            header("Location: " . BASE_URL . "/login");
            exit;
        }
    }

    public function index(){}

    public function search_clients() {
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $c = new Clients();
        if(isset($_GET['q']) && !empty($_GET['q'])) {
            $q = addslashes($_GET['q']);
            $clients = $c->searchClientByName($q, $u->getCompany());
            foreach($clients as $citem) {
                $arr = explode(' ', $citem['name']);
                array_push($arr, '', '');
                $threeNames = $arr[0].' '.$arr[1].' '.$arr[2];
                $data[] = array(
                    'id' => $citem['id'],
                    'name' => $threeNames,
                    'link' => BASE_URL.'/clients/edit/'.$citem['id']
                );
            }
        }
        echo json_encode($data);
    }

    public function search_inventory() {
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $i = new Inventory();
        if(isset($_GET['q']) && !empty($_GET['q'])) {
            $q = addslashes($_GET['q']);
            $products = $i->searchInventoryByName($q, $u->getCompany());
            foreach($products as $product) {
                $arr = explode(' ', $product['name']);
                array_push($arr, '', '');
                $threeNames = $arr[0].' '.$arr[1].' '.$arr[2];
                $data[] = array(
                    'id' => $product['id'],
                    'name' => $threeNames,
                    'link' => BASE_URL.'/inventory/edit/'.$product['id']
                );
            }
        }
        echo json_encode($data);
    }

    public function add_client() {
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $c = new Clients();
        if(isset($_POST['name']) && !empty($_POST['name'])) {
            $name = addslashes($_POST['name']);
            $data['id'] = $c->add($u->getCompany(), $name);
        }
        echo json_encode($data);
    }



}