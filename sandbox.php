<?php
$score=40;
//superglobals
//$_GET['name], $_POST['name']

echo $_SERVER['SERVER_NAME'] . '<br/>';
echo $_SERVER['REQUEST_METHOD'] . '<br/>';
echo $_SERVER['SCRIPT_FILENAME'] . '<br/>';
echo $_SERVER['PHP_SELF'] . '<br/>';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ninja-php</title>
</head>
<body>
    <h2><?php echo $score>30 ? 'high score!' : 'low score!'; ?></h2>
</body>
</html>