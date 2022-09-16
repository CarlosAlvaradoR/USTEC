<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create(){
        return view('users.create');
    }

    public function perfil(){
        return view('auth.perfil');
    }

    public function changeUser(Request $request){

        //return $request;
        $this->validate($request,[
            'password_actual'=>'required|min:1',
            'password'=>'required|confirmed'
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
                    return "Las contraseñas no coinciden";
                }
            }
        }
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $userName = $user->name; //Obtiene el nombre del material
        $user->delete();
        $notification = "El usuario $userName se eliminó correctamente";
        //return "Eliminado";
        return redirect()->route("users.index")->with(compact('notification'));
    }
}
