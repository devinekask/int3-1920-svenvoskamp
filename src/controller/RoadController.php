<?php

require_once __DIR__ . '/Controller.php';



class RoadController extends Controller {



  function __construct() {
  }

  public function index() {
    $this->set('title', "The Road");
  }
}
