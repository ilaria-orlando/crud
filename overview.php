<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>

<h1>Crystal code - track your collection of crystals</h1>

<ul>
    <?php foreach ($crystals as $crystal) : ?>
        <li><?= $crystal['name'] ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>