<?php include 'includes/header.php'; ?>
<?php include 'config/database.php'; ?>
<?php 
    if(isset($_POST['submit'])){
    $name    = mysqli_real_escape_string($conn, $_POST['name']);
    $email   = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // ✅ Save to Database
    $insert = mysqli_query($conn, "INSERT INTO contact_messages (name,email,subject,message)
                                   VALUES ('$name','$email','$subject','$message')");

    if($insert){
        $success_msg = "Your message has been sent successfully!";
        
        // Optional: Send email to admin
        $to      = "admin@istudio.com";
        $headers = "From: $email\r\nReply-To: $email\r\n";
        // mail($to, $subject, $message, $headers);

    } else {
        $error_msg = "Something went wrong. Please try again.";
    }
}
?>


    <!-- Hero Start -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-1 mb-0 animated slideInLeft">Contact</h1>
                </div>
                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary" href="#!">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-primary" href="#!">Pages</a></li>
                            <li class="breadcrumb-item text-secondary active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="mb-5">Have Any Query? <span class="text-uppercase text-primary bg-light px-2">Contact
                        Us</span></h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <p class="text-center mb-4">The contact form is currently inactive. Get a functional and working
                        contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code
                        and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    <?php
                        if(isset($success_msg)) echo '<p class="text-success">'.$success_msg.'</p>';
                        if(isset($error_msg)) echo '<p class="text-danger">'.$error_msg.'</p>';
                    ?>
                        <div class="wow fadeIn" data-wow-delay="0.3s">
                        <form method="post" action="contact.php">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" name="message" id="message"
                                            style="height: 150px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


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