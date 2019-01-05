<?php

include 'header.php';
?>


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
			<div class="signinbox">
				<label>Product name:</label>
				<input type="text" name="prodname" />
				<label>Product description:</label>
				<input type="text" name="prodesc" />
                <label> Product price:</label>
                <input type="text" name="price">
                <label > Featured? </label>
                <input type="checkbox" name="featured" id="">
				<input type="submit" name="submit" value=”Submit” />
			</div>
		</form>


<?php

include 'footer.php';

?>