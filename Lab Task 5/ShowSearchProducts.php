<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        table,td,th{
            border:1px solid black;
        }
    </style>
</head>
<body>

<?php
    include "Navvar.php";
?>

<table>
    <thead>
        <tr>
            <th>Product_id</th>
            <th>Product_name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($allSearchedUsers as $i => $user): ?>
            <tr>
                <td><a href="ShowProducts.php?id=<?php echo $user['ID'] ?>"><?php echo $user['ID'] ?></a></td>
                <td><?php echo $user['Name'] ?></td>
                <td><a href="../EditProducts.php?id=<?php echo $user['ID'] ?>">Edit</a>&nbsp<a href="Controller/DeleteProducts.php?id=<?php echo $user['ID'] ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    
</table>
</body>
</html>