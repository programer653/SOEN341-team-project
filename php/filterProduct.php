<?php

#this is going to be calling the database
include "dbConn.php";

$sql = "SELECT * FROM members";

$query = mysql_query($sql) or die(mysql_error());

?>
<!--

product_id	price	quantity	name	category	description	images

-->
<table width = "70%" cellpadding="5">
    <tr>
        <td>Product ID</td>
        <td>Price</td>
        <td>Quantity</td>
        <td>Name</td>
        <td>Category</td>
        <td>Description</td>
        <td>Images</td>
    </tr>

    <?php while ($row mysql_fetch_array($query)){ ?>
        <tr>
            <td><?php echo $row['Product']; ?></td>
            <td><?php echo $row['Price']; ?></td>
            <td><?php echo $row['Quantity']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Category']; ?></td>
            <td><?php echo $row['Description']; ?></td>
            <td><?php echo $row['Image']; ?></td>

        </tr>

   <?php  } ?>

</table>

<!--
filtering the database according to these criteria
1. section (fruits, veggies)
2. price (low to high)
3.

-->

