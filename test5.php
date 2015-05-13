<?php
include "function.php";

$link = "";
$subject = "MATH";
$college = "";
get_link( $link, $subject, $college);
echo $link;

$html = file_get_contents( $link);
echo $html;
echo $link;

// $html = file_get_html($link);
// $html->clear();
// echo $html->plaintext;


// foreach ($html-> find('a') as $element)
// {
// 	echo "<p>";
// 	echo $element; echo "Sup</p>";
// }