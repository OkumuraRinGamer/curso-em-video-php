<!DOCTYPE html>
<html lang="pt_br">
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
      span.resp {
            color: #7e050c;
            font-weight: bolder;
        }
      a {
          background-color: #273747;
          padding: 7px;
          color: white;
          text-decoration: none;
      }
  </style>
</head>
<body>
<div>
    <?php
        $n1 = isset($_GET["n1"])?$_GET["n1"]:0;
        $n2 = isset($_GET["n2"])?$_GET["n2"]:0;
        $m = ($n1 + $n2) / 2;
        if ($m < 5.0) {
            $sit = "REPROVADO";
        } elseif ($m >= 5.0 && $m < 7.0) {
            $sit = "RECUPERAÇÃO";
        } else {
            $sit = "APROVADO";
        }
        echo "A média entre <span class='resp'>$n1</span> e <span class='resp'>$n2</span> é igual a <span class='resp'>$m</span> <br/>Situação do aluno: <span class='resp'>$sit</span><br/><br/>"
    ?>
    <a href="exercicio3.html">Voltar</a>
</div>
</body>
</html>
 