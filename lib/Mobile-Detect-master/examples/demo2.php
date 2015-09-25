<?php
require_once '../Mobile_Detect.php';
$detect = new Mobile_Detect;

$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
 

?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
 </head>
<body>
    <p><?php echo $deviceType; ?>
    <table cellspacing="0" cellpadding="0">
        <tbody>
             
            <tr>
                <td>isiOS()</td>
                <td><?php var_dump($detect->isiOS()); ?></td>
            </tr>
            <tr>
                <td>isAndroidOS()</td>
                <td><?php var_dump($detect->isAndroidOS()); ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
