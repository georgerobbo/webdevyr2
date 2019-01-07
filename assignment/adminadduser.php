<?php
require_once 'header.php';



	if (isset($_POST['submit'])) {
		$add = $pdo->prepare('INSERT INTO user (username, password) VALUES (:username, :password)');
		unset($_POST['submit']);
		$add->execute($_POST);
		header("Refresh:0");

	}

	?>

<main>
	<article>
		<h2 id="signintext">Add a user</h2>
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
			<div class="signinbox">
				<label>Username:</label>
				<input id="username" type="text" name="username" />
				<label>Password:</label>
				<input id="password" type="password" name="password" />
				<input type="submit" name="submit" value=Add />
			</div>
		</form>
	</article>
</main>

<?php
require_once 'footer.php';
?>