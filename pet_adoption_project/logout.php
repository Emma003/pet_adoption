<?php 
    $ok = false;
    session_start();

    if ($_SESSION['username']) {
        // unset($_SESSION['username']);
        session_destroy();
        // echo "YOU WERE SUCCESFULLY LOGGED OUT";
        $ok = true;
    } else {
        // echo "YOU ARE NOT LOGGED IN";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="q4.css">
</head>
<body>
    <?php include("header.php");?>
    <?php include("side.php");?>
    <div class= ContentArea>
        <?php
        if($ok){
            echo "YOU WERE SUCCESSFULLY LOGGED OUT";
        }
        else{
            echo "YOU ARE NOT LOGGED IN";
        }
        ?>
    </div>
    <?php include("footer.php")?>
</body>
</html>