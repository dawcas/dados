<?php
session_start();
if (empty($_SESSION['logged']) || $_SESSION['logged'] !== true) {
    header('Location: ../index.php', true);
} 
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Tirada de dados</title>
        <meta charset="utf-8">
        <link rel='stylesheet' href='<?=$_SERVER['ROOT_PATH'].'/'?>css/styles.css'>
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    </head>
    <body>
<?php
require('../menu.php');
?>
        <h1>Tirada de dados</h1>
        <img class='dado' src=''>
        <img class='dado' src=''>
        <img class='dado' src=''>
        <img class='dado' src=''>
        <img class='dado' src=''>
        
        <script>
            window.onload = function () {
                let arrDados = ['uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis'];
                let imgs = document.getElementsByTagName('img');
                
                function alea() {
                    return Math.floor(Math.random() * Math.floor(5));
                } 
                
                for (let i = 0; i < imgs.length; i++) {
                    imgs[i].setAttribute('src', '../img/'+arrDados[alea()]+'.jpg');
                }
            }
        </script>
    </body>
</html>
