<?php
require_once __DIR__ . "/config/config.php";

include "includes/header.php";

?>

<section class="site-blocks-cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Paint Your Own Rainbow</h1>
                <p>35 stories. Seven colours. Many moments that may feel familiar.</p>

                <div class="book-hero-actions">

                    <!-- Buy the Book Dropdown -->
                    <div class="dropdown book-hero-actions__item">
                        <button class="btn dropdown-toggle book-hero-actions__button book-hero-actions__button--primary"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Buy the Book
                        </button>

                        <ul class="dropdown-menu book-hero-actions__menu">
                            <li>
                                <a class="dropdown-item"
                                    href="https://www.amazon.in/Paint-Your-RAINBOW-Jyoti-Sapra-ebook/dp/B0HJNVXNX7"
                                    target="_blank"
                                    rel="noopener noreferrer">
                                    Buy in India
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item"
                                   
                                    target="_blank"
                                    rel="noopener noreferrer">
                                    Buy Internationally
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Read Excerpt -->
                    <div class="book-hero-actions__item">
                        <a href="<?= BASE_URL ?>book_summary.php"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="btn book-hero-actions__button book-hero-actions__button--secondary">
                            Read an Excerpt
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<section id="about-section" class="pb-2 pt-3 bg-light" aria-labelledby="benefits-heading">

    <div class="container">

        <!-- Heading -->
        <div class="row justify-content-center text-center mb-2">
            <div class="col-lg-9">

                <h2 class="text-black mb-3" id="benefits-heading">
                    Sometimes a story says what advice cannot.
                </h2>

                <div class="mx-auto"
                    style="width:60px; height:3px; background:#F2A03A;">
                </div>

            </div>
        </div>

        <div class="row justify-content-center mb-3">
      <div class="col-lg-9">

        <div class="bg-white p-2 p-md-4 shadow-sm">

          <p class="mb-0" style="text-align: justify;">
            I didn't write this book to tell you how to live your life.
            I wrote it because sometimes a story can make us see
            something in ourselves that advice cannot.
            The stories in <em>Paint Your Own Rainbow</em> are fictional.
            But the emotions are real.
          </p>

        </div>

      </div>
    </div>


        <!-- Story Examples -->
        <div class="row g-2 mb-3">

            <div class="col-12 col-md-6">
                <div class="card h-100 border-1">
                    <div class="card-body p-2 d-flex">
                        <span class="fw-bold mr-3"
                            style="color:#F2A03A;">
                            <img src="images/book1.png" height="20px"/>
                        </span>

                        <p class="mb-0">
                            A woman who keeps putting herself last.
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-6">
                <div class="card h-100 border-1">
                    <div class="card-body p-2 d-flex">
                        <span class="fw-bold mr-3"
                            style="color:#F2A03A;">
                            <img src="images/book1.png" height="20px"/>
                        </span>

                        <p class="mb-0">
                            A person who knows they need to say something,
                            but keeps putting it off.
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-6">
                <div class="card h-100 border-1">
                    <div class="card-body p-2 d-flex">
                        <span class="fw-bold mr-3"
                            style="color:#F2A03A;">
                            <img src="images/book1.png" height="20px" />
                        </span>

                        <p class="mb-0">
                            A relationship where too much has been left unsaid.
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-6">
                <div class="card h-100 border-1">
                    <div class="card-body p-2 d-flex">
                        <span class="fw-bold mr-3"
                            style="color:#F2A03A;">
                            <img src="images/book1.png" height="20px" />
                        </span>

                        <p class="mb-0">
                            Someone who has spent years trying to live up
                            to an idea of who they should be.
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-12">
                <div class="card border-1">
                    <div class="card-body p-2 d-flex justify-content-center">
                        <span class="fw-bold mr-3"
                            style="color:#F2A03A;">
                            <img src="images/book1.png" height="20px" />
                        </span>

                        <p class="mb-0">
                            A successful life that doesn't feel quite as
                            fulfilling as it looks.
                        </p>
                    </div>
                </div>
            </div>

        </div>


        <div class="row justify-content-center mb-3">
      <div class="col-lg-9">

        <div class="bg-white p-2 p-md-4 shadow-sm">

          <p class="mb-0" style="text-align: justify;">
            And the moment when someone finally realises that
            waiting is also a choice. You may recognise yourself in one of them.
            You may recognise someone you know.
            Or perhaps a part of yourself you hadn't thought
            about for a while.
          </p>

        </div>

      </div>
    </div>

    </div>
</section>

<div class="be-row be-wrap clearfix">
    <div class="one-col column-block clearfix no-background">
        <div class="be-custom-column-pad" style="padding-top:10px;padding-bottom:10px;">

            <h3 style="text-align:center;">
                <span style="color:#373A6D;">Seven colours. Seven themes. 35 stories.</span>
            </h3>
            <section class="rainbow-themes py-2">
                <div class="container">

                    <div class="rainbow-grid">

                        <!-- RED -->
                        <div class="rainbow-box red-box">
                            <h3>RED</h3>
                            <p>Courage and Strength</p>
                        </div>

                        <!-- ORANGE -->
                        <div class="rainbow-box orange-box">
                            <h3>ORANGE</h3>
                            <p>Joy and Creativity</p>
                        </div>

                        <!-- YELLOW -->
                        <div class="rainbow-box yellow-box">
                            <h3>YELLOW</h3>
                            <p>Hope and Optimism</p>
                        </div>

                        <!-- GREEN -->
                        <div class="rainbow-box green-box">
                            <h3>GREEN</h3>
                            <p>Growth and Renewal</p>
                        </div>

                        <!-- BLUE -->
                        <div class="rainbow-box blue-box">
                            <h3>BLUE</h3>
                            <p>Trust and Authentic Communication</p>
                        </div>

                        <!-- INDIGO -->
                        <div class="rainbow-box indigo-box">
                            <h3>INDIGO</h3>
                            <p>Wisdom and Self-Awareness</p>
                        </div>

                        <!-- VIOLET -->
                        <div class="rainbow-box violet-box">
                            <h3>VIOLET</h3>
                            <p>Purpose, Transformation and Legacy</p>
                        </div>

                    </div>
                </div>
            </section>
        </div>
        <p style="text-align:center;">
            Five stories sit within each colour, bringing together 35 different moments, choices and emotions.
        </p>
    </div>
