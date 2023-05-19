<?php

namespace App\Http\Controllers;

use App\Models\Edificio;
use App\Models\Equipo;
use App\Methods\Equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class EdificioController extends Controller
{
    public function index()
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Edificios';

        return view('catalogos.edificio.index',
            compact('nivel1','nivel2','nivel3'));
    }

    public function getEdificio()
    {

        if(request()->ajax())
        {

            $edificios=Edificio::select('id','nombre')->get();
            return DataTables::of($edificios)
                ->addColumn('action', function($edificio){
                    return '<a href="#"
                    class="btn btn-sm btn-clean btn-icon edit" 
                    onclick="cargarformulario(4.3,'.$edificio->id.',2);" 
                    title="Modificar" >
                    <i class="flaticon-edit-1 text-primary"></i>
                    </a>
                    <a href="#" 
                    class="btn btn-sm btn-clean btn-icon delete"
                    onclick="cargarformulario(4.4,'.$edificio->id.',2);"
                    title="Borrar" 
                    id="'.$edificio->id.'">
                    <i class="flaticon2-trash text-danger"></i>
                    </a>'; }
                )->make(true);
        }

    }

    public function create()
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Edificios';
        $nivel4='Agregar';

        return view('catalogos.edificio.create',
            compact('nivel1','nivel2','nivel3','nivel4'));
    }

    public function store(Equipment $equipment, Request $request)
    {

        $existe=$equipment->Duplicados($request,"Catalogo Edificio");

        if ($existe == 0){
            $edificios = new Edificio();
            $edificios->nombre = $request->nombre;
            $edificios->slug = Str::slug($request->nombre);
            $edificios->save();
        }

        return $existe;
    }

    public function edit(Request $request)
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Edificios';
        $nivel4='Modificar';

        $edificios =Edificio::find($request->id);

        $edificio = $edificios->nombre;
        $id = $edificios->id;

        return view('catalogos.edificio.edit',
            compact('edificio','id','nivel1','nivel2','nivel3','nivel4'));
    }

    public function update(Request $request)
    {
        $edificios= Edificio::findOrFail($request->id);
        $edificios->nombre = $request->nombre;
        $edificios->slug = Str::slug($request->nombre);
        $edificios->save();

        return response()->json($edificios);

    }

    public function getDestroy(Request $request)
    {

        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Edificios';
        $nivel4='Borrar';

        $edificios =Edificio::find($request->id);

        $edificio = $edificios->nombre;
        $id = $edificios->id;

        $existe=0;
        if ($this->buscaExistencia($id) > 0)
        {
            $existe=1;
        }

        return view('catalogos.edificio.delete',
            compact('edificio','id','existe','nivel1','nivel2','nivel3','nivel4'));
    }

    public function destroy($id)
    {
        $edificios = Edificio::findOrFail($id);
        $edificios->delete();

        return response()->json($edificios);
    }

    public function buscaExistencia($id)
    {
        $existe=Equipo::where('edificios_id',$id)->count();
        return $existe;
    }

    public function buscaDuplicado(Request $request){

        $valor= Str::slug($request->nombre);
        $existe=Edificio::where('slug',$valor)->count();

        return response()->json($existe);
    }
}
