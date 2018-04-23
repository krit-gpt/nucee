<?php include_once("home.html"); ?>





<?php
 if(isset($_POST['submit2']))
 {
 	console.log("IN the php file");
   $output=shell_exec('sh /somePATH/cgi-bin/script.sh');
   echo $output;
 }
?>