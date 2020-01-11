<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProductDAO.php';
require_once __DIR__ . '/../dao/TypeDAO.php';


class ProductsController extends Controller {

  private $productDAO;
  private $typeDAO;

  function __construct() {
    $this->productDAO = new ProductDAO();
    $this->typeDAO = new TypeDAO();
  }

  public function products() {

    $type = false;
    if (!empty($_GET['type'])) {
      $type = $_GET['type'];
    }

    $products = $this->productDAO->selectAllProducts($type);
    $this->set('products', $products);
    $this->set('type', $this->typeDAO->selectAllType());
    $this->set('title', 'Products');

    if ($_SERVER['HTTP_ACCEPT'] == 'application/json') {
      echo json_encode($products);
      exit();
    }
  }
}

