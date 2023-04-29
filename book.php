<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">

        <title>Book Now</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--header section starts-->
        <section class="header">
            <a href="home.php" class="logo">travel</a>

            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="about.php">About</a>
                <a href="package.php">Package</a>
                <a href="book.php">Book</a>
                <a href="projectlogin.html"><button class="button" style="background-color: #8e44ad;font-size: 1.7rem;padding: 1rem 3rem;cursor: pointer;">Login</button></a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>
        </section>
        <!--Header section ends-->


        <!--Book Now section starts here -->
        <div class="heading" style="background:url(images/book.jpg) no-repeat">
            <h1>Book Now</h1>
        </div>

        <section class="booking">
            <h1 class="heading-title">Book Your Trip </h1>

            <form action="book_form.php" method="post" class="book-form">
                <div class="flex">
                    <div class="inputBox">
                        <span>Name :</span>
                        <input type="text" placeholder="Enter your name" name="name">
                    </div>
                    <div class="inputBox">
                        <span>Email :</span>
                        <input type="email" placeholder="Enter your Email" name="email">
                    </div>
                    <div class="inputBox">
                        <span>Mobile Number :</span>
                        <input type="number" placeholder="Enter your number" name="phone">
                    </div>
                    <div class="inputBox">
                        <span>Address :</span>
                        <input type="text" placeholder="Enter your address" name="address">
                    </div>
                    <div class="inputBox">
                        <span>Where to :</span>
                        <input type="text" placeholder="place you want to visit" name="location">
                    </div>
                    <div class="inputBox">
                        <span>How many :</span>
                        <input type="number" placeholder="Number of guests" name="guests">
                    </div>
                </div>
                <input type="submit" value="submit" class="btn" name="send">
            </form>

        </section>

        <!-- Book Now section ends here -->




        <!-- Footer Section Starts -->
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>quick links</h3>
                    <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                    <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                    <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
                    <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
                </div>
                <div class="box">
                    <h3>extra links</h3>
                    <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                    <a href="#"><i class="fas fa-angle-right"></i>About us</a>
                    <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
                    <a href="#"><i class="fas fa-angle-right"></i>Terms of use</a>
                </div>
                <div class="box">
                    <h3>contact links</h3>
                    <a href="#"><i class="fas fa-phone"></i>7558760294</a>
                    <a href="#"><i class="fas fa-envelope"></i>samikshagedam@gmail.com</a>
                    <a href="#"><i class="fas fa-map"></i>Pune, India</a>
                </div>
                <div class="box">
                    <h3>Follow us</h3>
                    <a href="#"><i class="fab fa-facebook-f"></i> Facebook </a>
                    <a href="#"><i class="fab fa-instagram"></i> Instagram </a>
                    <a href="#"><i class="fab fa-twitter"></i> Twitter </a>
                    <a href="#"><i class="fab fa-linkedin"></i> Linked In </a>
                </div>
            
            </div>
            <div class="credit"> created by <span> Tourism(Shreyash, Samiksha, Uday) </span> | all rights reserved!|</div>

        </section>
        <!-- Footer Section Ends -->



        <script src="js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    </body>
</html>