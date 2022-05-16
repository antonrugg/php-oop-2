<?php
    class User {
        public $username;
        public $email;
        public $address;
        public $creditCardExpired;
        protected $discount = 0;

    }

    class SignedUser extends User {

        public function setDiscount(){
            return $this->discount = 20;
        }

    }
?>