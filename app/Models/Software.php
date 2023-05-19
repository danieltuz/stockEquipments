<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;

    protected $table = 'software';

    protected $fillable = [
        'programas_id',
        'TipoPrograma',
        'Descripcion',
        'Licencia',
        'LlaveActivacion',
        'vigencia',
        'f_inicio',
        'f_fin',
        'cpus_id',
        'FecInstalacion',
        'TecnicoInstalador',
        'Usuario',
        'n_orden',
        'n_papeleta',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];


    public function scopePrograma($query, $programas_id)
    {
        if ($programas_id == '1'){
            $programas_id =null;
        }
        if (trim($programas_id ))
            return $query->where('software.programas_id',"$programas_id");

    }

    public function scopeDescripcion($query, $descripcion)
    {
        if (strlen(trim($descripcion)) == 0){
            $descripcion=null;
        }

        if ($descripcion == 'disabled'){
            $descripcion=null;
        }

        if (trim($descripcion))
            return $query->where('software.descripcion','LIKE',"%$descripcion%");
    }

    public function scopeEquipo($query, $tipo_equipo_id)
    {

        if ($tipo_equipo_id == '1'){
            $tipo_equipo_id=null;
        }
        if (trim($tipo_equipo_id))
            return $query->where('cpus.tipo_equipos_id',"$tipo_equipo_id");

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

}

