<!DOCTYPE html>
<html lang="pt_br">
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    $d = isset($_GET["es"])?$_GET["es"]:0;
    echo "Você mora na ";
    switch ($d){
        case 1:
        case 3:
        case 4:
        case 14:
        case 22:
        case 23:
        case 27:
            echo "<span class='foco'>Região Norte</span>";
            break;
        case 2:
        case 5:
        case 6:
        case 10:
        case 15:
        case 17:
        case 18:
        case 20:
        case 26:
            echo "<span class='foco'>Região Nordeste</span>";
            break;
        case 7:
        case 9:
        case 11:
        case 12:
            echo "<span class='foco'>Região Centro-Oeste</span>";
            break;
        case 8:
        case 13:
        case 19:
        case 25:
            echo "<span class='foco'>Região Sudeste</span>";
            break;
        case 16:
        case 20:
        case 24:
            echo "<span class='foco'>Região Sul</span>";
            break;
        default:
            echo "<span class='foco'>Região Inválida</span>";
    }
    ?>
    <br/><a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
 