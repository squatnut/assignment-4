<?php

class DvdTitle {
    protected $asin; 
    protected $title;
    protected $price;

    public function Asin() {
        return $this->asin;
    }
    
    public function Price() {
        return $this->price;
    }

    public function SetAsin($new_asin) {
        // validation
        if ( !is_string($new_asin) ) {
            return false;
        }
        $this->asin = $new_asin;
        return true;
    }
    
    public function SetTitle($new_title) {
        // validation
        if ( !is_string($new_title) ) {
            return false;
        }
        $this->title = $new_title;
        return true;
    }
    
    public function SetPrice($new_price) {
        // validation
        if ( !is_float($new_price) ) {
            return false;
        }
        $this->price = $new_price;
        return true;
    }

    public function Title() {
        return $this->title;
    }
}

