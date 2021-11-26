
    

<?php
$a= $_POST;
print_r($a);
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
         $arr = array('sunil', 'varma');
    $var="sunil";
     echo 
     '<img style="margin-left:auto, margin-right:auto" src="https://media.istockphoto.com/photos/thank-you-picture-id1306527304?b=1&k=20&m=1306527304&s=170667a&w=0&h=BpaD5aH7gsbQHvl-HM0q-rHqOcwKu6XwcUo5w7N92EM=" alt="">';
     
     
       echo "  <p> hello my name is & $var  </p> <br>"; 
     echo ('iam'. $arr[0]);
    
     
    }

    else
    {
        echo 'fail';
    }
    //  $stmt->close();
     $conn->close();
  
     ?>

