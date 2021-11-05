//------------------------------- Password Validation ---------------------------------//
var password = document.getElementById("password")
  , cpassword = document.getElementById("cpassword");

function validatePassword(){
  if(password.value != cpassword.value) {
    cpassword.setCustomValidity("Password Tidak Sama!");
  } else {
    cpassword.setCustomValidity('');
  }
}

password.onchange = validatePassword;
cpassword.onkeyup = validatePassword;
//-------------------------------- End Function --------------------------------------//