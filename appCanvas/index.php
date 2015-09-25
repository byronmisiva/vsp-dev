<?php
/**
 * Created by PhpStorm.
 * User: byronherrera
 * Date: 24/9/15
 * Time: 23:02
 */
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <script language="JavaScript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<body>
<form id="subirimagen"
      action=""
      method="post"
      enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload"
           accept=".jpg, .JPG, .png, .png" class="upload" onchange="lanzaEnvio()"/>

    <input type="submit" value="Subir"
           name="submit"
           id="envio" style="display: none;"
           class="">
</form>

<div id="imageUpView" style="width: 100px; height: 100px;">
    <img id="imageView" src="imagen.jpg" style="width: 100px; height: 100px">
</div>

<div id="imageUpConten" style="width: 0; height: 0; overflow: hidden">
    <img id="imageUp" src="imagen.jpg">
</div>

<input type="button" value="Aceptar" id="aceptar" style="display: none">

<p>Canvas:</p>

<div id="canvasConten">
    <canvas id="canvasUp" width="10" height="10" style="border:1px solid #d3d3d3;">
    </canvas>
</div>
<script>
    $("#aceptar").click(function (event) {
        callbackFunction();
    });

    $("#subirimagen").submit(function (event) {
        //ocultamos el boton y mostramos el loader
        var url = "ejemplouploadimagen.php";
        $.ajax({
            url: url,
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            headers: {"cache-control": "no-cache"},
            timeout: 20000,
            success: function (data) {
                nombreArchivoSubido = data;
                var nuevaimagen = '<img id="imageUp" src="imagenes/' + nombreArchivoSubido + '">';
                $('#imageUpConten').html(nuevaimagen);
                var nuevaimagen = '<img id="imageView" src="imagenes/' + nombreArchivoSubido + '" style="width: 100px; " >';
                $('#imageUpView').html(nuevaimagen);
                $('#aceptar').show();
            }
        });
        event.preventDefault();
        return false;
    });

    function lanzaEnvio() {
        $('#envio').click();
    }

    function callbackFunction() {
        var imagenHeight = document.getElementById('imageUp');
        var c = document.getElementById("canvasUp");
        var ctx = c.getContext("2d");
        ctx.canvas.width = imagenHeight.offsetWidth;
        ctx.canvas.height = imagenHeight.offsetHeight;

        var img = document.getElementById("imageUp");
        ctx.drawImage(img, 0, 0);
        var Pic = document.getElementById("canvasUp").toDataURL("image/png");
        Pic = Pic.replace(/^data:image\/(png|jpg);base64,/, "");

        //jairus aca tu codigo
    }
</script>
</body>