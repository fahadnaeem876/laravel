<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fiverr</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Google Icons Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
</head>
<body>

  <div class="header_section">
    <header>
      <nav class="navigation_bar">
        <a href="#" class="logo">
          <img src="images/logo.svg" alt="Fiverr Logo">
        </a>
        <ul class="menu_link">
          <li><a href="#">Fiverr Business</a></li>
          <li><a href="#">Explore</a></li>
          <li class="language_itemss">
            <a href="#">
              <span class="material-symbols-outlined">language</span>
              English
            </a>
          </li>
          <li><a href="#">Become a Seller</a></li>
          <li><a href="#">Sign In</a></li>
          <li class="join_butn"><a href="#">Join Us</a></li>
          <span id="close-menu-btn" class="material-symbols-outlined">close</span>
        </ul>
        <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
      </nav>
    </header>

    <section class="hero_section"  id="heroSection">
      <div class="content">
        <h1>Find the right freelance service, right away</h1>
        <form action="#" class="search_form">
          <input type="text" placeholder="Search for any service..." required>
          <button class="material-symbols-outlined" type="sumbit">search</button>
        </form>
        <div class="popular_tags">
          Popular:
          <ul class="tagss">
            <li><a href="#">Webite Design</a></li>
            <li><a href="#">Logo Design</a></li>
            <li><a href="#">WordPress</a></li>
            <li><a href="#">AI Design</a></li>
          </ul>
        </div>
      </div>
    </section>
  </div>

    <div class="container-fluid">
      <div class="row  card-header">
      <div class="col">
         <p></p>
        </div>
        <div class="col">
         <p></p>
        </div>
        <div class="col">
          <h5 class="sec_foo_h5">Trusted by</h5>
        </div>
        <div class="col">
          <img src="images/sec_foo1.png" alt="">
        </div>
        <div class="col">
        <img src="images/sec_foo2.png" alt="">
        </div>
        <div class="col">
        <img src="images/sec_foo3.png" alt="">
        </div>
        <div class="col">
        <img src="images/sec_foo4.png" alt="">
        </div>
        <div class="col">
        <img src="images/sec_foo5.png" alt="">
        </div>
        <div class="col">
        </div>
        <div class="col">
        </div>
      </div>
    </div>

    <div class="container mt-5 mb-5">
      <div class="slider-wrapper">
        <button id="prev-slide" class="slide-button material-symbols-rounded">
          <
        </button>
        <h1 class="font-monospace mr-5"> &nbsp;Pupolar Service</h1>
        <ul class="image-list">
          <img class="image-item" src="images/h_c_s_img1.jpg" alt="img-1" />
          <img class="image-item" src="images/h_c_s_img2.jpg" alt="img-2" />
          <img class="image-item" src="images/h_c_s_img3.jpg" alt="img-3" />
          <img class="image-item" src="images/h_c_s_img4.jpg" alt="img-4" />
          <img class="image-item" src="images/h_c_s_img1.jpg" alt="img-5" />
          <img class="image-item" src="images/h_c_s_img2.jpg" alt="img-6" />
          <img class="image-item" src="images/h_c_s_img3.jpg" alt="img-7" />
          <img class="image-item" src="images/h_c_s_img4.jpg" alt="img-8" />
          <img class="image-item" src="images/h_c_s_img2.jpg" alt="img-9" />
          <img class="image-item" src="images/h_c_s_img3.jpg" alt="img-10" />
        </ul>
        <button id="next-slide" class="slide-button material-symbols-rounded">
          >
        </button>
      </div>
    </div>


<br>
<br>
    <div class="container-fluiud video_section">

    <div class="row ">
      <div class="col d-flex">
        <div class="col-1">
        </div>
        <div class="col-5 mt-5">
          <h1 class="mt-3">The best part? Everything.</h1>
          <p><i class="far fa-check-circle"></i> <b>&nbsp;Stick to your budget</b></p>
          <p>Find the right service for every price point. No hourly <br> rates, just project-based pricing.</p>
          <p><i class="far fa-check-circle"></i> <b>&nbsp;Get quality work done quickly</b></p>
          <p>Hand your project over to a talented freelancer in <br> minutes, get long-lasting results.</p>
          <p><i class="far fa-check-circle"></i> <b>&nbsp;Pay when you're happy</b></p>
          <p>Upfront quotes mean no surprises. Payments only get <br> released when you approve.</p>
          <p><i class="far fa-check-circle"></i> <b>&nbsp;Count on 24/7 support</b></p>
          <p>Our round-the-clock support team is available to help <br> anytime, anywhere.</p>
        </div>
        <div class="col-6">
        <video controls>
        <source src="images/fiverr_video.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
        </div>
      </div>
    </div>
    </div>



  <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>