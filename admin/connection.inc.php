<?php
session_start();
$con=mysqli_connect("localhost","root","","ecommerce",3308);
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/Ecommerce/');
define('SITE_PATH','http://127.0.0.1/Ecommerce/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');

define('PRODUCT_MULTIPLE_IMAGE_SERVER_PATH',SERVER_PATH.'media/product_images/');
define('PRODUCT_MULTIPLE_IMAGE_SITE_PATH',SITE_PATH.'media/product_images/');

define('BANNER_SERVER_PATH',SERVER_PATH.'media/banner/');
define('BANNER_SITE_PATH',SITE_PATH.'media/banner/');

define('SHIPROCKET_TOKEN_EMAIL','aneshachopra@gmail.com');
define('SHIPROCKET_TOKEN_PASSWORD','aakriti');

?>