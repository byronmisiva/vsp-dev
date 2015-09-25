<?php
/**
 * Created by PhpStorm.
 * User: byronherrera
 * Date: 24/9/15
 * Time: 23:02
 */
$fechaHora = date('mdhis');
$error = "";

$target_dir = $_SERVER['DOCUMENT_ROOT'] . "/app/imagenes/";
//$target_dir = $_SERVER['DOCUMENT_ROOT'] . "/vespa/app/imagenes/";

$target_file = $target_dir . $fechaHora . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

// Check if file already exists
if (file_exists($target_file)) {
    $error .= "Sorry, file already exists;";
    $uploadOk = 0;
}
// Check file size
// tamaño maximo 5 megas
if ($_FILES["fileToUpload"]["size"] > 20000000) {
    $error .= "Archivo muy pesado; ";
    $uploadOk = 0;
}
// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "png"
    && $imageFileType != "PNG") {
    $error .= "Solamente Imagenes; ";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $error .= "Archivo no subido; ";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "https://vespa.misiva.com.ec/app/imagenes/". $fechaHora . basename($_FILES["fileToUpload"]["name"]);
    } else {
        echo "false:" . $error;
    }
}
