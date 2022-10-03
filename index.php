<html>

<body>
    <?php

    echo "<h1>ACTIVIDAD 1.1</h1>";

    /* 1.1.	Escribir un programa en que se declare una variable que contenga un valor numérico (el que tú quieras). 
    Este valor representará una cantidad en euros. El programa calculará el equivalente a otras dos monedas: dólares americanos y yenes. 
    La equivalencia entre euro y dólar y euro y yen deberá guardarse en constantes. Se mostrará el siguiente mensaje:
    XX euros equivalen a YY dólares y ZZ yenes.
    */

    const euro_dollar = 0.98;
    const euro_yen = 141.89;

    $euros = 10;
    $dollars = $euros * euro_dollar;
    $yens = $euros * euro_yen;

    echo "$euros euros equivalen a $dollars dólares y $yens yenes";

    echo "<h1>ACTIVIDAD 1.2</h1>";

    /*1.2.	En una escuela tenemos tres clases y queremos saber la cantidad de pupitres que necesitamos tener en total. 
    Dependerá del número de alumnos por aula. Hay que tener en cuenta que en cada pupitre caben 2 alumnos. 
    Haz un programa en PHP en que se definan tres variables que contengan el número de alumnos que hay en cada clase, 
    y muestre el número total de pupitres que necesitaremos. */ 

    $Aclass = 16;
    $Bclass = 21;
    $Cclass = 18;
    $deskSeats = 2;

    $totalStudens = $Aclass + $Bclass + $Cclass;
    $totalDesks = $totalStudens / $deskSeats;

    echo "Necesitaremos un total de $totalDesks pupitres";


    echo "<h1>ACTIVIDAD 1.3</h1>";

    /*1.3.	Escribir un programa que guarde en tres variables los coeficientes de una ecuación de segundo grado. 
    Debe guardar en otras dos variables los resultados, y mostrarlos por pantalla. 
    Para hacer la raíz cuadrada, usar la función de PHP sqrt (número). */ 

    $a = 3;
    $b = 8;
    $c = 1;

    $ec1 = (-$b + sqrt(pow($b, 2) - 4 * $a * $c)) / 2 * $a;
    $ec2 = (-$b - sqrt(pow($b, 2) - 4 * $a * $c)) / 2 * $a;

    echo "El resultado de la primera ecuación es " . sprintf("%.2f", $ec1) . "<br/>";

    echo "El resultado de la segunda ecuación es " . sprintf("%.2f", $ec2) . "<br/>";


    echo "<h1>ACTIVIDAD 1.4</h1>";

    /*1.4.	Escribir un programa que, dado el diámetro de un a pizza, nos muestre su área y la longitud del borde. 
    Los resultados deben mostrarse con un máximo de 2 decimales.*/ 

    $pizzaDiam = 5;
    $pizzaRadio = $pizzaDiam / 2;
    $pizzaLarge = $pizzaDiam * M_PI;
    $pizzaArea = pow($pizzaRadio, 2) * M_PI;

    echo "El área de la pizza es de" . sprintf("%.2f", $pizzaArea) . "cm2 y la longitud de" . sprintf("%.2f", $pizzaLarge) . " centímetros";

    echo "<h1>ACTIVIDAD 1.5</h1>";

    /*1.5.	A un trabajador le pagan por horas a razón de 30€/h. A partir de las 40 horas de trabajo, 
    la tarifa por hora se incrementa en un 50%. Escribe un programa en que, a partir de un número de horas trabajadas, 
    se muestre como resultado el sueldo del trabajador. Los valores del precio por hora y el incremento deben almacenarse en constantes. */ 

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