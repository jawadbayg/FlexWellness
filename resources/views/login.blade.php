<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flex Wellness</title>
</head>
<body>  

<style>
    #efgh{
          margin-top:60px;
          margin-bottom:100px;
          height:50%;
        }
        @keyframes black-line {
            0% {
                width: 0;
            }
            100% {
                width: 100%;
            }
        }
        
        #abcd{
            margin-top:60px;
        }

        .nav-link {
            position: relative;
            overflow: hidden;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: black;
            transition: width 0.3s ease;
        }

        .nav-link.active::before {
            width: 100%;
        }

        .nav-link:hover::before {
            animation: white-line 0.3s forwards;
        }
        .container{
            margin-top:2px;
            margin-bottom:6px;
        }
        .custom-link {
  color: black !important;
}

.custom-link:hover {
  color: lightgray !important;
  text-decoration: none;
}
    .nav-link {
            position: relative;
            overflow: hidden;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: black;
            transition: width 0.3s ease;
        }

        .nav-link.active::before {
            width: 100%;
        }

        .nav-link:hover::before {
            animation: white-line 0.3s forwards;
        }

body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-image: url("logb.jpg");
    background-size: cover;
    background-position: center;
    overflow-x: hidden;
    padding-top: 0px;
}



.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 50%; 
    }

    .sidenav{
        width: 50%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 60%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 0%;
    padding: 50px;
    color: #fff;
    font-size:20px;

}

.login-main-text h2{
    font-weight: 300;
    font-size:50px;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
</style>

<header>
    <nav class="navbar navbar-expand-lg navbar-black  bg-black fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                
            </div>
            <div class="ml-auto">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link{{ Request::routeIs('login') ? ' active' : '' }}"style="color:black" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ Request::routeIs('sign up') ? ' active' : '' }} "style="color:grey" href="{{ route('register') }}">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="sidenav">
         <div class="login-main-text">
            <h2>Welcome!<br>Flex Wellness</h2>
            <p>Login from here to access.</p>
         </div>
      </div>


      <div class="main">
      <div class="mb-md-5 mt-md-4 pb-5">

<form action="{{ route('login.post') }}" method="POST">
  @csrf
  

  
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
            <h2 class="fw-bold mb-2 text-uppercase" style="color:black">Login</h2>

  

  <div class="form-outline form-white mb-4">
  <label class="form-label" for="email_address" style="color:black">Email</label>
    <input type="email" id="email_address" class="form-control form-control-lg" name="email" required autofocus>
    @if ($errors->has('email'))
      <span class="text-danger">{{ $errors->first('email') }}</span>
    @endif
  </div>

  <div class="form-outline form-white mb-4">
  <label class="form-label" for="password" style="color:black">Password</label>
    <input type="password" id="password" class="form-control form-control-lg" name="password" required>
    @if ($errors->has('password'))
      <span class="text-danger">{{ $errors->first('password') }}</span>
    @endif
  </div>

 

  <button type="submit" class="btn btn-outline-dark btn-lg px-5">Login</button>
  
</form>

</div>
<a href="{{ route('registration') }}" class="custom-link" style="color:black">Don't have an account?</a>
</div>
