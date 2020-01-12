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

  public function selectProductById($id){
    $sql = "SELECT * FROM `products` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute(array(
      ':id' => $id
     ));
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectProductAllByProductId($product_id){
    $sql = "SELECT `products_all`.*, `bookclass`.`bookclass`, `colors`.`color`, `months`.`month` FROM `products_all` LEFT JOIN `bookclass` ON `bookclass`.`id` = `products_all`.`bookclass_id` LEFT JOIN `colors` ON `colors`.`id` = `products_all`.`color_id` LEFT JOIN `months` ON `months`.`id` = `products_all`.`month_id`  WHERE `products_all`.`product_id` = :product_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute(array(
      ':product_id' => $product_id
     ));
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectProductsByTypeId($type_id, $id){
    $sql = "SELECT * FROM `products` INNER JOIN `types` ON `types`.`id` = `products`.`type_id` WHERE `type_id` = :type_id AND `products`.`id` != 11 AND `products`.`id` != 17 AND  `products`.`id` != :id ORDER BY rand() limit 3";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':type_id', $type_id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
