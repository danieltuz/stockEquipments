<?php

namespace App\Http\Controllers;

use App\Models\Baja;
use App\Models\Condicion;
use App\Models\Coordinacion;
use App\Models\Direccion;
use App\Models\Display;
use App\Models\Edificio;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Monitor;
use App\Models\Subdireccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Yajra\DataTables\DataTables;

class DisplayController extends Controller
{
    function index()
    {
        $edificios   = Edificio::select('id','nombre')->get();
        $direcciones = Direccion::select('id','nombre')->get();
        $marcas      = Marca::select('id','nombre')->get();
        $condiciones = Condicion::select('id','nombre')->get();
        $monitors    = Monitor::select('id','nombre')->get();

        return view('equipos.display.index',
            compact('edificios','direcciones','marcas','condiciones','monitors'));
    }

    public function getDisplay(Request $request)
    {
        set_time_limit(3600);
        DB::enableQueryLog();

        $edificio_id     = $request->get('edificio_id');
        $direccion_id    = $request->get('direccion_id');
        $subdireccion_id = $request->get('subdireccion_id');
        $subdireccion_txt= $request->get('subdireccion_txt');
        $coordinacion_id = $request->get('coordinacion_id');
        $coordinacion_txt= $request->get('coordinacion_txt');
        $monitors_id     = $request->get('monitor_id');
        $marca_id        = $request->get('marca_id');
        $modelo_id       = $request->get('modelos_id');
        $tamanio         = $request->get('txt_tamanio');
        $modelo_txt      = $request->get('modelos_txt');
        $condicion_id    = $request->get('condicion_id');
        $inventario      = $request->get('inventario');
        $serie           = $request->get('serie');
        $usuario         = $request->get('usuario');
        $estatus_id      = $request->get('estatus_id');


        if(request()->ajax())
        {
            $monitors=Display::
            join("edificios", "displays.edificios_id", "edificios.id")
                ->join("direccions", "displays.direccions_id",  "direccions.id")
                ->join("subdireccions", "displays.subdireccions_id",  "subdireccions.id")
                ->join("coordinacions", "displays.coordinacions_id",  "coordinacions.id")
                ->join("monitors", "displays.monitors_id",  "monitors.id")
                ->join("marcas", "displays.marcas_id",  "marcas.id")
                ->join("modelos", "displays.modelos_id",  "modelos.id")
                ->join("condicions", "displays.condicions_id",  "condicions.id")
                ->edificio($edificio_id)
                ->direccion($direccion_id)
                ->subdireccion($subdireccion_id,$subdireccion_txt)
                ->coordinacion($coordinacion_id,$coordinacion_txt)
                ->monitor($monitors_id)
                ->marca($marca_id)
                ->modelo($modelo_id,$modelo_txt)
                ->tamanio($tamanio)
                ->inventario($inventario)
                ->serie($serie)
                ->usuario($usuario)
                ->estatus($estatus_id)
                ->condicion($condicion_id)
                ->select('displays.id',
                    'edificios.nombre as edificio',
                    'direccions.nombre as direccion',
                    'subdireccions.nombre as subdireccion',
                    'coordinacions.nombre as coordinacion',
                    'marcas.nombre as marca',
                    'modelos.nombre as modelo',
                    'monitors.nombre as TipoMonitor',
                    'displays.tamanio',
                    'displays.serie',
                    'displays.inventaro',
                    'displays.usuario',
                    'displays.estatus',
                    'condicions.nombre as condicion')
                ->get();

            return DataTables::of($monitors)
                ->addColumn('action', function($monitor)
                {
                    if ($monitor->estatus == 'Activo')
                    {
                        return '<a href="#" 
                        class="btn btn-sm btn-clean btn-icon edit"
                        onclick="cargarformulario(15.3,'.$monitor->id.',1);" 
                        title="Modificar" >
                         <i class="flaticon-edit-1 text-primary"></i>
                        </a>
                        <a href="#" 
                        class="btn btn-sm btn-clean btn-icon delete"
                        onclick="cargarformulario(15.4,'.$monitor->id.',1);"
                        title="Borrar" 
                        id="'.$monitor->id.'">
                        <i class="flaticon2-trash text-danger"></i>
                        </a>';


                    }else{

                        return '<a href="#" 
                        class="btn btn-sm btn-clean btn-icon delete"
                        onclick="cargarformulario(15.5,'.$monitor->id.',1);"
                        title="Mostrar" 
                        id="'.$monitor->id.'">
                        <i class="flaticon-eye text-primary"></i>
                        </a>';
                    }
                }
                )->make(true);
        }

    }

