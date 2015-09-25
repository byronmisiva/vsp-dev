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
    <img src="camara.png" id="btnCamera">
    <div style="width: 0; height: 0; overflow: hidden">
    <input type="file" name="fileToUpload" id="fileToUpload"
           accept=".jpg, .JPG, .png, .png" class="upload" onchange="lanzaEnvio()"/>

    <input type="submit" value="Subir"
           name="submit"
           id="envio" style="display: none;"
           class="">
    </div>
</form>

<div id="imageUpView" style="width: 100px; height: 100px;">
</div>
<script>
    $("#btnCamera").click(function(){
        $("#fileToUpload").click()
    })
    function lanzaEnvio() {
        $('#envio').click();
    }
    $("#subirimagen").submit(function (event) {
        //ocultamos el boton y mostramos el loader
        var url = "uploadimagen.php";
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
                //var nuevaimagen = '<img id="imageUp" src="' + data + '">';
                //$('#imageUpView').html(nuevaimagen);
                parent.$('#archivo').val(data);
            }
        });
        event.preventDefault();
        return false;
    });
</script>
</body>