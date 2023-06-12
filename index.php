<!DOCTYPE html>
<html lang="ca">
<head>
    <title>Accés</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="process.php" method="post">
            <h1>Registra't</h1>
            <span>crea un compte d'usuari</span>
            <input type="hidden" name="method" value="signup"/>
            <input type="text" placeholder="Nom" />
            <input type="email" placeholder="Correu electronic" />
            <input type="password" placeholder="Contrasenya" />
            <button>Registra't</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="process.php" method="post" id="captcha" name="captcha">
            <h1>Ets humà?</h1>
            <br>
            <span>Introdueix els caràcters presents a la imatge</span>
            <input type="text" placeholder="Caràcters" name="Caracters" />
            <button type="submit" name="continua" 
            <?php
            //disable button
            $_POST['count'] = 0;
            if (isset($_POST['count']) && $_POST['count'] > 10)
                { ?> disabled <?php   } ?>
            >Continua</button>
            <p>Has aconseguit accedir al 
                <?php 
                if (isset($_POST['count']) === 1){
                    echo "1r";
                } elseif (isset($_POST['count']) === 2){
                    echo "2n";
                } elseif (isset($_POST['count']) === 3){
                    echo "3r";
                } elseif (isset($_POST['count']) === 4){
                    echo "4t";
                } elseif (isset($_POST['count']) === 5){
                    echo "5è";
                } elseif (isset($_POST['count']) === 6){
                    echo "6è";
                } elseif (isset($_POST['count']) === 7){
                    echo "7è";
                } elseif (isset($_POST['count']) === 8){
                    echo "8è";
                } elseif (isset($_POST['count']) === 9){
                    echo "9è";
                } elseif (isset($_POST['count']) === 10){
                    echo "10è";
                } elseif (isset($_POST['count']) > 10){
                    echo "10è";
                }
                ?>
                 intent</p>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <div class="capcha-container">
                    <button class="capcha-refresh"><i class="fa fa-refresh"></i></button>
                    <?php
                    session_start();
                     // TODO: Proveïr imatge capcha aleatòria
                        $images = glob("captcha/*.png");
                        $randomImage = $images[array_rand($images)];
                        $_SESSION['image'] = $randomImage;
                    ?>
                    <img src="<?php echo $randomImage; ?>" alt="Captcha" class="capcha-image"/>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>