<?php include '../php/header.php'; ?>
<style>
    .button {
        transition-duration: 0.4s;
        border: 1px solid #A9A9A9;
        position:relative;
        padding:4px 8px;
        background:white;
        font-size:0.79vw;
    }

    .button:hover {
        background-color: #A9A9A9;
        position:relative;
        color:white;
        padding:4px 8px;
        font-size:0.79vw;
        text-align: center;
    }


    ul.product {
        list-style-type: none;
        display:table-row;
    }

    li.product {
        height:10%;
        display: table-cell;
        text-align: center;
        padding:16px 20px;
        width:9vw;
    }

</style>

    <h1 style="color:darkgray; position:static; margin-left:6vw">Product List</h1>
    
    <br>

    <div style="position:static; height:800px; width:90wh;">
    <form action="" method="get" name="the_product" id="the_product">
    <button class="button" type="submit" form="the_product" value="Add" name="add" style="position:absolute; margin-left:75vw;"><label for"add">ADD</label></button>
    <br>  
    <div style="position: relative; margin-left:13vw">
        <ul  class="product">
            <li class="product"><h2>IMAGE</h2></li>
            <li class="product"><h2>NAME</h2></li>
            <li class="product"><h2>PRICE</h2></li>
            <li class="product"><h2>QUANTITY</h2></li>
            <li class="product"></li>
            <li class="product"></li>
        </ul>
    </div>
    <div style="position: relative; margin-left:13%">
        <ul  class="product">
            <li class="product"><a href=""><img src="../images/garlic_commodity-page.png" width="100vw" height="auto"/></a></li>
            <li class="product">GARLIC</li>
            <li class="product">$1.29/each</li>
            <li class="product">139</li>
            <li class="product"><button class="button" type="submit" form="the_product" value="Remove" name="remove"><label for"remove">REMOVE</label></button></li>
            <li class="product"><button class="button" type="submit" form="the_product" value="Edit" name="edit" ><label for"edit"><a href="p8.html">EDIT</a></label></button></li>
        </ul>
    </div>

    <br>

    <div style="position: relative; margin-left:13%">
        <ul  class="product">
            <li class="product"><a href=""><img src="../images/corn_commodity-page.png" width="100vw" height="auto"/></a></li>
            <li class="product">CORN</li>
            <li class="product">$0.99/each</li>
            <li class="product">453</li>
            <li class="product"><button class="button" type="submit" form="the_product" value="Remove" name="remove"><label for"remove">REMOVE</label></button></li>
            <li class="product"><button class="button" type="submit" form="the_product" value="Edit" name="edit"><label for"edit">EDIT</label></button></li>
        </ul>
    </div>

    <br>

    <div style="position: relative; margin-left:13%">
        <ul  class="product">
            <li class="product"><a href=""><img src="../images/eggplant_commodity-page.png" width="100vw" height="auto"/></a></li>
            <li class="product">EGGPLANT</li>
            <li class="product">$3.49/LB</li>
            <li class="product">87</li>
            <li class="product"><button class="button" type="submit" form="the_product" value="Remove" name="remove"><label for"remove">REMOVE</label></button></li>
            <li class="product"><button class="button" type="submit" form="the_product" value="Edit" name="edit"><label for"edit">EDIT</label></button></li>
        </ul>
    </div>

    <br>

    <div style="position: relative; margin-left:13%">
        <ul  class="product" stle="position: relative; margin-left:10%">
            <li class="product"><a href=""><img src="../images/potatoes_commodity-page.png" width="100vw" height="auto"/></a></li>
            <li class="product">POTATOES</li>
            <li class="product">$4.99/LB</li>
            <li class="product">305</li>
            <li class="product"><button class="button" type="submit" form="the_product" value="Remove" name="remove"><label for"remove">REMOVE</label></button></li>
            <li class="product"><button class="button" type="submit" form="the_product" value="Edit" name="edit"><label for"edit">EDIT</label></button></li>
        </ul>
    </div>
    
    

    </form>
    </div>>

    <br><br><br><br>

    <!--footer-->
    <?php include '../php/footer.php'; ?>
</body>

</html>