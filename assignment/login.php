<?php

require 'head.php';

   session_start();
?>
<!DOCTYPE html>

<HTML>
<main>
    <div class="heading">

        <h1>Admin login</h1>

    </div>

    <div class="login">
        <form method="post" class="form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>"
            method="post">
            <h4 class="form-signin-heading"> </h4>
            <input type="text" class="form-control" name="username" placeholder="username" required autofocus>
            <input type="password" class="form-control" name="password" placeholder="password" required>
            <button class="loginbutton" type="submit" name="login">Login</button>
        </form>
    </div>

</main>



<?php

require 'foot.php';

?>