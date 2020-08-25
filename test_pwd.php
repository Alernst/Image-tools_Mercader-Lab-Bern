<?php

$username = "";

$password = "";

if(isset($_POST['submit'])) {

$username = $_POST['username'];

$password = $_POST['password'];

if($username != "Bunny") {

$error['username'] = "Wrong Username";

}

if($password != "Rabbit") {

$error['password'] = "Wrong Password";

}

}

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8"/>

<title>Secure Information</title>

</head>

<body>

<?php if($username == "Bunny" && $password == "Rabbit") { ?>

<h1>Welcome</h1>

<!-- PROTECTED INFORMATION GOES HERE -->

<?php } else { ?>

<h2>Login</h2>

<?php foreach($error as $errors) {

echo "<p style='color: red;'>".$errors."</p>";

}

?>

<form name="login" action="secure_information.php" method="post">

<p>

<label for="username">Username</label>

<input type="text" id="username" class="username" name="username" placeholder="Username" value="<?php if(isset($username)) { echo $username; } ?>">

</p>

<p>

<label for="password">Password</label>

<input type="text" id="password" class="password" name="password" placeholder="Password" value="<?php if(isset($password)) { echo $password; } ?>">

</p>

<p>

<input type="submit" name="submit" value="Submit">

</p>

<?php } ?>

</form>

</body>

</html>