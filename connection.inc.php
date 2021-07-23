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

define('INSTAMOJO_KEY','test_1f6a5b266d0cdd80a0ce8223fe8');
define('INSTAMOJO_TOKEN','test_6e6da98367d758973f0f92dd88d');
//https://www.youtube.com/watch?v=zWLKQ_loJqI&list=PLWCLxMult9xfYlDRir2OGRZFK397f3Yeb&index=24


define('SMTP_EMAIL','aneshachopra@gmail.com');
define('SMTP_PASSWORD','aakr@3053');
//https://www.youtube.com/watch?v=aBbmo1pi5B0&list=PLWCLxMult9xfY_dsYicKGcCLhlZ6YXFMh&index=1


define('SMS_KEY','WzCbBB2JgRkIIpsHo9CNVUSmf9BFgZQytJE0J0t7XLdEjZZBKeCeeHU2sVlZ');
//https://www.youtube.com/watch?v=_XaaIJlkNV4&list=PLWCLxMult9xfYlDRir2OGRZFK397f3Yeb&index=27
?>