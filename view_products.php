<?php
include "auth.php";
include "../db.php";

$result = $conn->query("SELECT * FROM products");
?>

<h2>Products</h2>

<a href="add_product.php">Add New</a>

<table border="1">
<tr>
    <th>Name</th>
    <th>Price</th>
    <th>Category</th>
    <th>Actions</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?= $row['name'] ?></td>
    <td><?= $row['price'] ?></td>
    <td><?= $row['category'] ?></td>
    <td>
        <a href="edit_product.php?id=<?= $row['id'] ?>">Edit</a>
        <a href="delete_product.php?id=<?= $row['id'] ?>">Delete</a>
    </td>
</tr>
<?php } ?>

</table>