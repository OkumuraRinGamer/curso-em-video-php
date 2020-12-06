<!DOCTYPE html>
<html lang="pt_br">
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="contadorp2.php">
        <label>Inicio: </label>
        <input type='number' name='I' value="1"/><br/>
        <label>Final: </label>
        <input type='number' name='F' value="1"/><br/>
        <label>Incremento: </label>
        <select name="S">
            <?php
                $c = 1;
                while ($c <= 5){
                    echo "<option value='$c'>$c</option>";
                    $c++;
                }
            ?>
        </select>
        <br/><input type="submit" value="Calcular"/>
    </form>
</div>
</body>
</html>
 