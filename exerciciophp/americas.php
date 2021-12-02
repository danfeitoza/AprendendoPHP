<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Países da América</title>
    </head>
    <body>
        <div>
            <?php
            $p = ($_GET ["pais"]);
            switch ($p) {
                case "1":
                case "2":
                case "3":
                case "5":
                case "6":
                case "7":
                case "8":
                case "9":
                case "10":
                case "11":
                case "12":
                case "13":
                case "14":
                case "15":
                case "16":
                case "17":
                    $r = "América do Sul";
                    break; 
                case "18":
                case "19":
                case "20":
                case "21":
                case "22":
                    $r = "América do Norte";
                    
            
            }
            echo "Este país faz parte da  <span class='foco'>$r</span>"
            ?>
            <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
        </div>
    </body>

</html>