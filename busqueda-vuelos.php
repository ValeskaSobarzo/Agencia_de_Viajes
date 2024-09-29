<?php
// Función básica de búsqueda de vuelos

function buscarVuelos($origen, $destino, $fechaSalida, $fechaRegreso) {
    // Llamada a un servicio externo de reservas de vuelos
    $apiUrl = "https://api.ejemplo.com/vuelos?origen=$origen&destino=$destino&salida=$fechaSalida&regreso=$fechaRegreso";
    // Obtener datos de la API
    $response = file_get_contents($apiUrl);
    $vuelos = json_decode($response, true);
    return $vuelos;
}
