<pre>
<?
include 'libs/load.php';
// print_R($_SERVER);

// print_r($_POST);
// print_r($_GET);
// print_r($_FILES);
// print_r($_COOKIE);
Session::start();
setcookie("testcookie","testvalue",time() + (86400 * 30),"/");


print_r($_SESSION);
print($_SESSION);

if(isset(($_GET['clear']))){
    
    Session::unset();
    printf("Clearing the Session....");
}
//We can persist data accross request
if(Session::isset('a'))
{
    print("Already value has been assigned..Value :" .Session::get('a'));
}
else
{
    Session::set('a',time());
    print("value for is just now assigned. and the value is $_SESSION[a]");
}


?>

</pre>