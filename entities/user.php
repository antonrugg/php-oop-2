<?php
    class User {
        public $username;
        public $email;
        public $address;
        public $creditCardExpired;
        public $signed = false;
        protected $discount = 0;

    }

    class SignedUser extends User {
        public $signed = true;

        public function setDiscount(){
            return $this->discount = 20;
        }

        public function getDiscount($signed){
            if($signed){
                return $price - ($price * $this->discount  / 100);
            }
        }

    }
?>