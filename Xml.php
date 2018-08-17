<?php

class Xml {

    private $xml_file;
    public $balises = array("to", "from", "heading", "body");

    public function __construct($path_file) {
        $this->xml_file = $path_file;
    }

    public function load_xml() {
        $this->xml_file = simplexml_load_file($this->xml_file) or die("Error: Cannot generate xml file");
        return $this->xml_file;
    }

    public function extract_xml () {

        // var_dump($this->balises);
        // var_dump($this->balises[0]);
        // var_dump($this->xml_file->to);
        // var_dump($this->xml_file->$this->balises);

        foreach ($this->balises as $balise) {
            $tmp = $this->xml_file->$balise;
            $tmp =  $tmp . "<br>";
            echo $tmp;
        }

        // return $this->xml_file;
    }
}