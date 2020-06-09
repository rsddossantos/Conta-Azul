<?php
class Inventory extends model {

    public function getList($offset, $id_company) {
        $data = array();
        $sql = $this->db->prepare("SELECT * FROM inventory WHERE id_company = :id_company LIMIT $offset, 10");
        $sql->bindValue(":id_company", $id_company);
        $sql->execute();
        if($sql->rowCount() > 0) {
            $data = $sql->fetchAll();
        }
        return $data;
    }

    public function add($name, $price, $quant, $min_quant, $id_company, $id_user) {
        $sql = $this->db->prepare("INSERT INTO inventory SET name=:name,price=:price,quant=:quant,min_quant=:min_quant,id_company=:id_company");
        $sql->bindValue(":name", $name);
        $sql->bindValue(":price", $price);
        $sql->bindValue(":quant", $quant);
        $sql->bindValue(":min_quant", $min_quant);
        $sql->bindValue(":id_company", $id_company);
        $sql->execute();
        $id_product = $this->db->lastInsertId();
        $sql = $this->db->prepare("INSERT INTO inventory_history SET id_company=:id_company,id_product=:id_product,id_user=:id_user,action=:action,date_action=NOW()");
        $sql->bindValue(":id_company", $id_company);
        $sql->bindValue(":id_product", $id_product);
        $sql->bindValue(":id_user", $id_user);
        $sql->bindValue(":action", "add");
        $sql->execute();
    }


}