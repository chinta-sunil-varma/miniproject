
<!-- creating a cookie of name mycookie -->
<!-- <<?php
setcookie('mycookie','sunil',time()+(3600),'/'); // setting a cookie with name mycookie and value of sunil and it will
                                                 // expire after 3600 seconds after creation and can be accesed by every site

 ?> -->
<?php
session_start(); // for dealing with $_SESSION variable we MUST start the Session
  ?>
<?php
if (isset($_POST['logout'])) {  // when the person clicks on logout button page will refresh and it overrides the all the post functionality
  session_unset();              // of other forms and his session variables first will be unset and next destroyed
  session_destroy();
  // print_r($_SESSION);
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book-Storm</title>
   <!-- these all are the google fonts available in fonts.google.com where you can simply choose the font and next copy it -->
    <link rel="stylesheet" href="app.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Oswald:wght@300&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Oswald:wght@300&family=Ubuntu:wght@300&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dongle&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">




</head>
<body>
    <div class="initial">
        <section class="username">
        <h1 class="main">Book Storm</h1> </section>
        <p id="intro"> Let's get started!</p>
    </div>
    <nav id="naviga">
        <div id="main" >

            <img id="image" src="https://img.icons8.com/external-icongeek26-flat-icongeek26/2x/external-book-physics-icongeek26-flat-icongeek26.png" alt="" height="50px" width="50px">

            <ul id="navi">
                     <li><a href="#">Home</a> </li>
                     <li><a   href="#" onclick="notlog()">Social</a> </li>
                     <li><a href="signup.php" > Signup</a></li>
                     <li><a href="#end"> About us</a></li>
                     <form id="formi"  action="" method="post">
                       <li><button type="submit" id="logout"  name="logout" value="1" > Log out</button></li> <!--after clicking submit action file will be executed-->
                     </form>                                                                                  <!--since the button is not input it cannot contain a value-->
            </ul>                                                                                             <!--so we explictly set its value-->
            <a  href="#fileimg"><button id="button">upload</button></a>
        </div>


    </nav>
    <main>
        <h1>Introduction</h1>
        <div class="introdiv">
            <p class="para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam dolorum maxime minus accusamus ratione, illum animi voluptates vel quos suscipit non cum soluta in eius quibusdam. Error id nihil temporibus.
            Suscipit cum vitae esse culpa quis odio architecto reprehenderit, temporibus, tempora asperiores deserunt error assumenda molestias animi laborum, aperiam veritatis repellendus! Iusto fugiat quia deleniti tenetur sed tempora dolor beatae.
            Fugit ad quae at pariatur soluta consequuntur deleniti minima quam, nemo, eligendi enim ipsum asperiores ea magnam laudantium rerum consequatur excepturi cumque tempora fuga. Natus, aperiam? Dicta quaerat excepturi repellat.</p>
            <img src="https://img.icons8.com/external-justicon-lineal-color-justicon/2x/external-book-office-stationery-justicon-lineal-color-justicon.png" alt="">
        </div>
        <br>
        <br>
        <br>
        <h2>How does's it work?</h2>
        <div class="introdiv">
            <p class="para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis consequatur eligendi et facilis cupiditate ipsam! Omnis animi, ratione praesentium ipsa debitis nostrum hic! Reiciendis et iusto quidem vitae nobis quia?
            Nostrum modi fugit dolores eligendi laudantium at facilis aperiam architecto! Culpa quisquam laboriosam repudiandae sapiente autem. Eaque qui impedit similique consequuntur! Expedita in natus saepe cum, et dolor hic a.</p>
            <img src="https://img.icons8.com/nolan/2x/file.png" alt="">
        </div>
        <br>
        <br>
        <br>
        <h2>Upload your PDF</h2>
        <form action="" method="POST" enctype="multipart/form-data"> <!-- since one of the form element contains file we must specify the enctpe -->
        <div class="input">
            <img id="fileimg" src="https://img.icons8.com/external-vitaliy-gorbachev-lineal-color-vitaly-gorbachev/2x/external-file-home-office-vitaliy-gorbachev-lineal-color-vitaly-gorbachev.png" alt="" height="90px" width="90px" style="padding: 2em 0;">

            <input type="file" id="file" name="file1" accept=".pdf,.doc" > <!-- to make the input restrict to only pdf and doc files and we are setting this display to none-->
            <label for="file" id="choose"><span class="material-icons"> <!--here we are creating label for input file id file  -->
                book &nbsp;
                </span> Choose File</label>  <!-- creating the material icons i.e embeding in line images with text -->
                <button id="qwert"  >SUBMIT</button>
<?php
if(isset($_FILES['file1'])) // when user sets the file and clicks submit this shall run
{
  // echo $_SESSION['activstat'];
  // print_r($_SESSION);
  if (isset( $_SESSION['activstat'])) // when user logs in succesfully we create a session variable activestat if this block is true then user had logged in
  {

  // echo "<pre>";
  // print_r($_FILES);
  // echo "</pre>";
// echo print_r($_POST);

            // [name] original name
            // [type] type of the file
            // [tmp_name] php first sends the file to temporary location and then next to destination location// these are the subproperties of the file uploaded
            // [error] if eroor occured
            // [size] it contains the information of the file relating to its size in BYTES


    $temp = $_FILES['file1']['tmp_name']; // storing the temporary location of the file
    $temp2=$_FILES['file1']['name'];  // stroing the original name of the file
    $temp3="uploadeddoc/".$_SESSION['username']."/".$_FILES['file1']['name'];  //for evry user signed up we created a file exclusively to him only.
    //                                                                           his folder name corresponds to his part of his email
    if (file_exists($temp3)) // checking weather the user had uploaded the same file before
    {
      echo '<p class="yui">file is already present </p>';
    }
elseif($_FILES['file1']['size']<	15000000 ) // preventing the user to restrict his size below 15MB
 {
  if (move_uploaded_file($temp,'uploadeddoc/'.$_SESSION['username']."/".$temp2)) {  // moving the uploaded file from temporary location to the destined folder

    echo "<p class=\"yui\"><a id=\"linksuc\"  href=\" $temp3 \" target=\"_blank\"> sucessfull! click here to view file </a><p>"; // allowing user to check what file he had uploaded
    $conn= new mysqli('localhost','root','','hello'); // making a connection with datatabase hello



    $output=$_SESSION['username'];
    // echo $output;
    $temp2=$_FILES['file1']['name'];
    // echo $temp2;
    $ins=$conn->query("insert into fileupload(name,file,time_upload) values (\"$output\",\"$temp2\",current_timestamp())"); // since the file is uploaded we are storing the name of the file and the timestamp in db so to make retrival of it
  //   if($ins){
  //     echo 'succesful';
  //   }else
  //   {
  //     echo 'unsec';
  //   }
  }
  else {
    echo '<p class="yui"> unseccesful uploading please try again! </p>'; // file which is not uploaded will be prompted this message
  }
}
else {
  echo '<p class="yui">File is above 15MB try to compress!</p>';
}

// echo $_COOKIE['mycookie'];



}
else {

  echo '<p class="yui"> <a href="signin.php" target="_blank" style="color:whitesmoke">login</a> first to proceed </p>'; // if the user dosenot loged in try to upload this message shall be prompted
}
}

?>  </form>
  </div>
    </main>
    <br>
    <br>
    <br>
    <script src="app.js"></script>
    <?php
 if (isset($_SESSION['username']))
 { ?>
  <script>displayname("<?php echo $_SESSION['username']; ?>")</script> <!-- if user succesfuly logs in we shall display his name on top. make sure the echo statement is wrapped around double qoutes to make it stirng-->
   <?php
 }


 ?>
 <h2 class="viewpdf">View your pdfs here</h2>
 <section class="displaypdf">
  <?php

  if (isset($_SESSION['username'])) { // if user loggs in then the his username shall be set


  $conn= new mysqli('localhost','root','','hello');

  if ($conn-> connect_error)
  die ('connection failed'.$conn->connect_error);
  $temp=$_SESSION['username'];
  $result = $conn-> query("select file from fileupload where name=\"$temp\";"); // we are selecting all the filenames from the user personal table. this shall result in return of mysqli_result object
  while ($var=$result -> fetch_assoc()) { // fetch_assoc() will return an associative array of the the user table with one tuple at a time. so we kept this in while loop to fetch all rows
    $filen = $var['file'];
    // echo $filen;
    echo "<script>test(\"$filen\",\"$temp\")</script>"; // since all the files of user are in the directory path upploadeddoc-> username -> file name we are passing username and file name as a parameter to js function

  };
  // echo "<pre>";
  // echo print_r($var);
  // echo "</pre>";
  // foreach ($variable as $key => $value) {
  //   // code...
  // }

}
else {
  echo "<p id=\"viewpdflink\"> Login first to view your PDF'S</p>"; // if user doesnot loggs in this shall be printed
}

   ?>

  
</section>
<h2 class="viewpdf">Create your bookmark</h2> <!-- creating a bookmark -->
<?php
if(isset($_SESSION['activstat']))

{
  
  ?>
<section class="bookmark">

  <?php
  echo '
  <form action="bookmark.php" method="POST" target="_blank">
  <select  id="select1" name="select">
    
    
    
  </select>
  <button type="submit" id="bookmarksubmit" >Select this PDF</button>
  </form>
  </section> ';
  $conn = new mysqli ('localhost','root','','hello'); //making a connection between data base to retirve the file names of the particular user
  $table = $_SESSION['username'];
 
  if($conn -> connect_error)
  {
    die("connection failed with database");
  }
  $res = $conn-> query("select file from fileupload where name=\"$table\"  "); // connection with the database is sucessfully established
 
  while($var = $res->fetch_assoc())
  {
    $temp4= $var['file'];
    echo "<script>listadd(\" $temp4\")</script>"; //this js function will dynamically add the list options i.e members are the contents from database.
  }
  
  
  ?>

  <?php
}
else{
  echo "<section class=\"displaypdf\">"; // if session variable is not present we will display the following message
  echo "<p class=\"center\"> Login first to avail the feature</p>";
  echo "</section>";
}
?>
</body>
<hr>
<footer>

        <h2 class="end">Contact us</h2>
        <address id="end">
            Chaitanya Bharati Institute of Technology <br>
            Gandipet-Hyderabad <br>
            Telangana-500054 <br>
            <?php
            echo date('c');

            ?>
            <br>
            <!-- making the image maps  -->
            <img src="https://cdn-icons-png.flaticon.com/512/733/733558.png" alt="insta" height="32px" width="32px" style="padding: 0.4em;" usemap="#insta">
            <map name="insta">
                <area shape="default" coords="" href="#" alt=""> <!--  total shape of the image will be considered as a map-->
            </map>
            <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="whatsapp" height="32px" width="32px" style="padding: 0.4em;" usemap="#whats">
            <map name="whats">
                <area shape="default" coords="" href="" alt="">
            </map>
            <img src="https://cdn-icons-png.flaticon.com/512/733/733553.png" alt="git" height="32px" width="32px" style="padding: 0.4em;" usemap="#git">
            <map name="git">
                <area shape="default" coords="" href="https://github.com/chinta-sunil-varma/miniproject" alt="" target="_blank">
            </map>
        </address>



</footer>


</html>
