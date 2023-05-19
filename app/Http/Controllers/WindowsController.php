<?php

namespace App\Http\Controllers;

use App\Methods\Equipment;
use App\Models\Windows;
use App\Models\Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class WindowsController extends Controller
{
    public function index()
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Sistemas Operativos';

        return view('catalogos.windows.index',
            compact('nivel1','nivel2','nivel3'));
    }

    public function getWin()
    {

        if(request()->ajax())
        {

            $windows=Windows::select('id','nombre','version')->get();
            return DataTables::of($windows)
                ->addColumn('action', function($window){
                    return '<a href="#"
                    class="btn btn-sm btn-clean btn-icon edit" 
                    onclick="cargarformulario(12.3,'.$window->id.',2);" 
                    title="Modificar" >
                    <i class="flaticon-edit-1 text-primary"></i>
                    </a>
                    <a href="#" 
                    class="btn btn-sm btn-clean btn-icon delete"
                    onclick="cargarformulario(12.4,'.$window->id.',2);"
                    title="Borrar" 
                    id="'.$window->id.'">
                    <i class="flaticon2-trash text-danger"></i>
                    </a>'; }
                )->make(true);
        }

    }

    public function getSo()
    {

        $windows=Windows::select('nombre')
            ->get();

        $status = 400;
        $response = [];

        if( !is_null($windows) )
        {
            $response = $windows;
            $status = 200;
        }

        return response()->json( compact('status','response') );


    }

    public function create()
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Sistemas Operativos';
        $nivel4='Agregar';

        return view('catalogos.windows.create',
            compact('nivel1','nivel2','nivel3','nivel4'));
    }

    public function store(Equipment $equipment, Request $request)
    {

        $existe =$equipment->Duplicados($request,"Catalogo Sistema Operativo");

        $nombre= Str::slug($request->nombre);
        $version= Str::slug($request->version);

        if ($existe == 0){
            $windows = new Windows();
            $windows->nombre = $request->nombre;
            $windows->version= $request->version;
            $windows->win_version = $request->nombre . '-' . $request->version;
            $windows->slug    = $nombre . '-' . $version;
            $windows->save();
        }

        return $existe;
    }


    public function edit(Request $request)
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Sistemas Operativos';
        $nivel4='Modificar';

        $windows=Windows::find($request->id);

        $window= $windows->nombre;
        $version= $windows->version;
        $id = $windows->id;

        return view('catalogos.windows.edit',
            compact('window','version','id','nivel1','nivel2','nivel3','nivel4'));
    }

    public function update(Request $request)
    {

        $nombre= Str::slug($request->nombre);
        $version= Str::slug($request->version);

        $windows= Windows::findOrFail($request->id);
        $windows->nombre = $request->nombre;
        $windows->version= $request->version;
        $windows->win_version = $request->nombre . '-' . $request->version;
        $windows->slug        = $nombre . '-' . $version;
        $windows->save();

        return response()->json($windows);

    }

    public function getDestroy(Request $request)
    {

        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Sistemas Operativos';
        $nivel4='Borrar';

        $windows=Windows::find($request->id);

        $window = $windows->nombre;
        $version= $windows->version;
        $id = $windows->id;

        $existe=0;
        if ($this->buscaExistencia($id) > 0)
        {
            $existe=1;
        }

        return view('catalogos.windows.delete',
            compact('window','version','id','existe','nivel1','nivel2','nivel3','nivel4'));
    }

    public function destroy($id)
    {
        $windows= Windows::findOrFail($id);
        $windows->delete();

        return response()->json($windows);
    }


    public function buscaExistencia($id)
    {
        $existe=Equipo::where('windows_id',$id)->count();
        return $existe;
    }

}
