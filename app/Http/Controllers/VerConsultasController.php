<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VerConsultasController extends Controller
{
    public function index(){
        $usuario = Auth::user();
        $consultas = Consulta::where('consulta.id_u_r',$usuario->id)
        ->join('users', function ( $join) { 
            $join->on('consulta.id_u', '=', 'users.id');
        })->select('consulta.box as box','consulta.patologia as patologia','consulta.hora as hora','consulta.valor as valor','users.name as name')->get();
        //dd( $consultas);
        return view('consulta.ver-consulta',compact('consultas'))->with(['usuario' => $usuario]);
    }
   
    
}
