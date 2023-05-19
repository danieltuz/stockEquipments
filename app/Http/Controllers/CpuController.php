<?php

namespace App\Http\Controllers;

use App\Models\Baja;
use App\Models\Condicion;
use App\Models\Coordinacion;
use App\Models\Cpu;
use App\Models\Direccion;
use App\Models\Edificio;
use App\Models\Hdd;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Procesador;
use App\Models\Ram;
use App\Models\So;
use App\Models\Subdireccion;
use App\Models\TipoEquipo;
use App\Models\Windows;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Yajra\DataTables\DataTables;

class CpuController extends Controller
{
    function index()
    {
        $edificios   = Edificio::select('id','nombre')->get();
        $direcciones = Direccion::select('id','nombre')->get();
        $tipo_equipos= TipoEquipo::select('id','nombre')->where('tipo','CPU')->get();
        $marcas      = Marca::select('id','nombre')->get();
        $procesadores= Procesador::select('id','nombre')->get();
        $windows     = Windows::select('id','win_version')->get();
        $sos         = So::select('id','nombre')->get();
        $condiciones = Condicion::select('id','nombre')->get();

//        $totalEquipos=Cpu::count();
        return view('equipos.cpu.index',
            compact('edificios','direcciones','tipo_equipos','marcas','procesadores','windows',
                'sos','condiciones'));
    }

    public function create()
    {

        $edificios   = Edificio::select('id','nombre')->get();
        $direcciones = Direccion::select('id','nombre')->get();
        $tipo_equipos= TipoEquipo::select('id','nombre')->where('tipo','CPU')->get();
        $marcas      = Marca::select('id','nombre')->get();
        $procesadores= Procesador::select('id','nombre')->get();
        $windows     = Windows::select('id','win_version')->get();
        $sos         = So::select('id','nombre')->get();
        $rams        = Ram::select('id','tipo_frecuencia')->get();
        $hdds        = Hdd::select('id','tipo_tamanio')->get();
        $condiciones = Condicion::select('id','nombre')->get();

        return view('equipos.cpu.create',
            compact('edificios','direcciones','tipo_equipos','marcas','procesadores','windows',
                'sos','condiciones','rams','hdds'));
    }

    public function store(Request $request)
    {
        $equipos= New Cpu();

        $equipos->edificios_id              = $request->edificios_id;
        $equipos->direccions_id             = $request->direccions_id;
        $equipos->subdireccions_id          = $request->subdireccions_id;
        $equipos->coordinacions_id          = $request->coordinacions_id;

        $equipos->tipo_equipos_id           = $request->tipo_cpus_id;
        $equipos->marcas_id                 = $request->marcas_id;
        $equipos->modelos_id                = $request->modelos_id;
        $equipos->procesadors_id            = $request->procesadors_id;
        $equipos->windows_id                = $request->windows_id;
        $equipos->sos_id                    = $request->sos_id;

        $equipos->n_bancos                  = $request->n_bancos;
        $equipos->tipo_frecuencia1          = $request->tipo_frecuencia1;
        $equipos->tamanio_ram1              = $request->tamanio_ram1;
        $equipos->medida1                   = $request->medida1;

        $equipos->tipo_frecuencia2          = $request->tipo_frecuencia2 == 'Seleccione' ? 1 : $request->tipo_frecuencia2;
        $equipos->tamanio_ram2              = $request->tamanio_ram2 == null ? 0 : $request->tamanio_ram2;
        $equipos->medida2                   = $request->medida2;

        $equipos->tipo_frecuencia3          = $request->tipo_frecuencia3 == 'Seleccione' ? 1 : $request->tipo_frecuencia3;
        $equipos->tamanio_ram3              = $request->tamanio_ram3 == null ? 0 : $request->tamanio_ram3;
        $equipos->medida3                   = $request->medida3;

        $equipos->tipo_frecuencia4          = $request->tipo_frecuencia4 == 'Seleccione' ? 1 : $request->tipo_frecuencia4;
        $equipos->tamanio_ram4              = $request->tamanio_ram4 == null ? 0 : $request->tamanio_ram4;
        $equipos->medida4                   = $request->medida4;

        $equipos->n_discos                  = $request->n_discos;
        $equipos->tipo_tamanio1             = $request->tipo_tamanio1;
        $equipos->tamanio_hdd1              = $request->tamanio_hdd1;

        $equipos->tipo_tamanio2             = $request->tipo_tamanio2 == 'Seleccione' ? 1 : $request->tipo_tamanio2;
        $equipos->tamanio_hdd2              = $request->tamanio_hdd2 == null ? 0 : $request->tamanio_hdd2;

        $equipos->tipo_tamanio3             = $request->tipo_tamanio3 == 'Seleccione' ? 1 : $request->tipo_tamanio3;
        $equipos->tamanio_hdd3              = $request->tamanio_hdd3 == null ? 0 : $request->tamanio_hdd3;

        $equipos->tipo_tamanio4             = $request->tipo_tamanio4 == 'Seleccione' ? 1 : $request->tipo_tamanio4;
        $equipos->tamanio_hdd4              = $request->tamanio_hdd4 == null ? 0 : $request->tamanio_hdd4;

        $equipos->fecha_compra              = $request->fecha_compra;

        $equipos->usuario                   = $request->usuario;
        $equipos->inventaro                 = $request->inventario;
        $equipos->serie                     = $request->serie;
        $equipos->condicions_id             = $request->condicions;
        $equipos->observaciones             = $request->observaciones;

        $equipos->nombre_host               = $request->nombre_host;
        $equipos->user_admin                = $request->user_admin;
        $equipos->pass_admin                = $request->pass_admin;
        $equipos->ethernet_ip               = $request->ethernet_ip;
        $equipos->ethernet_mac              = $request->ethernet_mac;
        $equipos->ethernet_speed            = $request->ethernet_speed;
        $equipos->wifi_ip                   = $request->wifi_ip;
        $equipos->wifi_mac                  = $request->wifi_mac;
        $equipos->tipo_red                  = $request->tipo_red;

        $equipos->estatus                   = 'Activo';

        $equipos ->save();

        return response()->json($equipos);

    }

