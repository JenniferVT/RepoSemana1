<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleto Six Flags</title>
    <style>
        td {
            padding: 15px;
        }
        .title, .phrase {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    $nombre = (isset($_POST['nombre']) && $_POST["nombre"] != "") ? $_POST['nombre'] : "no especifico";
    $apellidos = (isset($_POST['apellidos']) && $_POST["apellidos"] != "") ? $_POST['apellidos'] : "no especifico";
    $edad = (isset($_POST['edad']) && $_POST["edad"] != "") ? $_POST['edad'] : "no especifico";
    $direccion = (isset($_POST['direccion']) && $_POST["direccion"] != "") ? $_POST['direccion'] : "no especifico";
    $boletos = $_POST['boletos'];
    $tipo_boleto = $_POST["tipo_boleto"];
    $image_url = "";
    $frase = "";
    $tipo = "";
    switch ($tipo_boleto) {
        case 1:
            $image_url = "https://www.dictionary.com/e/wp-content/uploads/2018/12/it-is-what-it-is-6.jpg";
            $frase = "Es lo que hay";
            $tipo = "Normal";
            break;
        case 2:
            $image_url = "https://www.cinemascomics.com/wp-content/uploads/2020/06/the-flash-septima-temporada-godspeed.jpg";
            $frase = "Tú vas primero";
            $tipo = "Flash Pass";
            break;
        case 3:
            $image_url = "https://tecreview.tec.mx/wp-content/uploads/2019/05/1543343063-1455739473-maxresdefault.jpg";
            $frase = "Sólo para niñxs";
            $tipo = "Boleto infantil";
            break;
        case 4:
            $image_url = "https://pbs.twimg.com/media/ESX7vTCWAAYfYma.jpg";
            $frase = "No apto para miedosos";
            $tipo = "Festival de Terror";
            break;
        case 5:
            $image_url = "https://i.pinimg.com/736x/45/86/c8/4586c85e92dcd8bda7fdc32dc8603e49.jpg";
            $frase = "Sólo lo mejor";
            $tipo = "Experiencia VIP";
            break;
    }
    ?>
    <?php if ($boletos > 0 && $boletos < 16) {
        for ($i = 0; $i < $boletos; $i++) {
    ?>
            <table border="1">
                <tr>
                    <td class="title" colspan="4">
                        SIX FLAGS
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo $nombre; ?>
                    </td>
                    <td>
                        <?php echo $apellidos; ?>
                    </td>
                    <td>
                        <?php echo $edad; ?>
                    </td>
                    <td rowspan="3">
                        <img src="<?php echo $image_url ?>" alt="" width="300px" height="200px">
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo $direccion; ?>
                    </td>
                    <td>
                        <?php echo $boletos; ?>
                    </td>
                    <td>
                        <?php echo $tipo; ?>
                    </td>
                </tr>
                <tr>
                    <td class="phrase" colspan="3">
                        <?php echo $frase; ?>
                    </td>
                </tr>
            </table>
        <?php } 
        } elseif ($boletos == 0) { ?>
        <h1>No se especificó el número de boletos</h1> 
    <?php } elseif ($boletos > 15){ ?>
        <h1>Se excedió el número máximo de boletos, falta(n) <?php echo $boletos - 15?> boleto(s) </h1> 
    <?php } ?>
</body>

</html>