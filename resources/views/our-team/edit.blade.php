<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My Gym Website</title>
    <link rel="stylesheet" href="{{url('css/pre.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('js/bootstrap.min.js')}}">
    <script src="{{url('js/pre.js')}}"></script>
  </head>
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
    </nav>
</header>



<body>
    <h1 style="margin-top:50px">Edit feedback</h1>
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('our-team.update', $response->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $response->name }}">
        </div>
        
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $response->email }}">
        </div>

        <div>
            <label for="feedback">Feedback:</label>
            <input type="text" name="feedback" id="feedback" value="{{ $response->feedback }}">
        </div>
       
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
</body>
</html>
