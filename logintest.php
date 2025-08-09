<?php

include 'libs/load.php';


$username = "vimalsuji@gmail.com";
$password = isset($_GET['password']) ? $_GET['password']  : '';
$result  = null;

if(isset($_GET['logout'])){
    Session::destroy();
    die("Session Destroyed, Login again <a href='logintest.php'>Login Again</a>'  ");
    
}

if (Session::get('is_Loggedin')== true){
    $userdata = Session::get('session_user');

    print("Welcome Back, $userdata[username]");
    $result = $userdata;
}else{
    print("No Session found try to login now.");
    $result = User::login($username,$password);
}

if ($result)
{
    echo "login succeeess";
    Session::set("is_Loggedin",true);
    Session::set('session_user',$result);
}else{
    echo "Login Failed";
}