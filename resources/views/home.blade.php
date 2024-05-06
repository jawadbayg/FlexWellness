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


    
    <main>
      <section id="bannerb"  style="margin-top:120px">
        <img src="yoga1.jpg" id="yoga1">
        
        <h1 style="font-size: 35px;">Welcome to Flex-Wellness</h1><br>
        <br>
        <br>
        <p>Welcome to our fitness club<br>
            where we believe in empowering individuals<br> to transform their lives through fitness & well-being.<br>
            Our website is designed to inspire,<BR>motivate, and provide you with the<BR> resources and support you<br>
            need on your fitness journey.</p>
      </section>

      <section id="tips">
        <img src="tens1.jpg" id="tenswali" height="50px" width="100px">
        <h1> Fitness Hack? Fitness Hack? Fitness Hack? Fitness Hack?</h1>
        <p> Do you struggle with “overreactions”?
            Do you avoid confrontation?
            Are you quick to fear, anger, or resentment?
            Are you struggling to let go of people or memories and feeling stuck in the past?
            You Are Not Alone!
            So many of us are stuck in suffering after loving an abusive person.
            <br><br>
        
            Why We Created Fitness Hacks For Life Fitness Hacks for Life
                was created to help those dealing with symptoms of post-traumatic stress disorder,
                such as anxiety, depression, hypersensitivity, and avoidance behaviors.
                While these responses stem from trauma and pain, without help,
                they can spread throughout all the avenues of our lives.
                Our site was created to offer inspirational content and information so that a life of happiness,
                peace, and safety could be found.</p>
      </section>

      <section id="ourfc">
        <p>
            At our fitness club<br>
            we understand that everyone has unique goals and aspirations when it comes to their health and fitness.<br>
            Whether you're looking to lose weight, build strength, improve endurance, or simply lead a healthier lifestyle,<br> 
             we have the expertise, facilities, and programs to help you achieve your objectives.
        </p>
    </section>

    <section id="services">
        <h2>Our Services</h2>
        <ul>
          <li>Cardio Equipment</li>
          <li>Strength Training Equipment</li>
          <li>Group Fitness Classes</li>
          <li>Personal Training Sessions</li>
        </ul>
      </section>
         
      <section id="membership">
        <h2>Membership</h2>
          <form action="{{url('home')}}" method="POST" id="myForm">
           @csrf

    <label for="name">Name</label>
    <input type="name" id="name" name="name" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="phone">Phone</label>
    <input type="tel" id="phone" name="phone" required>

    <label for="membership-type">Membership Type</label>
    <select id="membership-type" name="membership-type">
      <option value="basic">Basic</option>
      <option value="premium">Premium</option>
    </select>

    <button type="submit" id="submitButton">Join Now</button>
  </form>

  <script>
    document.getElementById('submitButton').addEventListener('click', function(event) {
      event.preventDefault(); // Prevent the form from submitting normally
      
      // Perform custom validation here
      var nameInput = document.getElementById('name');
      var emailInput = document.getElementById('email');
      var phoneInput = document.getElementById('phone');
      
      if (nameInput.value.trim() === '' || emailInput.value.trim() === '' || phoneInput.value.trim() === '') {
        alert('Please fill in all the required fields');
        return;
      }
      
      // If all fields are filled, show the success message
      alert('Your entry is saved');
      document.getElementById('myForm').submit(); // Submit the form
    });
  </script>


      </section>

      <section id="schedule">
        <h2>Class Schedule</h2>
        <table>
          <thead>
            <tr>
              <th>Class</th>
              <th>Day</th>
              <th>Time</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Yoga</td>
              <td>Monday</td>
              <td>6:00pm - 7:00pm</td>
            </tr>
            <tr>
              <td>Zumba</td>
              <td>Wednesday</td>
              <td>5:30pm - 6:30pm</td>
            </tr>
            <tr>
              <td>Spin</td>
              <td>Friday</td>
              <td>7:00am - 8:00am</td>
            </tr>
          </tbody>
        </table>
      </section>
      
    </main>


    




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
  </body>
</html>



  
 

