<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    
    <h1>
       Recommended Books
    </h1>

    <?php 
        $books = [
            [
                "name" => "Do Android Dream of Electric Sheep",
                "author" => "Philip K. Dick",
                "purchaseURL" =>"http://example.com"
            ],
            [
                "name" => "Project Hail Mary",
                "author" => "Andy Weir",
                "purchaseURL" => "http://example1.com"
            ],
            
        ];
    ?>
    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <a href="<?= $book['purchaseURL']?>">
                <?= $book['name'] ?>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>