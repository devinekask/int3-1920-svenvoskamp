<?php

require_once( __DIR__ . '/DAO.php');

class CustomerDAO extends DAO {

    public function selectCustomerById($id){
        $sql = "SELECT * FROM `customers`
        WHERE `id` = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function selectLastCustomer(){
        $sql = "SELECT MAX(`id`) as max FROM `customers`";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
      }

    public function insertCustomer($dataC){
    $errors = $this->validate($dataC);
        if (empty($errors)) {
            $sql = "INSERT INTO `customers` (`name`, `surname`, `email`, `telephone`, `adres`, `number`, `zip`, `fname`, `fsurname`, `fadres`, `fnumber`, `fzip`) VALUES (:name, :surname, :email, :telephone, :adres, :number, :zip, :fname, :fsurname, :fadres, :fnumber, :fzip)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':name', $dataC['name']);
            $stmt->bindValue(':surname', $dataC['surname']);
            $stmt->bindValue(':email', $dataC['email']);
            $stmt->bindValue(':telephone', $dataC['telephone']);
            $stmt->bindValue(':adres', $dataC['adres']);
            $stmt->bindValue(':number', $dataC['number']);
            $stmt->bindValue(':zip', $dataC['zip']);
            $stmt->bindValue(':fname', $dataC['fname']);
            $stmt->bindValue(':fsurname', $dataC['fsurname']);
            $stmt->bindValue(':fadres', $dataC['fadres']);
            $stmt->bindValue(':fnumber', $dataC['fnumber']);
            $stmt->bindValue(':fzip', $dataC['fzip']);
            if ($stmt->execute()) {
            return $this->selectCustomerById($this->pdo->lastInsertId());
            }
        }
        return false;
    }

    public function selectCustomerByOrderId($order_id){
      $sql = "SELECT * FROM `customers`
      INNER JOIN `orders`
      ON `orders`.`customer_id` = `customers`.`id`
      WHERE `orders`.`id` = :order_id";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':order_id', $order_id);
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function validate($dataC){
        $errors = [];
        if (empty($dataC['name'])) {
          $errors['name'] = 'Please fill in a name';
        }
        if (empty($dataC['surname'])) {
          $errors['surname'] = 'Please fill in a surname';
        }
        if (empty($dataC['email'])) {
          $errors['email'] = 'Please fill in an email';
        }
        if (empty($dataC['telephone'])) {
          $errors['telephone'] = 'Please fill in a telephone number';
        }
        if (empty($dataC['adres'])) {
          $errors['adres'] = 'Please fill in an adres';
        }
        if (empty($dataC['number'])) {
          $errors['number'] = 'Please fill in an house number';
        }
        if (empty($dataC['zip'])) {
          $errors['zip'] = 'Please fill in a zipcode';
        }
        return $errors;
      }
}
