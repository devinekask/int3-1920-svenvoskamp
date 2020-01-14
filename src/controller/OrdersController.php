<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProductDAO.php';
require_once __DIR__ . '/../dao/OrderDAO.php';



class OrdersController extends Controller {

  private $productDAO;
  private $orderDAO;

  function __construct() {
    $this->productDAO = new ProductDAO();
    $this->orderDAO = new OrderDAO();
  }

  public function cart() {
    $this->set('title', "Winkelwagen");
    $_SESSION['order'] = false;

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
          if ($_POST['discount'] == "1"){
            $discount = '8.00';
          } else {
            $discount = '0.00';
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
        $_SESSION['info'] = 'Product added to your cart';
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
            $_SESSION['info'] = 'Cart updated';
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
      }
    }
