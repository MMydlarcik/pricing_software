<?php

class Product {

    public $concurence = [];
    public $source = [];
    public $name;
    public $ean;

    public function __construct($name, $ean) {
        $this->name = $name;
        $this->ean = $ean;
    }

    public function addConcurence($key, $price, $availability) {
        $this->concurence[] = new ProductConcurence($key, $price, $availability);
    }

    public function addSource($key, $price, $availability, $prices = []) {
        $this->source[] = new ProductSource($key, $price, $availability, $prices);
    }

}


class ProductSource {

    public $key;
    public $price;
    public $availability;

    public function __construct($key, $price, $availability, $prices) {
        $this->key = $key;
        $this->price = $price;
        $this->availability = $availability;
        $this->prices = $prices; // tyden, mesic, 3 mesice
    }

    public function getKey() {
        return $this->key;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getAvailability() {
        return $this->availability;
    }

    public function getPrices($index) {
        return isset($this->prices[$index]) ? $this->prices[$index] : null;
    }

}

class ProductConcurence {

    public $key;
    public $price;
    public $availability;

    public function __construct($key, $price, $availability) {
        $this->key = $key;
        $this->price = $price;
        $this->availability = $availability;
    }

    public function getKey() {
        return $this->key;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getAvailability() {
        return $this->availability;
    }

}