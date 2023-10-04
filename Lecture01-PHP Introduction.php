<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    // Print Statement
    echo "Hello World!";

    // Creating Variables with assigning Values for each variable
    $First=10;
    $Second=20;

    // Printing Variables ( Values )
    echo "<h1>My Values</h1>";
    echo $First . "<br>" . $Second;



    // Performing Addition on Variables
    $add=$First+$Second;
    echo "<h3>Addition:</h3>" . $add;

    // Performing Subtraction on Variables
    $sub=$First-$Second;
    echo "<h3>Subtraction:</h3>" . $sub;

    // Performing Multipication on Variables
    $multiply=$First*$Second;
    echo "<h3>Multiplication:</h3>" . $multiply;

    // Performing Division on Variables
    $division=$First/$Second;
    echo "<h3>Division:</h3>" . $division;

    // Assignments Operators in PHP: (1) += (2) -= (3) /= (4) *=
    $Num = 100;
    $Value = $Num;

    // Printing Default Value
    echo "<h1>Default Value</h1>" . $Value . "<br>";

    // Performing addition using assignment operators
    $Value += 10;
    echo "<h3>Addition:</h3>" .$Value . "<br>";

    // Performing subtraction using assignment operators
    $Value -= 10;
    echo "<h3>Subtraction:</h3>" .$Value . "<br>";

    // Performing multiplication using assignment operators
    $Value *= 10;
    echo "<h3>Multiplication:</h3>" .$Value . "<br>";

    // Performing division using assignment operators
    $Value /= 10;
    echo "<h3>Division:</h3>" .$Value . "<br>";

    // Comparison Operators: (1) == (2) != (3) > (4) < (5) >= (6) <= ...

    // Using var_dump function
    echo "<h1>Comparsion Operators</h1>";
    echo "1==7" . var_dump(1==7) . "<br>";
    echo "1!=7" . var_dump(1!=7) . "<br>";
    echo "1>=7" . var_dump(1>=7) . "<br>";
    echo "1<=7" . var_dump(1<=7) . "<br>";


    // Performing Conditional Statement
    echo "<h1>Conditional Statement</h1>";
    if ($Value > 1) {
        echo $Value . "&nbsp is Positive Number";
    }else if ($Value < 1) {
        echo $Value . "&nbsp is Negative Number";
    }else {
        echo $Value . "&nbsp is not a number!";
    }


    ?>
</body>
</html>