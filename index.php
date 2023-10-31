<?php include "app/app.php";
$page = 1;
head($page); ?>

<body class="hero-anime">

    <header>
        <?php navbar($page); ?>

        <div id="home" class="my-5 py-5">
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
    <section id="about" class="about section">
        <div class="container-fluid">
            <div class="introAbout">
                <h3>À PROPOS</h3>
                <p class="descAbout desc">Influnias est une agence qui aujourd’hui tend la main à tous les créateurs de contenu, que cela passe par YouTube ou pleins de résaux différents ! Aujourd’hui, nous vous offrons une chance de créer, partager vos passions, vos idées et vos projets ! Alors qu’attendez vous ?! La Passion n’attend pas !</p>
            </div>

            <div class="row">
                <div class="col-xl-4 col-lg-6 video-box d-flex justify-content-center align-items-center position-relative">
                    <img src="images/logoInflunias.png" alt="">
                </div>

                <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">

                    <div class="icon-box">
                        <div id="borderIconFirst" class="icon"><i id="iconFirst" class="fa-solid fa-handshake"></i></i></i></div>
                        <h4 class="title">Soutien Multicanal</h4>
                        <p class="description desc">Influnias se distingue par son engagement à soutenir les créateurs de contenu sur une variété de plateformes et de réseaux sociaux, offrant ainsi une opportunité à un large éventail de créateurs, qu'ils soient actifs sur YouTube, Instagram, TikTok, ou d'autres médias en ligne. Cela garantit une visibilité maximale pour vos idées et créations.</p>
                    </div>

                    <div class="icon-box">
                        <div id="borderIconSecond" class="icon"><i id="iconSecond" class="fa-solid fa-dove"></i></i></div>
                        <h4 class="title">Liberté Créative et Passion</h4>
                        <p class="description desc">L'agence Influnias encourage l'expression créative sans limite, vous permettant de partager vos passions profondes et de donner vie à vos projets les plus innovants. Elle valorise la créativité et l'originalité, tout en offrant un espace pour explorer des idées audacieuses et concrétiser des rêves.</p>
                    </div>

                    <div class="icon-box">
                        <div id="borderIconThird" class="icon"><i id="iconThird" class="fa-solid fa-lightbulb"></i></i></div>
                        <h4 class="title">Opportunité Imminente</h4>
                        <p class="description desc">Ne laissez pas l'opportunité de collaborer avec Influnias vous échapper. Le temps d'agir est maintenant, car la passion ne connaît pas l'attente. Cette agence vous ouvre les portes vers un monde d'opportunités infinies, vous permettant de façonner votre propre destin créatif et de laisser une empreinte durable dans l'univers en constante évolution des médias en ligne.</p>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End About Section -->

    <!-- Start Soutient Section -->
    <section id="clients" class="section" style="background-color: #f9f9f9;">
        <!-- Container Ends -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-6">
                    <div class="section-title text-center">
                        <h3>PARTENAIRES</h3>
                    </div>
                </div>
            </div>
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

    <!-- Services -->
    <section id="services" class="section">
        <!-- Container -->
        <div class="container">
            <!-- Section title -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-6">
                    <div class="section-title text-center">
                        <h3>SERVICES</h3>
                        <p class="desc">Vous devenez "Influnias Creator" et vous avez accès à cette liste à vie pendant toute la durée de votre abonnement.</p>
                    </div>
                </div>
            </div>
            <div class="row" style="row-gap: 20px;">
                <!-- Service 1 -->
                <div class="col-12 col-lg-4 res-margin wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0">
                    <div class="service-single">
                        <div class="icon"><i class="fa-solid fa-camera" style="color: #ffffff;"></i></div>
                        <h5>Production Créative</h5>
                        <p class="desc">Organisation de shootings photo, gros tournages, et services vidéo complets, et recherche de lieux de tournage.</p>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-12 col-lg-4 res-margin wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="service-single">
                        <div class="icon"><i class="fa-solid fa-gear" style="color: #ffffff;"></i></div>
                        <h5>Gestion de Projets</h5>
                        <p class="desc">Accompagnement de projets majeurs, planification d'événements pour créateurs, et facilitation des recrutements dans divers domaines.</p>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-12 col-lg-4 res-margin wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="service-single">
                        <div class="icon"><i class="fa-solid fa-bullhorn" style="color: #ffffff;"></i></div>
                        <h5>Aide à la Visibilité</h5>
                        <p class="desc">Mise en relation avec partenariats, créateurs, et influenceurs, ainsi qu'optimisation de la visibilité et promotion de produits.</p>
                    </div>
                </div>
                <!-- Service 4 -->
                <div class="col-12 col-lg-4 res-margin wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0">
                    <div class="service-single">
                        <div class="icon"><i class="fa-solid fa-computer" style="color: #ffffff;"></i></div>
                        <h5>Services Techniques</h5>
                        <p class="desc">Informatique personnalisée, création de musique "Libre de Droits," gestion des médias sociaux, et mise en place de la production vidéo.</p>
                    </div>
                </div>
                <!-- Service 5 -->
                <div class="col-12 col-lg-4 res-margin wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="service-single">
                        <div class="icon"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></div>
                        <h5>Analyse et Rapports Personnalisés</h5>
                        <p class="desc">Études mensuelles des statistiques, récapitulatif des données clés, et suivi du succès du projet.</p>
                    </div>
                </div>
                <!-- Service 9 -->
                <div class="col-12 col-lg-4 res-margin wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="service-single">
                        <div class="icon"><i class="fa-solid fa-square-rss" style="color: #ffffff;"></i></div>
                        <h5>Optimisation de Communication</h5>
                        <p class="desc">Amélioration de la communication traditionnelle et numérique sur différents canaux.</p>
                    </div>
                </div>
                <!-- Service 7 -->
                <div class="col-12 col-lg-4 res-margin wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0">
                    <div class="service-single">
                        <div class="icon"><i class="fa-solid fa-calendar-days" style="color: #ffffff;"></i></div>
                        <h5>Organisation Administrative</h5>
                        <p class="desc">Gestion des rendez-vous et agent dédié avec FAQ.</p>
                    </div>
                </div>
                <!-- Service 8 -->
                <div class="col-12 col-lg-4 res-margin wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="service-single">
                        <div class="icon"><i class="fa-solid fa-tag"></i></div>
                        <h5>Mise en Avant des Produits</h5>
                        <p class="desc">Promotion de divers produits de créateurs.</p>
                    </div>
                </div>
                <!-- Service 6 -->
                <div class="col-12 col-lg-4 res-margin wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="service-single">
                        <div class="icon"><i class="fa-solid fa-brain" style="color: #ffffff;"></i></div>
                        <h5>Soutien Psychologique</h5>
                        <p class="desc">Fourniture de soutien émotionnel et psychologique.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="founder" class="main section" style="flex-direction: column">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-6">
                    <div class="section-title text-center">
                        <h3>FONDATEUR</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonials">
            <input type="radio" name="testimonial" id="input-testimonial1" checked>
            <!-- <input type="radio" name="testimonial" id="input-testimonial2">
            <input type="radio" name="testimonial" id="input-testimonial3"> -->
            <input type="radio" name="testimonial" id="input-testimonial4">
            <div class="testimonials-inner">
                <div class="testimonial">
                    <div class="testimonial-photo">
                        <div class="photo-background"></div>
                        <div class="photo-author"></div>
                    </div>
                    <div class="testimonial-text">
                        <p>J'ai eu envie de créer un projet qui revolutionnera l'influence et l'art sur internet en France, aujourd'hui c'est chose faite.</p>
                    </div>
                    <div class="testimonial-author">Maxime Tournier</div>
                </div>
                <!-- <div class="testimonial">
                    <div class="testimonial-photo">
                        <div class="photo-background"></div>
                        <div class="photo-author"></div>
                    </div>
                    <div class="testimonial-text">
                        <p>aaaaaaaaaaaaa</p>
                    </div>
                    <div class="testimonial-author">Maëwan Marthelot</div>
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
                </div> -->
                <div class="testimonial">
                    <div class="testimonial-photo">
                        <div class="photo-background"></div>
                        <div class="photo-author"></div>
                    </div>
                    <div class="testimonial-text">
                        <p>J’ai grandi avec l’idée de créer et partager… Alors pourquoi pas vous ? Une passion est une source infini de motivation alors voilà la nôtre.</p>
                    </div>
                    <div class="testimonial-author">Maëwan Marthelot</div>
                </div>
            </div>
            <div class="testimonials-arrows">
                <div class="arrow arrow-left">
                    <label for="input-testimonial1"></label>
                    <!-- <label for="input-testimonial2"></label>
                    <label for="input-testimonial3"></label> -->
                    <label for="input-testimonial4"></label>
                    <span></span>
                </div>
                <div class="arrow arrow-right">
                    <label for="input-testimonial1"></label>
                    <!-- <label for="input-testimonial2"></label>
                    <label for="input-testimonial3"></label> -->
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
                <!-- <label for="input-testimonial2">
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
                </label> -->
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

    <section id="subscriber" class="doctors section">
        <div class="container">

            <div class="section-title">
                <h3>IL NOUS ONT DÉJÀ REJOINS</h3>
            </div>
            <br>
            <div class="row justify-content-center">

                <div class="col-lg-6">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="images/auroretvv.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>AuroreTVv</h4>
                            <span>Streameuse</span>
                            <div class="social">
                                <a href="https://www.twitch.tv/auroretvv"><i class="fa-brands fa-twitch" style="color: #ffffff;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="images/ma3wan.png" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>MA3WAN</h4>
                            <span>Youtubeur</span>
                            <div class="social">
                                <a href="https://linkedin.com/in/maëwan-marthelot-01744b203"><i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i></a>
                                <a href="https://instagram.com/maewanm"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
                                <a href="https://www.youtube.com/c/MA3WAN/videos"><i class="fa-brands fa-youtube" style="color: #ffffff;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="images/doublet.png" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>DoubleT</h4>
                            <span>Streameur</span>
                            <div class="social">
                                <a href="https://twitter.com/Doublet_creator"><i class="fa-brands fa-twitter" style="color: #ffffff;"></i></a>
                                <a href="https://www.instagram.com/doublet_creator/"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
                                <a href="https://www.youtube.com/channel/UCI7YjBRiSjhbzAi2pyVbxBw"><i class="fa-brands fa-youtube" style="color: #ffffff;"></i></a>
                                <a href="https://www.twitch.tv/doublet_creator"><i class="fa-brands fa-twitch" style="color: #ffffff;"></i></a>
                                <a href="https://www.tiktok.com/@doubletcreator"><i class="fa-brands fa-tiktok" style="color: #ffffff;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="images/ananastudio.png" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>AnanaStudio</h4>
                            <span>Youtubeur</span>
                            <div class="social">
                                <a href="https://www.youtube.com/channel/UCVr-bm49yG0Ipcy3jfRxvig"><i class="fa-brands fa-youtube" style="color: #ffffff;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="images/rayquaconda.png" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Rayquaconda</h4>
                            <span>Youtubeur</span>
                            <div class="social">
                                <a href="https://twitter.com/rayquacondaytb"><i class="fa-brands fa-twitter" style="color: #ffffff;"></i></a>
                                <a href="https://instagram.com/rayquacondaytb_off"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
                                <a href="https://www.youtube.com/channel/UCeNemYwmIYDBnYSMV8F9cUg"><i class="fa-brands fa-youtube" style="color: #ffffff;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section id="newsletter" class="section" style="padding-bottom: 200px;">
        <div class="container">
            <form id="contactus" action="https://tyrolium.fr/Contenu/Php/api/influnias/api.php" method="post">
                <h3>CONTACTEZ-NOUS</h3>
                <fieldset> <input placeholder="Nom" type="text" tabindex="1" required> </fieldset>
                <fieldset> <input placeholder="Email" type="email" tabindex="2" required> </fieldset>
                <fieldset> <textarea placeholder="Tapez votre message ici..." tabindex="5" required></textarea> </fieldset>
                <fieldset> <button name="submit" type="submit" id="contactus-submit" data-submit="...Sending"><i id="icon" class=""></i>Envoyer</button> </fieldset>
            </form>
        </div>
    </section>


    <footer class="bg-light text-center text-white">
        <!-- Grid container -->
        <div class="p-4 pb-0 footerClass">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Twitter -->
                <a class="btn btn-floating m-1 float-shadow" style="background-color: #55acee;" href="https://twitter.com/influnias" role="button"><i class="fa-brands fa-twitter" style="color: #ffffff;"></i></a>

                <!-- Instagram -->
                <a class="btn btn-floating m-1 float-shadow" style="background-color: #ac2bac;" href="https://www.instagram.com/influnias/" role="button"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-floating m-1 float-shadow" style="background-color: #0082ca;" href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQHUchZzdRlmXQAAAYuE2AroQZtfUS6x-GOM-qrHiZjDkJA8YyN1_eQmIKeOO0UXcIqAbgQNLilihezkWF4iOXu3ADgY5C--g79wnh6cQTVXSxDM3cqy2AC1_uBBreq-ZbSLihs=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Finflunias" role="button"><i class="fa-brands fa-linkedin" style="color: #ffffff;"></i></a>

                <!-- Youtube -->
                <a class="btn btn-floating m-1 float-shadow" style="background-color: #c4302b;" href="https://www.youtube.com/channel/UCm0ASpIy2CJsS9hzVedo_yg" role="button"><i class="fa-brands fa-youtube" style="color: #ffffff;"></i></a>

                <!-- Twitch -->
                <a class="btn btn-floating m-1 float-shadow" style="background-color: #6441a5;" href="https://www.twitch.tv/influnias" role="button"><i class="fa-brands fa-twitch" style="color: #ffffff;"></i></i></a>

                <!-- Github -->
                <a class="btn btn-floating m-1 float-shadow" style="background-color: #333333;" href="https://github.com/Influnias" role="button"><i class="fa-brands fa-github" style="color: #ffffff;"></i></a>

                <!-- Mail -->
                <a class="btn btn-floating m-1 float-shadow" style="background-color: #FFA500;" href="mailto:officiel@tyrolium.fr" role="button"><i class="fa-solid fa-envelope" style="color: #ffffff;"></i></i></a>


            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3 bg-dark">
            Copyright © 2017-2023 All Rights Reserved by
            <a class="text-primary" href="https://tyrolium.fr">Tyrolium</a>
        </div>
        <!-- Copyright -->
    </footer>


    <script src="https://kit.fontawesome.com/9997986cc4.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</body>

</html>