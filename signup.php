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
        <form action="new.php" method="post">
        <input type="email" class="input-box" placeholder="Your Email" name="email">
        <input type="password" class="input-box" placeholder="Your Password" name="password">
        <p id="para"><span><input type="checkbox"></span>I agree to the terms of services</p>
        <button type="submit" class="Signup-btn">Sign up</button>
        <hr>
        <p class="or">OR</p>
        
        <p id="lastpara">Do You Have an Account?<a style="color: wheat;" href="#">Sign in</a></p>
        </form>
    </div>
</body>
</html>