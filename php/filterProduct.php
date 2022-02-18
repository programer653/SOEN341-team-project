
<body>

<?php

    #include the header of the website
    include '../php/header.php';

    #include the connection to the database
    include '../php/dbConn.php';



    $sql = "SELECT * FROM members ";
    //$sql = "SELECT * FROM `product table`;";

    //searching for the name
    if(isset($_POST['search'])){
        $search_term = mysqli_real_escape_string($_POST['search_box']);

        $sql .= "WHERE product_id = '{$search_term}'";

        $sql .= " OR price = '{$search_term}'";

    }

    $query = mysqli_query($sql) or die(mysqli_error());

?>



    <!-- when doing a search, it is going to be finding it in the database --!>
    <form name="search_form" method="POST" action="filterProduct.php">
        Search: <input type="text" name="search_box" value="" />
        <input type ="submit" name ="search" value="Search the table...">
    </form>


    <!--category of products
    product_id	price	quantity	name	category	description	images
    -->
    <table style = width="70%" cellspace="5">
        <tr>
            <td><strong>product_id</strong></td>
            <td><strong>price</strong></td>
            <td><strong>quantity</strong></td>
            <td><strong>name</strong></td>
            <td><strong>category</strong></td>
            <td><strong>description</strong></td>
            <td><strong>images</strong></td>
        </tr>

        <?php while ($row = mysqli_fetch_array($query)){ ?>
            <tr>
                <td><?php echo $row['product_id']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['category']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['images']; ?></td>

            </tr>

       <?php  } ?>

    </table>

    <!--
    filtering the database according to these criteria
    1. section (fruits, veggies)
    2. price (low to high)
    -->


    <!--including the footer in the website -->
    <?php
        include '../php/footer.php';
    ?>

</body>
