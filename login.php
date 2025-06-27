<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Task Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="img/png" href="img/favicon.png">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="login-body">
  <form method="POST" action="app/login.php" class="shadow p-4">
    <h3 class="display-4 mb-4">LOGIN</h3>

    <?php if(isset($_GET['error'])) { ?>
      <div class="alert alert-danger" role="alert">
        <?php echo stripslashes($_GET['error']); ?>
      </div>
    <?php } ?>

    <?php if(isset($_GET['success'])) { ?>
      <div class="alert alert-success" role="alert">
        <?php echo stripslashes($_GET['success']); ?>
      </div>
    <?php } ?>

    <div class="mb-3">
      <label for="user_name" class="form-label">Username</label>
      <input type="text" class="form-control" name="user_name" required>
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
    </div>

    <button type="submit" class="btn btn-primary w-100">Login</button>

    <div class="text-center mt-3">
      <small>Don't have an account? <a href="signup.php">Sign up here</a></small>
    </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
