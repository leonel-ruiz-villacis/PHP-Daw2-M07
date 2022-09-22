<?php
$personas = array ();
$pisos = array();
for($i=0;$i<5;$i++){
    for($j=0;$j<10;$j++){
        array_push($personas,rand(0,4));
    }
    array_push($pisos,$personas);
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
for($i=0;$i<5;$i++){
    for($j=0;$j<10;$j++){
        $huesp=$pisos[$i][$j];
        if ($huesp==0){
            echo "Habitacion $j de piso $i vacia </br>";
        }
        else if ($huesp==4){
            echo "Habitacion $j de piso $i llena </br>";
        }
        else{
            echo "$huesp personas en la habitacion $j del piso $i </br>";
        }
    }
}
?>
</body>
</html>