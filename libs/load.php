<?php

include_once 'includes/Mic.class.php';

function load_template($name){
    include $_SERVER['DOCUMENT_ROOT']."/photogram/_templates/$name.php";
} 

//super globals -- php offering variables

// function validate_credentials($username, $pass){
   
//     if($username == "vimalchandar2003@gmail.com" and $pass == "password"){
//         return true;
//     }else{
//         return false;
//     }
// }

function signup($user, $email, $phone, $pass)
{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // convert all MySQL errors to exceptions

    $servername = "mysql.selfmade.ninja";
    $username = "vimal";
    $password = "vimal2003@098"; // or wrong one for testing
    $dbname = "vimal_photogram_db";

    $error = false;

    try {
        $conn = new mysqli($servername, $username, $password, $dbname);
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


