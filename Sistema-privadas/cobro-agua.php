
<?php
$idResidente = 1;  // Reemplaza con el ID del residente correspondiente
$fechaCobro = "2023-03-01";
$lecturaAnterior = 150;
$lecturaActual = 170;
$monto = 25.50;

$sql = "INSERT INTO cobro_agua (id_residente, fecha_cobro, lectura_anterior, lectura_actual, monto) VALUES ($idResidente, '$fechaCobro', $lecturaAnterior, $lecturaActual, $monto)";

if ($conn->query($sql) === TRUE) {
    echo "Cobro de agua agregado con éxito";
} else {
    echo "Error al agregar cobro de agua: " . $conn->error;
}
?>