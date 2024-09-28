@extends("layouts.master")
@section('title')
    @lang('translation.crear-facturacion')
@endsection
@section('title') Page Title @endsection
@section('css')
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
        <div class="row">
        <h3 class="col-md-8 mb-3">FACTURACIÓN</h3>
        <h4 class="card-title mb-4 flex-grow-1">Ingresar los datos verificados para la correcta elaboración del Informe para garantía</h4>

        </div>

        <div class="card">
            <div class="card-body">
                <!-- Nav tabs -->

      <form id="multiStepForm" action="{{ route('facturacion.store') }}" method="POST">
            @csrf

                <!--    <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                    <li class="nav-item waves-effect waves-light">
                            <a class="nav-link active" data-bs-toggle="tab" href="#expediente" role="tab">
                                FACTURACIÓN
                        </a>
                    </li>



                </ul>-->
                <!-- Tab panes -->
                <div class="tab-content text-muted">
                    <div class="tab-pane active" id="expediente" role="tabpanel">


                        <form id="expedienteForm">



                            <div class="col-xxl-12 col-md-12 mb-2">
                            <div class="col-lg-12">
                                <label for="tipoFac" class="form-label">Tipo</label>
                                <select style="    border-radius: 0px !important;" class="form-select rounded-pill mb-3" id="tipoFac" name="tipoFac" value="" aria-label="Default select example" onchange="cambiarProvincias()">
                                    <option selected>Ingresar dato</option>
                                    <option value="Negocios">Negocios</option>
                                    <option value="Empresa">Empresa</option>
                                    <option value="Corporativo">Corporativo</option>

                                </select>
                            </div>
                            </div>
                            <div class="col-xxl-12 col-md-12 mb-2">
                                <div>
                                <label for="fecha-ingreso" class="form-label">Fecha de Ingreso</label>
                                <input type="text" class="form-control flatpickr-input active" id="fecha-ingreso" data-provider="flatpickr" data-date-format="d M, Y" name="fecha-ingreso" value="" readonly="readonly">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12 mb-2">
                                <div>
                                    <label for="nroFactura" class="form-label">Nro Factura</label>
                                    <input type="text" class="form-control" id="nroFactura" name="nroFactura" value="">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12 mb-2">
                                <div>
                                    <label for="montoFactura" class="form-label">Monto de Factura</label>
                                    <input type="text" class="form-control" id="montoFactura" name="montoFactura" value="">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12 mb-2">
                                <div>
                                    <label for="trazeId" class="form-label">Trazer ID</label>
                                    <select class="form-control" id="trazeId" name="traze_id">
                                    <option value="">Seleccione un Trazer ID</option> <!-- Opción por defecto -->
                                    @foreach($traerIds as $id => $trazerId)
                                        <option value="{{ $id }}">{{ $trazerId }}</option>
                                    @endforeach
                                     </select>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="Detraccopm" class="form-label">Detracción                                    </label>
                                    <input type="text" class="form-control" id="Detraccopm" name="Detraccopm" value="">
                                </div>
                            </div>




                         <!--   <div class="row" style="text-align: center;">
                                <div class="col-xxl-12 col-md-12">
                                    <button type="button" class="btn btn-success waves-effect waves-light" id="submitButton">GRABAR EXPEDIENTE</button>
                                </div>
                            </div>-->

                    </div>







                    <div class="row" style="text-align: center;">
                        <div class="col-xxl-12 col-md-12">
                    <button type="submit" class="btn btn-success mt-3">GUARDAR</button>
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

<!-- Mostrar mensaje de éxito si existe -->
@if(session('success'))
<script>

flatpickr("#fecha-ingreso", {
    dateFormat: "Y-m-d",  // Formato de la fecha como Año-Mes-Día
    locale: "es"  // Establecer el idioma a español
});


    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            title: 'Éxito',
            text: "{{ session('success') }}",
            icon: 'success'
        });
    });
</script>
@endif



    <script>


document.addEventListener('DOMContentLoaded', function() {
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: '¡Éxito!',
                text: '{{ session('success') }}',
                confirmButtonText: 'OK'
            });
        @endif
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
    var userRole = @json(auth()->user()->getRoleNames());

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



@endsection
@section('content')
<!-- your page script here -->


@endsection


@section('script')
    <script src="{{ URL::asset('build/libs/prismjs/prism.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
