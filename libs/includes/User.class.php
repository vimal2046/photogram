<?php

class User{
      private $conn;    
      public static function signup($user, $email, $phone, $pass)
      {
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // convert all MySQL errors to exceptions

    $error = false;

    try {
        $conn = Database::getConnection();
        $conn->set_charset("utf8mb4");

        $sql = "INSERT INTO `auth` (`username`, `email`, `phone`, `password`, `blocked`, `active`)
        VALUES ('$user', '$email', '$phone' , '$pass', '0', '1');";

        if ($conn->query($sql) === TRUE) {
            echo "✅ New record created successfully<br>";
            $error = false;
        } else {
            echo "❌ New record not created successfully<br>"; // This won't ever run if mysqli_report is active
            $error = $conn->error;
        }

        $conn->close();
    } catch (mysqli_sql_exception $e) {
        echo "🔥 Caught Exception: " . $e->getMessage() . "<br>";
        $error = $e->getMessage();
    }

    return $error;
      }
      public function __construct($username)
      {
        $this->conn = Database::getConnection();
        $this->conn->query();
      }
}