<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;




class MainController extends Controller
{
    function index()
    {
        return view('login');
    }


    function validarusuario(Request $request)
    {
        $this->validate($request, [
            'usuario'   =>  'required',
            'password'  => 'required|alphaNum|max:8'
        ]);

        $user_data = array(
            'usuario'  => $request->get('usuario'),
            'password' => $request->get('password')
        );
        $usuario = $request->get('usuario');
        $contra = $request->get('password');

        echo "<script>console.log( 'Debug Objects: " . $usuario . "' );</script>";



        if(Auth::attempt($user_data))
        {
            return redirect('/usuariovalido');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }

    }

    function usuariovalido()
    {
        return view('usuariovalido');
    }

    function salir()
    {
        Auth::logout();
        return redirect('/');
    }
}
