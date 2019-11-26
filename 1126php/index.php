<?php $sum = 0; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Összeg</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <table>
        <caption>Sorozat összeg</caption>
        <tr>
            <th>N</th>
            <th>&#931;n<</th>
        </tr>

        <?php for ($i=1; $i < 100; $i++): ?>
        
            <tr>
                <td><?= $i ?></td>
                <td><?= $sum += $i ?></td>
            </tr>

        <?php endfor ?>

    </table>

</body>
</html>