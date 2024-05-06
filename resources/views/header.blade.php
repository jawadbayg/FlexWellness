<!DOCTYPE html>
<html>
<head>
  
    <head>
    <meta charset="utf-8">
    <title>Flex Wellness</title>
    <link rel="stylesheet" href="{{url('css/pre.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('js/bootstrap.min.js')}}">
    <script src="{{url('js/pre.js')}}"></script>
  </head>
</head>
<body>




<style>
        @keyframes black-line {
            0% {
                width: 0;
            }
            100% {
                width: 100%;
            }
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
            animation: black-line 0.3s forwards;
        }
        .container{
            margin-top:6px;
            margin-bottom:6px;
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Flex Wellness</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link{{ Request::routeIs('home') ? ' active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ Request::routeIs('about-us') ? ' active' : '' }}" href="{{ route('about-us') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ Request::routeIs('our-team.index') ? ' active' : '' }}" href="{{ route('our-team.index') }}">Our Team</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link{{ Request::routeIs('contact-us') ? ' active' : '' }}" href="{{ route('contact-us') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
    
            
        </div>
        <div class="ml-auto">
                <ul class="navbar-nav">
                @if(Auth::check())
            <li id="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="GET">
                    @csrf
                    <button type="submit" class="nav-item">Logout</button>
                </form>
    </li>
    @endif
                </ul>
            </div>
    </nav>
</header>