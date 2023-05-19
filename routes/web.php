<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('catalogos/panel','PanelController@panel_catalogos')->name('catalogos.panel');

//******************************************EDIFICIO*************************************************
Route::get('catalogos/edificio','EdificioController@index')->name('catalogos.edificio.index');
Route::get('catalogos/edificio/getEdificio', 'EdificioController@getEdificio')->name('catalogos.edificio.getEdificio');
Route::get('catalogos/edificio/{id}/edit','EdificioController@edit')->name('catalogos.edificio.edit');
Route::post('catalogos/edificio/update', 'EdificioController@update')->name('catalogos.edificio.update');
Route::get('catalogos/edificio/create','EdificioController@create')->name('catalogos.edificio.create');
Route::post('catalogos/edificio/store', 'EdificioController@store')->name('catalogos.edificio.store');
Route::get('catalogos/edificio/{id}/getDestroy', 'EdificioController@getDestroy')->name('catalogos.edificio.getDestroy');
Route::get('catalogos/edificio/destroy/{id}', 'EdificioController@destroy')->name('catalogos.edificio.destroy');

//******************************************DIRECCIONES***********************************************
Route::get('catalogos/direccion','DireccionController@index')->name('catalogos.direccion.index');
Route::get('catalogos/direccion/getDireccion', 'DireccionController@getDireccion')->name('catalogos.direccion.getDireccion');
Route::get('catalogos/direccion/{id}/edit','DireccionController@edit')->name('catalogos.direccion.edit');
Route::post('catalogos/direccion/update', 'DireccionController@update')->name('catalogos.direccion.update');
Route::get('catalogos/direccion/create','DireccionController@create')->name('catalogos.direccions.create');
Route::post('catalogos/direccion/store', 'DireccionController@store')->name('catalogos.direccion.store');
Route::get('catalogos/direccion/{id}/getDestroy', 'DireccionController@getDestroy')->name('catalogos.direccion.getDestroy');
Route::get('catalogos/direccion/destroy/{id}', 'DireccionController@destroy')->name('catalogos.direccion.destroy');

//******************************************SUBDIRECCIONES*************************************************

Route::get('catalogos/subdireccion','SubdireccionController@index')->name('catalogos.subdireccion.index');
Route::get('catalogos/subdireccion/getSubDireccion', 'SubdireccionController@getSubDireccion')->name('catalogos.subdireccion.getSubDireccion');
Route::get('catalogos/subdireccion/getDireccion', 'SubdireccionController@getDireccion')->name('catalogos.subdireccion.getDireccion');
Route::get('catalogos/subdireccion/{direccion_id}/getSubdireccionSeleccion', 'SubdireccionController@getSubdireccionSeleccion')->name('catalogos.subdireccion.getSubdireccionSeleccion');
Route::get('catalogos/subdireccion/{id}/edit','SubdireccionController@edit')->name('catalogos.subdireccion.edit');
Route::post('catalogos/subdireccion/update', 'SubdireccionController@update')->name('catalogos.subdireccion.update');
Route::get('catalogos/subdireccion/create','SubdireccionController@create')->name('catalogos.subdireccion.create');
Route::post('catalogos/subdireccion/store', 'SubdireccionController@store')->name('catalogos.subdireccion.store');
Route::get('catalogos/subdireccion/{id}/getDestroy', 'SubdireccionController@getDestroy')->name('catalogos.subdireccion.getDestroy');
Route::get('catalogos/subdireccion/destroy/{id}', 'SubdireccionController@destroy')->name('catalogos.subdireccion.destroy');

//******************************************COORDINACIONES*************************************************

