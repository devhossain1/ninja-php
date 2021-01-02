<?php

//file system part-2
$file = 'quotes.txt';

//opening a file for reading
//$handle = fopen($file, 'r');
$handle = fopen($file, 'a+');
//read the file
    //echo fread($handle, filesize($file));
    //echo fread($handle, 122);
//read a single line
//echo fgets($handle);
//echo fgets($handle);

//read a single charecter
//echo fgetc($handle);
//echo fgetc($handle);

//writing to a file
fwrite($handle, "\nEverything popular is wrong");

fclose($handle);
//unlink($file);

?>
