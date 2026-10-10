<?php
require_once __DIR__ . "/config/config.php";
include "includes/header.php";
?>

<div class="container py-5">

    <!-- Page Title -->
    <div class="border-bottom pb-3 mb-4">

        <h1 class="display-4 mb-2" style="color:#373A6D;">
            Paint Your Own Rainbow
        </h1>

        <p class="text-muted mb-0">
            From the book <em>Paint Your Own Rainbow</em> by Jyoti Sapra
        </p>

    </div>


    <!-- Main Layout -->
    <div class="row">


        <!-- =====================================
             LEFT SIDEBAR - TABLE OF CONTENTS
        ====================================== -->

        <aside class="col-lg-3 mb-4">

            <div class="border rounded p-3 sticky-top"
                 style="top:20px;">

                <h5 class="font-weight-bold mb-3"
                    style="color:#373A6D;">
                    Contents
                </h5>

                <ol class="pl-3 mb-0">

                    <li class="mb-2">
                        <a href="#about"
                           class="text-dark">
                            About the book
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="#stories"
                           class="text-dark">
                            The stories
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="#colours"
                           class="text-dark">
                            Seven colours
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="#insight"
                           class="text-dark">
                            PYOR Insight
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="#reading"
                           class="text-dark">
                            A book to read slowly
                        </a>
                    </li>

                </ol>

            </div>

        </aside>


        <!-- =====================================
             MAIN ARTICLE
        ====================================== -->

        <main class="col-lg-6">

            <!-- Introduction -->

            <p class="lead mb-2"
               style="color:#373A6D;">

                What if the story that stays with you is not really
                about the person you were reading about?

            </p>


            <!-- About -->

            <section id="about" class="mb-3">

                <h2 class="h3 font-weight-bold border-bottom pb-2"
                    style="color:#373A6D;">

                    About the book

                </h2>

                <p>
                    <strong>Paint Your Own Rainbow</strong> is a collection
                    of stories about ordinary people at extraordinary
                    turning points — moments of love, loss, choice,
                    courage and change.
                </p>

                <p>
                    You may recognise someone you know in these pages.
                    You may recognise yourself.
                    Or perhaps a particular story will simply make you
                    pause and wonder why it stayed with you.
                </p>

                <p>
                    Because sometimes fiction gives us the distance
                    to see what is closest to us.
                </p>

                <p class="font-weight-bold"
                   style="color:#373A6D;">

                    Read. Pause. Reflect.

                </p>

            </section>


            <!-- Book Introduction -->

            <section class="mb-2">

                <div class="media">

                    <img
                        src="<?= BASE_URL ?>images/book.jpg"
                        alt="Paint Your Own Rainbow book cover"
                        class="img-fluid rounded mr-4"
                        style="width:150px; height:auto;">

                    <div class="media-body">

                        <h2 class="h4 font-weight-bold"
                            style="color:#373A6D;">

                            Paint Your Own Rainbow

                        </h2>

                        <p class="text-muted font-italic">
                            35 stories. Seven colours.
                            Many moments that may feel familiar.
                        </p>

                        <p>
                            Sometimes a story says what advice cannot.
                        </p>

                    </div>

                </div>

                <hr>

                <p>
                    I didn't write this book to tell you how to live
                    your life.
                    I wrote it because sometimes a story can make us
                    see something in ourselves that advice cannot.
                </p>

                <p>
                    The stories in
                    <strong>Paint Your Own Rainbow</strong>
                    are fictional. But the emotions are real.
                </p>

            </section>


            <!-- Stories -->

            <section id="stories" class="mb-2">

                <h2 class="h3 font-weight-bold border-bottom pb-2"
                    style="color:#373A6D;">

                    The stories

                </h2>

                <p>
                    A woman who keeps putting herself last.
                </p>

                <p>
                    A person who knows they need to say something,
                    but keeps putting it off.
                </p>

                <p>
                    A relationship where too much has been left unsaid.
                </p>

                <p>
                    Someone who has spent years trying to live up to
                    an idea of who they should be.
                </p>

                <p>
                    A successful life that doesn't feel quite as
                    fulfilling as it looks.
                </p>

                <p>
                    And the moment when someone finally realises
                    that waiting is also a choice.
                </p>

                <blockquote class="blockquote p-3 my-4"
                            style="
                                border-left:4px solid #F2A03A;
                                background:#f8f8fa;
                            ">

                    <p class="mb-0 font-italic">
                        You may recognise yourself in one of them.
                        You may recognise someone you know.
                        Or perhaps a part of yourself you hadn't
                        thought about for a while.
                    </p>

                </blockquote>

            </section>


            <!-- Seven Colours -->

            <section id="colours" class="mb-2">

                <h2 class="h3 font-weight-bold border-bottom pb-2"
                    style="color:#373A6D;">

                    Seven colours. Seven themes. 35 stories.

                </h2>

                <p>
                    Five stories sit within each colour, bringing together
                    35 different moments, choices and emotions.
                </p>


                <div class="table-responsive">

                    <table class="table table-bordered">

                        <thead style="background:#373A6D; color:#fff;">

                            <tr>
                                <th>Colour</th>
                                <th>Theme</th>
                            </tr>

                        </thead>

                        <tbody>

                            <tr>
                                <td>
                                    <strong style="color:#c94b4b;">
                                        RED
                                    </strong>
                                </td>
                                <td>Courage and Strength</td>
                            </tr>

                            <tr>
                                <td>
                                    <strong style="color:#e88624;">
                                        ORANGE
                                    </strong>
                                </td>
                                <td>Joy and Creativity</td>
                            </tr>

                            <tr>
                                <td>
                                    <strong style="color:#c4a800;">
                                        YELLOW
                                    </strong>
                                </td>
                                <td>Hope and Optimism</td>
                            </tr>

                            <tr>
                                <td>
                                    <strong style="color:#4e8b58;">
                                        GREEN
                                    </strong>
                                </td>
                                <td>Growth and Renewal</td>
                            </tr>

                            <tr>
                                <td>
                                    <strong style="color:#4778a5;">
                                        BLUE
                                    </strong>
                                </td>
                                <td>
                                    Trust and Authentic Communication
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <strong style="color:#4d4c88;">
                                        INDIGO
                                    </strong>
                                </td>
                                <td>Wisdom and Self-Awareness</td>
                            </tr>

                            <tr>
                                <td>
                                    <strong style="color:#76508f;">
                                        VIOLET
                                    </strong>
                                </td>
                                <td>
                                    Purpose, Transformation and Legacy
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </section>


            <!-- PYOR Insight -->

            <section id="insight" class="mb-2">

                <h2 class="h3 font-weight-bold border-bottom pb-2"
                    style="color:#373A6D;">

                    And then comes the pause.

                </h2>

                <p>
                    Every story ends with a
                    <strong>PYOR Insight</strong>
                    and a question.
                </p>

                <p>
                    Not a lesson. Not a test.
                    Just something to sit with.
                </p>

                <p>
                    You may agree with it. You may not.
                    You may answer the question immediately,
                    come back to it later, or simply let it stay with you.
                </p>

                <p class="font-italic">
                    Sometimes a question stays with us long after
                    we have closed the book.
                </p>

            </section>


            <!-- Reading -->

            <section id="reading" class="mb-2">

                <h2 class="h3 font-weight-bold border-bottom pb-2"
                    style="color:#373A6D;">

                    A book to read slowly.

                </h2>

                <p>
                    There is no right way to read it.
                </p>

                <ul>

                    <li>One story before bed.</li>

                    <li>One with your morning coffee.</li>

                    <li>A story chosen at random.</li>

                    <li>
                        A story shared with someone you care about.
                    </li>

                    <li>
                        Or simply a book you return to when you need
                        to look at something differently.
                    </li>

                </ul>

            </section>


            <!-- Closing -->

            <section class="border-top pt-4 mb-2">

                <p>
                    <em>
                        Paint Your Own Rainbow is about the things we feel,
                        the choices we make, the questions we avoid and
                        the moments when we begin to see ourselves a little
                        more clearly.
                    </em>
                </p>

                <p class="font-weight-bold"
                   style="color:#373A6D;">

                    Perhaps one of these stories is waiting to become yours.

                </p>

            </section>

        </main>


        <!-- =====================================
             RIGHT SIDEBAR - BOOK INFO
        ====================================== -->

        <aside class="col-lg-3">

            <div class="border rounded p-3 mb-4">

                <h5 class="text-center font-weight-bold mb-3"
                    style="color:#373A6D;">

                    Paint Your Own Rainbow

                </h5>

                <img
                    src="<?= BASE_URL ?>images/book.jpg"
                    alt="Paint Your Own Rainbow"
                    class="img-fluid d-block mx-auto mb-3"
                    style="max-height:300px;">

                

            </div>


            <!-- Book CTA -->

            <div class="border rounded p-3">

                <h6 class="font-weight-bold"
                    style="color:#373A6D;">

                    Interested in the book?

                </h6>

                <p class="small text-muted mb-1">
                    Explore the book and find out where you can
                    purchase your copy.
                </p>

                <!-- <a href="<?= BASE_URL ?>book.php"
                   class="btn btn-sm btn-block text-white"
                   style="background:#373A6D;">

                    Explore The Book

                </a> -->
                <div class="dropdown mb-2">
                        <button class="btn dropdown-toggle btn btn-sm btn-block text-white"
                            type="button"
                            data-bs-toggle="dropdown"
                            style="background:#373A6D;"
                            aria-expanded="false">
                            Explore The Book
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
                <a href="https://wa.me/?text=https://www.amazon.in/Paint-Your-RAINBOW-Jyoti-Sapra-ebook/dp/B0HJNVXNX7"
                   class="btn btn-sm btn-block text-white"
                   target="_blank"
                   rel="noopener noreferrer"
                   style="background:#373A6D;">

                    <i class="fab fa-whatsapp"></i> Share on WhatsApp

                </a>

            </div>

        </aside>


    </div>

</div>

<?php include "includes/footer.php"; ?>