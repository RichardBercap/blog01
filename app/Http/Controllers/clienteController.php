<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\clientes;
use Illuminate\Support\Facades\Storage;

class clienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes=clientes::all(); 
        return json_decode($clientes);
    }
    public function create()
    {
        return view("backend.agregarCliente");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         clientes::create([
            'nombres'=>$request["nombres"],
            'ap'=>$request["ap"],
            'am'=>$request["am"],
            'ci'=>$request["ci"],
            'cel'=>$request["cel"],
            'direccion'=>$request["direccion"],
            'foto'=>$request["foto"],
        ]);
         //Storage::disk('local')->put('foto', $request=>['foto']);
        //Storage::put('foto', $request->['foto']);
        return redirect('/usuario')->with('message','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = clientes::find($id);

        if(is_null($cliente))
        {
            return "El cliente con el id: ".$id." no esta en la base de datos"; 
        }else{
                
            return $cliente;    
        } 

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "No se puede elimar usuarios";
    }
}
