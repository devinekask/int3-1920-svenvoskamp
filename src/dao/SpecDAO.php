<?php

require_once( __DIR__ . '/DAO.php');

class SpecDAO extends DAO {

  public function selectSpecsByProductId($product_id){
    $sql = "SELECT * FROM `specs`
            WHERE `product_id` = :product_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':product_id', $product_id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
