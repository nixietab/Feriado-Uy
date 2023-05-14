<!DOCTYPE html>
<style type="text/css">
body{overflow: hidden;font-family:arial;display:flex;justify-content:center;align-items:center;height:100vh;background-color:black}h1{font-size:4em;color:#cfcafc;text-align:center}
</style>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Feriados</title>
</head>
<body>
<?php
date_default_timezone_set('America/Uruguay/Montevideo');
$feriados = array(
'01-01', // Año Nuevo
'01-06', // Día de Reyes
'03-01', // Carnaval
'03-02', // Carnaval
'03-03', // Carnaval
'04-09', // Semana Santa - Jueves Santo
'04-10', // Semana Santa - Viernes Santo
'05-01', // Día Internacional de los Trabajadores
'05-18', // Batalla de Las Piedras
'06-19', // Natalicio de Artigas
'07-18', // Jura de la Constitución
'08-25', // Declaratoria de la Independencia
'10-12', // Día de la Raza
'11-02', // Día de los Difuntos
'12-25', // Navidad
'12-31', // Nochevieja
);

$hoy = date('m-d');
foreach ($feriados as $feriado) {
    if ($feriado >= $hoy) {
        break;
    }
}
// Calcular los días restantes hasta el próximo feriado
$fecha_feriado = date_create_from_format('m-d', $feriado);
$fecha_actual = date_create_from_format('m-d', $hoy);
$dias_restantes = date_diff($fecha_actual, $fecha_feriado)->format('%a');

// Mostrar el resultado
echo '<h1>Faltan ' . $dias_restantes . ' días para el próximo feriado (' . $fecha_feriado->format('d-m-Y') . ').<h1/>';
?>
</body></html>