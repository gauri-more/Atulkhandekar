<?php
// At top:
require('header.php');
 ?>
                <!-- Breadcrumb Section Start -->
                <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner/breadcroumb-img.jpg);">
                    <div class="container">
                        <div class="page-heading">
                            <ul class="breadcrumb-list wow fadeInUp">
                                <li> <i class="fa-solid fa-house"></i><a href="index.php">Home</a></li>
                                <li><i class="fa-solid fa-chevron-right"></i></li>
                                <li>Contact Us</li>
                            </ul>
                            <h1 class="breadcrumb-title split-title">Contact Us</h1>
                        </div>
                    </div>
                </section>
                <!-- Breadcrumb Section End -->

                <!--Contact Section Start -->
                <section class="contact-section fix section-padding">
                    <div class="container container">
                        <div class="contact-top">
                            <div class="section-title text-center">
                                <span class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle justify-content-center"><img src="assets/img/sub-title-1.svg" alt="img">Contact Us</span>
                                <h2 class="split-title">Get In Touch With Atul Khandekar</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="icon-box-items-inners">
                                        <div class="icon">
                                            <img src="assets/img/inner/contact-icon-01.png" alt="img">
                                        </div>
                                        <div class="content">
                                            <p>Call Us</p>
                                            <h3 class="title"><a href="tel:+919922442438">+91 99 22 442438</a></h3>
                                            <p class="mt-2">Landline: <a href="tel:+912024537414">(020) 2453 7414</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="icon-box-items-inners">
                                        <div class="icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <div class="content">
                                            <p>Location</p>
                                            <h3 class="title">96/89 Sadashiv Peth, 'Shilp'</h3>
                                            <p class="mt-2">Rajendra Nagar, Pune 411030, Maharashtra, India</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="icon-box-items-inners">
                                        <div class="icon">
                                            <img src="assets/img/inner/contact-icon-03.png" alt="img">
                                        </div>
                                        <div class="content">
                                            <p>Mail Us</p>
                                            <h3 class="title">
                                                <a href="mailto:atulrkhandekar@gmail.com" class="link">atulrkhandekar@gmail.com</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-middle-items">
                            <div class="row g-4">
                                <div class="col-lg-6 wow fadeInUp">
                                    <form action="mail-handler.php" id="contact-form" class="contact-form-box">
                                        <h3 class="split-title">Get In Touch</h3>
                                            <div class="row g-4 align-items-center justify-content-center">
                                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                                <div class="form-clt">
                                                    <input type="text" name="name" id="name" placeholder="Your Name" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                                <div class="form-clt">
                                                    <input type="email" name="email" id="email2" placeholder="Email Address" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                                <div class="form-clt">
                                                    <input type="text" name="phone" id="phone" placeholder="Phone number">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                                                <div class="form-clt">
                                                    <input type="text" name="subject" id="subject" placeholder="Select Subject">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".8s">
                                                <div class="form-clt">
                                                    <textarea name="message" id="message" placeholder="Write a message..." required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".9s">
                                                <div class="contact-button">
                                                    <button type="submit" class="theme-btn">
                                                        <span class="btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                        <span class="btn-title">Send Message</span>
                                                        <span class="btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                    </button>
                                                </div>
                                                <p class="form-message mt-3"></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="google-map-items">
                                        <iframe src="https://www.google.com/maps?q=96%2F89+Sadashiv+Peth%2C+Rajendra+Nagar%2C+Pune%2C+Maharashtra+411030%2C+India&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Contact Section End -->

      <?php
// At bottom:
require('footer.php');
 ?>
