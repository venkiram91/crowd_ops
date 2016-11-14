<?php 

if (!isset($_SESSION)) {

session_start();



if(isset($_SESSION['email_id']))

{

?>
<html>

<body>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<div style="text-align:center;">
    <img src="image.png">
</div>
<h1>WELCOME TO THE VIDEO ANNOTATION TASK! WE WOULD LIKE YOU TO HELP US ANNOTATE SOME VIDEOS</h1>
<div style="text-align:center;">

<h2>ARE YOU WILLING TO HELP ?</h2>

<form action="Yes_page.php">
    <input type="submit" value="YES ! ABSOLUTELY" />
</form>

<form action="No_page.php">
    <input type="submit" value="NO! I DON'T HAVE TIME" />
</form>

</div>
</body>
</html>
<?php

}

else 

{

header("location:index.php");

}
}
?>