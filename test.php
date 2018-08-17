<?php

require "Xml.php";

// $os = new Xml("os.xml");
// $loaded_os = $os -> load_xml();
// $loaded_os = $os -> extract_xml();
// var_dump($loaded_os);

$xml = new Xml("note.xml");
$loaded_xml = $xml -> load_xml();
var_dump($loaded_xml);
$xml -> extract_xml();
// var_dump($extract_xml);


echo "-------------------------------<br>";

$xmll = simplexml_load_file("note.xml") or die("Error: Cannot generate xml file");
var_dump($xmll);
echo $xmll->to . "<br>";
echo $xmll->from . "<br>";
echo $xmll->heading . "<br>";
echo $xmll->body;
