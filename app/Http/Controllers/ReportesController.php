<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use PDF;

class ReportesController extends Controller
{
    //
    public function index()
    {        
        return view('reportes.index');
    }

    public function show($id){
        return view('reportes.buscar');
    }
    public function generar(Request $request){
        $fechaini=$request["fechaini"];
        $fechafin=$request["fechafin"];
        $venta = Venta::select('ventas.*','clientes.id','clientes.nombre')
                ->join('clientes','ventas.id_cliente','=','clientes.id')
                ->whereBetween('fecha',$fechaini and $fechafin)
                ->get();
        //$venta = Venta::findOrFail($request->get("id"));
        $pdf=PDF::loadView('ticket.reporte',['ventas'=>$venta]);
        return $pdf->stream();
    }
}
