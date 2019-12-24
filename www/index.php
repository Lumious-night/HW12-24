<?php
$imgCat=array('animals','architecture','nature','people','tech');
for ($x = 0; $x <= 10; $x++) 
{
    $imgUrl="http://placeimg.com/30".($x%10)."/300/". $imgCat[rand(0,4)];
    echo "<img src='" . $imgUrl . "'>";
}
?>
