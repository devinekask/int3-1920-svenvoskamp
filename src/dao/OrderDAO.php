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

  public function updateOrder($dataD){
    $sql = "UPDATE `orders`
    SET `customer_id` = :customer_id, `status` = :status
    WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':customer_id', $dataD['customer_id']);
    $stmt->bindValue(':status', $dataD['status']);
    $stmt->bindValue(':id', $dataD['id']);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function updateOrderPayment($dataE){
    $sql = "UPDATE `orders`
    SET `customer_id` = :customer_id, `status` = :status, `payment_id` = :payment_id
    WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':customer_id', $dataE['customer_id']);
    $stmt->bindValue(':status', $dataE['status']);
    $stmt->bindValue(':payment_id', $dataE['payment_id']);
    $stmt->bindValue(':id', $dataE['id']);
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

  public function selectCartItemByOrderId($order_id){
    $sql = "SELECT * FROM `cart_items`
    INNER JOIN `orders`
    ON `orders`.`id` = `cart_items`.`order_id`
    INNER JOIN `products_all`
    ON `products_all`.`id` = `cart_items`.`product_id`
    WHERE `order_id` = :order_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':order_id', $order_id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
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

    public function validateD($dataD){
      $errors = [];
        if (empty($dataD['id'])) {
          $errors['id'] = 'id is required';
        }
        if (empty($dataD['status'])) {
          $errors['status'] = 'status is required';
        }
        if (empty($dataD['customer_id'])) {
          $errors['customer_id'] = 'customer_id is required';
        }
        return $errors;
      }

      public function validateE($dataE){
        $errors = [];
          if (empty($dataE['id'])) {
            $errors['id'] = 'id is required';
          }
          if (empty($dataE['status'])) {
            $errors['status'] = 'status is required';
          }
          if (empty($dataE['customer_id'])) {
            $errors['customer_id'] = 'customer_id is required';
          }
          if (empty($dataE['payment_id'])) {
            $errors['payment_id'] = 'payment_id is required';
          }
          return $errors;
        }
}
