<?php
  $email= $_POST['email'];
 $password= $_POST['password'];

 $conn = new mysqli('localhost','root','','hello');
 if ($conn->connect_error)
 {
     die('Connection Failed :'.$conn-> connect_error);
 }
 
     $stmt= $conn->query("INSERT INTO registration(email,password) VALUES('$email','$password')");
    /*$stmt->blind_param("ss",$email,$password);
     $stmt->execute();*/
     if($stmt){


     echo "registration succesfully  ";
    
    }

    else
    {
        echo 'fail';
    }
    //  $stmt->close();
     $conn->close();
 
?>