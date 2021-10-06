@extends('layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    

    <style type="text/css">

.gg{

    background-image:url({{url('image/barnabue.png')}});
     background-size: cover;
      background-attachment: fixed;

}

</style>


</head>
<body > 
<div class="gg">
     <!--Contact Form-->
    <div class="contact-form text-black  p-5 my-5 ">
         
        <div class="title text-white text-center mb-3 pt-5 pb-2">
            <h2 class= "font-weight bolder"> Sign up </h2>
        </div>
        <div class="alert alert-success" id="successAuth" style="display: none;"></div>
            <form class="w-50 m-auto was-validated">
                <div class="form-group pb-4 ">
                    <label for="number">Phone Number:</label>
                    <input type="text" class="form-control" id="number" name="number" placeholder="+880 ********" required>
                    <div class="valid-feedback"><h6 class="font-weight bolder">Valid</h6></div>
                    <div class="invalid-feedback "><h6 class="font-weight bolder">Please Enter your phone number</h6></div>
                </div>
                <div id="recaptcha-container"></div>
                <div class="form-group pt-2 text-center">
                    <button type="button" name="signup" class="btn-lg btn-muted text-dark" onclick="sendOTP();"><h5 class="font-weight bolder">Send OTP</h5></button>
                </div>
            </form> 
            <div class="pt-5"></div>
            <form class="w-50 m-auto was-validated">
            <label for="verification">Verification code:</label>
                <input type="text" class="form-control" id="verification" name="number" placeholder="Verification code" required>
                <div class="form-group pt-2 text-center">
                    <button type="button" name="signup" class="btn-lg btn-muted text-dark" onclick="verify();"><h5 class="font-weight bolder">Verify code</h5></button>
                </div>
                
            </form>
        </div>
        </div>
           
    </div>
       
    
    

    
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

    <script>
    var firebaseConfig = {
    apiKey: "AIzaSyBjVTF1RbtNns373v4X97Xj0Ejx2t8Y2nk",
    authDomain: "prec-02.firebaseapp.com",
    projectId: "prec-02",
    storageBucket: "prec-02.appspot.com",
    messagingSenderId: "859489979258",
    appId: "1:859489979258:web:2586e8daf220d36647e4c3",
    measurementId: "G-0V8L4MBXRH"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script> 
    <script>
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
                window.location.replace("{{url('api/index')}}");
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
    </script>
</body>
</html>

@stop