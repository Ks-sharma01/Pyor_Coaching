  <?php
  $currentPage = basename($_SERVER['SCRIPT_NAME'] ?? '');
  $servicePages = [
    'services.php',
    'executive_coaching.php',
    'leadership_coaching.php',
    'life_coaching.php',
    'employee_assessment_program.php',
  ];
  ?>
  <!doctype html>
<html lang="en">
  <head>
    <title>Pyor Coaching - Paint Your Own Rainbow</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" id="home-section">
  

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
  
  <header class="site-navbar js-sticky-header site-navbar-target" role="banner" >

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <a href="<?= BASE_URL ?>index.php"><img src="<?= BASE_URL ?>images/logo.png" height="50px"/></a>
            <!-- <img src="<?= BASE_URL ?>images/logo.png" height="50px"/> -->
            <!-- <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">Coaching<span class="text-primary">.</span> </a></h1> -->
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="<?= BASE_URL ?>index.php" class="nav-link<?= $currentPage === 'index.php' ? ' active' : '' ?>">Home</a></li>
                <li><a href="<?= BASE_URL ?>about.php" class="nav-link<?= $currentPage === 'about.php' ? ' active' : '' ?>">About</a></li>
                <li><a href="<?= BASE_URL ?>coaching.php" class="nav-link<?= $currentPage === 'coaching.php' ? ' active' : '' ?>">Coaching</a></li>
                <li><a href="<?= BASE_URL ?>organizations.php" class="nav-link<?= $currentPage === 'organizations.php' ? ' active' : '' ?>">Organizations</a></li>
                <li><a href="<?= BASE_URL ?>book.php" class="nav-link<?= $currentPage === 'book.php' ? ' active' : '' ?>">The Book</a></li>
                <li class="has-children">
                  <a href="<?= BASE_URL ?>services.php" class="nav-link<?= in_array($currentPage, $servicePages, true) ? ' active' : '' ?>">Services</a>
                  <ul class="dropdown">
                    <li><a class="<?= $currentPage === 'executive_coaching.php' ? 'active' : '' ?>" href="<?= BASE_URL ?>executive_coaching.php">Executive Coaching</a></li>
                    <li><a class="<?= $currentPage === 'leadership_coaching.php' ? 'active' : '' ?>" href="<?= BASE_URL ?>leadership_coaching.php">Leadership Coaching</a></li>
                    <li><a class="<?= $currentPage === 'life_coaching.php' ? 'active' : '' ?>" href="<?= BASE_URL ?>life_coaching.php">Life Coaching</a></li>
                    <li><a class="<?= $currentPage === 'employee_assessment_program.php' ? 'active' : '' ?>" href="<?= BASE_URL ?>employee_assessment_program.php">Employee Assistance Program</a></li>
                  </ul>
                </li>
                <li><a href="<?= BASE_URL ?>blogs.php" class="nav-link<?= $currentPage === 'blogs.php' ? ' active' : '' ?>">Blogs</a></li>
                <li><a href="<?= BASE_URL ?>contact.php" class="nav-link<?= $currentPage === 'contact.php' ? ' active' : '' ?>">Contact Us</a></li>
              </ul>
            </nav>
          </div>

          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    
    
    
  </div> <!-- .site-wrap -->
  
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    
    <script src="js/typed.js"></script>
    <script>
  document.addEventListener('DOMContentLoaded', function () {
    const el = document.querySelector('.typed-words');
    if (el) {
      new Typed('.typed-words', {
        strings: ["Jyoti Sapra", "Leadership Coach"],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 2000,
        startDelay: 1000,
        loop: true,
        showCursor: true
      });
    }
  });
</script>
    
  </body>
    </html>