    public function update(Request $request)
    {

        $equipos= Cpu::findOrFail($request->id);

        $equipos->edificios_id              = $request->edificios_id;
        $equipos->direccions_id             = $request->direccions_id;
        $equipos->subdireccions_id          = $request->subdireccions_id;
        $equipos->coordinacions_id          = $request->coordinacions_id;

        $equipos->tipo_equipos_id           = $request->tipo_cpus_id;
        $equipos->marcas_id                 = $request->marcas_id;
        $equipos->modelos_id                = $request->modelos_id;
        $equipos->procesadors_id            = $request->procesadors_id;
        $equipos->windows_id                = $request->windows_id;
        $equipos->sos_id                    = $request->sos_id;

        $equipos->n_bancos                  = $request->n_bancos;
        $equipos->tipo_frecuencia1          = $request->tipo_frecuencia1;
        $equipos->tamanio_ram1              = $request->tamanio_ram1;
        $equipos->medida1                   = $request->medida1;

        $equipos->tipo_frecuencia2          = $request->tipo_frecuencia2 == 'Seleccione' ? 1 : $request->tipo_frecuencia2;
        $equipos->tamanio_ram2              = $request->tamanio_ram2 == null ? 0 : $request->tamanio_ram2;
        $equipos->medida2                   = $request->medida2;

        $equipos->tipo_frecuencia3          = $request->tipo_frecuencia3 == 'Seleccione' ? 1 : $request->tipo_frecuencia3;
        $equipos->tamanio_ram3              = $request->tamanio_ram3 == null ? 0 : $request->tamanio_ram3;
        $equipos->medida3                   = $request->medida3;

        $equipos->tipo_frecuencia4          = $request->tipo_frecuencia4 == 'Seleccione' ? 1 : $request->tipo_frecuencia4;
        $equipos->tamanio_ram4              = $request->tamanio_ram4 == null ? 0 : $request->tamanio_ram4;
        $equipos->medida4                   = $request->medida4;

        $equipos->total_ram                 = $request->total_ram;

        $equipos->n_discos                  = $request->n_discos;
        $equipos->tipo_tamanio1             = $request->tipo_tamanio1;
        $equipos->tamanio_hdd1              = $request->tamanio_hdd1;

        $equipos->tipo_tamanio2             = $request->tipo_tamanio2 == 'Seleccione' ? 1 : $request->tipo_tamanio2;
        $equipos->tamanio_hdd2              = $request->tamanio_hdd2 == null ? 0 : $request->tamanio_hdd2;

        $equipos->tipo_tamanio3             = $request->tipo_tamanio3 == 'Seleccione' ? 1 : $request->tipo_tamanio3;
        $equipos->tamanio_hdd3              = $request->tamanio_hdd3 == null ? 0 : $request->tamanio_hdd3;

        $equipos->tipo_tamanio4             = $request->tipo_tamanio4 == 'Seleccione' ? 1 : $request->tipo_tamanio4;
        $equipos->tamanio_hdd4              = $request->tamanio_hdd4 == null ? 0 : $request->tamanio_hdd4;

        $equipos->total_hdd                 = $request->total_hdd;

        $equipos->fecha_compra              = $request->fecha_compra;

        $equipos->usuario                   = $request->usuario;
        $equipos->inventaro                 = $request->inventario;
        $equipos->serie                     = $request->serie;
        $equipos->condicions_id             = $request->condicions;
        $equipos->observaciones             = $request->observaciones;

        $equipos->nombre_host               = $request->nombre_host;
        $equipos->user_admin                = $request->user_admin;
        $equipos->pass_admin                = $request->pass_admin;
        $equipos->ethernet_ip               = $request->ethernet_ip;
        $equipos->ethernet_mac              = $request->ethernet_mac;
        $equipos->ethernet_speed            = $request->ethernet_speed;
        $equipos->wifi_ip                   = $request->wifi_ip;
        $equipos->wifi_mac                  = $request->wifi_mac;
        $equipos->tipo_red                  = $request->tipo_red;

        $equipos ->save();

        return response()->json($equipos);
    }

