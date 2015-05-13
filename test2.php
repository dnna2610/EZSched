<?php
echo "Hello World!\n";
include "simple_html_dom.php";

$html_home = file_get_html('https://duapp2.drexel.edu/webtms_du/app');

// This will find the link for the quarter that we are looking for.
foreach ($html_home->find('a') as $element)
{
	if ($element->plaintext == "Spring Quarter 14-15") 
	{
		$link_quarter = "https://duapp2.drexel.edu" . $element->href; 
		echo "\n";		
		// echo $link_quarter;
	}
}

$html_quarter = file_get_html($link_quarter);

// This will find the link for the college that we are looking for.
foreach ($html_quarter->find('a') as $element)
{
	if ($html_quarter->plaintext == "Arts and Sciences")
	{
		$link_college = "https://duapp2.drexel.edu" . $element->href;
		echo "Found.\n";
		// echo $link_college;
	}
}

// $html_college = file_get_html($link_college);
// 
// // This will find the link for the subject that we are looking for.
// foreach ($html_college->find('a') as $element)
// {
// 	if ($html_college->plaintext == "Mathematics")
// 	{
// 		$link_subject = "https://duapp2.drexel.edu" . $element->href;
// 		echo "\n";
// 		echo $link_subject;
// 	}
// }