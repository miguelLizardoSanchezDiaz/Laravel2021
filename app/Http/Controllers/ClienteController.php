<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Session;
use Illuminate\Support\Facades\Redirect;

class ClienteController extends Controller
{
    public function index(){
    	$clientes=Cliente::get();
    	return view('cliente.listado',compact('clientes'));
    }
    public function create(){
    	return view('cliente.nuevo');
    }
    public function store(Request $request){
    	//AQUI CODIGO PARA GUARDAR
    	$validatedData = $request->validate([
	        'name' => 'required|max:150',
	        'txt_apellido_paterno' => 'required|max:100',
	        'txt_apellido_materno' => 'required|max:100',
	        'txt_dni' => 'required|max:8|unique:wayrurocon.cliente,cli_dni',
	    ]);

    	$cliente=new Cliente;
    	$cliente->cli_nombres=$request->name;
    	$cliente->cli_apellido_paterno=$request->txt_apellido_paterno;
    	$cliente->cli_apellido_materno=$request->txt_apellido_materno;
    	$cliente->cli_sexo=$request->cbo_sexo;
    	$cliente->cli_dni=$request->txt_dni;
    	$cliente->cli_estado=1;
    	
    	if($cliente->save()){
    		return redirect('cliente')->with('status', 'Cliente registrado!');
    	}
    }
}
