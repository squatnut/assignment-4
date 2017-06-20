<?php

include "persistence_interface.php";
include "domain_interface.php";

class Mem implements PersistenceInterface {
    private $type; //type of object
    private $prototype;
    private $search;
    protected $buf;

    public function __construct($item, $searchFunc) {
        $this->type = gettype($item);
        $this->prototype = $item;
        $this->search = $searchFunc
        $this->buf[$item->Asin] = $item;
    }

    public function Count() {
        return count($this->buf);
    }

    public function Create($item) {
        $this->buf[$item->Asin] = $item;
    }

    public function Read($id) {
        $target = $this->searchFunc($id, $this->buf);
        return $target;
    }

    public function ReadAll() {
        return $this->buf;
    }

    public function Update($id, $values) {
        // $this->buf[$id] = $values;
    }

    public function Delete($id) {
        unset($this->buf[$id]);
    }

    public function Clear() {
        unset($this->buf);
    }
}
