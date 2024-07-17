<?php
$site_title = "Top ANM Institutes in Patna | Bihar";
include "include/header.php";
?>



  



<style>
         .syllabus-section {
            display: none;
        }
        #first-year {
            display: block;
        }
        .filter-buttons {
            margin-bottom: 20px;
        }
        .lists {
            list-style: none;
            padding: 0;
        }
        .lists li {
            display: flex;
            align-items: center;
            margin-bottom: 18px;
        }
    .lists .icon {
         margin-right: 10px;
         display: block;
         height: 30px;
    width: 30px;
    text-align: center;
   

        }
        .bx-check:before {
   
   color: var(--mainColor);
   font-size: 23px;
   position: relative;
   margin-right: 20px;
}
/* filter button */

.filter-buttons {
        display: flex;
        gap: 10px;
        margin-bottom: 20px;
    }
    .filter-buttons button {
        padding: 10px 20px;
        border: none;
        background-color: #f0f0f0;
        color: #333;
        cursor: pointer;
        transition: background-color 0.3s ease, color 0.3s ease;
        border-radius: 5px;
        font-size: 16px;
    }
    .filter-buttons button:hover {
        background-color: #ddd;
        color: #000;
    }
    .filter-buttons .active {
        background-color: #28a745;
        color: #fff;
    }
    .courses-details .content .content-pra .title h1 {
    font-size: 25px;
    font-family: 'Lexend', sans-serif;
}
        
    </style>


<!-- Start Section Banner Area -->
<div class="section-banner bg-7">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">ANM course</h2>
                        <p data-aos="fade-up" data-aos-delay="200">Enroll in the ANM Nursing Course at Bhavya Shree Institute Of Nursing, Patna. Gain essential skills and knowledge to start your nursing career. Apply now!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Banner Area -->

        <!-- Start Courses Details Area -->
        <div class="courses-details-section pt-100 pb-70"style="padding-bottom:unset;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="courses-details">
                           
                            <div class="content">
                                <div class="content-pra">
                                    <div class="title">
                                        <h1>Top ANM Nursing Colleges in Bihar | Patna</h1>
                                    </div>
                                    <p>The ANM course at Bhavya Shree Institute Of Nursing emphasizes nursing and midwifery skills for maternal and child health, family health promotion, and community-based care. Graduates gain hands-on experience to deliver basic healthcare, assist in childbirth, and educate communities.</p>
                                    <p>ANM graduates from our institute are prepared to make a significant impact by providing direct healthcare in diverse settings, particularly benefiting rural and underserved populations.</p>

                                    <div class="tag">
                                       <span>Duration:</span>
                                       <ul>
                                        <li><a href="#">2 years</a></li>
                                       </ul>
                                    </div>
                                </div>
                                <div class="content-pra">
                                    <div class="title">
                                        <h3>ANM Nursing Course Eligibility Criteria</h3>
                                    </div>
                                    <p>The eligibility criteria for the ANM (Auxiliary Nurse Midwifery) course at Bhavya Shree Institute Of Nursing typically include:</p>
                                    <ul class="lists">
                                        <li>
                                            <div class="icon">
                                                <i class='bx bx-check'></i>
                                            </div>
                                            <p>Education: Completion of 10+2 with a minimum of 50% marks.</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class='bx bx-check'></i>
                                            </div>
                                            <p>Age: Generally, at least 17 years old.</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class='bx bx-check'></i>
                                            </div>
                                            <p>Documentation: Proof of nationality and medical fitness certificate.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content-pra">
                                    <div class="title">
                                        <h3>ANM Nursing Course Admission Process</h3>
                                    </div>
                                    <ul class="lists">
                                        <li>
                                            <div class="icon">
                                                <i class='bx bx-check'></i>
                                            </div>
                                            <p>Valid identification document confirming citizenship.</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class='bx bx-check'></i>
                                            </div>
                                            <p>Certification of physical fitness for nursing practice.</p>
                                        </li>
                                       
                                    </ul>
                                </div>

                                <div class="content-pra">
                                    <div class="title">
                                        <h3>Required Documents</h3>
                                    </div>
                                    <ul class="lists">
                                        <li>
                                            <div class="icon">
                                                <i class='bx bx-check'></i>
                                            </div>
                                            <p>Proof of completion of higher secondary education with a minimum of 50% marks.</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class='bx bx-check'></i>
                                            </div>
                                            <p>Document verifying date of birth.</p>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <i class='bx bx-check'></i>
                                            </div>
                                            <p>Valid identification confirming citizenship (e.g., Aadhar card, passport).</p>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <i class='bx bx-check'></i>
                                            </div>
                                            <p>Certification of physical fitness for nursing practice.</p>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <i class='bx bx-check'></i>
                                            </div>
                                            <p> Recent passport-sized photographs for application forms and identification purposes.</p>
                                        </li>

                                      
                                    </ul>
                                </div>


                                <!-- try -->


                                <div class="instructor-card">
    <div class="title">
        <h3>ANM Nursing Course Syllabus</h3>
    </div>
    
    <div class="filter-buttons">
        <button onclick="showSyllabus('first-year')">1st Year</button>
        <button onclick="showSyllabus('second-year')">2nd Year</button>
    </div>

    <div id="first-year" class="syllabus-section">
        <ul class="lists">
            <li><div class="icon"style="border-radius: 30px; border: 1px solid #ddd;"><i class='bx bx-check'></i></div> Anatomy and Physiology</li>
            <li><div class="icon"style="border-radius: 30px; border: 1px solid #ddd;"><i class='bx bx-check'></i></div> Microbiology</li>
            <li><div class="icon"style="border-radius: 30px; border: 1px solid #ddd;"><i class='bx bx-check'></i></div> Psychology</li>
            <li><div class="icon"style="border-radius: 30px; border: 1px solid #ddd;"><i class='bx bx-check'></i></div> Fundamentals of Nursing</li>
            <li><div class="icon"style="border-radius: 30px; border: 1px solid #ddd;"><i class='bx bx-check'></i></div> First Aid</li>
            <li><div class="icon"style="border-radius: 30px; border: 1px solid #ddd;"><i class='bx bx-check'></i></div> Community Health Nursing</li>
            <li><div class="icon"style="border-radius: 30px; border: 1px solid #ddd;"><i class='bx bx-check'></i></div> Environmental Hygiene</li>
            <li><div class="icon"style="border-radius: 30px; border: 1px solid #ddd;"><i class='bx bx-check'></i></div> Health Education and Communication Skills</li>
            <li><div class="icon"style="border-radius: 30px; border: 1px solid #ddd;"><i class='bx bx-check'></i></div> Nutritional and Biochemistry</li>
            <li><div class="icon"style="border-radius: 30px; border: 1px solid #ddd;"><i class='bx bx-check'></i></div> English</li>
        </ul>
    </div>

    <div id="second-year" class="syllabus-section">
        <ul class="lists">
            <li><div class="icon"style="border-radius: 30px; border: 1px solid #ddd;"><i class='bx bx-check'></i></div> Medical-Surgical Nursing I (including Pharmacology)</li>
            <li><div class="icon"style="border-radius: 30px; border: 1px solid #ddd;"><i class='bx bx-check'></i></div> Medical-Surgical Nursing II (Specialties)</li>
            <li><div class="icon"style="border-radius: 30px; border: 1px solid #ddd;"><i class='bx bx-check'></i></div> Mental Health and Psychiatric Nursing</li>
            <li><div class="icon"style="border-radius: 30px; border: 1px solid #ddd;"><i class='bx bx-check'></i></div> Computer Education</li>
        </ul>
    </div>
