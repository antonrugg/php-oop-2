<?php
    include_once __DIR__ . '/product.php';

    class User {
        public $username;
        public $email;
        public $address;
        public $creditCardExpired;
        protected $signed = false;
        protected $discount = 0;

    }

    class SignedUser extends User {
        protected $signed = true;




        public function setDiscount(){
            return $this->discount = 20;
        }

          

    }
?>