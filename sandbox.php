<?php

//file system part-1
//$quotes = readfile('readme.txt');
//echo $quotes;

$file = 'readme.txt';

if(file_exists($file)){
//    //read file
//    echo readfile($file) . '<br/>';
//    //copy file
//    copy($file, 'quotes.txt');
//    //sbsolute path
//    echo realpath($file) . '<br/>';
//    //filesize
//    echo filesize($file) . '<br/>';
//    //rename
//    rename($file, 'test.txt');  
}else{
    echo 'the file does not exists';
}

//make director

 mkdir('quotes');

?>
