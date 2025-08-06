<?php

$str = <<< EOL
    I really searched for a function that would do this as I've seen it in other 
    languages but I couldn't find it here. This is particularily useful when combined 
    with substr() to take the first part of a string up to a certain point

EOL;

echo md5($str);
print("md5 len --------->".strlen(md5($str))."\n");
$decoded =  base64_encode($str);
print("base64 encoded lenght".strlen(base64_encode($str))."\n");
print(base64_decode($decoded));
