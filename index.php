<?php
require_once __DIR__ . "/config/config.php";

include "includes/header.php";

?>

<section class="site-blocks-cover overflow-hidden">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 align-self-center">

        <div class="row">
          <div class="col-lg-11">

            <h1>I am <span class="typed-words"></span></h1>
            <p>Paint Your Own Rainbow</p>
            <p class="text-white smoothscroll">We are committed to help you find control over your own learning process to recognize, prioritize and achieve your personal and professional goals.</p>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- <section>
      <div class="container">
        <div class="row">
          <div class="col-12" style="margin-top: -20%;">
            <div class="slide-one-item home-slider owl-carousel">
              <img src="images/coach_hero_1.jpg" alt="Image" class="img-fluid img">
              <img src="images/coach_hero_2.jpg" alt="Image" class="img-fluid img">
            </div>
          </div>
        </div>
      </div>
    </section> -->

<section class="site-section coaching-benefits" id="about-section" aria-labelledby="benefits-heading">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-9 text-center">
        <h2 class="text-black mb-0" id="benefits-heading">Hiring a coach brings many wonderful benefits, including</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-6 col-lg-3 mb-4 mb-lg-0">
        <div class="benefit-item">
          <div class="benefit-chart" style="--percent: 79" role="img" aria-label="79 percent">
            <span>79%</span>
          </div>
          <h3>Improved Work Performance</h3>
        </div>
      </div>
      <div class="col-6 col-lg-3 mb-4 mb-lg-0">
        <div class="benefit-item">
          <div class="benefit-chart" style="--percent: 75" role="img" aria-label="75 percent">
            <span>75%</span>
          </div>
          <h3>Improved Communication Skills</h3>
        </div>
      </div>
      <div class="col-6 col-lg-3 mb-4 mb-lg-0">
        <div class="benefit-item">
          <div class="benefit-chart" style="--percent: 80" role="img" aria-label="80 percent">
            <span>80%</span>
          </div>
          <h3>Improved Self Confidence</h3>
        </div>
      </div>
      <div class="col-6 col-lg-3 mb-4 mb-lg-0">
        <div class="benefit-item">
          <div class="benefit-chart" style="--percent: 73" role="img" aria-label="73 percent">
            <span>73%</span>
          </div>
          <h3>Improved Relationships</h3>
        </div>
      </div>
    </div>

    <p class="text-center">Maximize your potential and unlock your source of productivity.</p>
  </div>
</section>

<section class="coaching-approach" aria-labelledby="approach-heading">
  <div class="container-fluid px-0">
    <div class="row no-gutters align-items-stretch">

      <!-- Image -->
      <div class="col-12 col-lg-6 d-flex">
        <img
          class="coaching-approach-image w-100"
          src="<?= BASE_URL ?>images/coach_2_sm.jpg"
          alt="Our Approach">
      </div>

      <!-- Content -->
      <div class="col-12 col-lg-6 d-flex">
        <div class="coaching-approach-content w-100">

          <p class="approach-eyebrow">Our Approach</p>

          <h2 class="text-black mb-4" id="approach-heading">
            A space to find your own way forward
          </h2>

          <p style="text-align: justify;">
            Coaching is a form of facilitation built on the belief that you are fully capable of working things out, because you know yourself best.
          </p>

          <ul style="text-align: justify;">
            <li>
              Your coach helps you see your current situation clearly, identify what matters, and find solutions that move you toward your goals.
            </li>
            <li>
              Powerful questions help you reflect on where you are now and where you want to be.
            </li>
            <li>
              Sessions are individual and confidential, held in person, by phone, or by video to fit your needs.
            </li>
          </ul>

          <p style="text-align: justify;">
            One-on-one coaching is not counseling or therapy. A coach helps you identify your priorities and create your own personal action plan.
          </p>

          <a class="btn btn-primary mt-2" href="<?= BASE_URL ?>contact.php">
            Let's partner in your next-level success
          </a>

        </div>
      </div>

    </div>
  </div>
</section>


<div style="padding: 10px 5px 5px 10px">
  <div style="padding-top: 20px;padding-bottom: 20px;">
    <h3 style="text-align: center;">
      <span style="color: #373A6D;">“Everyone needs a coach. We all need people to give us feedback. That’s how we improve.”
        <br>
      </span>
      <span style="color: #373A6D;">Bill Gates</span>
    </h3>
  </div>


</div>


<section class="site-section bg-light" id="training-section">
  <div class="container">
    <div class="row mb-5 justify-content-center">
      <div class="col-md-7 text-center">
        <h2 class="approach-eyebrow">OUR OFFERINGS</h2>
      </div>
    </div>

    <div class="nonloop-block-13 owl-style owl-carousel">
      <div class="training">
        <figure class="mb-4"><img src="<?= BASE_URL ?>images/coach_2_sm.jpg" alt="Image" class="img-fluid"></figure>
        <h3 class="text-black mb-3">Executive & Leadership Coaching</h3>
        <p style="text-align: justify;">We go to great lengths to emphasize the unique talents and abilities of our clients to achieve better results and become better leaders.</p>
        <a class="btn btn-primary mt-1" href="<?= BASE_URL ?>services.php">Read More</a>

      </div>

      <div class="training">
        <figure class="mb-4"><img src="<?= BASE_URL ?>images/coach_1_sm.jpg" alt="Image" class="img-fluid"></figure>
        <h3 class="text-black mb-3">Transforming Lives</h3>
        <p style="text-align: justify;">We help you connect your head and heart in a way that transforms your dreams into actions. We help you discover your personal best.</p>
        <a class="btn btn-primary mt-1" href="<?= BASE_URL ?>life_coaching.php">Read More</a>

      </div>

      <div class="training">
        <figure class="mb-4"><img src="<?= BASE_URL ?>images/coach_3_sm.jpg" alt="Image" class="img-fluid"></figure>
        <h3 class="text-black mb-3">Employee Assistance Program</h3>
        <p>Employee Assistance Program (EAP) is a specially designed program for executives to handle their personal and professional challenges.</p>
        <a class="btn btn-primary mt-1" href="<?= BASE_URL ?>employee_assessment_program.php">Read More</a>

      </div>


    </div>

  </div>
