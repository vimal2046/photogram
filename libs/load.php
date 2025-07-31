<?php
$includesPath = __DIR__ . '/includes/';
foreach (glob($includesPath . '*.php') as $filename) {
    include_once $filename;
}


function load_template($name){
    include $_SERVER['DOCUMENT_ROOT']."/photogram/_templates/$name.php";
} 

function signup()
{

}


