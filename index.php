<?php
$site_title = "Top Nursing College in Bihar | Bhavya Shree Institute Of Nursing";
include "include/header.php";
?>

<style>
    .notice-container {
        position: relative;
        bottom: 0;
        left: 0;
        right: 0;
        height: auto;
        /* Adjust height as needed */
        background-color: #2eca7f;
        display: flex;
        align-items: center;
        justify-content: left;
        z-index: 1;
        /* Ensure notice container is above slider content */
    }

    .notice-button {
        background-color: #ffcc00;
        border: none;
        color: black;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 16px;
        margin-right: 0px;
        position: relative;
        /* Ensure button is above animation */
        z-index: 2;
        /* Ensure button is above animation */
    }

    .notice {
        white-space: nowrap;
        color: #fff;
        font-size: 18px;
        line-height: 40px;
        padding: 10px;
        /* Adjust padding as needed */
        position: relative;
        /* Ensure animation is below button */
        z-index: 0;
        /* Ensure animation is below button */
        animation: notice-animation 20s linear infinite;
        font-weight: 800;
    }

    @keyframes notice-animation {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    .slider-banner-area {
        position: relative;
        z-index: 0;
    }

    .slider-content {
        position: relative;
    }

    .academics-item a i {
 
 right: -49px;

}
</style>


<!-- Start Clgun Slider Banner Area -->
<!-- Start Clgun Slider Banner Area -->
<div class="slider-banner-area">
    <div class="slider-courser owl-carousel owl-theme">

        <div class="slider-content slider-bg-1">
            <div class="content">
                <div class="text">
                    <div class="container">
                        <h1 data-aos="fade-up" data-aos-delay="100" style="font-size:40px;">Welcome to Bhavya Shree Institute Of Nursing</h1>
                    </div>
                    <hr>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <p data-aos="fade-up" data-aos-delay="100">"Enroll in ANM, GNM, and B.Sc Nursing at Bhavya Shree Institute of Nursing."</p>
                        </div>
                        <div class="col-lg-5">
                            <div class="short-info">

                                <a class="default-btn" href="admissions" data-aos="fade-zoom-in" data-aos-delay="100">Admissions
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        


    </div>
</div>

<!-- Notice added here -->
<div class="notice-container">
    <button class="notice-button">Notice</button>
    <div class="notice">Welcome to Bhavya Shree Institute Of Nursing, Bhagwat Nagar, Kumharar, Opp. Samarat Hospital Patna - 800026 (Bihar)</div>
</div>
<!-- End Clgun Slider Banner Area -->




<!-- Start Chairman Area -->


<div class="about-alumni bg-color-1 ptb-100">
    <div class="container-fluid p-0">
        <div class="row g-0 align-items-center">
            <div class="col-lg-7">
                <div class="content aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <i class="bx bxs-graduation"></i>
                        <p>Chairman</p>
                    </div>
                    <h2>Message from the Chairman</h2>
                    <p>Welcome to Bhavya Shree Institute Of Nursing. As Chairman, I am proud to lead an institution dedicated to excellence in nursing education. Our mission is to cultivate compassionate, skilled, and innovative nursing professionals ready to excel in the ever-evolving healthcare industry. At Bhavya Shree, we go beyond traditional education, offering a holistic and immersive learning experience that prepares our students for real-world challenges.</p>
                    <p>Our state-of-the-art facilities, experienced faculty, and comprehensive curriculum ensure our graduates are well-equipped with the knowledge and practical skills needed for success. We are committed to fostering an environment that encourages critical thinking, ethical practice, and lifelong learning. Join us at Bhavya Shree Institute Of Nursing and become part of a vibrant community dedicated to shaping the future of healthcare.</p>
                    <a class="default-btn" href="charirman">Read More</a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="image aos-init aos-animate" data-aos="fade-zoom-in" data-aos-delay="100">
                </div>
            </div>
        </div>
    </div>
</div>



<!-- End  Chairman  Area -->











<!-- Start Academics Area -->
<div class="academics-area ptb-100">
    <div class="container">
        <div class="section-title" data-aos="fade-up" data-aos-delay="100">
            <div class="sub-title">
                <i class='bx bxs-graduation'></i>
                <p>Courses</p>
            </div>
            <h2 class="title-anim">Where Excellence Meets Opportunity</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="academics-item" data-aos="fade-up" data-aos-delay="100">
                    <img src="assets/img/icon/education-1.png" alt="icon">
                    <h4>ANM</h4>
                    <p> Gain essential skills in nursing, maternal and child health, and community care.</p>
                    <a href="best-anm-nursing-course-patna-bhavya-shree-institute-of-nursing">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="academics-item" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/img/icon/education-2.png" alt="icon">
                    <h4>GNM</h4>
                    <p>Our practical approach prepares you for diverse healthcare roles. Begin your nursing career with us now.</p>
                    <a href="best-gnm-nursing-course-in-bihar-bhavya-shree-institute-of-nursing">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                    <img src="assets/img/icon/education-3.png" alt="icon">
                    <h4>B.Sc Nursing</h4>
                    <p>Our comprehensive curriculum and hands-on experience prepare you for a successful nursing career.</p>
                    <a href="best-bsc-nursing-course-patna-bhavya-shree-institute-of-nursing">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Academics Area -->

<!-- Start About Us Area -->
<div class="about-us-area bg-color-1 ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="text-content" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <i class='bx bxs-graduation'></i>
                        <p>About Our Institute</p>
                    </div>
                    <h2 class="title-anim">Where Knowledge Meets Innovation</h2>
                    <p class="title-anim">Welcome to Bhavya Shree Institute Of Nursing, a premier institution dedicated to shaping compassionate healthcare professionals. Located in Patna, we offer specialized training in nursing education with a commitment to excellence.</p>
                    <a class="default-btn" href="about">Schedule A Tour</a>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="row justify-content-end">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="content" data-aos="fade-right" data-aos-delay="100">
                            <img src="assets\img\all-img\about-new.png" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="notice-content" data-aos="fade-right" data-aos-delay="200">
                            <i class='bx bxs-quote-left'></i>
                            <h4 class="title-anim">Knowledge Beyond Boundaries</h4>
                            <p class="title-anim">At Bhavya Shree Institute Of Nursing, we go beyond traditional textbook learning by offering a holistic education that combines theoretical knowledge with practical experience.</p>

                            <!-- <div class="author-info">
                                            <span>John Michael</span>
                                            <h5>John Michael</h5>
                                            <p>Founder</p>
                                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Us Area -->






<!-- Start Faculty Area -->
<div class="faculty-area-2 ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="heading aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <h2>Apply for Admission</h2>
                </div>
            </div>
            <div class="col-lg-7 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                    <p>Ready to take the next step towards a rewarding career in nursing? Apply for admission to Bhavya Shree Institute Of Nursing today! Our streamlined admission process is designed to help you start your journey with ease.</p>
                </div>
            </div>
            <div class="col-lg-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                <div class="button">
                    <a class="default-btn" href="admissions">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Faculty Area -->





<!-- Start Gallery Area -->
<div class="campus-area ptb-100">
    <div class="container-fluaid">
        <div class="section-title" data-aos="fade-up" data-aos-delay="100">
            <div class="sub-title">
                <i class='bx bxs-graduation'></i>
                <p>Our Gallery</p>
            </div>
            <h2 class="title-anim">One University, Many Places</h2>
        </div>

        <div class="campus-slider owl-carousel owl-theme">
            <div class="campus-card" data-aos="fade-up" data-aos-delay="100">
                <img src="assets/img/all-img/gal-1.png" alt="image">
                <div class="content">
                    <h2 class="title-anim">Events</h2>
                    <a class="default-btn" href="gallery"> Campus</a>
                </div>
            </div>
            <div class="campus-card" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/all-img/gal-2.png" alt="image">
                <div class="content">
                    <h2 class="title-anim">Teaching</h2>
                    <a class="default-btn" href="gallery"> Campus</a>
                </div>
            </div>
            <div class="campus-card" data-aos="fade-up" data-aos-delay="300">
                <img src="assets/img/all-img/gal-3.png" alt="image">
                <div class="content">
                    <h2 class="title-anim">Teaching</h2>
                    <a class="default-btn" href="gallery"> Campus</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Gallery Area -->

<!-- Start Events Area -->

<div class="features-content-2 ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="sub-title">
                    <p>Academics</p>
                </div>
                <div class="content">
                    <h2>Our students create a vibrant and inclusive community</h2>
                    <div class="item">
                        <div class="item-content">
                            <div class="icon">
                                <img src="assets/img/icon/features-icon-2.png" alt="image">
                            </div>
                            <h3>Comprehensive Nursing Curriculum</h3>
                            <p>Explore our structured nursing programs at Bhavya Shree Institute Of Nursing, encompassing essential nursing principles, hands-on clinical practice, and specialized healthcare areas. Prepare for a diverse and rewarding career in healthcare with our comprehensive curriculum.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-content">
                            <div class="icon">
                                <img src="assets/img/icon/features-icon-1.png" alt="image">
                            </div>
                            <h3>Hands-On Clinical Training</h3>
                            <p>Gain valuable practical experience through extensive clinical placements and state-of-the-art simulation labs at Bhavya Shree Institute Of Nursing. Our hands-on training prepares you effectively for real-world healthcare challenges.</p>
                        </div>
                    </div>
                    <a class="default-btn" href="admissions">More on Admission</a>

                    <div class="arrow-icon">
                        <img src="assets/img/icon/shape-1.png" alt="image">
                    </div>
                </div>
            </div>
            <div class="col-lg-5">

                <div class="academic-item aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="image">
                        <img src="assets\img\all-img\academics-t.png" alt="image">

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>





<!-- End Events Area -->



<!-- Start Subscribe Area -->
<div class="subscribe-area ptb-100">
    <div class="container">
        <div class="section-title" data-aos="fade-up" data-aos-delay="100">
            <div class="sub-title">
                <i class='bx bxs-graduation'></i>
                <p>Get in touch</p>
            </div>
            <h2 class="title-anim">Start your journey towards a rewarding career in healthcare!</h2>
        </div>

        <div class="subscribe-btn text-center" data-aos="fade-up" data-aos-delay="200">
            <a class="default-btn" href="contact-us.php">Contact Us</a>
        </div>
    </div>
</div>
<!-- End Subscribe Area -->




<?php
include __DIR__ . '/include/footer.php';
?>