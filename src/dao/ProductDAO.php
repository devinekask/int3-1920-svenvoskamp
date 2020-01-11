<?php

require_once( __DIR__ . '/DAO.php');

class ProductDAO extends DAO {

  public function selectAllProducts($type = false){
    $sql = "SELECT `products`.*, `types`.`type`
    FROM `products`
    INNER JOIN `types` ON `types`.`id` = `products`.`type_id`
    WHERE 1";

    $bindValues = array();
    if (!empty($type)) {
      $typeParams = "";
      foreach($type as $index => $value){
          $typeParams .= ":type_id_".$index.",";
          $bindValues[":type_id_".$index] = $value;
      }
      $typeParams = rtrim($typeParams,",");
      $sql .= " AND `products`.`type_id` IN ($typeParams)";
    }

    if (!empty($ids)) {
      $idParams = "";
      foreach($ids as $index => $value){
          $idParams .= ":id_".$index.",";
          $bindValues[":id_".$index] = $value;
      }
      $idParams = rtrim($idParams,",");
      $sql .= " AND `products`.`id` IN ($idParams)";
    }
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute($bindValues);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
