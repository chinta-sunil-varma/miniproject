<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if(isset($_POST))

{ 
    // echo '<pre>';
    // print_r ($_POST);
    // echo '</pre>';
    // print_r ($_SESSION);
    if(isset($_SESSION['activstat']))
    {
        $conn= new mysqli('localhost','root','','hello');
        if($conn->connect_error)
        {
            echo 'cannot connect to data base';
            $_SESSION['failed']=1;
            die();
        }else
        {
            $name=$_SESSION['username'];
                $file=$_SESSION['fileactive'];
                $a=array();

            foreach($_POST as $x=>$y)
            {
               array_push($a,$y);
            }
            $count = count($a);
            for ($i=0;$i<$count;$i+=2)   
            {
                $y=$i+1;
                $page=$a[$i];
                $desc=$a[$y];
                $conn->query("insert into bookmarks values(\"$name\",\"$file\",\"$page\",\"$desc\")");
            } 
                
            
            }
        }
    
    else{
        echo 'unable to penetrate';
    }

  
}
?>
<a href="javascript:history.go(-1)">sucessful uploading of bookmarks</a>
</body>
</html>


