<?php include "app/app.php";
$page = 1;
head($page); ?>

<body class="hero-anime">

    <header>
        <?php navbar($page); ?>

        <div id="home" class="my-5 py-5">
            <?php home($page); ?>
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
        <?php about($page); ?>
    </section>
    <!-- End About Section -->

    <!-- Start Soutient Section -->
    <section id="clients" class="section" style="background-color: #f9f9f9;">
        <?php soutient($page); ?>
    </section>
    <!-- End Soutient Section -->

    <!-- Services -->
    <section id="services" class="section">
        <?php service($page); ?>
    </section>

    <section id="founder" class="main section" style="flex-direction: column">
        <?php founder($page); ?>
    </section>

    <section id="subscriber" class="doctors section">
        <?php subscriber($page); ?>
    </section>

    <section id="newsletter" class="section" style="padding-bottom: 200px;">
        <?php newsletter($page); ?>
    </section>


    <footer>
        <?php footer($page); ?>
    </footer>



    <script src="https://kit.fontawesome.com/9997986cc4.js" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>

</body>

</html>