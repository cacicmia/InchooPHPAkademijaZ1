<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Yaml 4 <?php echo $_GET['name']; ?></title>
    <link rel="stylesheet" href="YAML/typography.css">
    <link rel="stylesheet" href="YAML/base.min.css">
    <link rel="stylesheet" href="YAML/grid-960gs-12.css">
</head>
<body>
<h1>Yaml 4 <?php echo $_GET['name']; ?></h1>

<nav>
    <ul>
        <li><a href="./index.html">Čisti HTML + CS</a></li>
        <li><a href="./boot.php">Bootstrap</a></li>
        <li><a href="./foundation.php">Foundation</a></li>
        <li><a href="./skeleton.php">Skeleton</a></li>
        <li><a href="./yaml.php">Yaml</a></li>
    </ul>
</nav>
<main>
    <p> Upiši vrijednost parametra name kako bi promijenili naslov
    </p>
    <p>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
        <label for="some">Napiši nešto
            <input id="some" name="some" type="text"></label>
        <input type="submit" value="Pošalji">
    </form>
    </p>
    <p>
    <?php echo $_POST['some']; ?>
    </p>
    <br>
    <?php $var=7%4;
    echo "<p>".$var."</p>";
    ?>
    <p>Upisati a,b,c,d vrijednosti u url da bi se dobio potpisani zbroj</p>
    <div style="text-align:right;padding-right:20%;"><?php
       if ($_GET['a'] || $_GET['b'] || $_GET['c'] || $_GET['d']) {

       echo $_GET['a'], "<br>", $_GET['b'], "<br>", $_GET['c'], "<br>","+ ", $_GET['d'], "<hr>";
        $sum=$_GET['a']+$_GET['b']+$_GET['c']+$_GET['d'];
        echo $sum;
       }
        ?></div>

</main>
</body>
</html>