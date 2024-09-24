<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n = rand(1,100);
        echo "<h2>Divisori di $n</h2>";
        $ul = "<ul>";
        $cont = 1;
        while ($cont <= $n/2) {
            if ($n%$cont == 0) {
                $ul = "$ul <li>$cont</li>";
            }
            $cont++;
        }
        echo "$ul </ul>"; // Il numero stesso è escluso
    ?>
</body>
</html>