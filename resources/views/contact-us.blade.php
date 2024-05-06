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
@extends('header')

    <div class="contact-us-container" id="cucontainer">
    <h1 id="contacth1">Contact Us</h1>
    <p id="contactp">Have a question? <br>or need to get in touch?<br>Fill out the form below<br>and we'll get back to you as soon as possible.</p>

    <form action="{{ route('contacts.store') }}" method="POST" id="myForm">
  @csrf

  <label for="name">Name</label>
  <input type="text" name="name" id="name" required>

  <label for="email">Email</label>
  <input type="text" name="email" id="email" required>

  <label for="message">Message</label>
  <textarea name="message" id="message" rows="4" required></textarea>

  <button type="submit" id="submitButton">Submit</button>
</form>

<script>
  document.getElementById('submitButton').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the form from submitting normally

    // Perform custom validation here
    var nameInput = document.getElementById('name');
    var emailInput = document.getElementById('email');
    var messageInput = document.getElementById('message');

    if (nameInput.value.trim() === '' || emailInput.value.trim() === '' || messageInput.value.trim() === '') {
      alert('Please fill in all the required fields');
      return;
    }

    // If all fields are filled, show the success message
    alert('Message sent');
    document.getElementById('myForm').submit(); // Submit the form
  });
</script>

    </div>
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
      </div>

</body>
</html>