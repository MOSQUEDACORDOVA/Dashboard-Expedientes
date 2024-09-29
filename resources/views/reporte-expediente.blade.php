<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Reporte de Expediente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .content {
            margin: 0 30px;
        }

        table {
            width: 70%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .highlight-red {
            color: red;
            font-weight: bold;
        }

        .highlight-yellow {
            background-color: yellow;
            font-weight: bold;
        }

        .tableNoBorder {
            border-collapse: collapse;
            border: none;
        }

        .tableNoBorder td {
            border: none;
        }

    </style>
</head>
<body>
    <div class="header">
        <h1 style="font-size:19px">INFORME PARA GARANTÍA BCP

        </h1>
    </div>

    <table class="tableNoBorder" style="margin-left: 35px;">
        <tr>
            <td>De</td>
            <td>:</td>
            <td>BFR ABOGADOS</td>
        </tr>
        <tr>
            <td>Abogado</td>
            <td>:</td>
            <td>Diego Ferré Murguía</td>
        </tr>
        <tr>
            <td>Dirigido a</td>
            <td>:</td>
            <td>BANCO DE CRÉDITO DEL PERÚ</td>
        </tr>
        <tr>
            <td>Cliente</td>
            <td>:</td>
            <td>{!! $expediente->razon_social ?? '<span style="color: red;">NO INDICADO</span>' !!}</td>
        </tr>
        <tr>
            <td>Finalidad</td>
            <td>:</td>
            <td>{!! $expediente->finalidad ?? '<span style="color: red;">NO INDICADO</span>' !!}</td>
        </tr>
        <tr>
            <td>Valor Comercial</td>
            <td>:</td>
            <td>{!! $expediente->inmuebles[0]->valor_comercial ?? '<span style="color: red;" class="highlight-red">NO INDICADO</span>' !!}</td>
        </tr>
        <tr>
            <td>Valor de Afectación</td>
            <td>:</td>
            <td>{!! $expediente->inmuebles[0]->gravamen ?? '<span style="color: red;" class="highlight-red">NO INDICADO</span>' !!}</td>
        </tr>
    </table>

    @php
        \Carbon\Carbon::setLocale('es');
    @endphp

    <div class="content">

        <hr>
        <p><strong>Fecha Informe:</strong> {{ $expediente->created_at->translatedFormat('d \d\e F \d\e Y') }}</p>
              <!-- Aquí puedes agregar más campos según lo que tengas en tu tabla expedientes -->

        <b>INSTRUCCIÓN PARA FORMALIZACIÓN A NOTARÍA:</b><br>
        {{-- <b>«Instrucción_Notaria»</b> --}}

        <hr>
        <br><br><br>
        <li style="list-style: none;">I. DATOS DEL INMUEBLE
            <ul>
                <br>
                <li>Ubicación:
                    {!! $expediente->inmuebles[0]->direccion ?? '<span style="color: red;">NO INDICADO</span>' !!}
                    distrito de {!! $expediente->inmuebles[0]->distrito ?? '<span style="color: red;">NO INDICADO</span>' !!},
                    provincia de {!! $expediente->inmuebles[0]->provincia ?? '<span style="color: red;">NO INDICADO</span>' !!},
                    departamento de {!! $expediente->inmuebles[0]->departamento ?? '<span style="color: red;">NO INDICADO</span>' !!}
                </li>
                <br>
                <li>Inscripción: El inmueble se encuentra inscrito en la Ficha Nº
                    {!! $expediente->inmuebles[0]->partida ?? '<span style="color: red;">NO INDICADO</span>' !!}
                    del Registro de Propiedad Inmueble de la Oficina Registral de
                    {!! $expediente->inmuebles[0]->sunarp ?? '<span style="color: red;">NO INDICADO</span>' !!}
                </li>
                <br>
                <li>Antecedente Registral: La Partida Electrónica del inmueble tiene como antecedente la
                    {!! $expediente->inmuebles[0]->antecedente ?? '<span style="color: red;">NO INDICADO</span>' !!}
                    del Registro de Propiedad Inmueble de la Oficina Registral de
                    {!! $expediente->inmuebles[0]->sunarp ?? '<span style="color: red;">NO INDICADO</span>' !!}
                </li>
            </ul>
        </li>
        <br><br><br><br><br><br><br><br><br><br>

        <li style="list-style: none;">II. AREA OCUPADA/ AREA TERRENO Y LINDEROS Y MEDIDAS PERIMÉTRICAS DEL INMUEBLE MATRIZ:</li>

        <table border="1" style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr>
                    <th>INFORMACIÓN REGISTRAL</th>
                    <th>INFORMACIÓN MUNICIPAL</th>
                    <th>TASACIÓN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- INFORMACIÓN REGISTRAL -->
                    <td>
                        {{-- Campo ficha no existe en la bd --}}
                        <strong>ÁREA:</strong> {!! $expediente->inmuebles[0]->area_registral ?? '<span style="color: red;">NO INDICADO</span>' !!} m²,
                        según consta en el asiento
                        {!! $expediente->inmuebles[0]->asiento_area_registral ?? '<span style="color: red;">NO INDICADO</span>' !!}
                        de la Ficha Nº
                        {!! $expediente->inmuebles[0]->ficha ?? '<span style="color: red;">NO INDICADO</span>' !!}
                        del Registro de Propiedad Inmueble de la Oficina Registral de
                        {!! $expediente->inmuebles[0]->sunarp ?? '<span style="color: red;">NO INDICADO</span>' !!}
                        <br><br>
                        <strong>LINDEROS Y MEDIDAS PERIMÉTRICAS:</strong>
                        Inscrito en el asiento {!! $expediente->inmuebles[0]->asiento_area_registral ?? '<span style="color: red;">NO INDICADO</span>' !!}
                        de la Nº {!! $expediente->inmuebles[0]->partida ?? '<span style="color: red;">NO INDICADO</span>' !!}
                        del Registro de Propiedad Inmueble de la Oficina Registral de
                        {!! $expediente->inmuebles[0]->sunarp ?? '<span style="color: red;">NO INDICADO</span>' !!}
                    </td>

                    <!-- INFORMACIÓN MUNICIPAL -->
                    <td>
                        <strong>ÁREA:</strong> {!! $expediente->inmuebles[0]->municipal ?? '<span style="color: red;">NO INDICADO</span>' !!} m²
                        <br>
                        Según DDJJ del año {!! $expediente->inmuebles[0]->anio_ddjj ?? '<span style="color: red;">NO INDICADO</span>' !!}
                    </td>

                    <!-- TASACIÓN -->
                    <td>
                        <strong>ÁREA:</strong> {!! $expediente->inmuebles[0]->tasacion ?? '<span style="color: red;">NO INDICADO</span>' !!} m²
                    </td>
                </tr>
            </tbody>
        </table>

        <li style="list-style: none;">III. DEL PROPIETARIO(s):</li>
        <p>
            <b>Propietario:</b> El inmueble registralmente pertenece a {!! $expediente->razon_social ?? '<span style="color: red;">NO INDICADO</span>' !!},
            con RUC N° {!! $expediente->ruc ?? '<span style="color: red;">NO INDICADO</span>' !!}, con domicilio en
            {!! $expediente->cliente->direccion ?? '<span style="color: red;">NO INDICADO</span>' !!}, distrito de
            {!! $expediente->cliente->distrito ?? '<span style="color: red;">NO INDICADO</span>' !!}, provincia de
            {!! $expediente->cliente->provincia ?? '<span style="color: red;">NO INDICADO</span>' !!}, departamento de
            {!! $expediente->cliente->departamento ?? '<span style="color: red;">NO INDICADO</span>' !!}.

            Adquirido mediante {!! $expediente->inmuebles[0]->titulo_propiedad ?? '<span style="color: red;">NO INDICADO</span>' !!} por un valor de
            {!! $expediente->inmuebles[0]->valor_adquisicion ?? '<span style="color: red;">NO INDICADO</span>' !!}, cancelados,
            a su anterior propietario mediante Escritura Pública de fecha
            {!! $expediente->inmuebles[0]->fecha_adquisicion ?? '<span style="color: red;">NO INDICADO</span>' !!},
            otorgada ante Notario Dr. {!! $expediente->inmuebles[0]->notario ?? '<span style="color: red;">NO INDICADO</span>' !!},
            transferencia inscrita en el asiento {!! $expediente->inmuebles[0]->asiento_inscripcion ?? '<span style="color: red;">NO INDICADO</span>' !!}
            de la Partida Electrónica N° {!! $expediente->inmuebles[0]->partida ?? '<span style="color: red;">NO INDICADO</span>' !!}
            del Registro de Propiedad Inmueble de la Oficina Registral de
            {!! $expediente->inmuebles[0]->sunarp ?? '<span style="color: red;">NO INDICADO</span>' !!}
        </p>

        <li style="list-style: none;">IV. DE LAS CARGAS Y GRAVÁMENES:</li>
        <p>
            Del Certificado Registral Inmobiliario de fecha {!! $expediente->inmuebles[0]->cri ?? '<span style="color: red;">NO INDICADO</span>' !!}
            y de la verificación a través de la web SUNARP de fecha 12/09/2024
        </p>

            @php
                $gravamenes =     json_encode($expediente->inmuebles[0]->gravamenes);
                $gramane2 = json_decode($gravamenes, true);

                $gramane2 = json_decode($gramane2, true);
                //dd($gramane2);

                // Recuperar el valor del campo old, si está disponible
                $carg = json_encode($expediente->inmuebles[0]->cargas);

                // Decodificar el JSON a un array PHP
                $cargacc = json_decode($carg, true) ?? [];

                // Asegurarse de que $tpendien2 es una cadena JSON válida y decodificarla
                $cargacc2 = is_string($cargacc) ? json_decode($cargacc, true) : $cargacc;

                // Si $tpendientesres sigue siendo null (por un JSON inválido), lo inicializamos como un array vacío
                $cargacc2 = $cargacc2 ?? [];

                //dd($cargacc2);
            @endphp

            <span>CARGAS:</span>
            <label style="vertical-align: middle;">
                <input type="checkbox" style="vertical-align: middle;" name="inmuebles[0][cargas][0]" value="Ninguno"
                    {{ is_array($cargacc2) && in_array('Ninguno', $cargacc2) ? 'checked' : '' }}> Ninguno
                <input type="checkbox" style="vertical-align: middle;" name="inmuebles[0][cargas][1]" value="Con Carga"
                    {{ is_array($cargacc2) && in_array('Con Carga', $cargacc2) ? 'checked' : '' }}> Con Carga
            </label>

            <br>
            <span>GRAVAMENES:</span>
            <label style="vertical-align: middle;">
                <input type="checkbox" name="inmuebles[0][gravamenes][0]" value="Sin Gravamen"
                    {{ (is_array($gramane2) && in_array('Sin Gravamen', $gramane2) ? 'checked' : '') }}
                    style="vertical-align: middle;"> Sin gravamen

                <input type="checkbox" name="inmuebles[0][gravamenes][0]" value="Con gravamen"
                    {{ (is_array($gramane2) && in_array('Con Gravamen', $gramane2) ? 'checked' : '') }}
                    style="vertical-align: middle;"> Con gravamen
            </label>
            <br><br>

            @php
                $pendintes = json_encode($expediente->inmuebles[0]->tpendientes);

                $pendien2 = json_decode($pendintes, true);


                $tpndien2 = json_decode($pendien2, true);
                //dd($tpndien2);
            @endphp

            <li style="list-style: none;">V. TÍTULOS PENDIENTES: </li>
            <br>
            <label style="vertical-align: middle;">
                <input type="checkbox" name="inmuebles[0][tpendientes][0]" value="Ninguno"
                {{ (is_array($tpndien2) && in_array('Ninguno', $tpndien2)) ? 'checked' : '' }}
                style="vertical-align: middle;"> Ninguno

                <input type="checkbox" name="inmuebles[0][tpendientes][1]" value="Con título pendiente"
                    {{ (is_array($tpndien2) && in_array('Con título pendiente', $tpndien2)) ? 'checked' : '' }}
                    style="vertical-align: middle;"> Con título pendiente
            </label>
            <br><br>

            <li style="list-style: none;">VI. PODERES DEL CLIENTE: </li>
            <p>{!! $expediente->razon_social ?? '<span style="color: red;">NO INDICADO</span>' !!}, inscrita en la Partida Electrónica N° {!! $expediente->Cliente->partida_promotor ?? '<span style="color: red;">NO INDICADO</span>' !!} del Registro de Personas Jurídicas de {!! $expediente->Cliente->sunarp ?? '<span style="color: red;">NO INDICADO</span>' !!}.</p>
            <p><b>A)</b> Formato B: Análisis de Poderes del BCP.</p>
            <span>El Gerente General puede a sola firma:</span>
            <br>
            @php
                $poderesSeleccionados = $expediente->cliente->poderes ?? '';

                // Si es una cadena separada por comas, la convertimos a un array
                // Si es un JSON válido, decodificarlo a un array


                if (is_string($poderesSeleccionados)) {
                    $poderesSeleccionados = json_decode($poderesSeleccionados, true);

                    // Si la decodificación falla (es decir, no es un JSON válido), lo tratamos como una cadena separada por comas
                    if (json_last_error() !== JSON_ERROR_NONE) {
                        $poderesSeleccionados = explode(',', $poderesSeleccionados);
                    }
                }

                //dd($poderesSeleccionados);

            @endphp
            <div style="margin-top:7px;">
                <label style="vertical-align: middle;">
                    <input type="checkbox" style="vertical-align: middle;" name="poderes[1]" value="Contratos de créditos en general"
                        {{ is_array($poderesSeleccionados) && in_array('Contratos de créditos en general', $poderesSeleccionados) ? 'checked' : '' }}> Contratos de créditos en general
                </label>
                <br>
                <label style="vertical-align: middle;">
                    <input type="checkbox" style="vertical-align: middle;" name="poderes[2]" value="Solicitar, contratar y otorgar fianzas"
                        {{ is_array($poderesSeleccionados) && in_array('Solicitar, contratar y otorgar fianzas', $poderesSeleccionados) ? 'checked' : '' }}> Solicitar, contratar y otorgar fianzas
                </label>
                <br>
                <label style="vertical-align: middle;">
                    <input type="checkbox" style="vertical-align: middle;" name="poderes[3]" value="Compra y venta de bienes muebles e inmuebles y valores mobiliarios"
                        {{ is_array($poderesSeleccionados) && in_array('Compra y venta de bienes muebles e inmuebles y valores mobiliarios', $poderesSeleccionados) ? 'checked' : '' }}> Compra y venta de bienes muebles e inmuebles y valores mobiliarios
                </label>
                <br>
                <label style="vertical-align: middle;">
                    <input type="checkbox" style="vertical-align: middle;" name="poderes[4]" value="Hipotecar"
                        {{ is_array($poderesSeleccionados) && in_array('Hipotecar', $poderesSeleccionados) ? 'checked' : '' }}> Hipotecar
                </label>
                <br>
                <label style="vertical-align: middle;">
                    <input type="checkbox" style="vertical-align: middle;" name="poderes[5]" value="Prendar y otorgar garantías inmobiliarias"
                        {{ is_array($poderesSeleccionados) && in_array('Prendar y otorgar garantías inmobiliarias', $poderesSeleccionados) ? 'checked' : '' }}> Prendar y otorgar garantías inmobiliarias
                </label>
                <br>
                <label style="vertical-align: middle;">
                    <input type="checkbox" style="vertical-align: middle;" name="poderes[6]" value="Afectar títulos valores en garantía"
                        {{ is_array($poderesSeleccionados) && in_array('Afectar títulos valores en garantía', $poderesSeleccionados) ? 'checked' : '' }}> Afectar títulos valores en garantía
                </label>
                <br>
                <label style="vertical-align: middle;">
                    <input type="checkbox" style="vertical-align: middle;" name="poderes[7]" value="Endose pólizas de seguros"
                        {{ is_array($poderesSeleccionados) && in_array('Endose pólizas de seguros', $poderesSeleccionados) ? 'checked' : '' }}> Endose pólizas de seguros
                </label>
                <br>
                <label style="vertical-align: middle;">
                    <input type="checkbox" style="vertical-align: middle;" name="poderes[8]" value="Consorcios"
                        {{ is_array($poderesSeleccionados) && in_array('Consorcios', $poderesSeleccionados) ? 'checked' : '' }}> Consorcios
                </label>
                <br>
                <label style="vertical-align: middle;">
                    <input type="checkbox" style="vertical-align: middle;" name="poderes[9]" value="Suscribir, constituir fideicomiso en garantía y transferir en dominio fiduciario bienes y/o flujos"
                        {{ is_array($poderesSeleccionados) && in_array('Suscribir, constituir fideicomiso en garantía y transferir en dominio fiduciario bienes y/o flujos', $poderesSeleccionados) ? 'checked' : '' }}> Suscribir, constituir fideicomiso en garantía y transferir en dominio fiduciario bienes y/o flujos.
                </label>
                <br>
                <label style="vertical-align: middle;">
                    <input type="checkbox" style="vertical-align: middle;" name="poderes[10]" value="Otorgar poder Irrevocable"
                        {{ is_array($poderesSeleccionados) && in_array('Otorgar poder Irrevocable', $poderesSeleccionados) ? 'checked' : '' }}> Otorgar poder Irrevocable
                </label>
                <br><br>


                <p><b>B) Representantes: </b></p>
                <p>Gerente General: {!! $expediente->Cliente->rep_legal ?? '<span style="color: red;">NO INDICADO</span>' !!} identificado con N° {!! $expediente->Cliente->dni_rep_legal ?? '<span style="color: red;">NO INDICADO</span>' !!}.</p>
            </div>

            <li style="list-style: none;">VII. IMPUESTOS </li>
            <p>Se ha revisado el HR y PU del año 2024, los mismos que se encuentran cancelados, según recibos adjuntados.</p>

            <li style="list-style: none;">VIII. DOCUMENTOS RECIBIDOS:</li>
            <p>Se tuvo a la vista: </p>
            <div style="margin-top:7px;">
                @foreach($expediente->inmuebles as $index => $inmueble)
                    @php
                        // Recuperar el valor del campo old, si está disponible
                        // Decodificar el JSON a un array PHP
                        $variableJs = $expediente->evaluacion->documentos_re;

                        // Si $variableJs es null o una cadena vacía, asignar un valor predeterminado
                        $variableJs = $variableJs ?? '[]'; // Usar un array JSON vacío como valor predeterminado

                        // Decodificar el JSON a un array PHP
                        $docre = json_decode($variableJs, true);

                        // Si json_decode devuelve null (por un JSON inválido), inicializarlo como un array vacío
                        $docre = $docre ?? [];

                        // Para depurar
                        // dd($docre);
                    @endphp
                    <label style="vertical-align: middle;">
                        <input class="form-check-input" type="checkbox" id="formCheckCRI_{{ $index }}" name="DOCUMENTOSRE[0]"
                            {{ is_array($docre) && in_array('CRI', $docre) ? 'checked' : '' }}>
                            CRI de la partida electrónica Nº {!! $inmueble->partida ?? '<span style="color: red;">NO INDICADO</span>' !!} del Registro de Propiedad Inmueble de la Oficina Registral de {!! $inmueble->sunarp ?? '<span style="color: red;">NO INDICADO</span>' !!}.

                    </label>
                    <br>
                    <label style="vertical-align: middle;">
                        <input type="checkbox" style="vertical-align: middle;" name="DOCUMENTOSRE[1]" value="HR y PU 2024"
                            {{ is_array($docre) && in_array('HR y PU 2024', $docre) ? 'checked' : '' }}> HR y PU 2024
                    </label>
                    <br>
                    <label style="vertical-align: middle;">
                        <input type="checkbox" style="vertical-align: middle;" name="DOCUMENTOSRE[3]" value="Aplicativo de poderes del cliente"
                            {{ is_array($docre) && in_array('Aplicativo de poderes del cliente', $docre) ? 'checked' : '' }}> Aplicativo de poderes del cliente
                    </label>
                    <br>
                    <label style="vertical-align: middle;">
                        <input type="checkbox" style="vertical-align: middle;" name="DOCUMENTOSRE[4]" value="Informe de tasación"
                            {{ is_array($docre) && in_array('Informe de tasación', $docre) ? 'checked' : '' }}> Informe de tasación.
                    </label>
                    <br>
                    <label style="vertical-align: middle;">
                        <input type="checkbox" style="vertical-align: middle;" name="DOCUMENTOSRE[5]" value="Vigencia de poder de representante del cliente"
                            {{ is_array($docre) && in_array('Vigencia de poder de representante del cliente', $docre) ? 'checked' : '' }}> Vigencia de poder de representante del cliente
                    </label>
                    <br>
                    <label style="vertical-align: middle;">
                        <input type="checkbox" style="vertical-align: middle;" name="DOCUMENTOSRE[6]" value="DNI del representante del cliente"
                            {{ is_array($docre) && in_array('DNI del representante del cliente', $docre) ? 'checked' : '' }}> DNI del representante del cliente
                    </label>
                    <br>
                    <label style="vertical-align: middle;">
                        <input type="checkbox" style="vertical-align: middle;" name="DOCUMENTOSRE[7]" value="DNI del/ los propietario(s)"
                            {{ is_array($docre) && in_array('DNI del/ los propietario(s)', $docre) ? 'checked' : '' }}> DNI del/ los propietario(s)
                    </label>
                    <br>
                    <label style="vertical-align: middle;">
                        <input type="checkbox" style="vertical-align: middle;" name="DOCUMENTOSRE[8]" value="Modelo de Minuta de Compraventa de Bien futuro"
                            {{ is_array($docre) && in_array('Modelo de Minuta de Compraventa de Bien futuro', $docre) ? 'checked' : '' }}> Modelo de Minuta de Compraventa de Bien futuro
                    </label>
                    <br>
                    <label style="vertical-align: middle;">
                        <input type="checkbox" style="vertical-align: middle;" name="DOCUMENTOSRE[9]" value="Otros"
                            {{ is_array($docre) && in_array('Otros', $docre) ? 'checked' : '' }}> Otros
                    </label>
                    <br><br>
                @endforeach

            </div>

            <li style="list-style: none;">IX. OBSERVACIONES Y DOCUMENTOS PARA SUBSANAR: </li>
            <p>RESPECTO AL INMUEBLE: <br>
                {!! $expediente->evaluacion->respecto_inmueble ?? '<span style="color: red;">NO INDICADO</span>' !!}
            </p>

            <p>RESPECTO DEL CLIENTE O LA OPERACIÓN: <br>
                {!! $expediente->evaluacion->respecto_cliente_opera ?? '<span style="color: red;">NO INDICADO</span>' !!}
            </p>

            <p>RESPECTO A LA MINUTA DE COMPRAVENTA: <br>
                {!! $expediente->evaluacion->respecto_minu_compr_v ?? '<span style="color: red;">NO INDICADO</span>' !!}
            </p>

            <p>RESPECTO DE LA MINUTA DE COMPRAVENTA DE BIEN FUTURO: <br>
                {!! $expediente->evaluacion->respecto_minu_compr_v_futu ?? '<span style="color: red;">NO INDICADO</span>' !!}
            </p>

            <p>RESPETO DE LOS FIADORES: <br>
                {!! $expediente->evaluacion->respecto_fiador ?? '<span style="color: red;">NO INDICADO</span>' !!}
            </p>

            <li style="list-style: none;">X. COMENTARIOS (no generan observaciones que paralizan la operación):</li>
            <br><br>
            <li style="list-style: none;">XI. CONCLUSIÓN:</li>

            <p style="margin-top:27px;">Atentamente,</p>

            <div style="text-align: center;">
                <img src="{{ public_path('images/imagen.png') }}" alt="Imagen" style="width: 200px; height: auto; text-align: center;">
            </div>

        </ol>
    </div>
</body>
</html>
