<?php
class usersController extends controller {
    public function __construct() {
        //parent::__construct();

        $u = new Users();
        if($u->isLogged() == false) {
            header("Location: ".BASE_URL."/login");
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
        if($u->hasPermission('users_view')) {

            $pcontrol = new permissionsController();
            $data['menu']=$pcontrol->disableMenu();
            $this->loadTemplate('users', $data);
        } else {
            header("Location: ".BASE_URL);
        }
    }



}