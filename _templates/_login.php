
<?php
$username = $_POST['email'];
$pass = $_POST['pass'];

?>
 
<main class="form-signin">
<form method = "post" action = "login.php">
  <img class="mb-4" src="https://labs.selfmade.ninja/assets/brand/logo-text-opt.svg" alt="" height="50">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
  <label for="inputPassword" class="sr-only">Password</label>
  <input name ="pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-info btn-block hvr-wobble-horizontal" type="submit">Sign in</button>


</form>

</main>
