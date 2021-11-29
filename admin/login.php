<?php 

include '../config.php';

session_start();
error_reporting(0);
$error = '<h3>Username Or Password is Incorrect</h3>';

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['admin'] = $username;
		header("Location: index.php");
	} else {
		
		$_SESSION["error"] = $error;
		header("Location: login.php");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>VDA | Admin Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="..\assets\css\admin.css">
	 <link href="../assets/img/logo1.png" rel="icon">
  <link href="../assets/img/logo1.png" rel="apple-touch-icon">
</head>
<body class="cbody">
	<section>
	<div>

	<div class="containers">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2.5rem; font-weight: 800;">Admin Login</p>
			<div class="input-group">
			<input type="text" placeholder="Username" name="username" id="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
			<input type="password" placeholder="Password" name="password" id="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
			<button name="submit" class="btn" id="btnsubmit">Login</button>
			<?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>
			</div></div>
<a href="../index.php"><i>Go To Home Page <i class="fa fa-home"></i></i></a>
</section>
</body>
</html>