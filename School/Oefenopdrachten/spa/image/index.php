<?php

error_reporting(-1);
set_include_path('./' . PATH_SEPARATOR . '../' . PATH_SEPARATOR . '../../' . PATH_SEPARATOR . '../../../');
//session_start();
ini_set('memory_limit', '1024M');

require_once 'common/system/GET.php';
require_once 'common/system/Folder.php';
require_once 'common/system/JPG.php';

$src = GET::get('src'); // path, like "Jane Doe/My Garden/0001.jpg"

$wShow = GET::get('w'); // display width in pixels
$hShow = Get::get('h'); // display height in pizels (

$jpg = new JPG(IMG_FILE_ROOT, $src);
$folder = $jpg->getFolder();
$filename = $jpg->getFilename();

$resized = ".resized";

list($wOrg, $hOrg, $type, $attr) = $jpg->getimagesize();

if (($wShow == '' || $wShow >= $wOrg) && ($hShow == '' || $hShow >= $hOrg)) {
    header('Content-Type: image/jpeg');
    $jpg->readfile();
    exit;
}

if ($wShow == '') {
    $wShow = $hShow * $wOrg / $hOrg;
}

$wMax = 1600;

if ($wShow <= 200) {
    $wStd = 200;
} else if ($wShow <= 400) {
    $wStd = 400;
} else if ($wShow <= 800) {
    $wStd = 800;
} else {
    $wStd = $wMax;
}
$folderShowBase = new Folder($folder, $resized);
if (!$folderShowBase->exists()) {
    $folderShowBase->create(false);
}
$folderShow = new Folder($folder, "/$resized/$wStd");
if (!$folderShow->exists()) {
    $folderShow->create(false);
}
$jpgStd = new JPG($folderShow, $filename);
if (!$jpgStd->exists()) {
    $jpgStd->createW($jpg, $wStd);
}
header('Content-Type: image/jpeg');
$jpgStd->readfile();
