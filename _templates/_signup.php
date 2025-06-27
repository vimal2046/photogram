<main class="form-signup">
<form method = "post" action = "test.php">
  <img class="mb-4" src="https://labs.selfmade.ninja/assets/brand/logo-text-opt.svg" alt="" height="50">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="username" class="sr-only">Username</label>
  <input name="username" type="text" id="username" class="form-control" placeholder="User name" required="" autofocus="">
  
  <label for="inputEmail" class="sr-only">Email address</label>
  <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
  <label for="phoneNumber" class="sr-only">Phone number</label>
<input name="phoneNumber" type="tel" pattern="[6-9][0-9]{9}" required id="phoneNumber" class="form-control" placeholder="Phone Number" autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input name ="pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  <button class="btn btn-lg btn-info btn-block hvr-wobble-horizontal" type="submit">Sign up</button>


</form>

</main>