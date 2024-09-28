<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.crear-expediente'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?> Page Title <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<!-- your page css file -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?>
    Expediente
<?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?>

<?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-xxl-12">
        <div class="row">
        <h3 class="col-md-4 mb-3">Generar nuevo expediente</h3>
        <h3 class="col-md-4 offset-md-4">Trazer ID:</h3>
        </div>

        <div class="card">
            <div class="card-body">
                <!-- Nav tabs -->

      <form id="multiStepForm" action="<?php echo e(route('expedientes.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

                    <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                    <li class="nav-item waves-effect waves-light">
                            <a class="nav-link active" data-bs-toggle="tab" href="#expediente" role="tab">
                                EXPEDIENTE
                        </a>
                    </li>

                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link " data-bs-toggle="tab" href="#cliente" role="tab">
                            CLIENTE
                    </a>
                </li>

                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link" data-bs-toggle="tab" href="#pill-justified-profile-1" role="tab">
                            INMUEBLE
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link" data-bs-toggle="tab" href="#pill-justified-messages-1" role="tab">
                            EVALUACIÓN
                        </a>
                    </li>

                </ul>
                <!-- Tab panes -->
                <div class="tab-content text-muted">
                    <div class="tab-pane active" id="expediente" role="tabpanel">
                        <h4 class="card-title mb-4 flex-grow-1">Ingresar los datos verificados para la correcta elaboración del Informe para garantía</h4>


                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="razonSocial" class="form-label">Razón Social</label>
                                    <input type="text" class="form-control" id="razonSocial" name="razon_social" required >

                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="ruc" class="form-label">RUC</label>
                                    <input type="text" class="form-control" id="ruc" name="ruc" value="">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="nombreProyecto" class="form-label">Nombre de Proyecto</label>
                                    <input type="text" class="form-control" id="nombreProyecto" name="nombre_proyecto" value="">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="proveedorLegal" class="form-label">Proveedor Legal</label>
                                    <input type="text" class="form-control" id="proveedorLegal" name="proveedor_legal" value="">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="trazeId" class="form-label">Trazer ID</label>
                                    <input type="text" class="form-control" id="trazeId" name="traze_id" value="">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="finalidad" class="form-label">Finalidad</label>
                                    <input type="text" class="form-control" id="finalidad" name="finalidad" value="">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="funcionario" class="form-label">Funcionario</label>
                                    <input type="text" class="form-control" id="funcionario" name="funcionario" value="">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="correoFuncionario" class="form-label">Correo de Funcionario</label>
                                    <input type="email" class="form-control" id="correoFuncionario" name="correo_funcionario" value="">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="asistente" class="form-label">Asistente</label>
                                    <input type="text" class="form-control" id="asistente" name="asistente" value="">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12 mb-3">
                                <div>
                                    <label for="correoAsistente" class="form-label">Correo de asistente</label>
                                    <input type="email" class="form-control" id="correoAsistente" name="correo_asistente" value="">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12 mb-3">
                                <div>
                                    <label for="actividadActual" class="form-label">Actividad actual</label>
                                    <input type="text" class="form-control" id="actividadActual" name="actividad_actual" value="">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12 mb-3">
                                <div>
                                    <label for="trazeVinculado" class="form-label">Trazer vinculado</label>
                                    <input type="text" class="form-control" id="trazeVinculado" name="traze_vinculado" value="">
                                </div>
                            </div>

                         <!-- <div class="row" style="text-align: center;">
                                <div class="col-xxl-12 col-md-12">
                                    <button type="button" class="btn btn-success waves-effect waves-light" id="submitButton">GRABAR EXPEDIENTE</button>
                                </div>
                            </div>-->

                    </div>


                    <div class="tab-pane " id="cliente" role="tabpanel">
                        <h4 class="card-title mb-4 flex-grow-1">Ingresar los datos verificados para la correcta elaboración del Informe para garantía</h4>


                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="partidaPromotor" class="form-label">Partida Promotor</label>
                                    <input type="text" class="form-control" id="partidaPromotor" name="partidaPromotor" value="">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="sunarp" class="form-label">Oficina SUNARP promotor
                                    </label>
                                    <input type="text" class="form-control" id="sunarp" name="sunarp" value="">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="repLegal" class="form-label">Representante Legal 1</label>
                                    <input type="text" class="form-control" id="repLegal" name="repLegal" value="">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="dni_rep_legal" class="form-label">DNI Representante Legal 1</label>
                                    <input type="text" class="form-control" id="dni_rep_legal" name="dni_rep_legal" value="">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="aspoderlegal" class="form-label">Asiento de poder  - Representante Legal 1</label>
                                    <input type="text" class="form-control" id="aspoderlegal" name="aspoderlegal" value="">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="correoElectronico1" class="form-label">Correo electrónico 1
                                    </label>
                                    <input type="text" class="form-control" id="correoElectronico1" name="correoElectronico1"  value="">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="dpromotor" class="form-label">Dirección promotor</label>
                                    <input type="text" class="form-control" id="dpromotor" name="dpromotor" value="">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <label for="departamentoPromotor" class="form-label">Departamento promotor</label>
                                <select class="form-select rounded-pill mb-3" id="departamentoPromotor" name="departamentoPromotor" value="" aria-label="Default select example" onchange="cambiarProvincias()">
                                    <option selected>Ingresar dato</option>
                                    <option value="Amazonas">Amazonas</option>
                                    <option value="Áncash">Áncash</option>
                                    <option value="Apurímac">Apurímac</option>
                                    <option value="Arequipa">Arequipa</option>
                                    <option value="Ayacucho">Ayacucho</option>
                                    <option value="Cajamarca">Cajamarca</option>
                                    <option value="Callao">Callao</option>
                                    <option value="Cusco">Cusco</option>
                                    <option value="Huancavelica">Huancavelica</option>
                                    <option value="Huánuco">Huánuco</option>
                                    <option value="Ica">Ica</option>
                                    <option value="Junín">Junín</option>
                                    <option value="LaLibertad">La Libertad</option>
                                    <option value="Lambayeque">Lambayeque</option>
                                    <option value="Lima">Lima</option>
                                    <option value="Loreto">Loreto</option>
                                    <option value="MadredeDios">Madre de Dios</option>
                                    <option value="Moquegua">Moquegua</option>
                                    <option value="Pasco">Pasco</option>
                                    <option value="Piura">Piura</option>
                                    <option value="Puno">Puno</option>
                                    <option value="SanMartín">San Martín</option>
                                    <option value="Tacna">Tacna</option>
                                    <option value="Tumbes">Tumbes</option>
                                    <option value="Ucayali">Ucayali</option>
                                </select>
                            </div>

                            <div class="col-lg-12">
                                <label for="provinciaPromotor" class="form-label">Provincia promotor</label>
                                <select class="form-select rounded-pill mb-3" id="provinciaPromotor" name="provinciaPromotor" value=""  aria-label="Default select example" onchange="cambiarDistritos()">
                                    <option selected>Ingresar dato</option>
                                </select>
                            </div>

                            <div class="col-lg-12">
                                <label for="basiInput" class="form-label">Distrito promotor                            </label>
                                <select class="form-select rounded-pill mb-3" id="distritoPromotor" name="distritoPromotor" value=""  aria-label="Default select example">
                                    <option selected>Ingresar dato</option>
                                </select>
                            </div>



                                <div class="row">
                                    <h3 class="col-md-8 mb-3">FORMATO B - ANÁLISIS DE PODERES</h3>
                                    <p class="col-md-4 "><a id="selecioTodo" style="font-size: 18px;
                                 color: black; cursor:pointer;
                                                            text-decoration: underline;">Seleccionar todo</a></p>
                                    </div>

                                <div class="col-xxl-12 col-lg-4 col-md-12 mb-3">


                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck1" name="poderes[1]" value="Contratos de créditos en general">
                                            <label class="form-check-label" for="formCheck1">
                                                Contratos de créditos en general
                                            </label>
                                        </div>

                                </div><!--end col-->
                                <div class="col-lg-12 col-md-12 mb-3">


                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="formCheck2" name="poderes[2]"  value="Solicitar, contratar y otorgar fianzas" >
                                        <label class="form-check-label" for="formCheck2">
                                            Solicitar, contratar y otorgar fianzas
                                        </label>
                                    </div>

                            </div><!--end col-->

                            <div class="col-xxl-12 col-lg-12 col-md-12 mb-3">


                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="formCheck3" name="poderes[3]" value="Compra y venta de bienes muebles e inmuebles y valores mobiliarios" >
                                    <label class="form-check-label" for="formCheck3">
                                        Compra y venta de bienes muebles e inmuebles y valores mobiliarios
                                    </label>
                                </div>

                        </div><!--end col-->

                        <div class="col-lg-12 col-md-12 mb-3">


                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="formCheck4" name="poderes[4]" value="Hipotecar" >
                                <label class="form-check-label" for="formCheck4">
                                    Hipotecar
                                </label>
                            </div>

                    </div><!--end col-->

                    <div class="col-lg-12 col-md-6 mb-3">


                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="formCheck5" name="poderes[5]" value="Prendar y otorgar garantías inmobiliarias" >
                            <label class="form-check-label" for="formCheck5">
                                Prendar y otorgar garantías inmobiliarias
                            </label>
                        </div>

                </div><!--end col-->

                <div class="col-lg-12 col-md-6 mb-3">


                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="formCheck6" name="poderes[6]" value="Afectar títulos valores en garantía" >
                        <label class="form-check-label" for="formCheck6">
                            Afectar títulos valores en garantía

                        </label>
                    </div>

            </div><!--end col-->

            <div class="col-lg-12 col-md-6 mb-3">


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="formCheck7" name="poderes[7]" value=" Endose pólizas de seguros" >
                    <label class="form-check-label" for="formCheck7">
                        Endose pólizas de seguros
                    </label>
                </div>


                 </div><!--end col-->


                <div class="col-lg-12 col-md-6 mb-3">


                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="formCheck8" name="poderes[8]" value="Consorcios">
                        <label class="form-check-label" for="formCheck8">
                            Consorcios

                        </label>
                    </div>

            </div><!--end col-->


            <div class="col-lg-12 col-md-6 mb-3">


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="formCheck9" name="poderes[9]" value=" Suscribir, constituir fideicomiso en garantía y transferir en dominio fiduciario bienes y/o flujos" >
                    <label class="form-check-label" for="formCheck9">
                        Suscribir, constituir fideicomiso en garantía y transferir en dominio fiduciario bienes y/o flujos

                    </label>
                </div>

        </div><!--end col-->


        <div class="col-lg-12 col-md-6 mb-3">


            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="formCheck10" name="poderes[10]" value="Otorgar poder Irrevocable" >
                <label class="form-check-label" for="formCheck10">
                    Otorgar poder Irrevocable
                </label>
            </div>

    </div><!--end col-->


    <div class="col-lg-12 col-md-6 mb-3">


        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="formCheck11" name="poderes[11]" value="Cesión de posición contractual">
            <label class="form-check-label" for="formCheck11">
                Cesión de posición contractual

            </label>
        </div>

