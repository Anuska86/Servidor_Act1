<html>

<body>
    <?php

    echo "<h1>ACTIVIDAD 1</h1>";


    const euro_dollar = 0.98;
    const euro_yen = 141.89;

    $euros = 10;
    $dollars = $euros * euro_dollar;
    $yens = $euros * euro_yen;

    echo "$euros euros equivalen a $dollars dólares y $yens yenes";

    echo "<h1>ACTIVIDAD 1.2</h1>";

    $Aclass = 16;
    $Bclass = 21;
    $Cclass = 18;
    $deskSeats = 2;

    $totalStudens = $Aclass + $Bclass + $Cclass;
    $totalDesks = $totalStudens / $deskSeats;

    echo "Necesitaremos un total de $totalDesks pupitres";


    echo "<h1>ACTIVIDAD 1.3</h1>";

    $a = 3;
    $b = 8;
    $c = 1;

    $ec1 = (-$b + sqrt(pow($b, 2) - 4 * $a * $c)) / 2 * $a;
    $ec2 = (-$b - sqrt(pow($b, 2) - 4 * $a * $c)) / 2 * $a;

    echo "El resultado de la primera ecuación es " . sprintf("%.2f", $ec1) . "<br/>";

    echo "El resultado de la segunda ecuación es " . sprintf("%.2f", $ec2) . "<br/>";


    echo "<h1>ACTIVIDAD 1.4</h1>";

    $pizzaDiam = 5;
    $pizzaRadio = $pizzaDiam / 2;
    $pizzaLarge = $pizzaDiam * M_PI;
    $pizzaArea = pow($pizzaRadio, 2) * M_PI;

    echo "El área de la pizza es de" . sprintf("%.2f", $pizzaArea) . "cm2 y la longitud de" . sprintf("%.2f", $pizzaLarge) . " centímetros";

    echo "<h1>ACTIVIDAD 1.5</h1>";

    const hourPrice = 30;

    const extraHourPrice = 45;


    $totalHours = 42;
    $totalExtraHours = 0;
    $extraSalary = 0;
    $salary = 0;


    if ($totalHours > 40) {
        $totalExtraHours = $totalHours - 40;
        $extraSalary = $totalExtraHours * extraHourPrice;
        $salary = (40 * hourPrice) + $extraSalary;
    } else {
        $salary = $totalHours * hourPrice;
    }


    echo "El total del salario es de $salary euros. ";


    ?>
</body>

</html>