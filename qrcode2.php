<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/12/23
 * Time: 9:30
 */

include "common/qrcode.php";

$url="http://blog.csdn.net/DickyQie";
$level=3;
$size=6;
$errorCorrectionLevel =intval($level) ;//容错级别
$matrixPointSize = intval($size);//生成图片大小
//生成二维码图片
$object = new \QRcode();
$object->png($url, false, $errorCorrectionLevel, $matrixPointSize, 2);