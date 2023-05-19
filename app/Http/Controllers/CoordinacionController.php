<?php

namespace App\Http\Controllers;

use App\Models\Coordinacion;
use App\Models\Direccion;
use App\Models\Equipo;
use App\Methods\Equipment;
use App\Models\Subdireccion;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CoordinacionController extends Controller
{
    public function index()
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Coordinaciones';

        return view('catalogos.coordinacion.index',
            compact('nivel1','nivel2','nivel3'));
    }

    public function getCoordinacion()
    {

        if(request()->ajax())
        {
            $coordinacions=Coordinacion::
            join("direccions", "coordinacions.direccion_id", "=", "direccions.id")
                ->join("subdireccions", "coordinacions.subdireccion_id", "=", "subdireccions.id")
                ->select('coordinacions.id',
                    'subdireccions.nombre as subdireccion',
                    'subdireccions.id as subdireccion_id',
                    'direccions.nombre as direccion',
                    'direccions.id as direccion_id',
                    'coordinacions.nombre as coordinacion')
                ->get();

            return Datatables::of($coordinacions)
                ->addColumn('action', function($coordinacion){
                    return '<a href="#" 
                   class="btn btn-sm btn-clean btn-icon edit"
                    onclick="cargarformulario(3.3,'.$coordinacion->id.',2);" 
                    title="Modificar" >
                     <i class="flaticon-edit-1 text-primary"></i>
                    </a>
                    <a href="#" 
                    class="btn btn-sm btn-clean btn-icon delete"
                    onclick="cargarformulario(3.4,'.$coordinacion->id.',2);"
                    title="Borrar" 
                    id="'.$coordinacion->id.'">
                    <i class="flaticon2-trash text-danger"></i>
                    </a>'; }
                )->make(true);
        }
    }

    public function create()
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Coordinaciones';
        $nivel4='Agregar';

        $direcciones =Direccion::get(['nombre','id']);
        $subdirecciones = Subdireccion::get(['nombre','id']);

        return view('catalogos.coordinacion.create',
            compact('direcciones','nivel1','nivel2','nivel3','nivel4'));
    }

    public function store(Equipment $equipment, Request $request)
    {

        $existe=$equipment->Duplicados($request,"Catalogo Coordinacion");

        if ($existe == 0) {
            $coordinacion = new Coordinacion();
            $coordinacion->direccion_id = $request->direccion_id;
            $coordinacion->subdireccion_id = $request->subdireccion_id;
            $coordinacion->nombre = $request->nombre;
            $coordinacion->slug = Str::slug($request->nombre);
            $coordinacion->save();
        }

        return $existe;
    }

    public function edit(Request $request)
    {

        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Coordinaciones';
        $nivel4='Modificar';


        $direcciones =Direccion::get(['nombre','id']);
        $coordinaciones = Coordinacion::find($request->id);
        $subdirecciones = Subdireccion::where('direccion_id',$coordinaciones->direccion_id)->get(['nombre','id']);
        $coordinacion = $coordinaciones->nombre;
        $id = $coordinaciones->id;
        $subdireccion_id= $coordinaciones->subdireccion_id;

        return view('catalogos.coordinacion.edit',
            compact('direcciones','subdirecciones','coordinaciones','coordinacion','id','subdireccion_id',
                'nivel1','nivel2','nivel3','nivel4'));
    }

    public function update(Request $request)
    {
        $coordinaciones= Coordinacion::findOrFail($request->id);
        $coordinaciones->nombre = $request->nombre;
        $coordinaciones->direccion_id = $request->direccion_id;
        $coordinaciones->subdireccion_id = $request->subdireccion_id;
        $coordinaciones->slug = Str::slug($request->nombre);
        $coordinaciones ->save();

        return response()->json($coordinaciones);
    }

    public function destroy($id)
    {
        $coordinaciones = Coordinacion::findOrFail($id);
        $coordinaciones->delete();

        return response()->json($coordinaciones);
    }

    public function getDestroy(Request $request)
    {

        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Coordinaciones';
        $nivel4='Borrar';

        $direcciones    =Direccion::get(['nombre','id']);
        $subdirecciones =Subdireccion::get(['nombre','id']);
        $coordinaciones =Coordinacion::find($request->id);

        $coordinacion   = $coordinaciones->nombre;
        $id             = $coordinaciones->id;

        $existe=0;
        if ($this->buscaExistencia($id) > 0)
        {
            $existe=1;
        }

        return view('catalogos.coordinacion.delete',
            compact('direcciones','subdirecciones','coordinaciones','coordinacion','id','existe',
                'nivel1','nivel2','nivel3','nivel4'));
    }

    public function buscaExistencia($id)
    {
        $existe=Equipo::where('coordinacions_id',$id)->count();

//        $existe=DB::table('equipos')->where('subdireccion_id',$id)->count();
        return $existe;
    }

    public function getDireccion(){

        $direcciones =Direccion::orderBy('nombre','asc')
            ->get(['nombre','id']);

        $direccion=[];

        foreach($direcciones as $dato)
        {

            array_push($direccion, [
                'id' => $dato->id,
                'nombre' => $dato->nombre,
            ]);

        }


        $status = 400;
        $response = [];

        if( !is_null($direccion) )
        {
            $response = $direccion;
            $status = 200;
        }

        return response()->json( compact('status','response') );

    }

    public function getSubDireccionSeleccion($direccion_id){

        $subdirecciones =Subdireccion::where('direccion_id',$direccion_id)
            ->orderBy('nombre','asc')
            ->get(['nombre','id']);

        $subdireccion=[];

        foreach($subdirecciones as $dato)
        {

            array_push($subdireccion, [
                'id' => $dato->id,
                'nombre' => $dato->nombre,
            ]);

        }


        $status = 400;
        $response = [];

        if( !is_null($subdireccion) )
        {
            $response = $subdireccion;
            $status = 200;
        }

        return response()->json( compact('status','response') );

    }

    public function getCoordinacionSeleccion($direccions_id,$subdireccions_id){

        $coordinacions =Coordinacion
            ::where('direccion_id',$direccions_id)
            ->where('subdireccion_id',$subdireccions_id)
            ->orderBy('nombre','asc')
            ->get(['nombre','id']);

        $es_seleccione='NO';
        $coord=[];

        foreach($coordinacions as $dato)
        {

            if ($es_seleccione == 'NO'){
                array_push($coord, [
                    'id' => $dato->id,
                    'nombre' => $dato->nombre,
                ]);
            }

            if ($dato->nombre == 'Seleccione') {
                $es_seleccione='SI';
            }

        }


        $status = 400;
        $response = [];

        if( !is_null($coord) )
        {
            $response = $coord;
            $status = 200;
        }

        return response()->json( compact('status','response') );

    }

}



