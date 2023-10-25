<?php include "app/app.php";
$page = 1;
head($page); ?>

<body class="hero-anime">

    <header>
        <?php navbar($page); ?>

        <div class="my-5 py-5">
            <div class="header">
                <div class="inner-header flex">
                    <h1>INFLUNIAS</h1>
                    <h4>VOS CRÉATIONS SONT NOTRE CENTRE D'ATTENTION</h4>
                </div>
                <div>
                    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                        <defs>
                            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                        </defs>
                        <g class="parallax">
                            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                        </g>
                    </svg>
                </div>
            </div>
        </div>

    </header>

    <!-- <div class="section full-height">
        <div class="absolute-center">
            <div class="section mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div id="switch">
                                <div id="circle"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <!-- Start About Section -->
    <section id="about" class="about">
        <div class="container-fluid">
            <div class="introAbout">
                <h3 class="titleAbout">A propos</h3>
                <p class="descAbout">Influnias est une agence qui aujourd’hui tend la main à tous les créateurs de contenu, que cela passe par YouTube ou pleins de résaux différents ! Aujourd’hui, nous vous offrons une chance de créer, partager vos passions, vos idées et vos projets ! Alors qu’attendez vous ?! La Passion n’attend pas !</p>
            </div>

            <div class="row">
                <div class="col-xl-4 col-lg-6 video-box d-flex justify-content-end align-items-center position-relative">
                    <img src="images/logoInflunias.png" alt="">
                </div>

                <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">

                    <div class="icon-box">
                        <div id="borderIconFirst" class="icon"><i id="iconFirst" class="fa-solid fa-handshake"></i></i></i></div>
                        <h4 class="title">Soutien Multicanal</h4>
                        <p class="description">Influnias se distingue par son engagement à soutenir les créateurs de contenu sur une variété de plateformes et de réseaux sociaux, offrant ainsi une opportunité à un large éventail de créateurs, qu'ils soient actifs sur YouTube, Instagram, TikTok, ou d'autres médias en ligne. Cela garantit une visibilité maximale pour vos idées et créations.</p>
                    </div>

                    <div class="icon-box">
                        <div id="borderIconSecond" class="icon"><i id="iconSecond" class="fa-solid fa-dove"></i></i></div>
                        <h4 class="title">Liberté Créative et Passion</h4>
                        <p class="description">L'agence Influnias encourage l'expression créative sans limite, vous permettant de partager vos passions profondes et de donner vie à vos projets les plus innovants. Elle valorise la créativité et l'originalité, tout en offrant un espace pour explorer des idées audacieuses et concrétiser des rêves.</p>
                    </div>

                    <div class="icon-box">
                        <div id="borderIconThird" class="icon"><i id="iconThird" class="fa-solid fa-lightbulb"></i></i></div>
                        <h4 class="title">Opportunité Imminente</h4>
                        <p class="description">Ne laissez pas l'opportunité de collaborer avec Influnias vous échapper. Le temps d'agir est maintenant, car la passion ne connaît pas l'attente. Cette agence vous ouvre les portes vers un monde d'opportunités infinies, vous permettant de façonner votre propre destin créatif et de laisser une empreinte durable dans l'univers en constante évolution des médias en ligne.</p>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End About Section -->

    <section id="doctors" class="doctors section">
        <div class="container">

            <div class="section-title">
                <h2>IL NOUS ONT DÉJÀ REJOINS</h2>
            </div>
            <br>
            <div class="row">

                <div class="col-lg-6">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="images/testimonials-1.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Medical Officer</span>
                            <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="images/testimonials-1.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Anesthesiologist</span>
                            <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="images/testimonials-1.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>Cardiology</span>
                            <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="images/testimonials-1.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Neurosurgeon</span>
                            <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main section">
        <div class="testimonials">
            <input type="radio" name="testimonial" id="input-testimonial1" checked>
            <input type="radio" name="testimonial" id="input-testimonial2">
            <input type="radio" name="testimonial" id="input-testimonial3">
            <input type="radio" name="testimonial" id="input-testimonial4">
            <div class="testimonials-inner">
                <div class="testimonial">
                    <div class="testimonial-photo">
                        <div class="photo-background"></div>
                        <div class="photo-author"></div>
                    </div>
                    <div class="testimonial-text">
                        <p>Wait a second... you're telling me this testimonials slider is powered solely by CSS? That's some next-level web wizardry! I'm sold! Give me that mind-blowing slider to my website!</p>
                    </div>
                    <div class="testimonial-author">Henry Schwengle</div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-photo">
                        <div class="photo-background"></div>
                        <div class="photo-author"></div>
                    </div>
                    <div class="testimonial-text">
                        <p>The older I get, the more I understand why roosters just scream to start the day.</p>
                    </div>
                    <div class="testimonial-author">Mr. George Robert</div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-photo">
                        <div class="photo-background"></div>
                        <div class="photo-author"></div>
                    </div>
                    <div class="testimonial-text">
                        <p>Two of my friends have never met each other. Before they spoke, I told both of them that the other is a bit deaf. They shouted at each other for a few minutes before they realized that I'm an asshole.</p>
                    </div>
                    <div class="testimonial-author">Doodle Wobblepants</div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-photo">
                        <div class="photo-background"></div>
                        <div class="photo-author"></div>
                    </div>
                    <div class="testimonial-text">
                        <p>Turning on your lights and sirens after losing a drag race is just poor sportsmanship, man.</p>
                    </div>
                    <div class="testimonial-author">John "Vroom" Cena</div>
                </div>
            </div>
            <div class="testimonials-arrows">
                <div class="arrow arrow-left">
                    <label for="input-testimonial1"></label>
                    <label for="input-testimonial2"></label>
                    <label for="input-testimonial3"></label>
                    <label for="input-testimonial4"></label>
                    <span></span>
                </div>
                <div class="arrow arrow-right">
                    <label for="input-testimonial1"></label>
                    <label for="input-testimonial2"></label>
                    <label for="input-testimonial3"></label>
                    <label for="input-testimonial4"></label>
                    <span></span>
                </div>
            </div>
            <div class="testimonials-bullets">
                <label for="input-testimonial1">
                    <div class="bullet">
                        <div>
                            <span></span>
                        </div>
                    </div>
                </label>
                <label for="input-testimonial2">
                    <div class="bullet">
                        <div>
                            <span></span>
                        </div>
                    </div>
                </label>
                <label for="input-testimonial3">
                    <div class="bullet">
                        <div>
                            <span></span>
                        </div>
                    </div>
                </label>
                <label for="input-testimonial4">
                    <div class="bullet">
                        <div>
                            <span></span>
                        </div>
                    </div>
                </label>
            </div>
        </div>
    </section>

    <!-- Start Soutient Section -->
    <section id="clients" class="section">
        <!-- Container Ends -->
        <div class="container">
            <!-- Row and Scroller Wrapper Starts -->
            <div class="row owl-carousel owl-theme" id="clients-scroller" style="opacity: 1; display: block;">
                <div class="owl-wrapper-outer">
                    <div class="owl-wrapper" style="left: 0px;">
                        <div class="owl-item" style="width: 222px;">
                            <div class="client-item-wrapper">
                                <img src="images/tyrolium.png" alt="">
                            </div>
                        </div>
                        <div class="owl-item" style="width: 222px;">
                            <div class="client-item-wrapper">
                                <img src="images/solunias.png" alt="">
                            </div>
                        </div>
                        <div class="owl-item" style="width: 222px;">
                            <div class="client-item-wrapper">
                                <img src="images/Generatium-ium.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Soutient Section -->


    <section id="newsletter" class="section">
        <div class="container">
            <form id="contactus" action="" method="post">
                <h3>CONTACTEZ-NOUS</h3>
                <fieldset> <input placeholder="Nom" type="text" tabindex="1" required autofocus> </fieldset>
                <fieldset> <input placeholder="Email" type="email" tabindex="2" required> </fieldset>
                <fieldset> <textarea placeholder="Tapez votre message ici..." tabindex="5" required></textarea> </fieldset>
                <fieldset> <button name="submit" type="submit" id="contactus-submit" data-submit="...Sending"><i id="icon" class=""></i> Send Now</button> </fieldset>
            </form>
        </div>
    </section>


    <footer class="bg-light text-center text-white">
        <!-- Grid container -->
        <div class="p-4 pb-0 footerClass">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Twitter -->
                <a class="btn btn-floating m-1 float-shadow" style="background-color: #55acee;" href="#!" role="button"><i class="fa-brands fa-twitter" style="color: #ffffff;"></i></a>

                <!-- Instagram -->
                <a class="btn btn-floating m-1 float-shadow" style="background-color: #ac2bac;" href="#!" role="button"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-floating m-1 float-shadow" style="background-color: #0082ca;" href="#!" role="button"><i class="fa-brands fa-linkedin" style="color: #ffffff;"></i></a>

                <!-- Youtube -->
                <a class="btn btn-floating m-1 float-shadow" style="background-color: #c4302b;" href="#!" role="button"><i class="fa-brands fa-youtube" style="color: #ffffff;"></i></a>

                <!-- Twitch -->
                <a class="btn btn-floating m-1 float-shadow" style="background-color: #6441a5;" href="#!" role="button"><i class="fa-brands fa-twitch" style="color: #ffffff;"></i></i></a>

                <!-- Github -->
                <a class="btn btn-floating m-1 float-shadow" style="background-color: #333333;" href="#!" role="button"><i class="fa-brands fa-github" style="color: #ffffff;"></i></a>

                <!-- Mail -->
                <a class="btn btn-floating m-1 float-shadow" style="background-color: #FFA500;" href="#!" role="button"><i class="fa-solid fa-envelope" style="color: #ffffff;"></i></i></a>


            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Copyright © 2017-2023 All Rights Reserved by
            <a class="text-primary" href="https://tyrolium.fr">Tyrolium</a>
        </div>
        <!-- Copyright -->
    </footer>


    <script src="https://kit.fontawesome.com/9997986cc4.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</body>

</html>