<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Consulta;
use App\Models\Especialidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $especialidades = Especialidad::all();
        $medicos = User::Where('id_r',2)->get();
        return view('consulta.agendar-consulta',compact('especialidades','medicos'))->with(['usuario' => $user,'msg'=>'Consulta Creada correctamente']);
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

        $numeroBox = rand(1,25);
        $letrasBoxArray = str_split("abcdefg");
        $letraBox = $letrasBoxArray[0];

        $user = Auth::user();
        Consulta::create([
            "hora" => $request['hora'],
            "valor" => $request['precioConsulta'],
            "id_u" => $user->id,
            "id_u_r" => $request['medico'],
            "box" => $letraBox . strval($numeroBox),
        ]);
        return redirect('/homeLogin')->with(['msg' => 'Ya agendaste tu hora!']);
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
                
    }
}
