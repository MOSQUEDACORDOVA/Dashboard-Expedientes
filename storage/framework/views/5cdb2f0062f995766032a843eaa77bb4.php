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

<!--HHOLA-->

<div class="row">
    <div class="col-xxl-12">
        <div class="row">
        <h3 class="col-md-4 mb-3">Editar Expediente <?php echo e($expediente->razon_social); ?></h3>
        <h3 class="col-md-4 offset-md-4">Trazer ID: <?php echo e($expediente->traze_id); ?></h3>
        </div>
       
        <div class="card">
            <div class="card-body">
                <!-- Nav tabs -->
                
      <form id="multiStepForm" action="<?php echo e(route('expedientes.update', $expediente->id)); ?>" method="POST">
      
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
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
                        
                        <form id="expedienteForm">
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="razonSocial" class="form-label">Razón Social</label>
                                    <input type="text" class="form-control" id="razonSocial" name="razon_social" value="<?php echo e($expediente->razon_social); ?>">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="ruc" class="form-label">RUC</label>
                                    <input type="text" class="form-control" id="ruc" name="ruc" value="<?php echo e($expediente->ruc); ?>">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="nombreProyecto" class="form-label">Nombre de Proyecto</label>
                                    <input type="text" class="form-control" id="nombreProyecto" name="nombre_proyecto" value="<?php echo e($expediente->nombre_proyecto); ?>">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="proveedorLegal" class="form-label">Proveedor Legal</label>
                                    <input type="text" class="form-control" id="proveedorLegal" name="proveedor_legal" value="<?php echo e($expediente->proveedor_legal); ?>">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="trazeId" class="form-label">Trazer ID</label>
                                    <input type="text" class="form-control" id="trazeId" name="traze_id" value="<?php echo e($expediente->traze_id); ?>">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="finalidad" class="form-label">Finalidad</label>
                                    <input type="text" class="form-control" id="finalidad" name="finalidad" value="<?php echo e($expediente->finalidad); ?>">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="funcionario" class="form-label">Funcionario</label>
                                    <input type="text" class="form-control" id="funcionario" name="funcionario" value="<?php echo e($expediente->funcionario); ?>">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="correoFuncionario" class="form-label">Correo de Funcionario</label>
                                    <input type="email" class="form-control" id="correoFuncionario" name="correo_funcionario" value="<?php echo e($expediente->correo_funcionario); ?>">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="asistente" class="form-label">Asistente</label>
                                    <input type="text" class="form-control" id="asistente" name="asistente" value="<?php echo e($expediente->asistente); ?>">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12 mb-3">
                                <div>
                                    <label for="correoAsistente" class="form-label">Correo de asistente</label>
                                    <input type="email" class="form-control" id="correoAsistente" name="correo_asistente" value="<?php echo e($expediente->correo_asistente); ?>">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12 mb-3">
                                <div>
                                    <label for="actividadActual" class="form-label">Actividad actual</label>
                                    <input type="text" class="form-control" id="actividadActual" name="actividad_actual" value="<?php echo e($expediente->actividad_actual); ?>">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12 mb-3">
                                <div>
                                    <label for="trazeVinculado" class="form-label">Trazer vinculado</label>
                                    <input type="text" class="form-control" id="trazeVinculado" name="traze_vinculado" value="<?php echo e($expediente->traze_vinculado); ?>">
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
                                    <input type="text" class="form-control" id="partidaPromotor" name="partidaPromotor" value="<?php echo e($expediente->Cliente->partida_promotor); ?>">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="sunarp" class="form-label">Oficina SUNARP promotor
                                    </label>
                                    <input type="text" class="form-control" id="sunarp" name="sunarp" value="<?php echo e($expediente->Cliente->sunarp); ?>">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="repLegal" class="form-label">Representante Legal 1</label>
                                    <input type="text" class="form-control" id="repLegal" name="repLegal" value="<?php echo e($expediente->Cliente->rep_legal); ?>">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="aspoderlegal" class="form-label">Asiento de poder  - Representante Legal 1</label>
                                    <input type="text" class="form-control" id="aspoderlegal" name="aspoderlegal" value="<?php echo e($expediente->Cliente->aspoder_legal); ?>">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="correoElectronico1" class="form-label">Correo electrónico 1
                                    </label>
                                    <input type="text" class="form-control" id="correoElectronico1" name="correoElectronico1"  value="<?php echo e($expediente->cliente->correo_electronico); ?>">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="dpromotor" class="form-label">Dirección promotor</label>
                                    <input type="text" class="form-control" id="dpromotor" name="dpromotor" value="<?php echo e($expediente->cliente->direccion); ?>">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <label for="departamentoPromotor" class="form-label">Departamento promotor</label>
                                <select class="form-select rounded-pill mb-3" id="departamentoPromotor" name="departamentoPromotor" value="<?php echo e($expediente->cliente->departamento); ?>" aria-label="Default select example" onchange="cambiarProvincias()">
                                    <option value="">Ingresar dato</option>
                                        <option value="Amazonas" <?php echo e($expediente->cliente->departamento == 'Amazonas' ? 'selected' : ''); ?>>Amazonas</option>
                                        <option value="Áncash" <?php echo e($expediente->cliente->departamento == 'Áncash' ? 'selected' : ''); ?>>Áncash</option>
                                        <option value="Apurímac" <?php echo e($expediente->cliente->provincia == 'Apurímac' ? 'selected' : ''); ?>>Apurímac</option>
                                        <option value="Arequipa" <?php echo e($expediente->cliente->departamento == 'Arequipa' ? 'selected' : ''); ?>>Arequipa</option>
                                        <option value="Ayacucho" <?php echo e($expediente->cliente->departamento == 'Ayacucho' ? 'selected' : ''); ?>>Ayacucho</option>
                                        <option value="Cajamarca" <?php echo e($expediente->cliente->departamento == 'Cajamarca' ? 'selected' : ''); ?>>Cajamarca</option>
                                        <option value="Callao" <?php echo e($expediente->cliente->departamento == 'Callao' ? 'selected' : ''); ?>>Callao</option>
                                        <option value="Cusco" <?php echo e($expediente->cliente->departamento == 'Cusco' ? 'selected' : ''); ?>>Cusco</option>
                                        <option value="Huancavelica" <?php echo e($expediente->cliente->departamento == 'Huancavelica' ? 'selected' : ''); ?>>Huancavelica</option>
                                        <option value="Huánuco" <?php echo e($expediente->cliente->departamento == 'Huánuco' ? 'selected' : ''); ?>>Huánuco</option>
                                        <option value="Ica" <?php echo e($expediente->cliente->departamento == 'Ica' ? 'selected' : ''); ?>>Ica</option>
                                        <option value="Junín" <?php echo e($expediente->cliente->departamento == 'Junín' ? 'selected' : ''); ?>>Junín</option>
                                        <option value="La Libertad" <?php echo e($expediente->cliente->departamento == 'La Libertad' ? 'selected' : ''); ?>>La Libertad</option>
                                        <option value="Lambayeque" <?php echo e($expediente->cliente->departamento == 'Lambayeque' ? 'selected' : ''); ?>>Lambayeque</option>
                                        <option value="Lima" <?php echo e($expediente->cliente->departamento == 'Lima' ? 'selected' : ''); ?>>Lima</option>
                                        <option value="Loreto" <?php echo e($expediente->cliente->departamento == 'Loreto' ? 'selected' : ''); ?>>Loreto</option>
                                        <option value="Madre de Dios" <?php echo e($expediente->cliente->departamento == 'Madre de Dios' ? 'selected' : ''); ?>>Madre de Dios</option>
                                        <option value="Moquegua" <?php echo e($expediente->cliente->departamento == 'Moquegua' ? 'selected' : ''); ?>>Moquegua</option>
                                        <option value="Pasco" <?php echo e($expediente->cliente->departamento == 'Pasco' ? 'selected' : ''); ?>>Pasco</option>
                                        <option value="Piura" <?php echo e($expediente->cliente->departamento == 'Piura' ? 'selected' : ''); ?>>Piura</option>
                                        <option value="Puno" <?php echo e($expediente->cliente->departamento == 'Puno' ? 'selected' : ''); ?>>Puno</option>
                                        <option value="San Martín" <?php echo e($expediente->cliente->departamento == 'San Martín' ? 'selected' : ''); ?>>San Martín</option>
                                        <option value="Tacna" <?php echo e($expediente->cliente->departamento == 'Tacna' ? 'selected' : ''); ?>>Tacna</option>
                                        <option value="Tumbes" <?php echo e($expediente->cliente->provincia == 'Tumbes' ? 'selected' : ''); ?>>Tumbes</option>
                                        <option value="Ucayali" <?php echo e($expediente->cliente->departamento == 'Ucayali' ? 'selected' : ''); ?>>Ucayali</option>
                                    </select>
                              
                            </div>
    
                            <div class="col-lg-12">
                                <label for="provinciaPromotor" class="form-label">Provincia promotor</label>
                                <select class="form-select rounded-pill mb-3" id="provinciaPromotor" name="provinciaPromotor" value="<?php echo e($expediente->cliente->provincia); ?>"  aria-label="Default select example" onchange="cambiarDistritos()">
                                    <option selected>Ingresar dato</option>
                                </select>
                            </div>
                                
                            <div class="col-lg-12">
                                <label for="basiInput" class="form-label">Distrito promotor                            </label>
                                <select class="form-select rounded-pill mb-3" id="distritoPromotor" name="distritoPromotor" value="<?php echo e($expediente->traze_vinculado); ?>"  aria-label="Default select example">
                                  
                                    <option value="" <?php echo e($expediente->cliente->provincia == 'provincia' ? 'selected' : ''); ?>>Provincia1</option>
                          
                                </select>
                            </div>

                            
                            <?php
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

                         ?>
                        
                                <div class="row">
                                    <h3 class="col-md-8 mb-3">FORMATO B - ANÁLISIS DE PODERES</h3>
                                    <p class="col-md-4 "><a id="selecioTodo" style="font-size: 18px;
                                 color: black; cursor:pointer;
                                                            text-decoration: underline;">Seleccionar todo</a></p>
                                    </div>
                                   
                                    <div class="col-xxl-12 col-lg-4 col-md-12 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck1" name="poderes[1]" value="Contratos de créditos en general"
                                            <?php echo e(in_array('Contratos de créditos en general', $poderesSeleccionados) ? 'checked' : ''); ?>>
                                            <label class="form-check-label" for="formCheck1">
                                                Contratos de créditos en general
                                            </label>
                                        </div>
                                    </div>  

                                    <div class="col-xxl-12 col-lg-4 col-md-12 mb-3">
                                        <div class="form-check">
                                           <input class="form-check-input" type="checkbox" id="formCheck2" name="poderes[2]"  value="Solicitar, contratar y otorgar fianzas"
                                            <?php echo e(in_array('Solicitar, contratar y otorgar fianzas', $poderesSeleccionados) ? 'checked' : ''); ?>>
                                            <label class="form-check-label" for="formCheck2">
                                                Solicitar, contratar y otorgar fianzas
                                            </label>
                                        </div>
                                    </div>  

                                    <div class="col-xxl-12 col-lg-4 col-md-12 mb-3">
                                        <div class="form-check">
                                             <input class="form-check-input" type="checkbox" id="formCheck3" name="poderes[3]" value="Compra y venta de bienes muebles e inmuebles y valores mobiliarios"
                                            <?php echo e(in_array('Compra y venta de bienes muebles e inmuebles y valores mobiliarios', $poderesSeleccionados) ? 'checked' : ''); ?>>
                                            <label class="form-check-label" for="formCheck3">
                                                Compra y venta de bienes muebles e inmuebles y valores mobiliarios
                                            </label>
                                        </div>
                                    </div>  

                                    <div class="col-xxl-12 col-lg-4 col-md-12 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck4" name="poderes[4]" value="Hipotecar"
                                            <?php echo e(in_array('Hipotecar', $poderesSeleccionados) ? 'checked' : ''); ?>>
                                            <label class="form-check-label" for="formCheck4">
                                                Hipotecar
                                            </label>
                                        </div>
                                    </div>  
                                    
                                    <div class="col-xxl-12 col-lg-4 col-md-12 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck5" name="poderes[5]" value="Prendar y otorgar garantías inmobiliarias"
                                            <?php echo e(in_array('Prendar y otorgar garantías inmobiliarias', $poderesSeleccionados) ? 'checked' : ''); ?>>
                                            <label class="form-check-label" for="formCheck5">
                                                Prendar y otorgar garantías inmobiliarias
                                            </label>
                                        </div>
                                    </div>  
                                                     

                                      
                                    <div class="col-xxl-12 col-lg-4 col-md-12 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="poderes[6]" value="Afectar títulos valores en garantía"
                                            <?php echo e(in_array('Afectar títulos valores en garantía', $poderesSeleccionados) ? 'checked' : ''); ?>>
                                            <label class="form-check-label" for="formCheck6">
                                                Afectar títulos valores en garantía
                                            </label>
                                        </div>
                                    </div>  

                                      
                                    <div class="col-xxl-12 col-lg-4 col-md-12 mb-3">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="formCheck7" name="poderes[7]" value=" Endose pólizas de seguros"
                                            <?php echo e(in_array('Endose pólizas de seguros', $poderesSeleccionados) ? 'checked' : ''); ?>>
                                            <label class="form-check-label" for="formCheck7">
                                                Endose pólizas de seguros
                                            </label>
                                        </div>
                                    </div>  

                                        
                                    <div class="col-xxl-12 col-lg-4 col-md-12 mb-3">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="formCheck8" name="poderes[8]" value="Consorcios"
                                            <?php echo e(in_array('Consorcios', $poderesSeleccionados) ? 'checked' : ''); ?>>
                                            <label class="form-check-label" for="formCheck8">
                                                Consorcios
                                            </label>
                                        </div>
                                    </div>  
                                            

                                        
                                    <div class="col-xxl-12 col-lg-4 col-md-12 mb-3">
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="formCheck9" name="poderes[9]" value=" Suscribir, constituir fideicomiso en garantía y transferir en dominio fiduciario bienes y/o flujos"
                                            <?php echo e(in_array('Suscribir, constituir fideicomiso en garantía y transferir en dominio fiduciario bienes y/o flujos', $poderesSeleccionados) ? 'checked' : ''); ?>>
                                            <label class="form-check-label" for="formCheck9">
                                                Suscribir, constituir fideicomiso en garantía y transferir en dominio fiduciario bienes y/o flujos
                                            </label>
                                        </div>
                                    </div>  
                                            

                                        
                                    <div class="col-xxl-12 col-lg-4 col-md-12 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck10" name="poderes[10]" value="Otorgar poder Irrevocable" 
                                            <?php echo e(in_array('Otorgar poder Irrevocable', $poderesSeleccionados) ? 'checked' : ''); ?>>
                                            <label class="form-check-label" for="formCheck10">
                                                Otorgar poder Irrevocable
                                            </label>
                                        </div>
                                    </div>  


                                    <div class="col-xxl-12 col-lg-4 col-md-12 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck11" name="poderes[11]" value="Cesión de posición contractual"
                                            <?php echo e(in_array('Cesión de posición contractual', $poderesSeleccionados) ? 'checked' : ''); ?>>
                                            <label class="form-check-label" for="formCheck11">
                                                Cesión de posición contractual
                                            </label>
                                        </div>
                                    </div> 

                                    <div class="col-xxl-12 col-lg-4 col-md-12 mb-3">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="formCheck12" name="poderes[12]" value="Otros"
                                            <?php echo e(in_array('Otros', $poderesSeleccionados) ? 'checked' : ''); ?>>
                                            <label class="form-check-label" for="formCheck12">
                                                Otros
                                            </label>
                                        </div>
                                    </div> 
                                 
                                           
        
    








    
                    
                            <div class="row" style="text-align: center;">
                                <div class="col-xxl-12 col-md-12">
                                     <!--   <button type="button" class="btn btn-success waves-effect waves-light" id="submitButton">GRABAR CLIENTE</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar</button> -->
                                </div>
                            </div>
                        
                    </div>

                    <div class="tab-pane" id="pill-justified-profile-1" role="tabpanel">

                        
                       <!-- Datos del Expediente -->
    <div class="row mb-3">
        <h4 class="col-md-4 mb-3">Datos de Expediente</h4>
        <button type="button" id="addInmueble" class="btn btn-outline-primary btn-border col-md-2 offset-md-6">Añadir Inmuebles</button>
    </div>

    <!-- Tabs de Inmuebles -->
    <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
        <?php $__currentLoopData = $expediente->inmuebles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $inmueble): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <!-- Campo oculto para el ID del inmueble -->
           
        <li class="nav-item" role="presentation">
            <button class="nav-link <?php echo e($index == 0 ? 'active' : ''); ?>" id="inmueble-tab-<?php echo e($index); ?>" data-bs-toggle="tab" data-bs-target="#inmueble-<?php echo e($index); ?>" type="button" role="tab" aria-controls="inmueble-<?php echo e($index); ?>" aria-selected="<?php echo e($index == 0 ? 'true' : 'false'); ?>">Inmueble <?php echo e($index + 1); ?></button>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <!-- Contenedor de Contenido de los Tabs -->
    <div class="tab-content" id="inmueblesContainer">
        <?php $__currentLoopData = $expediente->inmuebles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $inmueble): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        
        <div class="tab-pane fade <?php echo e($index == 0 ? 'show active' : ''); ?> inmueble-section" id="inmueble-<?php echo e($index); ?>" role="tabpanel" aria-labelledby="inmueble-tab-<?php echo e($index); ?>">
            
            <input type="hidden" name="inmuebles[<?php echo e($index); ?>][id]" value="<?php echo e($inmueble->id); ?>">
           
            <div class="col-xxl-12 mb-3 col-md-12">
                <label for="PartidaInmueble<?php echo e($index); ?>" class="form-label">Partida de Inmueble</label>
                <input type="text" class="form-control" id="PartidaInmueble<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][partida]" value="<?php echo e(old('inmuebles.' . $index . '.partida', $inmueble->partida)); ?>">
            </div>
            <div class="col-xxl-12 mb-3 col-md-12">
                <label for="AntecedenteRegistral<?php echo e($index); ?>" class="form-label">Antecedente Registral</label>
                <input type="text" class="form-control" id="AntecedenteRegistral<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][antecedente]" value="<?php echo e(old('inmuebles.' . $index . '.antecedente', $inmueble->antecedente)); ?>">
            </div>
            <div class="col-xxl-12 mb-3 col-md-12">
                <div>
                    <label for="DireccionInmueble<?php echo e($index); ?>" class="form-label">Dirección Inmueble</label>
                    <input type="text" class="form-control" id="direccionInput1<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][direccion]" value="<?php echo e(old('inmuebles.' . $index . '.direccion', $inmueble->direccion)); ?>">
                </div>
            </div>

            <div class="col-lg-12">
                <label for="DepartamentoInmueble<?php echo e($index); ?>" class="form-label">Departamento Inmueble</label>
                <select class="form-select rounded-pill mb-3" id="DepartamentoInmueble<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][departamento]" value="<?php echo e(old('inmuebles.' . $index . '.departamento', $inmueble->departamento)); ?>">
                    <option selected>Ingresar dato</option>
                    <!-- Opciones aquí -->
                </select>
            </div>
            <div class="col-lg-12">
                <label for="ProvinciaInmueble<?php echo e($index); ?>" class="form-label">Provincia Inmueble</label>
                <select class="form-select rounded-pill mb-3" id="ProvinciaInmueble<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][provincia]" value="<?php echo e(old('inmuebles.' . $index . '.provincia', $inmueble->provincia)); ?>">
                    <option selected>Ingresar dato</option>
                    <!-- Opciones aquí -->
                </select>
            </div>
    
            <div class="col-lg-12">
                <label for="DstritoInmueble<?php echo e($index); ?>" class="form-label">Distrito Inmueble</label>
                <select class="form-select rounded-pill mb-3" id="DstritoInmueble<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][DstritoInmueble]" value="<?php echo e(old('inmuebles.' . $index . '.distrito', $inmueble->distrito)); ?>">
                    <option selected>Ingresar dato</option>
                    <!-- Opciones aquí -->
                </select>
            </div>
    
            <div class="col-xxl-12 mb-3 col-md-12">
                <div>
                    <label for="SunarpInmueble<?php echo e($index); ?>" class="form-label">SUNARP Inmueble</label>
                    <input type="text" class="form-control" id="SunarpInmueble<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][SunarpInmueble]" value="<?php echo e(old('inmuebles.' . $index . '.sunarp', $inmueble->sunarp)); ?>">
                </div>
            </div>
            <div class="col-xxl-12 mb-3 col-md-12">
                <div>
                    <label for="AreaRegistInmueble<?php echo e($index); ?>}" class="form-label">Área registral Inmueble</label>
                    <input type="text" class="form-control" id="AreaRegistInmueble<?php echo e($index); ?>}" name="inmuebles[<?php echo e($index); ?>][AreaRegistInmueble]" value="<?php echo e(old('inmuebles.' . $index . '.area_registral', $inmueble->area_registral)); ?>">
                </div>
            </div>
            <div class="col-xxl-12 mb-3 col-md-12">
                <div>
                    <label for="AsiRegistrlInmueble<?php echo e($index); ?>}" class="form-label">Asiento área registral</label>
                    <input type="text" class="form-control" id="AsiRegistrlInmueble<?php echo e($index); ?>}" name="inmuebles[<?php echo e($index); ?>][AsiRegistrlInmueble]" value="<?php echo e(old('inmuebles.' . $index . '.asiento_area_registral', $inmueble->asiento_area_registral)); ?>">
                </div>
            </div>
            <div class="col-xxl-12 mb-3 col-md-12">
                <div>
                    <label for="MunicipalArInmueble<?php echo e($index); ?>}" class="form-label">Área municipal Inmueble</label>
                    <input type="text" class="form-control" id="MunicipalArInmueble<?php echo e($index); ?>}" name="inmuebles[<?php echo e($index); ?>][MunicipalArInmueble]" value="<?php echo e(old('inmuebles.' . $index . '.municipal', $inmueble->municipal)); ?>">
                </div>
            </div>
            <div class="col-xxl-12 mb-3 col-md-12">
                <div>
                    <label for="AratasacionInmueble<?php echo e($index); ?>" class="form-label">Área tasación Inmueble</label>
                    <input type="text" class="form-control" id="AratasacionInmueble<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][AratasacionInmueble]" value="<?php echo e(old('inmuebles.' . $index . '.tasacion', $inmueble->tasacion)); ?>">
                </div>
            </div>
    
            <h4 class="mb-3"> CARGAS Y GRAVÁMENES </h3>
    
                <p> <b> Del Certificado Registral Inmobiliario de fecha «CRI» y de la verificación a 
                    través de la web SUNARP de fecha 14/07/2024, confirmar</b></p>
    
    
                  
                   <?php
                // Recuperar el valor del campo old, si está disponible
                $carg = old('inmuebles.' . $index . '.cargas', json_encode($inmueble->cargas));

                // Decodificar el JSON a un array PHP
                $cargacc = json_decode($carg, true) ?? [];

 

                // Asegurarse de que $tpendien2 es una cadena JSON válida y decodificarla
                $cargacc2 = is_string($cargacc) ? json_decode($cargacc, true) : $cargacc;

                // Si $tpendientesres sigue siendo null (por un JSON inválido), lo inicializamos como un array vacío
                $cargacc2 = $cargacc2 ?? [];

                

                //dd($cargacc2);
            ?>

            <p> Cargas :</p>

            <div class="row ">
                <!-- Campo oculto para asegurar que 'cargas' siempre esté presente -->
                <input type="hidden" name="inmuebles[<?php echo e($index); ?>][cargas][]" value="">

                <div class="col-xxl-6 col-lg-6 col-md-6 mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="formCheck22_<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][cargas][0]" value="Ninguno"
                            <?php echo e(in_array('Ninguno', $cargacc2) ? 'checked' : ''); ?>>
                        <label class="form-check-label" for="formCheck22_<?php echo e($index); ?>">
                            Ninguno
                        </label>
                    </div>
                </div>

                <div class="col-xxl-6 col-lg-6 col-md-6 mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="formCheck23_<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][cargas][1]" value="Con Carga"
                            <?php echo e(in_array('Con Carga', $cargacc2) ? 'checked' : ''); ?>>
                        <label class="form-check-label" for="formCheck23_<?php echo e($index); ?>">
                            Con Carga
                        </label>
                    </div>
                </div>
            </div>

                      <?php
                      // Recuperar el valor del campo old, si está disponible
                      $gramane = old('inmuebles.' . $index . '.gravamenes', json_encode($inmueble->gravamenes));
                      // Decodificar el JSON a un array PHP

                      
                      $gramane2 = json_decode($gramane, true);

                      // Decodificar la cadena JSON a un array PHP
                      $gravamenes = json_decode($gramane2, true);

                    if (!is_array($gravamenes)) {
                        $gravamenes = [];
                    }
                                    //dd($arraye);
                                              
                  ?>
    
                      <p>Gravámenes :</p>
                      <div class="row">

                        <div class="col-xxl-6 col-lg-6 col-md-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="formCheck24_<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][gravamenes][0]" value="Sin Gravamen"
                                    <?php echo e(in_array('Sin Gravamen', $gravamenes) ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="formCheck24_<?php echo e($index); ?>">
                                    Sin Gravamen
                                </label>
                            </div>
                        </div>


                        <div class="col-xxl-6 col-lg-6 col-md-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="formCheck25_<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][gravamenes][1]" value="Con Gravamen"
                                    <?php echo e(in_array('Con Gravamen', $gravamenes) ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="formCheck25_<?php echo e($index); ?>">
                                    Con Gravamen
                                </label>
                            </div>
                        </div>
     
                             
                  
                          
                      </div>
                      <?php
                                            // Recuperar el valor del campo old, si está disponible
                        $tpendien = old('inmuebles.' . $index . '.tpendientes', json_encode($inmueble->tpendientes));

                        // Decodificar el JSON a un array PHP. Si falla o es null, asignar un array vacío
                        $tpendien2 = json_decode($tpendien, true) ?? [];

                        // Asegurarse de que $tpendien2 es una cadena JSON válida y decodificarla
                        $tpendientesres = is_string($tpendien2) ? json_decode($tpendien2, true) : $tpendien2;

                        // Si $tpendientesres sigue siendo null (por un JSON inválido), lo inicializamos como un array vacío
                        $tpendientesres = $tpendientesres ?? [];
                      
                      //dd($tpendientesres);
                                              
                  ?>
                      <h4 class="mb-3">Títulos Pendientes</h4>
                      <div class="row">

                        <div class="col-xxl-6 col-lg-6 col-md-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="formCheck26_<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][tpendientes][0]" value="Ninguno"
                                    <?php echo e(in_array('Ninguno', $tpendientesres) ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="formCheck26_<?php echo e($index); ?>">
                                    Ninguno
                                </label>
                            </div>
                        </div>

                        <div class="col-xxl-6 col-lg-6 col-md-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="formCheck27_<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][tpendientes][1]" value="Con título pendiente"
                                    <?php echo e(in_array('Con título pendiente', $tpendientesres) ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="formCheck27_<?php echo e($index); ?>">
                                    Con título pendiente
                                </label>
                            </div>
                        </div>


                           
                      </div>
                  
                  <h4 class="mb-3"> DATOS COMERCIALES </h3>
    
                    <div class="col-xxl-12 mb-3 col-md-12">
                        <div>
                            <label for="Comercialinpt<?php echo e($index); ?>" class="form-label">   VALOR Comercial                 </label>
                            <input type="text" class="form-control" id="Comercialinpt<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][Comercialinpt]" value="<?php echo e(old('inmuebles.' . $index . '.valor_comercial', $inmueble->valor_comercial)); ?>">
                        </div>
                    </div>
                    <div class="col-xxl-12 mb-3 col-md-12">
                        <div>
                            <label for="Tasadorinput<?php echo e($index); ?>" class="form-label">   Tasador                       </label>
                            <input type="text" class="form-control" id="Tasadorinput<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][Tasadorinput]" value="<?php echo e(old('inmuebles.' . $index . '.tasador', $inmueble->tasador)); ?>">
                        </div>
                    </div>
                
                    <div class="col-xxl-12 mb-3 col-md-12">
                        <div>
                            <label for="InputREPEV<?php echo e($index); ?>" class="form-label">   REPEV                      </label>
                            <input type="text" class="form-control" id="InputREPEV<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][InputREPEV]" value="<?php echo e(old('inmuebles.' . $index . '.repev', $inmueble->repev)); ?>">
                        </div>
                    </div>
                
                    <div class="col-xxl-12 mb-3 col-md-12">
                        <div>
                            <label for="InGravamen<?php echo e($index); ?>" class="form-label">    Gravamen                  </label>
                            <input type="text" class="form-control" id="InGravamen<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][InGravamen]" value="<?php echo e(old('inmuebles.' . $index . '.gravamen', $inmueble->gravamen)); ?>">
                        </div>
                    </div>
                
                    <div class="col-xxl-12 mb-3 col-md-12">
                        <div>
                            <label for="InstrNotaria<?php echo e($index); ?>" class="form-label">    Instrucción Notaria                   </label>
                            <input type="text" class="form-control" id="InstrNotaria<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][InstrNotaria]" value="<?php echo e(old('inmuebles.' . $index . '.instr_notaria', $inmueble->instr_notaria)); ?>">
                        </div>
                    </div>
                    
                    <h4 class="mb-3">  DATOS DEL PROPIETARIO </h3>
    
                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="DatoPropie<?php echo e($index); ?>" class="form-label">    Propietario               </label>
                                <input type="text" class="form-control" id="DatoPropie<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][DatoPropie]" value="<?php echo e(old('inmuebles.' . $index . '.dato_propietario', $inmueble->dato_propietario)); ?>">
                            </div>
                        </div>
                        
                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="DniPropei<?php echo e($index); ?>" class="form-label">     DNI Propietario                    </label>
                                <input type="text" class="form-control" id="DniPropei<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][DniPropei]" value="<?php echo e(old('inmuebles.' . $index . '.dni_propietario', $inmueble->dni_propietario)); ?>">
                            </div>
                        </div>
    
                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="EstCivil<?php echo e($index); ?>" class="form-label">      Estado Civil                    </label>
                                <input type="text" class="form-control" id="EstCivil<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][EstCivil]" value="<?php echo e(old('inmuebles.' . $index . '.estado_civil', $inmueble->estado_civil)); ?>">
                            </div>
                        </div>
    
                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="NomConyug<?php echo e($index); ?>" class="form-label">     Nombre de Conyugue                </label>
                                <input type="text" class="form-control" id="NomConyug<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][NomConyug]" value="<?php echo e(old('inmuebles.' . $index . '.nombre_conyuge', $inmueble->nombre_conyuge)); ?>">
                            </div>
                        </div>
    
                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="Dniconyug<?php echo e($index); ?>" class="form-label">     DNI Conyugue                  </label>
                                <input type="text" class="form-control" id="Dniconyug<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][Dniconyug]" value="<?php echo e(old('inmuebles.' . $index . '.dni_conyuge', $inmueble->dni_conyuge)); ?>">
                            </div>
                        </div>
    
                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="DirecPropie<?php echo e($index); ?>" class="form-label">      Dirección   Propietario               </label>
                                <input type="text" class="form-control" id="DirecPropie<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][DirecPropie]" value="<?php echo e(old('inmuebles.' . $index . '.direccion_propietario', $inmueble->direccion_propietario)); ?>">
                            </div>
                        </div>
                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="Deppropietario<?php echo e($index); ?>" class="form-label">      Departamento propietario                  </label>
                                <input type="text" class="form-control" id="Deppropietario<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][Deppropietario]" value="<?php echo e(old('inmuebles.' . $index . '.departamento_propietario', $inmueble->departamento_propietario)); ?>">
                            </div>
                        </div>
    
                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="Provinciapropie<?php echo e($index); ?>" class="form-label">     Provincia propietario                 </label>
                                <input type="text" class="form-control" id="Provinciapropie<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][Provinciapropie]" value="<?php echo e(old('inmuebles.' . $index . '.provincia_propietario', $inmueble->provincia_propietario)); ?>">
                            </div>
                        </div>
    
                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="DstritoPropi<?php echo e($index); ?>" class="form-label">     Distrito propietario               </label>
                                <input type="text" class="form-control" id="DstritoPropi<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][DstritoPropi]" value="<?php echo e(old('inmuebles.' . $index . '.distrito_propietario', $inmueble->distrito_propietario)); ?>">
                            </div>
                        </div>
    
                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="TitulPropied<?php echo e($index); ?>" class="form-label">    Titulo de propiedad              </label>
                                <input type="text" class="form-control" id="TitulPropied<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][TitulPropied]" value="<?php echo e(old('inmuebles.' . $index . '.titulo_propiedad', $inmueble->titulo_propiedad)); ?>">
                            </div>
                        </div>
    
                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="ValAdqui<?php echo e($index); ?>" class="form-label">     Valor de adquisición            </label>
                                <input type="text" class="form-control" id="ValAdqui<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][ValAdqui]" value="<?php echo e(old('inmuebles.' . $index . '.valor_adquisicion', $inmueble->valor_adquisicion)); ?>">
                            </div>
                        </div>
    
                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="FechaAdqui<?php echo e($index); ?>" class="form-label">      Fecha de adquisición              </label>
                               
                                <input type="date" class="form-control flatpickr-input active" id="FechaAdqui<?php echo e($index); ?>" data-provider="flatpickr" data-date-format="d M, Y" name="inmuebles[<?php echo e($index); ?>][FechaAdqui]" value="<?php echo e(old('inmuebles.' . $index . '.fecha_adquisicion', $inmueble->fecha_adquisicion)); ?>" >
                            </div>
                        </div>
    
                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="NotarioIn<?php echo e($index); ?>" class="form-label">     Notario               </label>
                                <input type="text" class="form-control" id="NotarioIn<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][Notario]" value="<?php echo e(old('inmuebles.' . $index . '.notario', $inmueble->notario)); ?>">
                            </div>
                        </div>
    
                        
                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="AsientoInscripcio<?php echo e($index); ?>" class="form-label">   Asiento de Inscripción           </label>
                                <input type="text" class="form-control" id="AsientoInscripcio<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][AsientoInscripcio]" value="<?php echo e(old('inmuebles.' . $index . '.asiento_inscripcion', $inmueble->asiento_inscripcion)); ?>">
                            </div>
                        </div>
    
                        
                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="Cri<?php echo e($index); ?>" class="form-label">    CRI             </label>
                                <input type="text" class="form-control" id="Cri<?php echo e($index); ?>" name="inmuebles[<?php echo e($index); ?>][CRI]" value="<?php echo e(old('inmuebles.' . $index . '.cri', $inmueble->cri)); ?>">
                            </div>
                        </div>

            <!-- Otros campos de inmueble -->
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
   
                        
                    </div>
                    <div class="tab-pane" id="pill-justified-messages-1" role="tabpanel">

                        <h4 class="mb-3">  OBSERVACIONES Y DOCUMENTOS A SUBSANAR </h3>    
                        <h4 class="card-title mb-4 flex-grow-1"> Ingresar los datos verificados para la correcta elaboración del Informe para garantía</h4>

                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="respectoInmueble" class="form-label">      Respecto al Inmueble            </label>
                                <input type="text" class="form-control" id="respectoInmueble" name="respectoInmueble" value="<?php echo e($expediente->evaluacion->respecto_inmueble); ?>">
                            </div>
                        </div>

                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="respectoClienteOpera" class="form-label">     Respecto del cliente o la operación          </label>
                                <input type="text" class="form-control" id="respectoClienteOpera" name="respectoClienteOpera" value="<?php echo e($expediente->evaluacion->respecto_cliente_opera); ?>">
                            </div>
                        </div>

                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="respectoMinuComprV" class="form-label">   Respecto a la minuta de compraventa        </label>
                                <input type="text" class="form-control" id="respectoMinuComprV" name="respectoMinuComprV" value="<?php echo e($expediente->evaluacion->respecto_minu_compr_v); ?>">
                            </div>
                        </div>

                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="respectoMinuComprVFutu" class="form-label">     Respecto de la minuta de compraventa de bien futuro           </label>
                                <input type="text" class="form-control" id="respectoMinuComprVFutu" name="respectoMinuComprVFutu" value="<?php echo e($expediente->evaluacion->respecto_minu_compr_v_futu); ?>">
                            </div>
                        </div>

                        <div class="col-xxl-12 mb-3 col-md-12">
                            <div>
                                <label for="respectoFiador" class="form-label">      Respecto de los fiadores            </label>
                                <input type="text" class="form-control" id="respectoFiador" name="respectoFiador" value="<?php echo e($expediente->evaluacion->respecto_fiador); ?>">
                            </div>
                        </div>

                        <?php
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
                  ?>
                        
                        <h4 class="mb-3">  DOCUMENTOS RECIBIDOS </h3>  

                            <div class="col-xxl-12 col-lg-12 col-md-12 mb-3">
                               
                                         
                                <div class="col-xxl-12 col-lg-4 col-md-12 mb-3">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="formCheck30" name="DOCUMENTOSRE[0]" value="CRI"
                                        <?php echo e(in_array('CRI', $docre) ? 'checked' : ''); ?>>
                                        <label class="form-check-label" for="formCheck30">
                                            CRI de la partida electrónica Nº «Partida_Inmueble_1» del Registro de Propiedad Inmueble de la 
                                        Oficina Registral de.«SUNARP_Inmueble_1»
                                        </label>
                                    </div>
                                </div>  
                                  
                                
                         
                        </div><!--end col-->  
                        
                        <div class="col-xxl-12 col-lg-4 col-md-12 mb-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="formCheck31" name="DOCUMENTOSRE[1]" value="HR y PU 2024"
                                <?php echo e(in_array('HR y PU 2024', $docre) ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="formCheck31">
                                    HR y PU 2024
                                </label>
                            </div>
                        </div>  
                        <div class="col-xxl-12 col-lg-4 col-md-12 mb-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="formCheck32" name="DOCUMENTOSRE[2]" value="Recibo de pago de impuestos municipales correspondientes al año 2024"
                                <?php echo e(in_array('Recibo de pago de impuestos municipales correspondientes al año 2024', $docre) ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="formCheck32">
                                    Recibo de pago de impuestos municipales correspondientes al año 2024
                                </label>
                            </div>
                        </div>  
                        
                        <div class="col-xxl-12 col-lg-4 col-md-12 mb-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="formCheck33" name="DOCUMENTOSRE[3]" value="Aplicativo de poderes del cliente"
                                <?php echo e(in_array('Aplicativo de poderes del cliente', $docre) ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="formCheck33">
                                    Aplicativo de poderes del cliente
                                </label>
                            </div>
                        </div> 

                        <div class="col-xxl-12 col-lg-4 col-md-12 mb-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="formCheck34" name="DOCUMENTOSRE[4]" value="Informe de tasación"
                                <?php echo e(in_array('Informe de tasación', $docre) ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="formCheck34">
                                    Informe de tasación
                                </label>
                            </div>
                        </div> 
                    
                        <div class="col-xxl-12 col-lg-4 col-md-12 mb-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="formCheck35" name="DOCUMENTOSRE[5]" value="Vigencia de poder de representante del cliente"
                                <?php echo e(in_array('Vigencia de poder de representante del cliente', $docre) ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="formCheck35">
                                    Vigencia de poder de representante del cliente
                                </label>
                            </div>
                        </div> 

                        
                        <div class="col-xxl-12 col-lg-4 col-md-12 mb-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="formCheck36" name="DOCUMENTOSRE[6]" value="DNI del representante del cliente"
                                <?php echo e(in_array('DNI del representante del cliente', $docre) ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="formCheck36">
                                    DNI del representante del cliente
                                </label>
                            </div>
                        </div> 


                        <div class="col-xxl-12 col-lg-4 col-md-12 mb-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="formCheck37" name="DOCUMENTOSRE[7]" value="DNI del/ los propietario(s)"
                                <?php echo e(in_array('DNI del/ los propietario(s)', $docre) ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="formCheck37">
                                    DNI del/ los propietario(s)
                                </label>
                            </div>
                        </div> 
         
                        
                        <div class="col-xxl-12 col-lg-4 col-md-12 mb-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="formCheck38" name="DOCUMENTOSRE[8]" value="Modelo de Minuta de Compraventa de Bien futuro"
                                <?php echo e(in_array('Modelo de Minuta de Compraventa de Bien futuro', $docre) ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="formCheck38">
                                    Modelo de Minuta de Compraventa de Bien futuro
                                </label>
                            </div>
                        </div> 

                        <div class="col-xxl-12 col-lg-4 col-md-12 mb-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="formCheck39" name="DOCUMENTOSRE[9]" value="Otros"
                                <?php echo e(in_array('Otros', $docre) ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="formCheck39">
                                    Otros
                                </label>
                            </div>
                        </div> 
                
            

                    <!--end col-->

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
                 
                    <div class="tab-pane" id="pill-justified-settings-1" role="tabpanel">

                        <h4 class="card-title mb-4 flex-grow-1"> Ingresar los datos verificados para la correcta elaboración del Informe para garantía:</h4>

                        

                        <div class="col-lg-12">
                            <label for="basiInput" class="form-label">Tipo                       </label>
                            <select class="form-select rounded-pill mb-3" aria-label="Default select example">
                                <option selected>Ingresar dato</option>
                      
                            </select>
                        </div>

                        <div class="col-xxl-12 col-md-12 mb-3">
                            <div>
                                <label for="basiInput" class="form-label">  Fecha de Ingreso                            </label>
                                <input type="text" class="form-control" id="basiInput">
                            </div>
                        </div>    

                        <div class="col-xxl-12 col-md-12 mb-3">
                            <div>
                                <label for="basiInput" class="form-label">  Nro FACTURA                           </label>
                                <input type="text" class="form-control" id="basiInput">
                            </div>
                        </div>    

                        <div class="col-xxl-12 col-md-12 mb-3">
                            <div>
                                <label for="basiInput" class="form-label">  Monto de Factura                           </label>
                                <input type="text" class="form-control" id="basiInput">
                            </div>
                        </div>    

                        <div class="col-lg-12 mb-3">
                            <label for="basiInput" class="form-label"> Detracción                           </label>
                            <select class="form-select rounded-pill mb-3" aria-label="Default select example">
                                <option selected>Ingresar dato</option>
                      
                            </select>
                        </div>

                        <div class="row" style="text-align: center;">

                            <div class="col-xxl-12 col-md-12">
                                <button type="button" class="btn btn-secondary waves-effect waves-light">ANTERIOR</button>

                                <button type="button" class="btn btn-success waves-effect waves-light">SIGUIENTE</button>
                            </div>

                           

                        </div>
                     

                    </div>
                    <div class="tab-pane" id="pill-justified-settings-2" role="tabpanel">

                        <h4 class="card-title mb-4 flex-grow-1"> Ingresar los datos verificados para la correcta elaboración del Informe para garantía</h4>
                
                        <div class="col-xxl-12 col-md-12">
                            <div>
                                <label for="basiInput" class="form-label">  Notaria elegida por el promotor                             </label>
                                <input type="password" class="form-control" id="basiInput">
                            </div>
                        </div>    

                        <div class="col-xxl-12 col-md-12">
                            <div>
                                <label for="basiInput" class="form-label">  Fecha Envio Contrato Hipoteca a Cliente                          </label>
                                <input type="password" class="form-control" id="basiInput">
                            </div>
                        </div>   

                        
                        
                        <div class="col-xxl-12 col-md-12">
                            <div>
                                <label for="basiInput" class="form-label">  Fecha Envio Contrato Hipotecas a Notaria                             </label>
                                <input type="password" class="form-control" id="basiInput">
                            </div>
                        </div>   

                        <div class="col-xxl-12 col-md-12 mb-3">
                            <div>
                                <label for="basiInput" class="form-label">  Fecha de Inscripción Bloqueo Registral                          </label>
                                <input type="password" class="form-control" id="basiInput">
                            </div>
                        </div>   
                        <div class="row mb-3 ">
                                <div class="col-xxl-6 col-md-6">
                                
                                        <label for="basiInput" class="form-label">  Fecha Firma EEPP Promotor                             </label>
                                        <input type="password" class="form-control" id="basiInput">
                                
                                </div>   

                                <div class="col-xxl-6 col-md-6">
                                
                                        <label for="basiInput" class="form-label">  Fecha Firma EEPP Vendedor                           </label>
                                        <input type="password" class="form-control" id="basiInput">
                                
                                </div>   
                         </div>

                         <div class="row mb-3">
                            <div class="col-xxl-6 col-md-6">
                            
                                    <label for="basiInput" class="form-label">  Fecha Firma EEPP Banco                            </label>
                                    <input type="password" class="form-control" id="basiInput">
                            
                            </div>   

                            <div class="col-xxl-6 col-md-6">
                            
                                    <label for="basiInput" class="form-label">  Fecha de Cierre de la EEPP                          </label>
                                    <input type="password" class="form-control" id="basiInput">
                            
                            </div>   
                     </div>

                     <div class="row mb-3 ">
                        <div class="col-xxl-6 col-md-6">
                        
                                <label for="basiInput" class="form-label">  Fecha Ingreso de Parte Notarial a RRPP                            </label>
                                <input type="password" class="form-control" id="basiInput">
                        
                        </div>   

                        <div class="col-xxl-6 col-md-6">
                        
                                <label for="basiInput" class="form-label">  Fecha de Inscripción Garantía BCP                           </label>
                                <input type="password" class="form-control" id="basiInput">
                        
                        </div>   
                 </div>
                        <div class="col-xxl-12 col-md-12 mb-3">
                            <div>
                                <label for="basiInput" class="form-label"> Fecha de Carga de Testimonios, Anotación de Inscripción y Certificado de Cargas y Gravámenes                            </label>
                                <input type="password" class="form-control" id="basiInput">
                            </div>
                        </div>   

                        <div class="col-xxl-12 col-md-12 mb-3">
                            <div>
                                <label for="basiInput" class="form-label">  Fecha de Fiscalizacion Garantia y Carga de Plantilla de Activación                           </label>
                                <input type="password" class="form-control" id="basiInput">
                            </div>
                        </div>   

                        <div class="col-xxl-12 col-md-12 mb-3">
                            <div>
                                <label for="basiInput" class="form-label">  Se inscribó la Garantia en el plazo de Ley (En Plazo / Por Vencer / Vencido)                          </label>
                                <input type="password" class="form-control" id="basiInput">
                            </div>
                        </div>   

                        <div class="col-xxl-12 col-md-12 mb-3">
                            <div>
                                <label for="basiInput" class="form-label">  Se solicitó a Notaría que Presente Reclamo por el Titulo (SI /NO)                           </label>
                                <input type="password" class="form-control" id="basiInput">
                            </div>
                        </div>   

                        
                        <div class="col-xxl-12 col-md-12 mb-3">
                            <div>
                                <label for="basiInput" class="form-label"> Dias Utiles desde la inscripción de la carga y el cargado de documentos por notaría.                          </label>
                                <input type="password" class="form-control" id="basiInput">
                            </div>
                        </div>   

                        
                        <div class="col-xxl-12 col-md-12 mb-3">
                            <div>
                                <label for="basiInput" class="form-label">  Notaría Cargo los documentos dentro de las 24 horas ( EN PLAZO / POR VENCER / VENCIDO)                          </label>
                                <input type="password" class="form-control" id="basiInput">
                            </div>
                        </div>   

                        <div class="row" style="text-align: center;">

                            <div class="col-xxl-12 col-md-12">
                                <button type="button" class="btn btn-secondary waves-effect waves-light">ANTERIOR</button>

                                <button type="button" class="btn btn-success waves-effect waves-light">GUARDAR DATOS</button>
                            </div>

                           

                        </div>
                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!--end col-->


    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
 document.addEventListener('DOMContentLoaded', function() {
            <?php if(session('error')): ?>
                Swal.fire({
                    title: 'Error',
                    text: "<?php echo e(session('error')); ?>",
                    icon: 'error'
                });
            <?php endif; ?>

            // Si hay un mensaje de error en la respuesta AJAX
            <?php if($errors->has('error')): ?>
                Swal.fire({
                    title: 'Error',
                    text: "<?php echo e($errors->first('error')); ?>",
                    icon: 'error'
                });
            <?php endif; ?>
        });

document.addEventListener('DOMContentLoaded', function() {
        

        <?php if(session('success')): ?>
            Swal.fire({
                icon: 'success',
                title: '¡Éxito!',
                text: '<?php echo e(session('success')); ?>',
                confirmButtonText: 'OK'
            });
        <?php endif; ?>
    });

/*********AUMENTAR INMUEBLES*****/

let inmuebleCount = <?php echo e($expediente->inmuebles->count()-1); ?>;

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

    // Clonar el contenido del tab actual para reutilizar la estructura
    const newTabContent = document.querySelector('.inmueble-section').cloneNode(true);
    newTabContent.classList.remove('show', 'active'); // Remover clases de tab activo
    newTabContent.id = `inmueble-${inmuebleCount}`; // Cambiar el ID del tab

    // Actualizar los campos de nombre e ID para el nuevo inmueble
    newTabContent.querySelectorAll('input, select').forEach(function(input) {
        // Cambiar el índice en el name (inmuebles[index])
        input.name = input.name.replace(/\d+/, inmuebleCount);
        input.id = input.id.replace(/\d+/, inmuebleCount);
        input.value = '';  // Limpiar el valor del campo
         // Limpiar el valor del campo
         if (input.type === 'checkbox') {
            // Establecer valores específicos para los checkboxes
            if (input.name.includes('[cargas][0]')) {
                input.id = 'formCheck22_' + inmuebleCount; // Mantener formato original
                input.value = 'Ninguno'; // Valor específico para el checkbox "Ninguno"
            } else if (input.name.includes('[cargas][1]')) {
                input.id = 'formCheck23_' + inmuebleCount; // Mantener formato original
                input.value = 'Con Carga'; // Valor específico para el checkbox "Con Carga"
            }
            input.checked = false; // Desmarcar checkboxes
        } else {
            input.value = '';  // Limpiar el valor de otros campos
        }
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


<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('build/libs/prismjs/prism.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\corporate\resources\views/expedientes/editar.blade.php ENDPATH**/ ?>