    public function getTotalDisplay(Request $request)
    {
        $edificio_id     = $request->get('edificio_id') == 'undefined' ? '1' : $request->get('edificio_id');
        $direccion_id    = $request->get('direccion_id') == 'undefined' ? '16' : $request->get('direccion_id');
        $subdireccion_id = $request->get('subdireccion_id');
        $subdireccion_txt= $request->get('subdireccion_txt');
        $coordinacion_id = $request->get('coordinacion_id');
        $coordinacion_txt= $request->get('coordinacion_txt');
        $monitors_id     = $request->get('tipo_monitor_id') == 'undefined' ? '1' : $request->get('tipo_monitor_id');
        $marca_id        = $request->get('marca_id') == 'undefined' ? '1' : $request->get('marca_id');
        $modelo_id       = $request->get('modelos_id');
        $modelo_txt      = $request->get('modelos_txt');
        $condicion_id    = $request->get('condicion_id') == 'undefined' ? '1' : $request->get('condicion_id');
        $inventario      = $request->get('inventario');
        $serie           = $request->get('serie');
        $usuario         = $request->get('usuario');
        $estatus_id      = $request->get('estatus_id') == 'undefined' ? 'Seleccione' : $request->get('estatus_id');


        $display=Display::
        join("edificios", "displays.edificios_id", "edificios.id")
            ->join("direccions", "displays.direccions_id",  "direccions.id")
            ->join("subdireccions", "displays.subdireccions_id",  "subdireccions.id")
            ->join("coordinacions", "displays.coordinacions_id",  "coordinacions.id")
            ->join("monitors", "displays.monitors_id",  "monitors.id")
            ->join("marcas", "displays.marcas_id",  "marcas.id")
            ->join("modelos", "displays.modelos_id",  "modelos.id")
            ->join("condicions", "displays.condicions_id",  "condicions.id")
            ->edificio($edificio_id)
            ->direccion($direccion_id)
            ->subdireccion($subdireccion_id,$subdireccion_txt)
            ->coordinacion($coordinacion_id,$coordinacion_txt)
            ->monitor($monitors_id)
            ->marca($marca_id)
            ->modelo($modelo_id,$modelo_txt)
            ->inventario($inventario)
            ->serie($serie)
            ->usuario($usuario)
            ->estatus($estatus_id)
            ->condicion($condicion_id)
            ->select('displays.id')
            ->get();


        $totalEquipos=[];


        $i=0;
        foreach($display as $dato) {
            $i++;
        }

        array_push($totalEquipos, [
            'totalEquipos' => $i
        ]);


        $status = 400;
        $response = [];

        if( !is_null($totalEquipos) )
        {
            $response = $totalEquipos;
            $status = 200;
        }
        return response()->json( compact('status','response') );

    }

    public function edit($id)
    {
        $equipos       =Display::find($id);
        $edificios     =Edificio::get(['nombre','id']);
        $direccions    =Direccion::get(['nombre','id']);

        $subdireccions =Subdireccion::where('direccion_id',$equipos->direccions_id)->get(['nombre','id']);
        $seleccione    =Coordinacion::where('id',$equipos->coordinacions_id)->select('nombre','id')->get();
        $coordinacions =Coordinacion::where('direccion_id',$equipos->direccions_id)->orderBy('nombre','asc')->get(['nombre','id']);
        $monitors      =Monitor::get(['nombre','id']);
        $marcas        =Marca::orderBy('nombre','asc')->get(['nombre','id']);
        $modelos       =Modelo::orderBy('nombre','asc')->where('equipo','MONITOR')->get(['nombre','id']);

        $usuario       =$equipos->usuario;
        $inventario    =$equipos->inventaro;
        $serie         =$equipos->serie;

        $condicions    =Condicion::orderBy('nombre','asc')->get(['nombre','id']);

        $observaciones =$equipos->observaciones;

        $id = $equipos->id;
        $direccions_id = $equipos->direccions_id;


        $es_seleccione='NO';

        $coord_aux=[];
        $coord=[];

        foreach($coordinacions as $dato)
        {
            array_push($coord_aux, [
                'id' => $dato->id,
                'nombre' => $dato->nombre,
            ]);
        }

        array_push($coord_aux, [
            'id' => 0,
            'nombre' => 'Seleccione'
        ]);


        foreach ($coord_aux as $dato){
            if ($es_seleccione == 'NO'){
                array_push($coord, [
                    'id'     => $dato['id'],
                    'nombre' => $dato['nombre'],
                ]);
            }

            if ($dato['nombre'] == 'Seleccione') {
                $es_seleccione='SI';
            }
        }

        foreach ($coord as $dato){
            if ($dato['nombre'] == 'Seleccione'){
                $coordinacions_id =$dato['id'];
            }
        }

        foreach ($seleccione as $dato){
            $seleccion=$dato->nombre;
        }


        return view('equipos.display.edit',
            compact('id','equipos','edificios','direccions','subdireccions','coord',
                'monitors','marcas','usuario','inventario',
                'serie','condicions','observaciones','modelos','seleccion','direccions_id','coordinacions_id'));
    }