</section>

<!-- <section class="site-section" id="testimonials-section" data-aos="fade">
  <div class="container">

    <div class="row justify-content-center" data-aos="fade-up">
      <div class="col-lg-6 text-center mb-5">
        <h2 class="text-black mb-2">Happy Customers</h2>
      </div>
    </div>
    <div data-aos="fade-up" data-aos-delay="200">
      <div class="owl-carousel owl-style owl-carousel-one no-owl-nav">
        <div>
          <div class="block-testimony-1 text-center">

            <blockquote class="mb-4">
              <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.&rdquo;</p>
            </blockquote>

            <figure>
              <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
            </figure>
            <h3 class="font-size-20 text-black">Ricky Fisher</h3>
          </div>
        </div>

        <div>
          <div class="block-testimony-1 text-center">



            <blockquote class="mb-4">
              <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
            </blockquote>

            <figure>
              <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
            </figure>
            <h3 class="font-size-20 mb-4 text-black">Ken Davis</h3>


          </div>
        </div>

        <div>
          <div class="block-testimony-1 text-center">


            <blockquote class="mb-4">
              <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
            </blockquote>

            <figure>
              <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
            </figure>
            <h3 class="font-size-20 text-black">Mellisa Griffin</h3>


          </div>
        </div>

        <div>
          <div class="block-testimony-1 text-center">


            <blockquote class="mb-4">
              <p>&ldquo;Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est maxime adipisci incidunt voluptatum pariatur. Officia eaque ipsum ducimus. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
            </blockquote>

            <figure>
              <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
            </figure>
            <h3 class="font-size-20 mb-4 text-black">Robert Steward</h3>


          </div>
        </div>


      </div>
    </div>
  </div>
</section> -->

<section class="site-section bg-primary" id="services-section">
  <div class="container">
    <div class="row mb-5 justify-content-center">
      <div class="col-md-7 text-center">
        <h2 class="text-white">TRENDING NOW</h2>
      </div>
    </div>

    <div class="nonloop-block-13 owl-style owl-style-md owl-carousel">
      <div class="service bg-white">
        <div class="icon"><span class="flaticon-elearning display-2 text-primary"></span></div>
        <h3 class="text-black mb-3">How To Handle High-Pressure Situations</h3>
        <p>November 14, 2024</p>
        <p style="text-align: justify">High-pressure situations can be stressful but don't have to be overwhelming. With the right strategies, you can navigate these challenges with confidence and ease. Here are some tips to help you handle high-pressure situations...</p>
        <a class="btn btn-primary mt-1" href="<?= BASE_URL ?>handle_pressure.php">Read More</a>

      </div>

      <div class="service bg-white">
        <div class="icon"><span class="flaticon-target display-2 text-primary"></span></div>
        <h3 class="text-black mb-3">Executive Coaching - Need of the Hour</h3>
        <p>October 29, 2024</p>
        <p>Executives’ roles have become very demanding and require them to demonstrate sheer alacrity, dexterity and versatility in all facets of their responsibilities, be it people management, planning, strategy development...</p>
        <a class="btn btn-primary mt-1" href="<?= BASE_URL ?>need_hour.php">Read More</a>

      </div>

      <div class="service  bg-white">
        <div class="icon"><span class="flaticon-group display-2 text-primary"></span></div>
        <h3 class="text-black mb-3">Work Life Balance</h3>
        <p>September 30, 2024</p>
        <p style="text-align: justify">If you are worn out from work and don’t feel like pursuing your hobby, then you are severely deficient in Vitamin “ME”. You are experiencing the “Balance Syndrome” and the symptoms are very obvious – you are checking emails after work; taking calls beyond business hours...</p>
        <a class="btn btn-primary mt-1" href="<?= BASE_URL ?>work_life.php">Read More</a>

      </div>


    </div>

  </div>
</section>



<div class="site-section bg-light" id="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h2 style="color:#373A6D" class="approach-eyebrow">REACH OUT</h2>
        <p>Contact us to schedule.</p>
      </div>
    </div>
    <div class="row mb-2">
      <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
        <p class="mb-0 font-weight-bold text-primary">Address</p>
        <p class="mb-4">India | Singapore
      </div>
      <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
        <p class="mb-0 font-weight-bold text-primary">Phone</p>
        <p class="mb-2">+65 82921920 (Singapore)</p>
        <p class="mb-4">+91 9871404023 (India)</p>
      </div>
      <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
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