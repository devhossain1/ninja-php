<?php 
//connect database
$conn = mysqli_connect('localhost', 'ninjas', 'hn117083', 'ninjas-pizza');

//check connection
if(!$conn){
    echo 'connection error: ' . mysqli_connect_error();
}

?>
