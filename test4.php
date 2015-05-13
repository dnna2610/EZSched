<?php
include "simple_html_dom.php";

$link = "https://duapp2.drexel.edu/webtms_du/app";
$html = file_get_html($link);
foreach( $html->find('a') as $element)
{
	echo "<p>";
	echo $element;
	echo "</p>";
}