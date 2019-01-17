<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Bootstrap</title>
    <link rel="stylesheet" href="Bootstrap/bootstrap.min.css">
</head>
<body style="background-color:<?php echo $_GET['boja'];?>;">
<h1 style="color:<?php echo $_GET['h1']; ?>;">Bootstrap</h1>
<nav id="menu">
    <ul class="navbar-nav">
        <li><a href="./index.html">Čisti HTML + CS</a></li>
        <li><a href="./boot.php">Bootstrap</a></li>
        <li><a href="./foundation.php">Foundation</a></li>
        <li><a href="./skeleton.php">Skeleton</a></li>
        <li><a href="./yaml.php">Yaml</a></li>
    </ul>
</nav>
<main class="text-center">
    <h2>Zadaci</h2>
    <p>Upisati vrijednost parametra boja da bi stranica promijenila pozadinu:
    <pre>?boja=vašavrijednost</pre></p>
    <p>Upisati vrijednost parametra h1 da bi se boja naslova promijenila:
    <pre>?h1=vašavrijednost</pre></p>

    <p> Upisati parametre a,b,c,d kako bi se od njih stvorio niz
    <?php $a=$_GET['a'];
    $b=$_GET['b'];
    $c=$_GET['c'];
    $d=$_GET['d'];
    $e= array($a,$b, $c, $d);
    if ($a || $b || $c || $d) {
        print_r($e);
    }?></p>
    <p><?php
        for ($i=0;$i<5;$i++){
            echo $i+1;
            echo "<hr />";
        }?></p>
</main>
</body>
</html>