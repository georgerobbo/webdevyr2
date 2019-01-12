<?php

require 'header.php';

$results = $pdo->query('SELECT * FROM products WHERE productcat ="gaming"');

?>

<main>
	<h1>Welcome to Ed's Electronics</h1>

	<p>We stock a large variety of electrical goods including phones, tvs, computers and games. Everything comes with at
		least a one year guarantee and free next day delivery.</p>

	<hr />



	<h2>Product list</h2>

	<ul class="products">

		<li>

	<?php	foreach ($results as $row) {
    echo '<h3>' . $row['productname'] . '</h3>';
    echo '<p>' . $row['productdesc'] . '</p>';
    echo '<div class ="price">' . '£' . $row['productprice'] . '</div>';

}

?>
		</li>

		<?php	foreach ($results as $row) {
    echo '<h3>' . $row['productname'] . '</h3>';
    echo '<p>' . $row['productdesc'] . '</p>';
    echo '<div class ="price">' . '£' . $row['productprice'] . '</div>';

}

?>
		</li>
		<li>
		<?php	foreach ($results as $row) {
    echo '<h3>' . $row['productname'] . '</h3>';
    echo '<p>' . $row['productdesc'] . '</p>';
    echo '<div class ="price">' . '£' . $row['productprice'] . '</div>';

}

?>
		</li>
	</ul>

	<hr />

	<h2>Product Page</h2>

	<h3>Product name</h3>

	<h4>Product details</h4>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac aliquet mi, et ornare ipsum. Curabitur id lorem
		sed ex efficitur egestas. Integer finibus hendrerit risus sagittis porta. Class aptent taciti sociosqu ad litora
		torquent per conubia nostra, per inceptos himenaeos. Duis egestas placerat massa ac porta. Proin a leo purus. Nam
		dolor dui, iaculis in laoreet id, venenatis sed est. Sed et facilisis metus. </p>

	<p>Fusce varius eros ligula, et sagittis mauris gravida sed. Maecenas tristique maximus ornare. Duis nec lectus tempus
		leo ullamcorper bibendum. Nam tempus augue sapien, vel mattis ex porttitor cursus. Suspendisse potenti. Suspendisse
		quis orci ex. Curabitur non orci orci. </p>

	<h4>Product reviews</h4>
	<ul class="reviews">
		<li>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac aliquet mi, et ornare ipsum. Curabitur id lorem
				sed ex efficitur egestas. Integer finibus hendrerit risus sagittis porta. Class aptent taciti sociosqu ad litora
				torquent per conubia nostra, per inceptos himenaeos. Duis egestas placerat massa ac porta. Proin a leo purus. Nam
				dolor dui, iaculis in laoreet id, venenatis sed est. Sed et facilisis metus. </p>

			<p>Fusce varius eros ligula, et sagittis mauris gravida sed. Maecenas tristique maximus ornare. Duis nec lectus
				tempus leo ullamcorper bibendum. Nam tempus augue sapien, vel mattis ex porttitor cursus. Suspendisse potenti.
				Suspendisse quis orci ex. Curabitur non orci orci. </p>


			<div class="details">
				<strong>Reviewer Name</strong>
				<em>10th December 2018</em>
			</div>
		</li>
		<li>
			<p>Fusce varius eros ligula, et sagittis mauris gravida sed. Maecenas tristique maximus ornare. Duis nec lectus
				tempus leo ullamcorper bibendum. Nam tempus augue sapien, vel mattis ex porttitor cursus. Suspendisse potenti.
				Suspendisse quis orci ex. Curabitur non orci orci. </p>


			<div class="details">
				<strong>Reviewer Name</strong>
				<em>22nd May 2018</em>
			</div>
		</li>

		<li>
			<p>Fusce varius eros ligula, et sagittis mauris gravida sed. Maecenas tristique maximus ornare. Duis nec lectus
				tempus leo ullamcorper bibendum. Nam tempus augue sapien, vel mattis ex porttitor cursus. Suspendisse potenti.
				Suspendisse quis orci ex. Curabitur non orci orci. </p>


			<div class="details">
				<strong>Reviewer Name</strong>
				<em>6th November 2018</em>
			</div>
		</li>
	</ul>
</main>

<?php

require 'footer.php';

?>