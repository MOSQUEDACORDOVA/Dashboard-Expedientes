<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.lista-facturacion'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?> Page Title <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(URL::asset('build/libs/gridjs/theme/mermaid.min.css')); ?>">
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
        <div class="row align-items-start">
        <h3 class="col-md-4 mb-3">Listar Facturación</h3>
        <h3 class="col-md-4 offset-md-4"><a href="/nueva-facturacion"><button style="    width: 55%;
    margin-bottom: 10px;" class="btn btn-outline-success btn-border ">Crear Factura</button></a></h3>
        </div>

        <div class="card">
            <div class="card-body">

                <table id="expedientesTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Informe</th>
                            <th>Razón Social</th>
                            <th>RUC</th>
                            <th>Nombre Proyecto</th>
                            <th>TrazerID</th>
                            <th>Datos Facturación</th>
                            <th>N° Facturas</th>

                        </tr>
                    </thead>
                    <tbody>
                        <!-- Los datos se llenarán aquí con JavaScript -->
                    </tbody>
                </table>
                <!-- Nav tabs -->

                <!-- Tab panes -->


            </div><!--end col-->





                        </div>
                    </div>
                </div>



    <!--end col-->
</div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
       document.addEventListener('DOMContentLoaded', function () {
    axios.get('/expedientes')
        .then(function (response) {
            const expedientes = response.data;
            renderTable(expedientes);
        })
        .catch(function (error) {
            console.error('Error fetching data:', error);
        });
});

function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString(); // Devuelve la fecha en formato local (por ejemplo: MM/DD/YYYY)
}

function renderTable(expedientes) {
    const tableBody = document.querySelector('#expedientesTable tbody');
    tableBody.innerHTML = ''; // Limpiar la tabla antes de llenarla

    expedientes.forEach(expediente => {
        const row = document.createElement('tr');

        row.innerHTML = `
            <td>${expediente.id}</td>
            <td>${expediente.razon_social}</td>
              <td>${expediente.ruc}</td>
            <td>${expediente.nombre_proyecto}</td>

            <td>${expediente.traze_id}</td>
            <td>${formatDate(expediente.created_at)}</td>
            <td>Incompleto</td>
            <td style=""><a href="editar-expedientes/${expediente.id}"><i style="font-size:20px; color:#3cd188;" class="las la-edit"></i></a>
                <a href="reporte-expediente/${expediente.id}"> <i style="font-size:20px; color:#495057;" class="las la-file-pdf"></i></a>
                 <i style="font-size:20px; color:red;" class="las la-trash"></i></td>


        `;

        tableBody.appendChild(row);
    });
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

<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\sistemaexpediente\resources\views/lista-facturacion.blade.php ENDPATH**/ ?>