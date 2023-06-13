<?php



if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $uid = $_POST["uid"];
    $email = $_POST["email"];
    $pswd = $_POST["pswd"];
    echo $email;
    
    include "signup-class.php";
    include "signup-control.php";
    $signup = new SignupContr($uid, $email, $pswd);
    
    if (preg_match('/^(?=.*\d)(?=.*[A-Z]).{8,}$/', $password)) {
        
    } else {
        
    }
}
