<?php

  session_start();
//   session_destroy();
  
  require_once 'db/db.php';
  require_once 'cifrador.php';

  if (isset($_SESSION['user_id'])) {
     header('Location: .');
  }
 

 

 
  
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    // echo "asdasda";
        $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        

        $message = '';
        
        if($results){
            $passwordV = $desencriptar($results['password']);
    

        if (  $_POST['password'] == $passwordV) {
            echo $results['id'];
            $_SESSION['user_id'] = $results['id'];
            header("Location: .");
        } 
        $message = 'Contraseña invalida';
        
        }else{
            $message = 'Usuario no encontrado';

        }
    }else{
        $message = 'favor de ingresar datos';
    }


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ingresar</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/main.css">

    <!-- aaaaasadadasdasdasdasdasdas -->
  </head>
  <body>

  <div class="background" style="z-index: -1;">
        <img src="src/fondo.png" alt="" srcset="">
    </div>

    <!- <?php //require 'partials/header.php' ?> -->

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1 style="color: white">Ingresar</h1>
    <span style="color: white; outline: none; text-decoration: none;"> | <a href="signup.php" style="color: white; outline: none; text-decoration: none;">Registrarse</a></span>

    <form class="l" action="login.php" method="POST">
      <input name="email" type="email" placeholder="Ingrese su e-mail">
      <input name="password" type="password" placeholder="Ingrese su contraseña">
      <input type="submit" value="Ingresar">
    </form>
  </body>
</html>