</div>

<section class="py-2 py-md-2">
    <div class="container">

        <div class="row g-0 bg-light shadow-sm">

            <!-- Left Image -->
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">

                <a href="https://www.amazon.in/Paint-Your-RAINBOW-Jyoti-Sapra-ebook/dp/B0HJNVXNX7" target="_blank"
                    rel="noopener noreferrer"
                    class="d-block w-100 text-center">

                    <img
                        src="<?php echo BASE_URL; ?>images/book.jpg"
                        class="img-fluid d-block mx-auto"
                        alt="The Book"
                        style="max-width:100%; height:auto;">

                </a>

            </div>


            <!-- Right Content -->
            <div class="col-12 col-md-6">

                <div class="px-2 px-sm-3 py-4 h-100 d-flex flex-column justify-content-center">

                    <!-- Heading -->
                    <!-- <h4 class="mb-3"> -->
                    <span style="color:#373A6D; margin-bottom: .50rem;     
                        font-size: 1.8rem;
                        font-weight: 700;">
                        And then comes the pause
                    </span>
                    <!-- </h4> -->

                    <!-- Decorative Line -->
                    <div class="mb-4"
                        style="width:60px; height:3px; background:#F2A03A;">
                    </div>

                    <!-- Content -->
                    <p class="mb-2">
                        Each story ends with a <strong>PYOR Insight</strong>
                        and a question.
                    </p>

                    <p class="mb-2">
                        Not a lesson. Not a test. Just something to sit with.
                    </p>

                    <p class="mb-2">
                        You may agree with it. You may not. You may answer
                        the question immediately, come back to it later, or
                        simply let it stay with you.
                    </p>

                    <p class="mb-0">
                        Sometimes a question stays with us long after we have
                        closed the book.
                    </p>

                </div>

            </div>

        </div>

    </div>
</section>

<section class="reading-rhythm">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <h2 class="reading-rhythm__heading">
                    A book to read <em>slowly.</em>
                </h2>
                <div class="reading-rhythm__rule" aria-hidden="true"></div>
            </div>

            <div class="col-12 col-md-6">
                <ol class="reading-rhythm__list">
                    <li>
                        <span class="reading-rhythm__number">01</span>
                        <span>One story before bed.</span>
                    </li>
                    <li>
                        <span class="reading-rhythm__number">02</span>
                        <span>One with your morning coffee.</span>
                    </li>
                    <li>
                        <span class="reading-rhythm__number">03</span>
                        <span>A story chosen at random.</span>
                    </li>
                    <li>
                        <span class="reading-rhythm__number">04</span>
                        <span>A story shared with someone you care about.</span>
                    </li>
                    <li class="reading-rhythm__final">
                        <span class="reading-rhythm__number">05</span>
                        <span>Or simply a book you return to when you need to look at something differently.</span>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="pb-2">
    <div class="container">

        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-10 col-lg-8">

                <!-- Main Message -->
                <p class="book-closing-message mb-3">
                    <em>
                        Paint Your Own Rainbow is about the things we feel,
                        the choices we make, the questions we avoid and the
                        moments when we begin to see ourselves a little more clearly.
                    </em>
                </p>

                <!-- Closing Thought -->
                <p class="book-closing-pullquote mb-3">
                    <em>
                        Perhaps one of these stories is waiting to become yours.
                    </em>
                </p>

                <!-- Decorative Line -->
                <div class="mx-auto mb-4"
                    style="width:60px; height:3px; background:#F2A03A;">
                </div>

                <!-- Buttons -->
                <div class="d-flex flex-row justify-content-center align-items-center mb-2 w-100"
                    style="column-gap: 8px;">

                    <!-- Buy the Book Dropdown -->
                    <div class="dropdown flex-fill">
                        <button class="btn btn-primary dropdown-toggle px-1 px-sm-4 py-2 w-100"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Buy the Book
                        </button>

                        <ul class="dropdown-menu w-100">
                            <li>
                                <a class="dropdown-item px-3"
                                    href="https://www.amazon.in/Paint-Your-RAINBOW-Jyoti-Sapra-ebook/dp/B0HJNVXNX7"
                                    target="_blank"
                                    rel="noopener noreferrer">
                                    Buy in India
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item px-3"
                                    
                                    target="_blank"
                                    rel="noopener noreferrer">
                                    Buy Internationally
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Read Excerpt -->
                    <div class="flex-fill">
                        <a href="<?= BASE_URL ?>book_summary.php"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="btn px-3 px-sm-4 py-2 w-100"
                            style="border:2px solid #373A6D; color:#373A6D;">
                            Read an Excerpt
                        </a>
                    </div>

                </div>

            </div>
        </div>

    </div>
</section>

<?php

include "includes/footer.php";

?>