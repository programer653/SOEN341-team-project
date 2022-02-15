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
</style>
    <br>
    <div>
        <h1 style="color:darkgray; position:static; text-align:center">Product Detail</h1>

        <div style="position:static; height:800px; width:90wh;">
            <form action="" id="Detail">
            <div style="float:left">
                <h2 style="color:darkgray; margin-left:13vw;">Product Description</h2>
                <textarea id="description" rows="40" cols="85" style="resize:none; width:30vw; margin-left:8vw; line-height:1.2em;"></textarea>
            </div>

            <div style="height: 800px">
                <br>
                <h2 style="color:darkgray; margin-left:58vw;">Product Image</h2>
                <img src="../images/garlic_commodity-page.png" style="margin-left:20vw; width:8vw; height:auto"/>
                <button class="button" id="new_img" name="new_img" type="button" style="top:4vh; left:-6vw"><label for="new_img">UPLOAD</label></button>
                <br><br><br><br><br>
                <h2 style="color:darkgray; margin-left:58vw;">Product Price</h2>
                <input type="text" id="price" name="price" style="margin-left:20vw;">
                <br><br><br><br><br>
                <h2 style="color:darkgray; margin-left:58vw;">Product Quantity</h2>
                <input type="text" id="quantity" name="quantity" style="margin-left:20vw;">
            </div>
            <br><br>
            <button class="button" type="submit" form="Detail" value="Save" name="save" style="top:-8.7vh; left:76vw;"><label for"save">SAVE</label></button>
        </div>
    </div>
    
    <br><br>

    <!--footer-->
    <?php include '../php/footer.php'; ?>
</body>
</html>