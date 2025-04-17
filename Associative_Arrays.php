<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative arrays</title>
</head>
<body>
    <h1>Recommended Books</h1>
    <?php
        $books = [ 
            [
                'name' => 'Do Androids Dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'purchaseUrl' => 'http://example.com',
                'releaseYear' => 1968,
            ],

            [
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'purchaseUrl' => 'http://example.com',
                'releaseYear' => 2021,
            ],

            [
                'name' => 'The Langoliers',
                'author' => 'Andy Weir',
                'purchaseUrl' => 'http://example.com',
                'releaseYear' => 2021,
            ],

            [
                'name' => 'The Martian',
                'author' => 'Andy Weir',
                'purchaseUrl' => 'http://example.com',
                'releaseYear' => 2011,
        ]
        ];
    
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            
            <li>
                <a href="purchaseUrl">
                    <?= $book['name'];?> (<?= $book['releaseYear'];?>)
                </a>
            </li>
            
        <?php endforeach; ?>
    </ul>

</body>
</html>