    public function edit($id)
    {
        $equipos       =CPU::find($id);
        $edificios     =Edificio::get(['nombre','id']);
        $direccions    =Direccion::get(['nombre','id']);

        $subdireccions =Subdireccion::
                        where('direccion_id',$equipos->direccions_id)
                        ->get(['nombre','id']);

        $seleccione    =Coordinacion::
                        where('id',$equipos->coordinacions_id)
                        ->select('nombre','id')
                        ->get();

        $coordinacions =Coordinacion::
                        where('direccion_id',$equipos->direccions_id)
                        ->orderBy('nombre','asc')
                        ->get(['nombre','id']);

        $tipoCpus      =TipoEquipo::
                        where('tipo','CPU')
                        ->get(['nombre','id']);

        $marcas        =Marca::
                        orderBy('nombre','asc')
                        ->get(['nombre','id']);

        $modelos       =Modelo::
                        orderBy('nombre','asc')
                        ->where('equipo','CPU')
                        ->get(['nombre','id']);

        $procesadors   =Procesador::
                        orderBy('nombre','asc')
                        ->get(['nombre','id']);

        $rams          =Ram::
                        orderBy('tipo_frecuencia','asc')
                        ->get(['tipo_frecuencia','id']);

        $hdds          =Hdd::
                        orderBy('tipo_tamanio','asc')
                        ->get(['tipo_tamanio','id']);

        $windows       =Windows::
                        orderBy('win_version','asc')
                        ->get(['win_version','id']);

        $sos           =So::
                        orderBy('nombre','asc')
                        ->get(['nombre','id']);

        $usuario       =$equipos->usuario;
        $inventario    =$equipos->inventaro;
        $serie         =$equipos->serie;

        $condicions    =Condicion::
                        orderBy('nombre','asc')
                        ->get(['nombre','id']);

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


       return view('equipos.cpu.edit',
           compact('id','equipos','edificios','direccions','subdireccions','coord',
               'tipoCpus','marcas','procesadors','rams','hdds','windows','sos','usuario','inventario',
               'serie','condicions','observaciones','modelos','seleccion','direccions_id','coordinacions_id'));
    }

