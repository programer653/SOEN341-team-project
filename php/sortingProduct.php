<?php
    include '../php/header.php';
?>

<?php

//connection
$link = mysqli_connect("localhost", "root", "", "soen341");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// query by order (ex; higher to lower, by alphabetical order, ...
$sql = "SELECT * FROM product_table ORDER BY product_id";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
        echo "<tr>";
        echo "<th>product_id</th>";
        echo "<th>price</th>";
        echo "<th>quantity</th>";
        echo "<th>name</th>";
        echo "<th>category</th>";
        echo "<th>description</th>";
        echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['product_id'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['quantity'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['category'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
