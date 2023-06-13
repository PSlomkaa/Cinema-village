<?php

class Signup extends Dbh {
    
    protected function checkuser($uid, $email) {
        $stmt = $this->connect()->prepare('SELECT uźytkownicy_uid FROM uźytkownicy WHERE uźytkownicy_uid = ? OR uźytkownicy_email = ?;');

        if(!$stmt->execute(arra($uid, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        }
        else {
            $resultCheck = true;
        }

        return $resultCheck;
    
    }

}