<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Methods\Equipment;
use App\Models\Monitor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;


class MonitorController extends Controller
{
    public function index()
    {

        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Tipo de Monitor';

        return view('catalogos.monitor.index',
            compact('nivel1','nivel2','nivel3'));
    }

    public function getMonitor()
    {

        if(request()->ajax())
        {

            $monitors=Monitor::select('id','nombre')->get();
            return DataTables::of($monitors)
                ->addColumn('action', function($monitor){
                    return '<a href="#"
                    class="btn btn-sm btn-clean btn-icon edit" 
                    onclick="cargarformulario(8.3,'.$monitor->id.',2);" 
                    title="Modificar" >
                    <i class="flaticon-edit-1 text-primary"></i>
                    </a>
                    <a href="#" 
                    class="btn btn-sm btn-clean btn-icon delete"
                    onclick="cargarformulario(8.4,'.$monitor->id.',2);"
                    title="Borrar" 
                    id="'.$monitor->id.'">
                    <i class="flaticon2-trash text-danger"></i>
                    </a>'; }
                )->make(true);
        }
    }

    public function create()
    {

        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Tipo de Monitor';
        $nivel4='Agregar';

        return view('catalogos.monitor.create',
            compact('nivel1','nivel2','nivel3','nivel4'));
    }


    public function store(Equipment $equipment, Request $request)
    {
        $existe=$equipment->Duplicados($request,"Catalogo Tipo Monitor");

        if ($existe == 0){
            $monitores = new Monitor();
            $monitores->nombre = $request->nombre;
            $monitores->slug = Str::slug($request->nombre);
            $monitores->save();
        }

        return $existe;
    }


    public function edit(Request $request)
    {

        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Tipo de Monitor';
        $nivel4='Modificar';

        $monitores =Monitor::find($request->id);

        $monitor = $monitores->nombre;
        $id = $monitores->id;

        return view('catalogos.monitor.edit',
            compact('monitor','id','nivel1','nivel2','nivel3','nivel4'));
    }

    public function update(Request $request)
    {
        $monitores= Monitor::findOrFail($request->id);
        $monitores->nombre = $request->nombre;
        $monitores->slug = Str::slug($request->nombre);
        $monitores->save();

        return response()->json($monitores);
    }

    public function getDestroy(Request $request)
    {
        $nivel1='Administración';
        $nivel2='Catalogos';
        $nivel3='Tipo de Monitor';
        $nivel4='Borrar';

        $monitores =Monitor::find($request->id);

        $monitor= $monitores->nombre;
        $id = $monitores->id;

        $existe=0;
        if ($this->buscaExistencia($id) > 0)
        {
            $existe=1;
        }

        return view('catalogos.monitor.delete',
            compact('monitor','id','existe','nivel1','nivel2','nivel3','nivel4'));
    }

    public function destroy($id)
    {
        $monitores= Monitor::findOrFail($id);
        $monitores->delete();

        return response()->json($monitores);
    }


    public function buscaExistencia($id)
    {
        $existe=Equipo::where('monitors_id',$id)->count();
        return $existe;
    }

}
