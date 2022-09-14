<!-- 
session_start();
$uname = $_POST['loginUser'];
$upass = $_POST['loginPass'];
if(isset($_SESSION['user'])){
   //If the session already exist then you redirect to the perGive
   include("redirect.php");
   exit();
}  
// I dont know how to save the session 
?>

//Different php
  
    
    if(isset($_POST['submit'])){
        $file ="logins.txt";
        $userName = $_POST['loginUser'];
        $userPass = $_POST['loginPass'];
        $fp =  fopen($file, "r");
        $found = false;
        while(!feof($fp)) {
            $line = fgets($fp);
            $line = explode(":",$line);
            $line[1] = trim($line[1]);
            if((strcmp($userName, $line[0]) == 0)){
                if((strcmp($userPass, $line[1])) == 0)  {
                $found = true;
                <!-- }
            break;
        }
     }
            fclose($fp);
            if(!$found){
                echo "Your username or password is incorrect";
            }
            else{
                if($_SESSION['username'] = $userName){
                
                include("redirect.php");
            }
                
            }
        
    
    }
    ?> -->

 <?php   
    session_start();
    $right = false;
    $uname = $_POST['loginUser'];   
    $upass = $_POST['loginPass'];
 if(isset($_SESSION['username'])){
     header("Location: petGive.php");
 }
 else {
    $file ="logins.txt";
    $userName = $_POST['loginUser'];
    $userPass = $_POST['loginPass'];
    $fp =  fopen($file, "r");
    $found = false;
    while(!feof($fp)) {
        $line = fgets($fp);
        $line = explode(":",$line);
        $line[1] = trim($line[1]);
        if((strcmp($userName, $line[0]) == 0)){
            if((strcmp($userPass, $line[1])) == 0)  {
            $found = true;
            }
        
    }
 }
        fclose($fp);
        if(!$found){
            echo "<script>alert('Username or password incorrect!')</script>";
        }
        else{
            $_SESSION['username'] = $userName;
        }

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
    <?php include("header.php");
    include("side.php");
    ?>
    <div class= ContentArea><?php if($right){
        echo "<h1>You are now logged in!</h1>[";
        echo "<a href = 'petGive.php'><input type = button value =Continuetotheform  name = petGive></a>";
        echo "<a href = 'logout.php'><input type = button value = Logout  name = logout></a>";
        exit();
    }?></div>
    <div class="ContentArea">
        This is the Login Page. If you already have an account, Please enter the login info, if not then <a href="CreateAccount.php">Create an account</a>.
        <form action="" method="post">
            <label for="user">Enter a Username (A username can contain letters (both upper and lowercase) and digits only)</label> <br>
            <input required pattern = "[A-Za-z0-9]+" name="loginUser" id="user"><br><br>
            <label for="pass">Enter a Password (Password should be at least 4 characters long with only letters and digits along with at least one letter and one digit)</label><br>
            <input  name="loginPass" type="password" id="pass"><br><br>
            <input onclick="checkUsername(), checkPassword()" name="submit" type="submit" value="Submit">
        </form>
    </div>
    <?php include("footer.php"); ?>
    <script src="A3-q3.js"></script>
</body>
</html>
