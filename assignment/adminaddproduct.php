<?php

include 'header.php';

if (isset($_POST['submit'])) {
    $add = $pdo->prepare('INSERT INTO products (productname, productdesc, productprice, featured, productcat) VALUES (:productname, :productdesc, :productprice, :featured, :productcat)');
    unset($_POST['submit']);
    $add->execute($_POST);
    header("Refresh:0");

}

?>


<main>
	<article>
		<h2 id="signintext">Add a user</h2>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="signinbox">
				<label>Product name:</label>
				<input id="productname" type="text" name="productname" />
				<label>Product Description:</label>
				<input id="productdesc" type="text" name="productdesc" />
				<label>Product Price</label>
				<input type="text" name="productprice" id="productprice">
				<label>Featured?</label>
				<input type="checkbox" name="featured" id="featured" name="featured">
				<label>Product Category (Tv,phone,computer or gaming</label>
				<input type="text" name="productcat" id="productcat" name="productcat">
				<input type="submit" name="submit" value=Add />
			</div>
		</form>
	</article>
</main>


<?php

include 'footer.php';

?>