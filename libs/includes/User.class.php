<?php

class User{
      private static $salt = "gmlkwelnrkjlwen42lkvn43ng";
      private $conn;    
      public static function signup($user, $email, $phone, $pass)
      {
        $options = [
          'cost'=>5,
        ];
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // convert all MySQL errors to exceptions

    $error = false;

    try {
        $conn = Database::getConnection();
      //  $pass = md5(strrev(md5($pass)).User::$salt);
       $pass = password_hash($pass,PASSWORD_BCRYPT,$options);
        $sql = "INSERT INTO `auth` (`username`, `email`, `phone`, `password`, `blocked`, `active`)
        VALUES ('$user', '$email', '$phone' , '$pass', '0', '1');";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully<br>";
            $error = false;
        } else {
            echo "New record not created successfully<br>"; // This won't ever run if mysqli_report is active
            $error = $conn->error;
        }

        $conn->close();
    } catch (mysqli_sql_exception $e) {
        echo "Caught Exception: " . $e->getMessage() . "<br>";
        $error = $e->getMessage();
    }

    return $error;
    }

      public static function login($login_id,$password)
      {

      // $pass = md5(strrev(md5($password)).User::$salt);
       $query = "SELECT * FROM `auth` WHERE `username` = '$login_id'";
       $conn = Database::getConnection();
       $result = $conn->query($query);
       if($result ->num_rows == 1 ){
         $row = $result->fetch_assoc();
        // if ($row['password'] == $pass){
         if (password_verify($password,$row['password'])){
          return $row;
         }
       }else{
        return false;
       }
      }



      
       public function __construct($username)
      {
        $this->conn = Database::getConnection();
        $this->conn->query();
      }
       
}

     
