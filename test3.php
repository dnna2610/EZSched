<?php
echo "Hello World!\n";
include "simple_html_dom.php";
include "function.php";

$html_home = file_get_html('https://duapp2.drexel.edu/webtms_du/app');

// This will find the link for the quarter that we are looking for.
foreach ($html_home->find('a') as $element)
{
	if ($element->plaintext == "Spring Quarter 14-15") 
	{
		$link = "https://duapp2.drexel.edu" . $element->href; 
		echo "\n";	
	}
}

//$link = $link.find("service")

// $link = $link . "&sp=1";
echo $link;