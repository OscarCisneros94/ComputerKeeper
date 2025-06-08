<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Servicios</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        font-size: 12px;
    }

    h1 {
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
        word-wrap: break-word;
    }

    th, td {
        border: 1px solid black;
        padding: 5px;
        text-align: left;
        vertical-align: top;
    }

    th {
        background-color: #f2f2f2;
    }

    .footer {
        margin-top: 20px;
        text-align: right;
        font-size: 10px;
    }
</style>
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