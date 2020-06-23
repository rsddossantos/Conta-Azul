<?php
class Sales extends model {

    public function getList($offset, $id_company) {
        $data = array();
        $sql = $this->db->prepare("
            SELECT 
                sales.id, 
                sales.date_sale,
                sales.total_price,
                sales.status,
                clients.name 
            FROM sales 
            LEFT JOIN 
                clients ON clients.id = sales.id_client AND
                clients.id_company = sales.id_company                
            WHERE 
                sales.id_company = :id_company 
            ORDER BY sales.date_sale DESC 
            LIMIT $offset, 10");
        $sql->bindValue(":id_company", $id_company);
        $sql->execute();
        if($sql->rowCount() > 0) {
            $data = $sql->fetchAll();
        }
        return $data;
    }

    public function addSale($id_company, $id_client, $id_user, $total_price, $status) {
        $sql = $this->db->prepare("
            INSERT INTO 
                sales 
            SET 
                id_company = :id_company,
                id_client = :id_client,
                id_user = :id_user,
                date_sale = NOW(),
                total_price = :total_price,
                status = :status                
        ");
        $sql->bindValue(":id_company", $id_company);
        $sql->bindValue(":id_client", $id_client);
        $sql->bindValue(":id_user", $id_user);
        $sql->bindValue(":total_price", $total_price);
        $sql->bindValue(":status", $status);
        $sql->execute();
    }



}