<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProductDAO.php';
require_once __DIR__ . '/../dao/OrderDAO.php';
require_once __DIR__ . '/../dao/CustomerDAO.php';
require_once __DIR__ . '/../dao/PaymentDAO.php';



class OrdersController extends Controller {

  private $productDAO;
  private $orderDAO;
  private $customerDAO;
  private $paymentDAO;

  function __construct() {
    $this->productDAO = new ProductDAO();
    $this->orderDAO = new OrderDAO();
    $this->customerDAO = new CustomerDAO();
    $this->paymentDAO = new PaymentDAO();
  }

  public function cart() {
    $this->set('title', "Winkelwagen");
    $_SESSION['order'] = false;
    $_SESSION['customer'] = false;
    $_SESSION['payment'] = false;

      if (!empty($_POST['action'])) {
        if ($_POST['action'] == 'add') {
          $this->_handleAdd();
          header('Location: index.php?page=product-detail&id='. $_POST['link_id'] . '&type='. $_POST['type_id']);
          exit();
        }
        if ($_POST['action'] == 'empty') {
          $_SESSION['cart'] = array();
        }
        if ($_POST['action'] == 'check') {
          foreach($_SESSION['cart'] as $product) {
            if ($product['product']['id'] == "1" | $product['product']['id'] == "3" | $product['product']['id'] == "5"
            | $product['product']['id'] == "7" | $product['product']['id'] == "9" | $product['product']['id'] == "11" | $product['product']['id'] == "13"
            | $product['product']['id'] == "15" | $product['product']['id'] == "17" | $product['product']['id'] == "19"){
              if ($_POST['discount'] == "1"){
              $_SESSION['discount'] = true;
            }
          }
        }
          header('Location: index.php?page=cart');
          exit();
        }
        
        if ($_POST['action'] == 'update') {
          $this->_handleUpdate();
        }


        if ($_POST['action'] == 'details') {
            $data =  array(
              'amount' => $_POST['total'],
              'status' => "Not confirmed"
          );
          $insertedOrder = $this->orderDAO->insertOrder($data);
          $this->set('insertedOrder', $insertedOrder);

          $lastOrderId = $this->orderDAO->selectLastOrder();
          $this->set('lastOrderId', $lastOrderId);

          if (empty($insertedOrder)) {
            $errors = $this->orderDAO->validate($data);
            $this->set('errors', $errors);
          }
        }

        if ($_POST['action'] == 'details') {
          foreach($_SESSION['cart'] as $product) {
            $dataB= array(
              'order_id' => $lastOrderId['max'],
              'product_id' => $product['product']['id'],
              'quantity' => $product['quantity']
            );
            $insertedCartItem = $this->orderDAO->insertCartItem($dataB);
            $this->set('insertedCartItem', $insertedCartItem);
            if (empty($insertedCartItem)) {
            $errors = $this->orderDAO->validateB($dataB);
            $this->set('errors', $errors);
            }
          }
        }
        if ($_POST['action'] == 'details') {
          $this->_handleDetails();
      }
      header('Location: index.php?page=cart');
      exit();
    }

      if (!empty($_POST['remove'])) {
        $this->_handleRemove();
        header('Location: index.php?page=cart');
        exit();
      }
    }

      private function _handleDetails() {
        header('Location: index.php?page=cart-detail');
        $_SESSION['order'] = true;
        $_SESSION['delivery'] = $_POST['delivery'];
        exit();
      }

      private function _handleAdd() {
        if (empty($_SESSION['cart'][$_POST['product_id']])) {
          $product = $this->productDAO->selectProductAllById($_POST['product_id']);
            if (empty($product)) {
              return;
            }
          $_SESSION['cart'][$_POST['product_id']] = array(
            'product' => $product,
            'quantity' => 0
          );
        }
        $_SESSION['info'] = 'Product toegevoegd';
        $_SESSION['cart'][$_POST['product_id']]['quantity']++;
      }


      private function _handleRemove() {
        if (isset($_SESSION['cart'][$_POST['remove']])) {
          unset($_SESSION['cart'][$_POST['remove']]);
          $_SESSION['info'] = 'Product verwijderd';
        }
      }

      private function _handleUpdate() {
        foreach ($_POST['quantity'] as $productId => $quantity) {
          if (!empty($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId]['quantity'] = $quantity;
            $_SESSION['info'] = 'Winkelmandje bijgewerkt';
          }
        }
        $this->_removeWhereQuantityIsZero();
      }

