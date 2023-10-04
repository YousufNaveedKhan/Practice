<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture-01 - PHP Introduction</title>
</head>
<body>
    
    <?php
    // Printing a simple message
    echo "Hello World!";

    // Creating two variables and assigning values to them
    $First = 10;
    $Second = 20;

    // Printing the values of the variables
    echo "<h1>My Values</h1>";
    echo $First . "<br>" . $Second;

    // Performing addition on variables
    $add = $First + $Second;
    echo "<h3>Addition:</h3>" . $add;

    // Performing subtraction on variables
    $sub = $First - $Second;
    echo "<h3>Subtraction:</h3>" . $sub;

    // Performing multiplication on variables
    $multiply = $First * $Second;
    echo "<h3>Multiplication:</h3>" . $multiply;

    // Performing division on variables
    $division = $First / $Second;
    echo "<h3>Division:</h3>" . $division;

    // Assignment Operators in PHP: (1) += (2) -= (3) /= (4) *=
    $Num = 100;
    $Value = $Num;

    // Printing the default value
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

    // Using var_dump function to compare values
    echo "<h1>Comparison Operators</h1>";
    echo "1 == 7: " . var_dump(1 == 7) . "<br>";
    echo "1 != 7: " . var_dump(1 != 7) . "<br>";
    echo "1 >= 7: " . var_dump(1 >= 7) . "<br>";
    echo "1 <= 7: " . var_dump(1 <= 7) . "<br>";

    // Performing a conditional statement
    echo "<h1>Conditional Statement</h1>";
    if ($Value > 1) {
        echo $Value . "&nbsp; is a Positive Number";
    } else if ($Value < 1) {
        echo $Value . "&nbsp; is a Negative Number";
    } else {
        echo $Value . "&nbsp; is not a number!";
    }
    ?>
</body>
</html>
