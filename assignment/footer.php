<?php

$results = $pdo->query('SELECT * FROM products WHERE featured ="1"');

?>

<aside>
<h1>Featured Products</h1>
    <?php	foreach ($results as $row) {
    echo '<h3>' . $row['productname'] . '</h3>';
    echo '<p>' . $row['productdesc'] . '</p>';
    echo '<div class ="price">' . '£' . $row['productprice'] . '</div>';
}
?>

</aside>

<footer>
    &copy; Ed's Electronics 2018
</footer>

</body>