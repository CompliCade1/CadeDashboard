<!DOCTYPE html>
<html>
	<head>
        <link href="css/fixedstyle.css" rel="stylesheet" type="text/css">
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="css/login.css" rel="stylesheet" type="text/css">
	</head>
<body>
<div class="wrapper">
<?php include 'navbar.php';?>
		<div class="login">
			<h1>Login</h1>
			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
                <div class = navbar>
                    <a href = signup.php class = signup>Sign-up</a>
                </div>
			</form>
		</div>
    </div>
	</body>
</html>