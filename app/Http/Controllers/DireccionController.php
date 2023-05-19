<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use App\Methods\Equipment;

class DireccionController extends Controller
{
    public function index()
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Direcciones';

        return view('catalogos.direccion.index',
            compact('nivel1','nivel2','nivel3'));
    }

    public function getDireccion()
    {
        if(request()->ajax())
        {
            $direccions = Direccion::all();
            return Datatables::of($direccions)
                ->addColumn('action', function($direccion){
                    return '<a href="#" 
                    class="btn btn-sm btn-clean btn-icon edit"
                    onclick="cargarformulario(1.3,'.$direccion->id.',2);"  
                    title="Modificar" >
                     <i class="flaticon-edit-1 text-primary"></i>
                    </a>
                        <a href="#" 
                        class="btn btn-sm btn-clean btn-icon delete"
                        onclick="cargarformulario(1.4,'.$direccion->id.',2);" 
                        title="Borrar" 
                        id="'.$direccion->id.'">
                        <i class="flaticon2-trash text-danger"></i>
                        </a>'; }
                )->make(true);
        }
    }

    public function create()
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Direcciones';
        $nivel4='Agregar';

        return view('catalogos.direccion.create',
            compact('nivel1','nivel2','nivel3','nivel4'));
    }

    public function store(Equipment $equipment, Request $request)
    {

        $existe=$equipment->Duplicados($request,"Catalogo Direccion");

        if ($existe == 0){
            $direcciones = new Direccion();
            $direcciones->nombre = $request->nombre_direccion;
            $direcciones->slug = Str::slug($request->nombre_direccion);
            $direcciones->save();
        }

        return $existe;
    }

    public function edit(Request $request)
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Direcciones';
        $nivel4='Modificar';

        $direcciones =Direccion::find($request->id);

        $direccion = $direcciones->nombre;
        $id = $direcciones->id;

        return view('catalogos.direccion.edit',
            compact('direccion','id','nivel1','nivel2','nivel3','nivel4'));
    }

    public function update(Request $request)
    {
        $direcciones = Direccion::findOrFail($request->id);
        $direcciones->nombre = $request->nombre;
        $direcciones->slug = Str::slug($request->nombre);
        $direcciones->save();

        return response()->json($direcciones);

    }

    public function destroy($id)
    {
        $direcciones = Direccion::findOrFail($id);
        $direcciones->delete();

        return response()->json($direcciones);
    }

    public function getDestroy(Request $request)
    {

        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Direcciones';
        $nivel4='Borrar';

        $direcciones =Direccion::find($request->id);

        $direccion = $direcciones->nombre;
        $id = $direcciones->id;

        $existe=0;
        if ($this->buscaExistencia($id) > 0)
        {
            $existe=1;
        }

        return view('catalogos.direccion.delete',
            compact('direccion','id','existe','nivel1','nivel2','nivel3','nivel4'));
    }

    public function buscaExistencia($id)
    {
        $existe=DB::table('equipos')->where('direccions_id',$id)->count();
        return $existe;
    }

}
