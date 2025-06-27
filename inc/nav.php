<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if session variables are set
if (!isset($_SESSION['role']) || !isset($_SESSION['id']) || !isset($_SESSION['username'])) {
    $em = "Please login first";
    header("Location: login.php?error=" . urlencode($em));
    exit();
}

$username = $_SESSION['username'];
$role = $_SESSION['role'];
?>


<nav class="side-bar">
    <div class="user-p">
        <img src="img/user.png" alt="User Image">
        <h4>@<?php echo htmlspecialchars($username); ?></h4>
    </div>

    <!-- Role-based Sidebar Navigation -->
    <?php if($role === "employee") { ?>
    <!-- Employee Sidebar -->
    <ul>
        <li><a href="#"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
        <li><a href="#"><i class="fa fa-tasks"></i><span>My Tasks</span></a></li>
        <li><a href="#"><i class="fa fa-user"></i><span>Profile</span></a></li>
        <li><a href="#"><i class="fa fa-bell"></i><span>Notifications</span></a></li>
        <li><a href="logout.php"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
    </ul>
    <?php } else { ?>
    <!-- Admin Sidebar -->
    <ul>
        <li><a href="#"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
        <li class="active"><a href="user.php"><i class="fa fa-users"></i><span>Manage Users</span></a></li>
        <li><a href="create_task.php"><i class="fa fa-plus"></i><span>Create Task</span></a></li>
        <li><a href="tasks.php"><i class="fa fa-tasks"></i><span>All Tasks</span></a></li>
        <li><a href="notifications.php"><i class="fa fa-bell"></i><span>Notifications</span></a></li>
        <li><a href="logout.php"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
    </ul>
    <?php } ?>
</nav>
