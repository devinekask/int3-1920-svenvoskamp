<?php

require_once( __DIR__ . '/DAO.php');

class TypeDAO extends DAO {

  function selectAllType(){
    $sql = "SELECT * FROM `types`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }
}
