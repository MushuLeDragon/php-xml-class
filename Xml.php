<?php

class Xml {

    private $xml_file;

    public function __construct($path_file) {
        $this->xml_file = $path_file;
    }

    public function load_xml() {
        $this->xml_file = simplexml_load_file($this->xml_file) or die("Error: Cannot generate xml file");
        return $this->xml_file;
    }

    public function balises_path_xml() {

    }

    public function extract_xml () {
        
        $results = $this->xml_file->xpath('*');

        foreach ($results as $result) {
            echo $result . "<br>";
        }
    }
}