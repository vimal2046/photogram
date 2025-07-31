<pre>


<?php
include 'libs/load.php'; 


$mic1 = new Mic("Razer");
$mic2 = new Mic("Blade");

print(testFunction());//No construction No destruction needed

$mic1->setLight("White\n");
$mic1->setModel("Vimal model\n");

print("Model of mic2 is ".$mic1->getModelProperty()); //prints Vimal Model

print($mic1->getBrand()."\n");
print($mic2->getBrand());

$conn = Database::getConnection();
?>
<br>
<?
$conn = Database::getConnection();

$conn = Database::getConnection();
?>
</pre>