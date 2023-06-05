<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Top rated movies</title>
</head>
<body>
    <h1>Top-Rated Movies</h1>

     <?php foreach($fifty_top_movies as $movie): ?>
    <li>
        <?= $movie->name ?>
        (<?= $movie->year ?>)

        - <?= $movie->rating ?> /10
    </li>

    <?php endforeach; ?>
</body>
</html>