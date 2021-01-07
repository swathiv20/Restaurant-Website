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
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam iusto aut molestias excepturi, nam est optio id rerum aliquam, deserunt cum incidunt eum quos corporis error magni et necessitatibus enim?</p>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, consectetur dolore minus cupiditate quibusdam cumque libero iusto dolorum, facere, nostrum provident repellendus quos? Nisi, veniam rem molestias maiores saepe unde, error dignissimos ipsam laboriosam cupiditate fugit recusandae? Delectus veniam ducimus assumenda consequatur? Nostrum numquam error architecto esse quos assumenda asperiores.</p>
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
                <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, at? Aspernatur aliquam deserunt eum odio veniam. Ipsa quo, quisquam cupiditate dolores ab doloremque expedita dolore obcaecati incidunt. Voluptas, inventore dolorum.</p>
            </div>

            <div class="service-item">
                <span>
                    <i class="fas fa-glass-cheers"></i>
                </span>
                <h3>Wedding Party</h3>
                <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, at? Aspernatur aliquam deserunt eum odio veniam. Ipsa quo, quisquam cupiditate dolores ab doloremque expedita dolore obcaecati incidunt. Voluptas, inventore dolorum.</p>
            </div>

            <div class="service-item">
                <span>
                    <i class="fas fa-pizza-slice"></i>
                </span>
                <h3>Business Meetings</h3>
                <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, at? Aspernatur aliquam deserunt eum odio veniam. Ipsa quo, quisquam cupiditate dolores ab doloremque expedita dolore obcaecati incidunt. Voluptas, inventore dolorum.</p>
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
            <h3>San Francisco Office</h3>
            <ul>
                <li>8488 Street, Lake 383 San Francisco</li>
                <li>Phone: 0090 3838 7686</li>
                <li>Email: foody@gmail.com</li>
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
                        <li>8488 Street, Lake 383 San Francisco</li>
                        <li>Phone: 0090 3838 7686</li>
                        <li>Email: foody@gmail.com</li>
                        <li>Website: www.foody.com</li>
                    </ul>
                </div>
                <div class="contact-col-2">
                    <h2>Follow Us</h2>
                    <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit recusandae deserunt officiis provident molestias, quo, temporibus adipisci eum facere amet repellat ullam corporis ut vel.</p>
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