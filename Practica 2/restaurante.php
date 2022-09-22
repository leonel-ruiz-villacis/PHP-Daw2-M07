<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php


$mesas = array(1,2,3,4,5,6,7,8,9,10);

foreach ($mesas as $mesa){
    $rand = rand(0,5);
    if($rand == 5){
        echo "En la mesa " . $mesa . " esta llena </br>";
    }elseif($rand == 0){
        echo "En la mesa " . $mesa . " esta vacia </br>";
    }else{
        echo "En la mesa " . $mesa  . " hay " . $rand . " comensales </br>";
    }
}

?>
</body>
</html>