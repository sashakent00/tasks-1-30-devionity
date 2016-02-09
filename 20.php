<?php

$book1 = array("bookStyle"=>"style1","bookName"=>"book1","authorName"=>"author1","bookPrice"=>"100");
$book2 = array("bookStyle"=>"style2","bookName"=>"book2","authorName"=>"author2","bookPrice"=>"200");
$book3 = array("bookStyle"=>"style3","bookName"=>"book3","authorName"=>"author3","bookPrice"=>"250");
$product = array ($book1,$book2,$book3);
echo"<pre>";
print_r($product);
echo"</pre>";

