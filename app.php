
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book-Storm</title>

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
        <h1 class="main">Book Storm</h1>
        <p id="intro"> Let's get started!</p>
    </div>
    <nav id="naviga">
        <div id="main" >

            <img id="image" src="https://img.icons8.com/external-icongeek26-flat-icongeek26/2x/external-book-physics-icongeek26-flat-icongeek26.png" alt="" height="50px" width="50px">

            <ul id="navi">
                     <li><a href="#">Home</a> </li>
                     <li><a href="#">Social</a> </li>
                     <li><a href="signup.php" target="_blank"> Signup</a></li>
                     <li><a href="#end"> About us</a></li>
            </ul>
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
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="input">
            <img id="fileimg" src="https://img.icons8.com/external-vitaliy-gorbachev-lineal-color-vitaly-gorbachev/2x/external-file-home-office-vitaliy-gorbachev-lineal-color-vitaly-gorbachev.png" alt="" height="90px" width="90px" style="padding: 2em 0;">

            <input type="file" id="file" name="file1" accept=".pdf,.doc" >
            <label for="file" id="choose"><span class="material-icons">
                book &nbsp;
                </span> Choose File</label>
                <button id="qwert" >SUBMIT</button>
<?php
if(isset($_FILES['file1']))
{
  // echo "<pre>";
  // print_r($_FILES);
  // echo "</pre>";
// echo print_r($_POST);

            // [name]
            // [type]
            // [tmp_name]
            // [error]
            // [size]

  
    $temp = $_FILES['file1']['tmp_name'];
    $temp2=$_FILES['file1']['name'];
    $temp3="uploadeddoc/".$_FILES['file1']['name'];

    if (file_exists('uploadeddoc/'.$temp2))
    {
      echo '<p class="yui">file is already present </p>';
    }
elseif($_FILES['file1']['size']<	15000000 )
 {
  if (move_uploaded_file($temp,'uploadeddoc/'.$temp2)) {

    echo "<p class=\"yui\"><a id=\"linksuc\"  href=\" $temp3 \" target=\"_blank\"> sucessfull! click here to view file </a><p>";
  }
  else {
    echo '<p class="yui"> unseccesful </p>';
  }
}
else {
  echo '<p class="yui">File is above 15MB try to compress!</p>';
}



}

?>  </form>
  </div>
    </main>
    <br>
    <br>
    <br>
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
            <img src="https://cdn-icons-png.flaticon.com/512/733/733558.png" alt="insta" height="32px" width="32px" style="padding: 0.4em;" usemap="#insta">
            <map name="insta">
                <area shape="default" coords="" href="#" alt="">
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
