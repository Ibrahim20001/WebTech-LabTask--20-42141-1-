<?php 
require_once 'db_connect.php';

function ShowAllProducts(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `products` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function ShowProducts($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `products` where ID= ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function SearchProducts($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `products` WHERE Name LIKE '%$name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function AddProducts($data){
    $conn = db_conn();
    $selectQuery = "INSERT into products (Name, Buying_Price,Selling_Price,Image)
VALUES (:name, :buy, :sell,:image)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':buy' => $data['buy'],
            ':sell' => $data['sell'],
            ':image'=> $data['image']
        
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function UpdateProducts($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE products set Name = ?, Buying_Price = ?, Selling_Price= ?  where ID= ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['buy'], $data['sell'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function DeleteProducts($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `products` WHERE `ID`= ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}