<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP</title>
  <link rel="stylesheet" href="../style.css">
</head>

<body>
  <main>
    <h1>Analisador de Numero Real</h1>
    <?php 
      $num = $_GET['numeroReal'] ?? 0;
      
      echo "<p>Analisando o numero " . number_format($num, 3, ",", ".") . " informado pelo usuario:</p>";

      $int = intval($num);
      $float = $num - $int;
      
      echo
      "<ul>
        <li>A parte inteira do numero e " . number_format($int, 0, ",", ".") . "</li>" . 
        "<li>A parte fracionaria do numero e " . number_format($float, 3, ",", ".") . "</li>" . 
      "</ul>";
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
  </main>
</body>

</html>