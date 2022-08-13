<?php
session_start();
$mensaje = "";


if (isset($_POST["iniciar"])){
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];
    $usuario == strtoupper("usuario");

    if ($usuario == "ADMIN" && $clave == "12345"){
  
        $_SESSION["user"]="admin";
        $_SESSION["autorizado"]= true;
        header("location: principal.php");


    }else{
        $mensaje ="usuario y/o contraseña incorrecta";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Login</h2>
    <form method= "POST" action="index.php">
        <label for="">usuario</label>
        <input type="text" name="usuario" placeholder="usuario"><br><br>
           <label for="">clave</label>
        <input type="password" name="clave" placeholder="password">
        <br><br>
        
        <button type="submit" name="iniciar">INICIAR SESION</button>
</form>
<?php echo $mensaje; ?>
</body>
</html>