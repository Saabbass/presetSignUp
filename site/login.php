<head>
    <title>Login Page</title>
</head>


<body>
    <!-- adding the navbar / header -->
    <!-- begin ingoegen van navbar / header -->
    <?php
    include('header.php');
    ?>
    <!-- einde invoegen van navbar / header -->
    <div class="container_img">
        <div class="page_main_height">
            <div class="container">
                <div class="container_width">
                    <section class="form_align">
                        <!-- action and method are atributes -->
                        <!-- action en method zijn atributen -->
                        <form action="session_login.php" method="post">
                            <div>
                                <h2 class="form_head">Inloggen</h2>
                            </div>
                            <div>
                                <?php if (isset($_GET['error'])) { ?>
                                    <p class="error"><?php echo $_GET['error']; ?></p>
                                <?php } ?>
                            </div>
                            <div class="form_group">
                                <label for="email">Email-address</label>
                                <input type="text" name="email" placeholder="email-address ">
                            </div>
                            <div class="form_group">
                                <label for="wachtwoord">Password</label>
                                <input type="password" name="wachtwoord" placeholder="wachtwoord">
                            </div>
                            <div>
                                <a href="signUp.php" class="form_content_switch">I don't have an account</a>
                                <button class="button_submit" type="sumbit">log in</button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- start footer -->
    <!-- begin footer -->
    <?php
    include('footer.php');
    ?>
    <!-- end footer -->
    <!-- einde footer -->