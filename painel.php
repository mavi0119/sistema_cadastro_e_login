<?php
session_start();
include('verifica_login.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VERIFICADO</title>
    <link rel="icon" href="images/favicon2.svg" sizes="32x32" type="image/svg">
</head>
<body>
    
</body>
</html>

<h2>Olá, <?php echo $_SESSION['nome'];?></h2>
<h2><a href="logout.php">Sair</a></h2>