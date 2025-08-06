<?php

include 'libs/load.php';


$username = "vimalchandar2";
$password = "vimalchandar2";
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