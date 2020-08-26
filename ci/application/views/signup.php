  <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box;}

    /* Full-width input fields */
    input[type=text], input[type=password] {
      width: 50%;
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
</br></br></br>  
<?php echo form_open('SignUp/index',['class'=>'form-horizontal']);?>

<center>
  <fieldset>
    <legend><u>Creaza-ti un cont!</u></legend>
    <?php if ($msg2 =$this->session->flashdata('msg2')): ?>
      <?php echo $msg2; ?>
    <?php endif; ?>
    <div class="form-group">
    </br></br></br>
    
    <label for="inputUsername" class="col-lg control-label">Username</label>
    <?php echo form_input(['name'=>'username','placeholder'=>'Introduceti numele','class'=>'form-control']);?>
  </div>
  
  <div class="form-group">
    <label for="inputEmail" class="col-lg control-label">Email</label>
    <?php echo form_input(['name'=>'email','placeholder'=>'Introduceti adresa de email','class'=>'form-control']);?>
    <small id="emailHelp" class="form-text text-muted"><i>"Niciodata nu iti vom dezvalui parola"</i></small>
  </div>

  <div class="form-group">
    <label for="inputPassword" class="col-lg control-label">Parola</label>

    <?php echo form_input(['name'=>'password','placeholder'=>'Introduceti parola','class'=>'form-control','type'=>'password']);?>

  </div>
  
  <?php echo form_error('username','<div class="text-danger">','</div>');?>
  <?php echo form_error('email','<div class="text-danger">','</div>');?>
  <?php echo form_error('password','<div class="text-danger">','</div>');?>    
  
  <div class="form-group">
    <div class="col-md-10 col-md-offset-2">
      <?php echo form_submit(['name'=>'submit','value'=>'Inregistreaza','class'=>'btn btn-success btn-lg']);?>

      &nbsp;&nbsp;
      <!--Javascript Button-->
      <a href="<?php echo base_url("index.php/Welcome");?>" class="btn btn-danger btn-lg">Anuleaza</a>
    </div>
  </div>
</center>