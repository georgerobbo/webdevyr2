<?php

require_once 'header.php';

if (isset($_POST['submit'])) {
$delete = $pdo->prepare('DELETE FROM products WHERE productname="' . $_POST['productname'] . '"');
unset($_POST['submit']);
$delete->execute($_POST);
header("Refresh:0");
}

?>

<main>
	<article>
		<h2 id="signintext">Delete a product</h2>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="signinbox">
				<label>Product name:</label>
				<input id="productname" type="text" name="productname" />
				<input type="submit" name="submit" value=Delete />
			</div>
		</form>
	</article>
</main>

<?php

require_once 'footer.php';

?>