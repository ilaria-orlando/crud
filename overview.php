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

    <table>
        <tr>
            <th>Name</th>
            <th>Zodiac</th>
            <th>Chakra</th>
        </tr>
        <?php foreach ($crystals as $crystal) : ?>
            <tr>
                <td><?= $crystal['name'] ?></td>
                <td><?= $crystal['zodiac'] ?></td>
                <td><?= $crystal['chakra']?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <form method="post" action="">
        <label for="name">Name:</label><br>
        <input type="text" name="name"><br>
        <label for ="zodiac">Assigned zodiac:</label>
        <input type="text" name="zodiac"><br>
        <label for="chakra">Assigned chakra:</label>
        <input type="text" name="chakra"><br>
        <button type="submit">Submit</button>
    </form>

</body>
</html>