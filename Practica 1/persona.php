<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
$nom = "leonel ";
$cognom = "ruiz villacis";
$edat = "24";
$datanaximent =date("Y-m-d",strtotime("23-10-1996"));
$telefon = 95555555;
$adreçapostal = "calabria 11,08015";
$adreçaelectronic = "lruizvillacis@gmail.com";
$treballa = true;
$alçada = 1.65;

?>
<ul>
    <h1>describiendo a <?php echo $nom, $cognom ; ?></h1>
    <h2>los datos de <?php echo $nom ;?> </h2>
    <li>Se llama: <?php echo $nom ;?> </li>
    <li>Va a nacer en el año: <?php echo $datanaximent ; ?></li>
    <li>Su numero de telefono es: <?php echo $telefon ?></li>
    <li>Vive en <?php echo $adreçapostal ?> </li>
    <li>El correo electronico es <?php echo $adreçaelectronic ?>  </li>
    <li>Actualemente trabaja <?php
        if ($treballa){
            echo "si";
        } else {
            echo "no";}?> trabaja </li>

</ul>
</body>
</html>