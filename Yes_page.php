<?php 

if (!isset($_SESSION)) {

session_start();



if(isset($_SESSION['email_id']))

{

?>
<html>

<body>

<h1>THANK YOU FOR YOUR TIME !!!</h1>

<h2> HERE IS WHAT YOU NEED TO DO!</h2>
<ul>
  <li>In the next few pages, you will be shown a video  of 1 - 1.5 minutes duration</li>
  <li>Please watch the video and then answer the questions which will appear below the video </li>
  <li>Please make sure that you answer the question according to the video</li>
</ul>

<div style="text-align:center;">
<form action="video_1.php">
    <input type="submit" value="I Understood! Let's get started" />
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