    public function update(Request $request)
    {

        $equipos= Display::findOrFail($request->id);


        $equipos->edificios_id     = $request->edificios_id;
        $equipos->direccions_id    = $request->direccions_id;
        $equipos->subdireccions_id = $request->subdireccions_id;
        $equipos->coordinacions_id = $request->coordinacions_id;

        $equipos->monitors_id      = $request->monitors_id;
        $equipos->marcas_id        = $request->marcas_id;
        $equipos->modelos_id       = $request->modelos_id;
        $equipos->tamanio          = $request->tamanio;

        $equipos->fecha_compra     = $request->fecha_compra;

        $equipos->usuario          = $request->usuario;
        $equipos->inventaro        = $request->inventaro;
        $equipos->serie            = $request->serie;
        $equipos->condicions_id    = $request->condicions_id;
        $equipos->observaciones    = $request->observaciones;

        $equipos ->save();

        return response()->json($equipos);
    }

    public function store(Request $request)
    {

        $equipos= New Display();

        $equipos->edificios_id     = $request->edificios_id;
        $equipos->direccions_id    = $request->direccions_id;
        $equipos->subdireccions_id = $request->subdireccions_id;
        $equipos->coordinacions_id = $request->coordinacions_id;

        $equipos->monitors_id      = $request->monitors_id;
        $equipos->marcas_id        = $request->marcas_id;
        $equipos->modelos_id       = $request->modelos_id;
        $equipos->tamanio          = $request->tamanio;

        $equipos->fecha_compra     = $request->fecha_compra;

        $equipos->usuario          = $request->usuario;
        $equipos->inventaro        = $request->inventaro;
        $equipos->serie            = $request->serie;
        $equipos->condicions_id    = $request->condicions_id;
        $equipos->observaciones    = $request->observaciones;

        $equipos->estatus          = 'Activo';

        $equipos ->save();

        return response()->json($equipos);
    }

    public function create()
    {

        $edificios   = Edificio::select('id','nombre')->get();
        $direcciones = Direccion::select('id','nombre')->get();
        $monitors    = Monitor::select('id','nombre')->get();
        $marcas      = Marca::select('id','nombre')->get();
        $condiciones = Condicion::select('id','nombre')->get();

        return view('equipos.display.create',
            compact('edificios','direcciones','monitors','marcas','condiciones'));
    }

    public function getDestroy($id)
    {

        $equipos=Display::
        join("edificios", "displays.edificios_id", "edificios.id")
            ->join("direccions", "displays.direccions_id",  "direccions.id")
            ->join("subdireccions", "displays.subdireccions_id",  "subdireccions.id")
            ->join("coordinacions", "displays.coordinacions_id",  "coordinacions.id")
            ->join("monitors", "displays.monitors_id",  "monitors.id")
            ->join("marcas", "displays.marcas_id",  "marcas.id")
            ->join("modelos", "displays.modelos_id",  "modelos.id")
            ->join("condicions", "displays.condicions_id",  "condicions.id")
            ->where('displays.id',$id)
            ->select('displays.id',
                'edificios.nombre as edificio',
                'direccions.nombre as direccion',
                'subdireccions.nombre as subdireccion',
                'coordinacions.nombre as coordinacion',
                'marcas.nombre as marca',
                'modelos.nombre as modelo',
                'monitors.nombre as TipoMonitor',
                'displays.tamanio',
                'displays.serie',
                'displays.inventaro',
                'displays.usuario',
                'displays.estatus',
                'condicions.nombre as condicion')
            ->get();

        return view('equipos.display.delete',compact('id','equipos'));
    }

    public function getBaja(Request $request)
    {

        try {
            DB::beginTransaction();

            //Se actualiza el modelo CPU con el estatus de baja del equipo
            $equipos = Display::findOrFail($request->id);
            $equipos->estatus = 'Baja';
            $equipos->save();

            //Se crean los registros en la tabla baja
            $baja= New Baja();

            $baja->equipo_id     = $request->id;
            $baja->fecha_reporte = $request->fecha_reporte;
            $baja->fecha_baja    = $request->fecha_baja;
            $baja->n_orden       = $request->n_orden;
            $baja->obs_baja      = $request->obs_baja;
            $baja->descripcion   = $request->descripcion_baja;
            $baja->save();

            DB::commit();
        }catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error'=>'Error','messaje'=> $e]);
        }


