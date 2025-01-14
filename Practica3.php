<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "Excercici 1<br>";
    $name = array("Xinyi", "Chen", 21, "Barcelona");
    $numvueltas = 1;
    foreach ($name as $x) {
        echo "dato "  . $numvueltas . "º: $x <br>";
        $numvueltas++;
    }

    echo "<br>";

    echo "Excercici 2<br>";
    $name = array("nombre" => "Xinyi", "apellido" => "Chen", "edad" => 21, "ciudad" => "Barcelona");

    foreach ($name as $x => $y) {
        echo "$x: $y <br>";
    }

    echo "<br>";

    echo "Excercici 3<br>";

    $name ["edad"] = 24;
    foreach ($name as $x => $y) {
        echo "$x: $y <br>";
    }

    echo "<br>";

    echo "Excercici 4<br>";

    unset($name["ciudad"]);
    var_dump($name);

    echo "<br>";

    echo "Excercici 5<br>";

    $x = "a,b,c,d,e,f";

    $letters = explode(',', $x);

    rsort($letters);

  
    foreach($letters as $x){
        echo $x;
    }

    echo "<br>";
    echo "<br>";


    echo "Excercici 6<br>";

    $notas = array("Miguel" => 5, "Luis" => 7, "Marta" => 10, "Isabel" => 8,"Aitor" => 4,"Pepe" => 1);

    arsort($notas);
    foreach($notas as $x => $y){
        echo "$x:  $y ";
    }

    echo "<br>";
    echo "<br>";

    echo"Exercici 7<br>";

    echo"Media de las notas: ";
    echo round(array_sum($notas) /count($notas),precision:2);

    echo"Exercici 8<br>";

    ?>

</body>

</html>