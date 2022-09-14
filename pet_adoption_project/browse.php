<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Question-4</title>
    <link rel="stylesheet" href="q4.css">
</head>
<body>
<div>
    <?php include("header.php"); ?>
</div>
    <div class = side>
        <p><span class="giga">Giga</span>Menu</p>
        <ul class = "list">
        <li class = "item"><a href="Question-4.php">Home</a></li>
            <li class = "item"><a href="browse.php">Browse Available Pets</a></li>
            <li class = "item"><a href="findCat.php">Find a Dog/Cat</a></li>
            <li class = "item"><a href="catcare.php">Cat Care</a></li>
            <li class = "item"><a href="dogcare.php">Dog Care</a></li>
            <li class = "item"><a href="petGive.php">Have a Pet to giveaway</a></li>
            <li class = "item"><a href="contact.php">Contact Us</a></li>
          </ul>
    </div>
    <div class = "ContentArea">
        <table id="pettable">
            <tr>
                <td class="pettd">
                    <img id="pet1" class="petimages" src="goldenretriever.jpeg" alt="goldenretriever">
                </td>
                <td>
                    Breed: <br>
                    Age: <br>
                    Gender: <br>
                    Characteristics: <br>
                    More: 
                    
                </td>
                <td>
                    Golden Retriever <br>
                    0-3 <br>
                    Female <br>
                    Dog-Friendly, Cat-Friendly, Children-Friendly <br>
                    Her Name is Mochi, she is very friendly and loves to play with a ball <br>
                </td>
                <td>
                    <input type="submit" value="Interested">
                </td>
               
               <tr>
                
                <td>
                    <img id="pet2" class="petimages" src="germanshepherd.webp" alt="germanshepherd">
                </td>
                <td>
                    Breed: <br>
                    Age: <br>
                    Gender: <br>
                    Characteristics: <br>
                    More: 
                </td>
                <td>
                    German Shepherd <br>
                    3-7 <br>
                    Male <br>
                    Dog-Friendly <br>
                    Jeremy loves meat . Not very friendly but super loyal. <br>
                </td>
                <td>
                    <input type="submit" value="Interested">
                </td>
            </tr>
            <tr>
                <td>
                    <img id="pet3" class="petimages" src="americanfoxhound.webp" alt="americanfoxhound">
                </td>
                <td>
                    Breed: <br>
                    Age: <br>
                    Gender: <br>
                    Characteristics: <br>
                    More: 
                </td>
                <td>
                    American Foxhound <br>
                    3-7 <br>
                    Male <br>
                    Dog-Friendly, Cat-Friendly, Children-Friendly <br>
                    The cutest dog you are ever gonna see in your life. <br>
                </td>
                <td>
                    <input type="submit" value="Interested">
                </td>
                 
            </tr>
               <tr>
                <td>
                    <img id="pet4" class="petimages" src="beagle.jpeg" alt="beagle">
                </td>
                <td>
                    Breed: <br>
                    Age: <br>
                    Gender: <br>
                    Characteristics: <br>
                    More: <br>
                </td>
                <td>
                    Beagle <br>
                    3-7 <br>
                    Male <br>
                    Dog-Friendly <br>
                    The most mischievous dog ever and also very emotional.
                </td>
                <td>
                    <input type="submit" value="Interested">
                </td>
               </tr>
               <tr>
                <td>
                    <img id="pet5" class="petimages" src="moodle.jpeg" alt="moodle">
                </td>
                <td>
                    Breed: <br>
                    Age: <br>
                    Gender: <br>
                    Characteristics: <br>
                    More: <br>
                </td>
                <td>
                    Moodle <br>
                    0-3 <br>
                    Female <br>
                    Dog-Friendly, Cat-Friendly, Children-Friendly <br>
                    Tofu is super quiet and she always want to take a walk in sun. <br>
                </td>
                <td>
                    <input type="submit" value="Interested">
                </td>
               </tr>
                
               
                
            
        </table>
       <!-- <div>
           <img id="pet1" class="petimages" src="goldenretriever.jpeg" alt="goldenretriever">
       </div>
       <div>
           <img id="pet2" class="petimages" src="germanshepherd.webp" alt="germanshepherd">
       </div>
       <div>
           <img id="pet3" class="petimages" src="americanfoxhound.webp" alt="americanfoxhound">
       </div class="petimages">
       <div>
           <img id="pet4" class="petimages" src="beagle.jpeg" alt="beagle">
       </div class="petimages">
       <div>
           <img id="pet5" class="petimages" src="moodle.jpeg" alt="moodle">
       </div> -->
   </div>
   <?php include("footer.php"); ?>

    <script src="q5.js"></script>
    
</body>
</html>