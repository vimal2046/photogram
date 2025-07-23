<pre>


<?php
include 'libs/load.php'; 

// print_R($_SERVER);

// print_r($_POST);
// print("printing get\n");
// print_r($_GET);
// print_r($_FILES);
// print_r($_COOKIE);

// if (signup("vimalSAS","vimal@example.com","9895645825","Password#121")){
//     echo"passed data";
// }else{
//     echo "Not Passes";
// }
/*
*/

$mic1 = new Mic("Razer");
$mic2 = new Mic("Blade");


$mic1->setLight("White\n");
$mic1->setModel("Vimal model\n");

print("Model of mic2 is ".$mic1->getModelProperty()); //prints Vimal Model

print($mic1->getBrand()."\n");
print($mic2->getBrand());

