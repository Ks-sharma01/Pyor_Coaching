<?php
require_once __DIR__ . "/config/config.php";

include "includes/header.php";

?>

<section class="site-blocks-cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>I am <span class="typed-words"></span></h1>
                <p>Paint Your Own Rainbow</p>
            </div>
        </div>
    </div>
</section>

<!-- Introduction -->
    <div class="row justify-content-center mt-3">
      <div class="col-lg-9">

        <div class="bg-white p-2 p-md-2 shadow-sm">

          <p class="mb-0 p-2" style="text-align: justify;">
           We are committed to help you find control over your own learning process to recognize, prioritize and achieve your personal and professional goals.
          </p>

        </div>

      </div>
    </div>

<section class="coaching-approach" aria-labelledby="approach-heading">
    <div class="container">
       <p class="approach-eyebrow mb-2">
              OUR APPROACH
        </p>
        <div class="row align-items-center g-0">
            
            <!-- Image -->
            <div class="col-12 col-lg-6">
                <div class="approach-image-wrapper">
                    <img
                        src="<?= BASE_URL ?>images/pexels-pavel-danilyuk-7222093.jpg"
                        class="approach-image"
                        alt="Our Approach">
                </div>
            </div>

            <!-- Content -->
            <div class="col-12 col-lg-6">
                <div class="coaching-approach-content">

                    <h2 id="approach-heading" class="approach-title mb-2">
                        A space to find your own way forward
                    </h2>

                    <p class="approach-intro">
                        Coaching is a form of facilitation built on the belief
                        that you are fully capable of working things out,
                        because you know yourself best.
                    </p>

                    <!-- Key points -->
                    <div class="approach-points">

                        <div class="approach-point">
                            <div class="point-icon">
                                <span>01</span>
                            </div>

                            <div>
                                <h5>See things clearly</h5>
                                <p>
                                    Your coach helps you understand your current
                                    situation, identify what matters, and find
                                    solutions that move you toward your goals.
                                </p>
                            </div>
                        </div>

                        <div class="approach-point">
                            <div class="point-icon">
                                <span>02</span>
                            </div>

                            <div>
                                <h5>Reflect & discover</h5>
                                <p>
                                    Powerful questions help you reflect on where
                                    you are now and where you want to be.
                                </p>
                            </div>
                        </div>

                        <div class="approach-point">
                            <div class="point-icon">
                                <span>03</span>
                            </div>

                            <div>
                                <h5>Move forward</h5>
                                <p>
                                    Sessions are individual and confidential,
                                    held in person, by phone, or by video to
                                    fit your needs.
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="approach-note">
                        <p>
                            <strong>One-on-one coaching is not counseling or therapy.</strong>
                            A coach helps you identify your priorities and
                            create your own personal action plan.
                        </p>
                    </div>

                    <a href="<?= BASE_URL ?>contact.php"
                       class="btn approach-btn">
                        Let's partner in your next-level success
                        <span class="ms-2">→</span>
                    </a>

                </div>
            </div>

        </div>

    </div>
</section>



<section class="site-section bg-light" id="training-section">
  <div class="container">
    <div class="row mb-2 justify-content-center">
      <div class="col-md-7 text-center">
        <h2 class="approach-eyebrow">OUR OFFERINGS</h2>
      </div>
    </div>

    <div class="nonloop-block-13 owl-style owl-carousel">
      <div class="training">
        <figure class="mb-4"><img src="<?= BASE_URL ?>images/pexels-yankrukov-7793151.jpg" alt="Image" class="img-fluid" style="border-radius: 15px;"></figure>
        <h3 class="text-black mb-3">Executive & Leadership Coaching</h3>
        <p style="text-align: justify;">We go to great lengths to emphasize the unique talents and abilities of our clients to achieve better results and become better leaders.</p>
        <a class="btn btn-primary mt-2" href="<?= BASE_URL ?>services.php">Read More</a>
      </div>

      <div class="training">
        <figure class="mb-4"><img src="<?= BASE_URL ?>images/pexels-cottonbro-4101143.jpg" alt="Image" class="img-fluid" style="border-radius: 15px;"></figure>
        <h3 class="text-black mb-3">Transforming Lives</h3>
        <p style="text-align: justify;">We help you connect your head and heart in a way that transforms your dreams into actions. We help you discover your personal best.</p>
        <a class="btn btn-primary mt-2" href="<?= BASE_URL ?>life_coaching.php">Read More</a>
      </div>

      <div class="training">
        <figure class="mb-4"><img src="<?= BASE_URL ?>images/pexels-rdne-9034755.jpg" alt="Image" class="img-fluid" style="border-radius: 15px;"></figure>
        <h3 class="text-black mb-3">Employee Assistance Program</h3>
        <p>Employee Assistance Program (EAP) is a specially designed program for executives to handle their personal and professional challenges.</p>
        <a class="btn btn-primary mt-2" href="<?= BASE_URL ?>employee_assessment_program.php">Read More</a>
      </div>
    </div>

  </div>
</section>

<section class="site-section coaching-benefits" id="about-section" aria-labelledby="benefits-heading">
  <div class="container">
    <div class="row justify-content-center mb-4">
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

<section class="site-section bg-primary" id="services-section">
  <div class="container">
    <div class="row mb-4 justify-content-center">
      <div class="col-md-7 text-center">
        <h2 class="text-white">TRENDING NOW</h2>
      </div>
    </div>

    <div class="nonloop-block-13 owl-style owl-style-md owl-carousel">
      <div class="service bg-white">
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
        <p style="text-align: justify">High-pressure situations can be stressful but don't have to be overwhelming. With the right strategies, you can navigate these challenges with confidence and ease. Here are some tips to help you handle high-pressure situations...</p>
        <a class="btn btn-primary mt-2" href="<?= BASE_URL ?>handle_pressure.php">Read More</a>

      </div>

      <div class="service bg-white">
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
        <p style="text-align: justify">Executives roles have become very demanding and require them to demonstrate sheer alacrity, dexterity and versatility in all facets of their responsibilities, be it people management, planning, strategy...</p>
        <a class="btn btn-primary mt-2" href="<?= BASE_URL ?>need_hour.php">Read More</a>

      </div>

      <div class="service  bg-white">
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
        <p style="text-align: justify">If you are worn out from work and don’t feel like pursuing your hobby, then you are severely deficient in Vitamin “ME”. You are experiencing the “Balance Syndrome” and the symptoms are very obvious...</p>
        <a class="btn btn-primary mt-2" href="<?= BASE_URL ?>work_life.php">Read More</a>

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
        <p class="mb-4">Singapore | India
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