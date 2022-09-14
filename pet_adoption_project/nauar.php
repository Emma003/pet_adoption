<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create an account</title>
    <link rel="stylesheet" href="">
</head>
<body>
 <?php include 'header.php' ?>
  <?php include 'sidebar.php' ?>
      <div class="content-area center">
        <form action="" method="post">
            <fieldset>
            <label for="userName">Username:</label>
            pattern="[A-Za-z0-9]+"
            <input name="userName" id="userName">
                <br>
                <label for="userPass">Password:</label>
                pattern="(?=.\d)(?=.[a-zA-Z]).{4,}"
                <input type="password" name="userPass" id="userPass" required>
                <br>
                <input type="submit" value="Submit" name="submit">
            </fieldset>
        </form>

      </div>
     <?php include 'footer.php' ?>

</body>
</html>

<?php



if(isset($_POST["submit"])){
    $userName = $_POST['userName'];
    $userPass = $_POST['userPass'];
    $file = file_get_contents('users.txt'); 
    //I add the | here in the case someone uses a password that could match the username trying to be inputted
    $search = $userName.':'; 
    if(strpos($file, $search)){ 
        print "<h1> The User Name you inputted is already in use, please input another! </h1>";
        print "<a href='create-account'> Go back </a>";
    } 
    else{
        //enter in the format uName|uPass and then a new line
        $input = $userName . ':' . $userPass.PHP_EOL;
        $fp = fopen('users.txt','a+');
        fwrite($fp,$input);
        fclose($fp);
        echo "Success, wrote ($input) to file (users.txt)";
  }
}


?>