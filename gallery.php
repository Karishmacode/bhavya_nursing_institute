<?php
$site_title = "Bhavya Shree Institute Of Nursing";
include "include/header.php";
?>


<style>
    .filter-btn {
        border: none;
        background-color: transparent;
        color: gray;
        padding: 10px 20px;
        cursor: pointer;
        font-weight: bold;
    }

    .filter-btn.active, .filter-btn:hover {
        color: #2eca7f;
        
    }

    .filter-btn:focus {
        outline: none;
    }

  
</style>

<!-- Start Section Banner Area -->
<div class="section-banner bg-4">
    <div class="container">
        <div class="banner-spacing">
            <div class="section-info">
                <h2 data-aos="fade-up" data-aos-delay="100">Gallery</h2>
                <p data-aos="fade-up" data-aos-delay="200">We’re here to help! Whether you have questions about our nursing programs or need assistance, reach out to us.</p>
            </div>
        </div>
    </div>
</div>
<!-- End Section Banner Area -->

<!-- Filters -->
<div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <button class="btn  filter-btn" data-filter="all">All</button>
            <!-- <button class="btn  filter-btn" data-filter="facility">Facility Member</button> -->
            <button class="btn filter-btn" data-filter="block">Teaching Block</button>
            <button class="btn  filter-btn" data-filter="teacher">Teachers</button>
            <button class="btn filter-btn" data-filter="hostel">Girl Hostel</button>
            <button class="btn filter-btn" data-filter="event">Event</button>
        </div>
    </div>
</div>
<!-- End Filters -->

<!-- Image Gallery -->
<div class="container mt-3 pt-3">
    <div class="row">
        <div class="col-md-4 mb-4 gallery-item" data-category="block">
            <div class="gallery">
                <img src="assets/img/gallery/tech-1.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/tech-1.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="teacher">
            <div class="gallery">
                <img src="assets/img/gallery/teacher-1.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/teacher-1.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="hostel">
            <div class="gallery">
                <img src="assets/img/gallery/hostel-1.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/hostel-1.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="event">
            <div class="gallery">
                <img src="assets/img/gallery/event-1.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/event-1.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="block">
            <div class="gallery">
                <img src="assets/img/gallery/tech-2.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/tech-2.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="teacher">
            <div class="gallery">
                <img src="assets/img/gallery/teacher-2.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/teacher-2.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="hostel">
            <div class="gallery">
                <img src="assets/img/gallery/hostel-2.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/hostel-2.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="event">
            <div class="gallery">
                <img src="assets/img/gallery/event-2.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/event-2.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="block">
            <div class="gallery">
                <img src="assets/img/gallery/tech-3.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/tech-3.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="teacher">
            <div class="gallery">
                <img src="assets/img/gallery/teacher-3.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/teacher-3.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="hostel">
            <div class="gallery">
                <img src="assets/img/gallery/hostel-3.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/hostel-3.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="event">
            <div class="gallery">
                <img src="assets/img/gallery/event-3.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/event-3.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="event">
            <div class="gallery">
                <img src="assets/img/gallery/event-4.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/event-4.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="block">
            <div class="gallery">
                <img src="assets/img/gallery/tech-4.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/tech-4.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="teacher">
            <div class="gallery">
                <img src="assets/img/gallery/teacher-4.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/teacher-4.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="hostel">
            <div class="gallery">
                <img src="assets/img/gallery/hostel-4.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/hostel-4.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="event">
            <div class="gallery">
                <img src="assets/img/gallery/event-5.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/event-5.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="block">
            <div class="gallery">
                <img src="assets/img/gallery/tech-5.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/tech-5.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="teacher">
            <div class="gallery">
                <img src="assets/img/gallery/teacher-5.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/teacher-5.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="event">
            <div class="gallery">
                <img src="assets/img/gallery/event-6.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/event-6.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="teacher">
            <div class="gallery">
                <img src="assets/img/gallery/event-7.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/event-7.png">
            </div>
        </div>


        <div class="col-md-4 mb-4 gallery-item" data-category="block">
            <div class="gallery">
                <img src="assets/img/gallery/gal-1.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/gal-1.png">
            </div>
        </div>


        <div class="col-md-4 mb-4 gallery-item" data-category="event">
            <div class="gallery">
                <img src="assets/img/gallery/event-2.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/event-2.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="event">
            <div class="gallery">
                <img src="assets/img/gallery/event-8.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/event-2.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="block">
            <div class="gallery">
                <img src="assets/img/gallery/tech-6.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/event-2.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="event">
            <div class="gallery">
                <img src="assets/img/gallery/event-9.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/event-2.png">
            </div>
        </div>


        <div class="col-md-4 mb-4 gallery-item" data-category="event">
            <div class="gallery">
                <img src="assets/img/gallery/event10.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/event-2.png">
            </div>
        </div>


        <div class="col-md-4 mb-4 gallery-item" data-category="block">
            <div class="gallery">
                <img src="assets/img/gallery/tech-7.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/event-2.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="event">
            <div class="gallery">
                <img src="assets/img/gallery/event11.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/event-2.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="event">
            <div class="gallery">
                <img src="assets/img/gallery/event12.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/event-2.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="event">
            <div class="gallery">
                <img src="assets/img/gallery/event13.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/event-2.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="event">
            <div class="gallery">
                <img src="assets/img/gallery/tech-8.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/event-2.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="event">
            <div class="gallery">
                <img src="assets/img/gallery/tech-9.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/event-2.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="teacher">
            <div class="gallery">
                <img src="assets/img/gallery/teacher-6.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/event-2.png">
            </div>
        </div>

        <div class="col-md-4 mb-4 gallery-item" data-category="teacher">
            <div class="gallery">
                <img src="assets/img/gallery/teacher-7.png" class="img-fluid rounded" data-toggle="modal" data-target="#exampleModal" data-img="assets/img/gallery/event-2.png">
            </div>
        </div>

        
        <!-- Add more gallery items as needed -->
    </div>
