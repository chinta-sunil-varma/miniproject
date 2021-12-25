



<?php session_start();  ?>


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
        $conn= new mysqli('localhost','root','','hello');
        $count=0;
        if ($conn-> connect_error)
        die ('connection failed'.$conn->connect_error);
        else {
          if ($_POST)
          {$email = $_POST['email'];
          $password= $_POST['password'];
          function namechecker()
          {

            global $conn,$email,$count,$password;
            $var= $conn-> query('select * from registration ');
            echo "<br>";


            while ($temp= $var->fetch_assoc()) {
            if ($temp['email']==$email and $temp['password']==$password) {
              $count++;
              break;
            }


            }
            if ($count==1){
              $email = $_POST['email'];
              $a=1;
              $output=$email[0];
              while ($a<strlen($email)) {
              if ($email[$a]!='@' and $email[$a]!='.') {
              $output=$output.$email[$a];
              $a++;
            }
            else if ($email[$a]=='@') {
                 break;
                 }
             else{
               $a++;
               }
             }
           
            $_SESSION['username']=$output;
            echo " redirecting to home page.....";
            $email = $_POST['email'];
            $_SESSION['activstat']='activated';
            $_SESSION['email']=$email;
            echo '<script>
            setTimeout(()=>{
            window.location.href="app.php";},3000)
            </script>';


          }
            else {
              echo " <span id=\"nxtline\"> <br>Password or username is incorrect </span>";
            }



            }
            namechecker();
          }}

        ?>
        </p>

        </form>

      </div>
<script src="signin.js"></script>      
</body>
</html>
