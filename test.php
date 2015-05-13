
<?php
echo "Hello Simple World!\n";
include_once "simple_html_dom.php";
// load page into a file
$html = file_get_html('https://duapp2.drexel.edu/webtms_du/app');
// $html = file_get_html('https://duapp2.drexel.edu/webtms_du/app?component=subjectDetails&page=CollegesSubjects&service=direct&sp=ZH4sIAAAAAAAAAFvzloG1uIhBPjWlVC%2BlKLUiNUcvs6hErzw1qSS3WC8lsSRRLyS1KJcBAhiZGJh9GNgTk0tCMnNTSxhEfLISyxL1iwtz9EECxSWJuQXWPgwcJUAtzvkpQBVCEBU5iXnp%2BsElRZl56TB5l9Ti5EKGOgamioKCEgY2IwNDE2NToJHBBSBVCoGliUVAZQqGJrqGpgBX3WZwpgAAAA%3D%3D&sp=SAS&sp=SMATH&sp=1');
// Find all links
$link = "https://duapp2.drexel.edu/webtms_du/app";
// foreach($html->find('a') as $element)
// {
// 	if ($element->plaintext == "Spring Quarter 14-15") $link=$link.$element->href; echo "\n";
// }		
$html2 = file_get_html($link);
foreach($html2->find('a') as $element)
{
	if ($element->plaintext == "Arts and Sciences") $link=$link.$element->href; echo "\n"; echo "done";
}
// echo $html->plaintext;
// echo $i;
?>
