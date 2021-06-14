<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultaPagoController extends Controller
{
    public function index(){
        $user = Auth::user();
        $pagos = Consulta::join('users as paciente','consulta.id_u', '=', 'paciente.id')->join('users as doctor','consulta.id_u_r', '=', 'doctor.id')->select('consulta.box as box','paciente.name as nombre','doctor.name as nombreDoc','consulta.fecha as fecha','consulta.hora as hora','consulta.valor as valor','consulta.pagado as pagado','consulta.id as id')->get();
        return view('pago.index',compact('pagos'))->with(['usuario'=> $user]);
    }
    public function edit($id){
        $user = Auth::user();
        $pago = Consulta::findOrFail($id);
        return view('pago.edit',compact('pago'))->with(['usuario'=> $user]);

    }
    public function update(Request $request,$id){
        $request->validate([
            'box'=>'required',
            'fecha'=>'required',
            'hora'=>'required',
            'pagado'=>'required',
        ]);
        $user = Auth::user();
        $consulta = request()->except('_token','_method');
        Consulta::where('id','=',$id)->update($consulta);
        $pago = Consulta::findOrFail($id);
        return view('pago.edit',compact('pago'))->with(['usuario'=> $user]);
    }
}
