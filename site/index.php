<?php
// require 'database.php'; is ervoor om de database te kunnen gebruiken, database.php bevat code om de connectie te maken. 
// require 'database.php'; uses database.php to make a connection with the database. 
require 'database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/logoGimp.png">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
</head>

<body>
    <!-- include('header.php'); uses the code in header.php and show the header -->
    <?php
    include('header.php');
    ?>
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
                    <h2 class="card_title">Welke keuze wordt het?</h2>
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
    <!-- include('footer.php'); uses the code in footer.php and show the footer -->
    <?php
    include('footer.php');
    ?>
</body>

</html>