</div><!--end col-->


<div class="col-lg-12 col-md-6 mb-3">


    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="formCheck12" name="poderes[12]" value="Otros">
        <label class="form-check-label" for="formCheck12">
            Otros
        </label>
    </div>

</div><!--end col-->







                            <div class="row" style="text-align: center;">
                                <div class="col-xxl-12 col-md-12">
                                     <!--   <button type="button" class="btn btn-success waves-effect waves-light" id="submitButton">GRABAR CLIENTE</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar</button> -->
                                </div>
                            </div>

                    </div>

                    <div class="tab-pane" id="pill-justified-profile-1" role="tabpanel">



    <div class="col-xxl-12">

        <div class="row  mb-3">

            <h4 class="col-md-4 mb-3"> Datos de Inmueble</h4>

            <button type="button" id="addInmueble" class="btn btn-outline-primary btn-border  col-md-2 offset-md-6">Añadir Inmuebles</button>
            </div>





<ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="inmueble-tab-0" data-bs-toggle="tab" data-bs-target="#inmueble-0" type="button" role="tab" aria-controls="inmueble-0" aria-selected="true">Inmueble 1</button>

    </li>
</ul>

<!-- Contenedor de Contenido de los Tabs -->
<div class="tab-content" id="inmueblesContainer">
    <div class="tab-pane fade show active inmueble-section" id="inmueble-0" role="tabpanel" aria-labelledby="inmueble-tab-0">
        <div class="col-xxl-12 mb-3 col-md-12">
            <div>
                <label for="PartidaInmueble" class="form-label">Partida de Inmueble</label>
                <input type="text" class="form-control" id="PartidaInmueble" name="inmuebles[0][partida]" value="">
            </div>
        </div>
        <div class="col-xxl-12 mb-3 col-md-12">
            <div>
                <label for="AntecedenteRegistral" class="form-label">Antecedente Registral</label>
                <input type="text" class="form-control" id="antecedenteInput1" name="inmuebles[0][antecedente]" value="">
            </div>
        </div>
        <div class="col-xxl-12 mb-3 col-md-12">
            <div>
                <label for="fichaInput1" class="form-label">Ficha Inmueble</label>
                <input type="text" class="form-control" id="fichaInput1" name="inmuebles[0][ficha]" value="">
            </div>
        </div>
        <div class="col-xxl-12 mb-3 col-md-12">
            <div>
                <label for="anioInput1" class="form-label">DDJJ Inmueble</label>
                <input type="text" class="form-control" id="anioInput1" name="inmuebles[0][anio_ddjj]" value="">
            </div>
        </div>
        <div class="col-xxl-12 mb-3 col-md-12">
            <div>
                <label for="DireccionInmueble" class="form-label">Dirección Inmueble</label>
                <input type="text" class="form-control" id="direccionInput1" name="inmuebles[0][direccion]" value="">
            </div>
        </div>
        <div class="col-lg-12">
            <label for="DepartamentoInmueble" class="form-label">Departamento Inmueble</label>
            <select class="form-select rounded-pill mb-3" id="DepartamentoInmueble" name="inmuebles[0][departamento]" value="">
                <option selected>Ingresar dato</option>
                <!-- Opciones aquí -->
            </select>
        </div>
        <div class="col-lg-12">
            <label for="ProvinciaInmueble" class="form-label">Provincia Inmueble</label>
            <select class="form-select rounded-pill mb-3" id="ProvinciaInmueble" name="inmuebles[0][provincia]" value="">
                <option selected>Ingresar dato</option>
                <!-- Opciones aquí -->
            </select>
        </div>

        <div class="col-lg-12">
            <label for="DstritoInmueble" class="form-label">Distrito Inmueble</label>
            <select class="form-select rounded-pill mb-3" id="DstritoInmueble" name="inmuebles[0][DstritoInmueble]" value="">
                <option selected>Ingresar dato</option>
                <!-- Opciones aquí -->
            </select>
        </div>

        <div class="col-xxl-12 mb-3 col-md-12">
            <div>
                <label for="SunarpInmueble" class="form-label">SUNARP Inmueble</label>
                <input type="text" class="form-control" id="SunarpInmueble" name="inmuebles[0][SunarpInmueble]" value="">
            </div>
        </div>
        <div class="col-xxl-12 mb-3 col-md-12">
            <div>
                <label for="AreaRegistInmueble" class="form-label">Área registral Inmueble</label>
                <input type="text" class="form-control" id="AreaRegistInmueble" name="inmuebles[0][AreaRegistInmueble]" value="">
            </div>
        </div>
        <div class="col-xxl-12 mb-3 col-md-12">
            <div>
                <label for="AsiRegistrlInmueble" class="form-label">Asiento área registral</label>
                <input type="text" class="form-control" id="AsiRegistrlInmueble" name="inmuebles[0][AsiRegistrlInmueble]" value="">
            </div>
        </div>
        <div class="col-xxl-12 mb-3 col-md-12">
            <div>
                <label for="MunicipalArInmueble" class="form-label">Área municipal Inmueble</label>
                <input type="text" class="form-control" id="MunicipalArInmueble" name="inmuebles[0][MunicipalArInmueble]" value="">
            </div>
        </div>
        <div class="col-xxl-12 mb-3 col-md-12">
            <div>
                <label for="AratasacionInmueble" class="form-label">Área tasación Inmueble</label>
                <input type="text" class="form-control" id="AratasacionInmueble" name="inmuebles[0][AratasacionInmueble]" value="">
            </div>
        </div>

        <h4 class="mb-3"> CARGAS Y GRAVÁMENES </h3>

            <p> <b> Del Certificado Registral Inmobiliario de fecha «CRI» y de la verificación a
                través de la web SUNARP de fecha 14/07/2024, confirmar</b></p>


               <p> Cargas :</p>

               <div class="row ">

                        <div class="col-xxl-6 col-lg-6 col-md-6 mb-3">


                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="formCheck22"  name="inmuebles[0][cargas][0]" value="Ninguno">
                                <label class="form-check-label" for="formCheck22">
                                    Ninguno
                                </label>
                            </div>

                            </div><!--end col-->

                                <div class="col-xxl-6 col-lg-6 col-md-6 mb-3">


                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="formCheck23" name="inmuebles[0][cargas][1]" value="Con Carga" >
                                        <label class="form-check-label" for="formCheck23">
                                        Con Carga
                                        </label>
                                    </div>

                            </div><!--end col-->
                  </div>

                  <p> Gravámenes :</p>

                  <div class="row ">

                    <div class="col-xxl-6 col-lg-6 col-md-6 mb-3">


                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="formCheck24" name="inmuebles[0][gravamenes][0]" value="Sin Gravamen" >
                            <label class="form-check-label" for="formCheck24">
                                Sin Gravamen
                            </label>
                        </div>

                        </div><!--end col-->

                            <div class="col-xxl-6 col-lg-6 col-md-6 mb-3">


                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="formCheck25" name="inmuebles[0][gravamenes][1]" value="Con Gravamen" >
                                    <label class="form-check-label" for="formCheck25">
                                        Con Gravamen
                                    </label>
                                </div>

                        </div><!--end col-->
              </div>
              <h4 class="mb-3">  TITÚLOS PENDIENTES </h3>
                <div class="row ">

                    <div class="col-xxl-6 col-lg-6 col-md-6 mb-3">


                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="formCheck26" name="inmuebles[0][tpendientes][0]" value="Ninguno" >
                            <label class="form-check-label" for="formCheck26">
                                Ninguno
                            </label>
                        </div>

                        </div><!--end col-->

                            <div class="col-xxl-6 col-lg-6 col-md-6 mb-3">


                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="formCheck27"  name="inmuebles[0][tpendientes][1]" value="Con título pendiente" >
                                    <label class="form-check-label" for="formCheck27">
                                        Con título pendiente
                                    </label>
                                </div>

                        </div><!--end col-->
              </div>

              <h4 class="mb-3"> DATOS COMERCIALES </h3>

                <div class="col-xxl-12 mb-3 col-md-12">
                    <div>
                        <label for="Comercialinpt" class="form-label">   VALOR Comercial                 </label>
                        <input type="text" class="form-control" id="Comercialinpt" name="inmuebles[0][Comercialinpt]" value="">
                    </div>
                </div>
                <div class="col-xxl-12 mb-3 col-md-12">
                    <div>
                        <label for="Tasadorinput" class="form-label">   Tasador                       </label>
                        <input type="text" class="form-control" id="Tasadorinput" name="inmuebles[0][Tasadorinput]" value="">
                    </div>
                </div>

                <div class="col-xxl-12 mb-3 col-md-12">
                    <div>
                        <label for="InputREPEV" class="form-label">   REPEV                      </label>
                        <input type="text" class="form-control" id="InputREPEV" name="inmuebles[0][InputREPEV]" value="">
                    </div>
                </div>

                <div class="col-xxl-12 mb-3 col-md-12">
                    <div>
                        <label for="InGravamen" class="form-label">    Gravamen                  </label>
                        <input type="text" class="form-control" id="InGravamen" name="inmuebles[0][InGravamen]" value="">
                    </div>
                </div>

                <div class="col-xxl-12 mb-3 col-md-12">
                    <div>
                        <label for="InstrNotaria" class="form-label">    Instrucción Notaria                   </label>
                        <input type="text" class="form-control" id="InstrNotaria" name="inmuebles[0][InstrNotaria]" value="">
                    </div>
                </div>

                <h4 class="mb-3">  DATOS DEL PROPIETARIO </h3>

                    <div class="col-xxl-12 mb-3 col-md-12">
                        <div>
                            <label for="DatoPropie" class="form-label">    Propietario               </label>
                            <input type="text" class="form-control" id="DatoPropie" name="inmuebles[0][DatoPropie]" value="">
                        </div>
                    </div>

                    <div class="col-xxl-12 mb-3 col-md-12">
                        <div>
                            <label for="DniPropei" class="form-label">     DNI Propietario                    </label>
                            <input type="text" class="form-control" id="DniPropei" name="inmuebles[0][DniPropei]" value="">
                        </div>
                    </div>

                    <div class="col-xxl-12 mb-3 col-md-12">
                        <div>
                            <label for="EstCivil" class="form-label">      Estado Civil                    </label>
                            <input type="text" class="form-control" id="EstCivil" name="inmuebles[0][EstCivil]" value="">
                        </div>
                    </div>

                    <div class="col-xxl-12 mb-3 col-md-12">
                        <div>
                            <label for="NomConyug" class="form-label">     Nombre de Conyugue                </label>
                            <input type="text" class="form-control" id="NomConyug" name="inmuebles[0][NomConyug]" value="">
                        </div>
                    </div>

                    <div class="col-xxl-12 mb-3 col-md-12">
                        <div>
                            <label for="Dniconyug" class="form-label">     DNI Conyugue                  </label>
                            <input type="text" class="form-control" id="Dniconyug" name="inmuebles[0][Dniconyug]" value="">
                        </div>
                    </div>

                    <div class="col-xxl-12 mb-3 col-md-12">
                        <div>
                            <label for="DirecPropie" class="form-label">      Dirección   Propietario               </label>
                            <input type="text" class="form-control" id="DirecPropie" name="inmuebles[0][DirecPropie]" value="">
                        </div>
                    </div>
                    <div class="col-xxl-12 mb-3 col-md-12">
                        <div>
                            <label for="Deppropietario" class="form-label">      Departamento propietario                  </label>
                            <input type="text" class="form-control" id="Deppropietario" name="inmuebles[0][Deppropietario]" value="">
                        </div>
                    </div>

                    <div class="col-xxl-12 mb-3 col-md-12">
                        <div>
                            <label for="Provinciapropie" class="form-label">     Provincia propietario                 </label>
                            <input type="text" class="form-control" id="Provinciapropie" name="inmuebles[0][Provinciapropie]" value="">
                        </div>
                    </div>

                    <div class="col-xxl-12 mb-3 col-md-12">
                        <div>
                            <label for="DstritoPropi" class="form-label">     Distrito propietario               </label>
                            <input type="text" class="form-control" id="DstritoPropi" name="inmuebles[0][DstritoPropi]" value="">
                        </div>
                    </div>

                    <div class="col-xxl-12 mb-3 col-md-12">
                        <div>
                            <label for="TitulPropied" class="form-label">    Titulo de propiedad              </label>
                            <input type="text" class="form-control" id="TitulPropied" name="inmuebles[0][TitulPropied]" value="">
                        </div>
                    </div>

                    <div class="col-xxl-12 mb-3 col-md-12">
                        <div>
                            <label for="ValAdqui" class="form-label">     Valor de adquisición            </label>
                            <input type="text" class="form-control" id="ValAdqui" name="inmuebles[0][ValAdqui]" value="">
                        </div>
                    </div>

                    <div class="col-xxl-12 mb-3 col-md-12">
                        <div>
                            <label for="FechaAdqui" class="form-label">      Fecha de adquisición              </label>

                            <input type="text" class="form-control flatpickr-input active" id="FechaAdqui" data-provider="flatpickr" data-date-format="d M, Y" name="inmuebles[0][FechaAdqui]" value="" readonly="readonly">
                        </div>
                    </div>

                    <div class="col-xxl-12 mb-3 col-md-12">
                        <div>
                            <label for="NotarioIn" class="form-label">     Notario               </label>
                            <input type="text" class="form-control" id="NotarioIn" name="inmuebles[0][Notario]" value="">
                        </div>
                    </div>


                    <div class="col-xxl-12 mb-3 col-md-12">
                        <div>
                            <label for="AsientoInscripcio" class="form-label">   Asiento de Inscripción           </label>
                            <input type="text" class="form-control" id="AsientoInscripcio" name="inmuebles[0][AsientoInscripcio]" value="">
                        </div>
                    </div>


                    <div class="col-xxl-12 mb-3 col-md-12">
                        <div>
                            <label for="Cri" class="form-label">    CRI             </label>
                            <input type="text" class="form-control" id="Cri" name="inmuebles[0][CRI]" value="">
                        </div>
                    </div>

    </div>
