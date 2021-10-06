import firebase from "firebase/app";
// If you are using v7 or any earlier version of the JS SDK, you should import firebase using namespace import
// import * as firebase from "firebase/app"

// If you enabled Analytics in your project, add the Firebase SDK for Analytics
import "firebase/analytics";

// Add the Firebase products that you want to use
import "firebase/auth";
import "firebase/firestore";

var firebaseConfig = {
    apiKey: "AIzaSyBjVTF1RbtNns373v4X97Xj0Ejx2t8Y2nk",
    authDomain: "prec-02.firebaseapp.com",
    databaseURL: "https://prec-02-default-rtdb.firebaseio.com",
    projectId: "prec-02",
    storageBucket: "prec-02.appspot.com",
    messagingSenderId: "859489979258",
    appId: "1:859489979258:web:2586e8daf220d36647e4c3",
    measurementId: "G-0V8L4MBXRH"
  };
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

  window.onload = function () {
    render();
};

function render() {
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}

function sendOTP() {
    var number = $("#number").val();
    firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function (confirmationResult) {
        window.confirmationResult = confirmationResult;
        coderesult = confirmationResult;
        console.log(coderesult);
        $("#successAuth").text("Message sent");
        $("#successAuth").show();
    }).catch(function (error) {
        $("#error").text(error.message);
        $("#error").show();
    });
}

function verify() {
    var code = $("#verification").val();
    coderesult.confirm(code).then(function (result) {
        var user = result.user;
        console.log(user);
        // var userid = firebase.auth().currentUser.uid;
         var SignupPhone = firebase.auth().currentUser.phoneNumber;
        // createCookie("uid", userid , "120");
        createCookie("userphonenumber", SignupPhone , "120");
        $("#successOtpAuth").text("Auth is successful");
        $("#successOtpAuth").show();
        alert('verification successfull');
        window.location.replace("{{url('api/UserCall')}}");
    }).catch(function (error) {
        $("#error").text(error.message);
        $("#error").show();
    });
}
function createCookie(name, value, sec) {
  var expires;

  if (sec) {
    var date = new Date();
    date.setTime(date.getTime() + (sec * 60 * 1000));
    expires = "; expires=" + date.toGMTString();
  }
  else {
    expires = "";
  }

  document.cookie = escape(name) + "=" + 
    escape(value) + expires + "; path=/";
  }