Route::get('catalogos/coordinacion','CoordinacionController@index')->name('catalogos.coordinacion.index');
Route::get('catalogos/coordinacion/getDireccion', 'CoordinacionController@getDireccion')->name('catalogos.coordinacion.getDireccion');
Route::get('catalogos/coordinacion/{direccion_id}/getSubdireccionSeleccion', 'CoordinacionController@getSubdireccionSeleccion')->name('catalogos.coordinacion.getSubdireccionSeleccion');
Route::get('catalogos/coordinacion/{direccion_id}/{subdireccion_id}/getCoordinacionSeleccion', 'CoordinacionController@getCoordinacionSeleccion')->name('catalogos.coordinacion.getCoordinacionSeleccion');
Route::get('catalogos/coordinacion/getCoordinacion', 'CoordinacionController@getCoordinacion')->name('catalogos.coordinacion.getCoordinacion');
Route::get('catalogos/coordinacion/{id}/edit','CoordinacionController@edit')->name('catalogos.coordinacion.edit');
Route::get('catalogos/coordinacion/create','CoordinacionController@create')->name('catalogos.coordinacion.create');
Route::post('catalogos/coordinacion/store', 'CoordinacionController@store')->name('catalogos.coordinacion.store');
Route::post('catalogos/coordinacion/update', 'CoordinacionController@update')->name('catalogos.coordinacion.update');
Route::get('catalogos/coordinacion/{id}/getDestroy', 'CoordinacionController@getDestroy')->name('catalogos.coordinacion.getDestroy');
Route::get('catalogos/coordinacion/destroy/{id}', 'CoordinacionController@destroy')->name('catalogos.coordinacion.destroy');

//******************************************HDD*************************************************
Route::get('catalogos/hdd','HddController@index')->name('catalogos.hdd.index');
Route::get('catalogos/hdd/getHdd', 'HddController@getHdd')->name('catalogos.hdd.getHdd');
Route::get('catalogos/hdd/{id}/edit','HddController@edit')->name('catalogos.hdd.edit');
Route::post('catalogos/hdd/update', 'HddController@update')->name('catalogos.hdd.update');
Route::get('catalogos/hdd/create','HddController@create')->name('catalogos.hdd.create');
Route::post('catalogos/hdd/store', 'HddController@store')->name('catalogos.hdd.store');
Route::get('catalogos/hdd/{id}/getDestroy', 'HddController@getDestroy')->name('catalogos.hdd.getDestroy');
Route::get('catalogos/hdd/destroy/{id}', 'HddController@destroy')->name('catalogos.hdd.destroy');

//******************************************TIPO EQUIPOS*************************************************
Route::get('catalogos/tipo_equipos','TipoEquipoController@index')->name('catalogos.tipo_equipos.index');
Route::get('catalogos/tipo_equipos/getTipoEquipos', 'TipoEquipoController@getTipoEquipos')->name('catalogos.tipo_equipos.getTipoEquipos');
Route::get('catalogos/tipo_equipos/{id}/edit','TipoEquipoController@edit')->name('catalogos.tipo_equipos.edit');
Route::post('catalogos/tipo_equipos/update', 'TipoEquipoController@update')->name('catalogos.tipo_equipos.update');
Route::get('catalogos/tipo_equipos/create','TipoEquipoController@create')->name('catalogos.tipo_equipos.create');
Route::post('catalogos/tipo_equipos/store', 'TipoEquipoController@store')->name('catalogos.tipo_equipos.store');
Route::get('catalogos/tipo_equipos/{id}/getDestroy', 'TipoEquipoController@getDestroy')->name('catalogos.tipo_equipos.getDestroy');
Route::get('catalogos/tipo_equipos/destroy/{id}', 'TipoEquipoController@destroy')->name('catalogos.tipo_equipos.destroy');

//******************************************MARCA*************************************************
Route::get('catalogos/marca','MarcaController@index')->name('catalogos.marca.index');
Route::get('catalogos/marca/getMarca', 'MarcaController@getMarca')->name('catalogos.marca.getMarca');
Route::get('catalogos/marca/{id}/edit','MarcaController@edit')->name('catalogos.marca.edit');
Route::post('catalogos/marca/update', 'MarcaController@update')->name('catalogos.marca.update');
Route::get('catalogos/marca/create','MarcaController@create')->name('catalogos.marca.create');
Route::post('catalogos/marca/store', 'MarcaController@store')->name('catalogos.marca.store');
Route::get('catalogos/marca/{id}/getDestroy', 'MarcaController@getDestroy')->name('catalogos.marca.getDestroy');
Route::get('catalogos/marca/destroy/{id}', 'MarcaController@destroy')->name('catalogos.marca.destroy');

