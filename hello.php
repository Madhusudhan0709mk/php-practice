<!DOCTYPE html>
<html>
<body>
   <!-- form submission in php  -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
   <input type = "text" name ="name" id ="name" />
   AGE:<input type = "text" name ="age" id ="age" />
   <input type="submit" />
</form>
<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
   $name = $_POST["name"];
   $age = $_POST["age"];
   for ($i=1; $i<=5; $i++){
   echo $name;
   echo "<br>";
   echo date("m/d/Y");
   };

}
// add php file to this file of php
include('error.php');
// require('error.php');

echo abs(-3.5);
?>

<!-- get type of variable -->
<?php 
$names = true;
echo var_dump($names);
?>

<!-- ternary operator -->
 <?php 
 $age = 30;
 $cond = ($age>20)? "<script>alert('yes');</script>":"not gtr than 20";
 echo $cond
 ?>

 <!-- function in php -->
  <!-- variables in php local ,global ,static -->
  <?php 
  
  function hello(){
    $var = 56;
   echo "hello func".$var;
   $var++;
  }
  hello();
  hello();
  ?>
<!-- php classes and objects -->
 
  <a href="demo/demo.php" >demo page</a>
  <br>
  <?php 
  class Solut{
   public $namess;
   public $extra = "extra check";
   function defin($name){
      echo $name;
   }
   // getters and setteers in php
   function set_name($namess){
    $this->namess=$namess;
   }

   function get_name(){
      return $this->namess;
   }
  }
  $obj = new Solut;
  $obj->defin("mad");
  $obj->set_name("demo_name");
  $output = $obj->get_name();
  echo $output;
  echo $obj->extra;
  ?>





</body>
</html>