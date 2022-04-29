<?php 

require_once '../Model/Model.php';

if (DeleteProducts($_GET['name'])) {
    header('Location: ../ShowAllProducts.php');
}

 ?>