<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up Form</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="Sign-up-form">
        <img src="https://cdn-icons-png.flaticon.com/128/3237/3237472.png" alt="">
        <h1 style="color: whitesmoke;font-size: 3em;">Sign Up</h1>
        <form action="" method="post" name="sign">
        <input type="email" class="input-box" placeholder="Your Email" name="email" required>
        <input type="password" class="input-box" placeholder="Your Password" name="password" required>
        <p id="para"><span><input type="checkbox"></span>I agree to the terms of services</p>
        <button type="submit" class="Signup-btn" name="butto">Sign up</button>
        </form>
        <hr>
        
        <p class="or">OR</p>

        <p id="lastpara">Do You Have an Account?<a style="color: wheat;" href="signin.php">Sign in</a></p>

        <?php
        $count=0;
        $conn= new mysqli('localhost','root','','hello');
        if ($_POST) {
         $qur= $conn->query('select email from registration');
         while ($temp= $qur->fetch_assoc()) {
           if ($temp['email']==$_POST['email']) {
            global $count;
            $count++;
            break;
           }
         }
           if ($count==1) {
             echo '<p class="phpech">';
             echo "your account is already present try to login";
             echo "</p>";
           }
           else {
            //  global $conn;
            $_SESSION['email']=$_POST['email'];
            $_SESSION['password']=$_POST['password'];
            $ran = rand(10000,20000);
            $_SESSION['ran']=$ran;
            $to_email = $_POST['email'];
            $subject = "Hello user! verify your email";
            $body = "The OTP for registration is $ran";
            $headers = "From: bookstormofficial@gmail.com";
            

             if (mail($to_email, $subject, $body, $headers)) {
               ?>
                <p>Email successfully sent.Enter your otp here</p> 
                
                <span id="otptext">Enter your OTP:</span>
                <!-- <form action="otp.php" method="post">
                <input type="text" id="otpreader">
                <button type="submit">submit</button>
                </form> -->
                <form action="otp.php" method="post">
                  <input type="text" id="otpreader" name="otpreader" required>
                  <button type="submit" class="Signup-btn"> submit</button>
                </form>
                <?php
              } else {
              echo "Email sending failed...";
            }
            
           }
         }

        $conn->close();

       ?>
         



       

    </div>
</body>
</html>
