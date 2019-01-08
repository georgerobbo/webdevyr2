<?php

require_once 'header.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $productname = "";
    $productdesc = "";
    $productprice = "";
    $featured = "";
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productname = trim($_POST["productname"]);
    $productdesc = trim($_POST["productdesc"]);
    $productprice = trim($_POST["productprice"]);
    $featured = trim($_POST["featured"]);
}

if (isset($_POST['submit'])) {
    $delete = $pdo->prepare('DELETE FROM products WHERE productname = :productname');
    unset($_POST['submit']);
    $delete->execute($_POST);
    header("Refresh:0");
}

$productstable = $pdo->prepare('SELECT * FROM products');
$productstable->execute();

foreach ($productstable as $row) {
    echo '<tr>';
    echo '<td>' . $row['productname'] . '</td>';
    echo '<td>' . $row['productdesc'] . '</td>';
    echo '<td>' . $row['productprice'] . '</td>';
    echo '<td>' . $row['featured'] . '</td>';
    echo '</tr>';
}

?>

<main>
	<article>
		<h2 id="signintext">Delete a product</h2>
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
				<input type="submit" name="submit" value=Add />
			</div>
		</form>
	</article>
</main>

<?php

require_once 'footer.php';

?>