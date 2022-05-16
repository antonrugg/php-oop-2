<?php

    class Product {
        public $name;
        public $type;
        public $quantity;
        public $price;
        public $products = [];

        function __construct($_name, $_type, $_price){
        $this->name = $_name;
        $this->type = $_type;
        $this->price = $_price;
    }


        public function addProduct(){
            $product = new Product($_name, $_type, $_price);
            if($creditCard){
                $this->products[] = $product;
                return $product;
            } else{
                throw new Exception('Your credit card is expired or your date of expiration is wrong. Try again.');
            }
        }

        


    }

    class FoodProduct extends Product {
        public $size;
    }

    class GameProduct extends Product {
        public $color;
    }

    class DogBedProduct extends Product {
        public $size;
        public $fabric;
    }


?>