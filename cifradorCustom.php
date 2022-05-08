<?php
//Configuración del algoritmo de encriptación
//Debes cambiar esta cadena, debe ser larga y unica
//nadie mas debe conocerla





    $clave;
    //Metodo de encriptación
    $method = 'aes-256-cbc';
    // Puedes generar una diferente usando la funcion $getIV()
    $iv = base64_decode("C9fBxl1EWtYTL1/M8jfstw==");
    /*
    Encripta el contenido de la variable, enviada como parametro.
    */
    $encriptar = function ($valor) use ($method, $clave, $iv) {
        return openssl_encrypt ($valor, $method, $clave, false, $iv);
    };
    /*
    Desencripta el texto recibido
    */
    $desencriptar = function ($valor) use ($method, $clave, $iv) {
        $encrypted_data = base64_decode($valor);
        return openssl_decrypt($valor, $method, $clave, false, $iv);
    };
    /*
    Genera un valor para IV
    */
    $getIV = function () use ($method) {
        return base64_encode(openssl_random_pseudo_bytes(openssl_cipher_iv_length($method)));
    };





//  $dato = "Esta es información importante";

//  $dato_encriptado = $encriptar($dato);
//  $dato_desencriptado = $desencriptar($dato_encriptado);

//  echo $dato_encriptado;

//  echo $dato_desencriptado;
?>