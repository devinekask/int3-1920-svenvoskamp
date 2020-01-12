<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProductDAO.php';
require_once __DIR__ . '/../dao/TypeDAO.php';
require_once __DIR__ . '/../dao/SpecDAO.php';


class ProductsController extends Controller {

  private $productDAO;
  private $typeDAO;
  private $specDAO;

  function __construct() {
    $this->productDAO = new ProductDAO();
    $this->typeDAO = new TypeDAO();
    $this->specDAO = new SpecDAO();
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

  public function detail() {
    if(!empty($_GET['id'])){
      $product = $this->productDAO->selectProductById($_GET['id']);
      $specs = $this->specDAO->selectSpecsByProductId($_GET['id']);
      $allproducts = $this->productDAO->selectProductAllByProductId($_GET['id']);
    }
    if(!empty($_GET['type'])){
      $relatedproducts =  $this->productDAO->selectProductsByTypeId($_GET['type'], $_GET['id']);
    }
      if(empty($product)) {
        $_SESSION['error'] = 'Dit product kon niet gevonden worden';
        header('Location: index.php');
        exit();
      }
    $this->set('title', 'Products-Detail');
    $this->set('allproducts', $allproducts);
    $this->set('specs', $specs);
    $this->set('product', $product);
    $this->set('relatedproducts', $relatedproducts);

  }
}

