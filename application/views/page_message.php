<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view('head');?>
</head>
<body>
<!--Switcher-->
  <div class="style-switcher">
  <?php $this->load->view('switcher');?>
</div>
<!--Switcher-->

<!--Main menu-->
  <div
  <?php $this->load->view('main_menu');?>
</div>
<!--Main menu-->

<!-- Mobile menu -->
  <div>
  <?php $this->load->view('mobile_menu');?>
  </div>
<!-- Mobile menu -->

<!--Header-->
<header>

    <?php $this->load->view('header');?>
    
</header>
<!--Header-->


<!--Hello-->
<section>
  <?php $this->load->view('greeting');?>
</section>
<!--Hello-->

  <hr>

<!--Resume-->
  <section>
    <?php $this->load->view('resume');?>
  </section>
<!--Resume-->

<!--Portfolio-->
  <section>
    <?php $this->load->view('portfolio');?>
  </section>
<!--Portfolio-->

<!--Testimonials-->
  <div>
    <?php $this->load->view('testimonials');?>
  </div>
<!--Testimonials-->

<!--Blog
  <section>
    <!--php $this->load->view('blog')-->
  
<!--Blog-->

<!--Contact-->
  <div>
    <?php $this->load->view('contact');?>
  </div>
<!--Contact-->

<!-- Portfolio Modal -->
  <div>
    <?php $this->load->view('portfolio_modal');?>
  </div>
<!-- Portfolio Modal -->

  <script src="assets/js/jquery-2.2.4.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/menu.js"></script>
  <script src="assets/js/jquery.waypoints.js"></script>
  <script src="assets/js/progress-list.js"></script>
  <script src="assets/js/section.js"></script>
  <script src="assets/js/portfolio-filter.js"></script>
  <script src="assets/js/slider-carousel.js"></script>
  <script src="assets/js/mobile-menu.js"></script>
  <script src="assets/js/contacts.js"></script>
  <script src="assets/js/mbclicker.min.js"></script>
  <script src="assets/js/site-btn.js"></script>
  <script src="assets/js/style-switcher.js"></script>
</body>
</html>
