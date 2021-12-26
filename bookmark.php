<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKMARK</title>
</head>
<body>

    <h1>Edit your Bookmarks</h1>
    <?php
    if(isset($_POST)){
    $loc = "uploadeddoc\\". $_SESSION['username'] ."\\" . trim($_POST['select']); 
    
    
    echo "
    <iframe src=\"$loc\" width=\"700em\" height=\"700em\"></iframe>
    ";
    }
    else
    {
        echo 'There is a error processing your request comeback later';
        die();
    }
    ?>
    <section class="content">
        
    </section>
</body>
</html>