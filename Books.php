<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommended books</title>
</head>
<body>
    <h1>Recommended Books</h1>
    <?php
        $books = [
            "Do Androids Dresm of Electric Sheep",
            "The Langoliers",
            "Hail Mary",
        ];
    
    ?>

    <ul>
        <!-- <?php foreach ($books as $book) {
            echo "<li>$book</li>";
        }
        ?> -->

        <!--OR-->

        <?php foreach ($books as $book): ?>
            <li><?= $book; ?></li>
        <?php endforeach; ?>
    </ul> 
    
    <p>
        <h5>Print specific book</h5>
        <!--Associative arrays-->
        <?= $books[1]; ?>
    </p>
</body>
</html>