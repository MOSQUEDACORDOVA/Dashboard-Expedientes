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

        
    </style>
</head>
<body>
    <div class="header">
        <h1 style="font-size:19px">INFORME PARA GARANTÍA BCP

        </h1>
      
    </div>

    <table style="margin-left: 35px;">
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
            <td class=""><?php echo e($expediente->razon_social); ?></td>
        </tr>
        <tr>
            <td>Finalidad</td>
            <td>:</td>
            <td class="highlight-red">«Tramite» CONFIRMAR VALOR</td>
        </tr>
        <tr>
            <td>Valor Comercial</td>
            <td>:</td>
            <td class=""><?php echo e($expediente->inmuebles[0]->valor_comercial); ?></td>
        </tr>
        <tr>
            <td>Valor de Afectación</td>
            <td>:</td>
            <td class=""><?php echo e($expediente->inmuebles[0]->gravamen); ?></td>
        </tr>
    </table>

    <?php
    \Carbon\Carbon::setLocale('es');
?>
    <div class="content">
     
        <hr>
        <p><strong>Fecha Informe:</strong> <?php echo e($expediente->created_at->translatedFormat('d \d\e F \d\e Y')); ?></p>
              <!-- Aquí puedes agregar más campos según lo que tengas en tu tabla expedientes -->
        
        <b>INSTRUCCIÓN PARA FORMALIZACIÓN A NOTARÍA:</b><br>
        <b>«Instrucción_Notaria»</b>

        <hr>
        <br><br><br>
        <ol type="I">
            <li>DATOS DEL INMUEBLE
            <ul>
                <br>
                <li>Ubicación:<?php echo e($expediente->inmuebles[0]->direccion); ?> distrito de <?php echo e($expediente->inmuebles[0]->distrito); ?> , provincia de <?php echo e($expediente->inmuebles[0]->provincia); ?>, departamento de.<?php echo e($expediente->inmuebles[0]->departamento); ?></li>
                    <br>
                <li>Inscripción: El inmueble se encuentra inscrito en la  Ficha Nº <?php echo e($expediente->inmuebles[0]->partida); ?> del Registro de Propiedad Inmueble de la Oficina Registral de <?php echo e($expediente->inmuebles[0]->sunarp); ?></li>
                <br>
                <li>Antecedente Registral: La Partida Electrónica del inmueble tiene como antecedente la <?php echo e($expediente->inmuebles[0]->antecedente); ?> del Registro de Propiedad Inmueble de la Oficina Registral de <?php echo e($expediente->inmuebles[0]->sunarp); ?></li>
            </ul></li>
                <br><br><br><br><br><br><br><br><br><br>
            <li>AREA OCUPADA/ AREA TERRENO Y LINDEROS Y MEDIDAS PERIMÉTRICAS DEL INMUEBLE MATRIZ:</li>
           
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
                            <strong>ÁREA:</strong><?php echo e($expediente->inmuebles[0]->area_registral); ?>  m²,
                            según consta en el asiento <strong></strong> de la 
                            Ficha Nº <strong></strong> del Registro de Propiedad 
                            Inmueble de la Oficina Registral de <strong></strong>.
                            <br><br>
                            <strong>LINDEROS Y MEDIDAS PERIMÉTRICAS
                                Inscrito en el asiento «Asiento_Area_Registral»  de la Nº «Partida_Inmueble_1» del Registro de Propiedad Inmueble de la Oficina Registral de.«SUNARP_Inmueble_1»</strong>
                            <br>Inscrito en el asiento <strong></strong>.
                        </td>
            
                        <!-- INFORMACIÓN MUNICIPAL -->
                        <td>
                            <strong>ÁREA:</strong>  m²
                            <br>
                            Según DDJJ del año .
                        </td>
            
                        <!-- TASACIÓN -->
                        <td>
                            <strong>ÁREA:</strong>  m²
                        </td>
                    </tr>
                </tbody>
            </table>
           
           
            <li>DEL PROPIETARIO(s):</li>
            <p><b>Propietario:</b> El inmueble registralmente pertenece a <?php echo e($expediente->razon_social); ?>, con RUC N° <?php echo e($expediente->ruc); ?>, con domicilio en  <?php echo e($expediente->cliente->direccion); ?> distrito de, <?php echo e($expediente->cliente->distrito); ?> , provincia de <?php echo e($expediente->cliente->provincia); ?>, departamento de <?php echo e($expediente->cliente->departamento); ?> 

                Adquirido mediante <?php echo e($expediente->inmuebles[0]->titulo_propiedad); ?> por un valor de <?php echo e($expediente->inmuebles[0]->valor_adquisicion); ?>, cancelados, a su anterior propietario mediante Escritura Pública de fecha <?php echo e($expediente->inmuebles[0]->fecha_adquisicion); ?>, otorgada ante Notario Dr. <?php echo e($expediente->inmuebles[0]->notario); ?>, transferencia inscrita en el asiento <?php echo e($expediente->inmuebles[0]->asiento_inscripcion); ?> de la Partida Electrónica N° <?php echo e($expediente->inmuebles[0]->partida); ?>  del Registro de Propiedad Inmueble de la Oficina Registral de.<?php echo e($expediente->inmuebles[0]->sunarp); ?>.
                </p>


            <li>DE LAS CARGAS Y GRAVÁMENES:</li>
            <p>Del Certificado Registral Inmobiliario de fecha <?php echo e($expediente->inmuebles[0]->cri); ?> y de la verificación a través de la web SUNARP de fecha 12/09/2024</p>
           <?php
             

                $gravamenes =     json_encode($expediente->inmuebles[0]->gravamenes);
                $gramane2 = json_decode($gravamenes, true);

                $gramane2 = json_decode($gramane2, true);
                //dd($gramane2);
    
           ?>
            <span>CARGAS:</span>
            <label style="vertical-align: middle;">
                <input type="checkbox" style="vertical-align: middle;"> Ninguno
                <input type="checkbox" style="vertical-align: middle;" > Con Carga
            </label>
            <br>
            <span>GRAVAMENES:</span> 
            <label style="vertical-align: middle;">
                <input type="checkbox" name="inmuebles[0][gravamenes][0]"  value="Sin Gravamen"
                <?php echo e((in_array('Sin Gravamen', $gramane2) ? 'checked' : '')); ?>

                style="vertical-align: middle;"> Sin gravamen
                <input type="checkbox" name="inmuebles[0][gravamenes][0]"  value="Con gravamen"
                <?php echo e((in_array('Con Gravamen', $gramane2) ? 'checked' : '')); ?>

                style="vertical-align: middle;"> Con gravamen
           
            </label>
            <br><br>

            <?php
             

            $pendintes =     json_encode($expediente->inmuebles[0]->tpendientes);
            
            $pendien2 = json_decode($pendintes, true);


            $tpndien2 = json_decode($pendien2, true);
            //dd($tpndien2);

            ?>

            <li>TÍTULOS PENDIENTES: </li>
            <br>
            <label style="vertical-align: middle;">
                <input type="checkbox" name="inmuebles[0][tpendientes][0]"  value="Ninguno"
                <?php echo e((in_array('Ninguno', $tpndien2) ? 'checked' : '')); ?>

                style="vertical-align: middle;"> Ninguno
                <input type="checkbox" name="inmuebles[0][tpendientes][1]"  value="Con gravamen"
                <?php echo e((in_array('Con título pendiente', $tpndien2) ? 'checked' : '')); ?>

                style="vertical-align: middle;">Con título pendiente
           
            </label>
            <br><br>
            <li>VI.	PODERES DEL CLIENTE: </li>
            <p>«Razón_Social», inscrita en la Partida Electrónica N° «Partida_Promotor» del Registro de Personas Jurídicas de «Oficina_SUNARP_Promotor».</p>
            <p><b>A)</b> Formato B: Análisis de Poderes del BCP.</p>
            <span>El Gerente General puede a sola firma:</span>
            <br>
            <div style="margin-top:7px;">
            <label style="vertical-align: middle;">
                <input type="checkbox" style="vertical-align: middle;"> Contratos de créditos en general
                
            </label>
            <br>
            <label style="vertical-align: middle;">
                <input type="checkbox" style="vertical-align: middle;">Solicitar, contratar y otorgar fianzas 
                
            </label>
            <br>
            <label style="vertical-align: middle;">
                <input type="checkbox" style="vertical-align: middle;"> Compra y venta de bienes muebles e inmuebles y valores mobiliarios 
                
            </label>
            <br>
            <label style="vertical-align: middle;">
                <input type="checkbox" style="vertical-align: middle;"> Hipotecar
                
            </label>
            <br>
            <label style="vertical-align: middle;">
                <input type="checkbox" style="vertical-align: middle;"> Prendar y otorgar garantías inmobiliarias
                
            </label>
            <br>
            <label style="vertical-align: middle;">
                <input type="checkbox" style="vertical-align: middle;">Afectar títulos valores en garantía
                
            </label>
            <br>

            <label style="vertical-align: middle;">
                <input type="checkbox" style="vertical-align: middle;">Endose pólizas de seguros
                
            </label>
            <br>

            <label style="vertical-align: middle;">
                <input type="checkbox" style="vertical-align: middle;">Consorcios 
                
            </label>
            <br>

            <label style="vertical-align: middle;">
                <input type="checkbox" style="vertical-align: middle;"> Suscribir, constituir fideicomiso en garantía y transferir en dominio fiduciario bienes y/o flujos.
                
            </label>
            <br>

            <label style="vertical-align: middle;">
                <input type="checkbox" style="vertical-align: middle;">Otorgar poder Irrevocable 
                
            </label>
            <br><br>

            <p><b></b> B)	Representantes: </p>

            <p>Gerente General: «Representante_Legal_1» identificado con  N°«DNI_Representante_Legal_1». </p>

            </div>


            <li>IMPUESTOS </li>
            <p>Se ha revisado el HR y PU del año 2024, los mismos que se encuentran cancelados, según recibos adjuntados.</p>
        
            <li>DOCUMENTOS RECIBIDOS:</li>
            <p>Se tuvo a la vista: </p>
            <div style="margin-top:7px;">
                <label style="vertical-align: middle;">
                    <input type="checkbox" style="vertical-align: middle;"> CRI de la partida electrónica Nº «Partida_Inmueble_1» del Registro de Propiedad Inmueble de la Oficina Registral de.«SUNARP_Inmueble_1».
                    
                </label>
                <br>
                <label style="vertical-align: middle;">
                    <input type="checkbox" style="vertical-align: middle;">HR y PU 2024
                    
                </label>
                <br>
                <label style="vertical-align: middle;">
                    <input type="checkbox" style="vertical-align: middle;"> Aplicativo de poderes del cliente
                    
                </label>
                <br>
                <label style="vertical-align: middle;">
                    <input type="checkbox" style="vertical-align: middle;"> Informe de tasación.
                    
                </label>
                <br>
                <label style="vertical-align: middle;">
                    <input type="checkbox" style="vertical-align: middle;"> Vigencia de poder de representante del cliente
                    
                </label>
                <br>
                <label style="vertical-align: middle;">
                    <input type="checkbox" style="vertical-align: middle;"> DNI del representante del cliente
                    
                </label>
                <br>
    
                <label style="vertical-align: middle;">
                    <input type="checkbox" style="vertical-align: middle;"> DNI del/ los propietario(s)
                    
                </label>
                <br>
    
                <label style="vertical-align: middle;">
                    <input type="checkbox" style="vertical-align: middle;"> Modelo de Minuta de Compraventa de Bien futuro
                    
                </label>
                <br>
    
                <label style="vertical-align: middle;">
                    <input type="checkbox" style="vertical-align: middle;"> Otros:
                    
                </label>
                <br>
    
                
                <br><br>
    
                    
                </div>
        
                <li> OBSERVACIONES Y DOCUMENTOS PARA SUBSANAR: </li>

                <p>RESPECTO AL INMUEBLE: <br>
                    «Observaciones_Inmueble»
                    </p>

                    <p>RESPECTO DEL CLIENTE O LA OPERACION: <br>
                        «Observaciones_Inmueble»
                        </p>

                        <p>RESPECTO A LA MINUTA DE COMPRAVENTA: <br>
                            «Observaciones_Inmueble»
                            </p>

                            <p>RESPECTO DE LA MINUTA DE COMPRAVENTA DE BIEN FUTURO: <br>
                                «Observaciones_Inmueble»
                                </p>

                                <p>RESPETO DE LOS FIADORES: <br>
                                    «Observaciones_Inmueble»
                                    </p>


             <li> COMENTARIOS (no generan observaciones que paralizan la operación): </li>    
             <br><br>
             <li>CONCLUSION:</li>    

             <p style="margin-top:27px;">Atentamente,</p>
            <div style="text-align: center; ">
                
        
             <img src="<?php echo e(public_path('images/imagen.png')); ?>" alt="Imagen" style="width: 200px; height: auto; text-align: center;">

            </div>        
                        

        </ol>
    </div>

   
</body>
</html>
<?php /**PATH C:\wamp64\www\sistemaexpediente\resources\views/reporte-expediente.blade.php ENDPATH**/ ?>