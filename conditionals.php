<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Operators</title>
</head>
<body>
    <?php
        //if...Else Statement
        $d=date("D"); //declare a variable
        if ($d=="Fri")
        echo "Have a nice weekend!";

        else
        echo "Have a nice day!"; 

        //Switch Statement
        switch ($d)
        {
        case "1":
            echo "Number 1";
            break;
        case "2":
            echo "Number 2";
            break;
        case "3":
            echo "Number 3";
            break;
        default:
        echo "No number between 1 and 3";
        }
    ?>
</body>
</html>