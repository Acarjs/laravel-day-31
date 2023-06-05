<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
</head>
<body>
    <h1>Search</h1>

    <form action="" method="get">
        <input type="text" name="search" placeholder="Search for a movie">
        <button type="submit">Search</button>
    </form>


    <?php if($results): ?>
    <h2>Search term: <?= $search_term ?></h2>
        <h2>Search Results:</h2>
        <ul>
            <?php foreach($results as $movie): ?>
            <li>
                <?= $movie->name ?>
                <?= $movie->year ?>

            </li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>No results found.</p>
    <?php endif; ?>

    {{-- @if($results)
        <h2>Search Results</h2>
        <ul>
            @foreach($results as $movie)
                <li>
                    {{ $movie->name }}
                    ({{ $movie->year }})
                </li>
            @endforeach
        </ul>
    @else
        <p>No results found.</p>
    @endif --}}

</body>
</html>
