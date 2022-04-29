<?php 

require_once ('Model/Model.php');

function fetchAllProducts(){
	return ShowAllProducts();

}
function fetchProducts($id){
	return ShowProducts($id);

}