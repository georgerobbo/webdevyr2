<?php

require 'head.php';

    // Simple password protection
    if (!isset($_COOKIE['password']) || $_COOKIE['password'] !== 'MYPASS') {
        header('Location: login.php');
        exit;
    }

?>
<main>
    <div class=''>

        <div class='adminpanel'>

            <div class="adminbuttons">

                <a href="add.php">
                    <div class="admintext"> </div>
                    <h1>Add product</h1>

                </a>

            </div>

            <div class="adminbuttons">

                <a href="edit.php">
                    <div class="admintext">
                        <h1>Edit product</h1>
                    </div>
                </a>


            </div>

            <div class="adminbuttons">
                <a href="">
                    <div class="admintext">
                        <h1>Delete product</h1>
                    </div>
                </a>


            </div>

            <div class="adminbuttons">

                <div class="admintext">
                    <h1></h1>
                </div>


            </div>


        </div>

    </div>



</main>

<?php

require 'foot.php';

?>