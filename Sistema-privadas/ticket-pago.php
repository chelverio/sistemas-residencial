<?php
$idResidente = 1;  // Reemplaza con el ID del residente correspondiente
$fechaEmision = "2023-03-01";
$montoTotal = 150.00;
$estadoPago = "Pendiente";

$sql = "INSERT INTO tickets_pago (id_residente, fecha_emision, monto_total, estado_pago) VALUES ($idResidente, '$fechaEmision', $montoTotal, '$estadoPago')";

if ($conn->query($sql) === TRUE) {
    echo "Ticket de pago agregado con éxito";
} else {
    echo "Error al agregar ticket de pago: " . $conn->error;
}