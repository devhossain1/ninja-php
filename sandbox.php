<?php
//ternary operator
$score = 50;
//if($score>30){
//    echo 'score is high !';
//}else{
//    echo 'low score !';
//}
echo $score>30 ? 'high score!' : 'low score!';


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