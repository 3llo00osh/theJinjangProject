firebase.auth().onAuthStateChanged(function(user){
    if (user){ //User is signed in
      document.getElementById('user-div').style.display="block";
      document.getElementById('container_demo').style.display="none";

      var user = firebase.auth().currentUser;

      if(user != null){
        var email_id = user.email;

        document.getElementById('user_para').innerHTML = "Welcome " + email_id;


      }
    }else{
      //No user signed in
      document.getElementById('user-div').style.display="none";
      document.getElementById('container_demo').style.display="block";
    }
});

function signup(){

  var uUsernameS = document.getElementById("username_fieldS").value;
  var uEmailS = document.getElementById("email_fieldS").value;
  var uPassword = document.getElementById('password_fieldS').value;
  var uPasswordRe = document.getElementById('RePassword_fieldS').value;

  firebase.auth().createUserWithEmailAndPassword(uEmailS, uPassword).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;

  window.alert("Error: " + errorMessage);
  });
}

function login(){
  var uUsername = document.getElementById("username_field").value;
  var uPassword = document.getElementById('password_field').value;

  firebase.auth().signInWithEmailAndPassword(uUsername, uPassword).catch(function(error) {

    var errorCode = error.code;
    var errorMessage = error.message;

    window.alert("Error: " + errorMessage);
  });
}

function logout(){
  firebase.auth().signOut();
}
