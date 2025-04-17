<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamics</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>

    <?php
    //Conditional Operators
        $name = "Dark Matter";
        $read = false;

        if ($read) {
            $message = "You have read $name";
        } else {
            $message = "You have NOT read $name";
        }
    ?>

    <h1>
        <?php echo $message;?> 
    </h1>
</body>
</html>