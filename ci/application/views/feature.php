  <div class="sticky">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="<?php echo base_url("index.php/Welcome");?>">GameBoard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
           <a class="nav-link" href="<?php echo base_url("index.php/Welcome");?>">Acasă</a>   
         </li>
         <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url("index.php/Admin");?>">ADMIN</a>
    </li>
         <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url("index.php/Feature");?>">Reprezentativ</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url("index.php/About");?>">Reguli</a>
        </li>
      </ul>
      <a href="<?php echo base_url("index.php/LogIn");?>"><button class="btn btn-danger float-right">Log In</button></a>
    </div>
  </nav>
  <div class="progress">
    <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
  </div>
</div><br/>

<center><div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="5000">
        <img style="display:block; height: 520px; width: 960px;" src="http://localhost/ci/img/puzzle.jpg" class="d-block w-80" alt="1">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font-size:30px; color:black;">Cel mai asteptat</h5>
          <p style="font-size:20px; color:black;">Categorie de joc</p>
        </div>
      </div>
      <div class="carousel-item" data-interval="5000">
        <img style="display:block; height: 520px; width: 960px;" src="http://localhost/ci/img/dart.jpg" class="d-block w-80" alt="2">
        <div class="carousel-caption d-none d-md-block"> 
          <h5 style="font-size:30px; color:black;">Cel mai competitiv</h5>
          <p style=" font-size:20px; color:black;">Categorie de joc</p> 
        </div>
      </div>
      <div class="carousel-item" data-interval="5000">
        <img style="display:block; height: 520px; width: 960px;"  src="http://localhost/ci/img/table.jpg" class="d-block w-80" alt="3">
        <div class="carousel-caption d-none d-md-block"> 
          <h5 style="font-size:30px; color:black;">Cel mai jucat</h5>
          <p style="font-size:20px; color:black;">Categorie de joc</p> 
        </div>
      </div>
      <div class="carousel-item" data-interval="5000">
        <img style="display:block; height: 520px; width: 960px;" src="http://localhost/ci/img/4.jpg" class="d-block w-80" alt="4">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font-size:30px; color:black;">Cel mai cautat</h5>
          <p style="font-size:20px; color:black;">Categorie de joc</p>
          
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div></center>