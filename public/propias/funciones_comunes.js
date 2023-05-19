
function pleasWait() {
    $.blockUI({
        css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff'
        }
    });

    setTimeout($.unblockUI, 500);


function cargarMarca(tipoEquipo,vieneDePantalla) {

        debugger;
        value = marcas_id;

        html='';
        html += `<option value="Seleccione">Seleccione</option>`;

        if (!isNaN(parseInt(value))) {
            url="/equipos/cpu/"+value+"/"+tipoEquipo+"/getModelo";
            $.get(url, function (response) {
                if (response.status == 200) {

                    tipo = response.response;

                    /************************************************
                     * Modelos
                     ************************************************/

                    $.each(tipo, function (i, item){
                        html += `<option value="${item.id}">${item.nombre}</option>`
                    });

                    switch (vieneDePantalla) {
                        case 'Index' :
                            $('#modelos_index_id').html(html);
                            $('#modelos_index_id').val('Seleccione');
                            break;

                        case 'CreaEdita':
                            $('#modelos_create_id').html(html);
                            $('#modelos_create_id').val('Seleccione');
                            break;

                        case 'Catalogos' :
                            $('#marcas_id_catalogo').html(html);
                            $('#marcas_id_catalogo').val('Seleccione');
                            break;
                    }

                }
                else {
                    toastr.error('Ocurrió un error al comunicarse con el servidor');
                }
            }).fail(function (err) {
                toastr.error(err);
            }).always(function () {
                $.blockUI({ css: {
                        border: 'none',
                        padding: '15px',
                        backgroundColor: '#000',
                        '-webkit-border-radius': '10px',
                        '-moz-border-radius': '10px',
                        opacity: .5,
                        color: '#fff'
                    } });
                setTimeout($.unblockUI, 500);
            });
        }
        else {
            let html = '';
            html += '<option value="">Seleccione</option>';
        }

    }
}

function cambiarAllColorBordes(tipoEquipo) {

    switch (tipoEquipo) {
        case 'CPU':
            cambiaColorBordeSelect('procesador_id','btn_close_procesador','#CCCCCC');
            cambiaColorBordeSelect('ram_id','btn_close_ram','#CCCCCC');
            cambiaColorBordeSelect('hdd_id','btn_close_hdd','#CCCCCC');
            cambiaColorBordeSelect('window_id','btn_close_window','#CCCCCC');
            cambiaColorBordeSelect('so_id','btn_close_so','#CCCCCC');
            break;

        case 'MONITOR':
            cambiaColorBordeSelect('edificio_id','btn_close_edificio','#CCCCCC');
            cambiaColorBordeSelect('direccion_id','btn_close_direccion','#CCCCCC');
            cambiaColorBordeSelect('subdireccion_id','btn_close_subdireccion','#CCCCCC');
            cambiaColorBordeSelect('coordinacion_id','btn_close_coordinacion','#CCCCCC');
            cambiaColorBordeSelect('tipo_equipos_id','btn_close_tipo_equipo','#CCCCCC');
            cambiaColorBordeSelect('marcas_id','btn_close_marcas','#CCCCCC');
            cambiaColorBordeSelect('modelos_index_id','btn_close_modelos','#CCCCCC');
            cambiaColorBordeSelect('inventario','btn_close_inventario','#CCCCCC');
            cambiaColorBordeSelect('serie','btn_close_serie','#CCCCCC');
            cambiaColorBordeSelect('usuario','btn_close_usuario','#CCCCCC');
            cambiaColorBordeSelect('estatus_id','btn_close_estatus','#CCCCCC');
            cambiaColorBordeSelect('condicion_id','btn_close_condicion','#CCCCCC');
            break;

        case 'SOFTWARE':
            cambiaColorBordeSelect('programas_id','btn_close_programas','#CCCCCC');
            cambiaColorBordeSelect('descripcion','btn_close_descripcion','#CCCCCC');
            cambiaColorBordeSelect('tipo_equipos_id','btn_close_tipo_equipo','#CCCCCC');
            cambiaColorBordeSelect('marcas_id','btn_close_marcas','#CCCCCC');
            cambiaColorBordeSelect('modelos_index_id','btn_close_modelos','#CCCCCC');
            cambiaColorBordeSelect('direccion_id','btn_close_direccion','#CCCCCC');
            cambiaColorBordeSelect('subdireccion_id','btn_close_subdireccion','#CCCCCC');
            cambiaColorBordeSelect('inventario','btn_close_inventario','#CCCCCC');
            cambiaColorBordeSelect('serie','btn_close_serie','#CCCCCC');
            cambiaColorBordeSelect('usuario','btn_close_usuario','#CCCCCC');
            break;
    }

}

