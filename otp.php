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
    session_start();
    // print_r($_POST);
    // print_r($_SESSION);
     if($_POST['otpreader']==$_SESSION['ran'])
     {
        if (true) {
           $conn= new mysqli('localhost','root','','hello');
           $email=$_SESSION['email'];
           // echo 'Registration successful redirecting to signin';
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
           
          

           if($cur= $conn-> query("CREATE TABLE $output(timestamptime timestamp, filename varchar(100) )"))
           {
            echo '
            <section class="redirect">
            <h1 class="main"> SUCCESS! REDIRECTING TO LOGIN</h1>
            <img src="https://images.unsplash.com/photo-1559029879-a67eafa54765?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MTR8OTcyNDA4Nnx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" alt="unable to load" >
            </section>
            
            
            
            
            ';
             $email=$_SESSION['email'];
             $password=$_SESSION['password'];
             $ins= $conn-> query("INSERT INTO registration VALUES(\"$email\",\"$password\");");
            

             mkdir("uploadeddoc/".$output);


           // $cur1=$conn->query("insert into $output values(current_timestamp)");

           echo '<script>
           setTimeout(()=>{window.location.href="signin.php"},3000)
           </script>';
          }
          else {
            echo "your email-Id is invalid ";
            die();
          }
        }
          else {
            echo 'unsuccesfull registration';
          }
     }
     echo '
     <section class="redirect">
     <h1 class="main">OTP is Invalid! Try agian</h1>
     
     </section>
     
     ';
     session_unset();
     session_destroy();
     echo '<script>
           setTimeout(()=>{window.location.href="signup.php"},3000)
           </script>';
          
    ?>
</body>
</html>