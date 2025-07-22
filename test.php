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
$mic1 = new Mic();//instancing or constructing the object
$mic2 =  new Mic();//instancing or constructing the object

$mic1->brand = 'Rods';
$mic2->brand = 'Hynix';

print $mic1->brand;
print $mic2->brand;

$mic1 ->light ='RGB';
$mic1 ->setLight('Blue');

// $mic1->setModel("hyper kundi"); // This will not work because setModel is private
// print("Model of 1st mic is ".$mic1->model);
*/

$mic1 = new Mic();
$mic2 = new Mic();


$mic1->brand = "hydra\n";
$mic2->brand = "disco\n";
 
$mic1->light="red\n";

$mic1->setLight("White\n");

print($mic1->light);

$mic1->setModel("Vimal model\n");

print("Model of mic2 is".$mic1->getModelProperty()); //prints Vimal Model

// print("-----".$mic1->model); //Cannot access private property


$mic2->setModel("kjdhkjf\n");

// print($mic2->model); //Cannot access private property