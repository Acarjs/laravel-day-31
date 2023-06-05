<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Awards</title>

   
</head>
<body>
    
    <h1>Awards Index</h1>

    <?php if($display_navigation): ?>
    <nav>
        <a href="/">Home</a>
        <a href="/awards">Award list</a>
    </nav>
    <?php endif; ?>
    <p>There are some very interesting movie awards out there.</p>

    <?= $some_variable ?>

   <ul>
    <?php foreach($awards as $award): ?>
        <li>
            <?= $award ?>
        </li>
        <?php endforeach; ?>
   </ul>

</body>
</html>