<?php

/**
 * Liens à regarder :
 * 
 * xpath() : 
 * https://stackoverflow.com/questions/7015084/simplexml-php-extract-part-of-xml-document-convert-as-array
 * https://www.w3schools.com/php/func_simplexml_xpath.asp
 * 
 * attributes :
 * http://php.net/manual/en/simplexmlelement.attributes.php
 * https://www.w3schools.com/xml/met_element_hasattribute.asp
 */

require "Xml.php";

$os = new Xml("os.xml");
// $loaded_os = $os -> load_xml();
// var_dump($loaded_os);
$os -> extract_xml();

echo "-------------------------------<br>";

$xml = new Xml("note.xml");
$loaded_xml = $xml -> load_xml();
// var_dump($loaded_xml);
$xml -> extract_xml();
// var_dump($extract_xml);


echo "-------------------------------<br>";

$xmll = simplexml_load_file("note.xml") or die("Error: Cannot generate xml file");
// var_dump($xmll);
echo $xmll->to . "<br>";
echo $xmll->from . "<br>";
echo $xmll->heading . "<br>";
echo $xmll->body;

// $results = $xmll->xpath('*');
// // var_dump($results);
// foreach ($results as $result) {
//     echo $result . "<br>";
// }
