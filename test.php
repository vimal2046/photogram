<pre>


<?php
include('libs/load.php');

// print_R($_SERVER);

// print_r($_POST);
// print("printing get\n");
// print_r($_GET);
// print_r($_FILES);
// print_r($_COOKIE);

if (signup("vimalSAS","vimal@example.com","9895645825","Password#121")){
    echo"passed data";
}else{
    echo "Not Passes";
}
?>

