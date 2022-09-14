// Displaying the time on the header
function setTime(){
var date = new Date();
var n = date.toDateString();
var time = date.toLocaleTimeString();
document.getElementById('date').innerHTML = "Date: " + n + "<br> Time: " + time;
}
setInterval(setTime,50); 
        
        //Checking validation for find a pet Form
        function checking(){
            let dog = document.getElementById('dog');
            let cat = document.getElementById('cat');
            let breed = document.getElementById('breed');
            let nobreed = document.getElementById('notspecify');
            let textinp = document.getElementById('textinp');
            let male = document.getElementById('Male');
            let female = document.getElementById('Female');
            let other = document.getElementById('Other');
            if(!(dog.checked) && !(cat.checked)){
                alert("Please select either dog or a cat");
                return;
            }
            if(!(breed.checked) && !(nobreed.checked)){
                alert("Please select the breed");
                return;
            }
            if(!(nobreed.checked) && !(textinp.value)){
                alert("Please enter the value inside the text box");
                return;
            }
            let age = document.getElementById("ageofanimal");
            if (age.options[age.selectedIndex].value == 'select') {
            alert("Please select the age of the animal");
            return false;
            }
            if(!(male.checked) && !(female.checked) && !(other.checked)){
                alert("Please select your gender");
                return;
            }
        }
        //Checking validation for the PetGiveaway Form
        function checkingPetGive(){
            const dog = document.getElementById('ndog');
            const cat = document.getElementById('ncat');
            const breed = document.getElementById('breeds');
            const nobreed = document.getElementById('Mixed');
            const textinp = document.getElementById('inptext');
            // var otherdogs = document.getElementById('od');
            // var othercats = document.getElementById('oc');
            // var small = document.getElementById('sc');
            const comment = document.getElementById('commentarea');
            // var options = [op1,op2,op3,op4];
            const male = document.getElementById('male');
            const female = document.getElementById('female');
            const other = document.getElementById('other');
            const fname = document.getElementById('firstName');
            const lname = document.getElementById('lastName');
            // var email = document.getElementById('email');
        
        
        
            if(!(dog.checked) && !(cat.checked)){
                alert("Please select either dog or a cat");
                return;
            }
            if(!(breed.checked) && !(nobreed.checked)){
                alert("Please select the breed");
                return;
            }
            if(!(nobreed.checked) && !(textinp.value)){
                alert("Please enter the value inside the text box");
                return;
            }
            var age = document.getElementById("ageofan");
            if (age.options[age.selectedIndex].value == 'select') {
            alert("Please select the age of the animal");
            return false;
            }
            
            if(!(male.checked) && !(female.checked) && !(other.checked)){
                alert("Please select your gender");
                return;
            }
            if(!(comment.value)){
                alert("Please enter some comments");
                return;
            }
            if(!(fname.value)){
                alert("Please enter your firstname");
                return;
            }
            if(!(lname.value)){
                alert("Please enter your lastname");
                return;
            }
            
        }