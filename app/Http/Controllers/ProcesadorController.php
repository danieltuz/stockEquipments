<?php

namespace App\Http\Controllers;

use App\Methods\Equipment;
use App\Models\Procesador;
use App\Models\Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;


class ProcesadorController extends Controller
{
    public function index()
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Procesadores';

        return view('catalogos.procesador.index',
            compact('nivel1','nivel2','nivel3'));
    }

    public function getProcesador()
    {
        if(request()->ajax())
        {

            $procesadors=Procesador::select('id','nombre','socket')
                ->orderBy('nombre')
                ->get();
            return DataTables::of($procesadors)
                ->addColumn('action', function($procesador){
                    return '<a href="#"
                    class="btn btn-sm btn-clean btn-icon edit" 
                    onclick="cargarformulario(9.3,'.$procesador->id.',2);" 
                    title="Modificar" >
                    <i class="flaticon-edit-1 text-primary"></i>
                    </a>
                    <a href="#" 
                    class="btn btn-sm btn-clean btn-icon delete"
                    onclick="cargarformulario(9.4,'.$procesador->id.',2);"
                    title="Borrar" 
                    id="'.$procesador->id.'">
                    <i class="flaticon2-trash text-danger"></i>
                    </a>'; }
                )->make(true);
        }
    }

    public function getProc(){

        $procesadores=Procesador::select('id','nombre')
            ->orderBy('nombre','asc')
            ->get();


        $status = 400;
        $response = [];

        if( !is_null($procesadores) )
        {
            $response = $procesadores;
            $status = 200;
        }

        return response()->json( compact('status','response') );

    }

    public function getSocket(){

        $procesadores=Procesador::select('socket')
            ->orderBy('socket','asc')
            ->distinct()
            ->get();

        $status = 400;
        $response = [];

        if( !is_null($procesadores) )
        {
            $response = $procesadores;
            $status = 200;
        }

        return response()->json( compact('status','response') );

    }

    public function create()
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Procesadores';
        $nivel4='Agregar';

        return view('catalogos.procesador.create',
            compact('nivel1','nivel2','nivel3','nivel4'));
    }

    public function store(Equipment $equipment, Request $request)
    {

        $existe=$equipment->Duplicados($request,"Catalogo Procesadores");

        if ($existe == 0){
            $procesadores = new Procesador();
            $procesadores->nombre = $request->nombre;
            $procesadores->socket = $request->socket;
            $procesadores->slug = Str::slug($request->nombre);
            $procesadores->save();
        }

        return $existe;
    }

    public function edit(Request $request)
    {

        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Procesadores';
        $nivel4='Modificar';

        $procesadores =Procesador::find($request->id);

        $procesador= $procesadores->nombre;
        $socket= $procesadores->socket;
        $id = $procesadores->id;

        return view('catalogos.procesador.edit',
            compact('procesador','socket','id','nivel1','nivel2','nivel3','nivel4'));
    }

    public function update(Request $request)
    {
        $procesadores= Procesador::findOrFail($request->id);
        $procesadores->nombre = $request->nombre;
        $procesadores->socket = $request->socket;
        $procesadores->slug = Str::slug($request->nombre);
        $procesadores->save();

        return response()->json($procesadores);

    }

    public function getDestroy(Request $request)
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Procesadores';
        $nivel4='Borrar';

        $procesadores=Procesador::find($request->id);

        $procesador= $procesadores->nombre;
        $socket= $procesadores->nombre;
        $id = $procesadores->id;

        $existe=0;
        if ($this->buscaExistencia($id) > 0)
        {
            $existe=1;
        }

        return view('catalogos.procesador.delete',
            compact('procesador','socket','id','existe','nivel1','nivel2','nivel3','nivel4'));
    }

    public function destroy($id)
    {
        $procesadores= Procesador::findOrFail($id);
        $procesadores->delete();

        return response()->json($procesadores);
    }

    public function buscaExistencia($id)
    {
        $existe=Equipo::where('procesadors_id',$id)->count();
        return $existe;
    }
}
