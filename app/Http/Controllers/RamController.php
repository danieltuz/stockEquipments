<?php

namespace App\Http\Controllers;

use App\Methods\Equipment;
use App\Models\Ram;
use App\Models\Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class RamController extends Controller
{
    public function index()
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Memoria RAM';

        return view('catalogos.ram.index',
            compact('nivel1','nivel2','nivel3'));
    }

    public function getRam()
    {

        if(request()->ajax())
        {

            $rams=Ram::select('id','tipo','frecuencia')->get();
            return DataTables::of($rams)
                ->addColumn('action', function($ram){
                    return '<a href="#"
                    class="btn btn-sm btn-clean btn-icon edit" 
                    onclick="cargarformulario(10.3,'.$ram->id.',2);" 
                    title="Modificar" >
                    <i class="flaticon-edit-1 text-primary"></i>
                    </a>
                    <a href="#" 
                    class="btn btn-sm btn-clean btn-icon delete"
                    onclick="cargarformulario(10.4,'.$ram->id.',2);"
                    title="Borrar" 
                    id="'.$ram->id.'">
                    <i class="flaticon2-trash text-danger"></i>
                    </a>'; }
                )->make(true);
        }

    }

    public function getTiposRam()
    {

        $rams=Ram::select('tipo')
            ->distinct()
            ->get();

        $status = 400;
        $response = [];

        if( !is_null($rams) )
        {
            $response = $rams;
            $status = 200;
        }

        return response()->json( compact('status','response') );


    }

    public function create()
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Memoria RAM';
        $nivel4='Agregar';

        return view('catalogos.ram.create',
            compact('nivel1','nivel2','nivel3','nivel4'));
    }

    public function store(Equipment $equipment, Request $request)
    {

        $existe=$equipment->Duplicados($request,"Catalogo RAM");

        $tipo      = Str::slug($request->tipo);
        $frecuencia= Str::slug($request->frecuencia);

        if ($existe == 0){
            $rams = new Ram();

            $rams->nombre = '';
            $rams->tipo            = $request->tipo;
            $rams->frecuencia      = $request->frecuencia;
            $rams->tipo_frecuencia = $request->tipo. '-' . $request->frecuencia;
            $rams->slug=$tipo . '-' . $frecuencia;
            $rams->save();
        }

        return $existe;
    }


    public function edit(Request $request)
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Memoria RAM';
        $nivel4='Modificar';

        $rams =Ram::find($request->id);

        $ram       = $rams->nombre;
        $tipo      = $rams->tipo;
        $frecuencia= $rams->frecuencia;
        $id        = $rams->id;

        return view('catalogos.ram.edit',
            compact('ram','tipo','frecuencia','id','nivel1','nivel2','nivel3','nivel4'));
    }

    public function update(Request $request)
    {
        $rams                  = Ram::findOrFail($request->id);
        $rams->tipo            = $request->tipo;
        $rams->frecuencia      = $request->frecuencia;
        $rams->tipo_frecuencia = $request->tipo_frecuencia;
        $rams->tipo_frecuencia = $request->tipo. '-' . $request->frecuencia;

        $tipo      = Str::slug($request->tipo);
        $frecuencia= Str::slug($request->frecuencia);

        $rams->slug=$tipo . '-' . $frecuencia;
        $rams->save();

        return response()->json($rams);

    }

    public function getDestroy(Request $request)
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Memoria RAM';
        $nivel4='Borrar';

        $rams =Ram::find($request->id);

        $ram       = $rams->nombre;
        $tipo      = $rams->tipo;
        $frecuencia= $rams->frecuencia;
        $id        = $rams->id;

        $existe=0;
        if ($this->buscaExistencia($id) > 0)
        {
            $existe=1;
        }

        return view('catalogos.ram.delete',
            compact('tipo','frecuencia','ram','id','existe','nivel1','nivel2','nivel3','nivel4'));
    }

    public function destroy($id)
    {
        $rams= Ram::findOrFail($id);
        $rams->delete();

        return response()->json($rams);
    }

    public function buscaExistencia($id)
    {
        $existe=Equipo::where('rams_id',$id)->count();
        return $existe;
    }

}
