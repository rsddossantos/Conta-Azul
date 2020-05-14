<?php
class clientsController extends controller
{
    public function __construct()
    {
        //parent::__construct();

        $u = new Users();
        if ($u->isLogged() == false) {
            header("Location: " . BASE_URL . "/login");
            exit;
        }
    }

    public function index()
    {
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_email'] = $u->getEmail();
        if ($u->hasPermission('clients_view')) {
            $c = new Clients();
            $offset = 0;
            $data['clients_list'] = $c->getList($offset);

            $pcontrol = new permissionsController();
            $data['menu'] = $pcontrol->disableMenu();
            $this->loadTemplate('clients', $data);
        } else {
            header("Location: " . BASE_URL);
        }
    }
}
