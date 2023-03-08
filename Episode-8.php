<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>

    <?php 

        $books = [
            [
                'name' => 'Do Android Dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'releaserYear' => 1968,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'releaserYear' => 2021,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'The Martian',
                'author' => 'Andy Weir',
                'releaserYear' => 2011,
                'purchaseUrl' => 'http://example.com'
            ],
        ];

        function filterByAuthor ($books, $author) {

            $filteredBooks = [];

            foreach ($books as $book){
                if($book['author']===$author){
                    $filteredBooks[] = $book;
                }
            }

            return $filteredBooks;
        }

    ?>
    

    <ul>

        <?php foreach (filterByAuthor($books, 'Andy Weir') as $book) : ?>
        
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name'] ?> (<?= $book['releaserYear'] ?>) - By <?= $book['author'] ?>  
            </a>

        </li>

        <?php endforeach; ?>

    </ul>

</body>
</html>