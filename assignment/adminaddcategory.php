<?php

include 'header.php';

if (isset($_POST['submit'])) {
    $add = $pdo->prepare('INSERT INTO categories (categoryname) VALUES (:categoryname)');
    unset($_POST['submit']);
    $add->execute($_POST);
    header("Refresh:0");

}

?>


<main>
	<article>
		<h2 id="signintext">Add a category</h2>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="signinbox">
				<label>Category name:</label>
				<input id="categoryname" type="text" name="categoryname" />
				<input type="submit" name="submit" value=Add />
			</div>
		</form>
	</article>
</main>


<?php

include 'footer.php';

?>