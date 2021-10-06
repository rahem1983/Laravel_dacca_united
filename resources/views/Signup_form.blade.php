

<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DACCA UNITED</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style type="text/css">

.gg{

    background-image:url({{url('image/barnabue.png')}});
     background-size: cover;
      background-attachment: fixed;
      height: 100%;
  width: 100%;

}

</style>


</head>
<body > 
    <div class="gg">
    <div class=" pt-5" style="hight: 100%;"></div>
     <!--Contact Form-->
        <div class="contact-form text-black  p-5 my-5 ">
            
            <div class="title text-white text-center mb-3 pt-5 pb-2">
                <h2 class= "font-weight bolder"> Sign up </h2>
            </div>
            <div class="alert alert-success" id="successAuth" style="display: none;"></div>
                <form class="w-50 m-auto was-validated" action="{{url('api/signup')}}" method="post">
                    <div class="form-group pb-4 ">
                        
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{old('username')}}" required>
                        <div class="valid-feedback"><h6 class="font-weight bolder">Valid</h6></div>
                        <div class="invalid-feedback "><h6 class="font-weight bolder">Please Enter your Name</h6></div>
                    </div>

                    <div class="form-group pb-4">
                        
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{old('username')}}" required>
                        <div class="valid-feedback"><h6 class="font-weight bolder">Valid</h6></div>
                        <div class="invalid-feedback"><h6 class="font-weight bolder">Please Enter your email</h6></div>
                    </div>

                    <div class="form-group pb-4">
                        
                        <input type="password" class="form-control" id="napasswordme" name="password" placeholder="password" value="{{old('username')}}" required>
                        <div class="valid-feedback"><h6 class="font-weight bolder">Valid</h6></div>
                        <div class="invalid-feedback"><h6 class="font-weight bolder">Please Enter a passwerd using </h6></div>
                    </div>
                    
                    <div class="form-group pb-4">
                        
                        <input type="password" class="form-control" id="repeat_password" name="repeat_password" placeholder="confirm password" value="{{old('username')}}" required>
                        <div class="valid-feedback"><h6 class="font-weight bolder">Valid</h6></div>
                        <div class="invalid-feedback"><h6 class="font-weight bolder">Please Enter the password again</h6></div>
                    </div>

                    <div class="form-group pb-4">
                        
                        <input type="hidden" class="form-control" id="phone" name="phone" value="{{old('username')}}">

                    </div>
                    <div class="form-group pt-2 text-center">
                        <button type="button" name="signup" class="btn-lg btn-muted text-dark" ><h5 class="font-weight bolder">Sign up</h5></button>
                    </div>
                </form>
            </div>
            <div class=" pb-5 pt-3" style="hight: 100%;"></div>
            <div class=" pb-5 pt-5" style="hight: 100%;"></div>
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>

