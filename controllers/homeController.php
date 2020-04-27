<?php

class homeController extends controller{

    public function __construct() {
        //parent::__construct();

        $u = new Users();
        if($u->isLogged() == false) {
            header("Location: ".BASE_URL."/login");
            exit;
        }
    }

    public function index(){
       $data=array ();
       $u = new Users();
       $u->setLoggedUser();
       $company = new Companies($u->getCompany());
       $data['company_name'] = $company->getName();
       $data['user_email'] = $u->getEmail();
       $data['menu_disabled'] = 'enabled';
       /*
        * Aqui deverá verificar as permissões nos menus e enviar com o dado menu_disabled para desabilitá-lo
        * caso o usuário não tiver permissão
        * Obs: Verificar a possibilidade do CSS [data-menu="disabled"] receber cor cinza ao invés de desabilitar o objeto
        */
       if($u->hasPermission('permissions_view')){
           $this->loadTemplate('home', $data);
       } else {
           $data['menu_disabled'] = 'disabled';
           $this->loadTemplate('home', $data);
       }
    }
    
    
}


