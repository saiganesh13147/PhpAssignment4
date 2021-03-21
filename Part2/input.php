<?php
require('mysqli_oop_connect.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(empty($_POST['username'])){
        
        echo "Please enter User Name<br>";
        
    }else{
        
        $username = $_POST['username'];
        
    }
    if(empty($_POST['message'])){

        echo "Please enter Message<br>";

    }
    else{

        $message = $_POST['message'];
    }

    $query = "INSERT into Messages (username,message) values (?,?)";

    $stmt = $mysqli->prepare($query);

    $stmt->bind_param("ss", $username, $message );

    $stmt->execute();

    $stmt->store_result();


    if ($mysqli->error) { 

        echo $mysqli->error . "<br>";
        
        echo "Failure <br>";


        } 
        else { 
            

        echo "Success <br>";
        
    }
     

}
?>