<?php Require_once("inc/header.php")  ;?>
<body>
    <?php Require_once("inc/nav.php") ;?>
    <section class="home" id="home">
        <div class="home-content">
            <h1>Welcome to Hotel Kocela!</h1>
            <p>Make yourself  at home, we are happy to see you.</p>
                </p>

            <a href="reserv.php" class="btn">Book Now</a>

            <div class="social-media">
                <a href="#"><i class='bx bxl-whatsapp-square' ></i></a>
                <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
                <a href="#"><i class='bx bxs-phone' ></i></a>
                
            </div>
        </div>
    </section>

    <section class="about">
        <div class="about-content">
            <h2 class="heading">About Us</h2>
            <h3>Lovely and peaceful environment for a restful night</h3>
            <p>the best of the best</p>
            <a href="about.php" class="btn">Read more.</a>
        </div>
    </section>
    
    <section class="contact" id="contact">
        <h2 class="heading">Contact us</h2>
        <form action="#" >
            <div class="input-box">
                <input type="text" placeholder="Fullname">
                <input type="email" placeholder="Email Address">
            </div>
            <div class="input-box">
                <input type="number" placeholder="Mobile number">
                <input type="text" placeholder="Subject">
            </div>
            <textarea name="" placeholder="Your Message"  rows="10"></textarea>
            <input type="submit" value="Send Message" class="btn">
        </form>

        <?php Require_once("inc/footer.php")  ;?>