<?php
include "header.php";

$stmt = $pdo->prepare('SELECT * FROM user WHERE username = :username AND password = :password');
$values = [
    'username' => $_POST['username'],
    'password' => $_POST['password'],
];
$stmt->execute($values);

if ($stmt->rowCount() > 0) {
    $user = $stmt->fetch();
    $_SESSION['loggedin'] = $user['id'];
    header('Location: admin.php');} else {
    echo 'Sorry, your username and password could not be found';
}

?>

<main>
	<article>
		<h2 id="signintext">Sign in</h2>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="signinbox">
				<label>Username:</label>
				<input type="text" name="username" />
				<label>Password:</label>
				<input type="password" name="password" />
				<input type="submit" name="submit" value=Submit />
			</div>
		</form>
	</article>
</main>
<?php

include "footer.php";

?>