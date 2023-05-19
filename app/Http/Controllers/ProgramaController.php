<?php

namespace App\Http\Controllers;

use App\Methods\Equipment;
use App\Models\Programa;
use App\Models\Software;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class ProgramaController extends Controller
{
    public function index()
    {

        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Software';

        return view('catalogos.programa.index',
            compact('nivel1','nivel2','nivel3'));
    }

    public function getPrograma()
    {

        if(request()->ajax())
        {

            $programas=Programa::select('id','nombre')->get();
            return DataTables::of($programas)
                ->addColumn('action', function($programa){
                    return '<a href="#"
                    class="btn btn-sm btn-clean btn-icon edit" 
                    onclick="cargarformulario(16.3,'.$programa->id.',2);" 
                    title="Modificar" >
                    <i class="flaticon-edit-1 text-primary"></i>
                    </a>
                    <a href="#" 
                    class="btn btn-sm btn-clean btn-icon delete"
                    onclick="cargarformulario(16.4,'.$programa->id.',2);"
                    title="Borrar" 
                    id="'.$programa->id.'">
                    <i class="flaticon2-trash text-danger"></i>
                    </a>'; }
                )->make(true);
        }

    }

    public function edit(Request $request)
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Software';
        $nivel4='Modificar';

        $programas=Programa::find($request->id);

        $programa= $programas->nombre;
        $id = $programas->id;

        return view('catalogos.programa.edit',
            compact('programa','id','nivel1','nivel2','nivel3','nivel4'));
    }

    public function update(Request $request)
    {
        $programas= Programa::findOrFail($request->id);
        $programas->nombre = $request->nombre;
        $programas->slug = Str::slug($request->nombre);
        $programas->save();

        return response()->json($programas);

    }

    public function create()
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Software';
        $nivel4='Agregar';

        return view('catalogos.programa.create',
            compact('nivel1','nivel2','nivel3','nivel4'));
    }

    public function store(Equipment $equipment, Request $request)
    {

        $existe=$equipment->Duplicados($request,"Catalogo Software");

        if ($existe == 0){
            $programas = new Programa();
            $programas->nombre = $request->nombre;
            $programas->slug = Str::slug($request->nombre);
            $programas->save();
        }

        return $existe;
    }

    public function destroy($id)
    {
        $programas= Programa::findOrFail($id);
        $programas->delete();

        return response()->json($programas);
    }

    //******************** METODOS PROPIOS ******************


    public function getDestroy(Request $request)
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Software';
        $nivel4='Borrar';

        $programas=Programa::find($request->id);

        $programa= $programas->nombre;
        $id = $programas->id;

        $existe=0;
        if ($this->buscaExistencia($id) > 0)
        {
            $existe=1;
        }

        return view('catalogos.programa.delete',
            compact('programa','id','existe','nivel1','nivel2','nivel3','nivel4'));
    }

    public function buscaExistencia($id)
    {
        $existe=Software::where('programas_id',$id)->count();
        return $existe;
    }

}
