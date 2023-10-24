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

    <section id="formule" class="section">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>


        <div class="card-deck listFormule">
            <div class="cardFormule">
                <div class="contentFormule">
                    <div class="backFormule">
                        <div class="back-contentFormule">
                            <i class="fa-solid fa-user fa-3xl" style="color: #ffffff;"></i>
                            <strong>Abonnement</strong>
                        </div>
                    </div>
                    <div class="frontFormule">

                        <div class="imgFormule">
                            <div class="circleFormule">
                            </div>
                            <div class="circleFormule" id="rightFormule">
                            </div>
                            <div class="circleFormule" id="bottomFormule">
                            </div>
                        </div>

                        <div class="front-contentFormule">
                            <small class="badgeFormule">Pasta</small>
                            <div class="descriptionFormule">
                                <div class="titleFormule">
                                    <p class="titleFormule">
                                        <strong>Spaguetti Bolognese</strong>
                                    </p>
                                    <svg fill-rule="nonzero" height="15px" width="15px" viewBox="0,0,256,256" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                                        <g style="mix-blend-mode: normal" text-anchor="none" font-size="none" font-weight="none" font-family="none" stroke-dashoffset="0" stroke-dasharray="" stroke-miterlimit="10" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1" stroke="none" fill-rule="nonzero" fill="#20c997">
                                            <g transform="scale(8,8)">
                                                <path d="M25,27l-9,-6.75l-9,6.75v-23h18z"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <p class="card-footerFormule">
                                    30 Mins &nbsp; | &nbsp; 1 Serving
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cardFormule">
                <div class="contentFormule">
                    <div class="backFormule">
                        <div class="back-contentFormule">
                            <svg stroke="#ffffff" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" height="50px" width="50px" fill="#ffffff">

                                <g stroke-width="0" id="SVGRepo_bgCarrier"></g>

                                <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>

                                <g id="SVGRepo_iconCarrier">

                                    <path d="M20.84375 0.03125C20.191406 0.0703125 19.652344 0.425781 19.21875 1.53125C18.988281 2.117188 18.5 3.558594 18.03125 4.9375C17.792969 5.636719 17.570313 6.273438 17.40625 6.75C17.390625 6.796875 17.414063 6.855469 17.40625 6.90625C17.398438 6.925781 17.351563 6.949219 17.34375 6.96875L17.25 7.25C18.566406 7.65625 19.539063 8.058594 19.625 8.09375C22.597656 9.21875 28.351563 11.847656 33.28125 16.78125C38.5 22 41.183594 28.265625 42.09375 30.71875C42.113281 30.761719 42.375 31.535156 42.75 32.84375C42.757813 32.839844 42.777344 32.847656 42.78125 32.84375C43.34375 32.664063 44.953125 32.09375 46.3125 31.625C47.109375 31.351563 47.808594 31.117188 48.15625 31C49.003906 30.714844 49.542969 30.292969 49.8125 29.6875C50.074219 29.109375 50.066406 28.429688 49.75 27.6875C49.605469 27.347656 49.441406 26.917969 49.25 26.4375C47.878906 23.007813 45.007813 15.882813 39.59375 10.46875C33.613281 4.484375 25.792969 1.210938 22.125 0.21875C21.648438 0.0898438 21.234375 0.0078125 20.84375 0.03125 Z M 16.46875 9.09375L0.0625 48.625C-0.09375 48.996094 -0.00390625 49.433594 0.28125 49.71875C0.472656 49.910156 0.738281 50 1 50C1.128906 50 1.253906 49.988281 1.375 49.9375L40.90625 33.59375C40.523438 32.242188 40.222656 31.449219 40.21875 31.4375C39.351563 29.089844 36.816406 23.128906 31.875 18.1875C27.035156 13.34375 21.167969 10.804688 18.875 9.9375C18.84375 9.925781 17.8125 9.5 16.46875 9.09375 Z M 17 16C19.761719 16 22 18.238281 22 21C22 23.761719 19.761719 26 17 26C15.140625 26 13.550781 24.972656 12.6875 23.46875L15.6875 16.1875C16.101563 16.074219 16.550781 16 17 16 Z M 31 22C32.65625 22 34 23.34375 34 25C34 25.917969 33.585938 26.730469 32.9375 27.28125L32.90625 27.28125C33.570313 27.996094 34 28.949219 34 30C34 32.210938 32.210938 34 30 34C27.789063 34 26 32.210938 26 30C26 28.359375 26.996094 26.960938 28.40625 26.34375L28.3125 26.3125C28.117188 25.917969 28 25.472656 28 25C28 23.34375 29.34375 22 31 22 Z M 21 32C23.210938 32 25 33.789063 25 36C25 36.855469 24.710938 37.660156 24.25 38.3125L20.3125 39.9375C18.429688 39.609375 17 37.976563 17 36C17 33.789063 18.789063 32 21 32 Z M 9 34C10.65625 34 12 35.34375 12 37C12 38.65625 10.65625 40 9 40C7.902344 40 6.960938 39.414063 6.4375 38.53125L8.25 34.09375C8.488281 34.03125 8.742188 34 9 34Z"></path>

                                </g>

                            </svg>
                            <strong>Evenement</strong>
                        </div>
                    </div>
                    <div class="frontFormule">

                        <div class="imgFormule">
                            <div class="circleFormule">
                            </div>
                            <div class="circleFormule" id="rightFormule">
                            </div>
                            <div class="circleFormule" id="bottomFormule">
                            </div>
                        </div>

                        <div class="front-contentFormule">
                            <small class="badgeFormule">Pasta</small>
                            <div class="descriptionFormule">
                                <div class="titleFormule">
                                    <p class="titleFormule">
                                        <strong>Spaguetti Bolognese</strong>
                                    </p>
                                    <svg fill-rule="nonzero" height="15px" width="15px" viewBox="0,0,256,256" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                                        <g style="mix-blend-mode: normal" text-anchor="none" font-size="none" font-weight="none" font-family="none" stroke-dashoffset="0" stroke-dasharray="" stroke-miterlimit="10" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1" stroke="none" fill-rule="nonzero" fill="#20c997">
                                            <g transform="scale(8,8)">
                                                <path d="M25,27l-9,-6.75l-9,6.75v-23h18z"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <p class="card-footerFormule">
                                    30 Mins &nbsp; | &nbsp; 1 Serving
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
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