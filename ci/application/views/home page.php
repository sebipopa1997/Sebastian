 <div class="sticky"> <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php echo base_url("index.php/Welcome");?>">GameBoard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
       <a class="nav-link" href="<?php echo base_url("index.php/Welcome");?>">Acasă</a>   
     </li>
     <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url("index.php/Admin");?>">ADMIN</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url("index.php/Feature");?>">Reprezentativ</a>
    </li>    
    <li class="nav-item">
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
</div></br>


<center><img style="display:block; height: 300px; width: 700px;" src="http://localhost/ci/img/intro.gif" alt="Card image"></center></br></br></br>

<!--For the main posts of the site max:800px(550px for 2 posts)-->
<div class="card-deck">
  <?php if(count($posts)):?>
    <?php foreach($posts as $post):?>
      <div class="card " style="min-width: 485px; max-width:485px;">
        <img class="card-img-top" src="<?php echo $post->genres;?>" alt="Card image">
        <div class="card-body">
         <center><h4 class="card-title"><u><?php echo $post->title;?></u></h4></br></center>
          <p class="card-text"><?php echo $post->status;?></p>
         <center><a href="<?php echo $post->link;?>" class="btn btn-primary" target="_blank">Show more about it</a></center>
        </div>
      </div>

    <?php endforeach;?>
    <?php else:?>
      <tr>
        <td>No Records</td>
      </tr>
    <?php endif;?>
  </div>