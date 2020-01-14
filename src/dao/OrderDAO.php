<?php

require_once( __DIR__ . '/DAO.php');

class OrderDAO extends DAO {

  public function selectOrderById($id){
    $sql = "SELECT * FROM `orders`
    WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectLastOrder(){
    $sql = "SELECT MAX(`id`) as max FROM `orders`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function insertOrder($data){
    $errors = $this->validate( $data );
      if (empty($errors)) {
        $sql = "INSERT INTO `orders` (`amount`, `status`) VALUES (:amount, :status)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':amount', $data['amount']);
        $stmt->bindValue(':status', $data['status']);
        if ($stmt->execute()) {
          return $this->selectOrderById($this->pdo->lastInsertId());
        }
      }
    return false;
  }

  public function selectCartItemById($id){
    $sql = "SELECT * FROM `cart_items`
    WHERE `id` = :id
    ";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function insertCartItem($dataB){
    $errors = $this->validateB($dataB);
      if (empty($errors)) {
        $sql = "INSERT INTO `cart_items` (`order_id`, `product_id`,`quantity`) VALUES (:order_id, :product_id, :quantity)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':order_id', $dataB['order_id']);
        $stmt->bindValue(':product_id', $dataB['product_id']);
        $stmt->bindValue(':quantity', $dataB['quantity']);
        if ($stmt->execute()) {
          return $this->selectCartItemById($this->pdo->lastInsertId());
        }
      }
    return false;
  }



  public function validate($data){
    $errors = [];
      if (empty($data['amount'])) {
        $errors['amount'] = 'amount is required';
      }
      if (empty($data['status'])) {
        $errors['status'] = 'status is required';
      }
      return $errors;
    }

    public function validateB($dataB){
      $errors = [];
        if (empty($dataB['order_id'])) {
          $errors['order_id'] = 'order_id is required';
        }
        if (empty($dataB['product_id'])) {
          $errors['ticket_id'] = 'product_id is required';
        }
        if (empty($dataB['quantity'])) {
            $errors['quantity'] = 'quantity is required';
        }
        return $errors;
      }
}