        return response()->json($equipos);
    }

    public function verBaja($id)
    {

        $equipos=Display::
        join("edificios", "displays.edificios_id", "edificios.id")
            ->join("direccions", "displays.direccions_id",  "direccions.id")
            ->join("subdireccions", "displays.subdireccions_id",  "subdireccions.id")
            ->join("coordinacions", "displays.coordinacions_id",  "coordinacions.id")
            ->join("monitors", "displays.monitors_id",  "monitors.id")
            ->join("marcas", "displays.marcas_id",  "marcas.id")
            ->join("modelos", "displays.modelos_id",  "modelos.id")
            ->join("condicions", "displays.condicions_id",  "condicions.id")
            ->join("bajas", "displays.id",  "bajas.equipo_id")
            ->where('displays.id',$id)
            ->select('displays.id',
                'edificios.nombre as edificio',
                'direccions.nombre as direccion',
                'subdireccions.nombre as subdireccion',
                'coordinacions.nombre as coordinacion',
                'marcas.nombre as marca',
                'modelos.nombre as modelo',
                'monitors.nombre as TipoMonitor',
                'displays.tamanio',
                'displays.serie',
                'displays.inventaro',
                'displays.usuario',
                'displays.estatus',
                'condicions.nombre as condicion',
                'bajas.fecha_reporte',
                'bajas.fecha_baja',
                'bajas.n_orden',
                'bajas.obs_baja',
                'bajas.descripcion')
            ->get();

        return view('equipos.display.show',compact('equipos'));
    }

    function excel($edificio_id,$direccion_id,$subdireccion_id,$subdireccion_txt,$coordinacion_id,
                   $coordinacion_txt,$monitors_id,$marca_id,$modelos_id,$modelos_txt,$tamanio,$inventario,
                   $serie,$usuario,$estatus_id,$condicion_id)
    {
        $spreadsheet = IOFactory::load('xlsx/equipos_display.xlsx');
        $sheet = $spreadsheet->getActiveSheet();

        set_time_limit(3600);
        DB::enableQueryLog();


        $customer_data=Display::
        join("edificios", "displays.edificios_id", "edificios.id")
            ->join("direccions", "displays.direccions_id",  "direccions.id")
            ->join("subdireccions", "displays.subdireccions_id",  "subdireccions.id")
            ->join("coordinacions", "displays.coordinacions_id",  "coordinacions.id")
            ->join("monitors", "displays.monitors_id",  "monitors.id")
            ->join("marcas", "displays.marcas_id",  "marcas.id")
            ->join("modelos", "displays.modelos_id",  "modelos.id")
            ->join("condicions", "displays.condicions_id",  "condicions.id")
            ->edificio($edificio_id)
            ->direccion($direccion_id)
            ->subdireccion($subdireccion_id,$subdireccion_txt)
            ->coordinacion($coordinacion_id,$coordinacion_txt)
            ->monitor($monitors_id)
            ->marca($marca_id)
            ->modelo($modelos_id,$modelos_txt)
            ->tamanio($tamanio)
            ->inventario($inventario)
            ->serie($serie)
            ->usuario($usuario)
            ->estatus($estatus_id)
            ->condicion($condicion_id)
            ->select('displays.id',
                'edificios.nombre as edificio',
                'direccions.nombre as direccion',
                'subdireccions.nombre as subdireccion',
                'coordinacions.nombre as coordinacion',
                'marcas.nombre as marca',
                'modelos.nombre as modelo',
                'monitors.nombre as TipoMonitor',
                'displays.tamanio',
                'displays.serie',
                'displays.inventaro',
                'displays.usuario',
                'displays.estatus',
                'condicions.nombre as condicion')
            ->get();

        $index=5;
        $contador=0;


        foreach($customer_data as $customer)
        {
            $contador++;

            $sheet->getCell("A$index")->setValue($contador);
            $sheet->getCell("B$index")->setValue($customer->edificio);
            $sheet->getCell("C$index")->setValue($customer->direccion);
            $sheet->getCell("D$index")->setValue($customer->subdireccion);
            $sheet->getCell("E$index")->setValue($customer->coordinacion);
            $sheet->getCell("F$index")->setValue($customer->TipoMonitor);
            $sheet->getCell("G$index")->setValue($customer->marca);
            $sheet->getCell("H$index")->setValue($customer->modelo);
            $sheet->getCell("I$index")->setValue($customer->inventaro);
            $sheet->getCell("J$index")->setValue($customer->serie);
            $sheet->getCell("K$index")->setValue($customer->usuario);
            $sheet->getCell("L$index")->setValue($customer->estatus);
            $sheet->getCell("M$index")->setValue($customer->condicion);

            $index++;

        }


        $sheet->getCell("A3")->setValue("Total de MONITORES : " . $contador);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="parque-informtico-monitores.xlsx"');


        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
    }
}
