<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
class Consts{

   public $demo1;
   public $demo2;
   public function __construct($demo1,$demo2)
   {
      $this->demo1=$demo1;
      $this->demo2=$demo2;
   }

   public function display_values(){
      return "Car : $this->demo1 ,$this->demo2";
   }
}

$object = new Consts("demo_name 1","demo_name2");
echo $object->display_values();
?>
</body>
</html>