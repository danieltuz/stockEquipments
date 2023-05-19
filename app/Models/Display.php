<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Display extends Model
{
    use HasFactory;

    protected $fillable = [
        'edificios_id',
        'direccions_id',
        'subdireccions_id',
        'coordinacions_id',
        'marcas_id',
        'modelos_id',
        'usuario',
        'inventaro',
        'monitors_id',
        'serie',
        'tamanio',
        'condicions_id',
        'observaciones',
        'estatus',
        'fecha_compra',
    ];


    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function scopeEdificio($query, $edificio_id)
    {
        if ($edificio_id == '1'){
            $edificio_id=null;
        }
        if (trim($edificio_id))
            return $query->where('displays.edificios_id',"$edificio_id");
    }

    public function scopeDireccion($query, $direccion_id)
    {
        if ($direccion_id == '16'){
            $direccion_id=null;
        }
        if (trim($direccion_id))
            return $query->where('displays.direccions_id',"$direccion_id");
    }

    public function scopeSubdireccion($query, $subdireccion_id,$subdireccion_txt)
    {

        if ($subdireccion_txt == 'Seleccione'){
            $subdireccion_id=null;
        }

        if (trim($subdireccion_id))
            return $query->where('displays.subdireccions_id',"$subdireccion_id");
    }

    public function scopeCoordinacion($query, $coordinacion_id,$coordinacion_txt)
    {

        if ($coordinacion_txt == 'Seleccione'){
            $coordinacion_id=null;
        }

        if (trim($coordinacion_id))
            return $query->where('displays.coordinacions_id',"$coordinacion_id");
    }

    public function scopeMonitor($query, $monitors_id)
    {

        if ($monitors_id == '1'){
            $monitors_id=null;
        }
        if (trim($monitors_id))
            return $query->where('displays.monitors_id',"$monitors_id");

    }

    public function scopeMarca($query, $marca_id)
    {
        if ($marca_id == '1'){
            $marca_id=null;
        }
        if (trim($marca_id))
            return $query->where('displays.marcas_id',"$marca_id");

    }

    public function scopeModelo($query, $modelo_id,$modelo_txt)
    {
        if ($modelo_txt == 'Seleccione'){
            $modelo_id=null;
        }
        if (trim($modelo_id))
            return $query->where('displays.modelos_id',"$modelo_id");
    }

    public function scopeTamanio($query, $tamanio)
    {
        if (strlen(trim($tamanio)) == 0){
            $tamanio=null;
        }

        if ($tamanio == 'disabled'){
            $tamanio=null;
        }

        if (trim($tamanio))
            return $query->where('displays.tamanio','LIKE',"%$tamanio%");
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
            return $query->where('displays.inventaro','LIKE',"%$inventario%");
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
            return $query->where('displays.serie','LIKE',"%$serie%");
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
            return $query->where('displays.usuario','LIKE',"%$usuario%");
    }

    public function scopeEstatus($query, $estatus_id)
    {
        if ($estatus_id == 'Seleccione'){
            $estatus_id=null;
        }
        if ($estatus_id)
            return $query->where('displays.estatus',"$estatus_id");
    }

    public function scopeCondicion($query, $condicion_id)
    {
        if ($condicion_id == '1'){
            $condicion_id=null;
        }
        if (trim($condicion_id))
            return $query->where('displays.condicions_id',"$condicion_id");
    }

}
