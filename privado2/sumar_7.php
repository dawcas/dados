<?php
session_start();
if (empty($_SESSION['logged']) || $_SESSION['logged'] !== true) {
    header('Location: ../index.php', true);
} 
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Sumar 7</title>
        <meta charset="utf-8">
        <link rel='stylesheet' href='<?=$_SERVER['ROOT_PATH'].'/'?>css/styles.css'>
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    </head>
    <body>
<?php
require('../menu.php');
?>
        <h1>Nº de intentos para sumar 7</h1>
        <img class='dado' src=''>
        <img class='dado' src=''><br>
        <button type='button'>Lanzar</button>
        <p>
            El número de intentos para sumar 7 ha sido de <span id='cont'>1</span>
        </p>
        
        <script>
            var butt = document.getElementsByTagName('button')[0]; 
            var conteo = document.getElementById('cont');
            var contador = 1;
            var aux = false;
            
            function lanzar() {
                let arrDados = ['uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis'];
                let imgs = document.getElementsByTagName('img');
                let sumador = 0;
                
                if (aux) {
                    contador = 1;
                    aux = false;
                }
                
                function alea() {
                    return Math.floor(Math.random() * Math.floor(5));
                } 
                
                for (let i = 0; i < imgs.length; i++) {
                    let ale = alea();
                    imgs[i].setAttribute('src', '../img/'+arrDados[ale]+'.jpg');
                    sumador += ale+1; 
                }
                
                conteo.innerHTML = contador;
                
                if (sumador !== 7) {
                    contador++;
                } else {
                    aux = true;
                }
            }
            
            window.addEventListener("load", lanzar);
            //~ window.onload = lanzar;
            
            butt.addEventListener("click", lanzar);
            //~ butt.onclick = lanzar;
        </script>
    </body>
</html>
