<?php
session_start();

$error = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login_id = $_POST['login_id'];
    $password = $_POST['password'];

    // DB connection
    $conn = new mysqli("mysql.selfmade.ninja", "vimal", "vimal2003@098", "vimal_photogram_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL to check both email and username
    $sql = "SELECT * FROM auth WHERE email = ? OR username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $login_id, $login_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // If user found
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // ✅ Verify the password using password_verify
        if (($password === $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            // Redirect to dashboard
            header("Location: index.php");
            exit;
        } else {
            $error = "❌ Incorrect password.";
        }
    } else {
        $error = "❌ User not found with this email/username.";
    }

    $stmt->close();
    $conn->close();
}
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
