<?php
class permissionsController extends controller {

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
        if($u->hasPermission('permissions_view')) {
            $permissions = new Permissions();
            $data['permissions_list'] = $permissions->getList($u->getCompany());
            $data['permissions_groups_list'] = $permissions->getGroupList($u->getCompany());
            $data['menu'] = $this->disableMenu();
            $this->loadTemplate('permissions', $data);
        } else {
            header("Location: ".BASE_URL);
        }
    }

    /*
     * Método que irá desabilitar os menus de acordo com as permissões
     * Esse método deverá ser chamado em toda Action que carregar View
     */
    public function disableMenu() {
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $permissions = array(
            'permissions_view',
            'users_view',
            'clients_view',
            'inventory_view');
        foreach ($permissions as $permission) {
            if($u->hasPermission($permission)) {
                $data[$permission] = 'enabled';
            } else {
                $data[$permission] = 'disabled';
            }
        }
        return $data;
    }

    public function add() {
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_email'] = $u->getEmail();
        if($u->hasPermission('permissions_view')) {
            $permissions = new Permissions();
            if(isset($_POST['name']) && !empty($_POST['name'])) {
                $pname = addslashes($_POST['name']);
                $permissions->add($pname, $u->getCompany());
                header("Location: ".BASE_URL."/permissions");
            }
            $data['menu'] = $this->disableMenu();
            $this->loadTemplate('permissions_add', $data);
        } else {
            header("Location: ".BASE_URL);
        }
    }

    public function add_group() {
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_email'] = $u->getEmail();
        if($u->hasPermission('permissions_view')) {
            $permissions = new Permissions();
            if(isset($_POST['name']) && !empty($_POST['name'])) {
                $pname = addslashes($_POST['name']);
                $plist = $_POST['permissions'];
                $permissions->addGroup($pname, $plist, $u->getCompany());
                header("Location: ".BASE_URL."/permissions");
            }
            $data['permissions_list'] = $permissions->getList($u->getCompany());
            $data['menu'] = $this->disableMenu();
            $this->loadTemplate('permissions_addgroup', $data);
        } else {
            header("Location: ".BASE_URL);
        }
    }
    /* Método delete e deleteGroup (class Permissions)
    * Foi incluido o parâmetro id_company, porém não é necessário
    * pois os ids de grupos não se repetirão devido serem autoincremento.
    */
    public function delete($id) {
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_email'] = $u->getEmail();
        if($u->hasPermission('permissions_view')) {
            $permissions = new Permissions();
            $permissions->delete($id, $u->getCompany());
            header("Location: ".BASE_URL."/permissions");
        } else {
            header("Location: ".BASE_URL);
        }
    }

    public function delete_group($id) {
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_email'] = $u->getEmail();
        if($u->hasPermission('permissions_view')) {
            $permissions = new Permissions();
            /* Método deleteGroup
             * Só será deletado grupos que não estão atrelados a algum usuário
             * Implementar um retorno false na função interna para exibir mensagem de grupos que não podem ser deletados
             */
            $permissions->deleteGroup($id, $u->getCompany());
            header("Location: ".BASE_URL."/permissions");
        } else {
            header("Location: ".BASE_URL);
        }
    }

    public function edit_group($id) {
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_email'] = $u->getEmail();
        if($u->hasPermission('permissions_view')) {
            $permissions = new Permissions();
            if(isset($_POST['name']) && !empty($_POST['name'])) {
                $pname = addslashes($_POST['name']);
                $plist = $_POST['permissions'];
                $permissions->editGroup($pname, $plist, $id, $u->getCompany());
                header("Location: ".BASE_URL."/permissions");
            }
            $data['permissions_list'] = $permissions->getList($u->getCompany());
            $data['group_info'] = $permissions->getGroup($id, $u->getCompany());
            $data['menu'] = $this->disableMenu();
            $this->loadTemplate('permissions_editgroup', $data);
        } else {
            header("Location: ".BASE_URL);
        }
    }
}
