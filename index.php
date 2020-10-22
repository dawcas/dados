<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Dados Privado 1</title>
        <meta charset="utf-8">
        <link rel='stylesheet' href='<?=$_SERVER['ROOT_PATH'].'/'?>css/styles.css'>
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    </head>
    <body>
<?php
if ((!(empty($_REQUEST['user']) && empty($_REQUEST['pw'])) && $_REQUEST['user'] == 'juan@gmail.com' && $_REQUEST['pw'] == 'juan') || (!empty($_SESSION['logged']) && $_SESSION['logged'] === true)) {
    $_SESSION['logged'] = true;
    
    require('menu.php');
} else {
?>
        <main  id='login'>
            <h2>LOG IN</h2>
            <form action='' method='post'>
                <input type='email' name='user' placeholder='eMail'>
                <input type='password' name='pw' placeholder='password'>
                <input type='submit' value='Log in' id='butt'>
            </form>
        </main>
<?php
}
?>
    </body>
</html>
