<?php
  require 'db/db.php';
  require 'cifrador.php';

  $message = '';



 
  
function validar_clave($clave,&$message){
  $cadena = '#$%&/()*=?_-';

    if(strlen($clave) < 6){
       $message = "La clave debe tener al menos 6 caracteres";
       return false;
    }
    if(strlen($clave) > 16){
       $message = "La clave no puede tener más de 16 caracteres";
       return false;
    }
    if (!preg_match('`[a-z]`',$clave)){
       $message = "La clave debe tener al menos una letra minúscula";
       return false;
    }
    if (!preg_match('`[A-Z]`',$clave)){
       $message = "La clave debe tener al menos una letra mayúscula";
       return false;
    }
    if (!preg_match('`[0-9]`',$clave)){
       $message = "La clave debe tener al menos un caracter numérico";
       return false;
    }

    $contador = 0;

    for($a = 0; $a < strlen($cadena); $a++){

        for($b = 0; $b< strlen($clave); $b++){
    
            if($clave[$b] == $cadena[$a]){
                $contador++;
            }
          
        } 
      
          
      } 

      if($contador ==0){
        $message = "La clave debe tener al menos un signo especial";
        return false;
      }
    // // echo !preg_match('[:punct:]',$clave);
    // if (!preg_match('[^(?=.[a-z])(?=.[A-Z])(?=.\d)(?=.[@$!%?&])[A-Za-z\d@$!%?&]{8,}$]',$clave)){
    //     $message = "La clave debe tener al menos un signo especial";
    //     return false;
    // }
    $message = "";
    return true;
 }




  if (!empty($_POST['email']) && !empty($_POST['password'])) {

    if(validar_clave($_POST['password'],$message)){
        
   
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = $encriptar($_POST['password']);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Se ha creado con exito.';
    }else{
      $message = 'No se ha podido crear el usuario.';
    }
        }  
  }

 ?>

    <?php if (!empty($message)): ?>
      <p><?php $message ?></p>
    <?php endif; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrar</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/main.css">

    <style>  
        
    </style>

  </head>
  <body>
    <!-- <?php // require 'partials/header.php' ?> -->


    <div class="background" style="z-index: -1;">
        <img src="src/fondo.png" alt="" srcset="">
    </div>

    <?php if (!empty($message)): ?>
      <p><?= $message ?></p>
    <?php endif; ?>

    <h1 style="color: white;">Registrar</h1>

    <span style="color: white; outline: none; text-decoration: none;"> | <a href="login.php" style="color: white; outline: none; text-decoration: none;" >Ingresar</a></span>
    <form  class="l"style="" action="signup.php" method="post">
      <input type="text" name="email" placeholder="Ingrese su e-mail">
      <input type="password" name="password" placeholder="Ingrese su contraseña">
      <input type="password" name="confirm_password" placeholder="Confirme su contraseña">
      <input type="submit" value="Registrar">
    </form>
  </body>
</html>

<!-- ///

function validar_clave($clave,&$message){
   if(strlen($clave) < 6){
      $message = "La clave debe tener al menos 6 caracteres";
      return false;
   }
   if(strlen($clave) > 16){
      $message = "La clave no puede tener más de 16 caracteres";
      return false;
   }
   if (!preg_match('`[a-z]`',$clave)){
      $message = "La clave debe tener al menos una letra minúscula";
      return false;
   }
   if (!preg_match('`[A-Z]`',$clave)){
      $message = "La clave debe tener al menos una letra mayúscula";
      return false;
   }
   if (!preg_match('`[0-9]`',$clave)){
      $message = "La clave debe tener al menos un caracter numérico";
      return false;
   }
   $message = "";
   return true;
}


/// -->