<?php

require_once 'header.php';

if (isset($_POST['submit'])) {

    $edit = $pdo->query('UPDATE user SET username="' . $_POST['newusername'] . '" WHERE username="' . $_POST['username'] . '"');
    unset($_POST['submit']);
    $edit->execute($_POST);
    header("Refresh:0");
}
    ?>

<main>
	<article>
		<h2 id="signintext">Edit a user</h2>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="signinbox">
				<label>Old Username:</label>
				<input id="username" type="text" name="username" />
				<label>New Username:</label>
				<input id="newusername" type="text" name="newusername" />
				<input type="submit" name="submit" value=Edit />
			</div>
		</form>
	</article>
</main>

<?php
require_once 'footer.php';
?>