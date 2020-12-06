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
    $vi = isset($_GET["I"])?$_GET["I"]:1;
    $vf = isset($_GET["F"])?$_GET["F"]:1;
    $vc = isset($_GET["S"])?$_GET["S"]:1;
    if ($vi < $vf) {
        while ($vi <= $vf) {
            echo($vi. "  ");
            $vi += $vc;
        }
    } else {
        while ($vf <= $vi) {
            echo($vi. "  ");
            $vi -= $vc;
        }
    }
    ?>
    <a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
 