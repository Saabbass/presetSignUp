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
    <section class="container-one">
        <div class="container-home">
            <div>
                <h2>Preset sign-up page</h2>
                <p>A simple sign-up page</p>
            </div>
            <a class="but-rit" href="rideRequest.php">Clickable button</a>
        </div>
    </section>
    <!-- The hr tag is used to make a line between the sections on the page -->
    <hr class="line">
    <section class="container-two">
        <div class="container-box3">
            <h2 class="text-center">Welke keuze wordt het?</h2>
            <div class="box-3">
                <div>
                    <img src="img/imageGimp.png" alt="emp">
                    <h3>Bezorgen</h3>
                </div>
            </div>
            <div class="box-3">
                <div>
                    <img src="img/imageGimp.png" alt="emp">
                    <h3>Bezorgen</h3>
                </div>
            </div>
            <div class="box-3">
                <div>
                    <img src="img/imageGimp.png" alt="emp">
                    <h3>Bezorgen</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- The hr tag is used to make a line between the sections on the page -->
    <hr class="line">
    <section class="container-one">
        <div>
            <!-- Ruimte voor tekst -->
        </div>
    </section>
    <section>
        <div>
            <!-- Ruimte voor tekst -->
        </div>
    </section>
    <!-- include('footer.php'); uses the code in footer.php and show the footer -->
    <?php
    include('footer.php');
    ?>
</body>

</html>