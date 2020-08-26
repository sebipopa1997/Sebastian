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
       <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url("index.php/Admin");?>">ADMIN</a>   
      </li>       
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url("index.php/Feature");?>">Reprezentativ</a>
      </li>      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url("index.php/About");?>">Reguli</a>
      </li>
    </ul>
  </div>
</nav>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
</div></br>

<div class="container">
  <h3>Vezi toate postările</h3>
  <?php if($msg=$this->session->flashdata('msg')):?>
    <?php echo $msg;?>
  <?php endif;?>
  <?php echo anchor('AdminCreate/create','Adauga Regula',['class'=>'btn btn-primary']);?>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Titlul</th>
        <th scope="col">Descrierea</th>
        <th scope="col">Data postării</th>
        <th scope="col">Acțiuni</th>
      </tr>
    </thead>
    <tbody>
      <?php if(count($table)):?>
        <?php foreach($table as $tables):?>
          <tr class="table-active">
            <th scope="row"><?php echo $tables->title;?></th>
            <td><?php echo $tables->description;?></td>                                  
            <td><?php echo $tables->date_created;?></td>
            <td>             
              <?php echo anchor("AdminCreate/update/{$tables->id}",'Update',['class'=>"badge badge-pill badge-primary"]);?>
              <?php echo anchor("AdminCreate/delete/{$tables->id}",'Delete',['class'=>'badge badge-pill badge-danger']);?>
            </td>
          </tr>
        <?php endforeach;?>
        <?php else: ?>
          <tr>
            <td>No Records Found!</td>td>
          <?php endif; ?>
        </tbody>
      </table> 
    </div>