<?php
/**
 *  Created by olgaoskina
 *  07 May 2015
 */
session_start();

function uploadImageFile() {

    $iWidth = (int)$_POST['w'];
    $iHeight = (int)$_POST['h']; // desired image result dimensions
    $iJpgQuality = 90;
    $sTempFileName = $_POST['filename'];
    $uploadDir = $_POST['upload_dir'];

    if (file_exists($sTempFileName) && filesize($sTempFileName) > 0) {
        $aSize = getimagesize($sTempFileName); // try to obtain image info
        if (!$aSize) {
            @unlink($sTempFileName);
            return null;
        }

        // check for image type
        switch($aSize[2]) {
            case IMAGETYPE_JPEG:
                $sExt = '.jpg';

                // create a new image from file
                $vImg = @imagecreatefromjpeg($sTempFileName);
                break;
            case IMAGETYPE_PNG:
                $sExt = '.png';

                // create a new image from file
                $vImg = @imagecreatefrompng($sTempFileName);
                break;
            default:
                @unlink($sTempFileName);
                return null;
        }
        $smallFile = $vImg;

        // create a new true color image
        $vDstImg = @imagecreatetruecolor($iWidth, $iHeight);

        // copy and resize part of an image with resampling
        imagecopyresampled($vDstImg, $smallFile, 0, 0, (int)$_POST['x1'], (int)$_POST['y1'], $iWidth, $iHeight, (int)$_POST['w'], (int)$_POST['h']);

        // define a result image filename
        $sResultFileName = $uploadDir . uniqid() . $sExt;

        // output image to file
        imagejpeg($vDstImg, $sResultFileName, $iJpgQuality);
        @unlink($sTempFileName);

        return $sResultFileName;
    }
    return null;
}

require_once "admin/connect.php";

$sImage = uploadImageFile();
$username = $_SESSION['username'];

if ($sImage != null) {
    $query1 = "UPDATE users SET pathToAvatar='$sImage' WHERE username='$username'";

    $query2 = "UPDATE photos SET pathToAvatar='$sImage' WHERE username='$username'";
    if ($dbLink->query($query1) && $dbLink->query($query2)) {
        header('Location: ' . 'profile.php');
        exit;
    } else {
        exit ("
    <html>
        <header>
            <title>Photo Gallery</title>
            <meta charset='UTF-8' content=\"text/html\"/>
        </header>
        <body>
            <div align='center'>
                <h3>Ошибка при загрузке фотографии</h3>
                <a href='index.php'>
                    <b>Назад</b>
                </a>
                </h3>
            </div>
        </body>
    </html>");
    }
}
