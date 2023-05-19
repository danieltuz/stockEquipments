<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use App\Models\Marca;
use App\Models\Programa;
use App\Models\Software;
use App\Models\TipoEquipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class SoftwareController extends Controller
{
    public function index()
    {
        $programas   = Programa::select('id','nombre')->get();
        $tipo_equipos= TipoEquipo::select('id','nombre')->where('tipo','CPU')->get();
        $marcas      = Marca::select('id','nombre')->get();
        $direcciones = Direccion::select('id','nombre')->get();
        return view('software.index',
            compact('programas','tipo_equipos','marcas','direcciones'));
    }

    public function getSoftware(Request $request)
    {

        set_time_limit(3600);
        DB::enableQueryLog();

        $programas_id     = $request->get('programas_id');
        $descripcion    = $request->get('descripcion');
        $tipo_equipo_id = $request->get('tipo_equipo_id');
        $marca_id= $request->get('marca_id');
        $modelos_txt = $request->get('modelos_txt');
        $modelos_id       = $request->get('modelos_id');
        $direccion_id= $request->get('direccion_id');
        $subdireccion_txt  = $request->get('subdireccion_txt');
        $subdireccion_id        = $request->get('subdireccion_id');
        $inventario      = $request->get('inventario');
        $serie   = $request->get('serie');
        $usuario       = $request->get('usuario');

        if(request()->ajax())
        {

        $softwares = Software
            ::join('programas' ,'software.programas_id','programas.id')
            ->join('cpus','software.cpus_id','cpus.id')
            ->join('tipo_equipos' ,'cpus.tipo_equipos_id','tipo_equipos.id')
            ->join('marcas' ,'cpus.marcas_id','marcas.id')
            ->join('modelos' ,'cpus.modelos_id','modelos.id')
            ->join('direccions' ,'cpus.direccions_id','direccions.id')
            ->join('subdireccions' ,'cpus.subdireccions_id','subdireccions.id')
            ->programa($programas_id)
            ->descripcion($descripcion)
            ->equipo($tipo_equipo_id)
            ->marca($marca_id)
            ->modelo($modelos_id,$modelos_txt)
            ->direccion($direccion_id)
            ->subdireccion($subdireccion_id,$subdireccion_txt)
            ->inventario($inventario)
            ->serie($serie)
            ->usuario($usuario)
            ->select('software.id',
               'programas.nombre as programa',
               'software.Descripcion',
               'direccions.nombre as direccion',
               'subdireccions.nombre as subdireccion',
               'tipo_equipos.nombre as tipoCpu',
               'marcas.nombre as marca',
               'modelos.nombre as modelo',
               'cpus.inventaro as inventario',
               'cpus.serie',
               'cpus.usuario')
            ->get();

            return DataTables::of($softwares)
                ->addColumn('action', function($software)
                {
                    return '<a href="#" 
                    class="btn btn-sm btn-clean btn-icon edit"
                    onclick="cargarformulario(18.3,'.$software->id.',1);" 
                    title="Modificar" >
                     <i class="flaticon-edit-1 text-primary"></i>
                    </a>
                    <a href="#" 
                    class="btn btn-sm btn-clean btn-icon delete"
                    onclick="cargarformulario(18.4,'.$software->id.',1);"
                    title="Borrar" 
                    id="'.$software->id.'">
                    <i class="flaticon2-trash text-danger"></i>
                    </a>';

                }
                )->make(true);
        }

    }

    public function getTotalSoftware(Request $request)
    {

        $programas_id    = $request->get('programas_id') == 'undefined' ? '1' : $request->get('programas_id');
        $descripcion     = $request->get('descripcion');
        $tipo_equipo_id  = $request->get('tipo_equipo_id') == 'undefined' ? '1' : $request->get('tipo_equipo_id');
        $marca_id        = $request->get('marca_id') == 'undefined' ? '1' : $request->get('marca_id');
        $modelos_id      = $request->get('modelos_id');
        $modelos_txt     = $request->get('modelos_txt');
        $direccion_id    = $request->get('direccion_id') == 'undefined' ? '16' : $request->get('direccion_id');
        $subdireccion_id = $request->get('subdireccion_id');
        $subdireccion_txt= $request->get('subdireccion_txt');
        $inventario      = $request->get('inventario');
        $serie           = $request->get('serie');
        $usuario         = $request->get('usuario');

        $softwares = Software
            ::join('programas' ,'software.programas_id','programas.id')
            ->join('cpus','software.cpus_id','cpus.id')
            ->join('tipo_equipos' ,'cpus.tipo_equipos_id','tipo_equipos.id')
            ->join('marcas' ,'cpus.marcas_id','marcas.id')
            ->join('modelos' ,'cpus.modelos_id','modelos.id')
            ->join('direccions' ,'cpus.direccions_id','direccions.id')
            ->join('subdireccions' ,'cpus.subdireccions_id','subdireccions.id')
            ->programa($programas_id)
            ->descripcion($descripcion)
            ->equipo($tipo_equipo_id)
            ->marca($marca_id)
            ->modelo($modelos_id,$modelos_txt)
            ->direccion($direccion_id)
            ->subdireccion($subdireccion_id,$subdireccion_txt)
            ->inventario($inventario)
            ->serie($serie)
            ->usuario($usuario)
            ->select('software.id')
            ->get();

        $totalEquipos=[];


        $i=0;
        foreach($softwares as $dato) {
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

    function excel($programas_id,$descripcion,$tipo_equipo_id,$marca_id,$modelos_id,$modelos_txt,
                   $direccion_id,$subdireccion_id,$subdireccion_txt,$inventario,$serie,$usuario)
    {
        $spreadsheet = IOFactory::load('xlsx/software.xlsx');
        $sheet = $spreadsheet->getActiveSheet();

        set_time_limit(3600);
        DB::enableQueryLog();


        $softwares = Software
            ::join('programas' ,'software.programas_id','programas.id')
            ->join('cpus','software.cpus_id','cpus.id')
            ->join('tipo_equipos' ,'cpus.tipo_equipos_id','tipo_equipos.id')
            ->join('marcas' ,'cpus.marcas_id','marcas.id')
            ->join('modelos' ,'cpus.modelos_id','modelos.id')
            ->join('direccions' ,'cpus.direccions_id','direccions.id')
            ->join('subdireccions' ,'cpus.subdireccions_id','subdireccions.id')
            ->programa($programas_id)
            ->descripcion($descripcion)
            ->equipo($tipo_equipo_id)
            ->marca($marca_id)
            ->modelo($modelos_id,$modelos_txt)
            ->direccion($direccion_id)
            ->subdireccion($subdireccion_id,$subdireccion_txt)
            ->inventario($inventario)
            ->serie($serie)
            ->usuario($usuario)
            ->select('software.id',
                'programas.nombre as programa',
                'software.descripcion',
                'tipo_equipos.nombre as tipoCpu',
                'marcas.nombre as marca',
                'modelos.nombre as modelo',
                'direccions.nombre as direccion',
                'subdireccions.nombre as subdireccion',
                'cpus.inventaro as inventario',
                'cpus.serie',
                'cpus.usuario')
            ->get();

        $index=6;
        $contador=0;


        foreach($softwares as $value)
        {
            $contador++;

            $sheet->getCell("A$index")->setValue($contador);
            $sheet->getCell("B$index")->setValue($value->programa);
            $sheet->getCell("C$index")->setValue($value->descripcion);
            $sheet->getCell("D$index")->setValue($value->tipoCpu);
            $sheet->getCell("E$index")->setValue($value->marca);
            $sheet->getCell("F$index")->setValue($value->modelo);
            $sheet->getCell("G$index")->setValue($value->direccion);
            $sheet->getCell("H$index")->setValue($value->subdireccion);
            $sheet->getCell("I$index")->setValue($value->inventario);
            $sheet->getCell("J$index")->setValue($value->serie);
            $sheet->getCell("K$index")->setValue($value->usuario);

            $index++;

        }


        $sheet->getCell("A4")->setValue("Total de equipos : " . $contador);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="software-cpus.xlsx"');


        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
    }

}
