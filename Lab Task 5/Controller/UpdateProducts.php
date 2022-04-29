<?php  
require_once '../Model/Model.php';


if (isset($_POST['UpdateProducts'])) {
	$data['name'] = $_POST['name'];
	$data['buy'] = $_POST['Buy'];
	$data['sell'] = $_POST['Sell'];



  if (UpdateProducts($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	header('Location: ../ShowProducts.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>