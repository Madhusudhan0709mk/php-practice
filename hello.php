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
  <a href="demo/demo.php" >demo page</a>
</body>
</html>