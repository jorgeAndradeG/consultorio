<?php

namespace App\Http\Controllers;

use App\Models\Ayuda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerAyudaController extends Controller
{
    public function index(){
        $user =  Auth::user();
        $ayudas = Ayuda::join('users', function ( $join) { 
            $join->on('ayuda.id_u_r', '=', 'users.id');
        })->select('ayuda.id as id','ayuda.motivo as motivo','users.name as name','ayuda.created_at as  created_at','users.email as email','users.telefono  as telefono')->paginate(5);
        return view('nuevousuario.ver-ayuda',compact('ayudas'))->with(['usuario' => $user]);
    }
    
}
