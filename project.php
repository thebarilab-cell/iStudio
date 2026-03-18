<?php include 'includes/header.php'; 
include 'config/database.php';?>

    <!-- Hero Start -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-1 mb-0 animated slideInLeft">Projects</h1>
                </div>
                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary" href="#!">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-primary" href="#!">Pages</a></li>
                            <li class="breadcrumb-item text-secondary active" aria-current="page">Projects</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Project Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-0">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column justify-content-center bg-primary h-100 p-5">
                        <h1 class="text-white mb-5">Our Latest <span
                                class="text-uppercase text-primary bg-light px-2">Projects</span></h1>
                        <h4 class="text-white mb-0"><span class="display-1">6</span> of our latest projects</h4>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/project-1.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Kitchen</h4>
                                    <small class="text-white">72 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/project-2.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Bathroom</h4>
                                    <small class="text-white">67 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.4s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/project-3.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Bedroom</h4>
                                    <small class="text-white">53 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/project-4.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Living Room</h4>
                                    <small class="text-white">33 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.6s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/project-5.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Furniture</h4>
                                    <small class="text-white">87 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/project-6.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Rennovation</h4>
                                    <small class="text-white">69 Projects</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->


     <!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9">
                <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.2s">
                    <?php
                    $data = mysqli_query($conn, "SELECT * FROM testimonials WHERE is_active=1");
                    while($t = mysqli_fetch_assoc($data)) { ?>
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="img/<?= $t['image'] ?>" alt="<?= $t['name'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <h3><?= $t['subject'] ?? 'Client Feedback' ?></h3>
                                        <p><?= $t['message'] ?></p>
                                        <h5 class="mb-0"><?= $t['name'] ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<?php include 'includes/footer.php'; ?>