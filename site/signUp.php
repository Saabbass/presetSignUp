<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <!-- begin ingoegen van navbar / header -->
    <?php
    include('header.php');
    ?>
    <!-- einde invoegen van navbar / header -->
    <!-- action en method zijn atributen -->
    <div class="container_img">
        <div class="container">
            <div class="container_width">
                <section class="form_align">
                    <form action="session_signUp.php" method="post">
                        <h1 class="form_head">Make a new account</h1>
                        <div>
                            <?php if (isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>
                        </div>
                        <div>
                            <?php if (isset($_GET['success'])) { ?>
                                <p class="success"><?php echo $_GET['success']; ?></p>
                            <?php } ?>
                        </div>
                        <div class="form_group">
                            <label for="email">E-mail</label>
                            <?php if (isset($_GET['email'])) { ?>
                                <input type="email" name="email" id="email" value="<?php echo $_GET['email']; ?>">
                            <?php } else { ?>
                                <input type="text" name="email" id="email" placeholder="email">
                            <?php } ?>
                        </div>
                        <div class="form_group">
                            <!-- for="" is voor het drukken op de naam / label, dan wordt de input automatisch aangetikt -->
                            <label for="firstname">Firstname</label>
                            <?php if (isset($_GET['firstname'])) { ?>
                                <input type="text" name="firstname" id="firstname" value="<?php echo $_GET['firstname']; ?>">
                            <?php } else { ?>
                                <input type="text" name="firstname" id="firstname" placeholder="achternaam">
                            <?php } ?>
                        </div>
                        <div class="form_group">
                            <label for="lastname">Lastname</label>
                            <?php if (isset($_GET['lastname'])) { ?>
                                <input type="text" name="lastname" id="lastname" value="<?php echo $_GET['lastname']; ?>">
                            <?php } else { ?>
                                <input type="text" name="lastname" id="lastname" placeholder="lastname">
                            <?php } ?>
                        </div>
                        <div class="form_group">
                            <label for="address">Address</label>
                            <?php if (isset($_GET['address'])) { ?>
                                <input type="text" name="address" id="address" value="<?php echo $_GET['address']; ?>">
                            <?php } else { ?>
                                <input type="text" name="address" id="address" placeholder="address">
                            <?php } ?>
                        </div>
                        <div class="form_group">
                            <label for="stad">Stad</label>
                            <?php if (isset($_GET['stad'])) { ?>
                                <input type="text" name="stad" id="stad" value="<?php echo $_GET['stad']; ?>">
                            <?php } else { ?>
                                <input type="text" name="stad" id="stad" placeholder="stad">
                            <?php } ?>
                        </div>
                        <div class="form_group">
                            <label for="wachtwoord">Wachtwoord</label>
                            <input type="password" name="wachtwoord" id="wachtwoord" placeholder="wachtwoord">
                        </div>
                        <div class="form_group">
                            <label for="check_wachtwoord">Herhaal wachtwoord</label>
                            <input type="password" name="check_wachtwoord" id="check_wachtwoord" placeholder="herhaal wachtwoord">
                        </div>
                        <div class="form_group_radio">
                            <input type="radio" id="role1" name="role" value="administrator">
                            <label for="role1">Administrator</label>
                        </div>
                        <div class="form_group_radio">
                            <input type="radio" id="role2" name="role" value="employee">
                            <label for="role2">Employee</label>
                        </div>
                        <div class="form_group_radio">
                            <input type="radio" id="role3" name="role" value="customer" checked>
                            <label for="role3">Customer</label>
                        </div>
                        <div>
                            <a href="login.php" class="form_content_switch">Ik heb al een account</a>
                            <button class="button_submit" type="sumbit">Maak nieuwe gebruiker</button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
    <!-- begin footer -->
    <?php
    include('footer.php');
    ?>
    <!-- einde footer -->
</body>

</html>