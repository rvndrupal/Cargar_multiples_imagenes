<?php

namespace App\Http\Controllers;

use App\Foto;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
            $producto=Product::orderBy('id','DESC')->take(1)->pluck('id');
            //dd($producto->all());
            $id=$producto[0]+1;
            
       
            $foto=$request->file('foto');

            //recordar ejecutar comando-> php artisan storage:link

            $img=$foto->store('public');  //loguarda en esta ruta storage/app/public sin cambiar el local
            //    // $url=$foto->store('posts');  //cambiando el local a public
            //    //ejecutar  php artisan storage:link    para que funcione
            $url= Storage::url($img);

            Foto::create([
           'url'=>$url,
           'product_id'=>$id,
            ]);
        
        
    }


    //para editar     

    public function editar(Request $request, $id){
        
           
        
        $foto=$request->file('foto');

         $img=$foto->store('public');  //loguarda en esta rota storage/app/public sin cambiar el local
         //    // $url=$foto->store('posts');  //cambiando el local a public
         //    //ejecutar  php artisan storage:link    para que funcione
         $url= Storage::url($img);

         Foto::create([
        'url'=>$url,
        'product_id'=>$id,
         ]);
   
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function show(Foto $foto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function edit(Foto $foto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Foto $foto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Foto $foto, $id)
    {      
        $foto::destroy($id);
       

        return back()->with('info','Eliminado Correctamente');
    }
}
