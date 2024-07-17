<?php $site_title = "Bhavya Shree Institute Of Nursing | IN BIHAR"; include "include/header.php"; ?>

<style>
    .event-card {
        margin-bottom: 1.5rem;
    }
    .card {
    border: none;
    border-radius: 8px;
    background:#f6f866;
}

.animated-text {
    color:#002147;
}
    .card-body {
        padding: 1rem;
        position: relative;
        overflow: hidden;
        height:50px;
    }
    .animated-text {
        display: inline-block;
        white-space: nowrap;
        animation: moveText 20s linear infinite;
        position: absolute;
        left: 100%;
        top: 50%;
        transform: translateY(-50%);
    }
    @keyframes moveText {
        0% {
            left: 100%;
        }
        100% {
            left: -100%;
        }
    }
</style>

<!-- banner-area-start -->
<div class="section-banner bg-1">
    <div class="container">
        <div class="banner-spacing">
            <div class="section-info">
                <h2 data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">Events & News</h2>
                <p data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">Bhavya Shree Institute Of Nursing offers premier nursing education in Bihar. Discover our latest events and news, showcasing academic excellence and community involvement.</p>
            </div>
        </div>
    </div>
</div>
<!-- banner-area-end -->

<!-- event-area-start -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="my-4">Events</h1>
        </div>
    </div>
    <div class="row">
        <!-- Event 1 -->
        <div class="col-12 event-card">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title animated-text">Affiliated by Indian Nursing Council, New Delhi approved by Health Department Govt. of Bihar and guided by Bihar Nurses Registration Council - Patna.</h5>
                </div>
            </div>
        </div>
        <!-- Event 2 -->
        <div class="col-12 event-card">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title animated-text">Our branches coming soon :- 1. College Name :- ANANT PRERNA INSTITUTE OF NURSING COURSE- ANM, GNM & B.SC NURSING ADD-NEAR POWER GRID WARD NO -04, GAURAVGARDH, SUPAUL PIN-852131</h5>
                </div>
            </div>
        </div>
        <!-- Event 3 -->
        <div class="col-12 event-card">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title animated-text">Our branches coming soon :- 2. College Name- FORBESGANJ INSTITUTE OF NURSING COURSE-ANM, GNM & B.SC NURSING ADD- RENUGATE SIMRAHA FORBESGANJ, ARARIA, PIN- 854318</h5>
                </div>
            </div>
        </div>
        <!-- Add more events here -->
    </div>
</div>
<!-- event-area-end -->

<?php include __DIR__ . '/include/footer.php'; ?>