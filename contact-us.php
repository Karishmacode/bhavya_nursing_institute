<?php
$site_title = "Bhavya Shree Institute Of Nursing";
include "include/header.php";
?>

        <!-- Start Section Banner Area -->
        <div class="section-banner bg-4">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Contact Us</h2>
                        <p data-aos="fade-up" data-aos-delay="200">We’re here to help! Whether you have questions about our nursing programs or need assistance, reach out to us.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Banner Area -->
        
        <!-- Start Contact  Area-->
        <div class="contact-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact-content">
                            <div class="header-content">
                                <h2>We’d Love To Hear From You</h2>
                                <p>At Bhavya Shree Institute Of Nursing, we value your interest and inquiries. Whether you’re a prospective student looking for more information about our ANM, GNM, or B.Sc Nursing courses, a current student needing assistance, or someone interested in learning more about our institution, we are here to help.</p>
                                <p>For verifications, please email <a href="#">bsinpatna@gmail.com</a></p>
                            </div>

                            <div class="contact-form">
                                <form id="contactForm">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="name">First Name</label>
                                                <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="name">Last Name</label>
                                                <input type="text" name="name" class="form-control" id="name2" required data-error="Please enter your name" placeholder="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                            
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="name">Email</label>
                                                <input type="email" name="email" class="form-control" id="email" required data-error="Please enter your email" placeholder="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="name">Phone</label>
                                                <input type="text" name="phone_number" class="form-control" id="phone_number" required data-error="Please enter your phone number" placeholder="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
    
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="name">Inquiry Type</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Admission</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="name">Inquiry</label>
                                                <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder=""></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
    
                                        <div class="col-lg-12 col-md-12">
                                            <button type="submit" class="default-btn">Submit Now</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-info">

                         <!-- Start Map Area -->
                        <div id="map" class="map-pd">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7196.8983738782235!2d85.179464!3d25.589986!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed58a8af47847f%3A0xec13de43e455596e!2sBhavya%20Shree%20Institute!5e0!3m2!1sen!2sus!4v1720069124045!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!-- End Map Area -->

                        <div class="info-details">
                            <ul>
                                <li><i class='bx bxs-phone-call'></i> <a href="tel:+8495160885">0-99559-97476</a></li>
                                <li><i class='bx bxs-phone-call'></i> <a href="tel:+18554750885">0-99559-97479</a></li>
                                <li><i class='bx bxs-phone-call'></i><a href="tel:+18554750885">  0-99559-97484</a></li>
                                <li><i class='bx bxs-map'></i> Bhavya Shree Institute of Nursing (A.N.M. Training School) Bhagwat Nagar, Kumharar, Opp. Samarat Hospital Patna - 800026 (Bihar)</li>
                                <li><i class='bx bxs-envelope'></i><a class="info-mail" href="#">bsinpatna@gmail.com</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Contact Area-->

        <?php
include __DIR__ . '/include/footer.php';
?>
