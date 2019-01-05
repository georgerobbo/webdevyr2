<?php
require 'header.php';

if (!isset($_SESSION['loggedin'])){
    header('Location: admin.php');

}

    if (!isset($_SESSION['loggedin'])){
        header('Location: login.php');

    }
?>
<main>
    <div class=''>

        <div class='adminpanel'>

            <div class="adminbuttons">

                <a href="adminproduct.php">
                    <div class="admintext"> </div>
                    <h1>Products</h1>

                </a>

            </div>

            <div class="adminbuttons">

                <a href="admincategory.php">
                    <div class="admintext">
                        <h1>Categories</h1>
                    </div>
                </a>


            </div>


        </div>


    </div>

    </div>



</main>

<?php


require 'footer.php';

?>