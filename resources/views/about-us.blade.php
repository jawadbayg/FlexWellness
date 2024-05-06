<!DOCTYPE html>
<html>
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
    <main>
    <section id="aboutsec1">
        <div>
            <img id="AUPIC" src="AU.JPG">
            <p>
                At Flex-Wellness<br>
                we are dedicated to helping you achieve your fitness goals and live a healthy, vibrant life
                We understand that fitness is not just a hobby; it's a way of life. That's why we have created a comprehensive platform
                that offers a wide range of resources and services to support your fitness journey
                Our team of experienced trainers and fitness enthusiasts is committed to providing top-notch training programs
                that are tailored to meet your specific needs. Whether you are a beginner looking to get started on your
                fitness journey or an experienced athlete striving for new heights, we have something for everyone
                Our state-of-the-art gym facilities are equipped with the latest equipment and provide a
                motivating and supportive environment to help you reach your full potential.In addition to our
                exceptional training programs, Flex-Wellness offers a wealth of knowledge through our insightful
                articles. Our team of experts regularly publishes informative and engaging content on various fitness
                topics, including workout tips, nutrition advice, and lifestyle hacks. We believe that education is
                the foundation of success, and we strive to empower our community with the information they need 
                to make informed decisions about their health and well-being Our friendly and knowledgeable staff is
                 always ready to offer guidance and support, ensuring that you feel comfortable and motivated 
                 throughout your fitness journey.
                Whether you're looking to lose weight, build muscle, improve your 
                endurance, or simply enhance your overall fitness level, Flex-Wellness is here 
                to help you every step of the way. Join our community today and unlock your full potential. 
                Together, let's flex our way to wellness!
            </p>
        </div>
      </section>

      <section id="aboutsec2">
        <div>
        <img id="AUPIC2" src="AU2.jpg">
        <p>
            At Flex-Wellness, we understand that nutrition plays a crucial role in achieving your 
            fitness goals and maintaining overall well-being. That's why we offer personalized diet plans 
            that are designed to support your fitness journey and help you reach your full potential.

            Our experienced nutritionists work closely with you to create a tailored meal plan that takes into account
            your dietary preferences, lifestyle, and specific fitness goals. Whether you're looking to lose weight
            build muscle, increase energy levels, or improve overall health, our diet plans are crafted to meet 
            your individual needs.
            Our diet plans emphasize a balanced intake of macronutrients 
            (carbohydrates, proteins, and healthy fats) and micronutrients 
            (vitamins and minerals) to ensure your body receives all the essential nutrients
             it needs for optimal functioning and recovery Our goal is to help you develop sustainable
             eating habits that you can maintain in the long run. We provide practical guidance on portion control,
             mindful eating, and making healthier choices when dining out or during social occasions
        </p>
        </div>
      </section>


 
</main>
<div id="footer">
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Flex-Wellness
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Yoga</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Diet</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Fitness</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Gym</a>
          </p>
        </div>
        
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Flexwellness.com</a>
  </div>
  <!-- Copyright -->
</footer>
</div>

</body>
</html>
