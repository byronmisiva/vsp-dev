<?php
require_once 'lib/Mobile-Detect-master/Mobile_Detect.php';
$detect = new Mobile_Detect;

$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'phone' : 'phone') : 'computer');
$isiOS = $detect->isiOS();
$isAndroidOS = $detect->isAndroidOS();
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Vespa 2015 :: </title>
    <meta http-equiv="content-language" content="es"/>
    <meta name="robots" content="follow,index,nocache"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="SAMSUNG :: Karaoke"/>
    <meta name="author" content="Misiva Corp"/>

    <script language="JavaScript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/ligthbox/ekko-lightbox.min.js"></script>

    <script language="JavaScript" src="js/app.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="js/ligthbox/ekko-lightbox.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

</head>

<body>

<div id="home" class=" seccion fondo-home">
    <div class="container vertical-center">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 margen-0">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="col-md-12 col-sm-12 col-xs-12 vespaRoad center-xs ">
                        <img src="images/logo-vespa-road.png"/>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 roboto-light  ">
                        <h3>¿Ya tienes una Vespa?</h3>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 roboto-light ">
                        <h2>¡Vive la experiencia al máximo!</h2>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 roboto-light vespaText">
                        Descarga gratis nuestra aplicación móvil en tu smartphone y únete al estilo de vida
                        #VespaEcuador
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 btnObjs">
                        <? if ($deviceType != 'phone')   {
                        ?>
                        <div class="col-md-6 col-sm-6 col-xs-12 text-center ">
                            <img src="images/icono-google-play.png"/>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                            <img src="images/icono-ios.png"/>
                        </div>
                        <?php
                        }?>

                        <? if (($deviceType == 'phone') and ($isAndroidOS)) {
                            ?>
                            <div class="col-md-6 col-sm-6 col-xs-12 text-center ">
                                <img src="images/icono-google-play.png"/>
                            </div>
                            <?php
                        } ?>
                        <? if (($deviceType == 'phone') and ($isiOS)) {
                            ?>
                            <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                                <img src="images/icono-ios.png"/>
                            </div>
                            <?php
                        } ?>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 right text-right margen-0 center-xs">
                    <img src="images/movile-samsung-vespa.png"/>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 text-right logoMisiva center-xs">
                <img src="images/logo-misiva.png"/>
            </div>
        </div>
    </div>
</div>

</body>
</html>
