function CargaDataTableNuevaBusqueda()
{
    //se destruye el datatable de los detalles de la direccion
    //para que al volver a cargar otros detalles se carguen correctamente
    $('#kt_datatable').DataTable().clear();
    $('#kt_datatable').DataTable().destroy();

    KTDatatables.init();
}


function getTotalEquipos($tipoEquipo){

    $('#totalEquipos').html('---');

    var lst_edificio_id = $('#edificio_id').val();
    var lst_direccion_id = $('#direccion_id').val();

    if ($('#subdireccion_id').val() != null) {

        var combo_sub = document.getElementById("subdireccion_id");
        var sel_sub = combo_sub.options[combo_sub.selectedIndex].text;
        var lst_subdireccion_txt = sel_sub;
        var lst_subdireccion_id = $('#subdireccion_id').val();

    }else{

        var lst_subdireccion_txt = 'Seleccione';
        var lst_subdireccion_id = null;
    }

    if ($('#coordinacion_id').val() != null) {
        var combo_cor = document.getElementById("coordinacion_id");
        var sel_cor = combo_cor.options[combo_cor.selectedIndex].text;
        var lst_coordinacion_txt = sel_cor;
        var lst_coordinacion_id = $('#coordinacion_id').val();

    }else{

        var lst_coordinacion_txt = 'Seleccione';
        var lst_coordinacion_id = null;
    }

    var lst_tipo_equipo_id = $('#tipo_equipos_id').val();
    var lst_tipo_monitor_id = $('#tipo_monitor_id').val();
    var lst_marca_id = $('#marcas_id').val();

    var combo_mod = document.getElementById("modelos_index_id");
    var sel_mod = combo_mod.options[combo_mod.selectedIndex].text;
    var lst_modelos_txt = sel_mod;
    var lst_modelos_id = $('#modelos_index_id').val();

    debugger;
    var lst_procesador_id = $('#procesador_id').val();      //
    var lst_ram_id = $('#ram_id').val();
    var lst_hdd_id = $('#hdd_id').val();
    var lst_window_id = $('#window_id').val();              //
    var lst_so_id = $('#so_id').val();                      //
    var txt_inventario = $('#inventario').val();
    var txt_serie = $('#serie').val();
    var txt_usuario = $('#usuario').val();
    var lst_estatus = $('#estatus_id').val();
    var lst_condicion_id = $('#condicion_id').val();        //

    var lst_programas_id = $('#programas_id').val();
    var txt_descripcion = $('#descripcion').val();

    switch ($tipoEquipo) {

        case 'CPU':
            url= '/equipos/cpu/getTotalCpus?edificio_id=' + lst_edificio_id +
                "&direccion_id=" + lst_direccion_id +
                "&subdireccion_id=" + lst_subdireccion_id +
                "&subdireccion_txt=" + lst_subdireccion_txt +
                "&coordinacion_id=" + lst_coordinacion_id +
                "&coordinacion_txt=" + lst_coordinacion_txt +
                "&tipo_equipo_id=" + lst_tipo_equipo_id +
                "&marca_id=" + lst_marca_id +
                "&modelos_id=" + lst_modelos_id +
                "&modelos_txt=" + lst_modelos_txt +
                "&procesador_id=" + lst_procesador_id +
                "&window_id=" + lst_window_id +
                "&so_id=" + lst_so_id +
                "&inventario=" + txt_inventario +
                "&serie=" + txt_serie +
                "&usuario=" + txt_usuario +
                "&estatus_id=" + lst_estatus +
                "&condicion_id=" + lst_condicion_id;
            break;

        case 'MONITOR':

            url= '/equipos/display/getTotalDisplay?edificio_id=' + lst_edificio_id +
                "&direccion_id=" + lst_direccion_id +
                "&subdireccion_id=" + lst_subdireccion_id +
                "&subdireccion_txt=" + lst_subdireccion_txt +
                "&coordinacion_id=" + lst_coordinacion_id +
                "&coordinacion_txt=" + lst_coordinacion_txt +
                "&tipo_monitor_id=" + lst_tipo_monitor_id +
                "&marca_id=" + lst_marca_id +
                "&modelos_id=" + lst_modelos_id +
                "&modelos_txt=" + lst_modelos_txt +
                "&inventario=" + txt_inventario +
                "&serie=" + txt_serie +
                "&usuario=" + txt_usuario +
                "&estatus_id=" + lst_estatus +
                "&condicion_id=" + lst_condicion_id;
            break;

        case 'SOFTWARE':
            url= '/software/getTotalSoftware?programas_id=' + lst_programas_id +
            "&descripcion=" + txt_descripcion +
            "&tipo_equipo_id=" + lst_tipo_equipo_id +
            "&marca_id=" + lst_marca_id +
            "&modelos_txt=" + lst_modelos_txt +
            "&modelos_id=" + lst_modelos_id +
            "&direccion_id=" + lst_direccion_id +
            "&subdireccion_txt=" + lst_subdireccion_txt +
            "&subdireccion_id=" + lst_subdireccion_id +
            "&inventario=" + txt_inventario +
            "&serie=" + txt_serie +
            "&usuario=" + txt_usuario;
            break;

    }

    $.get(url, function (response) {
        if (response.status == 200) {

            tipo = response.response;

            html = '';

            $.each(tipo, function (i, item){
                html += `${item.totalEquipos}`
            });

            $('#totalEquipos').html(html);
        }
        else {
            toastr.error('Ocurrió un error al comunicarse con el servidor');
        }
    }).fail(function (err) {
        toastr.error(err);
    });

}

