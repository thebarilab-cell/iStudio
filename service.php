<?php include 'includes/header.php'; 
include 'config/database.php';?>

    <!-- Hero Start -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-1 mb-0 animated slideInLeft">Services</h1>
                </div>
                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary" href="#!">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-primary" href="#!">Pages</a></li>
                            <li class="breadcrumb-item text-secondary active" aria-current="page">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="mb-5">Our Creative <span
                            class="text-uppercase text-primary bg-light px-2">Services</span></h1>
                    <p>Aliqu diam
                        amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                        clita duo justo et tempor eirmod magna dolore erat amet</p>
                    <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                        amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                        clita duo justo et tempor eirmod magna dolore erat amet</p>
                    <div class="d-flex align-items-center bg-light">
                        <div class="btn-square flex-shrink-0 bg-primary" style="width: 100px; height: 100px;">
                            <i class="fa fa-phone fa-2x text-white"></i>
                        </div>
                        <div class="px-3">
                            <h3>+0123456789</h3>
                            <span>Call us direct 24/7 for get a free consultation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row g-0">
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="service-item h-100 d-flex flex-column justify-content-center bg-primary">
                                <a href="#!" class="service-img position-relative mb-4">
                                    <img class="img-fluid w-100" src="img/service-1.jpg" alt="">
                                    <h3>Interior Design</h3>
                                </a>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                    stet diam sed stet lorem.</p>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="service-item h-100 d-flex flex-column justify-content-center bg-light">
                                <a href="#!" class="service-img position-relative mb-4">
                                    <img class="img-fluid w-100" src="img/service-2.jpg" alt="">
                                    <h3>Implement</h3>
                                </a>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                    stet diam sed stet lorem.</p>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.6s">
                            <div class="service-item h-100 d-flex flex-column justify-content-center bg-light">
                                <a href="#!" class="service-img position-relative mb-4">
                                    <img class="img-fluid w-100" src="img/service-3.jpg" alt="">
                                    <h3>Renovation</h3>
                                </a>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                    stet diam sed stet lorem.</p>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.8s">
                            <div class="service-item h-100 d-flex flex-column justify-content-center bg-primary">
                                <a href="#!" class="service-img position-relative mb-4">
                                    <img class="img-fluid w-100" src="img/service-4.jpg" alt="">
                                    <h3>Commercial</h3>
                                </a>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                    stet diam sed stet lorem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


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


    <!-- Newsletter Start -->
<div class="container-fluid bg-primary newsletter p-0">
    <div class="container p-0">
        <div class="row g-0 align-items-center">
            <div class="col-md-5 ps-lg-0 text-start wow fadeIn" data-wow-delay="0.2s">
                <img class="img-fluid w-100" src="img/newsletter.jpg" alt="Newsletter">
            </div>
            <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s">
                <div class="p-5">
                    <h1 class="mb-5">Subscribe the <span class="text-uppercase text-primary bg-white px-2">Newsletter</span></h1>

                    <?php
                    // Check if form submitted
                    if(isset($_POST['subscribe'])){
                        $email = mysqli_real_escape_string($conn, $_POST['email']);

                        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                            // Insert email if not already present
                            $check = mysqli_query($conn, "SELECT * FROM newsletter_subscribers WHERE email='$email'");
                            if(mysqli_num_rows($check) == 0){
                                mysqli_query($conn, "INSERT INTO newsletter_subscribers (email) VALUES ('$email')");
                                echo '<p class="text-success">Thank you for subscribing!</p>';
                            } else {
                                echo '<p class="text-warning">You are already subscribed.</p>';
                            }
                        } else {
                            echo '<p class="text-danger">Please enter a valid email.</p>';
                        }
                    }
                    ?>

                    <form method="post" class="position-relative w-100 mb-2">
                        <input class="form-control border-0 w-100 ps-4 pe-5" type="email" name="email" placeholder="Enter Your Email" required style="height: 60px;">
                        <button type="submit" name="subscribe" class="btn shadow-none position-absolute top-0 end-0 mt-2 me-2">
                            <i class="fa fa-paper-plane text-primary fs-4"></i>
                        </button>
                    </form>

                    <p class="mb-0">Stay updated with our latest news and offers</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter End -->



<?php include 'includes/footer.php'; ?>