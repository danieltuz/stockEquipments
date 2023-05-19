<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 12/09/2022
 * Time: 11:31 AM
 */

namespace App\Methods;

use App\Models\Condicion;
use App\Models\Coordinacion;
use App\Models\Direccion;
use App\Models\Edificio;
use App\Models\Monitor;
use App\Models\Procesador;
use App\Models\Ram;
use App\Models\Subdireccion;
use App\Models\Hdd;
use App\Models\Marca;
use App\Models\So;
use App\Models\TipoEquipo;
use App\Models\User;
use App\Models\Windows;
use App\Models\Modelo;
use Illuminate\Support\Str;

class Equipment
{
    public function Duplicados($request,$pantalla){

        switch ($pantalla){
            case "Catalogo Direccion":

                $valor = Str::slug($request->nombre_direccion);
                $existe=Direccion::where('slug',$valor)->count();
                break;

            case "Catalogo Subdireccion":
                $valor = Str::slug($request->nombre);
                $existe=Subdireccion::where('slug',$valor)
                    ->where('direccion_id',$request->direccion_id)
                    ->count();
                break;

            case "Catalogo Coordinacion":
                $valor = Str::slug($request->nombre);
                $existe=Coordinacion::where('slug',$valor)
                    ->where('direccion_id',$request->direccion_id)
                    ->where('subdireccion_id',$request->subdireccion_id)
                    ->count();
                break;

            case "Catalogo Edificio":
                $valor = Str::slug($request->nombre);
                $existe=Edificio::where('slug',$valor)->count();
                break;

            case "Catalogo HDD":

                $tipo   = Str::slug($request->tipo);
                $tamanio= Str::slug($request->tamanio);

                $valor= $tipo . '-' . $tamanio;
                $existe=Hdd::where('slug',$valor)->count();
                break;

            case "Catalogo Marca":
                $valor= Str::slug($request->nombre);
                $existe=Marca::where('slug',$valor)->count();
                break;

            case "Catalogo Modelos":
                $valor= Str::slug($request->nombre);
                $existe=Modelo::where('slug',$valor)->count();
                break;

            case "Catalogo Tipo Monitor":
                $valor= Str::slug($request->nombre);
                $existe=Monitor::where('slug',$valor)->count();
                break;

            case "Catalogo Procesadores":
                $valor= Str::slug($request->nombre);
                $existe=Procesador::where('slug',$valor)->count();
                break;

            case "Catalogo RAM":
                $tipo= Str::slug($request->tipo);
                $frecuencia= Str::slug($request->frecuencia);

                $valor= $tipo . '-' . $frecuencia;
                $existe=Ram::where('slug',$valor)->count();
                break;

            case "Catalogo Condicion":

                $valor= Str::slug($request->nombre);
                $existe=Condicion::where('slug',$valor)->count();
                break;

            case "Catalogo Software":
                $valor= Str::slug($request->nombre);
                $existe=Programa::where('slug',$valor)->count();
                break;

            case "Catalogo SO":
                $valor= Str::slug($request->nombre);
                $existe=So::where('slug',$valor)->count();
                break;

            case "Catalogo Sistema Operativo":
                $nombre = Str::slug($request->nombre);
                $version= Str::slug($request->version);

                $valor= $nombre . '-' . $version;
                $existe=Windows::where('slug',$valor)->count();
                break;

            case "Catalogo Usuarios":
                $existe=User::where('email',$request->email)->count();
                break;

            case "Catalogo Tipo Equipo":
                $valor= Str::slug($request->nombre);
                $existe=TipoEquipo::where('slug',$valor)->count();
                break;

        }
        return $existe;
    }

}