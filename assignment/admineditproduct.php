<?php

require_once 'header.php';

if (isset($_POST['submit'])) {

    $edit = $pdo->query('UPDATE products SET productname="' . $_POST['newproduct'] . '",
    productdesc="' . $_POST['newdesc'] . '",
    productprice="' . $_POST['newprice'] . '",
    productcat="' . $_POST['productcat'] . '",
    featured="' . $_POST['featured'] . '"
    WHERE productname="' . $_POST['productname'] . '"');
    unset($_POST['submit']);
    $edit->execute($_POST);
    header("Refresh:0");
}
?>

<main>
    <article>
        <h2 id="signintext">Edit a product</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="signinbox">
                <label>Old Product:</label>
                <input id="productname" type="text" name="productname" />
                <label>New Product:</label>
                <input id="newproduct" type="text" name="newproduct" />
                <label>New description:</label>
                <input id="newdesc" type="text" name="newdesc" />
                <label>New Price:</label>
                <input id="newprice" type="text" name="newprice" />
                <label>Featured?:</label>
                <input id="featured" type="checkbox" name="featured" />
                <label>Product Category (Tv,phone,computer or gaming</label>
                <input type="text" name="productcat" id="productcat" name="productcat">
                <input type="submit" name="submit" value=Edit />
            </div>
        </form>
    </article>
</main>

<?php
require_once 'footer.php';
?>