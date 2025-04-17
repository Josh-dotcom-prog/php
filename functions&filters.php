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
    
        function filterByAuthor($books) {
            
        }

    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <?php if ($book['author'] === 'Andy Weir'): ?>
            
            <li>
                <a href="purchaseUrl">
                    <?= $book['name'];?> (<?= $book['releaseYear'];?>) - By <?= $book['author'];?>
                </a>
            </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
    
    <p>
        <?= filterByAuthor($books);?>
    </p>
</body>
</html>