<!DOCTYPE html>
<html>
<head>
    <title>Capturing Serenity</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* Header */
        header {
        background-color: #333;
        color: #fff;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      /* Logo styles */
      .logo {
        font-size: 2rem;
        font-weight: bold;
      }

      /* Navigation menu styles */
      nav {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
      }

      li {
        margin-right: 20px;
      }

      a {
        color: #fff;
        text-decoration: none;
        font-weight: bold;
        transition: color 0.3s;
      }

      a:hover {
        color: #f00;
      }
      .social-icons img {
  width: 30px;
  height: 30px;
  margin-right: 10px;
}

.social-icons a:last-child img {
  margin-right: 0;
}
footer {
        background-color: #333;
        color: #fff;
        padding: 20px;
        margin-top: 100px;
      }

      /* Footer links styles */
      footer a {
        color: #fff;
        text-decoration: none;
        font-weight: bold;
        transition: color 0.3s;
      }

      footer a:hover {
        color: #f00;
      }

      /* Footer navigation styles */
      .footer-nav {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
      }

      .footer-nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
      }

      .footer-nav li {
        margin-right: 20px;
      }

      /* Footer social icons styles */
      .social-icons {
        display: flex;
        justify-content: center;
        align-items: center;
        
      }

      .social-icons a {
        display: inline-block;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #fff;
        margin-right: 10px;
        transition: background-color 0.3s;
      }

      .social-icons a:hover {
        background-color: #f00;
      }

      .social-icons i {
        font-size: 1.5rem;
        line-height: 40px;
        text-align: center;
        color: #333;
      }

      .about-us-container {
    max-width: 800px;
    margin: 0 auto;
}

.about-us-container h1 {
    font-size: 28px;
    margin-bottom: 20px;
}

.about-us-container p {
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 15px;
}

.footer-text {
  text-align: center;
  font-size: 14px;
  color: #999;
  margin-top: 20px;
}


    </style>
</head>
<body>
    <header>
    <div class="logo">Captruing Serenity</div>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('our-team.index') }}">Our Team</a></li>
                <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                <li><a href="{{ route('blogs') }}">Blogs</a></li>
                <li><a href="{{ route('about-us') }}">About Us</a></li>

            </ul>
        </nav>
    </header>
    
    <footer>
      <div class="footer-nav">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="social-icons">
        <a href="#"><img src="insta.png"></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
      </div>
      <!--<a href="#"><img src="R.png" alt="Facebook"></a>
        <a href="#"><img src="path/to/twitter.png" alt="Twitter"></a>
        <a href="#"><img src="path/to/instagram.png" alt="Instagram"></a>
        <a href="#"><img src="path/to/linkedin.png" alt="LinkedIn"></a>
      </div>-->
      <div class="footer-text">
        &copy; 2021 Captruing Serenity. All Rights Reserved.
      </div>
    </footer>
    
    <main>
        @yield('content')
    </main>
</body>
</html>
