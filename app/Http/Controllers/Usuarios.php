<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Usuarios extends Controller
{
    public function index(){
        return view('usuarios');
    }

    public function createVista(){
        return view('crear-usuario');
    }


    public function store(Request $request)
{
    // Validar los datos
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6',
        'role' => 'required|string',
        
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);
    }

    // Crear el usuario
    $user = User::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => Hash::make($request->input('password')),
    ]);

    // Asignar rol
    $user->assignRole($request->input('role'));

    // Devolver la respuesta
    return response()->json($user, 201);
}



    public function mostrarData(){

        // Obtener usuarios con sus roles
        $usuarios = User::with('roles')->get()->map(function ($usuario) {
            // Obtener el primer rol del usuario
            $usuario->role = $usuario->roles->first() ? $usuario->roles->first()->name : 'No asignado';
            return $usuario;
        });

        return response()->json($usuarios);
    }


     // Método para mostrar los datos del usuario a editar
     public function edit($id)
        {
            $user = User::with('roles')->findOrFail($id); // Asegúrate de que el usuario con el ID existe
            return response()->json($user); // Retorna los datos del usuario como JSON
        }
 
     // Método para actualizar los datos del usuario
     public function update(Request $request, $id)
     {
         // Validar los datos del formulario
         $validated = $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|email|unique:users,email,' . $id,
             'role' => 'required|string', // Asegúrate de que el rol también esté presente
         ]);
 
         // Encuentra el usuario
         $user = User::findOrFail($id);
 
         // Actualizar los campos del usuario
         $user->name = $request->name;
         $user->email = $request->email;
         $user->save();
 
         // Asignar el rol al usuario
         $user->syncRoles([$request->role]);
 
         return response()->json(['message' => 'Usuario actualizado correctamente.']);
     }


     public function destroy($id)
        {
            $user = User::find($id);
            
            if (!$user) {
                return response()->json(['error' => 'Usuario no encontrado'], 404);
            }

            // Eliminar el usuario
            $user->delete();

            return response()->json(['message' => 'Usuario eliminado correctamente'], 200);
        }
}
