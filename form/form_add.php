<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_add</title>
</head>
<body>
    <?php 
    
    
    

    $connect = new mysqli("localhost","root","mad123","myDB");

    if($connect->connect_error){
        die("connection error : " . $connect ->connect_error);
    }else{
        echo "connection successfull";
    }

    $sqltabel = "CREATE TABLE IF NOT EXISTS FORM(
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20) NOT NULL
    )";

    if($connect->query($sqltabel)=== TRUE){
        echo "created : " ;
    }else{
        die("error : ".$connect -> connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST["name"];
        

        $stm = $connect->prepare("INSERT INTO FORM(name) VALUES(?)");
        $stm ->bind_param("s",$name);
        if($stm->execute()){
            echo "executed";
        }else{
            echo "error: ".$stm->error;
        }
        $name = " ";
        echo "<script>alert('submitted');</script>";
        $stm->close();
    }

    $connect->close()

    ?>
</body>
</html>