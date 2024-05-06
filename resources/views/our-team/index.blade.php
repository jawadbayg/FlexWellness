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
    
    <h1 style="margin-top:100px">Members Feedback</h1>
    <a id="a123" href="{{ route('our-team.create') }}"><button id="a1">Add Details</button></a>
    <div id="container">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Feedback</th>
                
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($response as $response)
            <tr>
                <td>{{ $response->name }}</td>
                <td>{{ $response->email }}</td>
                <td>{{ $response->feedback }}</td>
              
                <td>
                    <a href="{{ route('our-team.edit', $response->id) }}"><button id="bt2">Edit</button></a>
                    <form action="{{ route('our-team.destroy', $response->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button id="bt1" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">

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
