<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wanderlust</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- custom js file link  -->
    <script src="script.js" defer></script>

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <i class="fas fa-paper-plane"></i>Wanderlust </a>

    <nav class="navbar">
        <a data-aos="zoom-in-left" data-aos-delay="300" href="#home">Home</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="#about">About</a>
        <a data-aos="zoom-in-left" data-aos-delay="600" href="#destination">Destinations</a>
        <a data-aos="zoom-in-left" data-aos-delay="750" href="#services">Services</a>
        <a data-aos="zoom-in-left" data-aos-delay="900" href="#gallery">Gallery</a>
        <a data-aos="zoom-in-left" data-aos-delay="900" href="#review">Testimonials</a>
        <a data-aos="zoom-in-left" data-aos-delay="900" href="#banner">Contact Us</a>
        <!-- <a data-aos="zoom-in-left" data-aos-delay="1150" href="#blogs">blogs</a> -->
    </nav>

    <a data-aos="zoom-in-left" data-aos-delay="1300" href="form.php" class="btn">Get Itinerary</a>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <span data-aos="fade-up" data-aos-delay="150">Follow Us</span>
        <h3 data-aos="fade-up" data-aos-delay="300">To the Unknown</h3>
        <p data-aos="fade-up" data-aos-delay="450">You can't buy happiness, but you can buy a plane ticket, and thats kinda the same thing ;)</p>
        <!-- <a data-aos="fade-up" data-aos-delay="600" href="#" class="btn">book now</a> -->
    </div>

</section>

<!-- home section ends -->

<!-- booking form section starts  -->

<!-- <section class="book-form" id="book-form">

    <form action="">
        <div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
            <span>where to?</span>
            <input type="text" placeholder="place name" value="">
        </div>
        <div data-aos="zoom-in" data-aos-delay="300" class="inputBox">
            <span>when?</span>
            <input type="date" value="">
        </div>
        <div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
            <span>how many?</span>
            <input type="number" placeholder="number of travelers" value="">
        </div>
        <input data-aos="zoom-in" data-aos-delay="600" type="submit" value="find now" class="btn">
    </form>

</section> -->

<!-- booking form section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="video-container" data-aos="fade-right" data-aos-delay="150">
        <video src="images/about-vid-1.mp4" muted autoplay loop class="video"></video>
        <div class="controls">
            <span class="control-btn" data-src="images/about-vid-1.mp4"></span>
            <span class="control-btn" data-src="images/about-vid-2.mp4"></span>
            <span class="control-btn" data-src="images/about-vid-3.mp4"></span>
        </div>
    </div>

    <div class="content" data-aos="fade-left" data-aos-delay="300">
        <span>Why choose Us?</span>
        <h3>Nature's Majesty Awaits You</h3>
        <p>we have the best prices for tours, and a huge selection of destinations will not leave indifferent even avid tourist.</p>
        <a href="form.php" class="btn">Get Itinerary</a>
    </div>

</section>

<!-- about section ends -->

<!-- destination section starts  -->

<section class="destination" id="destination">

    <div class="heading">
        <span>Destinations</span>
        <h1>Go wherever your soul feels alive</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <div class="image">
                <img src="images/des-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="form.php">Know more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <div class="image">
                <img src="images/des-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="form.php">Know more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <div class="image">
                <img src="images/des-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="form.php">Know more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="600">
            <div class="image">
                <img src="images/des-4.jpg" alt="">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="form.php">Know more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="750">
            <div class="image">
                <img src="images/des-5.jpg" alt="">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="form.php">Know more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="900">
            <div class="image">
                <img src="images/des-6.jpg" alt="">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="form.php">Know more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="1150">
            <div class="image">
                <img src="images/des-7.jpg" alt="">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="form.php">Know more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="1300">
            <div class="image">
                <img src="images/des-8.jpg" alt="">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="form.php">Know more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

    </div>

</section>