      private function _removeWhereQuantityIsZero() {
        foreach($_SESSION['cart'] as $productId => $info) {
          if ($info['quantity'] <= 0) {
            unset($_SESSION['cart'][$productId]);
          }
        }
      }
      public function detail() {
        if(!$_SESSION['order']){
          header('Location: index.php?page=home');
          exit();
        }else {
        $this->set('title', "Winkelwagen - Jouw Gegevens");

        if(!empty($_POST['action'])){
          if($_POST['action'] == 'insertCustomer'){
            $dataC= array(
              'name' => $_POST['name'],
              'surname' => $_POST['surname'],
              'email' => $_POST['email'],
              'telephone' => $_POST['telephone'],
              'adres' => $_POST['adres'],
              'number' => $_POST['number'],
              'zip' => $_POST['zip'],
              'fname' => $_POST['fname'],
              'fsurname' => $_POST['fsurname'],
              'fadres' => $_POST['fadres'],
              'fnumber' => $_POST['fnumber'],
              'fzip' => $_POST['fzip']
            );
            $insertedCustomer = $this->customerDAO->insertCustomer($dataC);
            if(!$insertedCustomer){
              $errors = $this->customerDAO->validate($dataC);
              $this->set('errors',$errors);
            }
          }
        }

      $delivery = $_SESSION['delivery'];
      $this->set('delivery', $delivery);

      $lastOrderId = $this->orderDAO->selectLastOrder();
      $this->set('lastOrderId', $lastOrderId);

      $lastUserId = $this->customerDAO->selectLastCustomer();
      $this->set('lastUserId', $lastUserId);

      $orderItems = $this->orderDAO->selectCartItemByOrderId($lastOrderId['max']);
      $this->set('orderItems', $orderItems);

      if(!empty($_POST['action'])){
        if($_POST['action'] == 'insertCustomer'){
          $dataD= array(
            'customer_id' => $lastUserId['max'],
            'status' => "Waiting for payment",
            'id' => $lastOrderId['max']
          );
          $updatedOrder = $this->orderDAO->updateOrder($dataD);
          if(!$updatedOrder){
            $errors = $this->orderDAO->validateD($dataD);
            $this->set('errors',$errors);
            header('Location: index.php?page=cart-payment');
            $_SESSION['customer'] = true;
            exit();
          }
        }
      }
    }
  }

      public function payment() {
        if(!$_SESSION['customer']){
          header('Location: index.php?page=home');
          exit();
        }else {
        $this->set('title', "Winkelwagen - Betaling");
        $delivery = $_SESSION['delivery'];
        $this->set('delivery', $delivery);

        $lastOrderId = $this->orderDAO->selectLastOrder();
        $this->set('lastOrderId', $lastOrderId);

        $lastUserId = $this->customerDAO->selectLastCustomer();
        $this->set('lastUserId', $lastUserId);

        $orderItems = $this->orderDAO->selectCartItemByOrderId($lastOrderId['max']);
        $this->set('orderItems', $orderItems);

        $customer = $this->customerDAO->selectCustomerByOrderId($lastOrderId['max']);
        $this->set('customer', $customer);

        $payments = $this->paymentDAO->selectAllPayments();
        $this->set('payments', $payments);

        if(!empty($_POST['action'])){
          if($_POST['action'] == 'insertPayment'){
            $dataE= array(
              'customer_id' => $lastUserId['max'],
              'status' => "Order confirmed",
              'id' => $lastOrderId['max'],
              'payment_id' => $_POST['payments']
            );
            $updatedOrderPayment = $this->orderDAO->updateOrderPayment($dataE);
            if(!$updatedOrderPayment){
              $_SESSION['payment'] = true;
              $errors = $this->orderDAO->validateE($dataE);
              $this->set('errors',$errors);
              header('Location: index.php?page=finished');
              $_SESSION['cart'] = [];
              $_SESSION['discount'] = false;
            }
          }
        }
      }
    }
      public function finished(){
        if(!$_SESSION['payment']){
          header('Location: index.php?page=home');
          exit();
        }else {
        $lastUserId = $this->customerDAO->selectLastCustomer();
        $this->set('lastUserId', $lastUserId);

        $lastOrderId = $this->orderDAO->selectLastOrder();
        $this->set('lastOrderId', $lastOrderId);

        $customer = $this->customerDAO->selectCustomerByOrderId($lastOrderId['max']);
        $this->set('customer', $customer);
      }
    }
  }
