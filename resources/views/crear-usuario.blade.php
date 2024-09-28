@extends("layouts.master")
@section('title') Page Title @endsection
@section('css')
<!-- your page css file -->
@endsection
@section('content')
<div class="row">
    <div class="col-xxl-12">
        <h3 class="mb-3">Crear Usuario</h3>
        <div class="card">
            <div class="card-body">
                <form id="usuarioForm">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="role">Rol</label>
                        <select id="role" name="role" class="form-control">
                            <!-- Agrega aquí las opciones de rol -->
                            <option value="Administrador">Administrador</option>
                            <option value="Area Legal">Area Legal</option>
                            <option value="Contabilidad">Contabilidad</option>
                        </select>
                    </div>
                    <button type="button" id="submitButton" class="btn btn-primary">Crear Usuario</button>
                </form>
                
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>




  document.addEventListener('DOMContentLoaded', function() {
    const submitButton = document.getElementById('submitButton');
    if (submitButton) {
        submitButton.addEventListener('click', function() {
            // Obtén los datos del formulario
            const formData = new FormData(document.getElementById('usuarioForm'));

            // Convierte FormData a un objeto JSON
            const jsonData = {};
            formData.forEach((value, key) => {
                jsonData[key] = value;
            });

            // Enviar los datos usando Axios
            axios.post('/usuario', jsonData, {
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => {
                console.log('Success:', response.data);
                Swal.fire({
                    icon: 'success',
                    title: 'Usuario creado correctamente',
                    text: 'El usuario ha sido creado con éxito.',
                    confirmButtonText: 'Aceptar'
                });
                
                // Aquí puedes actualizar la tabla de usuarios si es necesario
            })
            .catch(error => {
                console.error('Error:', error.response ? error.response.data : error.message);
                Swal.fire({
                    icon: 'error',
                    title: 'Error al crear el usuario',
                    text: error.response ? error.response.data.message : error.message,
                    confirmButtonText: 'Aceptar'
                });
            });
        });
    } else {
        console.error('El botón submitButton no se encuentra en el DOM');
    }
});


</script>

@endsection
@section('content')
<!-- your page script here -->
@endsection