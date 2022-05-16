<?php
    class User {
        public $username;
        public $email;
        public $address;
        public $creditCard;
        public $discount = 0;

    }

    class SignedUser extends User {
        public $discount = 20;

        public function setDiscount(){
            return $this->discount;
        }

    }
?>