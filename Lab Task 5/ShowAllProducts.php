<?php  
require_once 'Controller/ProductsInfo.php';

$products = fetchAllProducts();

    include "NavBar.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Buying Price</th>
            <th>Selling Price</th>
        
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $i => $user): ?>
            <tr>
                <td><a href="../ShowProducts.php?id=<?php echo $user['ID'] ?>"><?php echo $user['Name'] ?></a></td>
                <td><?php echo $user['Buying_Price'] ?></td>
                <td><?php echo $user['Selling_Price'] ?></td>
                
                <td><img width="100px" src="Uploads/<?php echo $user['Image'] ?>" alt="<?php echo $user['Name'] ?>"></td>
                <td><a href="EditProducts.php?id=<?php echo $user['ID'] ?>">Edit </a>&nbsp <a href="Controller/DeleteProducts.php?id=<?php echo $user['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')" >Delete</a></td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>
</body>
</html>