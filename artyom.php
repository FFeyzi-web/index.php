  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php $a = 5;  if($a > 5) : ?>
    <p>Beli 6 ededi 5den  boyukdur</p>
    <?php elseif ($a == 5) : ?>
        <h1>beli 5 ededi 5e beraberdir</h1>
    <?php else: ?>
        <h1>beli 4 ededi 5den kicikdir</h1>
    <?php endif ; ?> 
    

</body>
</html>