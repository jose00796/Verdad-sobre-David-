<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>David es Marico</title>
</head>
<body>

<div id="main-container">
    <center><h1>David es Marico</center>
    <table border="3">
        <thead>
            <tr>
                <th>Tabla de la Verdad NOJODA!!!</th>
            </tr>
        </thead>
    <?php

    $David_Es_Marico = true;
    $cont = 0;

    while($David_Es_Marico == true)
    
    {
        echo '<tr>';
        echo '<td>David se lo mama a Machado todos los dias sin falta</td>';
        $cont++;

        if ($cont == 7) {
            $David_Es_Marico = false;
        }
        echo '</tr>';
    }

    ?>
    </table>
    </div>
</body>
</html>