</div>

<!-- Botón para añadir nuevo tab/inmueble -->






    </div><!--end col-->

                    </div>
                    <div class="tab-pane" id="pill-justified-messages-1" role="tabpanel">

                        <h4 class="mb-3">  OBSERVACIONES Y DOCUMENTOS A SUBSANAR </h3>
                        <h4 class="card-title mb-4 flex-grow-1"> Ingresar los datos verificados para la correcta elaboración del Informe para garantía</h4>

                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="respectoInmueble" class="form-label">      Respecto al Inmueble            </label>
                                <input type="text" class="form-control" id="respectoInmueble" name="respectoInmueble" value="">
                            </div>
                        </div>

                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="respectoClienteOpera" class="form-label">     Respecto del cliente o la operación          </label>
                                <input type="text" class="form-control" id="respectoClienteOpera" name="respectoClienteOpera" value="">
                            </div>
                        </div>

                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="respectoMinuComprV" class="form-label">   Respecto a la minuta de compraventa        </label>
                                <input type="text" class="form-control" id="respectoMinuComprV" name="respectoMinuComprV" value="">
                            </div>
                        </div>

                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="respectoMinuComprVFutu" class="form-label">     Respecto de la minuta de compraventa de bien futuro           </label>
                                <input type="text" class="form-control" id="respectoMinuComprVFutu" name="respectoMinuComprVFutu" value="">
                            </div>
                        </div>

                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="respectoFiador" class="form-label">      Respecto de los fiadores            </label>
                                <input type="text" class="form-control" id="respectoFiador" name="respectoFiador" value="">
                            </div>
                        </div>


                        <h4 class="mb-3">  DOCUMENTOS RECIBIDOS </h3>

                            <div class="col-xxl-12 col-lg-12 col-md-12 mb-3">


                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="formCheck30" name="DOCUMENTOSRE[0]" value="CRI" >
                                    <label class="form-check-label" for="formCheck30">
                                        CRI de la partida electrónica Nº «Partida_Inmueble_1» del Registro de Propiedad Inmueble de la
                                        Oficina Registral de.«SUNARP_Inmueble_1»
                                    </label>
                                </div>

                        </div><!--end col-->

                        <div class="col-xxl-12 col-lg-12 col-md-12 mb-3">


                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="formCheck31" name="DOCUMENTOSRE[1]"  value="HR y PU 2024">
                                <label class="form-check-label" for="formCheck31">
                                    HR y PU 2024
                                </label>
                            </div>

                    </div><!--end col-->
                    <div class="col-xxl-12 col-lg-12 col-md-12 mb-3">


                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="formCheck32" name="DOCUMENTOSRE[2]"  value=" Recibo de pago de impuestos municipales correspondientes al año 2024" >
                            <label class="form-check-label" for="formCheck32">
                                Recibo de pago de impuestos municipales correspondientes al año 2024
                            </label>
                        </div>

                </div><!--end col-->

                <div class="col-xxl-12 col-lg-12 col-md-12 mb-3">


                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="formCheck33" name="DOCUMENTOSRE[3]"  value=" Aplicativo de poderes del cliente">
                        <label class="form-check-label" for="formCheck33">
                            Aplicativo de poderes del cliente
                        </label>
                    </div>

            </div><!--end col-->

            <div class="col-xxl-12 col-lg-12 col-md-12 mb-3">


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="formCheck34" name="DOCUMENTOSRE[4]"  value=" Informe de tasación" >
                    <label class="form-check-label" for="formCheck34">
                        Informe de tasación
                    </label>
                </div>

        </div><!--end col-->

                <div class="col-xxl-12 col-lg-12 col-md-12 mb-3">


                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="formCheck35" name="DOCUMENTOSRE[5]"  value="Vigencia de poder de representante del cliente">
                        <label class="form-check-label" for="formCheck35">
                            Vigencia de poder de representante del cliente
                        </label>
                    </div>

            </div><!--end col-->

            <div class="col-xxl-12 col-lg-12 col-md-12 mb-3">


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="formCheck36" name="DOCUMENTOSRE[6]"  value=" DNI del representante del cliente">
                    <label class="form-check-label" for="formCheck36">
                        DNI del representante del cliente
                    </label>
                </div>

                </div><!--end col-->

                <div class="col-xxl-12 col-lg-12 col-md-12 mb-3">


                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="formCheck37"  name="DOCUMENTOSRE[7]"  value=" DNI del/ los propietario(s)">
                        <label class="form-check-label" for="formCheck37">
                            DNI del/ los propietario(s)
                        </label>
                    </div>

                    </div><!--end col-->

                    <div class="col-xxl-12 col-lg-12 col-md-12 mb-3">


                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="formCheck38" name="DOCUMENTOSRE[8]"  value=" Modelo de Minuta de Compraventa de Bien futuro" >
                            <label class="form-check-label" for="formCheck38">
                                Modelo de Minuta de Compraventa de Bien futuro
                            </label>
                        </div>

                        </div><!--end col-->


                        <div class="col-xxl-12 col-lg-12 col-md-12 mb-3">


                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="formCheck39" name="DOCUMENTOSRE[9]"  value="Otros">
                                <label class="form-check-label" for="formCheck39">
                                    Otros
                                </label>
                            </div>

                            </div><!--end col-->

                               <!--
                            <div class="row" style="text-align: center;">

                                <div class="col-xxl-12 col-md-12">


                                    <button type="button" class="btn btn-success waves-effect waves-light">GRABAR EVALUACIÓN</button>
                                </div>



                            </div>-->


                    </div>

                    <div class="row" style="text-align: center;">
                        <div class="col-xxl-12 col-md-12">
                    <button type="submit" class="btn btn-success mt-3">GRABAR EXPEDIENTE</button>
                        </div>
                    </div>
                </form>



                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!--end col-->


    <!--end col-->
