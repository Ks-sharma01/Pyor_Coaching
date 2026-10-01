<?php
require_once __DIR__ . "/config/config.php";

include "includes/header.php";

?>

<section class="site-blocks-cover overflow-hidden">
  <div class="container">
    <div class="row justify-content-center">
          <div class="col-lg-11 mt-4">

        <!-- <div class="row"> -->
          <!-- <div class="col-lg-11 "> -->

            <h1 class="mt-4">Trending Now!</h1>
            <p>See what's new on our blogs</p>
            <p class="text-white">Check out the cool stuff that we have to unleash your potential! We at Jyoti Sapra are always at your side.</p>
          <!-- </div> -->

        <!-- </div> -->
      </div>

    </div>
  </div>
</section>

<section class="site-section" id="blog-section">
  <div class="container">
    <div class="row justify-content-center" data-aos="fade-up">
      <div class="col-lg-6 text-center mb-5">

        <h2 class="mb-2 approach-eyebrow">GO EXPLORE!</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">
        <div class="d-lg-flex blog-entry">
          <figure class="mr-4">
          <img src="<?= BASE_URL ?>images/coach_2_sm.jpg" alt="Image" class="img-fluid rounded">
          </figure>
          <div class="blog-entry-text">
            <h3><a href="<?= BASE_URL ?>handle_pressure.php">How To Handle High-Pressure Situations</a></h3>
            <span class="post-meta mb-3 d-block">July 14, 2026</span>
            <p style="text-align: justify;">High-pressure situations can be stressful but don't have to be overwhelming. With the right strategies, you can navigate these challenges with confidence and ease. Here are some tips to help you handle high-pressure situations...</p>
            <p><a href="<?= BASE_URL ?>handle_pressure.php">Read More..</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="d-lg-flex blog-entry">
          <figure class="mr-4">
            <img src="<?= BASE_URL ?>images/coach_1_sm.jpg" alt="Image" class="img-fluid rounded">
          </figure>
          <div class="blog-entry-text">
            <h3><a href="<?= BASE_URL ?>need_hour.php">Executive Coaching - Need of the Hour</a></h3>
            <span class="post-meta mb-3 d-block">October 02, 2026</span>
            <p style="text-align: justify;">Executives’ roles have become very demanding and require them to demonstrate sheer alacrity, dexterity and versatility in all facets of their responsibilities, be it people management, planning, strategy development...</p>
            <p><a href="<?= BASE_URL ?>need_hour.php">Read More..</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">
        <div class="d-lg-flex blog-entry">
          <figure class="mr-4">
            <img src="<?= BASE_URL ?>images/coach_3_sm.jpg" alt="Image" class="img-fluid rounded">
          </figure>
          <div class="blog-entry-text">
            <h3><a href="<?= BASE_URL ?>work_life.php">Work Life Balance</a></h3>
            <span class="post-meta mb-3 d-block">June 30, 2026</span>
            <p style="text-align: justify;">If you are worn out from work and don’t feel like pursuing your hobby, then you are severely deficient in Vitamin “ME”. You are experiencing the “Balance Syndrome” and the symptoms are very obvious – you are checking emails after work; taking calls beyond business hours; stretching yourself for 11-12 hours to meet your...</p>
            <p><a href="<?= BASE_URL ?>work_life.php">Read More..</a></p>
          </div>
        </div>
      </div>
      <!-- <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="d-lg-flex blog-entry">
          <figure class="mr-4">
            <a href="single.html"><img src="images/coach_2_sm.jpg" alt="Image" class="img-fluid rounded"></a>
          </figure>
          <div class="blog-entry-text">
            <h3><a href="single.html">Coaching Life Is Better Than Schooling</a></h3>
            <span class="post-meta mb-3 d-block">April 17, 2019</span>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est maxime adipisci incidunt voluptatum pariatur. Officia eaque ipsum ducimus.</p>
            <p><a href="#" class="">Read More..</a></p>
          </div>
        </div>
      </div> -->

    </div>
  </div>
</section>

<div class="site-section-contact bg-light" id="contact-section">
  <div class="container p-4">
    <div class="row">
      <div class="col-12 text-center mb-2 mt-2">
        <h2 style="color:#373A6D" class="approach-eyebrow">REACH OUT</h2>
        <p>Contact us to schedule.</p>
      </div>
    </div>
    <div class="row mb-2">
      <div class="mb-4 mb-lg-0 col-6 col-md-6 col-lg-4">
        <p class="mb-0 font-weight-bold text-primary">Address</p>
        <p class="mb-4">India | Singapore
      </div>
      <div class="mb-4 mb-lg-0 col-6 col-md-6 col-lg-4">
        <p class="mb-0 font-weight-bold text-primary">Phone</p>
        <p class="mb-2">+65 82921920 (Singapore)</p>
        <p class="mb-4">+91 9871404023 (India)</p>
      </div>
      <div class="mb-4 mb-lg-0 col-6 col-md-6 col-lg-4">
        <i class="bi bi-envelope"></i>

        <p class="mb-0 font-weight-bold text-primary">Email Address</p>
        <a href="mailto:jyoti@pyorcoaching.com">jyoti@pyorcoaching.com</a></span>
      </div>
    </div>
    <!-- <div class="row">
      <div class="col-lg-12 mb-5">
        <form action="#" method="post">
          <div class="form-group row">
            <div class="col-md-6 mb-3 mb-md-0">
              <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="First name">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <input type="text" class="form-control" placeholder="Email address">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6 mr-auto">
              <input type="submit" class="btn btn-block btn-primary text-white py-2 px-5" value="Send Message">
            </div>
          </div>
        </form>
      </div>

    </div> -->
  </div>
</div>


<?php

include "includes/footer.php";

?>