
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreateAccount</title>
    <link rel="stylesheet" href="q4.css">

</head>

<body>
    
        <?php include("header.php"); ?>
        <?php include("side.php"); ?>
    
    <div class="ContentArea">

        This is the Create an Account Page. If you already have an account, Please go to the login page. If not create an account
        <form action="" method="post">
            <label for="user">Enter a Username (A username can contain letters (both upper and lowercase) and digits only)</label> <br>
            <input name="user" id="user"><br><br>
            <label for="pass">Enter a Password (Password should be at least 4 characters long with only letters and digits along with at least one letter and one digit)</label><br>
            <input required="(?=.\d)(?=.[a-zA-Z]).{4,}" name="pass" type="password" id="pass"><br><br>
            <input onclick="checkUsername(), checkPassword()" name="submit" type="submit" value="Submit">
        </form>
        
    </div>

        <?php include("footer.php") ?>
    <script src="A3-q3.js"></script> 
</body>

</html>

<?php

// if (isset($_POST["submit"])) {
//     $name =  $_POST['user'];
//     $pass = $_POST['pass'];
//     $file = fopen("file1.txt", "a+");
//     fwrite($file, $name);
//     fwrite($file, $pass);
//     fclose($file);
// }
if(isset($_POST['submit'])){
    $userName = $_POST['user'];
    $userPass = $_POST['pass'];
    $file = file_get_contents('logins.txt'); 
    $search = $userName.':'; 
    if(strpos($file, $userName)){ 
        print "<div class = ContentArea><h3> The User Name you inputted is already in use, please input another! </h3></div>";
        print "<a href='create-account'> Go back </a>";
    } 
    else{
        $input = $userName . ':' . $userPass.PHP_EOL;
        $fp = fopen('logins.txt','a+');
        fwrite($fp,$input);
        fclose($fp);
        echo "Success, wrote ($input) to file (file1.txt)";
        echo "You are now ready to login";
  }
}
?>
