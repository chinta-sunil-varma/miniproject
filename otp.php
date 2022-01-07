<?php 
session_start();

if(!isset($_SESSION['ran']))
{
  
  echo '<script>window.location.href="signin.php";</script>';
  die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>otppage</title>
    <link rel="stylesheet" href="otp.css">
</head>
<body>
    <?php
    
    // print_r($_POST);
    // print_r($_SESSION);
     if($_POST['otpreader']==$_SESSION['ran']) // checking weather the otp entered by the user matches with the generated otp
     {
        if (true) {
           $conn= new mysqli('localhost','root','','hello'); //since user had entered th correct otp we shall create a unique name corresponding to him
           $email=$_SESSION['email'];
           // echo 'Registration successful redirecting to signin';
           
           // output variable contains the name which is unique for all users since email entered is unique
          

           
           
               // making user know that his acc has been succesfully created
            echo '
            <section class="redirect">
            <h1 class="main"> SUCCESS! REDIRECTING TO LOGIN</h1> 
            <img src="https://images.unsplash.com/photo-1559029879-a67eafa54765?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MTR8OTcyNDA4Nnx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" alt="unable to load" >
            </section>
            
            
            
            
            ';
            
             $email=$_SESSION['email'];
             $password=$_SESSION['password'];
             $name=$_SESSION['name'];
             $ins= $conn-> query("INSERT INTO registration VALUES(\"$email\",\"$password\",\"$name\");"); //finally here the user is registered with us
            

             mkdir("uploadeddoc/".$name); // the user specific directory where all his pdf shall be stored is specified below


           
            // redirecting to signin page after 3 seconds
           echo '<script>
           setTimeout(()=>{window.location.href="signin.php"},3000)
           </script>'; 
          
          
        }
          else {
            echo 'unsuccesfull registration';
          }
     }
     // here the user had entered the wrong otp so we shall make him know and redirect him to signup page
     else{
     echo '
     <section class="redirect">
     <h1 class="main">OTP is Invalid! Try to signup agian!</h1>
     
     </section>
     
     ';
     echo '<script>
     setTimeout(()=>{window.location.href="signup.php"},3000)
     </script>';
    
    
    }
     session_unset(); // since the session must be useed again in login we must destroy the session
     session_destroy();
     
          
    ?>
</body>
</html>