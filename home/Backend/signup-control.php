<?php

class SignupContr(){
    
    private $uid;
    private $email;
    private $pswd;

    public function __construct($uid, $email, $pswd) {
        this->$uid = $uid;
        this->$email = $email;
        this->$pswd = $pswd;

    }

    private function singupUser() {
        
    }
}