function cambiaColorBordeSelect(selector,btn_close,color){
    document.getElementById(selector).style.borderColor=color;
    document.getElementById(btn_close).style.borderColor=color;
}

function cargarSubdireccion(select,vieneDePantalla) {

    debugger;
    value = select;

    if (!isNaN(parseInt(value))) {
        url="/equipos/cpu/"+value+"/getSubdireccion";
        $.get(url, function (response) {
            if (response.status == 200) {

                tipo = response.response;

                /************************************************
                 * Subdireccion
                 ************************************************/
                html = '';

                subdireccion_id='';

                $.each(tipo, function (i, item){

                    if (item.nombre == 'Seleccione'){
                        subdireccion_id = item.id;
                        $('#hidden_subdireccion_id').val(subdireccion_id);
                    }

                    html += `<option value="${item.id}">${item.nombre}</option>`
                });

                switch (vieneDePantalla) {
                    case 'Index' :
                        $('#subdireccion_id').html(html);
                        $('#subdireccion_id').val(subdireccion_id);
                        break;

                    case 'CreaEdita':
                        $('#subdireccion_create_id').html(html);
                        $('#subdireccion_create_id').selectpicker('refresh');
                        $('#subdireccion_create_id').val(subdireccion_id);

                        break;
                }

            }
            else {
                toastr.error('Ocurrió un error al comunicarse con el servidor');
            }
        }).fail(function (err) {
            toastr.error(err);
        }).always(function () {
            $.blockUI({ css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                } });
            setTimeout($.unblockUI, 500);
        });
    }
    else {
        let html = '';
        html += '<option value="">Seleccione</option>';
    }

}

function cargarCoordinacion(direccion_id,subdireccion_id,vieneDePantalla) {

    debugger;
    value1 = direccion_id;
    value2 = subdireccion_id;

    if (!isNaN(parseInt(value))) {
        url="/equipos/cpu/"+value1+"/"+value2+"/getCoordinacion";
        $.get(url, function (response) {
            if (response.status == 200) {

                tipo = response.response;

                /************************************************
                 * Coordinacion
                 ************************************************/
                html = '';

                coordinacion_id='';

                $.each(tipo, function (i, item){

                    if (item.nombre == 'Seleccione'){
                        coordinacion_id = item.id;
                        $('#hidden_coordinacion_id').val(coordinacion_id);
                    }

                    html += `<option value="${item.id}">${item.nombre}</option>`
                });
debugger;
                switch (vieneDePantalla) {
                    case 'Index' :
                        $('#coordinacion_id').html(html);
                        $('#coordinacion_id').val(coordinacion_id);
                        break;

                    case 'CreaEdita':
                        $('#coordinacions_create_id').html(html);
                        $('#coordinacions_create_id').selectpicker('refresh');
                        $('#coordinacions_create_id').val(coordinacion_id);
                        break;
                }

            }
            else {
                toastr.error('Ocurrió un error al comunicarse con el servidor');
            }
        }).fail(function (err) {
            toastr.error(err);
        }).always(function () {
            $.blockUI({ css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                } });
            setTimeout($.unblockUI, 500);
        });
    }
    else {
        let html = '';
        html += '<option value="">Seleccione</option>';
    }

}

function cargarModelo(marcas_id,tipoEquipo,vieneDePantalla) {

    debugger;
    value = marcas_id;

    html='';
    html += `<option value="Seleccione">Seleccione</option>`;

    if (!isNaN(parseInt(value))) {
        url="/equipos/cpu/"+value+"/"+tipoEquipo+"/getModelo";
        $.get(url, function (response) {
            if (response.status == 200) {

                tipo = response.response;

                /************************************************
                 * Modelos
                 ************************************************/

                $.each(tipo, function (i, item){
                    html += `<option value="${item.id}">${item.nombre}</option>`
                });

                switch (vieneDePantalla) {
                    case 'Index' :
                        $('#modelos_index_id').html(html);
                        $('#modelos_index_id').val('Seleccione');
                        break;

                    case 'CreaEdita':
                        $('#modelos_create_id').html(html).selectpicker('refresh');
                        $('#modelos_create_id').val('Seleccione');
                        break;
                }

            }
            else {
                toastr.error('Ocurrió un error al comunicarse con el servidor');
            }
        }).fail(function (err) {
            toastr.error(err);
        }).always(function () {
            $.blockUI({ css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                } });
            setTimeout($.unblockUI, 500);
        });
    }
    else {
        let html = '';
        html += '<option value="">Seleccione</option>';
    }

}

