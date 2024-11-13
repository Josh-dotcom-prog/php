<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        //Numeric arrays: an array with a numeric index
        $names = array("Joshua", "John", "Jane");
        echo "My name is " . $names[0];

        //Associative arrays: an array with named keys
        $ages['Peter'] = "20";
        $ages['John'] = "25";
        $ages['Jane'] = "22";
        echo "Peter is " . $ages['Peter'] . " years old.";
    ?>
</body>
</html>