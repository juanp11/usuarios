<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller{

    public function index($pagina = 1)
    {
        $titulo = "Usuarios";
        $usuarios = DB::table('usuarios')->get();
        //var_dump($usuarios);die();
        return view('usuarios.index',[
            'titulo'=>$titulo,
            'pagina'=>$pagina,
            'usuarios'=>$usuarios
        ]);
    }

    public function add()
    {
        $titulo = "Agregar Usuario";

        return view('usuarios.add',[
            'titulo'=>$titulo
        ]);

    }

    public function save(Request $request)
    {
        // var_dump($request->input());die();
        $usuario = DB::table('usuarios')->insert(array(
            'nombre' => $request->input('nombre'),
            'apellidos' => $request->input('apellidos'),
            'telefono' => $request->input('telefono'),
            'correo' => $request->input('correo'),
            'fecha_nacimiento' => $request->input('fechanacimiento')
        ));

        return redirect()->route('usuarios.index');
    }

    public function edit($id)
    {
        //var_dump($id);die();
        $titulo = "Editar Usuario";
        $usuario = DB::table('usuarios')->where('id',$id)->get();
        //var_dump($usuario);die();
        return view('usuarios.edit',[
            'titulo'=>$titulo,
            'usuario'=>$usuario
        ]);
    }

    public function editsave(Request $request)
    {
        //var_dump($request->input());die();
        $id = $request->input('id');
        //var_dump($id);die();
        $editUsuario = DB::table('usuarios')->where('id',$id)->update(array(
            'nombre' => $request->input('nombre'),
            'apellidos' => $request->input('apellidos'),
            'telefono' => $request->input('telefono'),
            'correo' => $request->input('correo'),
            'fecha_nacimiento' => $request->input('fechanacimiento')
        ));
        return redirect()->route('usuarios.index')->with('status','Usuario Editado con exito');
    }

    public function delete($id)
    {
        //var_dump($id);die();
        $deleteUsuario = DB::table('usuarios')->where('id',$id)->delete();
        return redirect()->route('usuarios.index')->with('status','Usuario Eliminado con exito');
    }

}
