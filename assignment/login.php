<?php

require 'head.php';

session_start();

if (isset($_POST['button'])) {
    //Check they entered the correct username/password
    if ($_POST['username'] === 'admin' && $_POST['password'] === 'admin') {
    $_SESSION['loggedin'] = true;
    echo '<p>Welcome back ' . $_POST['username'] .'</p>';
    echo '<p>This page is only visible if you entered the correct password!</p>';
    }
    //If they didn't, display an error message
    else {
    echo '<p>You did not enter the correct username and password</p>';
    }
}

?>

<main>
    <div class="heading">

        <h1>Admin login</h1>

    </div>

    <div class="login">
        <form action="form">

            <div class="form">

                <div class="formusername">

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