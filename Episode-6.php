<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>

        <h1>Recommended Books</h1>

        <?php 
        
            $books = [
                "Do Androids Dream of Electric Sheep",
                "The Langoliers",
                "Hail Mary"
            ];

            $books[3] = "Nasi Goreng";

        ?>

        <ul>

            <?php foreach($books as $book) {
                echo "<li>$book</li>";
            } 
            ?>

        </ul>
        <br>
        <h1>Recommended Books</h1>
        
        <ul>
        <?php foreach($books as $book) : ?>

            <li><?= $book ?></li>

        <?php endforeach; ?>

        </ul>

        <p><?= $books[3]; ?></p>

        
</body>
</html>