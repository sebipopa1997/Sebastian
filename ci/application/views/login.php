<style>
  body {font-family: Arial, Helvetica, sans-serif;}
  * {box-sizing: border-box;}

  /* Full-width input fields */
  input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }

  /* Add a background color when the inputs get focus */
  input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }  

</style>   
<center><div class="wrapper">
  <form class="form-login">
    <h2 class="form-login-heading">Te rugam sa te conectezi</h2>
    <h2 class="form-login-heading" style="text-align: center; margin-bottom: 30px;">
      <img src="http://localhost/ci/img/urs.ico" style="max-width: 100%"></h2>
     
      <div class="col-md-5">
        <form method="post" action="<?php echo base_url()?>LogIn/login1">
        <input type="text" class="form-control" name="username" placeholder="Username" />
        <span class="text-dander"><?php echo form_error('username');?></span>
        <input type="password" class="form-control" name="password" placeholder="Password" /> 
        <span class="text-dander"><?php echo form_error('password');?></span>     
        <label class="checkbox">
          <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" name="submit" value="Login" type="submit">Login</button>
        <?php
        echo $this->session->flashdata("error");
        ?>  
      </form>
    </div>

    <!--Easter EGG-->
    <h10></br>SAU</br><p id="demo" onclick="myFunction()">"Creaza-ti un cont nou"</p>
      <script>
        function myFunction() 
        {
          document.getElementById("demo").style.color = "red";
        }
      </script></h10></br>

        <a href="<?php echo base_url("index.php/SignUp");?>"><button type="button" class="btn btn-success" >Inregistreaza-te</button></a>  
      </div>
    </div>
  </form>
</div>


</p></p><a href="<?php echo base_url("index.php/Welcome");?>"
class="btn btn-info" title="Return to the previous page">&laquo;Inapoi</a>
</div>
</p><b>Probleme la conectare? <a href=https://www.google.com/>Clear cookies !</a></b></center>
</div>