<!DOCTYPE html>
<html lang="en">

<!-- practice-area-detail56:43-->
<head>
<meta charset="UTF-8">
<title>Lawyer & Attorney - Responsive Onepage HTML Template</title>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="Lawyer & Attorney One Page HTML Template">
<meta name="keywords" content="one page, html, template, responsive, business">
<meta name="author" content="sharjeel anjum">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Bootstrap css -->
<link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css')}}">

<!-- Fontawesome css -->
<link rel="stylesheet" href="{{ asset('user/css/font-awesome.min.css')}}">

<!-- Main css -->
<link rel="stylesheet" href="{{ asset('user/css/style.css')}}">
</head>
<body class="subpage" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Navigation Section -->
@include('user.user_header')

<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Practice Area Detail</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Home</a> / <span>Practice Area Detail</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container"> 
    <!-- Blog start -->
    <div class="row">
      <div class="col-md-8"> 
        <!-- Blog List start -->
        <div class="blogWraper">
          <div class="blogList blogdetailbox">
            <div class="postimg"><img src="images/blog/large-1.jpg" alt="Blog Title"> </div>
            <div class="post-header margin-top30">
              <h4>Duis ultricies aliquet mauris</h4>
            </div>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor, lobortis diam. In eu porta purus, sit amet pulvinar eros. Cras accumsan dignissim convallis. Curabitur aliquam efficitur diam ac pellentesque. Fusce ac leo est. <br>
              <br>
              Duis ultricies aliquet mauris vestibulum lacinia. Nulla a nibh ipsum. In diam nisl, mattis ac magna eget, pulvinar viverra ipsum. Ut vitae diam ultrices, semper risus vitae, accumsan nunc. Suspendisse ut dolor non sem pellentesque vulputate eu ut eros. Proin mollis tortor in est semper porta. Etiam rutrum, est non pellentesque sollicitudin, ligula turpis mattis nisl, at egestas justo libero id libero. In ac pretium magna. Praesent lobortis sapien bibendum, scelerisque neque in, egestas lorem. Sed pharetra lectus a odio euismod mattis. Donec egestas ante ac magna blandit aliquet. In fringilla venenatis lacus in dictum. Donec vel lacus ut tellus feugiat ullamcorper in sit amet mauris. Sed aliquet accumsan risus in tristique. Nullam semper, massa in cursus hendrerit, turpis nibh eleifend leo, sed semper est massa vel odio. </p>
            <blockquote class="text-left-align">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor, lobortis diam. In eu porta purus, sit amet pulvinar eros. Cras accumsan dignissim convallis. Curabitur aliquam efficitur diam ac pellentesque. Fusce ac leo est.</p>
              <span class="author-name"> <a href="#.">Jhon Deneairo</a></span> </blockquote>
            <p> Integer vel magna urna. Vestibulum id nisi arcu. Ut a euismod sem. Pellentesque aliquet gravida lacus ac aliquet. Mauris sed ante a turpis suscipit sagittis sagittis eu dolor. Phasellus eget lectus dignissim, dictum ex vel, laoreet dui. In facilisis risus a posuere tincidunt. Vivamus sit amet sem sodales, semper lorem id, laoreet mi. <br>
              <br>
              Ut a metus aliquet, ornare enim at, suscipit ante. Nullam sit amet ligula mollis, lacinia ligula mollis, blandit erat. Nam in diam ut mauris mattis malesuada vel nec nunc. Mauris bibendum, ipsum sed mollis suscipit, nisl elit mattis eros, nec semper nunc leo in arcu. Fusce non leo enim. Nam massa felis, tristique sit amet varius facilisis, tristique a tortor. Pellentesque sed pretium sem. Mauris euismod sem semper, commodo tortor id, vestibulum est. <br>
              <br>
              Donec molestie sagittis consequat. Vestibulum tempus tortor tortor, ac tincidunt dolor sodales nec. Nam faucibus odio et aliquet lacinia. Vivamus suscipit metus vel dictum finibus. In vitae blandit mi. Sed eros felis, commodo a finibus vitae, sodales eget enim. Quisque iaculis nulla quis est lacinia sodales. Praesent non dignissim neque. Vestibulum at placerat risus. Aliquam tincidunt posuere diam nec vehicula. Pellentesque cursus tincidunt arcu nec auctor. Nam quis nibh ipsum. </p>
          </div>
        </div>
      </div>
      <div class="col-md-4"> 
        <!-- Side Bar -->
        <div class="sidebar"> 
          <!-- Search -->
          <div class="widget">
            <h5 class="widget-title">Search</h5>
            <div class="search">
              <form>
                <input type="text" class="form-control" placeholder="Search">
                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
              </form>
            </div>
          </div>
          <!-- Categories -->
          <div class="widget">
            <h5 class="widget-title">Practice Areas</h5>
            <ul class="categories">
              <li><a href="#.">Divorce Law</a></li>
              <li><a href="#.">Litigation</a></li>
              <li><a href="#.">Accident Law</a></li>
              <li><a href="#.">Drug Law</a></li>
              <li><a href="#.">Personal Law</a></li>
              <li><a href="#.">Criminal Law</a></li>
              <li><a href="#.">Car Accident</a></li>
              <li><a href="#.">Security Law</a></li>
            </ul>
          </div>
          <!-- Recent Posts -->
          <div class="widget">
            <h5 class="widget-title">Legal News</h5>
            <ul class="papu-post">
              <li>
                <div class="media-body"> <a class="media-heading" href="#">Integer vel magna urna. Vestibulum id nisi</a> <span>Dec 18, 2016</span> </div>
              </li>
              <li>
                <div class="media-body"> <a class="media-heading" href="#">Integer vel magna urna. Vestibulum id nisi</a> <span>Dec 18, 2016</span> </div>
              </li>
              <li>
                <div class="media-body"> <a class="media-heading" href="#">Integer vel magna urna. Vestibulum id nisi</a> <span>Dec 18, 2016</span> </div>
              </li>
              <li>
                <div class="media-body"> <a class="media-heading" href="#">Integer vel magna urna. Vestibulum id nisi</a> <span>Dec 18, 2016</span> </div>
              </li>
            </ul>
          </div>
          
          <!-- Tags -->
          <div class="widget">
            <h5 class="widget-title">Tags</h5>
            <ul class="tags">
              <li><a href="#.">Amazing </a></li>
              <li><a href="#.">Envato </a></li>
              <li><a href="#.">Themes </a></li>
              <li><a href="#.">Responsiveness </a></li>
              <li><a href="#.">Developer </a></li>
              <li><a href="#.">Mobile </a></li>
              <li><a href="#.">IOS </a></li>
              <li><a href="#.">Design </a></li>
              <li><a href="#.">Jobs </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer Section -->
