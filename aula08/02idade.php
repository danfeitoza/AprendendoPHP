<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
        $ano = isset($_GET["ano"])?$_GET["ano"]:"[não informado]";
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[não informado]";
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e tem $idade anos.";
    ?>
</br>
<a href="02exercicio.html">Voltar</a>
</div>
</body>
</html>
 