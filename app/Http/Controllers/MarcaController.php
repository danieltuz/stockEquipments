<?php

namespace App\Http\Controllers;

use App\Models\Edificio;
use App\Models\Marca;
use App\Models\Equipo;
use App\Methods\Equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;


class MarcaController extends Controller
{
    public function index()
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Marcas';

        return view('catalogos.marca.index',
            compact('nivel1','nivel2','nivel3'));
    }

    public function getMarca()
    {

        if(request()->ajax())
        {
            $marcas=Marca::select('id','nombre')->get();
            return DataTables::of($marcas)
                ->addColumn('action', function($marca){
                    return '<a href="#" 
                    class="btn btn-sm btn-clean btn-icon edit"
                    onclick="cargarformulario(6.3,'.$marca->id.',2);" 
                    title="Modificar" >
                    <i class="flaticon-edit-1 text-primary"></i>
                    </a>
                        <a href="#" 
                        class="btn btn-sm btn-clean btn-icon delete"
                        onclick="cargarformulario(6.4,'.$marca->id.',2);" 
                        title="Borrar" 
                        id="'.$marca->id.'">
                        <i class="flaticon2-trash text-danger"></i>
                        </a>'; }
                )->make(true);
        }
    }

    public function create()
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Marcas';
        $nivel4='Agregar';

        return view('catalogos.marca.create',
            compact('nivel1','nivel2','nivel3','nivel4'));
    }

    public function store(Equipment $equipment, Request $request)
    {

        $existe=$equipment->Duplicados($request,"Catalogo Marca");

        if ($existe == 0) {
            $marcas = new Marca();
            $marcas->nombre = $request->nombre;
            $marcas->slug = Str::slug($request->nombre);
            $marcas->save();
        }

        return $existe;
    }

    public function edit(Request $request)
    {

        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Marcas';
        $nivel4='Modificar';

        $marcas=Marca::find($request->id);

        $marca = $marcas->nombre;
        $id = $marcas->id;

        return view('catalogos.marca.edit',compact('marca','id','nivel1','nivel2','nivel3','nivel4'));
    }

    public function update(Request $request)
    {
        $marcas= Marca::findOrFail($request->id);
        $marcas->nombre = $request->nombre;
        $marcas->slug = Str::slug($request->nombre);
        $marcas->save();

        return response()->json($marcas);

    }

    public function getDestroy(Request $request)
    {

        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Marcas';
        $nivel4='Borrar';

        $marcas=Marca::find($request->id);

        $marca = $marcas->nombre;
        $id = $marcas->id;

        $existe=0;
        if ($this->buscaExistencia($id) > 0)
        {
            $existe=1;
        }

        return view('catalogos.marca.delete',
            compact('marca','id','existe','nivel1','nivel2','nivel3','nivel4'));
    }

    public function destroy($id)
    {
        $marcas = Marca::findOrFail($id);
        $marcas->delete();

        return response()->json($marcas);
    }

    public function buscaExistencia($id)
    {
        $existe=Equipo::where('marcas_id',$id)->count();
        return $existe;
    }

}
