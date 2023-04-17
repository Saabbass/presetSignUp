<?php
session_start();
// require 'database.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/logoGimp.png">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css?v=<?php echo time(); ?>">
</head>

<body>
    <section>
        <nav>
            <img class="logo" src="img/logoGimp.png" alt="">

            <ul>
                <li>
                    <a href="home.php">Home</a>
                    <a href="diensten.php">Diensten</a>
                    <a href="berekenen&reserveren.php">Berekenen & Reserveren</a>
                </li>
            </ul>
            <button class="but">Contact</button>
        </nav>
    </section>

    <section class="line">

    </section>

    <section class="row-one">
        <div class="container-home">
            <div>
                <h2>Preset sign-up page</h2>
                <p>A simple sign-up page</p>
            </div>
            <a class="but-rit" href="rideRequest.php">Clickable button</a>
        </div>
    </section>

    <section class="line">

    </section>

    <section class="row-two">
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

    <section class="line">

    </section>

    <section class="row-one">
        <div>

        </div>
    </section>

    <section>
        <div>

        </div>
    </section>

    <section>
        <footer>
            <h3>De footer</h3>
        </footer>
    </section>
</body>

</html>