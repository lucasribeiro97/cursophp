<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos primitivos em PHP</title>
</head>

<body>
  <h1>Teste de tipos primitivos</h1>
  <?php 
    // 0x = hexadecimal 0b = binário 0 = octal
    // $num = 010;
    // echo "O valor da variável é $num";

    // $v = 45.2;
    // var_dump($v)

    // $num = (integer) 3e2;
    // echo "O valor da variável é $num";
    // var_dump($num);

    // $casado = true;
    // echo "O valor da variável é $casado";

    // $vet = [6, 2, 9, 3, 5];
    // var_dump($vet);

    class Pessoa {
      private string $nome;
    }

    $p = new Pessoa();
    var_dump($p);
  ?>
</body>

</html>