<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Methods\Equipment;
use App\Models\So;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class SoController extends Controller
{
    public function index()
    {

        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Arquitectura SO';

        return view('catalogos.so.index',
            compact('nivel1','nivel2','nivel3'));
    }

    public function getSo()
    {

        if(request()->ajax())
        {

            $sos=So::select('id','nombre')->get();
            return DataTables::of($sos)
                ->addColumn('action', function($so){
                    return '<a href="#"
                    class="btn btn-sm btn-clean btn-icon edit" 
                    onclick="cargarformulario(11.3,'.$so->id.',2);" 
                    title="Modificar" >
                    <i class="flaticon-edit-1 text-primary"></i>
                    </a>
                    <a href="#" 
                    class="btn btn-sm btn-clean btn-icon delete"
                    onclick="cargarformulario(11.4,'.$so->id.',2);"
                    title="Borrar" 
                    id="'.$so->id.'">
                    <i class="flaticon2-trash text-danger"></i>
                    </a>'; }
                )->make(true);
        }
    }

    public function create()
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Arquitectura SO';
        $nivel4='Agregar';

        return view('catalogos.so.create',
            compact('nivel1','nivel2','nivel3','nivel4'));
    }

    public function store(Equipment $equipment, Request $request)
    {

        $existe=$equipment->Duplicados($request,"Catalogo SO");

        if ($existe == 0){
            $sos = new So();
            $sos->nombre = $request->nombre;
            $sos->slug = Str::slug($request->nombre);
            $sos->save();
        }

        return $existe;
    }


    public function edit(Request $request)
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Arquitectura SO';
        $nivel4='Modificar';

        $sos=So::find($request->id);

        $so = $sos->nombre;
        $id = $sos->id;

        return view('catalogos.so.edit',
            compact('so','id','nivel1','nivel2','nivel3','nivel4'));
    }

    public function update(Request $request)
    {
        $sos= So::findOrFail($request->id);
        $sos->nombre = $request->nombre;
        $sos->slug = Str::slug($request->nombre);
        $sos->save();

        return response()->json($sos);

    }

    public function getDestroy(Request $request)
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Arquitectura SO';
        $nivel4='Borrar';

        $sos=So::find($request->id);

        $so= $sos->nombre;
        $id = $sos->id;

        $existe=0;
        if ($this->buscaExistencia($id) > 0)
        {
            $existe=1;
        }

        return view('catalogos.so.delete',
            compact('so','id','existe','nivel1','nivel2','nivel3','nivel4'));
    }

    public function destroy($id)
    {
        $sos = So::findOrFail($id);
        $sos->delete();

        return response()->json($sos);
    }

    public function buscaExistencia($id)
    {
        $existe=Equipo::where('sos_id',$id)->count();
        return $existe;
    }

}
