<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Foundation</title>
    <link rel="stylesheet" href="Foundation/foundation.min.css">
</head>
<body>
<h1>Foundation</h1>

<nav class="top-bar">
    <ul class="menu">
        <li><a href="./index.html">Čisti HTML + CS</a></li>
        <li><a href="./boot.php">Bootstrap</a></li>
        <li><a href="./foundation.php">Foundation</a></li>
        <li><a href="./skeleton.php">Skeleton</a></li>
        <li><a href="./yaml.php">Yaml</a></li>
    </ul>
</nav>
<main class="text-center">
    <h2>Zadaci</h2>
    <p class="cell"><?php $x="Gdje";
    $y="su";
    $z="razmaci?";
        echo "{$x} " ,$y ." ". $z;?></p>
    <p class="cell"><?php
        $myresource= print ("tu sam");
        echo $myresource;
        ?></p>
    <p class="cell"><?php $x= 4/3;
    $y= 1;
    if ($x>$y) {
        echo $x . " ";
        var_dump($x);
        echo "<hr />";
    } else {
        echo $y . " ";
        var_dump($y);
        echo "<hr />";
    }
        ?></p>
</main>
</body>
</html>