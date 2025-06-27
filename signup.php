<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up | Task Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="login-body">
  <form method="POST" action="app/signup.php" class="shadow p-4">
    <h3 class="display-4">SIGN UP</h3>

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
      <label for="full_name" class="form-label">Full Name</label>
      <input type="text" class="form-control" name="full_name" required>
    </div>
    <div class="mb-3">
      <label for="user_name" class="form-label">Username</label>
      <input type="text" class="form-control" name="user_name" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" required>
    </div>
    <div class="mb-3">
      <label for="role" class="form-label">Role</label>
      <select name="role" class="form-select" required>
        <option value="employee">Employee</option>
        <option value="admin">Admin</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Sign Up</button>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
