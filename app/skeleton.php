<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./Skeleton/skeleton.css">
    <title>Skeleton</title>
</head>
<body>
<h1>Skeleton</h1>

<nav>
    <ul>
        <li><a href="./index.html">Čisti HTML + CS</a></li>
        <li><a href="./boot.php">Bootstrap</a></li>
        <li><a href="./foundation.php">Foundation</a></li>
        <li><a href="./skeleton.php">Skeleton</a></li>
        <li><a href="./yaml.php">Yaml</a></li>
    </ul>
</nav>
<main class="container">
  <div class="row">
      <div class="one-half column">

              <h3><?php echo "Parametar x = {$_GET['x']}, y = {$_GET['y']}";
              $score= $_GET['x'] + $_GET['y'];
              ?></h3>
              <h3><?php echo "Zbroj iznosi " . $score;?></h3>

          <p> <?php if ($_GET['x'] && $_GET['y']){
              echo "Radnja je izvedena.";
              } elseif ($_GET['x'] xor $_GET['y']){
              echo "Parametar nedostaje ili mu je vrijednost 0.";
              } else {
                 echo "<p> Unesite vrijednost parametra x i y kako bi dobili njihov zbroj</p>";
              } ?></p>
          <hr>
      </div>
      <div class="one-half column">
          <p>Upisati vrijednost parametara a, b i c za izračunavanje njihovog zbroja</p>
          <p><?php
              $sum= $_GET['a'] + $_GET['b'] + $_GET['c'];
              echo "{$_GET['a']} + {$_GET['b']} + {$_GET['c']} = {$sum}";?></p>
      </div>
  </div>
    <div class="row">
        <div class="one-half column">
            <ul>Upišite 4 parametra, x1, x2, x3 i x4
                <li><?php echo $_GET['x1']; ?></li>
                <li><?php echo $_GET['x2']; ?></li>
                <li><?php echo $_GET['x3']; ?></li>
                <li><?php echo $_GET['x4']; ?></li>
                </ul>
        </div>
        <div class="one-half column">
            <p><?php
                $i=1;
                $i=$i++;
                echo $i;
                ?>
            </p>
        </div>
    </div>

</main>
</body>
</html>