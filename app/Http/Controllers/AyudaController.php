<?php

namespace App\Http\Controllers;

use App\Models\Ayuda;
use App\Models\Pregunta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AyudaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $preguntas = Pregunta::all();
        return view('consulta.ayuda-consulta',compact(['preguntas','user']))->with(['usuario' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $ayudas = Ayuda::Where('id_u_r',$user->id)->get();
        foreach($ayudas as $ayuda){
            if($ayuda->id_u_r == $user->id && $ayuda->motivo == $request->motivo){
                return redirect()->back()-> with(['Emessage'=>'Usted ya solicitó esta ayuda.','usuario' => $user]);
            }
        }
        $ayuda =Ayuda::create([
            'motivo'=>$request->motivo,
            'id_u_r'=>$user->id
        ]);
        return redirect()->back()-> with(['message'=>'Correcto','usuario' => $user]);
        /*
        $request =request()->all();
        return response()->json($request);*/

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
}
