<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //return $request;
        /*$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'rol' => ['required','integer','min:2'],
        ]);*/
        
        $rules= [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'name' => 'required|string|max:255',
            'rol' => 'required|integer|min:2'
        ];

        $messages=[
            'name.required' => 'El nombre de la especialidad es obligatorio.',
            'name.max' => 'El nombre debe de tener a lo mucho 255 caracteres.',
            'rol.required' => 'Es necesario seleccionar una opción del rol',
            'rol.integer' => 'Necesita seleccionar una opción válida',
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

        //event(new Registered($user));

        //Auth::login($user);

        //return redirect(RouteServiceProvider::HOME);
    }
}
