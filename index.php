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


    <script src="https://kit.fontawesome.com/9997986cc4.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</body>

</html>