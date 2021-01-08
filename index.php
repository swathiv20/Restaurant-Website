<?php
include('header.php');
?>

<!-- about section -->
<section class="padding-y about" id="about">
    <div class="container">
        <div class="about-row">
            <div class="about-col-1">
                <img src="assets/images/about-img-1.jpg" alt="">
            </div>
            <div class="about-col-2">
                <!-- title -->
                <div class="title">
                    <h2>About Cafe Eternity</h2>
                    <div class="line center">
                        <div></div>
                        <span><i class="fas fa-utensils"></i></span>
                        <div></div>
                    </div>
                </div>
                <!-- end of title -->
                <p class="text"> We beleive the best moments in life happens face to face. So we created 'Cafe Eternity'. We curate experiences to creste meaningful connections</p>
                <p class="text"> Cafe Eternity is the ultimate host for you to connect over a memorable, shared experience. We do this by providing unique entertainment in sophisticated, comfortable places to gather all served by our scratch kitchen. Our venue hosts a number of events such as weddings, corporate events as well as other social gatherings. We then host tailored combinations of dining, bocce and events. All with amazing food and gracious service, so you can enjoy a genuine moment connecting with someone you care about.</p>
            </div>
            <div class="about-col-3">
                <img src="assets/images/about-img-2.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- end of about section -->

<!-- service section -->
<section class="padding-y service" id="service">
    <div class="container">
        <!-- title -->
        <div class="title">
            <h2>Special Services</h2>
            <div class="line center">
                <div></div>
                <span><i class="fas fa-utensils"></i></span>
                <div></div>
            </div>
        </div>
        <!-- end of title -->
        <div class="service-row">
            <div class="service-item">
                <span>
                    <i class="fas fa-birthday-cake"></i>
                </span>
                <h3>Birthday Party</h3>
                <p class="text">Just because your loved ones' big day is here doesn't mean you neeed to shell out the big bucks. Check out our budget-friendly birthday party ideas that are meant to make your bash a memorable one</p>
            </div>

            <div class="service-item">
                <span>
                    <i class="fas fa-glass-cheers"></i>
                </span>
                <h3>Wedding Party</h3>
                <p class="text"> From our restaurent in Cochi, we can deliver tents, portable restrooms, climate control systems, generator, lighting, furniture and decor either in our ground or in any area of your choice in lightening speed. And all with just one phonecall.</p>
            </div>

            <div class="service-item">
                <span>
                    <i class="fas fa-pizza-slice"></i>
                </span>
                <h3>Business Meetings</h3>
                <p class="text">Cafe Eternity is a recently established event venue in Cochi and is, in its own words, “tailored for tech”. Featuring a co-working space, a demo zone for pop-ups and ups and an event venue. The space is seamless, and options and services are clearly labelled and priced. No bad surprises here!</p>
            </div>
        </div>
    </div>
</section>
<!-- end of service section -->

<!-- openings section -->
<section class="openings padding-y" id="openings">
    <div class="container">
        <!-- title -->
        <div class="title">
            <h2>Openings Hour</h2>
            <div class="line center">
                <div></div>
                <span><i class="fas fa-utensils"></i></span>
                <div></div>
            </div>
        </div>
        <!-- end of title -->
        <div class="openings-row">
            <p class="text">we are open for 7 days a week</p>
            <h3>Cochi office</h3>
            <ul>
                <li>Near metro station Edappally, Cochi </li>
                <li>Phone: 7025877402</li>
                <li>Email: eternitycafe0909@gmail.com</li>
                <li>7:00 AM to 12:00 AM</li>
            </ul>
        </div>
    </div>
</section>
<!-- end of openings section -->





<!-- contact section -->
<section class="padding-y contact" id="contact">
    <div class="container">
        <!-- title -->
        <div class="title">
            <h2>Keep In Touch</h2>
            <div class="line center">
                <div></div>
                <span><i class="fas fa-utensils"></i></span>
                <div></div>
            </div>
        </div>
        <!-- end of title -->
        <div class="contact-row-1">
            <form class="contact-form" id="contact-form" action="contact_us_submit.php" method="post">
                <input type="text" class="form-control" placeholder="Your Name" name="name" required>
                <input type="email" class="form-control" placeholder="Your Email" name="email" required>
                <textarea rows="5" class="form-control" placeholder="Message" name="message" required></textarea>
                <input type="submit" class="form-submit-btn" value="send message">
            </form>
        </div>
    </div>

    <div class="contact-info">
        <div class="container">
            <div class="contact-row-2">
                <div class="contact-col-1">
                    <h2>Contact Detail</h2>
                    <ul>
                        <li>Cafe Eternity, Near Metro station Edappally, Cochi</li>
                        <li>Phone:702587742 </li>
                        <li>Email: eternitycafe0909@gmail.com</li>
                        <li>Website: www..com</li>
                    </ul>
                </div>
                <div class="contact-col-2">
                    <h2>Follow Us</h2>
                    <p class="text"> facebook. twitter. instagram. pinterest.  </p>
                    <ul class="center">
                        <li class="center">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="center">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="center">
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="center">
                            <a href="#">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of contact section -->

<!-- footer -->
<footer>
    <p class="text">Eternity Cafe Website 2020. </p>
</footer>
<!-- end of footer -->


<!-- jQuery -->
<script src="assets/jquery/jquery-3.5.1.js"></script>
<!-- Fontawesome js -->
<script src="assets/font-awesome/all.js"></script>
<!-- custom js file -->
<script src="js/script.js"></script>
</body>

</html>
