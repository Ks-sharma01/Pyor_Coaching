<?php
require_once __DIR__ . "/config/config.php";

include "includes/header.php";

?>

<section class="site-blocks-cover">
  <div class="container">
    <div class="row">
          <div class="col-lg-12">
            <h1>Trending Now!</h1>
            <p>See what's new on our blogs</p>
      </div>
    </div>
  </div>
</section>

<!-- Introduction -->
    <div class="row justify-content-center mt-3">
      <div class="col-lg-9">

        <div class="bg-white p-2 p-md-2 shadow-sm">

          <p class="mb-0" style="text-align: justify;">
            Check out the cool stuff that we have to unleash your potential! We at Jyoti Sapra are always at your side.
          </p>

        </div>

      </div>
    </div>

<section class="site-section" id="blog-section">
  <div class="container">
    <div class="row justify-content-center" data-aos="fade-up">
      <div class="col-lg-6 text-center mb-5">

        <h2 class="mb-2 approach-eyebrow">GO EXPLORE!</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-4" data-aos="fade-up">
        <div class="d-lg-flex blog-entry">
          <div class="blog-entry-text">
            <div class="icon d-flex align-items-center mb-2">
              <img src="<?= BASE_URL ?>images/man.jpg"
                  alt="High-pressure situations"
                  class="img-fluid flex-shrink-0 me-3"
                  style="height: 90px; width: 90px; object-fit: cover;">
              <div>
                <h3 class="text-black my-0">
                  How To Handle High-Pressure Situations
                </h3>
                <p>July 14, 2026</p>
              </div>
            </div>
            <p style="text-align: justify;">High-pressure situations can be stressful but don't have to be overwhelming. With the right strategies, you can navigate these challenges with confidence and ease. Here are some tips to help you handle high-pressure situations...</p>
            <a class="btn btn-primary mt-2 text-white" href="<?= BASE_URL ?>handle_pressure.php">Read More..</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="d-lg-flex blog-entry">
          <div class="blog-entry-text">
            <div class="icon d-flex align-items-center mb-2">
              <img src="<?= BASE_URL ?>images/mentoring.jpg"
                  alt="High-pressure situations"
                  class="img-fluid flex-shrink-0 me-3"
                  style="height: 90px; width: 90px; object-fit: cover;">
              <div>
                <h3 class="text-black my-0">
                    Executive Coaching - Need of the Hour
                </h3>
                <p>October 02, 2026</p>
              </div>
            </div>
            <p style="text-align: justify;">Executives’ roles have become very demanding and require them to demonstrate sheer alacrity, dexterity and versatility in all facets of their responsibilities, be it people management, planning, strategy development...</p>
            <a class="btn btn-primary mt-2 text-white" href="<?= BASE_URL ?>need_hour.php">Read More..</a>
          </div>
        </div>
      </div>

      <div class="col-md-6 mb-2" data-aos="fade-up">
        <div class="d-lg-flex blog-entry">
          <div class="blog-entry-text">
            <div class="icon d-flex align-items-center mb-2">
            <img src="<?= BASE_URL ?>images/balance.jpg"
                alt="High-pressure situations"
                class="img-fluid flex-shrink-0 me-3"
                style="height: 90px; width: 90px; object-fit: cover;">

            <div>
              <h3 class="text-black my-0">
                  Work Life Balance
              </h3>
              <p>June 30, 2026</p>
            </div>
          </div>
            <p style="text-align: justify;">If you are worn out from work and don’t feel like pursuing your hobby, then you are severely deficient in Vitamin “ME”. You are experiencing the “Balance Syndrome” and the symptoms are very obvious – you are checking emails after work; taking calls beyond business hours; stretching yourself for 11-12 hours to meet your...</p>
            <a class="btn btn-primary mt-2 text-white" href="<?= BASE_URL ?>work_life.php">Read More..</a>
          </div>
        </div>
      </div>
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
        <p class="mb-4">Singapore | India </p>
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
  </div>
</div>


<?php

include "includes/footer.php";

?>