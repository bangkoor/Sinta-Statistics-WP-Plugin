<?php

header('Content-Type: application/json; charset=utf-8');

if(!isset($_GET["user"]))
	exit -1;


# create and load the HTML
include('simple_html_dom.php');
$html = new simple_html_dom();
$userID = filter_var($_GET['user'], FILTER_SANITIZE_STRING);
$url = "https://sinta.kemdikbud.go.id/authors/detail?id=".$userID."&view=overview";
$html->load_file($url);
//echo $html;

print "{\n \"overall score\": " . $html->find(".stat2-val", 0)->plaintext . ",\n";
print "\n \"3 years score\": " . $html->find(".stat2-val", 1)->plaintext . ",\n";
print "\n \"overall score v2\": " . $html->find(".stat2-val", 2)->plaintext . ",\n";
print "\n \"3 years score v2\": " . $html->find(".stat2-val", 3)->plaintext . ",\n";
print "\n \"books\": " . $html->find(".stat2-val", 4)->plaintext . ",\n";
print "\n \"rank national\": " . $html->find(".stat2-val", 5)->plaintext . ",\n";
print "\n \"3 years national rank\": " . $html->find(".stat2-val", 6)->plaintext . ",\n";
print "\n \"ipr\": " . $html->find(".stat2-val", 7)->plaintext . ",\n";
print "\n \"rank in affiliation\": " . $html->find(".stat2-val", 8)->plaintext . ",\n";
print "\n \"3 years affiliation rank\": " . $html->find(".stat2-val", 9)->plaintext . "\n";
print "}\n";


?>
