var username = document.getElementById('user').value;
var password = document.getElementById('pass').value;
function containsAnyLetter(str) {
    var regex = /^[A-Za-z]+$/;
    if(!(regex.test(str))){
        alert("Please enter at least one letter in the password");
    } 

  }
  function containsNum(str){
    var regex = /[A-Za-z]/;
    if(!(/[0-9]/.test(str))){
       alert("Please enter at least one number");
    }
    if((regex.text(str))){
        return;
    }
    
    else{
        alert("Please enter the correct format");
    } 
    
}
function containsSpecialChars(str) {
    const specialChars = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
    if((specialChars.test(str)))
    {
        alert("Dont include any special characters");
    }
  }
function checkUsername(){
        containsSpecialChars(document.getElementById('user').value);
}
function checkPassword(){
        if((document.getElementById('pass').value).length >= 4){
            containsNum(document.getElementById('pass').value);

        }
        else{
            alert("Password should be at least 4 characters long");
        }
}
