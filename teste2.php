<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
    if (@$_REQUEST["botao"])
    {
        $valor1=$_POST["valor1"];
        $valor2=$_POST["valor2"];

        $resultado = $valor1 + $valor2;
    }
    
?>
<div class="c1">   
    <form action=# method="post">
    <p><b>Valor 1:</b></p>
        <input type=text name=valor1><br>
    <p><b>Valor 2:</b></p> 
        <input type=text name=valor2><br>
    <div class="btn">
        <input type=submit name=botao><br><br>
    </div>
    <b> Resultado: </b>
        <input type=text name=resul readonly value="<?php echo @$resultado;?>">
    </form>
    </div>
</body>