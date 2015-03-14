<?php
$temp = $_GET["temp"]; // Declares the request from index.html as a variable
$textfile = "temp.txt"; // Declares the name and location of the .txt file
 
$fileLocation = "$textfile";
$fh = fopen($fileLocation, 'w   ') or die("Something went wrong!"); // Opens up the .txt file for writing and replaces any previous content
$stringToWrite = "$temp"; // Write either 1 or 0 depending on request from index.html
fwrite($fh, $stringToWrite); // Writes it to the .txt file
fclose($fh); 
 
header("Location: index.html"); // Return to frontend (index.html)
?>