</div>

<br>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>/*
document.getElementById('multiStepForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita el comportamiento predeterminado del formulario

    const formData = new FormData(this);
    const jsonData = {};
    formData.forEach((value, key) => {
        jsonData[key] = value;
    });

    // Enviar los datos usando Axios
    axios.post(this.action, jsonData, {
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => {
        // Maneja la respuesta aquí
        console.log('Success:', response.data);

        // Mostrar notificación de éxito con SweetAlert2
        Swal.fire({
            icon: 'success',
            title: 'Expediente guardado correctamente',
            text: 'Los datos del expediente se han guardado con éxito.',
            confirmButtonText: 'Aceptar'
        });

        // Aquí puedes redirigir o actualizar la tabla de expedientes si es necesario
    })
    .catch(error => {
        console.error('Error:', error.response ? error.response.data : error.message);

        // Mostrar notificación de error con SweetAlert2
        Swal.fire({
            icon: 'error',
            title: 'Error al guardar el expediente',
            text: error.response ? error.response.data.message : error.message,
            confirmButtonText: 'Aceptar'
        });

        // Si hay errores de validación, mantener los datos en el formulario
        if (error.response && error.response.status === 422) {
            const errors = error.response.data.errors;

            // Rellenar los campos del formulario con los datos ingresados
            for (const [key, value] of Object.entries(jsonData)) {
                document.querySelector(`[name="${key}"]`).value = value;
            }
        }
    });
});
*/
</script>