//******************************************MODELO*************************************************
Route::get('catalogos/modelo','ModeloController@index')->name('catalogos.modelo.index');
Route::get('catalogos/modelo/getModelo', 'ModeloController@getModelo')->name('catalogos.modelo.getModelo');
Route::get('catalogos/modelo/{marcas_id}/getModl', 'ModeloController@getModl')->name('catalogos.modelo.getModl');
Route::get('catalogos/modelo/getMarca', 'ModeloController@getMarca')->name('catalogos.modelo.getMarca');
Route::get('catalogos/modelo/{tipoEquipo}/modelsCpuDisplay', 'ModeloController@modelsCpuDisplay')->name('catalogos.modelo.modelsCpuDisplay');
Route::get('catalogos/modelo/{id}/edit','ModeloController@edit')->name('catalogos.modelo.edit');
Route::post('catalogos/modelo/update', 'ModeloController@update')->name('catalogos.modelo.update');
Route::get('catalogos/modelo/create','ModeloController@create')->name('catalogos.modelo.create');
Route::post('catalogos/modelo/store', 'ModeloController@store')->name('catalogos.modelo.store');
Route::get('catalogos/modelo/{id}/getDestroy', 'ModeloController@getDestroy')->name('catalogos.modelo.getDestroy');
Route::get('catalogos/modelo/destroy/{id}', 'ModeloController@destroy')->name('catalogos.modelo.destroy');

//******************************************MONITOR*************************************************
Route::get('catalogos/monitor','MonitorController@index')->name('catalogos.monitor.index');
Route::get('catalogos/monitor/getMonitor', 'MonitorController@getMonitor')->name('catalogos.monitor.getMonitor');
Route::get('catalogos/monitor/{id}/edit','MonitorController@edit')->name('catalogos.monitor.edit');
Route::post('catalogos/monitor/update', 'MonitorController@update')->name('catalogos.monitor.update');
Route::get('catalogos/monitor/create','MonitorController@create')->name('catalogos.monitor.create');
Route::post('catalogos/monitor/store', 'MonitorController@store')->name('catalogos.monitor.store');
Route::get('catalogos/monitor/{id}/getDestroy', 'MonitorController@getDestroy')->name('catalogos.monitor.getDestroy');
Route::get('catalogos/monitor/destroy/{id}', 'MonitorController@destroy')->name('catalogos.monitor.destroy');

//******************************************PROCESADOR*************************************************
Route::get('catalogos/procesador','ProcesadorController@index')->name('catalogos.procesador.index');
Route::get('catalogos/procesador/getProcesador', 'ProcesadorController@getProcesador')->name('catalogos.procesador.getProcesador');
Route::get('catalogos/procesador/getProc', 'ProcesadorController@getProc')->name('catalogos.procesador.getProc');
Route::get('catalogos/procesador/getSocket', 'ProcesadorController@getSocket')->name('catalogos.procesador.getSocket');
Route::get('catalogos/procesador/{id}/edit','ProcesadorController@edit')->name('catalogos.procesador.edit');
Route::post('catalogos/procesador/update', 'ProcesadorController@update')->name('catalogos.procesador.update');
Route::get('catalogos/procesador/create','ProcesadorController@create')->name('catalogos.procesador.create');
Route::post('catalogos/procesador/store', 'ProcesadorController@store')->name('catalogos.procesador.store');
Route::get('catalogos/procesador/{id}/getDestroy', 'ProcesadorController@getDestroy')->name('catalogos.procesador.getDestroy');
Route::get('catalogos/procesador/destroy/{id}', 'ProcesadorController@destroy')->name('catalogos.procesador.destroy');

