<body>
  <div class="sticky">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="<?php echo base_url("index.php/Welcome");?>">GameBoard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
           <a class="nav-link" href="<?php echo base_url("index.php/Welcome");?>">Acasă</a>   
         </li>
         <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url("index.php/Admin");?>">ADMIN</a>
    </li>        
         <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url("index.php/Feature");?>">Reprezentativ</a>
        </li>       
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url("index.php/About");?>">Reguli</a>
        </li>
      </ul>
      <a href="<?php echo base_url("index.php/LogIn");?>"><button class="btn btn-danger float-right">Log In</button></a>	  
    </form>
  </div>
</nav>

<div class="progress">
  <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
</div>
</div><br/>

<center><h5>Bine ați venit pe pagina de <u>GameBoard</u>! Bucurați-vă de fiecare joc.</br>Citiți cu atenție regulile și contul dumneavoastră nu o să fie banat/dezactivat.</h5></center></br>


<center><?php
foreach($table as $tbl) {?>
  <div class="card text-white bg-primary mb-3" style="max-width: 25rem;">
    <div class="card-header"><?php echo $tbl->title ?></div>
    <div class="card-body">
      <p class="card-title"><?php echo $tbl->description ?></p>
    </div>
  </div>

  <?php }?></center>

</body>

