<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;

class ComentarioController extends Controller{
    
    public function show ($id){
    	$coment=Comentario::where('idmovie', $id)->get();
    	return response()->json(['comentario'=>$coment]);
    }
}
