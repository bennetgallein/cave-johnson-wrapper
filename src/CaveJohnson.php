<?php
namespace CaveJohnson;

class CaveJohnson {

    private $url = "http://cavejohnson.tk/";

    private $json;

    public function __construct() {
        $this->json = json_decode((file_get_contents($this->url . "json")), true);
    }
    
    public function getRandom($amount = 1) {
        if ($amount == 1) {
            return $this->localRandom();
        }
        $keys = array_rand($this->json, $amount);
        $results = array();
        foreach ($keys as $key) {
            $results[] =  $this->json[$key];
        }
        return $results;
    }
    
    public function getAll() {
        return $this->json;
    }
    
    public function getByName($name) {
        return $this->json[$name];
    }
    private function localRandom() {
        return json_decode(file_get_contents($this->url . "random/json"), true);
    }
}
