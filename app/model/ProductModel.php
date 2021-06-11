<?php

namespace App\Model;

use PDO;

class ProductModel extends Model
{

    public function getAll()
    {
        $sql = "SELECT * FROM `product` ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function add($product)
    {
        $sql = "INSERT INTO `product`(product_name,product_line,unit_price,amount,date_input,description)  
VALUES(:product_name ,:product_line ,:unit_price,:amount,:date_input,:description)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':product_name', $product->product_name);
        $stmt->bindParam(':product_line', $product->product_line);
        $stmt->bindParam(':unit_price', $product->description);
        $stmt->bindParam(':amount', $product->amount);
        $stmt->bindParam(':date_input', $product->date_input);
        $stmt->bindParam(':description', $product->description);
        return $stmt->execute();
    }

    public function delete($id1)
    {
        $sql = "DELETE FROM `product` WHERE id = :id1 ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id1', $id1);
        return $stmt->execute();
    }

    public function edit($product)
    {
        $sql = "UPDATE `product` SET `product_name`= :product_name,`product_line`= :product_line,
                      `unit_price`= :unit_price,`amount`= :amount, `date_input`= :date_input,`description` = :description Where  id = :id1";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id1', $product->id);
        $stmt->bindParam(':product_name', $product->product_name);
        $stmt->bindParam(':product_line', $product->product_line);
        $stmt->bindParam(':unit_price', $product->description);
        $stmt->bindParam(':amount', $product->amount);
        $stmt->bindParam(':date_input', $product->date_input);
        $stmt->bindParam(':description', $product->description);
        return $stmt->execute();
    }
    public function getByid($id1)
    {
        $sql = "SELECT * FROM `product` where  id = :id1";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id1', $id1);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}