</div>
<!-- End Image Gallery -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Image Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="" class="img-fluid" id="modalImage">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="btnPrevious">Previous</button>
                <button type="button" class="btn btn-secondary" id="btnNext">Next</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<?php
include __DIR__ . '/include/footer.php';
?>

<script>
    $(document).ready(function() {
        var images = []; // Array to store image sources
        var currentIndex = 0; // Current index of the displayed image

        // Handle click event on gallery images
        $('.gallery img').on('click', function() {
            images = []; // Reset images array
            $('.gallery img').each(function() {
                images.push($(this).attr('data-img')); // Populate images array
            });

            var imgSrc = $(this).attr('data-img');
            currentIndex = images.indexOf(imgSrc); // Get index of clicked image

            $('#modalImage').attr('src', imgSrc); // Set modal image source
            $('#exampleModal').modal('show'); // Show modal
        });

        // Handle click event on previous button
        $('#btnPrevious').on('click', function() {
            currentIndex--;
            if (currentIndex < 0) {
                currentIndex = images.length - 1;
            }
            $('#modalImage').attr('src', images[currentIndex]); // Set modal image source
        });

        // Handle click event on next button
        $('#btnNext').on('click', function() {
            currentIndex++;
            if (currentIndex >= images.length) {
                currentIndex = 0;
            }
            $('#modalImage').attr('src', images[currentIndex]); // Set modal image source
        });

        // Handle filter button click
        $('.filter-btn').on('click', function() {
            var filterValue = $(this).attr('data-filter');
            if (filterValue === 'all') {
                $('.gallery-item').show();
            } else {
                $('.gallery-item').hide();
                $('.gallery-item[data-category="' + filterValue + '"]').show();
            }
        });
    });
</script>
