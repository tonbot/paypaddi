<?php

$images = $_FILES['file_name'];
$images1 = $_FILES['file_name'];
$filename= basename($images['name']);
$filename1= basename($images1['name']);
$tempname= $images['tmp_name'];
$tempname= $images['tmp_name'];
$store_dir = "image/";
  if (move_uploaded_file($tempname, $store_dir.$filename)){
      echo 'success';
  }else{
      echo ('failed');
  }

?>