    function excel($edificio_id,$direccion_id,$subdireccion_id,$subdireccion_txt,$coordinacion_id,$coordinacion_txt,
                   $tipo_equipo_id,$marca_id,$modelos_id,$modelos_txt,$procesador_id,$window_id,$so_id,$inventario,
                   $serie,$usuario,$estatus_id,$condicion_id)
    {
        $spreadsheet = IOFactory::load('xlsx/equipos.xlsx');
        $sheet = $spreadsheet->getActiveSheet();

        set_time_limit(3600);
        DB::enableQueryLog();


    $customer_data=Cpu::
    join("edificios", "cpus.edificios_id", "edificios.id")
        ->join("direccions", "cpus.direccions_id",  "direccions.id")
        ->join("subdireccions", "cpus.subdireccions_id",  "subdireccions.id")
        ->join("coordinacions", "cpus.coordinacions_id",  "coordinacions.id")
        ->join("tipo_equipos", "cpus.tipo_equipos_id",  "tipo_equipos.id")
        ->join("marcas", "cpus.marcas_id",  "marcas.id")
        ->join("modelos", "cpus.modelos_id",  "modelos.id")
        ->join("procesadors", "cpus.procesadors_id",  "procesadors.id")
        ->join("windows", "cpus.windows_id",  "windows.id")
        ->join("sos", "cpus.sos_id",  "sos.id")
        ->join("condicions", "cpus.condicions_id",  "condicions.id")
        ->edificio($edificio_id)
        ->direccion($direccion_id)
        ->subdireccion($subdireccion_id,$subdireccion_txt)
        ->coordinacion($coordinacion_id,$coordinacion_txt)
        ->equipo($tipo_equipo_id)
        ->marca($marca_id)
        ->modelo($modelos_id,$modelos_txt)
        ->procesador($procesador_id)
        ->window($window_id)
        ->so($so_id)
        ->inventario($inventario)
        ->serie($serie)
        ->usuario($usuario)
        ->estatus($estatus_id)
        ->condicion($condicion_id)
        ->select('cpus.id',
            'edificios.nombre as edificio',
            'direccions.nombre as direccion',
            'subdireccions.nombre as subdireccion',
            'coordinacions.nombre as coordinacion',
            'tipo_equipos.nombre as TipoCpu',
            'marcas.nombre as marca',
            'modelos.nombre as modelo',
            'procesadors.nombre as procesador',
            'windows.nombre as windows',
            'sos.nombre as so',
            'cpus.serie',
            'cpus.inventaro',
            'cpus.usuario',
            'cpus.estatus',
            'cpus.total_ram',
            'cpus.total_hdd',
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
            $sheet->getCell("F$index")->setValue($customer->TipoCpu);
            $sheet->getCell("G$index")->setValue($customer->marca);
            $sheet->getCell("H$index")->setValue($customer->modelo);
            $sheet->getCell("I$index")->setValue($customer->procesador);
            $sheet->getCell("J$index")->setValue($customer->total_ram);
            $sheet->getCell("K$index")->setValue($customer->total_hdd);
            $sheet->getCell("L$index")->setValue($customer->windows);
            $sheet->getCell("M$index")->setValue($customer->so);
            $sheet->getCell("N$index")->setValue($customer->serie);
            $sheet->getCell("O$index")->setValue($customer->inventaro);
            $sheet->getCell("P$index")->setValue($customer->usuario);
            $sheet->getCell("Q$index")->setValue($customer->estatus);
            $sheet->getCell("R$index")->setValue($customer->condicion);

            $index++;

        }


        $sheet->getCell("A3")->setValue("Total de CPUS : " . $contador);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="parque-informtico-cpus.xlsx"');


        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
    }

