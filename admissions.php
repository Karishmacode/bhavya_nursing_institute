<?php
$site_title = "Bhavya Shree Institute Of Nursing |In Bihar";
include "include/header.php";
?>

<style>
 
 /* Default and active state for form controls */
 .form-control {
        border: 1px solid #ced4da!important; 
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out!important; 
        padding: 8px !important;
        font-size: 16px !important; 
    }
    /* Border color and shadow on focus */
    .form-control:focus {
        border-color: #2eca7f!important;
     
    }
    .applicant-from .form-select:focus{
        border-color: #2eca7f!important;

    }
</style>

<!-- banner-area-start -->

<div class="section-banner bg-15">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">Admission Form</h2>
                        <p data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">Complete your admission process seamlessly with our user-friendly online admission form.</p>
                    </div>
                </div>
            </div>
        </div>

<!-- banner-area-end -->


<!-- admission-area-start -->


<div class="academics-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="academics-left">
                            <div class="ac-category">
                                <ul>
                                   
                                    <li><a class="active">Courses</a></li>
                                    <li><a href="best-anm-nursing-course-patna-bhavya-shree-institute-of-nursing">ANM</a></li>
                                    <li><a href="best-gnm-nursing-course-in-bihar-bhavya-shree-institute-of-nursing">GNM</a></li>
                                    <li><a href="best-bsc-nursing-course-patna-bhavya-shree-institute-of-nursing">B.Sc Nursing</a></li>
                                 
                                </ul>
                            </div>
                            <div class="ac-contact">
                               
                                <a href="contact-us">Contact Us</a>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ac-overview">
                            <div class="pera-dec">
                                <div class="applicant-from">
                                    <form id="contactForm">
                                        <h3>Applicant Details</h3>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="name">First Name</label>
                                                    <input type="text" name="name" class="form-control" id="name" required="" data-error="Please enter your name" placeholder="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
    
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Last Name</label>
                                                    <input type="text" name="name" class="form-control" id="name2" required="" data-error="Please enter your name" placeholder="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                                
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label for="name">Email Address</label>
                                                    <input type="email" name="email" class="form-control" id="email" required="" data-error="Please enter your email" placeholder="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
    
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Zip Code</label>
                                                    <input type="text" name="zip_code" class="form-control" id="zip_code" required="" data-error="Please enter your zip code" placeholder="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Date of Birth</label>
                                                    <input type="text" name="date_birth" class="form-control" id="date_birth" required="" data-error="Please enter your date of birth" placeholder="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Phone Number</label>
                                                    <input type="text" name="phone_number" class="form-control" id="phone_number" required="" data-error="Please enter your phone number" placeholder="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
        
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Course Type</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected="">Select</option>
                                                        <option value="1">ANM</option>
                                                        <option value="2">GNM</option>
                                                        <option value="3">BSC. NURSING</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <h3>Education Records &amp; Achievements</h3>
    
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="schoolr">School</label>
                                                    <input type="text" name="school" class="form-control" id="schoolr" required="" data-error="Please enter your phone school" placeholder="">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="completion">Year of completion</label>
                                                    <input type="text" name="completion" class="form-control" id="completion" required="" data-error="Please enter your Year of completion" placeholder="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="qualification">Highest qualification</label>
                                                    <input type="text" name="qualification" class="form-control" id="qualification1" required="" data-error="Please enter your highest qualification" placeholder="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                           

                                            <h3>Documentation</h3>

                                            <div class="col-lg-12 col-md-6">
                                                <label for="birthDocumentation" class="form-label">Upload passport or birth documentation</label>
                                                <input class="form-control" type="file" id="birthDocumentation" multiple="">
                                            </div>

                                            <h3>Declaration</h3>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label for="qualification">Application full name</label>
                                                    <input type="text" name="qualification" class="form-control" id="qualification" required="" data-error="Please enter your highest qualification" placeholder="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label for="message">Additional Information</label>
                                                    <textarea name="message" id="message" class="form-control" cols="30" rows="6" required="" data-error="Please enter your message" placeholder=""></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <p class="form-cookies-consent">
                                                <input type="checkbox" value="yes" name="wp-cookies-consent" id="wp-cookies-consent">
                                                <label for="wp-cookies-consent">By submitting this form, you agree to the Clgun University privacy notice.</label>
                                            </p>
        
                                            <div class="col-lg-12 col-md-12">
                                                <button type="submit" class="default-btn">Submit Application</button>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<!-- admission-area-end -->








<?php
include __DIR__ . '/include/footer.php';
?>
