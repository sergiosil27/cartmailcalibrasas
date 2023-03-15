<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function nosotros(){
        return view("nosotros");
    }
    
    public function menu(){

        return view("cart");
    }

    public function reservas(){
        return view('reservas');
    }

    public function shop(){

        $articulos=Articulo::all();
        $categorias=Categoria::all();
        return view("shop",['articulos'=>$articulos,'categorias'=>$categorias]);
    }

    public function shop_single($id){

        $articulos = Articulo::Find($id);
        return view('shop_single',['articulos'=>$articulos]);
    }
    
    public function mision_vision(){
        return view('mision-vision');
    }
    public function servicio(){
        return view('servicios');
    }
    public function info(){
        return view('info');
    }
}
