<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>social</title>
    <link rel="stylesheet" href="social.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mohave:ital,wght@1,300&family=Montserrat:wght@300&family=Oswald:wght@300&family=Roboto:ital,wght@1,300&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<h2 id="endhtwo">Free Books to Read!</h2>
<p class="para"> Hello and welcome to the Social section where you find lots of books that are free to read
under the property license of Internet Archive. Internet Archive is a wonderful place to explore
free books and journals. Here are a few of the books owned by them which are completely free to
read or listen to. You can also find many premium books available for borrowing. <br> <br>list of books is getting updated frequently <br><br> You shall be redirected to Internet Archive for Reading <br><br>Hover on a book to know its title</p>
<section class="scrap">
<?php
  if(isset($_SESSION['activstat']))
  {
include 'simple_html_dom.php';

$ch=curl_init();
curl_setopt($ch, option:CURLOPT_URL,value:"https://openlibrary.org/people/isidore5458/lists/OL197209L/Can_be_read_without_borrowing");
curl_setopt($ch,option:CURLOPT_FOLLOWLOCATION,value:1);
curl_setopt($ch,option:CURLOPT_RETURNTRANSFER, value:1);
$response = curl_exec($ch);
// echo '<pre>';
 
//  echo '</pre>';

curl_close($ch);
// echo $response;
$html = new simple_html_dom();
$html->load($response);

$result=$html->find(' span[class="bookcover"] a ');

foreach($result as $link)
{
  $link->class="imgsty";
  $link->target="_blank";
   $link->href="https://openlibrary.org/".$link->href ;
    echo $link.'<br>';
}

$html->clear();
  }
  else
  {
    echo '<p class="para">Login first to view this feature</p>';
  }
?>   
   






</section>
</body>
</html>