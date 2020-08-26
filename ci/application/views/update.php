<?php include_once('header.php');?>
<div class="container">
  <a href="<?php echo base_url("index.php/Admin");?>" class="btn btn-outline-success" title="Return to the previous page">&laquo; Inapoi</a>
  <?php echo form_open("AdminCreate/change/{$post->id}",[''=>'form-horizontal']);?>
  <fieldset>
    <legend>Editeaza Regula</legend>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">ACTUALIZARE</label>      
    </div>
    <div class="form-group">
      <div class="col-md-5">
        <label for="exampleInputEmail1">Titlul</label>
        <small id="emailHelp" class="form-text text-muted">Titlul specific pentru regula.</small>
        <?php echo form_input(['name'=>'title','placeholder'=>'Title','class'=>'form-control','value'=>set_value('title',$post->title)]);?>

        <?php echo form_error('title','<div class="text-danger">','</div>');?>
      </div>      
    </div>
    <div class="form-group">
      <div class="col-md-5">
        <label for="exampleInputPassword1">Descriere</label>
        <?php echo form_textarea(['name'=>'description','placeholder'=>'Description','class'=>'form-control','value'=>set_value('description',$post->description)]);?>
        <?php echo form_error('description','<div class="text-danger">','</div>');?>
        
        <?php echo form_submit(['name'=>'submit', 'value'=>'Actualizeaza','class'=>'btn btn-default']);?>
        <?php echo anchor('Admin','Inapoi',['class'=>'btn btn-default']);?>
      </fieldset>
      <?php echo form_close(); ?>
    </div></div></fieldset></div>