<!-- Mostrar mensaje de éxito si existe -->
<?php if(session('success')): ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            title: 'Éxito',
            text: "<?php echo e(session('success')); ?>",
            icon: 'success'
        });
    });
</script>
<?php endif; ?>



    <script>


document.addEventListener('DOMContentLoaded', function() {
        <?php if(session('success')): ?>
            Swal.fire({
                icon: 'success',
                title: '¡Éxito!',
                text: '<?php echo e(session('success')); ?>',
                confirmButtonText: 'OK'
            });
        <?php endif; ?>

         // Mostrar mensaje de error si existe
         <?php if(session('error')): ?>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: "<?php echo e(session('error')); ?>", // Mensaje de error
                confirmButtonText: 'OK'
            });
        <?php endif; ?>
    });

/*********AUMENTAR INMUEBLES*****/

    let inmuebleCount = 0;

document.getElementById('addInmueble').addEventListener('click', function() {
    // Incrementar el contador de inmuebles
    inmuebleCount++;

    // Crear el nuevo tab
    const newTab = document.createElement('li');
    newTab.className = 'nav-item';
    newTab.innerHTML = `
        <button class="nav-link" id="inmueble-tab-${inmuebleCount}" data-bs-toggle="tab" data-bs-target="#inmueble-${inmuebleCount}" type="button" role="tab" aria-controls="inmueble-${inmuebleCount}" aria-selected="false">Inmueble ${inmuebleCount + 1}</button>
    `;
    document.querySelector('#myTab').appendChild(newTab);

    // Crear el contenido del nuevo tab (clonando el anterior)
    const newTabContent = document.querySelector('.inmueble-section').cloneNode(true);
    newTabContent.classList.remove('show', 'active'); // Remover clases de tab activo
    newTabContent.id = `inmueble-${inmuebleCount}`; // Cambiar el ID del tab

    // Actualizar los campos de nombre para usar el nuevo índice
    newTabContent.querySelectorAll('input, select').forEach(function(input) {
        // Cambiar el índice en el name
        input.name = input.name.replace(/\d+/, inmuebleCount);
        input.value = '';  // Limpiar el valor del campo
    });

    // Añadir el nuevo contenido del tab
    document.getElementById('inmueblesContainer').appendChild(newTabContent);

    // Activar el nuevo tab automáticamente
    new bootstrap.Tab(newTab.querySelector('button')).show();
});








// Datos selecciona todo
document.getElementById("selecioTodo").addEventListener("click", function() {
        const checkboxes = document.querySelectorAll(".form-check-input");
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = true; // Marca todos los checkboxes
        });
    });

