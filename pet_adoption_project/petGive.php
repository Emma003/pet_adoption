<?php 
// function haveApet(){
// $file = "available_pets.txt";
// $count = 1;
// $fp = fopen($file, "r");
// while(!feof($fp)){
//     $line = fgets($fp);
//     $count++;
// }
// fclose($fp);
//     $userName = $_SESSION['username'];
//     if(isset($_POST['submit'])){
//         $pet = $_POST['dog/cat'];
//         $breed = $_POST['breed'];
//         $age = $_POST['dropdown'];
//         $gender = $_POST['gender'];
//         $getalongDog = (isset($_POST['getalongD'])? 'yes': 'no');
//         $getalongCat = (isset($_POST['getalongC'])? 'yes': 'no');
//         $getalongChild = (isset($_POST['getalongChild'])? 'yes': 'no');
//         $fname = $_POST['firstname'];
//         $lname = $_POST['lastname'];
//         $email = $_POST['email'];
//         $line = $count.":".$pet.":".$breed.":".$age.":".$gender.":".$getalongDog.":".$getalongCat.":".$getalongChild.":".$fname.":".$lname.":".$email;
//         $fp2 = fopen($file, "a+");
//         fwrite($fp2,$line);
//         echo "<div class = ContentArea><p>Your pet has now been registered to the file</p></div>";
//     }
// }

if(isset($_POST['submit'])){
        
    $user = $_SESSION['username'];
    $petType = $_POST['dog/cat'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $getAlongDogs = $_POST['getalongD'];
    $getAlongCats = $_POST['getalongC'];
    $getAlongChildren = $_POST['getalongChild'];

    $file = fopen('available_pets.txt','a+'); 

    // retrieve user id counter
    while(True) {
        $line = fgets($file);
        if(feof($file)) {
            break;
        }
    }

    $lastPetInfo = explode(":", $line);
    $lastID = intval($lastPetInfo[0]);
    $lastID = $lastID+1;
    $stringAgain = strval($lastID);

    // create string
    $stringToSave = $stringAgain.":".$user.":".$petType.":".$breed.":".$age.":".$gender.":".$getAlongDogs.":".$getAlongCats.":".$getAlongChildren."\n";
    fwrite($file, $stringToSave);
    fclose($file);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Question-4</title>
    <link rel="stylesheet" href="q4.css">
    <script>
         var sub = document.getElementById('nosub');
    </script>
</head>
<body>
<?php include("header.php"); ?>
<?php include("side.php"); ?>
    <div class = "ContentArea" id="contentgive">
        <form action="" method= "post">
            <label class = "findform">Would you like to giveaway a dog or a cat?</label><br>
            <input class = "findform" type="radio" id="ndog" name="dog/cat" value="Dog"><label for="dog">Dog</label>
            <input class = "findform" type="radio" id="ncat" name="dog/cat" value="Cat"><label for="cat">Cat</label><br><br>

            <label class= "findform">What's the breed of your pet?</label><br>
            <input class= "findform" name= "breed" id="inptext" type="text"><br>
            <input class= "findform" type="radio" id="Mixed" name="breed" value = "Mixed"><label for="Mixed">Mixed Breed</label><br><br>

            <label class = "findform"> Please select age of the Animal</label><br>
            <select class="findform" name="dropdown" id="ageofan">
                <option value="select" selected hidden disabled>Select here</option>
                <option value="3">0-3</option>
                <option value="7">3-7</option>
                <option value="10">8-12</option>
                <option value="12">12 and above</option>
            </select><br><br>
            <label class="findform">Please select the gender.</label><br><br>
            <input class="findform" type="radio" name="gender" id="male" value="male"> <label for="Male">Male</label><br>
            <input class="findform" type="radio" name="gender" id="female" value="female"> <label for="Female">Female</label><br>
            <input class="findform" type="radio" name="gender" id="other" value="Other"> <label for="Other">Other</label><br><br>

            <label class="findform">Characteristics of the pet (Click all that apply).</label><br><br>
            <input type="checkbox" class="findform" name = "getalongD" id="od"><label for="otherdogs">Dog-Friendly</label><br>
            <input type="checkbox" class="findform" name = "getalongC" id="oc"><label for="othercats">Cat-Friendly</label><br>
            <input type="checkbox" class="findform" name = "getalongChild" id="sc"><label for="smallchildren">Children-Friendly</label><br><br>

            <label class="findform">Please tell us more about your pet.</label><br>
            <input type="text" class="findform" name="comment" placeholder="Enter your answer" id="commentarea"><br><br>

            <label class="findform">Enter your first name:</label><br>
            <input type="text" class="findform" name="firstname" id="firstName"><br><br>
            <label class="findform">Enter your last name:</label><br>
            <input type="text" class="findform" name="lastname" id="lastName"><br><br>
            <label class="findform">Enter your email:</label><br>
            <input placeholder="Email" required="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" type="email" class="findform" name="email" id="email"><br><br>
            <input onclick="checkingPetGive(), haveApet();" name = "submit" class="buttons" id="nosub" type="submit" value="Submit">
            <input class="buttons" type="reset" value ="Reset">

        </form>
     </div>
     <?php include("footer.php"); ?>
     
    <script src="q5.js"></script>
</body>
</html>