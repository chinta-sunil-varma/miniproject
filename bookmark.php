<?php 
session_start();

if(!isset($_SESSION['activstat']))
{
 
  echo '<script>window.location.href="signin.php";</script>';
  die();
}

if($_POST==null)
{
   
  echo '<script>window.location.href="app.php"</script>';
  die();
}
$_SESSION['fileactive']=$_POST['select'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKMARK</title>
    <link rel="stylesheet" href="bookmark.css">
    <script src="bookmark.js"></script>
</head>
<body>

    <h1>Edit your Bookmarks</h1>
    <?php
    if(isset($_POST)){
        
    $loc = "uploadeddoc\\". $_SESSION['username'] ."\\" . trim($_POST['select']); 
    
    echo '<section id="flexy">';
    echo "
    <iframe id=\"iframeobj\" src=\"$loc\" width=\"700em\" height=\"700em\"></iframe>
    ";
    
    }
    else
    {
        echo 'There is a error processing your request comeback later';
        die();
    }
    ?>
    <section class="content">
        <p class="font" onclick="addinput()">Add bookmark+</p>
        <section class="innersec">
            <form action="reload.php" method="post" id="form">
                <button id="downbutto" type="submit">submit</button>
            </form>
        </section>
        <h2 style="display:inline-block">view your book marks here</h2>
        <section class="viewbook"></section>
        <?php
        $name=$_SESSION['username'];
        $file=$_SESSION['fileactive'];
        $conn= new mysqli('localhost','root','','hello');
        
        if($result=$conn->query("select page,description from bookmarks where name=\"$name\" and file=\"$file\""))
        {
            while($var=$result->fetch_assoc())
            {
                $page = $var['page'];
                // echo $page;
                
                $desc=$var['description'];
                // echo $desc;
                // $out=htmlspecialchars($desc);
            echo "<script>showbook(`$page`,`$desc`)</script>";
            }
        }
        else
        {
            echo 'not working';
        }
        
        
        ?>
        
    </section>
    <?php echo '</section>'; ?>
    
    <!-- <script src="bookmark.js"></script> -->
    <!-- <script>
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
       }  
    </script> -->
    
</body>
</html>