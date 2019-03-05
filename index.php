<?php
  include 'includes/newclass.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css">
  <script src="main.js"></script>
</head>
<body>
  <?php 
    //$object = new NewCLass;
    //unset($object); This is how to destroy the object after you create them 
    //echo $object; Error message cause you can't converted the Object or Class into sting! you have to use then (__toString() function)
    //echo $object;
    //echo $object->getProperty();
    echo NewClass::staticMethod()."<br>";
    echo NewClass::secondStaticMethod();
  ?>
  
</body>
</html>