    public function getCpus(Request $request)
    {
        set_time_limit(3600);
        DB::enableQueryLog();

        $edificio_id     = $request->get('edificio_id');
        $direccion_id    = $request->get('direccion_id');
        $subdireccion_id = $request->get('subdireccion_id');
        $subdireccion_txt= $request->get('subdireccion_txt');
        $coordinacion_id = $request->get('coordinacion_id');
        $coordinacion_txt= $request->get('coordinacion_txt');
        $tipo_equipo_id  = $request->get('tipo_equipo_id');
        $marca_id        = $request->get('marca_id');
        $modelo_id       = $request->get('modelos_id');
        $modelo_txt      = $request->get('modelos_txt');
        $procesador_id   = $request->get('procesador_id');
        $window_id       = $request->get('window_id');
        $so_id           = $request->get('so_id');
        $condicion_id    = $request->get('condicion_id');
        $inventario      = $request->get('inventario');
        $serie           = $request->get('serie');
        $usuario         = $request->get('usuario');
        $estatus_id      = $request->get('estatus_id');


        if(request()->ajax())
        {
            $cpus=Cpu::
            join("edificios", "cpus.edificios_id", "edificios.id")
                ->join("direccions", "cpus.direccions_id",  "direccions.id")
                ->join("subdireccions", "cpus.subdireccions_id",  "subdireccions.id")
                ->join("coordinacions", "cpus.coordinacions_id",  "coordinacions.id")
                ->join("tipo_equipos", "cpus.tipo_equipos_id",  "tipo_equipos.id")
                ->join("marcas", "cpus.marcas_id",  "marcas.id")
                ->join("modelos", "cpus.modelos_id",  "modelos.id")
                ->join("procesadors", "cpus.procesadors_id",  "procesadors.id")
                ->join("windows", "cpus.windows_id",  "windows.id")
                ->join("sos", "cpus.sos_id",  "sos.id")
                ->join("condicions", "cpus.condicions_id",  "condicions.id")
                ->edificio($edificio_id)
                ->direccion($direccion_id)
                ->subdireccion($subdireccion_id,$subdireccion_txt)
                ->coordinacion($coordinacion_id,$coordinacion_txt)
                ->equipo($tipo_equipo_id)
                ->marca($marca_id)
                ->modelo($modelo_id,$modelo_txt)
                ->procesador($procesador_id)
                ->window($window_id)
                ->so($so_id)
                ->inventario($inventario)
                ->serie($serie)
                ->usuario($usuario)
                ->estatus($estatus_id)
                ->condicion($condicion_id)
                ->select('cpus.id',
                    'edificios.nombre as edificio',
                    'direccions.nombre as direccion',
                    'subdireccions.nombre as subdireccion',
                    'coordinacions.nombre as coordinacion',
                    'tipo_equipos.nombre as TipoCpu',
                    'marcas.nombre as marca',
                    'modelos.nombre as modelo',
                    'procesadors.nombre as procesador',
                    'windows.nombre as windows',
                    'sos.nombre as so',
                    'cpus.serie',
                    'cpus.inventaro',
                    'cpus.usuario',
                    'cpus.estatus',
                    'condicions.nombre as condicion')
                ->get();

            return DataTables::of($cpus)
                ->addColumn('action', function($cpu)
                {
                    if ($cpu->estatus == 'Activo')
                    {
                        return '<a href="#" 
                        class="btn btn-sm btn-clean btn-icon edit"
                        onclick="cargarformulario(14.3,'.$cpu->id.',1);" 
                        title="Modificar" >
                         <i class="flaticon-edit-1 text-primary"></i>
                        </a>
                        <a href="#" 
                        class="btn btn-sm btn-clean btn-icon delete"
                        onclick="cargarformulario(14.4,'.$cpu->id.',1);"
                        title="Borrar" 
                        id="'.$cpu->id.'">
                        <i class="flaticon2-trash text-danger"></i>
                        </a>';


                    }else{

                        return '<a href="#" 
                        class="btn btn-sm btn-clean btn-icon delete"
                        onclick="cargarformulario(14.5,'.$cpu->id.',1);"
                        title="Mostrar" 
                        id="'.$cpu->id.'">
                        <i class="flaticon-eye text-primary"></i>
                        </a>';
                    }
                }
                )->make(true);
        }

    }

