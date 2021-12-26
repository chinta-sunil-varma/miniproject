



<?php session_start();
// since the user logs in we must start a session

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in Form</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="Sign-up-form">
        <img src="https://cdn-icons-png.flaticon.com/128/3237/3237472.png" alt="">
        <h1 style="color: whitesmoke;font-size: 3em;">Sign In</h1>
        <form action="" method="post" name="hi">
        <input type="email" class="input-box" placeholder="Your Email" name="email" required>
        <input type="password" class="input-box" placeholder="Your Password" name="password" required>
        <p id="para"><span><input type="checkbox"></span>I agree to the terms of services</p>
        <button type="submit" class="Signup-btn" name="butto">Sign in</button>
        <hr>
        <p class="or">OR</p>

        <p id="lastpara">Don't  You Have an Account?<a style="color: wheat;" href="signup.php">Sign up</a>


        <?php
        
         
          if ($_POST) // user had submiited the form
          {
            $conn= new mysqli('localhost','root','','hello'); // connection with data base
            $count=0;
        if ($conn-> connect_error)
        {
        die ('connection failed'.$conn->connect_error); 
        }
            $email = $_POST['email'];   //retriving the input values of email and pass word fields
          $password= $_POST['password'];
          function namechecker()
          {

            global $conn,$email,$count,$password;
            $var= $conn-> query('select * from registration '); //checking the mail and the password
            echo "<br>";


            while ($temp= $var->fetch_assoc()) {
            if ($temp['email']==$email and $temp['password']==$password) {
              $name=$temp['name'];
              $count++;
              break;
            }


            }
            if ($count==1){  // here we have succesfuly got the info of the user now we should create a unique username of user 
              $email = $_POST['email'];
              
           // output variable stores the username
            $_SESSION['username']=$name;  // this session variable is finally used to diaplay his name on the app.php
            echo " redirecting to home page.....";
            
            $_SESSION['activstat']='activated'; // creating a variable activstat to know that the session had actually started
            $_SESSION['email']=$email;
            // finally redirecting to home page
            echo '<script>
            setTimeout(()=>{
            window.location.href="app.php";},3000) 
            </script>';


          }
            else {
              echo " <span id=\"nxtline\"> <br>Password or username is incorrect </span>";
            }



            }
            namechecker(); //funciton calling
          }

        ?>
        </p>

        </form>

      </div>

</body>
</html>
