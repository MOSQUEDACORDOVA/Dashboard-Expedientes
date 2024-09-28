
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.usuarios'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?> Page Title <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(URL::asset('build/libs/gridjs/theme/mermaid.min.css')); ?>">
<!-- your page css file -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?>
    usuarios
<?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?>
    
<?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<div class="row">
    <div class="col-xxl-12">
        <h3 class="mb-3">Usuarios</h3>
        <div class="live-preview">
            <div class="d-flex flex-wrap gap-2 mb-3">
              
               <a href="crear-usuario"> <button type="button" class="btn btn-success waves-effect waves-light">Crear Usuario</button>
               </a>
            </div>
        </div>
        <div class="card">
            
            <div class="card-body">
                <table id="usuariosTable" class="table table-striped">
                    <thead>
                        <tr >
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Los datos se llenarán aquí con JavaScript -->
                    </tbody>
                </table>
            </div><!--end card-body-->    
        </div><!--end card-->
    </div><!--end col-->
</div><!--end row-->


<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editUserModalLabel">Editar Usuario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="editUserForm">
            <input type="hidden" id="editUserId">
            <div class="mb-3">
              <label for="editUserName" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="editUserName" required>
            </div>
            <div class="mb-3">
              <label for="editUserEmail" class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" id="editUserEmail" required>
            </div>
            <div class="mb-3">
              <label for="editUserRole" class="form-label">Rol</label>
              <select class="form-select" id="editUserRole" required>
                <option value="Administrador">Administrador</option>
                <option value="Contabilidad">Contabilidad</option>
                <option value="Area Legal">Area Legal</option>
                <!-- Agrega más roles según sea necesario -->
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        axios.get('/usuario-lista')
            .then(function (response) {
                const usuarios = response.data;
                renderTable(usuarios);
            })
            .catch(function (error) {
                console.error('Error fetching data:', error);
            });
    });

    function renderTable(usuarios) {
        const tableBody = document.querySelector('#usuariosTable tbody');
        tableBody.innerHTML = ''; // Limpiar la tabla antes de llenarla

        usuarios.forEach(usuario => {
            const row = document.createElement('tr');
            row.setAttribute('id', `row-${usuario.id}`);
            row.innerHTML = `
                <td>${usuario.id}</td>
                <td>${usuario.name}</td>
                <td>${usuario.email}</td>
                <td>${usuario.role || 'No asignado'}</td>
                <td>
                    <button class="btn btn-primary btn-sm" onclick="editUser(${usuario.id})">Editar</button>
                    <button class="btn btn-danger btn-sm" onclick="deleteUser(${usuario.id})">Eliminar</button>
                </td>
            `;

            tableBody.appendChild(row);
        });
    }

    function editUser(userId) {
    axios.get(`/usuario/${userId}/edit`)
        .then(function (response) {
            const user = response.data;
            
            // Rellenar el formulario con los datos del usuario
            document.getElementById('editUserId').value = user.id;
            document.getElementById('editUserName').value = user.name;
            document.getElementById('editUserEmail').value = user.email;
            document.getElementById('editUserRole').value = user.roles[0] ? user.roles[0].name : '';

            // Mostrar el modal
            $('#editUserModal').modal('show');
        })
        .catch(function (error) {
            console.error('Error fetching user data:', error); // Ver el error completo en la consola
        });
}
        document.getElementById('editUserForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const userId = document.getElementById('editUserId').value;
            const name = document.getElementById('editUserName').value;
            const email = document.getElementById('editUserEmail').value;
            const role = document.getElementById('editUserRole').value;

            axios.put(`/usuario/${userId}`, {
                name: name,
                email: email,
                role: role
            })
            .then(function (response) {
                console.log(response)
                Swal.fire('Éxito', 'Usuario actualizado correctamente', 'success');

                // Cierra el modal
                $('#editUserModal').modal('hide');

                // Opcional: Recargar la tabla para mostrar los datos actualizados
                location.reload();
            })
            .catch(function (error) {
                console.error('Error updating user:', error);
                Swal.fire('Error', 'No se pudo actualizar el usuario', 'error');
            });
        });
        function deleteUser(userId) {
        // Mostrar SweetAlert para la confirmación
        Swal.fire({
            title: '¿Estás seguro?',
            text: "No podrás revertir esta acción.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminarlo'
        }).then((result) => {
            if (result.isConfirmed) {
                // Si el usuario confirma, realiza la solicitud DELETE
                axios.delete(`/usuario/${userId}`)
                    .then(function (response) {
                        Swal.fire(
                            'Eliminado',
                            'El usuario ha sido eliminado.',
                            'success'
                        );

                        // Eliminar la fila correspondiente del DOM
                        document.querySelector(`#row-${userId}`).remove();
                    })
                    .catch(function (error) {
                        console.error('Error eliminando el usuario:', error);
                        Swal.fire(
                            'Error',
                            'Hubo un error al eliminar el usuario.',
                            'error'
                        );
                    });
            }
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

<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\sistemaexpediente\resources\views/usuarios.blade.php ENDPATH**/ ?>