</div>


                          
 </div>
                        </div>
                    </div>
                    <!-- end -->
                    
                    <div class="col-lg-4">
                        <div class="course-widget-area">
                            <div class="image">
                                <img src="assets/img/courses/anm-course.png" alt="image">
                               
                            </div>
                            <div class="content">
                                <div class="pricing">
                                    <h4>Courses</h4>
                                </div>
                                <ul>
                                    <li>
                                        <span>Course</span>
                                        
                                        <span>Duration</span>
                                    </li>
                                    <li>
                                 
                                    <p><a href="best-anm-nursing-course-patna-bhavya-shree-institute-of-nursing">ANM Nursing</a></p>
                                        <p>2 years</p>
                                    </li>
                                    <li>
                                        <P><a href="best-gnm-nursing-course-in-bihar-bhavya-shree-institute-of-nursing">GNM Nursing</a></P>
                                        <p> 3 years</p>
                                    </li>
                                    <li>
                                        <P><a href="best-bsc-nursing-course-patna-bhavya-shree-institute-of-nursing">B.SC. Nursing</a></P>
                                        <p>4 years</p>
                                    </li>
                                </ul>
                                <a class="enroll-btn" href="admissions">Enroll Now</a>
                                <!-- <a class="wish-btn" href="#">Add to wishlist</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Courses Details Area -->


        <script>
        function showSyllabus(year) {
            document.querySelectorAll('.syllabus-section').forEach(section => {
                section.style.display = 'none';
            });
            document.getElementById(year).style.display = 'block';
        }
    </script>




<?php
include __DIR__ . '/include/footer.php';
?>
