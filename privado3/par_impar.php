<?php
session_start();
if (empty($_SESSION['logged']) || $_SESSION['logged'] !== true) {
    header('Location: ../index.php', true);
} 
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Par / Impar</title>
        <meta charset="utf-8">
        <link rel='stylesheet' href='<?=$_SERVER['ROOT_PATH'].'/'?>css/styles.css'>
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    </head>
    <body>
<?php
require('../menu.php');
if ($_REQUEST) {
    $arr = ['uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis'];
    $sum = 0;
    for ($i = 0; $i < 3; $i++) {
        $rnd = rand(0,5);
?>
        <img src='<?=$_SERVER['ROOT_PATH'].'/'?>img/<?=$arr[$rnd]?>.jpg' class='dado'>
<?php
        $sum += $rnd+1;
    }
?>
        <p>El número era <?=($sum % 2 == 0)?'par':'impar'?>.</p>
        <h2><?=(($_REQUEST['p'] && $sum % 2 != 0) || (!$_REQUEST['p'] && $sum % 2 == 0))?'ACERTASTE':'FALLASTE'?></h2>
<?php
} else {
?>
        <form action='' method='post'>
            <input type='radio' name='p' value='0' id='par' checked><label for='par'>Par</label><br>
            <input type='radio' name='p' value='1' id='impar'><label for='impar'>Impar</label><br>
            <input type='submit' value='Jugar'>
        </form>
<?php
}
?>
    </body>
</html>
