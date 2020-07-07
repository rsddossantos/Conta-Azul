<?php
class reportController extends controller
{

    public function __construct()
    {
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
        if ($u->hasPermission('report_view')) {
            $pcontrol = new permissionsController();
            $data['menu'] = $pcontrol->disableMenu();
            $this->loadTemplate('report', $data);
        } else {
            header("Location: " . BASE_URL);
        }
    }

    public function sales() {
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_email'] = $u->getEmail();
        // Array com o status do pedido deverá ser igual ao select do view sales_add
        $data['statuses'] = array(
            '0' => 'Aguardando Pgto.',
            '1' => 'Pago',
            '2' => 'Cancelado'
        );
        if ($u->hasPermission('report_view')) {

            $pcontrol = new permissionsController();
            $data['menu'] = $pcontrol->disableMenu();
            $this->loadTemplate('report_sales', $data);
        } else {
            header("Location: " . BASE_URL);
        }
    }


}