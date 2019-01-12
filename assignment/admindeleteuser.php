<?php

require_once 'header.php';

if (isset($_POST['submit'])) {
    $delete = $pdo->prepare('DELETE FROM user WHERE username="' . $_POST['username'] . '"');
    unset($_POST['submit']);
    $delete->execute($_POST);
    header("Refresh:0");
}
    ?>

<main>
	<article>
		<h2 id="signintext">Delete a user</h2>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="signinbox">
				<label>Username:</label>
				<input id="username" type="text" name="username" />
                <h2>WARNING:Can not be reversed and must know username</h2>
				<input type="submit" name="submit" value=Delete />
			</div>
		</form>
	</article>
</main>

<?php
require_once 'footer.php';
?>