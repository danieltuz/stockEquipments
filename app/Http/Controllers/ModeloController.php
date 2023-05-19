<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Methods\Equipment;
use App\Models\Modelo;
use App\Models\Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;


class ModeloController extends Controller
{
    public function index()
    {

        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Modelos';

        return view('catalogos.modelo.index',
            compact('nivel1','nivel2','nivel3'));

    }

    public function getModelo()
    {

        if(request()->ajax())
        {
            $modelos=Modelo::join('marcas','marcas.id','modelos.marcas_id')
                ->select('marcas.id as marcas_id',
                    'modelos.id',
                    'modelos.nombre',
                    'modelos.equipo',
                    'marcas.nombre as marca')
                ->orderBy('marcas.nombre','asc')
                ->orderBy('modelos.nombre','asc')
                ->get();
            return DataTables::of($modelos)
                ->addColumn('action', function($modelo){
                    return '<a href="#" 
                    class="btn btn-sm btn-clean btn-icon edit" 
                    onclick="cargarformulario(7.3,'.$modelo->id.',2);" 
                    title="Modificar" >
                    <i class="flaticon-edit-1 text-primary"></i>
                    </a>
                        <a href="#" 
                        class="btn btn-sm btn-clean btn-icon delete"
                        onclick="cargarformulario(7.4,'.$modelo->id.',2);"  
                        title="Borrar" 
                        id="'.$modelo->id.'">
                        <i class="flaticon2-trash text-danger"></i>
                        </a>'; }
                )->make(true);
        }
    }

    public function getModl($marcas_id){


        $marcas=Modelo::join('marcas','marcas.id','modelos.marcas_id')
            ->where('marcas.id',$marcas_id)
            ->select('modelos.id','modelos.nombre')
            ->orderBy('modelos.nombre','asc')
            ->get();

        $markas=[];

        foreach($marcas as $dato)
        {

            array_push($markas, [
                'id' => $dato->id,
                'nombre' => $dato->nombre,
            ]);

        }


        $status = 400;
        $response = [];

        if( !is_null($markas) )
        {
            $response = $markas;
            $status = 200;
        }

        return response()->json( compact('status','response') );

    }

    public function getMarca(){


        $marcas=Modelo::join('marcas','marcas.id','modelos.marcas_id')
            ->select('marcas.id','marcas.nombre')
            ->orderBy('marcas.nombre','asc')
            ->distinct()
            ->get();

        $markas=[];

        foreach($marcas as $dato)
        {

            array_push($markas, [
                'id' => $dato->id,
                'nombre' => $dato->nombre,
            ]);

        }


        $status = 400;
        $response = [];

        if( !is_null($markas) )
        {
            $response = $markas;
            $status = 200;
        }

        return response()->json( compact('status','response') );

    }

    public function modelsCpuDisplay($tipoEquipo){

        $modelos=Modelo::join('marcas','marcas.id','modelos.marcas_id')
            ->select('marcas.id','marcas.nombre')
            ->where('modelos.equipo',$tipoEquipo)
            ->orderBy('marcas.nombre','asc')
            ->orderBy('marcas.id','asc')
            ->distinct()
            ->get();

        $status = 400;
        $response = [];

        if( !is_null($modelos) )
        {
            $response = $modelos;
            $status = 200;
        }

        return response()->json( compact('status','response') );


    }

    public function create()
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Modelos';
        $nivel4='Agregar';

        $marcas = Marca::orderBy('nombre','asc')->get(['nombre','id']);

        return view('catalogos.modelo.create',
            compact('marcas','nivel1','nivel2','nivel3','nivel4'));
    }

    public function store(Equipment $equipment, Request $request)
    {

        $existe=$equipment->Duplicados($request,"Catalogo Modelos");

        if ($existe == 0) {
            $modelos = new Modelo();
            $modelos->nombre = $request->nombre;
            $modelos->equipo = $request->equipo;
            $modelos->marcas_id = $request->marcas_id;
            $modelos->slug = Str::slug($request->nombre);
            $modelos->save();
        }
        return $existe;
    }

    public function edit(Request $request)
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Modelos';
        $nivel4='Modificar';

        $modelos=Modelo::find($request->id);
        $marcas =Marca::orderby('nombre','asc')->get(['nombre','id']);

        $modelo = $modelos->nombre;
        $equipo = $modelos->equipo;
        $id = $modelos->id;

        return view('catalogos.modelo.edit',
            compact('modelo','id','equipo','marcas','modelos','nivel1','nivel2','nivel3','nivel4'));
    }

    public function update(Request $request)
    {
        $modelos= Modelo::findOrFail($request->id);
        $modelos->nombre    = $request->nombre;
        $modelos->equipo    = $request->equipo;
        $modelos->marcas_id = $request->marcas_id;
        $modelos->slug = Str::slug($request->nombre);
        $modelos->save();

        return response()->json($modelos);

    }

    public function getDestroy(Request $request)
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Modelos';
        $nivel4='Borrar';

        $modelos=Modelo::find($request->id);
        $marcas =Marca::orderby('nombre','asc')->get(['nombre','id']);

        $modelo = $modelos->nombre;
        $equipo = $modelos->equipo;
        $id = $modelos->id;

        $existe=0;
        if ($this->buscaExistencia($id) > 0)
        {
            $existe=1;
        }

        return view('catalogos.modelo.delete',
            compact('modelo','id','existe','equipo','marcas','modelos','nivel1','nivel2','nivel3','nivel4'));
    }

    public function destroy($id)
    {
        $modelos= Modelo::findOrFail($id);
        $modelos->delete();

        return response()->json($modelos);
    }

    public function buscaExistencia($id)
    {
        $existe=Equipo::where('modelos_id',$id)->count();
        return $existe;
    }

}
