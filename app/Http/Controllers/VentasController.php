<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Mike42\Escpos\PrintConnectors\NetworkPrintConnector;
use Mike42\Escpos\Printer;
use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

class VentasController extends Controller
{

    public function ticket(Request $request)
    {
        echo $_GET['id'];
        $venta = Factura::join("detallefacturas", "detallefacturas.factura_id", "=", "facturas.id")
                ->join("clientes", "facturas.cliente_id", "=", "clientes.id")
                ->join("consumibles","detallefacturas.consumible_id", "=", "codigo")
                ->select('facturas.*', 'detallefacturas.*','consumibles.*','clientes.id','clientes.documento','clientes.correo_electronico','clientes.nombre as nombres','clientes.apellido',)
                ->where('facturas.id',$request->id)
                ->get();    
        //$venta = Venta::findOrFail($request->get("id"));
        $pdf=PDF::loadView('ticket.pdf',['ventas'=>$venta]);
        return $pdf->stream();
        //return redirect()->back()->with("mensaje", "Ticket impreso");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventasConTotales = Factura::join("detallefacturas", "detallefacturas.factura_id", "=", "facturas.id")
            ->join("clientes", "facturas.cliente_id", "=", "clientes.id")
            ->select("facturas.*","clientes.documento","clientes.nombre as nombres","clientes.apellido as apellidos",)
            ->get();
        return view("ventas.ventas_index", ["ventas" => $ventasConTotales,]);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Venta $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        $total = 0;
        foreach ($venta->productos as $producto) {
            $total += $producto->cantidad * $producto->precio;
        }
        return view("ventas.ventas_show", [
            "venta" => $venta,
            "total" => $total,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Venta $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Venta $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Venta $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        $venta->delete();
        return redirect()->route("ventas.index")
            ->with("mensaje", "Venta eliminada");
    }
}
