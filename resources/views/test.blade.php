@extends("layouts.master")
@section('title')
    @lang('translation.basic-elements')
@endsection
@section('title') Page Title @endsection
@section('css')
<link rel="stylesheet" href="{{ URL::asset('build/libs/gridjs/theme/mermaid.min.css') }}">
<!-- your page css file -->
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1')
    Expediente
@endslot
@slot('title')
    
@endslot
@endcomponent
<div class="row">
    <div class="col-xxl-12">
        <h3 class="mb-3">Listar expediente</h3>
        <div class="card">
            <div class="card-body">

                <table id="expedientesTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Razón Social</th>
                            <th>Nombre Proyecto</th>
                            <th>RUC</th>
                            <th>Finalidad</th>
                            <th>Funcionario</th>
                            <th>Correo Funcionario</th>
                            <th>Asistente</th>
                            <th>Correo Asistente</th>
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

function renderTable(expedientes) {
    const tableBody = document.querySelector('#expedientesTable tbody');
    tableBody.innerHTML = ''; // Limpiar la tabla antes de llenarla

    expedientes.forEach(expediente => {
        const row = document.createElement('tr');

        row.innerHTML = `
            <td>${expediente.id}</td>
            <td>${expediente.razon_social}</td>
            <td>${expediente.nombre_proyecto}</td>
            <td>${expediente.ruc}</td>
            <td>${expediente.finalidad}</td>
            <td>${expediente.funcionario}</td>
            <td>${expediente.correo_funcionario}</td>
            <td>${expediente.asistente}</td>
            <td>${expediente.correo_asistente}</td>
        `;

        tableBody.appendChild(row);
    });
}


  </script>



@endsection
@section('content')
<!-- your page script here -->


@endsection


@section('script')
    <script src="{{ URL::asset('build/libs/prismjs/prism.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>

@endsection
