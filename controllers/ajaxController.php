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
                $twoNames = $arr[0].' '.$arr[1];
                $data[] = array(
                    'id' => $citem['id'],
                    'name' => $twoNames,
                    'link' => BASE_URL.'/clients/edit/'.$citem['id']
                );
            }
        }


        echo json_encode($data);


    }
}