//*************************************************************
//******* valida los select de las opciones de busqueda********
//*************************************************************

$('#edificio_id').change(function () {

    var equipo = $('#hidden_tipoEquipo').val();

    cambiaColorBordeSelect('edificio_id','btn_close_edificio','red');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);

});

$('#direccion_id').change(function () {

    var equipo = $('#hidden_tipoEquipo').val();

    //ejecuta la accion del clic del boton rojo X del select subdireccion
    let sub_id= $('#hidden_subdireccion_id').val();
    $('#subdireccion_id').val(sub_id);

    //ejecuta la accion del clic del boton rojo X del select coordinacion
    let cor_id= $('#hidden_coordinacion_id').val();
    $('#coordinacion_id').val(cor_id);

    //carga las subdirecciones y coordinaciones
    let dir_id    = $('#direccion_id').val();
    let subdir_id = $('#subdireccion_id').val();

    cargarSubdireccion(dir_id,'Index');
    cargarCoordinacion(dir_id,subdir_id,'Index');

    cambiaColorBordeSelect('direccion_id','btn_close_direccion','red');

    CargaDataTableNuevaBusqueda();

    getTotalEquipos(equipo);
});

$('#subdireccion_id').change(function () {

    var equipo = $('#hidden_tipoEquipo').val();

    //carga las coordinaciones
    let dir_id    = $('#direccion_id').val();
    let subdir_id = $('#subdireccion_id').val();

    cargarCoordinacion(dir_id,subdir_id,'Index');
    cambiaColorBordeSelect('subdireccion_id','btn_close_subdireccion','red');

    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#coordinacion_id').change(function () {

    var equipo = $('#hidden_tipoEquipo').val();

    cambiaColorBordeSelect('coordinacion_id','btn_close_coordinacion','red');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#tipo_equipos_id').change(function () {

    var equipo = $('#hidden_tipoEquipo').val();

    cambiaColorBordeSelect('tipo_equipos_id','btn_close_tipo_equipo','red');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#tipo_monitor_id').change(function () {

    var equipo = $('#hidden_tipoEquipo').val();

    cambiaColorBordeSelect('tipo_monitor_id','btn_close_tipo_monitor_id','red');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#programas_id').change(function () {

    var equipo = $('#hidden_tipoEquipo').val();

    cambiaColorBordeSelect('programas_id','btn_close_programas','red');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#marcas_id').change(function () {

    var equipo = $('#hidden_tipoEquipo').val();
    let mar_id = $('#marcas_id').val();
    let vieneDePantalla = 'Index';
    let tipoEquipo = $('#hidden_marca_tipoEquipo').val();   //CPU, MONITOR

    cargarModelo(mar_id,tipoEquipo,vieneDePantalla);
    $('#modelos_index_id').val('Seleccione');
    cambiaColorBordeSelect('marcas_id','btn_close_marcas','red');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#modelos_index_id').change(function () {

    var equipo = $('#hidden_tipoEquipo').val();
    cambiaColorBordeSelect('modelos_index_id','btn_close_modelos','red');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#procesador_id').change(function () {

    var equipo = $('#hidden_tipoEquipo').val();
    cambiaColorBordeSelect('procesador_id','btn_close_procesador','red');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#ram_id').change(function () {

    var equipo = $('#hidden_tipoEquipo').val();
    cambiaColorBordeSelect('ram_id','btn_close_ram','red');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#hdd_id').change(function () {

    var equipo = $('#hidden_tipoEquipo').val();
    cambiaColorBordeSelect('hdd_id','btn_close_hdd','red');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#window_id').change(function () {

    var equipo = $('#hidden_tipoEquipo').val();
    cambiaColorBordeSelect('window_id','btn_close_window','red');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#so_id').change(function () {

    var equipo = $('#hidden_tipoEquipo').val();
    cambiaColorBordeSelect('so_id','btn_close_so','red');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#inventario').change(function () {

    var equipo = $('#hidden_tipoEquipo').val();
    cambiaColorBordeSelect('inventario','btn_close_inventario','red');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#serie').change(function () {

    var equipo = $('#hidden_tipoEquipo').val();
    cambiaColorBordeSelect('serie','btn_close_serie','red');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#descripcion').change(function () {

    var equipo = $('#hidden_tipoEquipo').val();
    cambiaColorBordeSelect('descripcion','btn_close_descripcion','red');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#usuario').change(function () {

    var equipo = $('#hidden_tipoEquipo').val();
    cambiaColorBordeSelect('usuario','btn_close_usuario','red');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#estatus_id').change(function () {

    var equipo = $('#hidden_tipoEquipo').val();
    cambiaColorBordeSelect('estatus_id','btn_close_estatus','red');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#condicion_id').change(function () {

    var equipo = $('#hidden_tipoEquipo').val();
    cambiaColorBordeSelect('condicion_id','btn_close_condicion','red');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

//*************************************************************
//******* botones rojos que limpian la seleccion **************
//*************************************************************

$('#btn_close_programas').on('click',function () {
    $('#programas_id').val(1);

    var equipo = $('#hidden_tipoEquipo').val();
    cambiaColorBordeSelect('programas_id','btn_close_programas','#CCCCCC');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#btn_close_edificio').on('click',function () {
    $('#edificio_id').val(1);

    var equipo = $('#hidden_tipoEquipo').val();
    cambiaColorBordeSelect('edificio_id','btn_close_edificio','#CCCCCC');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#btn_close_direccion').on('click',function () {

    var equipo = $('#hidden_tipoEquipo').val();

    //selecciona la opcion "Seleccione"
    $('#direccion_id').val(16);

    //selecciona la opcion "Seleccione"
    let sub_id= $('#hidden_subdireccion_id').val();
    $('#subdireccion_id').val(sub_id);

    //selecciona la opcion "Seleccione"
    let cor_id= $('#hidden_coordinacion_id').val();
    $('#coordinacion_id').val(cor_id);

    cambiaColorBordeSelect('direccion_id','btn_close_direccion','#CCCCCC');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#btn_close_subdireccion').on('click',function () {

    var equipo = $('#hidden_tipoEquipo').val();
    let sub_id= $('#hidden_subdireccion_id').val();
    $('#subdireccion_id').val(sub_id);

    cambiaColorBordeSelect('subdireccion_id','btn_close_subdireccion','#CCCCCC');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#btn_close_coordinacion').on('click',function () {

    var equipo = $('#hidden_tipoEquipo').val();
    let cor_id= $('#hidden_coordinacion_id').val();
    $('#coordinacion_id').val(cor_id);

    cambiaColorBordeSelect('coordinacion_id','btn_close_coordinacion','#CCCCCC');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#btn_close_tipo_equipo').on('click',function () {

    var equipo = $('#hidden_tipoEquipo').val();
    $('#tipo_equipos_id').val(1);

    cambiaColorBordeSelect('tipo_equipos_id','btn_close_tipo_equipo','#CCCCCC');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#btn_close_marcas').on('click',function () {

    var equipo = $('#hidden_tipoEquipo').val();
    $('#marcas_id').val(1);
    $('#modelos_index_id').val('Seleccione');

    cambiaColorBordeSelect('marcas_id','btn_close_marcas','#CCCCCC');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#btn_close_modelos').on('click',function () {

    var equipo = $('#hidden_tipoEquipo').val();
    $('#modelos_index_id').val('Seleccione');

    cambiaColorBordeSelect('modelos_index_id','btn_close_modelos','#CCCCCC');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#btn_close_procesador').on('click',function () {

    var equipo = $('#hidden_tipoEquipo').val();
    $('#procesador_id').val(1);
    cambiaColorBordeSelect('procesador_id','btn_close_procesador','#CCCCCC');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#btn_close_ram').on('click',function () {

    var equipo = $('#hidden_tipoEquipo').val();
    $('#ram_id').val(1);
    cambiaColorBordeSelect('ram_id','btn_close_ram','#CCCCCC');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#btn_close_hdd').on('click',function () {

    var equipo = $('#hidden_tipoEquipo').val();
    $('#hdd_id').val(1);
    cambiaColorBordeSelect('hdd_id','btn_close_hdd','#CCCCCC');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#btn_close_window').on('click',function () {

    var equipo = $('#hidden_tipoEquipo').val();
    $('#window_id').val(1);
    cambiaColorBordeSelect('window_id','btn_close_window','#CCCCCC');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#btn_close_so').on('click',function () {

    var equipo = $('#hidden_tipoEquipo').val();
    $('#so_id').val(1);
    cambiaColorBordeSelect('so_id','btn_close_so','#CCCCCC');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#btn_close_inventario').on('click',function () {

    var equipo = $('#hidden_tipoEquipo').val();
    $('#inventario').val('');
    cambiaColorBordeSelect('inventario','btn_close_inventario','#CCCCCC');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#btn_close_serie').on('click',function () {

    var equipo = $('#hidden_tipoEquipo').val();
    $('#serie').val('');
    cambiaColorBordeSelect('serie','btn_close_serie','#CCCCCC');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#btn_close_descripcion').on('click',function () {

    var equipo = $('#hidden_tipoEquipo').val();
    $('#descripcion').val('');
    cambiaColorBordeSelect('descripcion','btn_close_descripcion','#CCCCCC');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#btn_close_usuario').on('click',function () {

    var equipo = $('#hidden_tipoEquipo').val();
    $('#usuario').val('');
    cambiaColorBordeSelect('usuario','btn_close_usuario','#CCCCCC');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#btn_close_estatus').on('click',function () {

    var equipo = $('#hidden_tipoEquipo').val();
    $('#estatus_id').val('Seleccione');
    cambiaColorBordeSelect('estatus_id','btn_close_estatus','#CCCCCC');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});

$('#btn_close_condicion').on('click',function () {

    var equipo = $('#hidden_tipoEquipo').val();
    $('#condicion_id').val(1);
    cambiaColorBordeSelect('condicion_id','btn_close_condicion','#CCCCCC');
    CargaDataTableNuevaBusqueda();
    getTotalEquipos(equipo);
});



//*************************************************************
//**** valida los select de las pantallas de crear y editar****
//*************************************************************

$('#direccions_create_id').change(function () {

    //carga las subdirecciones y coordinaciones
    let dir_id    = $('#direccions_create_id').val();
    let subdir_id = $('#subdireccion_create_id').val();

    cargarSubdireccion(dir_id,'CreaEdita');
    cargarCoordinacion(dir_id,subdir_id,'CreaEdita');
});

$('#subdireccion_create_id').change(function () {

    //carga las coordinaciones
    let dir_id    = $('#direccions_create_id').val();
    let subdir_id = $('#subdireccion_create_id').val();

    cargarCoordinacion(dir_id,subdir_id,'CreaEdita');
});