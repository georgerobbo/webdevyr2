<?php

require_once 'header.php';

if (isset($_POST['submit'])) {

    $edit = $pdo->query('UPDATE categories SET categoryname="' . $_POST['newcategory'] . '" WHERE categoryname="' . $_POST['categoryname'] . '"');
    unset($_POST['submit']);
    $edit->execute($_POST);
    header("Refresh:0");
}
?>

<main>
	<article>
		<h2 id="signintext">Edit a category</h2>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="signinbox">
				<label>Old Category:</label>
				<input id="categoryname" type="text" name="categoryname" />
				<label>New Category:</label>
				<input id="newcategory" type="text" name="newcategory" />
				<input type="submit" name="submit" value=Edit />
			</div>
		</form>
	</article>
</main>

<?php
require_once 'footer.php';
?>