<!-- destination section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <div class="heading">
        <span>our services</span>
        <h1>countless expericences</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <i class="fas fa-globe"></i>
            <h3>worldwide</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <i class="fas fa-hiking"></i>
            <h3>adventures</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <i class="fas fa-utensils"></i>
            <h3>food & drinks</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="600">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="750">
            <i class="fas fa-wallet"></i>
            <h3>affordable price</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="900">
            <i class="fas fa-headset"></i>
            <h3>24/7 support</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <div class="heading">
        <span>our gallery</span>
        <h1>we record memories</h1>
    </div>
    
    <div class="box-container">

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/gallery-img-1.jpg" alt="">
            <span>travel spot</span>
            <h3>iceland</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/gallery-img-2.jpg" alt="">
            <span>travel spot</span>
            <h3>greenland</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/gallery-img-3.jpg" alt="">
            <span>travel spot</span>
            <h3>alaska</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/gallery-img-4.jpg" alt="">
            <span>travel spot</span>
            <h3>thailand</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/gallery-img-5.jpg" alt="">
            <span>travel spot</span>
            <h3>brazil</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/gallery-img-6.jpg" alt="">
            <span>travel spot</span>
            <h3>maldive</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/gallery-img-7.jpg" alt="">
            <span>travel spot</span>
            <h3>iceland</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/gallery-img-8.jpg" alt="">
            <span>travel spot</span>
            <h3>alaska</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/gallery-img-9.jpg" alt="">
            <span>travel spot</span>
            <h3>maldive</h3>
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <div class="content" data-aos="fade-right" data-aos-delay="300">
        <span>Testimonials</span>
        <h3>What our customers have to say</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda laudantium corporis fugiat quae unde perspiciatis similique ab modi enim consequatur aperiam cumque distinctio facilis sit, debitis possimus asperiores non harum.</p>
    </div>

    <div class="box-container" data-aos="fade-left" data-aos-delay="600">

        <div class="box">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, ratione.</p>
            <div class="user">
                <img src="images/pic-1.png" alt="">
                <div class="info">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>
        </div>
        <div class="box">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, ratione.</p>
            <div class="user">
                <img src="images/pic-2.png" alt="">
                <div class="info">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>
        </div>
        <div class="box">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, ratione.</p>
            <div class="user">
                <img src="images/pic-3.png" alt="">
                <div class="info">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>
        </div>
        <div class="box">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, ratione.</p>
            <div class="user">
                <img src="images/pic-4.png" alt="">
                <div class="info">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<!-- <section class="blogs" id="blogs">

    <div class="heading">
        <span>blogs & posts</span>
        <h1>we untold stories</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <div class="image">
                <img src="images/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="link">Life is a journey, not a destination</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, natus!</p>
                <div class="icon">
                    <a href="#"><i class="fas fa-clock"></i> 21st may, 2021</a>
                    <a href="#"><i class="fas fa-user"></i> by admin</a>
                </div>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <div class="image">
                <img src="images/blog-2.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="link">Life is a journey, not a destination</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, natus!</p>
                <div class="icon">
                    <a href="#"><i class="fas fa-clock"></i> 21st may, 2021</a>
                    <a href="#"><i class="fas fa-user"></i> by admin</a>
                </div>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <div class="image">
                <img src="images/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="link">Life is a journey, not a destination</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, natus!</p>
                <div class="icon">
                    <a href="#"><i class="fas fa-clock"></i> 21st may, 2021</a>
                    <a href="#"><i class="fas fa-user"></i> by admin</a>
                </div>
            </div>
        </div>

    </div>

</section> -->

<!-- blogs section ends -->

<!-- banner section starts  -->

<div class="banner" id="banner">

    <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
        <span>What are you waiting for?</span>
        <h3>Start Exploring!</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptatum praesentium amet quibusdam quam officia suscipit odio.</p>
        <a href="form.php" class="btn">Get Itinerary</a>
    </div>

</div>

<!-- banner section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <a href="#" class="logo"> <i class="fas fa-paper-plane"></i>Wanderlust </a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, ad?</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <!-- <div class="box" data-aos="fade-up" data-aos-delay="300">
            <h3>quick links</h3>
            <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#about" class="links"> <i class="fas fa-arrow-right"></i> about </a>
            <a href="#destination" class="links"> <i class="fas fa-arrow-right"></i> destination </a>
            <a href="#services" class="links"> <i class="fas fa-arrow-right"></i> services </a>
            <a href="#gallery" class="links"> <i class="fas fa-arrow-right"></i> gallery </a>
            <a href="#blogs" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
        </div> -->

        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <h3>Contact Us</h3>
            <p> <i class="fas fa-map"></i> mumbai, india </p>
            <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
            <p> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </p>
            <p> <i class="fas fa-clock"></i> 7:00am - 10:00pm </p>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <h3>For any Queries</h3>
            <div class="contact-form">
                <form action="https://formsubmit.co/af3918263497fbce23e1a83c58db6e98" method="POST">
                <input type="hidden" name="_subject" value="New submission!">
                <!-- <input type="hidden" name="_next" value="form.html"> -->
                <input class="form-input" name="name" id="name" type="text" for="name" placeholder="Name" required>
                <!-- <label for="name" class="form-label">Name</label> -->
                <input class="form-input" name="email "id="email" type="email" for="email" placeholder="Email" required>
                  <!-- <label for="email" class="form-label">Email</label> -->
                <textarea class="form-inputarea" name="message" id="message" type="text" for="message" placeholder="Message" required></textarea>
                  <!-- <label for="message" class="form-label">Message</label> -->
                <button class="contact-form-button animate__animated wow animate__fadeIn" id="submitbtn" name="submit" type="submit">Submit</button>
              </form>
              </div>
        </div>

        <!-- <div class="box" data-aos="fade-up" data-aos-delay="600">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <form action="">
                <input type="email" name="" placeholder="enter your email" class="email" id="">
                <input type="submit" value="subscribe" class="btn">
            </form>
        </div> -->

    </div>

</section>

<div class="credit">Created by <span>XYZ</span> | all rights reserved!</div>

<!-- footer section ends -->


<!-- <script src="https://smtpjs.com/v3/smtp.js"></script>

<script>
    function sendEmail() {
        Email.send({
            Host : "smtp.elasticemail.com",
            Username : "siddhiskhade@gmail.com",
            Password : "Hello Siddhi26622002",
            To : 'siddhiskhade@gmail.com',
            From : document.getElementById("email").value,
            Subject : "New Contact Form Enquiry",
            Body : "And this is the body"
        }).then(
          message => alert(message)
        );
    }
</script> -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

    AOS.init({
        duration: 800,
        offset:150,
    });

</script>

</body>
</html>