    public function getTotalCpus(Request $request)
    {
        $edificio_id     = $request->get('edificio_id') == 'undefined' ? '1' : $request->get('edificio_id');
        $direccion_id    = $request->get('direccion_id') == 'undefined' ? '16' : $request->get('direccion_id');
        $subdireccion_id = $request->get('subdireccion_id');
        $subdireccion_txt= $request->get('subdireccion_txt');
        $coordinacion_id = $request->get('coordinacion_id');
        $coordinacion_txt= $request->get('coordinacion_txt');
        $tipo_equipo_id  = $request->get('tipo_equipo_id') == 'undefined' ? '1' : $request->get('tipo_equipo_id');
        $marca_id        = $request->get('marca_id') == 'undefined' ? '1' : $request->get('marca_id');
        $modelo_id       = $request->get('modelos_id');
        $modelo_txt      = $request->get('modelos_txt');
        $procesador_id   = $request->get('procesador_id') == 'undefined' ? '1' : $request->get('procesador_id');
        $window_id       = $request->get('window_id') == 'undefined' ? '1' : $request->get('window_id');
        $so_id           = $request->get('so_id') == 'undefined' ? '1' : $request->get('so_id');
        $condicion_id    = $request->get('condicion_id') == 'undefined' ? '1' : $request->get('condicion_id');
        $inventario      = $request->get('inventario');
        $serie           = $request->get('serie');
        $usuario         = $request->get('usuario');
        $estatus_id      = $request->get('estatus_id') == 'undefined' ? 'Seleccione' : $request->get('estatus_id');


        $cpus=Cpu::
        join("edificios", "cpus.edificios_id", "edificios.id")
            ->join("direccions", "cpus.direccions_id",  "direccions.id")
            ->join("subdireccions", "cpus.subdireccions_id",  "subdireccions.id")
            ->join("coordinacions", "cpus.coordinacions_id",  "coordinacions.id")
            ->join("tipo_equipos", "cpus.tipo_equipos_id",  "tipo_equipos.id")
            ->join("marcas", "cpus.marcas_id",  "marcas.id")
            ->join("modelos", "cpus.modelos_id",  "modelos.id")
            ->join("procesadors", "cpus.procesadors_id",  "procesadors.id")
            ->join("windows", "cpus.windows_id",  "windows.id")
            ->join("sos", "cpus.sos_id",  "sos.id")
            ->join("condicions", "cpus.condicions_id",  "condicions.id")
            ->edificio($edificio_id)
            ->direccion($direccion_id)
            ->subdireccion($subdireccion_id,$subdireccion_txt)
            ->coordinacion($coordinacion_id,$coordinacion_txt)
            ->equipo($tipo_equipo_id)
            ->marca($marca_id)
            ->modelo($modelo_id,$modelo_txt)
            ->procesador($procesador_id)
            ->window($window_id)
            ->so($so_id)
            ->inventario($inventario)
            ->serie($serie)
            ->usuario($usuario)
            ->estatus($estatus_id)
            ->condicion($condicion_id)
            ->select('cpus.id')
            ->get();

        $totalEquipos=[];


        $i=0;
        foreach($cpus as $dato) {
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

    public function getModelo($marcas_id,$tipoEquipo){

        $modelos = Modelo::join('marcas','modelos.marcas_id','marcas.id')
            ->where('marcas.id',$marcas_id)
            ->where('modelos.equipo',$tipoEquipo)
            ->select('modelos.nombre','modelos.id')
            ->orderBy('modelos.nombre','asc')
            ->get();

        $model=[];


        array_push($model, [
            'id' => 1,
            'nombre' => 'Seleccione'
        ]);

        foreach($modelos as $dato)
        {
            array_push($model, [
                'id' => $dato->id,
                'nombre' => $dato->nombre,
            ]);
        }


        $status = 400;
        $response = [];

        if( !is_null($model) )
        {
            $response = $model;
            $status = 200;
        }

        return response()->json( compact('status','response') );

    }

    public function getSubdireccion($direccions_id){

        $subdirecciones =Subdireccion::where('direccion_id',$direccions_id)
            ->orderBy('nombre','asc')
            ->get(['nombre','id']);

        $subdireccion=[];

        foreach($subdirecciones as $dato)
        {

            array_push($subdireccion, [
                'id' => $dato->id,
                'nombre' => $dato->nombre,
            ]);

        }


        $status = 400;
        $response = [];

        if( !is_null($subdireccion) )
        {
            $response = $subdireccion;
            $status = 200;
        }

        return response()->json( compact('status','response') );

    }

    public function getCoordinacion($direccions_id,$subdireccions_id){

        $coordinacions =Coordinacion
            ::where('direccion_id',$direccions_id)
            ->where('subdireccion_id',$subdireccions_id)
            ->orderBy('nombre','asc')
            ->get(['nombre','id']);

        $es_seleccione='NO';
        $coord=[];

        foreach($coordinacions as $dato)
        {

            if ($es_seleccione == 'NO'){
                array_push($coord, [
                    'id' => $dato->id,
                    'nombre' => $dato->nombre,
                ]);
            }

            if ($dato->nombre == 'Seleccione') {
                $es_seleccione='SI';
            }

        }


        $status = 400;
        $response = [];

        if( !is_null($coord) )
        {
            $response = $coord;
            $status = 200;
        }

        return response()->json( compact('status','response') );

    }

    public function getDestroy($id)
    {

        $equipos=Cpu::
        join("edificios", "cpus.edificios_id", "edificios.id")
            ->join("direccions", "cpus.direccions_id",  "direccions.id")
            ->join("subdireccions", "cpus.subdireccions_id",  "subdireccions.id")
            ->join("coordinacions", "cpus.coordinacions_id",  "coordinacions.id")
            ->join("tipo_equipos", "cpus.tipo_equipos_id",  "tipo_equipos.id")
            ->join("marcas", "cpus.marcas_id",  "marcas.id")
            ->join("modelos", "cpus.modelos_id",  "modelos.id")
            ->join("procesadors", "cpus.procesadors_id",  "procesadors.id")
            ->join("windows", "cpus.windows_id",  "windows.id")
            ->join("sos", "cpus.sos_id",  "sos.id")
            ->join("condicions", "cpus.condicions_id",  "condicions.id")
            ->where('cpus.id',$id)
            ->select('cpus.id',
                'edificios.nombre as edificio',
                'direccions.nombre as direccion',
                'subdireccions.nombre as subdireccion',
                'coordinacions.nombre as coordinacion',
                'tipo_equipos.nombre as TipoCpu',
                'marcas.nombre as marca',
                'modelos.nombre as modelo',
                'procesadors.nombre as procesador',
                'windows.nombre as windows',
                'sos.nombre as so',
                'cpus.serie',
                'cpus.inventaro',
                'cpus.usuario',
                'cpus.estatus',
                'condicions.nombre as condicion',
                'cpus.total_ram',
                'cpus.total_hdd')
            ->get();

        return view('equipos.cpu.delete',compact('id','equipos'));
    }

    public function getBaja(Request $request)
    {

        try {
            DB::beginTransaction();

            //Se actualiza el modelo CPU con el estatus de baja del equipo
            $equipos = Cpu::findOrFail($request->id);
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

        $equipos=Cpu::
        join("edificios", "cpus.edificios_id", "edificios.id")
            ->join("direccions", "cpus.direccions_id",  "direccions.id")
            ->join("subdireccions", "cpus.subdireccions_id",  "subdireccions.id")
            ->join("coordinacions", "cpus.coordinacions_id",  "coordinacions.id")
            ->join("tipo_equipos", "cpus.tipo_equipos_id",  "tipo_equipos.id")
            ->join("marcas", "cpus.marcas_id",  "marcas.id")
            ->join("modelos", "cpus.modelos_id",  "modelos.id")
            ->join("procesadors", "cpus.procesadors_id",  "procesadors.id")
            ->join("windows", "cpus.windows_id",  "windows.id")
            ->join("sos", "cpus.sos_id",  "sos.id")
            ->join("condicions", "cpus.condicions_id",  "condicions.id")
            ->join("bajas", "cpus.id",  "bajas.equipo_id")
            ->where('cpus.id',$id)
            ->select('cpus.id',
                'edificios.nombre as edificio',
                'direccions.nombre as direccion',
                'subdireccions.nombre as subdireccion',
                'coordinacions.nombre as coordinacion',
                'tipo_equipos.nombre as TipoCpu',
                'marcas.nombre as marca',
                'modelos.nombre as modelo',
                'procesadors.nombre as procesador',
                'windows.nombre as windows',
                'sos.nombre as so',
                'cpus.serie',
                'cpus.inventaro',
                'cpus.usuario',
                'cpus.estatus',
                'condicions.nombre as condicion',
                'cpus.total_ram',
                'cpus.total_hdd',
                'bajas.fecha_reporte',
                'bajas.fecha_baja',
                'bajas.n_orden',
                'bajas.obs_baja',
                'bajas.descripcion')
            ->get();

        return view('equipos.cpu.show',compact('equipos'));
    }

}
