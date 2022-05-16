<?php
    include_once __DIR__ . '/user.php';

    class Product {
        public $name;
        public $type;
        public $quantity;
        public $price;
        public $products = [];

        function __construct($_name, $_type, $_price, $_signed){
        $this->name = $_name;
        $this->type = $_type;
        $this->price = $_price;
    }


        public function addProduct(){
            $product = new Product($_name, $_type, $_price, $_signed);
            if($this->creditCardExpired){
                $this->products[] = $product;
                return $product;
            } else{
                throw new Exception('Your credit card is expired or your date of expiration is wrong. Try again.');
            }
        }

        public function getDiscount(){
            {
                if($signed = true){
                    $discount = 20;
                    return $this->price - ($this->price * $discount  / 100);
                }
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