<?php
session_start();

$imgpath = $_SERVER['DOCUMENT_ROOT'].'/phpimagesearch/images/new-images/';

$imgarrays = array("2000" => glob($imgpath."2000_*.jpg"),
			  "1400" => glob($imgpath."1400_*.jpg"),
			  "800" => glob($imgpath."800_*.jpg"),
              "600" => glob($imgpath."600_*.jpg"));
              
foreach($imgarrays as $imgSize => $imgArr){
    shuffle($imgArr);
    $_SESSION['stdImg' . $imgSize] = explode("C:/xampp/htdocs", $imgArr[0])[1];
}