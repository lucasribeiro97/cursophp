<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../style.css">
</head>

<body>
  <header>
    <h1>Resultado Final</h1>
  </header>
  <main>
    <?php
      $numero = $_GET['numero'];
      echo "<p>O número informado foi $numero</p>";
      echo "<p>O seu antecessor é " . ($numero - 1) . "</p>";
      echo "<p>O seu sucessor é " . ($numero + 1) . "</p>";
    ?>
  </main>
</body>

</html>