//******************************************RAM*************************************************
Route::get('catalogos/ram','RamController@index')->name('catalogos.ram.index');
Route::get('catalogos/ram/getRam', 'RamController@getRam')->name('catalogos.ram.getRam');
Route::get('catalogos/ram/getTiposRam', 'RamController@getTiposRam')->name('catalogos.ram.getTiposRam');
Route::get('catalogos/ram/{id}/edit','RamController@edit')->name('catalogos.ram.edit');
Route::post('catalogos/ram/update', 'RamController@update')->name('catalogos.ram.update');
Route::get('catalogos/ram/create','RamController@create')->name('catalogos.ram.create');
Route::post('catalogos/ram/store', 'RamController@store')->name('catalogos.ram.store');
Route::get('catalogos/ram/{id}/getDestroy', 'RamController@getDestroy')->name('catalogos.ram.getDestroy');
Route::get('catalogos/ram/destroy/{id}', 'RamController@destroy')->name('catalogos.ram.destroy');

//******************************************CONDICION EQUIPO*************************************************
Route::get('catalogos/condicion','CondicionController@index')->name('catalogos.condicion.index');
Route::get('catalogos/condicion/getCondicion', 'CondicionController@getCondicion')->name('catalogos.condicion.getCondicion');
Route::get('catalogos/condicion/{id}/edit','CondicionController@edit')->name('catalogos.condicion.edit');
Route::post('catalogos/condicion/update', 'CondicionController@update')->name('catalogos.condicion.update');
Route::get('catalogos/condicion/create','CondicionController@create')->name('catalogos.condicion.create');
Route::post('catalogos/condicion/store', 'CondicionController@store')->name('catalogos.condicion.store');
Route::get('catalogos/condicion/{id}/getDestroy', 'CondicionController@getDestroy')->name('catalogos.condicion.getDestroy');
Route::get('catalogos/condicion/destroy/{id}', 'CondicionController@destroy')->name('catalogos.condicion.destroy');

//******************************************SO*************************************************
Route::get('catalogos/so','SoController@index')->name('catalogos.so.index');
Route::get('catalogos/so/getSo', 'SoController@getSo')->name('catalogos.so.getSo');
Route::get('catalogos/so/{id}/edit','SoController@edit')->name('catalogos.so.edit');
Route::post('catalogos/so/update', 'SoController@update')->name('catalogos.so.update');
Route::get('catalogos/so/create','SoController@create')->name('catalogos.so.create');
Route::post('catalogos/so/store', 'SoController@store')->name('catalogos.so.store');
Route::get('catalogos/so/{id}/getDestroy', 'SoController@getDestroy')->name('catalogos.so.getDestroy');
Route::get('catalogos/so/destroy/{id}', 'SoController@destroy')->name('catalogos.so.destroy');

//******************************************WINDOWS*************************************************
Route::get('catalogos/windows','WindowsController@index')->name('catalogos.windows.index');
Route::get('catalogos/windows/getWin', 'WindowsController@getWin')->name('catalogos.windows.getWin');
Route::get('catalogos/windows/getSo', 'WindowsController@getSo')->name('catalogos.windows.getSo');
Route::get('catalogos/windows/{id}/edit','WindowsController@edit')->name('catalogos.windows.edit');
Route::post('catalogos/windows/update', 'WindowsController@update')->name('catalogos.windows.update');
Route::get('catalogos/windows/create','WindowsController@create')->name('catalogos.windows.create');
Route::post('catalogos/windows/store', 'WindowsController@store')->name('catalogos.windows.store');
Route::get('catalogos/windows/{id}/getDestroy', 'WindowsController@getDestroy')->name('catalogos.windows.getDestroy');
Route::get('catalogos/windows/destroy/{id}', 'WindowsController@destroy')->name('catalogos.windows.destroy');

//******************************************SOFTWARE*************************************************
Route::get('software','SoftwareController@index')->name('software.index');
Route::get('software/getSoftware','SoftwareController@getSoftware')->name('software.getSoftware');
Route::get('software/getTotalSoftware','SoftwareController@getTotalSoftware')->name('software.getTotalSoftware');
Route::get('software/excel/{programas_id}/{descripcion}/{tipo_equipo_id}/{marca_id}/{modelos_id}/{modelos_txt}/{direccion_id}/{subdireccion_id}/{subdireccion_txt}/{inventario}/{serie}/{usuario}','SoftwareController@excel')->name('software.excel');

