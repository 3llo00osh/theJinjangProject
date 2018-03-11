function signup(){
  var database = firebase.database();

  var uNameS = document.getElementById("name_fieldS").value;
  var uEmailS = document.getElementById("email_fieldS").value;
  var uPasswordS = document.getElementById("password_fieldS").value;
  var uRePasswordS = document.getElementById("passwordRe_fieldS").value;

  var databaseRef = firebase.database().ref("Users");
  if(document.getElementById('userType_Mother').checked){
    var uid = databaseRef.child("Mothers");
    uid.push({
      email: uEmailS,
      name: uNameS,
      password: uPasswordS
    });
  }
  else if(document.getElementById('userType_Client').checked){
    var uid = databaseRef.child("Clients");
    uid.push({
      email: uEmailS,
      name: uNameS,
      password: uPasswordS
    });
  }

  firebase.auth().createUserWithEmailAndPassword(uEmailS, uPasswordS).catch(function(error) {
      window.alert("Account created for the email " + uEmailS + " !");
      // Handle Errors here.
      var errorCode = error.code;
      var errorMessage = error.message;
      window.alert("Error: " + errorMessage);
  });

  document.getElementById('name_fieldS').value='';
  document.getElementById('email_fieldS').value='';
  document.getElementById('password_fieldS').value='';
  document.getElementById('passwordRe_fieldS').value='';
}

function login(){
  var uEmail = document.getElementById("email_field").value;
  var uPassword = document.getElementById('password_field').value;

  firebase.auth().signInWithEmailAndPassword(uEmail, uPassword).catch(function(error) {
    var errorCode = error.code;
    var errorMessage = error.message;
    window.alert("Error: " + errorMessage);
  });
  window.alert(uEmail + " successfully logged in!");
}

//Problem: Hints are shown even when form is valid
//Solution: Hide and show them at appropriate times
var $password = $("#password_fieldS");
var $confirmPassword = $("#confirm_password");

//Hide hints
$("div span").hide();

function isPasswordValid() {
  return $password.val().length >= 6;
}

function arePasswordsMatching() {
  return $password.val() === $confirmPassword.val();
}

function canSubmit() {
  return isPasswordValid() && arePasswordsMatching();
}

function passwordEvent(){
    //Find out if password is valid
    if(isPasswordValid()) {
      //Hide hint if valid
      $password.next().hide();
    } else {
      //else show hint
      $password.next().show();
    }
}

function confirmPasswordEvent() {
  //Find out if password and confirmation match
  if(arePasswordsMatching()) {
    //Hide hint if match
    $confirmPassword.next().hide();
  } else {
    //else show hint
    $confirmPassword.next().show();
  }
}

//When event happens on password input
$password.focus(passwordEvent).keyup(passwordEvent).keyup(confirmPasswordEvent);

//When event happens on confirmation input
$confirmPassword.focus(confirmPasswordEvent).keyup(confirmPasswordEvent);
