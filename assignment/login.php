<?php
include "header.php";

if (isset($_SESSION['loggedin'])) {
    header('Location: admin.php');
   }
   else {
    echo 'Sorry, you must be logged in to view this page.';
   }
   
$error = "";

if($_SERVER["REQUEST_METHOD"] == "GET") {
	$username = "";
	$password = "";
} else if($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = trim($_POST["username"]);
	$password = trim(sha1($_POST["password"]));

	if(strlen($username) ==  0) {
		$error .= "You must provide a username!<br/>";
	  }
	if(strlen($password) ==  0) {
		$error .= "You must provide your password!<br/>";
	  }
	if(strlen($error) == 0) {
		$stmt = $pdo->prepare('SELECT * FROM user WHERE username = :username AND password = :password');
		unset($_POST['submit']);
		$stmt->execute($_POST);

		$row = $stmt -> fetch();

		$_SESSION['username'] =  $row['username'];
		$_SESSION['email'] =  $row['email'];
		$_SESSION['dob'] =  $row['dob'];
		$_SESSION['role'] =  $row['role'];
		
        header('Location: admin.php');
        $_SESSION['loggedin'] = true;
		
		} else {
			$error = "The username/password were not found.<br/>";
	}
}
?>

<main>
<article>
<h2 id="signintext">Sign in</h2>
<h3><?php echo $error; ?></h3>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
 <div class="signinbox">
	<label>Username:</label>
	<input type="text" name="username" />
	<label>Password:</label>
	<input type="password" name="password" />
	<input type="submit" name="submit" value=”Submit” />
 </div>
</form>
</article>
</main>
<?php include "footer.php";?>
