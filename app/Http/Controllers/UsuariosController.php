<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

// ------------------------------------CRUD--------------------------------------------------
class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            //Capturo todos los datos de la base de datos
        $usuarios = Usuario::all();
        return view('usuarios.index')->with('usuarios',$usuarios); //with a donde mando y qué mando, 'usuarios' para usarlo en foreach y mostrar tabla
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();


        if(empty($request->get('nombre')) || empty($request->get('numeroDocumento')) || empty($request->get('peso')) || empty($request->get('talla'))){
            echo'<script type="text/javascript">
            alert("Debes de ingresar todos los campos");
            window.location.href="/usuarios/create";
                </script>';
        }else if(!is_numeric($request->get('numeroDocumento'))){
            echo'<script type="text/javascript">
            alert("El número de identificación solo debe de contener números.");
            window.location.href="/usuarios/create";
                </script>';
        }else{
            // Capturando info del formulario
        $usuario->nombre = $request->get('nombre');
        $usuario->tipoDocumento = $request->get('tipoDocumento');
        $usuario->numeroDocumento = $request->get('numeroDocumento');
        $usuario->fechaNacimiento = $request->get('fechaNacimiento');
        $usuario->peso = $request->get('peso');
        $usuario->talla = $request->get('talla');
        // Guardando la info
        $usuario->save();
        return redirect('/usuarios');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.edit')->with('usuario',$usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);

        if(empty($request->get('nombre')) || empty($request->get('numeroDocumento')) || empty($request->get('peso')) || empty($request->get('talla'))){
            echo'<script type="text/javascript">
            alert("Debes de ingresar todos los campos");
            window.location.href="/usuarios";
                </script>';
        }else if(!is_numeric($request->get('numeroDocumento'))){
            echo'<script type="text/javascript">
            alert("El número de identificación solo debe de contener números.");
            window.location.href="/usuarios";
                </script>';
        }else{
            // Capturando info del formulario
        $usuario->nombre = $request->get('nombre');
        $usuario->tipoDocumento = $request->get('tipoDocumento');
        $usuario->numeroDocumento = $request->get('numeroDocumento');
        $usuario->fechaNacimiento = $request->get('fechaNacimiento');
        $usuario->peso = $request->get('peso');
        $usuario->talla = $request->get('talla');
        // Guardando la info
        $usuario->save();
        return redirect('/usuarios');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Elimino el usuario
        $usuario = Usuario::find($id);
        $usuario->delete();

        return redirect('/usuarios'); //Al ser solo usuarios me redirecciona al index de la carpeta usuarios
    }
}
