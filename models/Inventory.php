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


}