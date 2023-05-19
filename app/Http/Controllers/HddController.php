<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Methods\Equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Hdd;
use Yajra\DataTables\DataTables;


class HddController extends Controller
{
    public function index()
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Discos Duros (HDD)';

        return view('catalogos.hdd.index',
            compact('nivel1','nivel2','nivel3'));
    }

    public function getHdd()
    {

        if(request()->ajax())
        {
            $hdds=Hdd::select('id','tipo','tamanio')->get();
            return DataTables::of($hdds)
                ->addColumn('action', function($hdd){
                    return '<a href="#" 
                    class="btn btn-sm btn-clean btn-icon edit"
                    onclick="cargarformulario(5.3,'.$hdd->id.',2);"
                    title="Modificar" >
                    <i class="flaticon-edit-1 text-primary"></i>
                    </a>
                        <a href="#" 
                        class="btn btn-sm btn-clean btn-icon delete"
                        onclick="cargarformulario(5.4,'.$hdd->id.',2);" 
                        title="Borrar" 
                        id="'.$hdd->id.'">
                        <i class="flaticon2-trash text-danger"></i>
                        </a>'; }
                )->make(true);
        }
    }

    public function create()
    {

        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Discos Duros (HDD)';
        $nivel4='Agregar';

        return view('catalogos.hdd.create',
            compact('nivel1','nivel2','nivel3','nivel4'));
    }

    public function store(Equipment $equipment, Request $request)
    {
        $existe=$equipment->Duplicados($request,"Catalogo HDD");
        $tipo   = Str::slug($request->tipo);
        $tamanio= Str::slug($request->tamanio);

        if ($existe == 0){

            $hdds = new Hdd();
            $hdds->nombre  ='';
            $hdds->tipo    = $request->tipo;
            $hdds->tamanio = $request->tamanio;
            $hdds->slug    = $tipo . '-' . $tamanio;
            $hdds->save();
        }

        return $existe;
    }


    public function edit(Request $request)
    {

        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Discos Duros (HDD)';
        $nivel4='Modificar';

        $hdds =Hdd::find($request->id);

        $hdd     = $hdds->nombre;
        $tipo    = $hdds->tipo;
        $tamanio = $hdds->tamanio;
        $id = $hdds->id;

        return view('catalogos.hdd.edit',
            compact('hdd','tipo','tamanio','id','nivel1','nivel2','nivel3','nivel4'));
    }

    public function update(Request $request)
    {
        $tipo   = Str::slug($request->tipo);
        $tamanio= Str::slug($request->tamanio);

        $hdds= Hdd::findOrFail($request->id);
        $hdds->nombre       = '';
        $hdds->tipo         = $request->tipo;
        $hdds->tamanio      = $request->tamanio;
        $hdds->tipo_tamanio = $request->tipo . '-' . $request->tamanio;
        $hdds->slug         = $tipo . '-' . $tamanio;
        $hdds->save();

        return response()->json($hdds);

    }

    public function getDestroy(Request $request)
    {

        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Discos Duros (HDD)';
        $nivel4='Borrar';

        $hdds    =Hdd::find($request->id);

        $id      = $hdds->id;
        $hdd     = $hdds->nombre;
        $tipo    = $hdds->tipo;
        $tamanio = $hdds->tamanio;

        $existe=0;
        if ($this->buscaExistencia($id) > 0)
        {
            $existe=1;
        }

        return view('catalogos.hdd.delete',
            compact('existe','hdd','tipo','tamanio','id','nivel1','nivel2','nivel3','nivel4'));
    }

    public function destroy($id)
    {
        $hdds = Hdd::findOrFail($id);
        $hdds->delete();

        return response()->json($hdds);
    }

    public function buscaExistencia($id)
    {
        $existe=Equipo::where('hdds_id',$id)->count();
        return $existe;
    }

}
