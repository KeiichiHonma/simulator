<?php
//require_once('fw/prepend.php');
//header('Content-type: image/jpeg');
$handle = fopen('http://a4.mzstatic.com/us/r1000/084/Purple/79/69/95/mzl.heabknkr.175x175-75.jpg', 'rb');
$image = new Imagick();
$image->readImageFile($handle);
$image->thumbnailImage(75, 200,true);
$image->roundCorners(12, 12);
//$image->setImageBackgroundColor('#FFFFFF');
$image->paintOpaqueImage(new ImagickPixel('rgba( 0, 0, 0, 0.0)'), new ImagickPixel('white'), 0);
//$image->readImage('http://a4.mzstatic.com/us/r1000/084/Purple/79/69/95/mzl.heabknkr.175x175-75.jpg');  // ファイルを読み込む

echo $image;
//$image->writeImage("/usr/local/apache2/htdocs/simulator/img/phone/test.jpg");
die();
//$image->show();

// 幅あるいは高さに 0 を指定すると、
// 元の画像のアスペクト比を維持します
//$image->thumbnailImage(100, 0);

//echo $image;

//$image = new ImagickThumbnailer('http://a4.mzstatic.com/us/r1000/084/Purple/79/69/95/mzl.heabknkr.175x175-75.jpg');
//$image->roundCorner(20, 20);
//$image->show();
//die();
//$image =& new Imagick();
//$image->readImage('test2.jpg');  // ファイルを読み込む
//$image->roundCorners(20, 20);    // 角の半径を指定する
//$image->setImageFormat('png');   // 画像形式をpngに
//$image->writeImage('test2r.png'); //ファイルに保存

//$con->append();
?>
