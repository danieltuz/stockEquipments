<?php

namespace App\Http\Controllers;

use App\Models\Condicion;
use App\Models\Equipo;
use App\Methods\Equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;


class CondicionController extends Controller
{
    public function index()
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Condición del Equipo';

        return view('catalogos.condicion.index',
            compact('nivel1','nivel2','nivel3'));
    }

    public function getCondicion()
    {

        if(request()->ajax())
        {
            $condicions=Condicion::select('id','nombre','ruta')->get();
            return DataTables::of($condicions)
                ->addColumn('action', function($condicion){
                    return '<a href="#"
                    class="btn btn-sm btn-clean btn-icon edit" 
                    onclick="cargarformulario(13.3,'.$condicion->id.',2);" 
                    title="Modificar" >
                    <i class="flaticon-edit-1 text-primary"></i>
                    </a>
                    <a href="#" 
                    class="btn btn-sm btn-clean btn-icon delete"
                    onclick="cargarformulario(13.4,'.$condicion->id.',2);"
                    title="Borrar" 
                    id="'.$condicion->id.'">
                    <i class="flaticon2-trash text-danger"></i>
                    </a>'; }
                )->make(true);
        }
    }


    public function create()
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Condición del Equipo';
        $nivel4='Agregar';

        return view('catalogos.condicion.create',
            compact('nivel1','nivel2','nivel3','nivel4'));
    }

    public function store(Equipment $equipment, Request $request)
    {

        $existe=$equipment->Duplicados($request,"Catalogo Condicion");

        if ($existe == 0){
            $condiciones = new Condicion();
            $condiciones->nombre = $request->nombre;
            $condiciones->slug = Str::slug($request->nombre);
            $condiciones->save();
        }

        return $existe;
    }


    public function edit(Request $request)
    {

        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Condición del Equipo';
        $nivel4='Modificar';


        $condiciones=Condicion::find($request->id);

        $condicion= $condiciones->nombre;
        $id = $condiciones->id;

        return view('catalogos.condicion.edit',
            compact('condicion','id','nivel1','nivel2','nivel3','nivel4'));
    }

    public function update(Request $request)
    {
        $condiciones= Condicion::findOrFail($request->id);
        $condiciones->nombre = $request->nombre;
        $condiciones->slug = Str::slug($request->nombre);
        $condiciones->save();

        return response()->json($condiciones);

    }

    public function getDestroy(Request $request)
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Condición del Equipo';
        $nivel4='Borrar';

        $condiciones=Condicion::find($request->id);

        $condicion= $condiciones->nombre;
        $id = $condiciones->id;

        $existe=0;
        if ($this->buscaExistencia($id) > 0)
        {
            $existe=1;
        }

        return view('catalogos.condicion.delete',
            compact('condicion','id','existe','nivel1','nivel2','nivel3','nivel4'));
    }

    public function destroy($id)
    {
        $condiciones= Condicion::findOrFail($id);
        $condiciones->delete();

        return response()->json($condiciones);
    }

    public function buscaExistencia($id)
    {
        $existe=Equipo::where('condicions_id',$id)->count();
        return $existe;
    }

}
