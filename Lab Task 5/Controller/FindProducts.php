<?php

require_once '../Model/Model.php';

if (isset($_POST['find'])) {
    
        echo $_POST['id'];

    try {
        
        $allSearchedUsers = SearchProducts($_POST['id']);
        require_once '../ShowSearchedProducts.php';

    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}