<?php 

if (!isset($_SESSION)) {

session_start();

}

if(isset($_SESSION['email_id']))

{

header("location:home.php");

}

else 

{
?>
<html>

<body>
<form action="signin.php" method="post">
<input name="mail" type="text"><br>
<input name="pass" type="password"><br>
<input type="submit" class="greenButton" value="Sign In" />
</form>
</body>
</html>
<?php
}

?>