document.addEventListener('DOMContentLoaded', function() {





 // Obtén el rol del usuario desde un atributo meta o JavaScript en línea
    var userRole = <?php echo json_encode(auth()->user()->getRoleNames(), 15, 512) ?>;

    // Verifica el rol y ajusta el estado de los campos del formulario
    if (userRole.includes('Area Legal')) {
        // Hacer que todos los campos sean de solo lectura
        document.querySelectorAll('#expedienteForm input').forEach(function(input) {
            input.setAttribute('readonly', 'readonly');
        });

        // Deshabilitar el botón de enviar
        document.getElementById('submitButton').setAttribute('disabled', 'disabled');
    }
  });

document.getElementById('submitButton').addEventListener('click', function() {
    // Obtén los datos del formulario
    const formData = new FormData(document.getElementById('expedienteForm'));

    // Convierte FormData a un objeto JSON
    const jsonData = {};
    formData.forEach((value, key) => {
        jsonData[key] = value;
    });

    // Enviar los datos usando axios
    axios.post('/nuevo-expediente', jsonData, {
        headers: {
            'Content-Type': 'application/json',
            // Agrega el token CSRF si es necesario
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => {
        // Maneja la respuesta aquí
        console.log('Success:', response.data);

        // Mostrar notificación de éxito con SweetAlert2
        Swal.fire({
            icon: 'success',
            title: 'Expediente guardado correctamente',
            text: 'Los datos del expediente se han guardado con éxito.',
            confirmButtonText: 'Aceptar'
        });

        // Aquí puedes actualizar la tabla de expedientes si es necesario
    })
    .catch(error => {
        console.error('Error:', error.response ? error.response.data : error.message);

        // Mostrar notificación de error con SweetAlert2
        Swal.fire({
            icon: 'error',
            title: 'Error al guardar el expediente',
            text: error.response ? error.response.data.message : error.message,
            confirmButtonText: 'Aceptar'
        });
    });
});

const provincias = {
    Amazonas: ["Bagua", "Bongará", "Chachapoyas", "Condorcanqui", "Luya", "Rodríguez de Mendoza", "Utcubamba"],
    Áncash: ["Aija", "Antonio Raymondi", "Asunción", "Bolognesi", "Carhuaz", "Carlos Fermín Fitzcarrald", "Casma", "Corongo", "Huaraz", "Huari", "Huarmey", "Huaylas", "Mariscal Luzuriaga", "Ocros", "Pallasca", "Pomabamba", "Recuay", "Santa", "Sihuas", "Yungay"],
    Apurímac: ["Abancay", "Andahuaylas", "Antabamba", "Aymaraes", "Cotabambas", "Chincheros", "Grau"],
    Arequipa: ["Arequipa", "Camana", "Caraveli", "Castilla", "Caylloma", "Condesuyos", "Islay", "La Union"],
    Ayacucho: ["Cangallo", "Huamanga", "Huanca Sancos", "Huanta", "La Mar", "Lucanas", "Parinacochas", "Páucar del Sara Sara", "Sucre", "Vilcas Huamán"],
    Cajamarca: ["Cajamarca", "Celendín", "Chota", "Contumazá", "Cutervo", "Hualgayoc", "Jaén", "San Ignacio", "San Marcos", "San Miguel", "San Pablo", "Santa Cruz"],
    Callao: ["Callao"],
    Cusco: ["Acomayo", "Anta", "Calca", "Canas", "Canchis", "Chumbivilcas", "Cusco", "Espinar", "La Convención", "Paruro", "Paucartambo", "Quispicanchi", "Urubamba"],
    Huancavelica: ["Acobamba", "Angaraes", "Castrovirreyna", "Churcampa", "Huancavelica", "Huaytará", "Tayacaja"],
    Huánuco: ["Ambo", "Dos de Mayo", "Huacaybamba", "Huánuco", "Huallaga", "Leoncio Prado", "Marañón", "Pachitea", "Panao", "Rupa-Rupa", "Yarowilca"],
    Ica: ["Chincha", "Ica", "Nazca", "Palpa", "Pisco"],
    Junín: ["Angaraes", "Concepción", "Chanchamayo", "Huancayo", "Jauja", "Junín", "La Oroya", "Satipo", "Tarma", "Yauli"],
    LaLibertad: ["Ascope", "Bolívar", "Chepén", "Gran Chimú", "Julcán", "Otuzco", "Pacasmayo", "Pataz", "Trujillo", "Virú"],
    Lambayeque: ["Chiclayo", "Ferreñafe", "Lambayeque"],
    Lima: ["Huaral", "Huarochirí", "Huaura", "Lima", "Cañete", "Barranca", "Cajatambo", "Canta", "Huarochirí", "Huaura", "Lima", "Oyon", "Yauyos"],
    Loreto: ["Alto Amazonas", "Datem del Marañón", "Loreto", "Mariscal Ramón Castilla", "Maynas", "Nanay", "Requena", "Ucayali"],
    MadredeDios: ["Manu", "Madre de Dios", "Tambopata", "Iñapari"],
    Moquegua: ["General Sánchez Cerro", "Ilo", "Moquegua"],
    Pasco: ["Pasco", "Daniel Alcides Carrión", "Oxapampa"],
    Piura: ["Ayabaca", "Huancabamba", "Morropón", "Paita", "Piura", "Sullana", "Talara"],
    Puno: ["Azángaro", "Carabaya", "Chucuito", "El Collao", "Huancané", "Lampa", "Melgar", "Puno", "San Antonio de Putina", "San Román", "Sandia", "Yunguyo"],
    SanMartín: ["Bellavista", "El Dorado", "Huallaga", "Lamas", "Moyobamba", "Picota", "Rioja", "San Martín", "Tambopata", "Tarapoto"],
    Tacna: ["Tacna", "Candarave", "Jorge Basadre", "Tarata"],
    Tumbes: ["Tumbes", "Zarumilla"],
    Ucayali: ["Atalaya", "Coronel Portillo", "Padre Abad", "Purús"]
};

const distritos = {
    Amazonas: {
        Bagua: ["Bagua", "Cajaruro", "Coca", "La Peca", "El Parco", "La Peca"],
        Bongará: ["Jumbilla", "Chisquilla", "Espinoza", "Cuispes", "Cajaruro", "Jumbilla"],
        Chachapoyas: ["Chachapoyas", "Asuncion", "Balsas", "Cheto", "Cuispes", "Granada", "Huancas", "Leimebamba", "Magdalena", "Maria", "Mendoza", "Montevideo", "San Francisco de Yeso", "San Isidro", "San Juan de Lopecancha", "San Luis de Shuaro", "San Miguel", "San Nicolas", "San Pablo", "San Pedro", "San Rafael", "San Victor", "Uchiza", "Yurimaguas"],
        Condorcanqui: ["Naranjos", "El Parco", "El Cenepa", "El Chaco", "Jaén", "Zumba"],
        Luya: ["Luya", "Camporredondo", "Cocabamba", "Colcamar", "Conila", "Jumbilla", "Lámud", "Lonya Grande", "Pisuquia", "San Francisco del Milagro", "San Isidro", "San Juan de Lopecancha", "San Luis", "San Pablo", "San Pedro", "Santa Cruz", "Santa María", "Santa Rosa"],
        RodríguezdeMendoza: ["Mendoza", "Ocalli", "San Andrés", "San Carlos", "San Fernando", "San Juan", "San Luis", "San Martín", "San Pedro", "San Pablo", "Santa María", "Santa Rosa", "Yurimaguas"],
        Utcubamba: ["Bagua", "El Parco", "La Peca", "Chachapoyas", "Cajaruro", "Santa María", "Santa Rosa", "San Luis", "San Pedro"]
    },
    Áncash: {
        Aija: ["Aija", "Antonio Raymondi", "Asunción", "Bolognesi", "Carhuaz", "Carlos Fermín Fitzcarrald", "Casma", "Corongo", "Huaraz", "Huari", "Huarmey", "Huaylas", "Mariscal Luzuriaga", "Ocros", "Pallasca", "Pomabamba", "Recuay", "Santa", "Sihuas", "Yungay"],
        AntonioRaymondi: ["Antonio Raymondi", "Carhuaz", "Caraz", "Corongo"],
        Asunción: ["Asunción", "Bolognesi", "Carhuaz", "Carlos Fermín Fitzcarrald", "Casma"],
        Bolognesi: ["Bolognesi", "Antonio Raymondi", "Carhuaz", "Caraz", "Corongo"],
        Carhuaz: ["Carhuaz", "Casma", "Corongo", "Huaraz"],
        CarlosFermínFitzcarrald: ["Carlos Fermín Fitzcarrald", "Casma", "Corongo"],
        Casma: ["Casma", "Corongo", "Huari", "Huarmey"],
        Corongo: ["Corongo", "Huaraz", "Mariscal Luzuriaga"],
        Huaraz: ["Huaraz", "Huari", "Huarmey", "Huaylas"],
        Huari: ["Huari", "Huarmey", "Huaylas"],
        Huarmey: ["Huarmey", "Mariscal Luzuriaga", "Ocros"],
        Huaylas: ["Huaylas", "Mariscal Luzuriaga", "Ocros"],
        MariscalLuzuriaga: ["Mariscal Luzuriaga", "Ocros", "Pallasca"],
        Ocros: ["Ocros", "Pallasca"],
        Pallasca: ["Pallasca", "Pomabamba"],
        Pomabamba: ["Pomabamba", "Recuay"],
        Recuay: ["Recuay", "Santa"],
        Santa: ["Santa", "Sihuas", "Yungay"],
        Sihuas: ["Sihuas", "Yungay"],
        Yungay: ["Yungay"]
    },
    Apurímac: {
        Abancay: ["Abancay", "Andahuaylas", "Antabamba", "Aymaraes", "Cotabambas", "Chincheros", "Grau"],
        Andahuaylas: ["Andahuaylas", "Antabamba", "Aymaraes", "Cotabambas"],
        Antabamba: ["Antabamba", "Aymaraes", "Cotabambas"],
        Aymaraes: ["Aymaraes", "Cotabambas", "Chincheros"],
        Cotabambas: ["Cotabambas", "Chincheros"],
        Chincheros: ["Chincheros", "Grau"],
        Grau: ["Grau"]
    },
    Arequipa: {
        Arequipa: ["Arequipa", "Camana", "Caraveli", "Castilla", "Caylloma", "Condesuyos", "Islay", "La Union"],
        Camana: ["Camana", "Caraveli", "Castilla"],
        Caraveli: ["Caraveli", "Castilla", "Caylloma"],
        Castilla: ["Castilla", "Caylloma"],
        Caylloma: ["Caylloma", "Condesuyos"],
        Condesuyos: ["Condesuyos", "Islay"],
        Islay: ["Islay", "La Union"],
        LaUnion: ["La Union"]
    },
    Ayacucho: {
        Cangallo: ["Cangallo", "Huamanga", "Huanca Sancos"],
        Huamanga: ["Huamanga", "Huanta", "La Mar"],
        HuancaSancos: ["Huanca Sancos", "Lucanas", "Parinacochas"],
        Huanta: ["Huanta", "Páucar del Sara Sara", "Sucre"],
        LaMar: ["La Mar", "Vilcas Huamán"]
    },
    Cajamarca: {
        Cajamarca: ["Cajamarca", "Celendín", "Chota"],
        Celendín: ["Celendín", "Chota", "Contumazá"],
        Chota: ["Chota", "Contumazá"],
        Contumazá: ["Contumazá", "Cutervo"],
        Cutervo: ["Cutervo", "Hualgayoc"],
        Hualgayoc: ["Hualgayoc", "Jaén"],
        Jaén: ["Jaén", "San Ignacio"],
        SanIgnacio: ["San Ignacio", "San Marcos"],
        SanMarcos: ["San Marcos", "San Miguel"],
        SanMiguel: ["San Miguel", "San Pablo"],
        SanPablo: ["San Pablo", "Santa Cruz"],
        SantaCruz: ["Santa Cruz"]
    },
    Callao: {
        Callao: ["Callao"]
    },
    Cusco: {
        Acomayo: ["Acomayo", "Anta"],
        Anta: ["Anta", "Calca"],
        Calca: ["Calca", "Canas"],
        Canas: ["Canas", "Canchis"],
        Canchis: ["Canchis", "Chumbivilcas"],
        Chumbivilcas: ["Chumbivilcas", "Cusco"],
        Cusco: ["Cusco", "Espinar"],
        Espinar: ["Espinar", "La Convención"],
        LaConvención: ["La Convención", "Paruro"],
        Paruro: ["Paruro", "Paucartambo"],
        Paucartambo: ["Paucartambo", "Quispicanchi"],
        Quispicanchi: ["Quispicanchi", "Urubamba"],
        Urubamba: ["Urubamba"]
    },
    Huancavelica: {
        Acobamba: ["Acobamba", "Angaraes"],
        Angaraes: ["Angaraes", "Castrovirreyna"],
        Castrovirreyna: ["Castrovirreyna", "Churcampa"],
        Churcampa: ["Churcampa", "Huancavelica"],
        Huancavelica: ["Huancavelica", "Huaytará"],
        Huaytará: ["Huaytará", "Tayacaja"],
        Tayacaja: ["Tayacaja"]
    },
    Huánuco: {
        Ambo: ["Ambo", "Dos de Mayo"],
        DosdeMayo: ["Dos de Mayo", "Huacaybamba"],
        Huacaybamba: ["Huacaybamba", "Huánuco"],
        Huánuco: ["Huánuco", "Huallaga"],
        Huallaga: ["Huallaga", "Leoncio Prado"],
        LeoncioPrado: ["Leoncio Prado", "Marañón"],
        Marañón: ["Marañón", "Pachitea"],
        Pachitea: ["Pachitea", "Panao"],
        Panao: ["Panao", "Rupa-Rupa"],
        RupaRupa: ["Rupa-Rupa", "Yarowilca"],
        Yarowilca: ["Yarowilca"]
    },
    Ica: {
        Chincha: ["Chincha", "Ica"],
        Ica: ["Ica", "Nazca"],
        Nazca: ["Nazca", "Palpa"],
        Palpa: ["Palpa", "Pisco"],
        Pisco: ["Pisco"]
    },
    Junín: {
        Angaraes: ["Angaraes", "Concepción"],
        Concepción: ["Concepción", "Chanchamayo"],
        Chanchamayo: ["Chanchamayo", "Huancayo"],
        Huancayo: ["Huancayo", "Jauja"],
        Jauja: ["Jauja", "Junín"],
        Junín: ["Junín", "La Oroya"],
        LaOroya: ["La Oroya", "Satipo"],
        Satipo: ["Satipo", "Tarma"],
        Tarma: ["Tarma", "Yauli"],
        Yauli: ["Yauli"]
    },
    LaLibertad: {
        Ascope: ["Ascope", "Bolívar"],
        Bolívar: ["Bolívar", "Chepén"],
        Chepén: ["Chepén", "Gran Chimú"],
        GranChimú: ["Gran Chimú", "Julcán"],
        Julcán: ["Julcán", "Otuzco"],
        Otuzco: ["Otuzco", "Pacasmayo"],
        Pacasmayo: ["Pacasmayo", "Pataz"],
        Pataz: ["Pataz", "Trujillo"],
        Trujillo: ["Trujillo", "Virú"],
        Virú: ["Virú"]
    },
    Lambayeque: {
        Chiclayo: ["Chiclayo", "Ferreñafe"],
        Ferreñafe: ["Ferreñafe", "Lambayeque"],
        Lambayeque: ["Lambayeque"]
    },
    Lima: {
        Huaral: ["Huaral", "Huarochirí"],
        Huarochirí: ["Huarochirí", "Huaura"],
        Huaura: ["Huaura", "Lima"],
        Lima: ["Lima", "Cañete"],
        Cañete: ["Cañete", "Barranca"],
        Barranca: ["Barranca", "Cajatambo"],
        Cajatambo: ["Cajatambo", "Canta"],
        Canta: ["Canta", "Huarochirí"],
        Oyon: ["Oyon", "Yauyos"],
        Yauyos: ["Yauyos"]
    },
    Loreto: {
        AltoAmazonas: ["Alto Amazonas", "Datem del Marañón"],
        DatemdelMarañón: ["Datem del Marañón", "Loreto"],
        Loreto: ["Loreto", "Mariscal Ramón Castilla"],
        MariscalRamónCastilla: ["Mariscal Ramón Castilla", "Maynas"],
        Maynas: ["Maynas", "Nanay"],
        Nanay: ["Nanay", "Requena"],
        Requena: ["Requena", "Ucayali"],
        Ucayali: ["Ucayali"]
    },
    MadredeDios: {
        Manu: ["Manu", "Madre de Dios"],
        MadredeDios: ["Madre de Dios", "Tambopata"],
        Tambopata: ["Tambopata", "Iñapari"],
        Iñapari: ["Iñapari"]
    },
    Moquegua: {
        GeneralSánchezCerro: ["General Sánchez Cerro"],
        Ilo: ["Ilo"],
        Moquegua: ["Moquegua"]
    },
    Pasco: {
        Pasco: ["Pasco", "Daniel Alcides Carrión"],
        DanielAlcidesCarrión: ["Daniel Alcides Carrión", "Oxapampa"],
        Oxapampa: ["Oxapampa"]
    },
    Piura: {
        Ayabaca: ["Ayabaca", "Huancabamba"],
        Huancabamba: ["Huancabamba", "Morropón"],
        Morropón: ["Morropón", "Paita"],
        Paita: ["Paita", "Piura"],
        Piura: ["Piura", "Sullana"],
        Sullana: ["Sullana", "Talara"],
        Talara: ["Talara"]
    },
    Puno: {
        Azángaro: ["Azángaro", "Carabaya"],
        Carabaya: ["Carabaya", "Chucuito"],
        Chucuito: ["Chucuito", "El Collao"],
        ElCollao: ["El Collao", "Huancané"],
        Huancané: ["Huancané", "Lampa"],
        Lampa: ["Lampa", "Melgar"],
        Melgar: ["Melgar", "Puno"],
        Puno: ["Puno", "San Antonio de Putina"],
        SanAntoniodePutina: ["San Antonio de Putina", "San Román"],
        SanRomán: ["San Román", "Sandia"],
        Sandia: ["Sandia", "Yunguyo"],
        Yunguyo: ["Yunguyo"]
    },
    SanMartín: {
        Bellavista: ["Bellavista", "El Dorado"],
        ElDorado: ["El Dorado", "Huallaga"],
        Huallaga: ["Huallaga", "Lamas"],
        Lamas: ["Lamas", "Moyobamba"],
        Moyobamba: ["Moyobamba", "Picota"],
        Picota: ["Picota", "Rioja"],
        Rioja: ["Rioja", "San Martín"],
        SanMartín: ["San Martín", "Tambopata"],
        Tambopata: ["Tambopata", "Tarapoto"],
        Tarapoto: ["Tarapoto"]
    },
    Tacna: {
        Tacna: ["Tacna", "Candarave"],
        Candarave: ["Candarave", "Jorge Basadre"],
        JorgeBasadre: ["Jorge Basadre", "Tarata"],
        Tarata: ["Tarata"]
    },
    Tumbes: {
        Tumbes: ["Tumbes"],
        Zarumilla: ["Zarumilla"]
    },
    Ucayali: {
        Atalaya: ["Atalaya"],
        CoronelPortillo: ["Coronel Portillo"],
        PadreAbad: ["Padre Abad"],
        Purús: ["Purús"]
    }
};


    function cambiarProvincias() {
        const departamentoSelect = document.getElementById('departamentoPromotor');
        const provinciaSelect = document.getElementById('provinciaPromotor');
        const departamentoSeleccionado = departamentoSelect.value;

        console.log(departamentoSeleccionado)

        // Limpiar las provincias anteriores
        provinciaSelect.innerHTML = '<option selected>Ingresar dato</option>';

        if (provincias[departamentoSeleccionado]) {
            provincias[departamentoSeleccionado].forEach(function(provincia) {
                const option = document.createElement('option');
                option.value = provincia;
                option.textContent = provincia;
                provinciaSelect.appendChild(option);
            });
        }

           // Limpiar distritos
           cambiarDistritos();
    }

    function cambiarDistritos() {
        const provinciaSelect = document.getElementById('provinciaPromotor');
        const distritoSelect = document.getElementById('distritoPromotor');
        const provinciaSeleccionada = provinciaSelect.value;

        // Limpiar los distritos anteriores
        distritoSelect.innerHTML = '<option selected>Ingresar dato</option>';

        const departamentoSelect = document.getElementById('departamentoPromotor');
        const departamentoSeleccionado = departamentoSelect.value;

        if (distritos[departamentoSeleccionado] && distritos[departamentoSeleccionado][provinciaSeleccionada]) {
            distritos[departamentoSeleccionado][provinciaSeleccionada].forEach(function(distrito) {
                const option = document.createElement('option');
                option.value = distrito;
                option.textContent = distrito;
                distritoSelect.appendChild(option);
            });
        }
    }




    </script>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- your page script here -->


<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('build/libs/prismjs/prism.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Borys\Documents\MosquedaCordova\corporate\resources\views/nuevo-expediente.blade.php ENDPATH**/ ?>