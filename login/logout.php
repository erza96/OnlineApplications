<?php
/*SHkatrron apo nderpren sesionin ne momentin qe perdoruesi klikon Logout tek home.php */
session_start();
if(session_destroy())
{
header("Location: index.php");
}
?>