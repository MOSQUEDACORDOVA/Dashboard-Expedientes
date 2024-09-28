@extends("layouts.master")
@section('title')
    @lang('translation.lista-expediente')
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
                            <th>RUC</th>
                            <th>Nombre Proyecto</th>
                            <th>TrazerID</th>
                            <th>Fecha Ingreso</th>
                            <th>Estado</th>
                            <th>Acciones</th>
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
    <!--end col-->
</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

    function confirmDelete(element) {
        const expedienteId = element.getAttribute('data-id');
        Swal.fire({
            title: '¿Estás seguro?',
            text: "No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminarlo!'
        }).then((result) => {
            if (result.isConfirmed) {
                deleteExpediente(expedienteId);
            }
        });
    }

    function deleteExpediente(id) {
        axios.delete(`/eliminar-expediente/${id}`, {
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Asegúrate de incluir el token CSRF
            }
        })
        .then(response => {

            console.log(response.data.message);

            Swal.fire('Eliminado!', response.data.message, 'success');
            // Eliminar la fila de la tabla
            document.querySelector(`#expedientesTable tbody`).innerHTML = ''; // Limpiar la tabla antes de volver a llenarla
            return axios.get('/expedientes'); // Obtener la lista actualizada
        })
        .then(response => {
            renderTable(response.data); // Renderizar la tabla actualizada
        })
        .catch(error => {
            Swal.fire('Error!', error.response.data.message, 'error');
        });
    }

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
                <i style="font-size:20px; color:red; cursor:pointer;" class="las la-trash" data-id="${expediente.id}" onclick="confirmDelete(this)"></i></td>
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
