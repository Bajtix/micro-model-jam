<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PropTheme</title>
</head>

<?php
$content = file_get_contents("theme-list.txt");
$arr = explode("\n",$content);

$now = time(); 
$your_date = strtotime("2024-02-24");
$datediff = $now - $your_date;

$index = round($datediff / (60 * 60 * 24)) % sizeof($arr);
?>
<body>
    <div id="hero">
         <p id="model-2">
            <?php
            if($index > 2)
                echo($arr[$index-2]);
            ?>
        </p>
        <p id="model-1">
            <?php
            if($index > 1)
                echo($arr[$index-1]);
            ?>
        </p>
        <p id="model">
            <?php
            echo($arr[$index]);
            ?>
        </p>
    </div>
    <footer id="footer">
        <a href="https://bajtix.xyz">Built by bajtixone</a>
    </footer>


</body>


</html>