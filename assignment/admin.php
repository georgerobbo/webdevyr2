<?php

require 'head.php';

session_start();


?>

<main>
<div class= "heading">

    <h1>Admin login</h1>

</div>

    <div class="login">
        <form action="form">

            <div class="form">

                <div class ="formusername">

                    Username <br>

                    <input type="text">
                </div>
                <div class="formpassword">
                    Password <br>

                    <input type="password">
                </div>
                
            </div>

            <div class="loginbutton">
                <input type="button" value="Login">
            </div>




          

        </form>
    </div>

</main>

<?php

require 'foot.php';

?>