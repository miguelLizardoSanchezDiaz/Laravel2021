<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
class ReporteController extends Controller
{
    public function index(){
    	$totalM=Cliente::porcentajesPorSexo('M')->total;
    	$totalF=Cliente::porcentajesPorSexo('F')->total;
    	$total=Cliente::totalClientes()->total;
    	$porcentajeM=($totalM/$total)*100;
    	$porcentajeF=($totalF/$total)*100;
    	return view('reportes.torta',compact('porcentajeF','porcentajeM'));
    }
}
