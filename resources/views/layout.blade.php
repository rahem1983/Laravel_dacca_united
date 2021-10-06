<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DACCA UNITED</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="pb-5">
	<header>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">

            <a href="index" class="navbar-brand">
                <img src="{{url('image/DU logo.png')}}" alt="logo" style= "width: 70px;">
            </a>
             <div class="col-lg-3">
                <h3 class="text-white mr-5">DACCA UNITED</h3>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="index">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="team-card.php">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="News.php">News</a></li>
                    <li class="nav-item"><a class="nav-link" href="Matches.php">Match</a></li>
                    <li class="nav-item"><a class="nav-link" href="Tickets.php">Ticket</a></li>
                    <li class="nav-item"><a class="nav-link" href="store.php">Store</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="signup.php">Signup</a></li>
                    <li class="nav-item"><a class="nav-link" href="api/login">Login</a></li> -->
                    
                        @if (session()->has('username')){
                            @if (session('username') == "daccaunited.admin@gmail.com") {
                                <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>
                                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                                
                              }  
                            @else{
                                <li class="nav-item"><a class="nav-link" href="{{url('api/logout')}}">Logout</a></li>
                            @endif  
                        }
                        @else{
                            <li class="nav-item"><a class="nav-link" href="{{url('api/signup')}}">Signup</a></li>
                            <li class="nav-item"><a class="nav-link" href="login">Login</a></li>
                        }
                     @endif
                </ul>
              </div>

        </nav>
    </header>
    </div>
<div class="pt-5 pb-5 bg-dark text-white">
	@yield('content')
</div>
    <footer alignment='bootom'>
    <div class="bg-dark">
        <div class= "row pt-3  m-2 text-white">
            <div class="col-lg-1 ">

            </div>
        <div class="col-lg-5 pl-3 pr-2">
            <div class="media p-2 ">
                <img src="{{url('image/DU logo.png')}}" alt="logo" style="width: 210px; height:150px;">
            </div>
            
            <h5 class="pl-3 font-weight bolder">North South Stadium</h5>
            <h6>Bashundhara, Dhaka-1229, Bangladesh</h6>
            <h6>Phone: +880191642x</h6>
            <a href="https://www.google.com/maps/dir/23.7504462,90.405772/%27%27/@23.7839757,90.377029,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3755c64c1968cc97:0x92043f043afdc8e3!2m2!1d90.4255053!2d23.8157775" class="btn btn-outline-light">Location</a><br><br>
            

        </div>
        <div class="col-lg-5 pt-4 ">
            <h3 class="pt-5 font-weight bolder text-center">About Us</h3>
            <p><h5 class="text-center">Messi want justice!!!</h5></p>  
            <p class="pt-4 pl-5 text-center"> Copyright © Premier Noobs - 2021 All Rights Reserved.  </p>
        </div>
        <div class="col-lg-1">

            
        </div>
        
    </div>     
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>