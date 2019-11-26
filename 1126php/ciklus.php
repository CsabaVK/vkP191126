<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php
    for ($i=0; $i < 100; $i++) { 
        # code...
    }


    do {
        # code...
    } while ($a <= 10);


    foreach ($variable as $key => $value) {
        # code...
    }


    foreach ($variable as $value) {
        # code...
    }

    
    if (condition) {
        # code...
    }
?>

<?php for ($i=0; $i < 10; $i++): { } ?>
<!-- HTML -->
<?php endfor; ?>

<?php while(FALSE): ?>
<!-- HTML -->
<?php endwhile ?>

<?php //do: ?>
<!-- HTML -->
<?php //while ($a <= 10); ?>

<?php if(FALSE): ?>
<!-- HTML -->
<?php echo 'valami'; ?>
<?= 'valami' ?>
<? endif ?>



</body>
</html>