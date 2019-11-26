<?php 
    $r = '';
    if(isset($_GET['r'])) $r = $_GET['r'];
    // elseif($_GET['r'] == '') $r = '';
    // else
    if(is_numeric($r)) $round = PI() * $r * 2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action="" method="GET">
    Kör sugara: <input name="r" value="" <?= @$r ?> >
    <input type="submit">
</form>
<?php if(isset($round)): ?>
<p>A kör kerülete: <?= $round ?> </p>
<?php else: ?>
<p>Hibás számformátum</p>
<?php endif ?>

</body>
</html>