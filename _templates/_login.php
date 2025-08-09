<?php

$login = false;
print_r($_POST);
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_id']) && isset($_POST['password']))
{
  $login_id = $_POST['login_id'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $error = User::login($login_id,$password);

  $login = true;
}

if($login)
{
  if($error === false)
  {
    echo "Logged In Successfully.<br>";
    ?>
     <main class="container">
  <div class="bg-light p-5 rounded mt-3">
    <h1>Hi </h1>
    <p>sucesssfully logged in</p>
    <p>Now u can go Index <a href="index.php">here</a></p>
  </div>
  </main>
    <?
  }else{
    ?>
     <main class="container">
  <div class="bg-light p-5 rounded mt-3">
    <h1>Hi </h1>
    <p>failed to Login</p>
  <!-- <p>Error: <?php echo $error; ?></p> -->
    <p>Try again to  <a href="signup.php">Signup</a></p>
    
  </div>
  </main>

  <?
  }
}else{
  ?>
<!-- ✅ HTML FORM -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Photogram Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .form-signin {
      max-width: 400px;
      margin: auto;
      padding-top: 100px;
    }
  </style>
</head>
<body>

<main class="form-signin">
  <form method="post" action="login.php">
    <img class="mb-4" src="https://labs.selfmade.ninja/assets/brand/logo-text-opt.svg" alt="" height="50">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

    <?php if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

    <label for="login_id" class="sr-only">Email or Username</label>
    <input name="login_id" type="text" id="login_id" class="form-control" placeholder="Email or Username" required autofocus>

    <label for="password" class="sr-only">Password</label>
    <input name="password" type="password" id="password" class="form-control mt-2" placeholder="Password" required>

    <div class="checkbox mb-3">
      <label><input type="checkbox" value="remember-me"> Remember me</label>
    </div>

    <button class="btn btn-lg btn-info btn-block hvr-wobble-horizontal" type="submit">Sign in</button>
  </form>
</main>

</body>
</html>


  <?
}

?>
