<?php
  session_start(); // since we deal with session below we must start it first
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
          <input type="text" class="input-box" placeholder="Your name" name="name" required>
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
        $count1=0;
        $conn= new mysqli('localhost','root','','hello');
        if ($_POST) { // this block shall execute when the user clicks the form submit
         $qur= $conn->query('select email from registration');
         while ($temp= $qur->fetch_assoc()) {
           if ($temp['email']==$_POST['email']) { // here we are checking whether the user entered the email which is already present in the data base
            global $count;
            $count++; // this shall increment when we find a username corresponding to entered email
            break;
           }
         }
           if ($count==1) {
             echo '<p class="phpech">';
             echo "your account is already present try to login";
             echo "</p>";
             die();
           }
           $qur= $conn->query('select name from registration');
           while($temp = $qur->fetch_assoc()){

            if($temp['name']==$_POST['name']){
              global $count1;
              $count1++;
              break;
            }
           }
           if($count1==1)
           {
            echo '<p class="phpech">';
            echo "Name is already used by other user!";
            echo "</p>";
            die();
           }
          



          
           elseif(strlen($_POST['password'])>6) {
            
            //  global $conn; thsis block shall execute if he is a new user
            $_SESSION['email']=$_POST['email']; // since we redirect the otp.php page when user clicks submit we shall loose his info like his password and email so we store them in the session
            $_SESSION['password']=$_POST['password'];
            $_SESSION['name']=$_POST['name'];
            $name=$_SESSION['name'];
            $ran = rand(10000,20000); // generating the random number from the given range this is the OTP
            $_SESSION['ran']=$ran;   // storing the random number
            $to_email = $_POST['email']; // destination email
            $subject = "Hello $name ! verify your email for Book Storm access"; // subject of the mail
            $body = "The OTP for registration is $ran"; // body of the mail
            $headers = "From: bookstormofficial@gmail.com"; // the gmail SMTP which we configured in both php.ini and email sender file should be specified
            

             if (mail($to_email, $subject, $body, $headers)) {  // this shall return true if we send the email succesfully
               ?>
                <p>Check your Inbox For OTP</p> 
                
                <span id="otptext">Enter your OTP:</span>
                <!-- <form action="otp.php" method="post">
                <input type="text" id="otpreader">
                <button type="submit">submit</button>
                </form> -->
                <form action="otp.php" method="post">  <!-- since the mail was sent now we prompt the user to enter his otp and this otp shall be redirected to otp.php file -->
                  <input type="text" id="otpreader" name="otpreader" required>
                  <button type="submit" class="Signup-btn"> submit</button>
                </form>
                <?php
              } else {
              echo "Email sending failed...";
            }
            
           }
           else
           {
             echo '<p>Password is less than 6 Characters!</p>';
           }
         }

        $conn->close(); // closing the connection with database

       ?>
         



       

    </div>
</body>
</html>
