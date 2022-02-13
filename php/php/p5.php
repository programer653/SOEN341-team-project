<?php include '../php/header.php'; ?>

    <!--log in page-->
    <div id="login-box">
        <form action="">
         <h1>Login</h1>
          <div class="form">
            <div class="item">
               <input type="text" placeholder="email" />
            </div>
            <div class="item">
               <input type="password" placeholder="Password"/>
              <br><a href="">forget password?</a>
            </div>
        </div>
          <button type="submit">Submit</button>
          <div>
            <br>not a member?
            <br><button type="button" class="btn btn-primary" onclick="window.location.href='../php/P6.php'">Sign up</button>
        </div>
        </form>
    </div>


    <!--footer-->
    <?php include '../php/footer.php'; ?>
</body>
</html>