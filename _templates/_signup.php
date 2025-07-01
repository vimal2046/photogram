<?php


$signup = false;
print_r($_POST);
if(isset($_POST['username']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['password'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
   
  $error = signup($username,$email,$phone,$password);

    $signup = true;
}

?>

<?php

  if($signup){

 if ($error === false){
  echo "Inside SUCCESS block.<br>"; // Check if this prints
   ?>
 <main class="container">
  <div class="bg-light p-5 rounded mt-3">
    <h1>Hi </h1>
    <p>sucesssignu</p>
    <p>Now u can login <a href="login.php">here</a></p>
  </div>
  </main>
 <?php
 }else {
 
  ?>
    <main class="container">
  <div class="bg-light p-5 rounded mt-3">
    <h1>Hi </h1>
    <p>failed to sign up</p>
  <p>Error: <?php echo $error; ?></p>
    <p>Now u cannot login <a href="photogram/login.php">here</a></p>
    
  </div>
  </main>
   
  

  <?php
 }
?>

  <?php
  }else{

  ?>
<main class="form-signup">
<form method = "post" action = "signup.php">
  
  <img class="mb-4" src="https://labs.selfmade.ninja/assets/brand/logo-text-opt.svg" alt="" height="50">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="username" class="sr-only">Username</label>
  <input name="username" type="text" id="username" class="form-control" placeholder="User name" required="" autofocus="">
  
  <label for="inputEmail" class="sr-only">Email address</label>
  <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
  <label for="phoneNumber" class="sr-only">Phone number</label>
<input name="phone" type="tel" pattern="[6-9][0-9]{9}" required id="phone" class="form-control" placeholder="Phone Number" autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input name ="password" type="password" id="password" class="form-control" placeholder="Password" required="">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  <button class="btn btn-lg btn-info btn-block hvr-wobble-horizontal" type="submit">Sign up</button>


</form>

</main>
<?php } ?>