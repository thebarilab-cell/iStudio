<?php include 'includes/header.php';
include 'config/database.php';

$query = "SELECT * FROM team WHERE is_active = 1";
$result = mysqli_query($conn, $query);
?>




    <!-- Hero Start -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-1 mb-0 animated slideInLeft">Our Team</h1>
                </div>
                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary" href="#!">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-primary" href="#!">Pages</a></li>
                            <li class="breadcrumb-item text-secondary active" aria-current="page">Our Team</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
      <div class="container py-5">
    <h1 class="mb-5">Our Professional <span class="text-uppercase text-primary bg-light px-2">Designers</span></h1>
    <div class="row g-4">
        <?php
        $query = "SELECT * FROM team WHERE is_active = 1";
        $result = mysqli_query($conn, $query);

        $delay = 0.1; // animation delay
        while($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="<?= $delay ?>s">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/<?= $row['image'] ?>" alt="<?= $row['name'] ?>">
                    <div class="team-overlay">
                        <small class="mb-2"><?= $row['designation'] ?></small>
                        <h4 class="lh-base text-light"><?= $row['name'] ?></h4>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php $delay += 0.2; } ?>
    </div>
</div>

    </div>
    <!-- Team End -->


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