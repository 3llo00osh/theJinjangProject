function signup(){
  var database = firebase.database();

  var uNameS = document.getElementById("name_fieldS").value;
  var uEmailS = document.getElementById("email_fieldS").value;
  var uPasswordS = document.getElementById("password_fieldS").value;
  var uRePasswordS = document.getElementById("passwordRe_fieldS").value;
  var uAddressS = document.getElementById("address_fieldS").value;
  var uDOBS = document.getElementById("dob_fieldS").value;
  var uContact = document.getElementById("contact_fieldS").value;
  var uBusinessDesc = document.getElementById('businessDesc_fieldS').value;

  var form = document.getElementById("param1"),
  inputs = form.getElementsByTagName("input"),
  arr = [];
  for(var i=0, max = inputs.length; i < max; i +=1){
    if(inputs[i].type === "checkbox" && inputs[i].checked){
      arr.push(inputs[i].value);
    }
  }

  var databaseRef = firebase.database().ref("Users");
  if(document.getElementById('userType_Mother').checked){
    var uid = databaseRef.child("Mothers");
    uid.push({
      email: uEmailS,
      name: uNameS,
      password: uPasswordS,
      address: uAddressS,
      contactNo: uContact,
      DOB: uDOBS,
      skills: arr
    });
  }
  else if(document.getElementById('userType_Client').checked){
    var uid = databaseRef.child("Clients");
    uid.push({
      email: uEmailS,
      name: uNameS,
      password: uPasswordS,
      address: uAddressS,
      contactNo: uContact,

    });
  }

  firebase.auth().createUserWithEmailAndPassword(uEmailS, uPasswordS).then(
    function(user){
      console.log('Everything went fine');
      window.alert("Account created for the email: " + uEmailS);
      document.getElementById('name_fieldS').value='';
      document.getElementById('email_fieldS').value='';
      document.getElementById('password_fieldS').value='';
      document.getElementById('passwordRe_fieldS').value='';
      document.getElementById('contact_fieldS').value='';
      document.getElementById('address_fieldS').value='';
      document.getElementById('dob_fieldS').value='1990-01-01';

      var form = document.getElementById("param1"),
      inputs = form.getElementsByTagName("input"),
      arr = [];
      for(var i=0, max = inputs.length; i < max; i +=1){
        if(inputs[i].type === "checkbox" && inputs[i].checked){
          inputs[i].checked = false;
        }
      }
    }).catch(function(error) {
      if(error){
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        window.alert("Error: " + errorMessage);
      }
      else{

      }
    });
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
