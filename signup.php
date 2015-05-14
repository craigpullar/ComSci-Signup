<?php
	$new = "----[[NEW REGISTRANT]]----\n";
	$end = "----[[END]]----\n"
;	$email = "Email: ". $_POST["email"] . "\n";
	$name = "Name: ". $_POST["name"] . "\n";
	file_put_contents("names.txt" ,$new, FILE_APPEND);
	file_put_contents("names.txt" ,$email, FILE_APPEND);
	file_put_contents("names.txt" ,$name, FILE_APPEND);
	file_put_contents("names.txt" ,$end, FILE_APPEND);
	header('Location: index.html');
?>