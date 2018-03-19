
var database = firebase.database();
var user = firebase.auth().currentUser;
var uName, uPassword, uEmail, uPhotoURL, uDOB, uSkills;

if(user != null){
  uName = user.uName;
  uEmail = user.uEmail;
  uPassword = user.uPassword;
}

/*firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    var userName = user.userName;
    var userEmail = user.userEmail;
    var userPassword = user.userPassword;
    var userDOB = user.userDOB;
    var userSkills = user.userSkills;
    var photoURL = user.photoURL;
    var isAnonymous = user.isAnonymous;
    var userUid = user.userUid;
    var providerData = user.providerData;
  }else{

  }
});
*/
