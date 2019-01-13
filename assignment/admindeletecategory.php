<?php

require_once 'header.php';

if (isset($_POST['submit'])) {
    $delete = $pdo->prepare('DELETE FROM categories WHERE categoryname="' . $_POST['categoryname'] . '"');
    unset($_POST['submit']);
    $delete->execute($_POST);
    header("Refresh:0");
}

?>

<main>
	<article>
		<h2 id="signintext">Delete a category</h2>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="signinbox">
				<label>Category name:</label>
				<input id="categoryname" type="text" name="categoryname" />
				<input type="submit" name="submit" value=Delete />
			</div>
		</form>
	</article>
</main>

<?php

require_once 'footer.php';

?>