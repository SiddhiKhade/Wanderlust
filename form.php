<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wanderlust Booking Enquiry</title>

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
        <a data-aos="zoom-in-left" data-aos-delay="300" href="index.html#home">Home</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="index.html#about">About</a>
        <a data-aos="zoom-in-left" data-aos-delay="600" href="index.html#destination">Destinations</a>
        <a data-aos="zoom-in-left" data-aos-delay="750" href="index.html#services">Services</a>
        <a data-aos="zoom-in-left" data-aos-delay="900" href="index.html#gallery">Gallery</a>
        <a data-aos="zoom-in-left" data-aos-delay="900" href="index.html#review">Testimonials</a>
        <a data-aos="zoom-in-left" data-aos-delay="900" href="index.html#banner">Contact Us</a>
        <!-- <a data-aos="zoom-in-left" data-aos-delay="1150" href="#blogs">blogs</a> -->
    </nav>

    <a data-aos="zoom-in-left" data-aos-delay="1300" href="form.html" class="btn">Get Itinerary</a>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home-form" id="home">

    <div class="content">
        <h3 data-aos="fade-up" data-aos-delay="300">Booking Enquiry</h3>
        <p data-aos="fade-up" data-aos-delay="450">You are one step away from going on your dream vacation!</p>
        <!-- <a data-aos="fade-up" data-aos-delay="600" href="#" class="btn">book now</a> -->
    </div>

</section>

<!-- home section ends -->

<!-- booking section starts -->

<section class="booking" id="booking">

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Name :</span>
            <input type="text" placeholder="Enter your full name" name="name">
         </div>
         <div class="inputBox">
            <span>Email-id :</span>
            <input type="email" placeholder="Enter a valid email-id" name="email">
         </div>
         <div class="inputBox">
            <span>Contact number :</span>
            <input type="number" placeholder="Enter your contact number" name="phone">
         </div>
         <div class="inputBox">
            <span>Address :</span>
            <input type="text" placeholder="Enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>Destination :</span>
            <input list="places" placeholder="Enter your dream destination" name="location">
         </div>
         <div class="inputBox">
            <span>Number of guests :</span>
            <input type="number" placeholder="Number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>Check-in :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>Check-out :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <button type="submit" value="submit" class="btn" name="send">Submit</button>

   </form>

</section>

<!-- booking section ends -->

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