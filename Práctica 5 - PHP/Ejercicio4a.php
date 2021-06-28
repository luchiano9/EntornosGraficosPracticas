<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Pagina 2</p>
    <a href="Ejercicio4.php">Ir a la otra pagina</a>
    <?php session_start();
    if (!isset($_SESSION["contador"])){
    $_SESSION["contador"] = 1;
    }else{
    $_SESSION["contador"]++;
    }
    ?>
    <br>
    <?php echo "Has visitado " .
    $_SESSION["contador"] . " paginas"; ?>
</body>
</html>