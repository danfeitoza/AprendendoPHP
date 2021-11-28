<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
      $n1 = isset ($_GET ["nota1"]) ?$_GET ["nota1"]:"Nota não informada";
      $n2 = isset ($_GET ["nota2"]) ?$_GET ["nota2"]:"Nota não informada";

      $media = ($n1 + $n2)/2;
      
      echo "A média entre $n1 e $n2 é igual a $media<br/>";
     if ($media >= 7) {
         $tipoAprov = "APROVADO";
     }
     else {
         if ($media < 7 && $media >= 5) {
             $tipoAprov = "RECUPERAÇÃO";
         } else {
               $tipoAprov = "REPROVADO";
         }
     }
     echo "Situação do aluno: $tipoAprov";
    ?></br>
    <a href="exercicio03.html"><input type="submit" value="Voltar" id="voltar"></a>
</div>
</body>
</html>
 