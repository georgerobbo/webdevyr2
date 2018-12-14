<?php

    // Simple password protection
    if (!isset($_COOKIE['password']) || $_COOKIE['password'] !== 'MYPASS') {
        header('Location: login.php');
        exit;
    }

require 'head.php';

?>
<main>


<div class= 'body'> 

  <div class ='adminpanel'>
    
    <a href="logout.php">logout</a>
    
    </div>

</div>
    
  

</main>

<?php

require 'foot.php';

?>