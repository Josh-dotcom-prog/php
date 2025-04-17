<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <?php

    //Create a function
    function writeMyName()
    {
        echo "Edyangu Joshua";
    }
    //Call the function
    writeMyName();
    echo "<br>";

    //Funnction with parameters
    function writeMyName2($name)
    {
        echo "My name is " . $name;
    }
    //Call the function
    writeMyName2("Edyangu Joshua");

    echo "<br>";
    //Function with return value
    function add($a, $b)
    {
        return $a + $b;
    }
    echo "1 + 16 = " . add(1, 16);

    echo "<br>";

    function dumper($one, $two, $three)
    {
        var_dump($one, $two, $three);
    }

    dumper('hello', 'big', 'world');
    ?>
</body>

</html>