<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Antonette's Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.jpg" rel="icon">
  <link href="assets/img/icon.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i&subset=cyrillic" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Lonely
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-lonely/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column align-items-center justify-content-center">
  
    <h1>Hi, I'm Antonette</h1>
 
    <h2>Welcome to my portfolio</h2>
    <a href="#about" class="btn-get-started scrollto"><i class="bi bi-chevron-double-down"></i></a>
 
</section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
     
       <div class="logo">
      
        <h1><a href="#about"></a>ANTONETTE</h1>
        
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
    
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#skills">Skills</a></li>
          <li><a class="nav-link scrollto" href="#educational">Educational Attainment</a></li>
          <li><a class="nav-link scrollto" href="#experiences">Experiences</a></li>
          <li><a class="nav-link scrollto" href="#webinar">Webinar</a></li>
		      <li><a class="nav-link scrollto" href="#blog">Blog</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
		  <li><a class="nav-link scrollto" href="{{ route('login') }}">Log In</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

     <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
    <div class="container border border-dark" data-aos="fade-up">
        <div class="section-title">
            <br>
            <h2>About</h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <img src="assets/img/profilepic.jpg" class="img-fluid" alt="" style="width: 90%; height:90%;">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0">
                <div class="row">
                    <div class="col-lg-12">
                        @foreach($profile as $profiles)
                        <h3>{{ ucwords($profiles->title) }}</h3>
                        <ul class="list-unstyled">
                            <li><strong>Name:</strong> {{ ucwords($profiles->name) }}</li>
                            <li><strong>Birthday:</strong> {{ $profiles->birthday }}</li>
                            <li><strong>Email Address:</strong> {{ $profiles->email }}</li>
                            <li><strong>Phone:</strong> {{ $profiles->phone }}</li>
                            <li><strong>Address:</strong> {{ ucwords($profiles->address) }}</li>
                            <li><strong>Age:</strong> {{ $profiles->age }}</li>
                            <li><strong>Degree:</strong> {{ ucwords($profiles->degree) }}</li>
                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- End About Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container border border-dark" style="padding: 20px;">
                <div class="section-title">
                    <h2>Skills</h2>
                </div>
                <div class="row skills-content">
                    @foreach($skill as $skills)
                    <div class="progress">
                        <span class="skill">{{$skills->skill_name}} <i
                                class="val">{{$skills->percentage}}</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" style="width: {{$skills->percentage}}%;"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Skills Section -->

        <!-- ======= Educational Section ======= -->
        <section id="educational" class="educational section-bg">
            <div class="container border border-dark" style="padding: 20px;">
                <div class="section-title">
                    <h2>Education</h2>
                </div>
                @foreach($education as $educations)
                <div class="educational-item">
                    <h4>{{ucwords($educations->grade_level)}}</h4>
                    <h5>{{$educations->school_year}}</h5>
                    <p><em>{{ucwords($educations->school_name)}}</em></p>
                    <p>{{$educations->description}}</p>
                </div>
                @endforeach
            </div>
        </section>
        <!-- End Educational Section -->

        <!-- ======= Experiences Section ======= -->
        <section id="experiences" class="experiences section-bg">
    <div class="container border border-dark" style="padding: 20px;">
        <div class="section-title">
            <h2>Experiences</h2>
        </div>
        <div class="row">
            @foreach($experience as $experiences)
            <div class="col-lg-4 col-md-6 col-sm-1">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ $experiences->title }}</h3>
                    </div>
                    <div class="card-body">
                        <h5>{{ $experiences->experience_year }}</h5>
                        <p>{{ $experiences->details }}</p>
                        <img src="{{ 'storage/' . $experiences->image }}" class="img-fluid" alt=""
                            style="width: 100%; height:100%;">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

        <!-- End Experiences Section -->
<!-- ======= Webinar Section ======= -->
<section id="webinar" class="webinar section-bg">
    <div class="container border border-dark" style="padding: 20px;">
        <div class="section-title">
            <h2>Webinars</h2>
        </div>
        <div class="row">
            @foreach($webinar as $webinars)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="card" style="width: 100%;">
                    <div class="card-header">
                        <h3>{{ $webinars->title }}</h3>
                    </div>
                    <div class="card-body" style="height: 200px;">
                        <p><strong>Agenda:</strong> {{ $webinars->agenda }}</p>
                        <p><strong>Host:</strong> {{ $webinars->host_name }}</p>
                        <p><strong>Date:</strong> {{ $webinars->date }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Webinar Section -->


       <!-- ======= Blog Single Section ======= -->
<section id="blog" class="blog section-bg">
    <div class="container border border-dark" style="padding: 20px;">
        <div class="section-title">
            <h2>Blog</h2>
        </div>
        <div class="row">
            @foreach($blog as $blogs)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img src="{{ 'storage/' . $blogs->image }}" class="card-img-top" alt="{{ $blogs->title }}">
                    <div class="card-body" style="width: 100%; height: 200px;">
                        <h5 class="card-title">{{ $blogs->title }}</h5>
                        <p class="card-text">{{ $blogs->content }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Blog Single Section -->


       

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container border border-dark" style="padding: 20px;">
                <div class="section-title">
                    <h2>Contact</h2>
                   
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="contact-about">
                            <h3>Antonette</h3>
                            <p>"Feel free to reach out to me via the contact details provided below. Whether you have questions, suggestions, or just want to connect, I'm only a click away!
                                 Your input is valuable and I look forward to hearing from you."</p>
                            <div class="social-links">
                                <a href="https://twitter.com/a_lozares" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="https://www.facebook.com/tonight.lamadoralozares" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/antnttelzrs/" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/antonette-lozares-4b47b0258/" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="info">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-geo-alt"></i>
                                <p>Brgy. Marangog<br>Hilongos Leyte, 6524</p>
                            </div>
                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-envelope"></i>
                                <p>antonette@gmail.com</p>
                            </div>
                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-phone"></i>
                                <p>09631157992</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->

    </main>
<!-- End #main -->

  

  <a href="" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>