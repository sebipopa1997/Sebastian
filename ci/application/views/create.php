<?php include_once('header.php');?>
<div class="container">
  <a href="<?php echo base_url("index.php/Admin");?>" class="btn btn-outline-success" title="Return to the previous page">&laquo; Inapoi</a>
  <?php echo form_open('AdminCreate/save',[''=>'form-horizontal']);?>
  <fieldset>
    <legend>Adauga Postare</legend>
    <div class="form-group row">
      <label for="Reguli" class="col-sm-2 col-form-label">Reguli</label>
      
    </div>
    <div class="form-group">
      <div class="col-md-5">
        <label for="exampleInputEmail1">Titlul</label>
        <small id="emailHelp" class="form-text text-muted">Titlul adecvat pentru postare</small>
        <?php echo form_input(['name'=>'title','placeholder'=>'Titlul','class'=>'form-control']);?>
        <?php echo form_error('title','<div class="text-danger">','</div>');?>
      </div>      
    </div>
    <div class="form-group">
      <div class="col-md-5">
        <label for="exampleInputPassword1">Descriere</label>
        <?php echo form_textarea(['name'=>'description','placeholder'=>'Descriere','class'=>'form-control']);?>
        <?php echo form_error('description','<div class="text-danger">','</div>');?>
        
        <?php echo form_submit(['name'=>'submit', 'value'=>'Trimite','class'=>'btn btn-default']);?>
        <?php echo anchor('Admin','Inapoi',['class'=>'btn btn-default']);?>
      </fieldset>
      <?php echo form_close(); ?>
    </div></div></fieldset></div>