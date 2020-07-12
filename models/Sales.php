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

    public function getCount($id_company) {
        $r = 0;
        $sql = $this->db->prepare("SELECT COUNT(*) as s FROM sales WHERE id_company = :id_company");
        $sql->bindValue(":id_company", $id_company);
        $sql->execute();
        $row = $sql->fetch();
        $r = $row['s'];
        return $r;
    }

    public function addSale($id_company, $id_client, $id_user, $quant, $status) {
        $i = new Inventory();

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
        $sql->bindValue(":total_price", '0');
        $sql->bindValue(":status", $status);
        $sql->execute();
        $id_sale = $this->db->lastInsertId();

        $total_price = 0;
        foreach($quant as $id_prod => $quant_prod) {
            $sql = $this->db->prepare("SELECT price FROM inventory WHERE id = :id AND id_company = :id_company");
            $sql->bindValue(":id", $id_prod);
            $sql->bindValue(":id_company", $id_company);
            $sql->execute();
            if($sql->rowCount() > 0) {
                $row = $sql->fetch();
                $price = $row['price'];
                $sql_prod = $this->db->prepare("
                  INSERT INTO 
                   sales_products 
                  SET 
                    id_company = :id_company,
                    id_sale = :id_sale,
                    id_product = :id_product,
                    quant = :quant,
                    sale_price = :sale_price                
                ");
                $sql_prod->bindValue(":id_company", $id_company);
                $sql_prod->bindValue(":id_sale", $id_sale);
                $sql_prod->bindValue(":id_product", $id_prod);
                $sql_prod->bindValue(":quant", $quant_prod);
                $sql_prod->bindValue(":sale_price", $price);
                $sql_prod->execute();

                // Baixa no estoque
                $i->downInventory($id_prod, $id_company, $quant_prod, $id_user);

                $total_price += round($price * $quant_prod, 2);
            }
        }
        $sql = $this->db->prepare("UPDATE sales SET total_price = :total_price WHERE id = :id AND id_company = :id_company");
        $sql->bindValue(":total_price", $total_price);
        $sql->bindValue(":id", $id_sale);
        $sql->bindValue(":id_company", $id_company);
        $sql->execute();
    }

    public function getInfo($id, $id_company) {
        $data = array();
        $sql = $this->db->prepare("
            SELECT 
                *,
                (select clients.name from clients where clients.id = sales.id_client) as client_name
            FROM 
                sales 
            WHERE 
                id = :id AND 
                id_company = :id_company");
        $sql->bindValue(":id", $id);
        $sql->bindValue(":id_company", $id_company);
        $sql->execute();
        if($sql->rowCount() > 0) {
            $data['info'] = $sql->fetch();
        }

        $sql = $this->db->prepare("
            SELECT 
                sal.quant,
                sal.sale_price,
                inv.name
            FROM 
                sales_products sal
            LEFT JOIN inventory inv ON
                 inv.id = sal.id_product AND
                 inv.id_company = inv.id_company
            WHERE 
                sal.id_sale = :id_sale AND 
                sal.id_company = :id_company");
        $sql->bindValue(":id_sale", $id);
        $sql->bindValue(":id_company", $id_company);
        $sql->execute();
        if($sql->rowCount() > 0) {
            $data['products'] = $sql->fetchAll();
        }

        return $data;
    }

    public function changeStatus($status, $id, $id_company) {
        // status CANCELADO não vai retornar estoque por enquanto
        $sql = $this->db->prepare("UPDATE sales SET status = :status WHERE id = :id AND id_company = :id_company");
        $sql->bindValue(":status", $status);
        $sql->bindValue(":id", $id);
        $sql->bindValue(":id_company", $id_company);
        $sql->execute();
    }

    public function getSalesFiltered($client_name, $period1, $period2, $status, $order, $id_company) {
        $data = array();
        $sql = "
            SELECT
                clients.id,
                clients.name,
                sales.date_sale,
                sales.status,
                sales.total_price  
            FROM sales
            LEFT JOIN clients 
                ON clients.id = sales.id_client
                AND clients.id_company = sales.id_company 
            WHERE 
            ";
        $where = array();
        $where[] = "sales.id_company = :id_company";
        if(!empty($client_name)) {
            $where[] = "clients.name LIKE '%".$client_name."%'";
        }
        if(!empty($period1) && !empty($period2)) {
            $where[] = "sales.date_sale BETWEEN :period1 AND :period2";
        }
        if($status != '') {
            $where[] = "sales.status = :status";
        }
        $sql .= implode(' AND ', $where);
        switch($order) {
            case 'date_desc':
            default:
                $sql .= " ORDER BY sales.date_sale DESC";
                break;
            case 'date_asc':
                $sql .= " ORDER BY sales.date_sale ASC";
                break;
            case 'status':
                $sql .= " ORDER BY sales.status";
                break;
            case 'client':
                $sql .= " ORDER BY clients.id";
                break;
        }
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id_company", $id_company);
        if(!empty($period1) && !empty($period2)) {
            $sql->bindValue(":period1", $period1);
            $sql->bindValue(":period2", $period2);
        }
        if($status != '') {
            $sql->bindValue(":status", $status);
        }
        $sql->execute();
        if($sql->rowCount() > 0) {
            $data = $sql->fetchAll();
        }
        return $data;
    }

    public function getTotalRevenue($period1, $period2, $id_company) {
        $float = 0;
        $sql = "SELECT SUM(total_price) as total FROM sales WHERE id_company = :id_company AND date_sale BETWEEN :period1 AND :period2 AND status <> 2";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_company', $id_company);
        $sql->bindValue(':period1', $period1);
        $sql->bindValue(':period2', $period2);
        $sql->execute();
        $n = $sql->fetch();
        $float = $n['total'];
        return $float;
    }

    public function getTotalExpenses($period1, $period2, $id_company) {
        $float = 0;
        $sql = "SELECT SUM(total_price) as total FROM purchases WHERE id_company = :id_company AND date_purchase BETWEEN :period1 AND :period2";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_company', $id_company);
        $sql->bindValue(':period1', $period1);
        $sql->bindValue(':period2', $period2);
        $sql->execute();
        $n = $sql->fetch();
        $float = $n['total'];
        return $float;
    }

    public function getSoldProducts($period1, $period2, $id_company) {
        $int = 0;
        $sql = "
            SELECT SUM(prod.quant) total
            FROM sales s
            LEFT JOIN sales_products prod ON
            s.id_company = prod.id_company AND
            s.id = prod.id_sale 
            WHERE s.id_company = :id_company AND s.date_sale BETWEEN :period1 AND :period2 AND s.status <> 2
            ";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_company', $id_company);
        $sql->bindValue(':period1', $period1);
        $sql->bindValue(':period2', $period2);
        $sql->execute();
        $n = $sql->fetch();
        $int = $n['total'];
        return $int;
    }

    public function getRevenueList($period1, $period2, $id_company) {
        $data = array();
        $currentDay = $period1;
        while($period2 != $currentDay) {
            $data[$currentDay] = 0;
            $currentDay = date('Y-m-d', strtotime('+1 day', strtotime($currentDay)));
        }
        $sql = "SELECT DATE_FORMAT(date_sale,'%Y-%m-%d') as date_sale,SUM(total_price) as total 
                FROM sales 
                WHERE id_company = :id_company 
                    AND date_sale BETWEEN :period1 AND :period2 
                    AND status <> 2
                GROUP BY DATE_FORMAT(date_sale,'%Y-%m-%d')";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_company', $id_company);
        $sql->bindValue(':period1', $period1);
        $sql->bindValue(':period2', $period2);
        $sql->execute();
        if($sql->rowCount() > 0) {
            $rows = $sql->fetchAll();
            foreach($rows as $sales_item) {
                $data[$sales_item['date_sale']] = $sales_item['total'];
            }
        }
        return $data;
    }

}