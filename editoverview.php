
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
    <?= var_dump($_POST) ?>
    <?php if(isset($crystalRepository->vardump)){
        echo $crystalRepository->vardump;
    } ?>
        <h1>Edit entry</h1>
        <form method="post" action="">
            <input type="number" name="id" value="<?= $_GET['id']?>" readonly>
            <label for="name">Name:</label>
            <input type="text" name="nameEdit" value="<?= $_GET['name']?>">
            <label for="zodiac">Assigned zodiac:</label>
            <input type="text" name="zodiacEdit" value="<?= $_GET['zodiac']?>">
            <label for="chakra">Assigned chakra:</label>
            <input type="text" name="chakraEdit" value="<?= $_GET['chakra']?>">
            <button type="submit" name="edit">Edit</button>
        </form>
    </body>
</html>