//====================================================================================================
//▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓ EQUIPOS  ▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓
//====================================================================================================

//******************************************CPU*************************************************
Route::get('equipos/cpu', 'CpuController@index')->name('equipos.cpu.index');
Route::get('equipos/cpu/getCpus','CpuController@getCpus')->name('equipos.cpu.getCpus');
Route::get('equipos/cpu/getTotalCpus','CpuController@getTotalCpus')->name('equipos.cpu.getTotalCpus');
Route::get('equipos/cpu/create','CpuController@create')->name('equipos.cpu.create');
Route::get('equipos/cpu/{direccions_id}/getSubdireccion', 'CpuController@getSubdireccion')->name('equipos.cpu.getSubdireccion');
Route::get('equipos/cpu/{direccions_id}/{subdireccions_id}/getCoordinacion', 'CpuController@getCoordinacion')->name('equipos.cpu.getCoordinacion');
Route::get('equipos/cpu/{marcas_id}/{tipoEquipo}/getModelo', 'CpuController@getModelo')->name('equipos.cpu.getModelo');
Route::post('equipos/cpu/store','CpuController@store')->name('equipos.cpu.store');
Route::get('equipos/cpu/{id}/edit','CpuController@edit')->name('equipos.cpu.edit');
Route::post('equipos/cpu/update', 'CpuController@update')->name('equipos.cpu.update');

Route::get('equipos/cpu/{id}/getDestroy', 'CpuController@getDestroy')->name('equipos.cpu.getDestroy');
Route::get('equipos/cpu/getBaja', 'CpuController@getBaja')->name('equipos.cpu.getBaja');
Route::get('equipos/cpu/{id}/verBaja','CpuController@verBaja')->name('equipos.cpu.verBaja');

Route::get('equipos/cpu/excel/{edificio_id}/{direccion_id}/{subdireccion_id}/{subdireccion_txt}/{coordinacion_id}/{coordinacion_txt}/{tipo_equipo_id}/{marca_id}/{modelos_id}/{modelos_txt}/{procesador_id}/{window_id}/{so_id}/{inventario}/{serie}/{usuario}/{estatus_id}/{condicion_id}','CpuController@excel')->name('equipos.cpu.excel');

//****************************************** DISPLAY *************************************************
Route::get('equipos/display', 'DisplayController@index')->name('equipos.display.index');
Route::get('equipos/display/getDisplay','DisplayController@getDisplay')->name('equipos.display.getDisplay');
Route::get('equipos/display/getTotalDisplay','DisplayController@getTotalDisplay')->name('equipos.display.getTotalDisplay');
Route::get('equipos/display/{id}/edit','DisplayController@edit')->name('equipos.display.edit');
Route::post('equipos/display/update', 'DisplayController@update')->name('equipos.display.update');
Route::get('equipos/display/create', 'DisplayController@create')->name('equipos.display.create');
Route::post('equipos/display/store','DisplayController@store')->name('equipos.display.store');

Route::get('equipos/display/{id}/getDestroy', 'DisplayController@getDestroy')->name('equipos.display.getDestroy');
Route::get('equipos/display/getBaja', 'DisplayController@getBaja')->name('equipos.display.getBaja');
Route::get('equipos/display/{id}/verBaja','DisplayController@verBaja')->name('equipos.display.verBaja');

Route::get('equipos/display/excel/{lst_edificio_id}/{lst_direccion_id}/{lst_subdireccion_id}/{lst_subdireccion_txt}/{lst_coordinacion_id}/{lst_coordinacion_txt}/{lst_tipo_monitor_id}/{lst_marca_id}/{lst_modelos_id}/{lst_modelos_txt}/{txt_tamanio}/{txt_inventario}/{txt_serie}/{txt_usuario}/{lst_estatus}/{lst_condicion_id}','DisplayController@excel')->name('equipos.display.excel');