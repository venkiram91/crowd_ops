<?php
session_start();

// Unset all of the session variables.
$_SESSION = array();
session_destroy();
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
?>