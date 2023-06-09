<?php
// require 'database.php'; is ervoor om de database te kunnen gebruiken, database.php bevat code om de connectie te maken. 
// require 'database.php'; uses database.php to make a connection with the database. 
require 'database.php';
?>
<head>
    <title>Homepage</title>
</head>

<body>
    <!-- include('header.php'); uses the code in header.php and show the header -->
    <?php
    include('header.php');
    ?>
    <div class="page_main_height">
        <div class="container_img">
            <div class="container">
                <div class="container_width">
                    <div class="box_container">
                        <div class="box">
                            <h2>Preset sign-up page</h2>
                            <p>A simple sign-up page</p>
                            <a class="btn_link" href="">Clickable button</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- The hr tag is used to make a line between the sections on the page -->
        <hr class="line">
        <div class="container">
            <div class="container_width">
                <div class="box_container">
                    <div class="box_card_container">
                        <h2 class="card_title">Make a choice?</h2>
                        <div class="card_container">
                            <div class="card">
                                <img src="img/imageGimp.png" alt="error">
                                <h3>card 1</h3>
                            </div>
                            <div class="card">
                                <img src="img/imageGimp.png" alt="error">
                                <h3>card 2</h3>
                            </div>
                            <div class="card">
                                <img src="img/imageGimp.png" alt="error">
                                <h3>card 3</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- include('footer.php'); uses php to show the footer -->
    <!-- include('footer.php'); gebruikt php om de footer te laten zien -->
    <?php
    include('footer.php');
    ?>