<?php

namespace App\Http\Controllers;

use App\Methods\Equipment;
use App\Models\Equipo;
use App\Models\TipoEquipo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class TipoEquipoController extends Controller
{
    public function index()
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Tipo Equipo';

        return view('catalogos.tipo_equipos.index',
            compact('nivel1','nivel2','nivel3'));
    }

    public function getTipoEquipos()
    {

        if(request()->ajax())
        {
            $tipoEquipos=TipoEquipo::select('id','nombre','tipo')->get();
            return DataTables::of($tipoEquipos)
                ->addColumn('action', function($tipoEquipo){
                    return '<a href="#" 
                    class="btn btn-sm btn-clean btn-icon edit"
                    onclick="cargarformulario(50.3,'.$tipoEquipo->id.',2);"
                    title="Modificar" >
                    <i class="flaticon-edit-1 text-primary"></i>
                    </a>
                        <a href="#" 
                        class="btn btn-sm btn-clean btn-icon delete"
                        onclick="cargarformulario(50.4,'.$tipoEquipo->id.',2);" 
                        title="Borrar" 
                        id="'.$tipoEquipo->id.'">
                        <i class="flaticon2-trash text-danger"></i>
                        </a>'; }
                )->make(true);
        }
    }

    public function create()
    {

        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Tipo Equipo';
        $nivel4='Agregar';

        return view('catalogos.tipo_equipos.create',
            compact('nivel1','nivel2','nivel3','nivel4'));
    }

    public function store(Equipment $equipment, Request $request)
    {
        $existe=$equipment->Duplicados($request,"Catalogo Tipo Equipo");

        if ($existe == 0){

            $equipos = new TipoEquipo();
            $equipos->nombre  = $request->nombre;
            $equipos->tipo    = $request->tipo;
            $equipos->slug    = Str::slug($request->nombre);
            $equipos->save();
        }

        return $existe;
    }


    public function edit(Request $request)
    {

        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Tipo Equipo';
        $nivel4='Modificar';

        $equipos =TipoEquipo::find($request->id);

        $nombre  = $equipos->nombre;
        $tipo    = $equipos->tipo;
        $id      = $equipos->id;

        return view('catalogos.tipo_equipos.edit',
            compact('nombre','tipo','id','nivel1','nivel2','nivel3','nivel4'));
    }

    public function update(Request $request)
    {
        $equipos= TipoEquipo::findOrFail($request->id);
        $equipos->nombre       = $request->nombre;
        $equipos->tipo         = $request->tipo;
        $equipos->slug         = Str::slug($request->nombre);
        $equipos->save();

        return response()->json($equipos);

    }

    public function getDestroy(Request $request)
    {

        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Tipo Equipo';
        $nivel4='Borrar';

        $equipos  =TipoEquipo::find($request->id);

        $id      = $equipos->id;
        $nombre  = $equipos->nombre;
        $tipo    = $equipos->tipo;

        $existe=0;
        if ($this->buscaExistencia($id) > 0)
        {
            $existe=1;
        }

        return view('catalogos.tipo_equipos.delete',
            compact('existe','nombre','tipo','id','nivel1','nivel2','nivel3','nivel4'));
    }

    public function destroy($id)
    {
        $equipos = TipoEquipo::findOrFail($id);
        $equipos->delete();

        return response()->json($equipos);
    }

    public function buscaExistencia($id)
    {
        $existe=Equipo::where('tipo_equipo_id',$id)->count();
        return $existe;
    }

}
