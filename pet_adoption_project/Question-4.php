<!-- Abdur Rahim Gigani
Student ID: 40181121
SOEN-287 Assignment 4 Question 3 -->
<!-- I still have to display a message when the user creates an account-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Question-4</title>
    <link rel="stylesheet" href="q4.css">
</head>
<body>
     <?php include("header.php"); ?>
     <?php include("side.php"); ?>
    <div class = side>
        <p><span class="giga">Giga</span>Menu</p>
        <ul class = "list">
            <li class = "item"><a href="Question-4.php">Home</a></li>
            <li class = "item"><a href="findCat.php">Find a Dog/Cat</a></li>
            <li class = "item"><a href="catcare.php">Cat Care</a></li>
            <li class = "item"><a href="dogcare.php">Dog Care</a></li>
            <li class = "item"><a href="login.php">Have a Pet to giveaway</a></li>
            <li class = "item"><a href="contact.php">Contact Us</a></li>
            <li class = "item"><a href="CreateAccount.php">Create an Account</a></li>
            <li class="item"><a href="logout.php">Logout</a></li>
          </ul>
    </div>
    <div class = "ContentArea ">
        <img src="catoutline.png" alt="cat">
        
        <h3 class="findform">The Home to All Pets</h3>
        <p id="petcontent"> 
            
            Are you looking to adopt a pet?
            Are you lonely and looking for a best friend rather than just a pet? <br>
            Then you arrived at the right destination. <br><br>
            GigaPets helps you find the best possible choice based on your preference. 
            The <a href = "findCat.php">FindaPet</a> form designed by our professional employees takes into consideration every aspect 
            required in the adoption process. <br><br>

            Not only this, but our website also offers a <a href="petGive.php">PetGiveAway</a> section where you can offer your pet for giveaway. You just 
            complete the form and our employees will contact you and explain you the whole process. <br><br>

            The <a href="dogcare.php">Dog Care</a> and <a href="catcare.php">Cat Care</a> sections gives general information on how to take care of your pet along with some do's and dont's. <br><br>

            You can <a href="contact.php">Contact Us</a> with the information using the contact us link.

          
        </p>
        <img id="cats" src="scared-cats-md.png" alt="two-cats">
         
     </div>
    
    <?php include("footer.php"); ?>

    <script src="q5.js"></script>
    
</body>
</html>