//**********************************************************************
//**********************************************************************
// muestra las columnas de inicio en la tabla
//**********************************************************************
//**********************************************************************

function muestra_columnas_tabla() {

    // {{--Valida que el checkbox de la columna edificio este activado para que se muestre en la tabla--}}
    if( $('#ChkEdificio').prop('checked') )
    {
        $(".col_edificio").show();
    }else{
        $(".col_edificio").hide();
    }

    // {{--Valida que el checkbox de la columna sexo este activado para que se muestre en la tabla--}}
    if( $('#ChkDireccion').prop('checked') )
    {
        $(".col_direccion").show();
    }else{
        $(".col_direccion").hide();
    }

    // {{--Valida que el checkbox de la columna subdireccion este activado para que se muestre en la tabla--}}
    if( $('#ChkSubdireccion').prop('checked') )
    {
        $(".col_subdireccion").show();
    }else{
        $(".col_subdireccion").hide();
    }

    // {{--Valida que el checkbox de la columna subdireccion este activado para que se muestre en la tabla--}}
    if( $('#ChkCoordinacion').prop('checked') )
    {
        $(".col_coordinacion").show();
    }else{
        $(".col_coordinacion").hide();
    }

    // {{--Valida que el checkbox de la columna tipo cpu este activado para que se muestre en la tabla--}}
    if( $('#ChkTipoCpu').prop('checked') )
    {
        $(".col_tipo_equipo").show();
    }else{
        $(".col_tipo_equipo").hide();
    }

    // {{--Valida que el checkbox de la columna marca este activado para que se muestre en la tabla--}}
    if( $('#ChkMarca').prop('checked') )
    {
        $(".col_tipo_marcas").show();
    }else{
        $(".col_tipo_marcas").hide();
    }

    // {{--Valida que el checkbox de la columna modelo este activado para que se muestre en la tabla--}}
    if( $('#ChkModelo').prop('checked') )
    {
        $(".col_tipo_modelos").show();
    }else{
        $(".col_tipo_modelos").hide();
    }

    // {{--Valida que el checkbox de la columna procesador este activado para que se muestre en la tabla--}}
    if( $('#ChkProcesador').prop('checked') )
    {
        $(".col_tipo_procesador").show();
    }else{
        $(".col_tipo_procesador").hide();
    }

    // {{--Valida que el checkbox de la columna ram este activado para que se muestre en la tabla--}}
    if( $('#ChkRam').prop('checked') )
    {
        $(".col_tipo_ram").show();
    }else{
        $(".col_tipo_ram").hide();
    }

    // {{--Valida que el checkbox de la columna hdd este activado para que se muestre en la tabla--}}
    if( $('#ChkHdd').prop('checked') )
    {
        $(".col_tipo_hdd").show();
    }else{
        $(".col_tipo_hdd").hide();
    }

    // {{--Valida que el checkbox de la columna windows este activado para que se muestre en la tabla--}}
    if( $('#ChkWindows').prop('checked') )
    {
        $(".col_tipo_windows").show();
    }else{
        $(".col_tipo_windows").hide();
    }

    // {{--Valida que el checkbox de la columna so este activado para que se muestre en la tabla--}}
    if( $('#ChkSo').prop('checked') )
    {
        $(".col_tipo_so").show();
    }else{
        $(".col_tipo_so").hide();
    }

    // {{--Valida que el checkbox de la columna inventario este activado para que se muestre en la tabla--}}
    if( $('#ChkInventario').prop('checked') )
    {
        $(".col_tipo_inventario").show();
    }else{
        $(".col_tipo_inventario").hide();
    }

    // {{--Valida que el checkbox de la columna serie este activado para que se muestre en la tabla--}}
    if( $('#ChkSerie').prop('checked') )
    {
        $(".col_tipo_serie").show();
    }else{
        $(".col_tipo_serie").hide();
    }

    // {{--Valida que el checkbox de la columna usuario este activado para que se muestre en la tabla--}}
    if( $('#ChkUsuario').prop('checked') )
    {
        $(".col_tipo_usuario").show();
    }else{
        $(".col_tipo_usuario").hide();
    }

    // {{--Valida que el checkbox de la columna condicion este activado para que se muestre en la tabla--}}
    if( $('#ChkCondicion').prop('checked') )
    {
        $(".col_tipo_condicion").show();
    }else{
        $(".col_tipo_condicion").hide();
    }
}