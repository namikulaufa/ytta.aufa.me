<?php
echo "<br>TIME : ".date('H:i:s a');
echo "<br>DATE : ".date('l, d-M-Y');
echo "<br>YOUR IP : ".$_SERVER['REMOTE_ADDR'];
echo "<br>BROWSER : ".$_SERVER['HTTP_USER_AGENT'];
?>