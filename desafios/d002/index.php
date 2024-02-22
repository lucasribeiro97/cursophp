<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sorteador de numeros</title>
</head>

<body>
  <main>
    <h1>Trabalhando com numeros aleatorios</h1>
    <?php 
      $min = 0;
      $max = 100;
      $num = mt_rand($min, $max);
      echo "<p>Gerando um numero aleatorio entre $min e $max...</p>";
      echo "<p>O número sorteado foi $num</p>";
    ?>
    <button onclick="javascript:document.location.reload()">Gerar outro</button>
  </main>
</body>

</html>