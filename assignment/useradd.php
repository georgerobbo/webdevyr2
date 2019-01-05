<?php
require_once 'header.php';

$sql = "INSERT INTO user (username, password)
VALUES ('".$_POST["username"]."','".$_POST["password"]."',)";

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
				<input type="submit" name="submit" value=Submit />
			</div>
		</form>
	</article>
</main>

<?php
require_once 'footer.php';
?>