<?php
$var = array('doing great','wassup');
?>

<html>
    <head>

    </head>
    <body>
        <p>
            <?php
            echo 'hello iam sunil varma';
            ?><br>
            <?php
            date_default_timezone_set('Asia/Calcutta');
            ?>
            <?php
            echo date('c') ;
            ?>
        </p>
    </body>
</html>