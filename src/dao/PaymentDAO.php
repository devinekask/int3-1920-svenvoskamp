<?php

require_once( __DIR__ . '/DAO.php');

class PaymentDAO extends DAO {

  function selectAllPayments(){
    $sql = "SELECT * FROM `payments`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }
}
