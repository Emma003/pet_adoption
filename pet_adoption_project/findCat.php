<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Question-4</title>
    <link rel="stylesheet" href="q4.css">
    <script>
          var sub = document.getElementById('sub');
    </script>
</head>
<body>
<div>
    <?php include("header.php"); ?>
    <?php include("side.php"); ?>
    <div class = "ContentArea" id="contentFind">
        <form name="myForm" action="">
            <label class = "findform">Would you like to search for a dog or a cat?</label><br>
            <input class = "findform radio" type="radio" id="dog" name="dog" value="Dog/Cat"><label for="dog">Dog</label>
            <input class = "findform radio" type="radio" id="cat" name="dog" value="Dog/Cat"><label for="cat">Cat</label><br><br>

            <label class= "findform">What breed would you like?</label><br>
            <input class= "findform" type="radio" id="breed" name = "breed" value="breed"><label for="breed" id="textforradio"></label><input id="textinp" name="breed3" type="text"><br>
            <input class= "findform" type="radio" id="notspecify" name="breed" value = "notspecified"><label for="notspecify">Doesn't Matter</label><br><br>

            <label class = "findform"> Please select the preferred age of Animal</label><br>
            <select class="findform" name="dropdown" id="ageofanimal">
                <option name="op" value="select" selected hidden disabled>Select here</option>
                <option id="op1" name="op" value="0-3">0-3</option>
                <option id="op2" name="op" value="3-7">3-7</option>
                <option id="op3" name="op" value="8-12">8-12</option>
                <option id="op4" name="op" value="12 and up">12 and above</option>
            </select><br><br>
            <label class="findform">Please select the gender.</label><br><br>
            <input class="findform" type="radio" name="gender" id="Male" value="male"> <label for="Male">Male</label><br>
            <input class="findform" type="radio" name="gender" id="Female" value="female"> <label for="Female">Female</label><br>
            <input class="findform" type="radio" name="gender" id="Other" value="Other"> <label for="Other">Other</label><br><br>

            <label class="findform">Whom would you like your pet to get along with?</label><br><br>
            <input type="checkbox" class="findform" name = "getalong1" id="otherdogs"><label for="otherdogs">Dog-Friendly</label><br>
            <input type="checkbox" class="findform" name = "getalong2" id="othercats"><label for="othercats">Cat-Friendly</label><br>
            <input type="checkbox" class="findform" name = "getalong3" id="smallchildren"><label for="smallchildren">Children-Friendly</label><br><br>

            <input onclick="checking();" id="sub" class="buttons" type="submit" value="Submit">
            <input class="buttons" type="reset" value ="Reset">

        </form>
   </div>
   <?php include("footer.php"); ?>
     
    <script src="q5.js"></script> 
</body>
</html>