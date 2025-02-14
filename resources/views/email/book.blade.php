<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>

<body>

    <h1 style="background-color: #1b1b1b; color: #F49A1A;; padding: 10px;">LIBRO DE RECLAMACIONES</h1>

    <div style="font-size: 14px;">
        <div>
            <strong>Estimado Cliente: {{ $Book->names }}</strong>
            <br>Gracias por contactarnos, sus comentarios son muy importantes para nosotros.
            <br>Confirmamos la recepción de su solicitud Nº {{ $Book->ticket }}.
            <br>Dentro del plazo de 15 días calendario daremos respuesta a su requerimiento.
            <br><br><br>

            <table cellpadding="10">
                <tbody>
                    <tr>
                        <td>
                            <strong style="font-size:17px">Número de Reclamación:</strong>
                            <strong>{{ $Book->ticket }}</strong>
                        </td>
                        <td>
                            <strong style="font-size:17px">Fecha de Reclamo:</strong>
                            {{ now()->format('d/m/Y') }}
                        </td>
                    </tr>
                </tbody>
            </table>

            <br>

            <table cellpadding="5">
                <tbody>
                    <tr>
                        <td colspan="4"><strong style="font-size:17px">Empresa</strong></td>
                    </tr>
                    <tr>
                        <td colspan="4"><hr></td>
                    </tr>
                    <tr>
                        <td><strong>Razón Social: </strong> Comercializadora Extranjera Latinoamericana S.A.C.</td>
                        <td><strong>RUC:</strong> 20613359550</td>
                    </tr>
                    <tr>
                        <td><strong>Dirección Legal:</strong> Av. Circunvalación Nro. 664 Interior 402,Distrito de Santiago De Surco, Provincia y Departamento de Lima</td>
                    </tr>
                    <tr>
                        <td colspan="4"><br></td>
                    </tr>
                    <tr>
                        <td colspan="4"><strong style="font-size:17px">1. Identificación del Consumidor Reclamante</strong></td>
                    </tr>
                    <tr>
                        <td colspan="4"><hr></td>
                    </tr>
                    <tr>
                        <td><strong>Nombre Reclamante: </strong> {{ $Book->names }} {{ $Book->firstname }} {{ $Book->lastname }}</td>
                        <td><strong>Domicilio:</strong> {{ $Book->address }}</td>
                    </tr>
                    <tr>
                        <td><strong>Tipo de Documento:</strong> {{ $Book->document_type }}</td>
                        <td><strong>Número de Documento:</strong> {{ $Book->document_number }}</td>
                    </tr>
                    <tr>
                        <td><strong>Número de Teléfono:</strong> {{ $Book->phone }}</td>
                        <td><strong>Correo Electrónico:</strong> {{ $Book->email }}</td>
                    </tr>

                    <tr>
                        <td colspan="4"><br></td>
                    </tr>

                    <tr>
                        <td colspan="4"><strong style="font-size:17px">2. Identificación del bien contratado.</strong></td>
                    </tr>
                    <tr>
                        <td colspan="4"><hr></td>
                    </tr>

                    <tr>
                        <td><strong>Monto Reclamado:</strong> {{ $Book->claimed_amount }}</td>
                        <td><strong>Tipo de Moneda:</strong> {{ $Book->currency_type }}</td>
                    </tr>

                    <tr>
                        <td colspan="2"><strong>Nombre de Oficina:</strong> {{ $Book->office_address }}</td>
                    </tr>
                    <tr>
                        <td><strong>Descripción Servicio:</strong> {{ $Book->product_or_service_description }}</td>
                    </tr>

                    <tr>
                        <td colspan="4"><br></td>
                    </tr>

                    <tr>
                        <td><strong style="font-size:17px">3. Detalle de la reclamación.</strong></td>
                    </tr>
                    <tr>
                        <td colspan="4"><hr></td>
                    </tr>
                    <tr>
                        <td><strong>Tipo:</strong> {{ $Book->complaint_type }}</td>
                    </tr>
                    <tr>
                        <td><strong>Detalle:</strong> {{ $Book->complaint_details }}</td>
                    </tr>
                    <tr>
                        <td><strong>Pedido:</strong> {{ $Book->complaint_request }}</td>
                    </tr>

                    <tr>
                        <td colspan="4"><hr></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <br><br><br>

    <table>
        <tbody>
            <tr>
                <td colspan="4"><strong style="font-size:14px">Departamento de Atención al Cliente </strong></td>
            </tr>
            <tr>
                <td colspan="4">{{env('APP_NAME')}}</td>
            </tr>
        </tbody>
    </table>

    <br><br><br>

    <table>
        <tr>
            <td>
                <img src="https://comexlat.com/resource/1738678985_67a222c98b11alogo%20comexlat%20rengo%20y%20blanco.svg" width="83px"><br>
                <strong>{{env('APP_NAME')}}</strong><br>
                Cel.: 📞 01- 9049838 <br>
                <strong>Dirección</strong><br>
                Av. Circunvalación Nro. 664 Interior 402,Distrito de Santiago De Surco, Provincia y Departamento de Lima
            </td>
        </tr>
    </table>

</body>
</html>

