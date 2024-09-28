<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Evaluacion;
use App\Models\Expediente;
use App\Models\Inmueble;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use DateTime;
use DateTimeZone;
use Illuminate\Validation\ValidationException;

class ExpedienteController extends Controller
{

    public function newExpediente(){
        return view('nuevo-expediente');
    }


    public function mostrar(){
        return view('lista-expedientes');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // Obtén todos los expedientes
       $expedientes = Expediente::all();

       // Retorna los expedientes en formato JSON
       return response()->json($expedientes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try{
    // dd($request->all());
    $validatedData = $request->validate([
       'razon_social' => 'required|string|max:255',
        'ruc' => 'required|string|max:20',
        'nombre_proyecto' => 'required|string|max:255',
        'proveedor_legal' => 'required|string|max:255',
        'traze_id' => 'required|string|max:50',
        'finalidad' => 'required|string|max:255',
        'funcionario' => 'required|string|max:255',
        'correo_funcionario' => 'required|email|max:255',
        'asistente' => 'required|string|max:255',
       'correo_asistente' => 'required|email|max:255',
        'actividad_actual' => 'required|string|max:255',
        'traze_vinculado' => 'required|string|max:255',
      'partidaPromotor' => 'nullable|string|max:255',
       'sunarp'=>'nullable|string|max:255',
       'repLegal'=> 'nullable|string|max:255',
       'dni_rep_legal'=> 'nullable|string|max:255',
        'aspoderlegal' => 'nullable|string|max:255',
       'correoElectronico1' => 'nullable|email|max:255',
       'dpromotor' => 'nullable|string|max:255',
       'departamentoPromotor' => 'nullable|string|max:255',
       'provinciaPromotor' => 'nullable|string|max:255',
       'distritoPromotor' => 'nullable|string|max:255',
       'poderes' => 'nullable|array',
       'inmuebles.*.partida' => 'nullable|string',
            'inmuebles.*.antecedente' => 'nullable|string',
          'inmuebles.*.direccion' => 'nullable|string',
            'inmuebles.*.departamento' => 'nullable|string',
            'inmuebles.*.provincia' => 'nullable|string',
            'inmuebles.*.DstritoInmueble' => 'nullable|string',
            'inmuebles.*.SunarpInmueble' => 'nullable|string',
            'inmuebles.*.AreaRegistInmueble' => 'nullable|string',
            'inmuebles.*.AsiRegistrlInmueble' => 'nullable|string',
            'inmuebles.*.MunicipalArInmueble' => 'nullable|string',
            'inmuebles.*.AratasacionInmueble' => 'nullable|string',
            'inmuebles.*.cargas' => 'nullable|array',
            'inmuebles.*.gravamenes' => 'nullable|array',
            'inmuebles.*.tpendientes' => 'nullable|array',
            'inmuebles.*.Comercialinpt' => 'nullable|string',
            'inmuebles.*.Tasadorinput' => 'nullable|string',
            'inmuebles.*.InputREPEV' => 'nullable|string',
            'inmuebles.*.InGravamen' => 'nullable|string',
            'inmuebles.*.InstrNotaria' => 'nullable|string',
            'inmuebles.*.DatoPropie' => 'nullable|string',
            'inmuebles.*.DniPropei' => 'nullable|string',
            'inmuebles.*.EstCivil' => 'nullable|string',
            'inmuebles.*.NomConyug' => 'nullable|string',
            'inmuebles.*.Dniconyug' => 'nullable|string',
            'inmuebles.*.DirecPropie' => 'nullable|string',
            'inmuebles.*.Deppropietario' => 'nullable|string',
            'inmuebles.*.Provinciapropie' => 'nullable|string',
            'inmuebles.*.DstritoPropi' => 'nullable|string',
            'inmuebles.*.TitulPropied' => 'nullable|string',
            'inmuebles.*.ValAdqui' => 'nullable|numeric',
            'inmuebles.*.FechaAdqui' => 'nullable|date_format:"d M, Y"',
            'inmuebles.*.Notario' => 'nullable|string',
            'inmuebles.*.AsientoInscripcio' => 'nullable|string',
            'inmuebles.*.CRI' => 'nullable|string',
            'respectoInmueble' => 'nullable|string|max:255',
            'respectoClienteOpera' => 'nullable|string|max:255',
            'respectoMinuComprV' => 'nullable|string|max:255',
            'respectoMinuComprVFutu' => 'nullable|string|max:255',
            'respectoFiador' => 'nullable|string|max:255',
            'DOCUMENTOSRE' => 'nullable|array',
    ]);

/*
    if ($validatedData->fails()) {
        // Redirigir de nuevo con los datos anteriores y los errores de validación
        return redirect()->back()
            ->withErrors($validator)
            ->withInput(); // Esto mantiene los datos ingresados
    }*/


    try {


        $expediente = Expediente::create([
            'razon_social' => $validatedData['razon_social'],
            'ruc' => $validatedData['ruc'],
            'nombre_proyecto' => $validatedData['nombre_proyecto'],
            'proveedor_legal' => $validatedData['proveedor_legal'],
            'traze_id' => $validatedData['traze_id'],
            'finalidad' => $validatedData['finalidad'],
            'funcionario' => $validatedData['funcionario'],
            'correo_funcionario' => $validatedData['correo_funcionario'],
            'asistente' => $validatedData['asistente'],
            'correo_asistente' => $validatedData['correo_asistente'],
            'actividad_actual' => $validatedData['actividad_actual'],
            'traze_vinculado' => $validatedData['traze_vinculado'],
            // Otros campos de expediente
        ]);

        $poderes = isset($validatedData['poderes']) ? json_encode($validatedData['poderes']) : null;
        //dd($poderes);
        $cliente = Cliente::create([
            'partida_promotor' => $validatedData['partidaPromotor'],
            'sunarp' => $validatedData['sunarp'],
            'rep_legal' => $validatedData['repLegal'],
            'dni_rep_legal' => $validatedData['dni_rep_legal'],
            'aspoder_legal' => $validatedData['aspoderlegal'],
            'correo_electronico' => $validatedData['correoElectronico1'],
            'direccion' => $validatedData['dpromotor'],
            'departamento' => $validatedData['departamentoPromotor'],
            'provincia' => $validatedData['provinciaPromotor'],
            'distrito' => $validatedData['distritoPromotor'],
            'poderes' =>  $poderes,
            'traze_id' => $expediente->traze_id, // Si se necesita la relación
            // Otros campos de cliente
        ]);

         // Guardar cada inmueble relacionado con el expediente o cliente
        foreach ($validatedData['inmuebles'] as $inmuebleData) {

            $cargas = isset($inmuebleData['cargas']) ? json_encode($inmuebleData['cargas']) : null;

            $gravamenes = isset($inmuebleData['gravamenes']) ? json_encode($inmuebleData['gravamenes']) : null;

            $tpendientes = isset($inmuebleData['tpendientes']) ? json_encode($inmuebleData['tpendientes']) : null;


            // Si 'FechaAdqui' está presente, convertimos la fecha al formato correcto
$fechaAdquisicion = isset($inmuebleData['FechaAdqui']) ? Carbon::parse($inmuebleData['FechaAdqui'])->format('Y-m-d') : null;


             Inmueble::create([
                'partida' => $inmuebleData['partida'],
                'antecedente' => $inmuebleData['antecedente'],
                'direccion' => $inmuebleData['direccion'],
                'departamento' => $inmuebleData['departamento'],
                'provincia' => $inmuebleData['provincia'],
                'distrito' => $inmuebleData['DstritoInmueble'],
                'sunarp' => $inmuebleData['SunarpInmueble'],
                'area_registral' => $inmuebleData['AreaRegistInmueble'],
                'municipal' => $inmuebleData['MunicipalArInmueble'],
                'tasacion' => $inmuebleData['AratasacionInmueble'],
                'cargas' => $cargas,
                'gravamenes' => $gravamenes,
                'tpendientes' => $tpendientes,
                'valor_comercial' => $inmuebleData['Comercialinpt'],
                'tasador' => $inmuebleData['Tasadorinput'],
                'repev' => $inmuebleData['InputREPEV'],
                'gravamen' => $inmuebleData['InGravamen'],
                'instr_notaria' => $inmuebleData['InstrNotaria'],
                'dato_propietario' => $inmuebleData['DatoPropie'],
                'dni_propietario' => $inmuebleData['DniPropei'],
                'estado_civil' => $inmuebleData['EstCivil'],
                'nombre_conyuge' => $inmuebleData['NomConyug'],
                'dni_conyuge' => $inmuebleData['Dniconyug'],
                'direccion_propietario' => $inmuebleData['DirecPropie'],
                'departamento_propietario' => $inmuebleData['Deppropietario'],
                'provincia_propietario' => $inmuebleData['Provinciapropie'],
                'distrito_propietario' => $inmuebleData['DstritoPropi'],
                'titulo_propiedad' => $inmuebleData['TitulPropied'],
                'valor_adquisicion' => $inmuebleData['ValAdqui'],
                'fecha_adquisicion' => $fechaAdquisicion,
                'notario' => $inmuebleData['Notario'],
                'asiento_inscripcion' => $inmuebleData['AsientoInscripcio'],
                'cri' => $inmuebleData['CRI'],
                'traze_id' => $expediente->traze_id, // Si se necesita la aplicación
            ]);

        }

        $ev = isset($validatedData['DOCUMENTOSRE']) ? json_encode($validatedData['DOCUMENTOSRE']) : null;
        Evaluacion::create([
            'respecto_inmueble' => $validatedData['respectoInmueble'],
            'respecto_cliente_opera' => $validatedData['respectoClienteOpera'],
            'respecto_minu_compr_v' => $validatedData['respectoMinuComprV'],
            'respecto_minu_compr_v_futu' => $validatedData['respectoMinuComprVFutu'],
            'respecto_fiador' => $validatedData['respectoFiador'],
            'documentos_re' => $ev,
            'traze_id' => $expediente->traze_id,
        ]);


        // Devolver una respuesta exitosa
      //  return response()->json(['message' => 'Expediente guardado exitosamente', 'data' => $expediente], 201);
         // Redirigir con mensaje de éxito
    return redirect()->route('nuevo-expediente')->with('success', 'Expediente guardado exitosamente.');
    } catch (\Exception $e) {
        // Manejar excepciones y devolver una respuesta de error
       // return redirect()->route('nuevo-expediente')->with('success', 'Expediente guardado exitosamente.');
        return response()->json(['message' => 'Error al guardar el expediente', 'error' => $e->getMessage()], 500);
    }

   }
   catch (ValidationException  $e) {

   /* return response()->json([
        'message' => 'Error en la validación de datos',
        'errors' => $e->errors() // Esto contiene los errores de validación
    ], 422);*/
    //return redirect()->route('nuevo-expediente')->with('error', 'Error al guardar Expediente.');
    return redirect()->route('nuevo-expediente')->with('error', 'Error al guardar el expediente: ' . $e->getMessage());
   }


     // dd($validatedData);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd($id);
            // Busca el expediente por su ID
           // $expediente = Expediente::find($id);
           $expediente = Expediente::with(['inmuebles', 'cliente', 'evaluacion'])
           ->findOrFail($id);



           // dd($expediente);

            // Si no existe, muestra un error 404
            if (!$expediente) {
                return abort(404, 'Expediente no encontrado');
            }
           //dd($expediente);
            // Retorna la vista de edición con los datos del expediente
            return view('expedientes.editar', compact('expediente'));
    }





    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            //d($id);
           //dd($request->all());

       $expediente = Expediente::with(['inmuebles', 'cliente', 'evaluacion'])
        ->findOrFail($id);


        //dd($expediente);
        $expedienteActu = Expediente::find($id);



            // Si no existe, muestra un error 404
            if (!$expedienteActu) {
                return abort(404, 'Expediente no encontrado');
            }

            // dd($request->all());

            try{



                $validatedData = $request->validate([
                    'razon_social' => 'required|string|max:255',
                    'ruc' => 'required|string|max:20',
                    'nombre_proyecto' => 'required|string|max:255',
                    'proveedor_legal' => 'required|string|max:255',
                    'traze_id' => 'required|string|max:50',
                    'finalidad' => 'required|string|max:255',
                    'funcionario' => 'required|string|max:255',
                    'correo_funcionario' => 'required|email|max:255',
                    'asistente' => 'required|string|max:255',
                    'correo_asistente' => 'required|email|max:255',
                    'actividad_actual' => 'required|string|max:255',
                    'traze_vinculado' => 'required|string|max:255',
                'partidaPromotor' => 'nullable|string|max:255',
                    'sunarp'=>'nullable|string|max:255',
                    'repLegal'=> 'nullable|string|max:255',
                    'aspoderlegal' => 'nullable|string|max:255',
                    'correoElectronico1' => 'nullable|email|max:255',
                    'dpromotor' => 'nullable|string|max:255',
                    'departamentoPromotor' => 'nullable|string|max:255',
                    'provinciaPromotor' => 'nullable|string|max:255',
                    'distritoPromotor' => 'nullable|string|max:255',
                    'poderes' => 'nullable|array',
                    'inmuebles.*.id' => 'nullable',
                    'inmuebles.*.partida' => 'nullable|string',
                        'inmuebles.*.antecedente' => 'nullable|string',
                    'inmuebles.*.direccion' => 'nullable|string',
                        'inmuebles.*.departamento' => 'nullable|string',
                        'inmuebles.*.provincia' => 'nullable|string',
                        'inmuebles.*.DstritoInmueble' => 'nullable|string',
                        'inmuebles.*.SunarpInmueble' => 'nullable|string',
                        'inmuebles.*.AreaRegistInmueble' => 'nullable|string',
                        'inmuebles.*.AsiRegistrlInmueble' => 'nullable|string',
                        'inmuebles.*.MunicipalArInmueble' => 'nullable|string',
                        'inmuebles.*.AratasacionInmueble' => 'nullable|string',
                        'inmuebles.*.cargas' => 'nullable|array',
                        'inmuebles.*.gravamenes' => 'nullable|array',
                        'inmuebles.*.tpendientes' => 'nullable|array',
                        'inmuebles.*.Comercialinpt' => 'nullable|string',
                        'inmuebles.*.Tasadorinput' => 'nullable|string',
                        'inmuebles.*.InputREPEV' => 'nullable|string',
                        'inmuebles.*.InGravamen' => 'nullable|string',
                        'inmuebles.*.InstrNotaria' => 'nullable|string',
                        'inmuebles.*.DatoPropie' => 'nullable|string',
                        'inmuebles.*.DniPropei' => 'nullable|string',
                        'inmuebles.*.EstCivil' => 'nullable|string',
                        'inmuebles.*.NomConyug' => 'nullable|string',
                        'inmuebles.*.Dniconyug' => 'nullable|string',
                        'inmuebles.*.DirecPropie' => 'nullable|string',
                        'inmuebles.*.Deppropietario' => 'nullable|string',
                        'inmuebles.*.Provinciapropie' => 'nullable|string',
                        'inmuebles.*.DstritoPropi' => 'nullable|string',
                        'inmuebles.*.TitulPropied' => 'nullable|string',
                        'inmuebles.*.ValAdqui' => 'nullable|numeric',
                        'inmuebles.*.FechaAdqui' => 'nullable',
                        'inmuebles.*.Notario' => 'nullable|string',
                        'inmuebles.*.AsientoInscripcio' => 'nullable|string',
                        'inmuebles.*.CRI' => 'nullable|string',
                        'respectoInmueble' => 'nullable|string|max:255',
                        'respectoClienteOpera' => 'nullable|string|max:255',
                        'respectoMinuComprV' => 'nullable|string|max:255',
                        'respectoMinuComprVFutu' => 'nullable|string|max:255',
                        'respectoFiador' => 'nullable|string|max:255',
                        'DOCUMENTOSRE' => 'nullable|array',
                ]);

              //  dd($validatedData);
                $expedienteActu -> update([
                    'razon_social' => $validatedData['razon_social'],
                    'ruc' => $validatedData['ruc'],
                    'nombre_proyecto' => $validatedData['nombre_proyecto'],
                    'proveedor_legal' => $validatedData['proveedor_legal'],
                    'traze_id' => $validatedData['traze_id'],
                    'finalidad' => $validatedData['finalidad'],
                    'funcionario' => $validatedData['funcionario'],
                    'correo_funcionario' => $validatedData['correo_funcionario'],
                    'asistente' => $validatedData['asistente'],
                    'correo_asistente' => $validatedData['correo_asistente'],
                    'actividad_actual' => $validatedData['actividad_actual'],
                    'traze_vinculado' => $validatedData['traze_vinculado'],
                    // Otros campos de expediente
                ]);


                $expedienteActu->cliente->update([
                    'partida_promotor' => $validatedData['partidaPromotor'],
                    'sunarp' => $validatedData['sunarp'],
                    'rep_legal' => $validatedData['repLegal'],
                    'aspoder_legal' => $validatedData['aspoderlegal'],
                    'correo_electronico' => $validatedData['correoElectronico1'],
                    'direccion' => $validatedData['dpromotor'],
                    'departamento' => $validatedData['departamentoPromotor'],
                    'provincia' => $validatedData['provinciaPromotor'],
                    'distrito' => $validatedData['distritoPromotor'],
                    'poderes' =>  isset($validatedData['poderes']) ? json_encode($validatedData['poderes']) : $expediente->cliente->poderes,
                    'traze_id' => $expediente->traze_id, // Si se necesita la relación
                ]);


                //Inmuebles
                            // Actualiza los inmuebles existentes o crea nuevos inmuebles
                $inmuebleIds = []; // Para guardar los IDs de los inmuebles actualizados o creados
                foreach ($validatedData['inmuebles'] as $inmuebleData) {
                   // dd($inmuebleData);
                    if (isset($inmuebleData['id'])) {
                        // Actualiza el inmueble existente
                        $inmueble = Inmueble::find($inmuebleData['id']);
                        if ($inmueble) {
                            $inmueble->update([
                                'partida' => $inmuebleData['partida'],
                                'antecedente' => $inmuebleData['antecedente'],
                                'direccion' => $inmuebleData['direccion'],
                                'departamento' => $inmuebleData['departamento'],
                                'provincia' => $inmuebleData['provincia'],
                                'distrito' => $inmuebleData['DstritoInmueble'],
                                'sunarp' => $inmuebleData['SunarpInmueble'],
                                'area_registral' => $inmuebleData['AreaRegistInmueble'],
                                'municipal' => $inmuebleData['MunicipalArInmueble'],
                                'tasacion' => $inmuebleData['AratasacionInmueble'],
                                'cargas' => isset($inmuebleData['cargas']) ? json_encode($inmuebleData['cargas']) : null,
                                'gravamenes' => isset($inmuebleData['gravamenes']) ? json_encode($inmuebleData['gravamenes']) : null,
                                'tpendientes' => isset($inmuebleData['tpendientes']) ? json_encode($inmuebleData['tpendientes']) : null,
                                'valor_comercial' => $inmuebleData['Comercialinpt'],
                                'tasador' => $inmuebleData['Tasadorinput'],
                                'repev' => $inmuebleData['InputREPEV'],
                                'gravamen' => $inmuebleData['InGravamen'],
                                'instr_notaria' => $inmuebleData['InstrNotaria'],
                                'dato_propietario' => $inmuebleData['DatoPropie'],
                                'dni_propietario' => $inmuebleData['DniPropei'],
                                'estado_civil' => $inmuebleData['EstCivil'],
                                'nombre_conyuge' => $inmuebleData['NomConyug'],
                                'dni_conyuge' => $inmuebleData['Dniconyug'],
                                'direccion_propietario' => $inmuebleData['DirecPropie'],
                                'departamento_propietario' => $inmuebleData['Deppropietario'],
                                'provincia_propietario' => $inmuebleData['Provinciapropie'],
                                'distrito_propietario' => $inmuebleData['DstritoPropi'],
                                'titulo_propiedad' => $inmuebleData['TitulPropied'],
                                'valor_adquisicion' => $inmuebleData['ValAdqui'],
                                'fecha_adquisicion' => isset($inmuebleData['FechaAdqui']) ? Carbon::parse($inmuebleData['FechaAdqui'])->format('Y-m-d') : null,
                                'notario' => $inmuebleData['Notario'],
                                'asiento_inscripcion' => $inmuebleData['AsientoInscripcio'],
                                'cri' => $inmuebleData['CRI'],
                                'traze_id' => $expediente->traze_id, // Si se necesita la aplicación



                            ]);
                            $inmuebleIds[] = $inmueble->id;
                        }
                    } else {


                      /*  $cargas = $inmuebleData['cargas'] ?? [];
                        // Crea un nuevo inmueble
                        $newInmueble = $expediente->inmuebles()->create([
                            'partida' => $inmuebleData['partida'],
                            'cargas' => json_encode($cargas),
                            'traze_id' => $expediente->traze_id,

                           /* 'antecedente' => $inmuebleData['antecedente'],
                            'direccion' => $inmuebleData['direccion'],
                            'departamento' => $inmuebleData['departamento'],
                            'provincia' => $inmuebleData['provincia'],
                            'fecha_adquisicion' => isset($inmuebleData['FechaAdqui']) ? Carbon::parse($inmuebleData['FechaAdqui'])->format('Y-m-d') : null,
                        ]);
                        $inmuebleIds[] = $newInmueble->id;*/
                    }
                }

                //Evaluacion
                $expedienteActu->evaluacion->update([
                    'respecto_inmueble' => $validatedData['respectoInmueble'],
                    'respecto_cliente_opera' => $validatedData['respectoClienteOpera'],
                    'respecto_minu_compr_v' => $validatedData['respectoMinuComprV'],
                    'respecto_minu_compr_v_futu' => $validatedData['respectoMinuComprVFutu'],
                    'respecto_fiador' => $validatedData['respectoFiador'],
                    'documentos_re' =>isset($validatedData['DOCUMENTOSRE']) ? json_encode($validatedData['DOCUMENTOSRE']) : $expediente->cliente->documentos_re,
                    'traze_id' => $expediente->traze_id,
                ]);




                 // Redirigir de vuelta con un mensaje de éxito en la sesión
             return redirect()->route('expedientes.edit', ['id' => $id])
                        ->with('success', 'Se actualizó el expediente.');
            } catch (\Exception $e) {
                // Manejar excepciones y devolver una respuesta de error
                if ($request->ajax()) {
                    return response()->json(['message' => 'Error al actualizar el expediente', 'error' => $e->getMessage()], 500);
                }

                // Redirigir con un mensaje de error
                return redirect()->route('expedientes.edit', ['id' => $id])
                                 ->withErrors(['error' => $e->getMessage()]);
            }




        dd($validatedData);

            // Actualiza el expediente con los nuevos datos
            $expediente->update($request->all());

            // Redirige de vuelta a la lista de expedientes con un mensaje de éxito
            return redirect()->route('expedientes.index')->with('success', 'Expediente actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        //public function delete($id)

        $expediente = Expediente::find($id);


        if ($expediente) {
            $expediente->delete();
            return response()->json(['message' => 'Expediente eliminado con éxito.']);
        }

        return response()->json(['message' => 'Expediente no encontrado.'], 404);

    }


    public function Reportepdf($id) {
        // Obtener el expediente por ID
        $expediente = Expediente::with(['inmuebles', 'cliente', 'evaluacion'])
        ->findOrFail($id);

        // dd($expediente);
        // $expediente = Expediente::find($id);

        if (!$expediente) {
            return abort(404, 'Expediente no encontrado');
        }

        // Pasar los datos del expediente a la vista
        $pdf = Pdf::loadView('reporte-expediente', compact('expediente'));

        // Generar el nombre del archivo, utilizando el nombre de la empresa
        $nombreArchivo = 'reporte_' . str_replace(' ', '_', $expediente->nombre_proyecto) . '.pdf';

        // Retornar el PDF para visualizarlo en el navegador o descargarlo
        return $pdf->stream($nombreArchivo); // Para visualizar en el navegador
        // return $pdf->download('reporte-expediente.pdf'); // Para descargar
    }

}
