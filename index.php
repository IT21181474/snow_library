<?php
include('header.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>
<body class="bg">
    <div class="container w-100">
        <!-- start #header -->
        <header id="header">
            <!-- start #menu -->
            <?php
            include('navbar.php')
            ?>
            <!-- end #menu -->
        </header>
        <!-- end #header -->

        <!-- start #main -->
        <main>
            <!-- start slider -->
            <?php
            include('banner.php')
            ?>
            <!-- end slider -->

           

            <!-- start feedback section -->
            <section class="mt-5 remove-margin">
                    <center><img src="assets/img/bg.jpg" class="img-fluid overlay-image" alt="" style="width: 300px; height: auto;"></center>
                    <div class="row d-flex justify-content-center align-items-center about-overlay">
                        <div class="col-sm-12 col-md-10 col-lg-8">
                            <!-- <div class="bord"></div> -->
                        </div>
                    </div>
            </section>
            <!-- end feedback -->

        </main>
        <!-- end #main -->

        <?php
        include('footer.php')
        ?>
    </div>
    </body>
</html>