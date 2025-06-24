<?php

function load_template($name){
    include $_SERVER['DOCUMENT_ROOT']."/photogram/_templates/$name.php";
} 

//super globals -- php offering variables

function validate_credentials($username, $pass){
   
    if($username == "vimalchandar2003@gmail.com" and $pass == "password"){
        return true;
    }else{
        return false;
    }
}