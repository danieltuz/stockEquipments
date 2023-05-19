<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cpu extends Model
{
    use HasFactory;

    protected $fillable = [
        'edificios_id',
        'direccions_id',
        'subdireccions_id',
        'coordinacions_id',
        'tipo_equipos_id',
        'marcas_id',
        'modelos_id',
        'procesadors_id',
        'n_bancos',
        'tipo_frecuencia1',
        'tipo_frecuencia2',
        'tipo_frecuencia3',
        'tipo_frecuencia4',
        'n_discos',
        'tipo_tamanio1',
        'tipo_tamanio2',
        'tipo_tamanio3',
        'tipo_tamanio4',
        'nombre_host',
        'ethernet_mac',
        'ethernet_ip',
        'ethernet_speed',
        'wifi_mac',
        'wifi_ip',
        'tipo_red',
        'user_admin',
        'pass_admin',
        'usuario',
        'inventaro',
        'serie',
        'windows_id',
        'sos_id',
        'condicions_id',
        'observaciones',
        'estatus',
        'fecha_compra'
    ];


    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];


    public function scopeEdificio($query, $edificio_id)
    {
        if ($edificio_id == '1'){
            $edificio_id=null;
        }
        if (trim($edificio_id))
            return $query->where('cpus.edificios_id',"$edificio_id");
    }

    public function scopeDireccion($query, $direccion_id)
    {
        if ($direccion_id == '16'){
            $direccion_id=null;
        }
        if (trim($direccion_id))
            return $query->where('cpus.direccions_id',"$direccion_id");
    }

    public function scopeSubdireccion($query, $subdireccion_id,$subdireccion_txt)
    {

        if ($subdireccion_txt == 'Seleccione'){
            $subdireccion_id=null;
        }

        if (trim($subdireccion_id))
            return $query->where('cpus.subdireccions_id',"$subdireccion_id");
    }

    public function scopeCoordinacion($query, $coordinacion_id,$coordinacion_txt)
    {

        if ($coordinacion_txt == 'Seleccione'){
            $coordinacion_id=null;
        }

        if (trim($coordinacion_id))
            return $query->where('cpus.coordinacions_id',"$coordinacion_id");
    }

    public function scopeEquipo($query, $tipo_equipos_id)
    {

        if ($tipo_equipos_id == '1'){
            $tipo_equipos_id=null;
        }
        if (trim($tipo_equipos_id))
            return $query->where('cpus.tipo_equipos_id',"$tipo_equipos_id");

    }

    public function scopeMarca($query, $marca_id)
    {
        if ($marca_id == '1'){
            $marca_id=null;
        }
        if (trim($marca_id))
            return $query->where('cpus.marcas_id',"$marca_id");

    }

    public function scopeModelo($query, $modelo_id,$modelo_txt)
    {
        if ($modelo_txt == 'Seleccione'){
            $modelo_id=null;
        }
        if (trim($modelo_id))
            return $query->where('cpus.modelos_id',"$modelo_id");
    }

    public function scopeProcesador($query, $procesador_id)
    {
        if ($procesador_id == '1'){
            $procesador_id=null;
        }
        if (trim($procesador_id))
            return $query->where('cpus.procesadors_id',"$procesador_id");

    }

    public function scopeRam($query, $ram_id)
    {
        if ($ram_id == '1'){
            $ram_id=null;
        }
        if (trim($ram_id))
            return $query->where('cpus.rams_id',"$ram_id");

    }

    public function scopeHdd($query, $hdd_id)
    {
        if ($hdd_id == '1'){
            $hdd_id =null;
        }
        if (trim($hdd_id ))
            return $query->where('cpus.hdds_id',"$hdd_id ");

    }

    public function scopeWindow($query, $window_id)
    {
        if ($window_id == '1'){
            $window_id =null;
        }
        if (trim($window_id ))
            return $query->where('cpus.windows_id',"$window_id ");

    }

    public function scopeSo($query, $so_id)
    {
        if ($so_id == '1'){
            $so_id =null;
        }
        if (trim($so_id ))
            return $query->where('cpus.sos_id',"$so_id");

    }

    public function scopeInventario($query, $inventario)
    {
        if (strlen(trim($inventario)) == 0){
            $inventario=null;
        }

        if ($inventario == 'disabled'){
            $inventario=null;
        }

        if (trim($inventario))
            return $query->where('cpus.inventaro','LIKE',"%$inventario%");
    }

    public function scopeSerie($query, $serie)
    {
        if (strlen(trim($serie)) == 0){
            $serie=null;
        }

        if ($serie == 'disabled'){
            $serie=null;
        }

        if (trim($serie))
            return $query->where('cpus.serie','LIKE',"%$serie%");
    }

    public function scopeUsuario($query, $usuario)
    {
        if (strlen(trim($usuario)) == 0){
            $usuario=null;
        }

        if ($usuario == 'disabled'){
            $usuario=null;
        }

        if (trim($usuario))
            return $query->where('cpus.usuario','LIKE',"%$usuario%");
    }

    public function scopeEstatus($query, $estatus_id)
    {
        if ($estatus_id == 'Seleccione'){
            $estatus_id=null;
        }
        if ($estatus_id)
            return $query->where('cpus.estatus',"$estatus_id");
    }

    public function scopeCondicion($query, $condicion_id)
    {
        if ($condicion_id == '1'){
            $condicion_id=null;
        }
        if (trim($condicion_id))
            return $query->where('cpus.condicions_id',"$condicion_id");
    }

}
