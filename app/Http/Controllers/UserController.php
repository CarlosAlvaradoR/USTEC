<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;
class UserController extends Controller
{
    //
    public function index(){
        /*$users = User::all();
        return view('users.index', compact('users'));*/
    }

    public function create(){
        $roles = Roles::where('id','!=',1)->get();
        return view('users.create', compact('roles'));
    }


    public function guardarUsuario(Request $request) {
        //return $request;
        $rules= [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'name' => 'required|string|max:255',
            'password'=>'required|confirmed|min:8',
            'rol' => 'required|numeric|min:2|max:4'
        ];

        $messages=[
            'name.required' => 'El nombre del usuario es obligatorio.',
            'name.string' => 'El nombre del usuario deben de ser caracteres válidos.',
            'name.max' => 'El nombre debe de tener a lo mucho 255 caracteres.',
            'rol.required' => 'Es necesario seleccionar una opción del rol',
            'rol.string' => 'Necesita seleccionar una opción válida',
            'rol.min:2' => 'Por favor seleccione una opción válida'
        ];

        $this->validate($request, $rules, $messages);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rol_id' => $request->rol
        ]);

        $notification='Usuario registrado correctamente';
        return redirect()->route('users.create')->with(compact('notification'));
    }


    public function perfil(){
        return view('auth.perfil');
    }

    public function changeUser(Request $request){

        //return $request;
        $this->validate($request,[
            'password_actual'=>'required|min:8',
            'password'=>'required|confirmed|min:8'
        ]);

        $user = Auth::user(); //Instancia
        $userId=$user->id;
        $userEmail=$user->email;
        $userPassword=$user->password;
        
        if ($request->password_actual != "") {
            $NuevoPassword=$request->password;
            $confirmPassword = $request->password_confirmation;
            
            //Verifico si la clave actual es igual a la del usuario en sesión
            if (Hash::check($request->password_actual, $userPassword)) {
                //Valido que tanto el 1 como el 2 sean iguales
                if ($NuevoPassword == $confirmPassword) {
                    //Valido que la clave no sea menor a 6 digitos
                    $user->password = Hash::make($request->password);
                    $sqlBD = DB::table('users')
                        ->where('id', $user->id)
                        ->update(['password' => $user->password]);
                    $notificationPassword="Contraseña actualizada correctamente";
                    return redirect()->route('perfil')->with(compact('notificationPassword'));
                        
                }else{
                    $notificationError="Las contraseña nueva y la confirmación no coinciden";
                    return redirect()->route('perfil')->with(compact('notificationError'));
                }
            }else {
                $notificationError="Su clave actual no coincide con nuestros registros";
                return redirect()->route('perfil')->with(compact('notificationError'));
            }
        }else{
            $notificationError="El Password actual no puede ser vacío";
            return redirect()->route('perfil')->with(compact('notificationError'));
        }
    }

    public function edit($id){
        $user=User::findOrFail($id);
        if ($user->rol_id == 1) {
            $notification_error = "No se puede editar la información de un usuario con un rol Administrador";
            return redirect()->route("users.index")->with(compact('notification_error'));
        }
        $roles = Roles::where('id','!=',1)->get();
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id){
        //return $request;
        $this->validate($request,[
            'name'=>'required|min:3',
            'email'=>'required|string|email|unique:users,email,'.$id,
            'rol' => 'required|numeric|min:2|max:4'
        ]);
        
        $user= User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->rol_id = $request->rol;

        $user->save();
        $notification='Información de usuario actualizada correctamente';
        return redirect()->route('users.index')->with(compact('notification'));
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        
        if ($user->rol_id == 1) {
            $notification_error = "El usuario es de tipo de Administrador y no se le puede inhabilitar";
            return redirect()->route("users.index")->with(compact('notification_error'));
        }

        if ($user->status == 1) { //El usuario está activo
            $user->status= 0;
            $mensaje ="El usuario $user->name se deshabilitó correctamente";
        }else {
            $user->status = 1;
            $mensaje ="El usuario $user->name se habilitó correctamente";
        }
        
        $user->save();
        
        $notification = $mensaje;
        //return "Eliminado";
        return redirect()->route("users.index")->with(compact('notification'));
    }
}
