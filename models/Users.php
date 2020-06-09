<?php
class Users extends model {

    private $userInfo;
    private $permissions;

    public function isLogged() {
        if(isset($_SESSION['ccUser']) && !empty($_SESSION['ccUser'])) {
            return true;
        } else {
            return false;
        }
    }
    public function doLogin($email, $password) {
        $sql = $this->db->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
        $sql->bindValue(':email', $email);
        $sql->bindValue(':password', md5($password));
        $sql->execute();
        if($sql->rowCount() > 0) {
            $row = $sql->fetch();
            $_SESSION['ccUser'] = $row['id'];
            return true;
        } else {
            return false;
        }
    }
    public function setLoggedUser() {
        if(isset($_SESSION['ccUser']) && !empty($_SESSION['ccUser'])) {
            $id = $_SESSION['ccUser'];
            $sql = $this->db->prepare("SELECT * FROM users WHERE id = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();
            if($sql->rowCount() > 0) {
                $this->userInfo = $sql->fetch();
                $this->permissions = new Permissions();
                $this->permissions->setGroup($this->userInfo['id_group'], $this->userInfo['id_company']);
            }
        }
    }
    public function logout() {
        unset($_SESSION['ccUser']);
    }
    public function hasPermission($name) {
        return $this->permissions->hasPermission($name);
    }
    public function getCompany() {
        if(isset($this->userInfo['id_company'])) {
            return $this->userInfo['id_company'];
        } else {
            return 0;
        }
    }
    public function getEmail() {
        if(isset($this->userInfo['email'])) {
            return $this->userInfo['email'];
        } else {
            return '';
        }
    }
    public function getId() {
        if(isset($this->userInfo['id'])) {
            return $this->userInfo['id'];
        } else {
            return '';
        }
    }
    public function getInfo($id, $id_company) {
        $data = array();
        $sql = $this->db->prepare("SELECT * FROM users WHERE id = :id and id_company = :id_company");
        $sql->bindValue(':id', $id);
        $sql->bindValue(':id_company', $id_company);
        $sql->execute();
        if($sql->rowCount() > 0) {
            $data = $sql->fetch();
        }
        return $data;

    }
    public function findUsersInGroup($id) {
        $sql = $this->db->prepare("SELECT COUNT(*) as c FROM users WHERE id_group = :group");
        $sql->bindValue(':group', $id);
        $sql->execute();
        $row = $sql->fetch();
        if($row['c'] == '0') {
            return false;
        } else {
            return true;
        }
    }
    public function getList($id_company) {
        $data = array();
        $sql = $this->db->prepare("
        SELECT
            u.id,
            u.email,
            p.name 
        FROM users u
        LEFT JOIN permission_groups p ON p.id = u.id_group 
        WHERE u.id_company = :id_company");
        $sql->bindValue(':id_company', $id_company);
        $sql->execute();
        if($sql->rowCount() > 0) {
            $data = $sql->fetchAll();
        }
        return $data;
    }
    public function add($email, $pass, $group, $id_company) {
        $sql = $this->db->prepare("SELECT COUNT(*) c FROM users WHERE email = :email");
        $sql->bindValue(":email", $email);
        $sql->execute();
        $row = $sql->fetch();
        if($row['c'] == '0') {
            $sql = $this->db->prepare("INSERT INTO users SET email = :email, password = :password, id_group = :id_group, id_company = :id_company");
            $sql->bindValue(":email", $email);
            $sql->bindValue(":password", md5($pass));
            $sql->bindValue(":id_group", $group);
            $sql->bindValue(':id_company', $id_company);
            $sql->execute();
            return true;
        } else {
            return false;
        }
    }
    public function edit($pass, $group, $id, $id_company) {
        $sql = $this->db->prepare("UPDATE users SET id_group = :id_group WHERE id = :id AND id_company = :id_company");
        $sql->bindValue("id_group", $group);
        $sql->bindValue("id", $id);
        $sql->bindValue("id_company", $id_company);
        $sql->execute();
        if(!empty($pass)) {
            $sql = $this->db->prepare("UPDATE users SET password = :password WHERE id = :id AND id_company = :id_company");
            $sql->bindValue("password", md5($pass));
            $sql->bindValue("id", $id);
            $sql->bindValue("id_company", $id_company);
            $sql->execute();
        }
    }
    public function delete($id, $id_company) {
        $sql = $this->db->prepare("DELETE FROM users WHERE id = :id AND id_company = :id_company");
        $sql->bindValue("id", $id);
        $sql->bindValue("id_company", $id_company);
        $sql->execute();
    }
}