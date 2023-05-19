<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use App\Methods\Equipment;
use App\Models\Subdireccion;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;


class SubdireccionController extends Controller
{
    public function index()
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Subdirecciones';

        return view('catalogos.subdireccion.index',
            compact('nivel1','nivel2','nivel3'));
    }

    public function getSubDireccion()
    {

        if(request()->ajax())
        {
            $subdireccions=Subdireccion::
            join("direccions", "subdireccions.direccion_id", "=", "direccions.id")
                ->select('subdireccions.id',
                    'direccions.id as direccion_id',
                    'direccions.nombre as direccion',
                    'subdireccions.nombre as subdireccion')
                ->get();

            return Datatables::of($subdireccions)
                ->addColumn('action', function($subdireccion){
                    return '<a href="#" 
                    class="btn btn-sm btn-clean btn-icon edit"
                    onclick="cargarformulario(2.3,'.$subdireccion->id.',2);" 
                    title="Modificar" >
                     <i class="flaticon-edit-1 text-primary"></i>
                    </a>
                    <a href="#" 
                    class="btn btn-sm btn-clean btn-icon delete"
                    onclick="cargarformulario(2.4,'.$subdireccion->id.',2);"
                    title="Borrar" 
                    id="'.$subdireccion->id.'">
                    <i class="flaticon2-trash text-danger"></i>
                    </a>'; }
                )->make(true);
        }

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

    public function create()
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Subdirecciones';
        $nivel4='Agregar';

        $direcciones = Direccion::get(['nombre','id']);
        return view('catalogos.subdireccion.create',
            compact('direcciones','nivel1','nivel2','nivel3','nivel4'));
    }

    public function store(Equipment $equipment, Request $request)
    {

        $existe=$equipment->Duplicados($request,"Catalogo Subdireccion");

        if ($existe == 0){
            $subdireccion = new Subdireccion();
            $subdireccion->direccion_id = $request->direccion_id;
            $subdireccion->nombre = $request->nombre;
            $subdireccion->slug = Str::slug($request->nombre);
            $subdireccion->save();
        }

        return $existe;
    }

    public function edit(Request $request)
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Subdirecciones';
        $nivel4='Modificar';

        $direcciones =Direccion::get(['nombre','id']);
        $subdirecciones = Subdireccion::find($request->id);
        $subdireccion = $subdirecciones->nombre;
        $id = $subdirecciones->id;

        return view('catalogos.subdireccion.edit',
            compact('direcciones','subdirecciones','subdireccion','id','nivel1','nivel2','nivel3','nivel4'));
    }

    public function update(Request $request)
    {
        $subdirecciones= Subdireccion::findOrFail($request->id);
        $subdirecciones->nombre = $request->nombre;
        $subdirecciones->direccion_id = $request->direccion_id;
        $subdirecciones->slug = Str::slug($request->nombre);
        $subdirecciones->save();

        return response()->json($subdirecciones);
    }

    public function destroy($id)
    {
        $subdirecciones = Subdireccion::findOrFail($id);
        $subdirecciones->delete();

        return response()->json($subdirecciones);
    }

    public function getDestroy(Request $request)
    {

        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Subdirecciones';
        $nivel4='Borrar';

        $direcciones =Direccion::get(['nombre','id']);
        $subdirecciones =Subdireccion::find($request->id);

        $subdireccion = $subdirecciones->nombre;
        $id = $subdirecciones->id;

        $existe=0;
        if ($this->buscaExistencia($id) > 0)
        {
            $existe=1;
        }

        return view('catalogos.subdireccion.delete',
            compact('direcciones','subdireccion','subdirecciones','id','existe','nivel1','nivel2','nivel3','nivel4'));
    }

    public function buscaExistencia($id)
    {
        $existe=DB::table('equipos')->where('subdireccions_id',$id)->count();
        return $existe;
    }

}
