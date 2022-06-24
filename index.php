<?php
$paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus cupiditate, autem accusantium alias, porro ducimus maiores asperiores culpa ipsa praesentium, sed dolorum exercitationem laudantium architecto sunt? Cupiditate aut quaerat sed.';
$censure = $_GET['censure'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <h2>Testo senza censura</h2>
        <p><?= $paragraph ?> <br> Di lunghezza <?= strlen($paragraph) ?> caratteri</p>
        <form action="" method="get">
            <label for="censure">Parola da censurare</label>
            <input type="text" name="censure">
            <button>Censura</button>
        </form>
        <h2>Testo censurato</h2>
        <p>
            <?= str_replace($censure, '***', $paragraph) ?>
        </p>
    </main>
</body>

</html>