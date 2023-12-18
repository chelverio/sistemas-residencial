<?php
$sql = "SELECT * FROM tickets_pago";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID Ticket: " . $row["id_ticket"] . ", ID Residente: " . $row["id_residente"] . ", Fecha de Emisión: " . $row["fecha_emision"] . ", Monto Total: $" . $row["monto_total"] . ", Estado de Pago: " . $row["estado_pago"] . "<br>";
    }
} else {
    echo "No hay tickets de pago";
}