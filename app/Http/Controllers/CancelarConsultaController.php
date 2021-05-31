<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Consulta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CancelarConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Auth::user();
        $consultas = Consulta::Where('id_u',$usuario->id)->get();
        $medicos = User::Where('id_r',2)->get();
        return view('consulta.cancelar-consulta',compact('medicos','consultas'))->with(['usuario' => $usuario]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function eliminar(Request $request)
    {
        $usuario = Auth::user();
        if(Hash::check($request['password'], $usuario->password)){
            $consulta = Consulta::Destroy($request['consulta']);
            return redirect('/cancelar')->with(['message'=>'Consulta cancelada correctamente']);
        }
        else{

            $consultas = Consulta::Where('id_u',$usuario->id)->get();
            $medicos = User::Where('id_r',2)->get();
            return view('consulta.cancelar-consulta',compact('medicos','consultas'))->with(['usuario' => $usuario,'msg' => 'Contraseña Incorrecta']);
        }
    }
}
