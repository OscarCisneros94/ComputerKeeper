<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Servicios</title>
</head>
<body>
    <h1>Reporte de Servicios</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No. de servicio</th>
                <th>Fecha</th>
                <th>Código de equipo</th>
                <th>Técnico</th>
                <th>Estado</th>
                <th>Clasificación</th>
                <th>Categoría</th>
                <th>Detalle del servicio</th>
                <th>Observaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $servicio)
                <tr>
                    <td>{{ $servicio->Cod_Servicio }}</td>
                    <td>{{ $servicio->Fecha }}</td>
                    <td>{{ $servicio->Cod_Equipo }}</td>
                    <td>{{ $servicio->tecnico ? $servicio->tecnico->Nombres . ' ' . $servicio->tecnico->Apellidos : 'Sin técnico asignado' }}</td>
                    <td>{{ $servicio->Estado }}</td>
                    <td>{{ $servicio->Clasificacion }}</td>
                    <td>{{ $servicio->Categoria }}</td>
                    <td>{{ $servicio->Detalle_Servicio }}</td>
                    <td>{{ $servicio->Observaciones }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="footer">
        Fecha del reporte: {{ date('d/m/Y') }} <!-- Pie de página con la fecha -->
    </div>
</body>
</html>