<div class="site-footer"> 
  <!-- Footer Top start -->
  <div class="footer-top-area">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="footer-lwf">
            <h3 class="footer-logo"><img src="images/logo.png" alt="Lawyer & Attorney"></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat, nunc dui auctor ipsum, sed posuere eros sapien id quam. </p>
            <ul class="footer-contact">
              <li><i class="fa fa-phone"></i> +1 1234 456789</li>
              <li><i class="fa fa-envelope"></i> info@companyname.com</li>
              <li><i class="fa fa-fax"></i> +1 123 123456</li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="footer-lwf footer-menu">
            <h3 class="footer-lwf-title">Quick Links</h3>
            <ul>
              <li><a href="index-2.html">Home</a></li>
              <li><a href="about.html">About Company</a></li>
              <li><a href="services.html">Our Services</a></li>
              <li><a href="blog-list.html">Blog</a></li>
              <li><a href="contact-us.html">Contact Us</a></li>
              <li><a href="gallery.html">Gallery</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="footer-lwf footer-menu">
            <h3 class="footer-lwf-title">About Lawyer</h3>
            <ul>
              <li><a href="practice-areas.html">Practice Areas List</a></li>
              <li><a href="practice-area-detail.html">Practice Areas Detail</a></li>
              <li><a href="attorney-list.html">Attorney List</a></li>
              <li><a href="attorney.html">Attorney Detail</a></li>
              <li><a href="faq.html">FAQs</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="footer-lwf">
            <h3 class="footer-lwf-title">Opening Hours</h3>
            <ul class="open-hours">
              <li><span>Mon to Fri:</span> <span class="text-right">09:30AM to 05:30PM</span></li>
              <li><span>Sun:</span> <span class="text-right">Closed</span></li>
            </ul>
            <div class="newsletter">
              <form>
                <input type="text" placeholder="Enter your email" value="" class="news-input">
                <button type="submit" value="" class="news-btn"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer top end --> 
  
  <!-- copyright start -->
  <div class="footer-bottom-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-md-6"><span>Lawyer & Attorney</span>.</div>
        <div class="col-md-12 col-md-6 text-right"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></div>
      </div>
    </div>
  </div>
  <!-- copyright end --> 
</div>

<!-- Bootstrap --> 
<script src="{{ asset('user/js/jquery-2.1.4.min.js')}}"></script> 
<script src="{{ asset('user/js/bootstrap.min.js')}}"></script>
</body>

<!-- practice-area-detail56:43-->
</html>