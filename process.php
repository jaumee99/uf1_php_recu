<?php
session_start();

// comprova si el text escrit coincideix amb el de la imatge
$captcha = "captcha/".$_POST['Caracters'].".png";
if (isset($_POST['Caracters']) && isset($_SESSION['image']) && $captcha == $_SESSION['image']) {
    header('Location: '. 'acces.php');
} else {
    header('Location: '. 'index.php');
}

//on click boto continuar suma al contador
if (isset($_POST['continua'])){
    $_POST['count'] = $_POST['count'] + 1;
    // if ($_POST['count'] === 10){
    //     echo isset($_POST['continua']) ? "disabled" : "";
    // }
}

//torna a l'inici al clicar tornar a l'inici
if (isset($_POST['signUp'])) {
    header('Location: ' . 'index.php');
}
?>