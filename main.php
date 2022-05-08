<?php 


if(!empty($_POST['encrypt'])){

 
 if(empty($_POST['keyE'])){
    echo "<script> alert('key vacias');</script>";

 }else{
    $encrypt = $_POST['encrypt'];

    $clave = $_POST['keyE'];
    include_once 'cifradorCustom.php';

    $data = $encriptar($encrypt);
 }


    
}

if(!empty($_POST['decrypt'])){



 if(empty($_POST['keyD'])){
    echo "<script> alert('key vacias');</script>";

 }else{
   

    $decrypt = $_POST['decrypt'];

    $clave = $_POST['keyD'];
    include_once 'cifradorCustom.php';
    $data2 = $desencriptar($decrypt);
 }
    

    // HOST= db5007484768.hosting-data.io

    // USUARIO; dbu2239069

    // DB:  dbs6166788

    // pass:  seguridad#inf_ 
}
?>   

     <div class="content-a">
             <a href="logout.php">logout</a>
     </div>  
     

    <div class="background">
        <img src="src/fondo.png" alt="" srcset="">
    </div>
    <main>


    <form method="POST">
        <div class="content ">

            <div class="content-head">
                <h1>Encriptar</h1>
            </div>

            <div class="content-key">
                <input class="keys" type="text" placeholder="Key" name="keyE">
            </div>
            <div class="content-text">
                <textarea name="encrypt" id="" cols="30" rows="10"> </textarea>
            </div>
            <div class="content-text">
                <textarea style="align-text: left;" name="" id="" cols="30" rows="10" value=""><?php if(!empty($data)) echo trim($data); ?></textarea>
            </div>

            <div class="content-buttons">
                <button type="submit">
                    
                    <!-- Generator: Adobe Illustrator 25.3.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" baseProfile="tiny" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 896 1280"
                        overflow="visible" xml:space="preserve">
                        <path d="M422.2,1.1c-106.6,9.4-201.5,63.3-263.4,149.4c-11.3,15.8-20.6,31.5-30.3,51c-14.2,28.9-23.2,55-29.5,85.5
                        c-7.4,36.1-8,49.7-8,174.1V563H45.5H0v358.5v331.1c0,15.1,12.3,27.4,27.4,27.4H448h424.2c13.1,0,23.8-10.6,23.8-23.8V921.5V563
                        h-42.5H811V453.7c0-64.1-0.4-114.1-1-121.2c-6.2-74.5-32.4-140.2-79.4-199c-10.3-12.9-40.3-42.9-53.1-53.1
                        C622.1,36.3,563,11.3,493,2.4C478.1,0.6,436.8-0.2,422.2,1.1z M465.5,142c61.8,5,113.5,31.4,153.5,78.5
                        c20.3,23.9,36.2,55.1,43.9,86.5c6.5,26.3,6.3,21.7,6.8,144.2l0.5,111.8H451.6H233V452.7c0-117.9,0-118.3,5.1-141
                        c5-22.8,17.7-52.6,30.4-71.7c31.3-46.8,78.6-80,132-92.5C424.4,141.9,444,140.3,465.5,142z" />
                    </svg>

                </button>
            </div>


        </div>
        </form>
        <form  method="POST">
        <div class="content ">

            <div class="content-head">
                <h1>Desencriptar</h1>
            </div>

            <div class="content-key">
                <input class="keys"type="text" placeholder="Key" name="keyD">
            </div>

            <div class="content-text">
                <textarea name="decrypt" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="content-text">
                <textarea name="" id="" cols="30" rows="10"><?php if(!empty($data2)) echo trim($data2); ?></textarea>
            </div>
            <div class="content-buttons">
                <button id="botonE" type="submit">
                
                    <!-- Generator: Adobe Illustrator 25.3.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1267 1280"
                        style="enable-background:new 0 0 1267 1280;" xml:space="preserve">
                        <path d="M925,0.6C830.5,9.1,752.6,50.5,694.9,123c-30.1,37.8-53.3,89.2-62.4,138.1c-5,27.1-4.8,21.4-5.2,179.6L626.9,589H313.5H0
                                v345.5V1280h409.5H819V934.5V589h-45.1h-45l0.4-143.8c0.4-155.5,0.2-149.1,5.8-174.2c4.8-21.4,17.1-50.4,28.9-68.5
                                c20.3-30.9,46.8-55.7,78.5-73.2c32.1-17.8,65.9-26.4,104-26.5c59.5-0.1,111.7,21.4,154.1,63.7c32.7,32.6,53,71.6,60.9,117
                                c3,17.4,3.5,39.1,3.5,171.7V589h51h51.1l-0.3-148.3c-0.3-135.3-0.5-149.2-2.1-160.2c-7.9-53.8-23.6-95.7-51.3-137.5
                                c-12.2-18.3-24-32.7-40.4-49c-51-51.1-113.3-81.6-186.5-91.5C975,0.9,935-0.3,925,0.6z" />
                    </svg>

                </button>
            </div>


        </div>

</form>


<script>




</script> 


    </main>