<?php
ini_set('mysqli_connect_timeout',300);
ini_set('default_socket_timeout',300);
?>

<html>
<body>

  <form method="post" enctype="multipart/form-data">
    <br/>
    <input type="file" name="image">
    <br/><br/>
    <input type="submit" name="submit" value="Upload"/>
  </form>
  <?php
  

  if(isset($_POST['submit'])) 
  {
    if(getimagesize($_FILES['image']['tmp_name'])== FALSE)
    {   
      echo "Please select an image.";
    } 
    else 
    {   
      $image=addslashes($_FILES['image']['tmp_name']);
      $name=addslashes($_FILES['image']['name']);
      $image= file_get_contents($image);
      $image= base64_encode($image);
      saveimage($name,$image);
      
    }
  }

  function saveimage($name,$image)
  {
    $con=mysqli_connect("localhost", "root", "");
    mysqli_select_db($con,"kstark");
    $qry="insert into images(name,image) values($name,$image)";
    $result=mysqli_query($con,$qry);
    if($result)
    {
      echo "<br/>Image uploaded.";
    }
    else
    {
      echo "<br/>Image not uploaded.";
    }
  }
  
  ?>
</body>
</html>