<?php
session_start();
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

echo '<META HTTP-EQUIV="Refresh" CONTENT="1;URL=admin.php">';
exit;
?>