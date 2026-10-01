<?php
require_once __DIR__ . "/config/config.php";

include "includes/header.php";

?>
<!-- Contact Hero -->
<section class="site-blocks-cover overflow-hidden" style="min-height: 420px;">
    <div class="container">
        <div class="row align-items-center" style="min-height: 420px;">
            <div class="col-lg-10 ">

                <h1 style="color:#fff; font-size:52px; font-weight:bold;">
                    Let's talk.
                </h1>

                <p class="text-white lead mt-3">
                    You may know exactly what you want to work on.
                    Or you may simply know that something needs attention. Either is fine.
                </p>

                <p class="text-white">
                    Send me a note and tell me a little
                    about what is on your mind.
                </p>

            </div>
        </div>
    </div>
</section>


<!-- Contact Section -->
<div class="site-section bg-light" id="contact-section">

    <div class="container">

        <!-- Heading -->
        <div class="row justify-content-center text-center mb-5">

            <div class="col-lg-8">

                <h2 style="color:#373A6D;" class="approach-eyebrow">
                    REACH OUT
                </h2>

                <div class="mx-auto"
                     style="width:60px; height:3px; background:#F2A03A;">
                </div>

                <p class="mt-4">
                    Send me a note and tell me a little about what is on your mind.
                </p>

            </div>

        </div>


        <div class="row">
            
            <!-- Contact Information -->
            <div class="col-lg-5 mb-5 mb-lg-0">
                
                <div class="pr-lg-4">
                      
                    <!-- <img src="images/call.jpg" width="350px" height="400px"/> -->

                    <!-- <p style="text-align:justify;">
                        Sometimes you know exactly what you want to work on.
                        Sometimes you simply know that something isn't quite
                        right.
                    </p>

                    <p style="text-align:justify;">
                        Either way, a conversation can be a useful place to
                        start. Tell me a little about what is on your mind
                        and we can take it from there.
                    </p> -->


                    <!-- Address -->
                    <div class="d-flex mt-4">

                        <div class="mr-3">
                            <i class="bi bi-geo-alt"
                               style="font-size:25px; color:#F2A03A;">
                            </i>
                        </div>

                        <div>
                            <h5 style="color:#373A6D;">Location</h5>
                            <p class="mb-0">
                                India | Singapore
                            </p>
                        </div>

                    </div>


                    <!-- Phone -->
                    <div class="d-flex mt-4">

                        <div class="mr-3">
                            <i class="bi bi-telephone"
                               style="font-size:25px; color:#F2A03A;">
                            </i>
                        </div>

                        <div>
                            <h5 style="color:#373A6D;">Phone</h5>

                            <p class="mb-1">
                                <a href="tel:+6582921920">
                                    +65 82921920
                                </a>
                                <small>(Singapore)</small>
                            </p>

                            <p class="mb-0">
                                <a href="tel:+919871404023">
                                    +91 9871404023
                                </a>
                                <small>(India)</small>
                            </p>

                        </div>

                    </div>


                    <!-- Email -->
                    <div class="d-flex mt-4">

                        <div class="mr-3">
                            <i class="bi bi-envelope"
                               style="font-size:25px; color:#F2A03A;">
                            </i>
                        </div>

                        <div>
                            <h5 style="color:#373A6D;">Email</h5>

                            <p class="mb-0">
                                <a href="mailto:jyoti@pyorcoaching.com">
                                    jyoti@pyorcoaching.com
                                </a>
                            </p>

                        </div>
                        
                    </div>
                    
                </div>

            </div>


            <!-- Contact Form -->
            <div class="col-lg-7">

                <div class="bg-white p-4 p-md-5 shadow-sm">

                    <h3 style="color:#373A6D;" class="mb-4">
                        Send me a message
                    </h3>

                    <form id="ContactForm" action="submit-message.php" method="POST" novalidate>

                        <!-- Name -->
                        <div class="form-group">

                            <label for="contact_name">
                                Name
                            </label>

                            <input
                                type="text"
                                name="contact_name"
                                id="contact_name"
                                class="form-control"
                                placeholder="Your name"
                                required
                            >
                            <span class="text-danger" id="contact_name_err"></span>

                        </div>


                        <!-- Email -->
                        <div class="form-group">

                            <label for="contact_email">
                                Email
                            </label>

                            <input
                                type="email"
                                name="contact_email"
                                id="contact_email"
                                class="form-control"
                                placeholder="Your email address"
                                required
                            >
                            <span class="text-danger" id="contact_email_err"></span>

                        </div>


                        <!-- Subject -->
                        <div class="form-group">

                            <label for="contact_subject">
                                What would you like to talk about?
                            </label>

                            <select
                                name="contact_subject"
                                id="contact_subject"
                                class="form-control"
                                required
                            >

                                <option value="">
                                    Please select
                                </option>

                                <option value="Executive Coaching">
                                    Executive Coaching
                                </option>

                                <option value="Leadership Coaching">
                                    Leadership Coaching
                                </option>

                                <option value="Life Coaching">
                                    Life Coaching
                                </option>

                                <option value="Employee Assistance Program">
                                    Employee Assistance Program
                                </option>

                            </select>
                            <span class="text-danger" id="contact_subject_err"></span>

                        </div>


                        <!-- Message -->
                        <div class="form-group">

                            <label for="contact_comment">
                                Message
                            </label>

                            <textarea
                                name="contact_comment"
                                id="contact_comment"
                                class="form-control"
                                rows="4"
                                placeholder="Tell me a little about what is on your mind."
                                required
                            ></textarea>
                            <span class="text-danger" id="contact_comment_err"></span>

                        </div>


                        <!-- Submit -->
                        <div class="form-group mt-4 mb-0">

                            <button
                                type="submit"
                                name="contact_submit"
                                id="contact_submit"
                                class="btn text-white py-2 px-5"
                                style="background:#373A6D; border:none;"
                            >
                                Send Message
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>


<div class="position-fixed" style="top: 1rem; right: 1rem; z-index: 2100;">
    <div class="toast" id="formToast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000">
        <div class="toast-header">
            <strong class="mr-auto" id="toastTitle"></strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body" id="toastMessage"></div>
    </div>
</div>



<?php include_once("includes/footer.php"); ?>