

//******************************************************************************************************************
//ACTIVA EL TAB DE DIRECCION MOSTRANDO LA LISTA DE EQUIPOS CON SUS TOTALES EN LA PESTA;A TOTALES
//******************************************************************************************************************

function activaPanelDir(direccion_id,tipoEquipo)
{
    pleasWait();

    //1-oculta el grupo de botones direccion, subdireccion y coordinacion
    //2-oculta los divs con las tablas direccion, subdireccion y coordinacion
    //3-oculta los divs con las tablas a detalle de subdireccion y coordinacion
    //4-activa el div con la tabla direcciones a detalle
    //5-activa el boton regresar

    document.getElementById("grupo_botones_dir_sub_cor").style.display = "none";            //  1
    document.getElementById("tab_direccion").style.display = "none";                        //  2
    document.getElementById("tab_cordinacion").style.display = "none";                      //  2
    document.getElementById("tab_subdireccion").style.display = "none";                     //  2

    document.getElementById("tabla_equipos_subdirecciones_detalle").style.display = "none"; //  3
    document.getElementById("tabla_equipos_coordinaciones_detalle").style.display = "none"; //  3
    document.getElementById("tabla_equipos_direcciones_detalle").style.display = "";        //  4
    document.getElementById("div-btn-regresar").style.display = "";                         //  5


    $('#hidden_panel_mostrado').val("Direccion_totales_detalles");
    exportarEquipos(direccion_id,0,0,tipoEquipo);

    // $('#tabla_equipos_direcciones_detalle').DataTable().clear();
    // $('#tabla_equipos_direcciones_detalle').DataTable().destroy();

    getEquipos(direccion_id,'direccion',0,0,tipoEquipo)
}

//******************************************************************************************************************
//ACTIVA EL TAB DE SUBDIRECCION MOSTRANDO LA LISTA DE EQUIPOS CON SUS TOTALES EN LA PESTA;A TOTALES
//******************************************************************************************************************
function activaPanelSub(subdireccion_id,direccion_id,tipoEquipo)
{
    pleasWait();

    //1-oculta el grupo de botones direccion, subdireccion y coordinacion
    //2-oculta los divs con las tablas direccion, subdireccion y coordinacion
    //3-oculta los divs con las tablas a detalle de subdireccion y coordinacion
    //4-activa el div con la tabla direcciones a detalle
    //5-activa el boton regresar

    document.getElementById("grupo_botones_dir_sub_cor").style.display = "none";            //  1
    document.getElementById("tab_direccion").style.display = "none";                        //  2
    document.getElementById("tab_cordinacion").style.display = "none";                      //  2
    document.getElementById("tab_subdireccion").style.display = "none";                     //  2

    document.getElementById("tabla_equipos_subdirecciones_detalle").style.display = "";     //  3
    document.getElementById("tabla_equipos_coordinaciones_detalle").style.display = "none"; //  3
    document.getElementById("tabla_equipos_direcciones_detalle").style.display = "none";    //  4
    document.getElementById("div-btn-regresar").style.display = "";                         //  5

    // $('#grupo_botones_dir_sub_cor').hide();
    // $('#tabla_equipos_coordinaciones_detalle').hide();
    // $('#tabla_equipos_subdirecciones_detalle').show();
    // $("#div-btn-regresar").show();

    $('#hidden_panel_mostrado').val("Subdireccion_totales_detalles");
    exportarEquipos(direccion_id,subdireccion_id,0,tipoEquipo);

    getEquipos(subdireccion_id,'subdireccion',0,direccion_id,tipoEquipo)
}

//******************************************************************************************************************
//ACTIVA EL TAB DE COORDINACION MOSTRANDO LA LISTA DE EQUIPOS CON SUS TOTALES EN LA PESTA;A TOTALES
//******************************************************************************************************************
function activaPanelCor(coordinacion_id,subdireccions_id,direccions_id,tipoEquipo)
{
    pleasWait();

    //1-oculta el grupo de botones direccion, subdireccion y coordinacion
    //2-oculta los divs con las tablas direccion, subdireccion y coordinacion
    //3-oculta los divs con las tablas a detalle de subdireccion y coordinacion
    //4-activa el div con la tabla direcciones a detalle
    //5-activa el boton regresar

    document.getElementById("grupo_botones_dir_sub_cor").style.display = "none";            //  1
    document.getElementById("tab_direccion").style.display = "none";                        //  2
    document.getElementById("tab_cordinacion").style.display = "none";                      //  2
    document.getElementById("tab_subdireccion").style.display = "none";                     //  2

    document.getElementById("tabla_equipos_subdirecciones_detalle").style.display = "none"; //  3
    document.getElementById("tabla_equipos_coordinaciones_detalle").style.display = "";     //  3
    document.getElementById("tabla_equipos_direcciones_detalle").style.display = "none";    //  4
    document.getElementById("div-btn-regresar").style.display = "";                         //  5


    // $('#grupo_botones_dir_sub_cor').hide();
    // $('#tabla_equipos_subdirecciones_detalle').hide();
    // $('#tabla_equipos_coordinaciones_detalle').show();
    // $("#div-btn-regresar").show();

    $('#hidden_panel_mostrado').val("Coordinacion_totales_detalles");
    exportarEquipos(direccions_id,subdireccions_id,coordinacion_id,tipoEquipo);

    getEquipos(coordinacion_id,'coordinacion',subdireccions_id,direccions_id,tipoEquipo)
}

//******************************************************************************************************************
//OBTIENE LA LISTA DE EQUIPOS DEPENDIENDO DEL TAB ELEGIDO, DIRECCION, SUBDIRECCION O COORDINACION
//******************************************************************************************************************
function getEquipos(entidad_id,entidad,subdireccions_id,direccions_id,tipoEquipo) {

    debugger;
    value = entidad_id;

    switch (entidad) {
        case 'direccion':
            if (!isNaN(parseInt(value))) {
                url="/equipos/cpu/"+value+"/"+tipoEquipo+"/getEquiposDir";
                $.get(url, function (response) {
                    if (response.status == 200) {

                        tipo = response.response;

                        /************************************************
                         * Lista los equipos por direccion
                         ************************************************/

                        // $('#tbody_equipos_direcciones').html('');

                        html = '';

                        dir_entidad='';
                        contador = 0;

                        $.each(tipo, function (i, item){

                            contador = contador + 1;
                            encabezado = item.direccion + ': ' + contador;

                            html += `<tr>`;
                            html += `    <td>${item.contador}</td>`;
                            html += `    <td>${item.subdireccions}</td>`;
                            html += `    <td>${item.coordinacions}</td>`;
                            html += `    <td>${item.equipo}</td>`;
                            html += `    <td>${item.TipoCpu}</td>`;
                            html += `    <td>${item.marcas}</td>`;
                            html += `    <td>${item.modelos}</td>`;
                            html += `    <td>${item.serie}</td>`;
                            html += `    <td>${item.inventaro}</td>`;
                            html += `    <td>${item.usuario}</td>`;
                            html += `    <td>${item.estatus}</td>`;
                            html += `    <td>${item.condicion}</td>`;
                            html += `</tr>`;
                        });

                        $('#encabezado_totales').html(encabezado);
                        $('#tbody_equipos_direcciones').html(html);

                        $('#tabla_equipos_direcciones_detalle').DataTable(
                            {
                                "language": {
                                    "lengthMenu": "_MENU_ Registros",
                                    "paginate": {
                                        "previous": "Anterior",
                                        "next": "Siguiente",
                                        "last": "Último",
                                        "first": "Primer"
                                    },
                                "infoFiltered": "filtrados de _MAX_ total registros",
                                "emptyTable": "Sin información disponible",
                                "zeroRecords": "Sin resultados para tu búsqueda",
                                "loadingRecords": "Cargando...",
                                "info": "Mostrando del _START_ al _END_ de _TOTAL_ registros",
                                "search": "Buscar ",
                                }
                            });

                    }
                    else {
                        toastr.error('Ocurrió un error al comunicarse con el servidor');
                    }
                }).fail(function (err) {
                    toastr.error(err);
                })
            }
            else {
                let html = '';
            }
            break;

        case 'subdireccion':

            if (!isNaN(parseInt(value))) {
                url="/equipos/cpu/"+value+"/"+direccions_id+"/"+tipoEquipo+"/getEquiposSub";
                $.get(url, function (response) {
                    if (response.status == 200) {

                        tipo = response.response;

                        /************************************************
                         * Lista los equipos por subdireccion
                         ************************************************/

                        $('#tbody_equipos_subdirecciones').html('');

                        html = '';
                        dir_entidad='';
                        contador = 0;

                        $.each(tipo, function (i, item){

                            contador = contador + 1;
                            encabezado = item.direccion + ' / '+item.subdireccion + ': ' + contador;

                            html += `<tr>`;
                            html += `    <td>${item.contador}</td>`;
                            html += `    <td>${item.coordinacions}</td>`;
                            html += `    <td>${item.equipo}</td>`;
                            html += `    <td>${item.TipoCpu}</td>`;
                            html += `    <td>${item.marcas}</td>`;
                            html += `    <td>${item.modelos}</td>`;
                            html += `    <td>${item.serie}</td>`;
                            html += `    <td>${item.inventaro}</td>`;
                            html += `    <td>${item.usuario}</td>`;
                            html += `    <td>${item.estatus}</td>`;
                            html += `    <td>${item.condicion}</td>`;
                            html += `</tr>`;
                        });


                        $('#encabezado_totales').html(encabezado);
                        $('#tbody_equipos_subdirecciones').html(html);

                        $('#tabla_equipos_subdirecciones_detalle').DataTable({
                            "language": {
                                "lengthMenu": "_MENU_ Registros",
                                "paginate": {
                                    "previous": "Anterior",
                                    "next": "Siguiente",
                                    "last": "Último",
                                    "first": "Primer"
                                },
                                "infoFiltered": "filtrados de _MAX_ total registros",
                                "emptyTable": "Sin información disponible",
                                "zeroRecords": "Sin resultados para tu búsqueda",
                                "loadingRecords": "Cargando...",
                                "info": "Mostrando del _START_ al _END_ de _TOTAL_ registros",
                                "search": "Buscar ",
                            }
                        });

                    }
                    else {
                        toastr.error('Ocurrió un error al comunicarse con el servidor');
                    }
                }).fail(function (err) {
                    toastr.error(err);
                })
            }
            else {
                let html = '';
            }
            break;

        case 'coordinacion':
            if (!isNaN(parseInt(value))) {
                url="/equipos/cpu/"+value+"/"+subdireccions_id+"/"+direccions_id+"/"+tipoEquipo+"/getEquiposCor";
                $.get(url, function (response) {
                    if (response.status == 200) {

                        tipo = response.response;

                        /************************************************
                         * Lista los equipos por coordinaciones
                         ************************************************/

                        $('#tbody_equipos_coordinaciones').html('');

                        html = '';
                        contador = 0;

                        $.each(tipo, function (i, item){

                            contador = contador + 1;
                            encabezado = item.direccion + ' / '+item.subdireccion + '/ '+ item.coordinacions + ' : '+ contador;

                            html += `<tr>`;
                            html += `    <td>${item.contador}</td>`;
                            html += `    <td>${item.equipo}</td>`;
                            html += `    <td>${item.TipoCpu}</td>`;
                            html += `    <td>${item.marcas}</td>`;
                            html += `    <td>${item.modelos}</td>`;
                            html += `    <td>${item.serie}</td>`;
                            html += `    <td>${item.inventaro}</td>`;
                            html += `    <td>${item.usuario}</td>`;
                            html += `    <td>${item.estatus}</td>`;
                            html += `    <td>${item.condicion}</td>`;
                            html += `</tr>`;
                        });

                        $('#encabezado_totales').html(encabezado);
                        $('#tbody_equipos_coordinaciones').html(html);

                        $('#tabla_equipos_coordinaciones_detalle').DataTable({
                            "language": {
                                "lengthMenu": "_MENU_ Registros",
                                "paginate": {
                                    "previous": "Anterior",
                                    "next": "Siguiente",
                                    "last": "Último",
                                    "first": "Primer"
                                },
                                "infoFiltered": "filtrados de _MAX_ total registros",
                                "emptyTable": "Sin información disponible",
                                "zeroRecords": "Sin resultados para tu búsqueda",
                                "loadingRecords": "Cargando...",
                                "info": "Mostrando del _START_ al _END_ de _TOTAL_ registros",
                                "search": "Buscar ",
                            }
                        });

                    }
                    else {
                        toastr.error('Ocurrió un error al comunicarse con el servidor');
                    }
                }).fail(function (err) {
                    toastr.error(err);
                })
            }
            else {
                let html = '';
            }
            break;
    }

}

//******************************************************************************************************************
//MUESTRA LA LISTA DE EQUIPOS A DETALLE DE UNA SUBDIRECCION ELEGIDA
//******************************************************************************************************************
function getTotalPorSubireccion(select,tipoEquipo) {

    debugger;
    value = select;

    if (!isNaN(parseInt(value))) {
        url="/equipos/cpu/"+value+"/"+tipoEquipo+"/getTotalPorSubireccion";
        $.get(url, function (response) {
            if (response.status == 200) {

                tipo = response.response;

                /************************************************
                 * Total de equipos por subdirecciones
                 ************************************************/

                $('#totalSubdirecciones').html('');

                html = '';
                dir_entidad='';

                $.each(tipo, function (i, item){


                    // if (dir_entidad != item.direccion){


                    html += `<tr>`;
                    html += `    <td style='width: 2%' 'color: black'>${item.id}</td>`;
                    html += `    <td style='width: 10%' class='text-left' >${item.direccion}</td>`;
                    html += `    <td style='width: 10%' class='text-left' >`;
                    html += `       <a href='javascript:void(0);'`;
                    html += `       onclick="activaPanelSub('${item.subdireccion_id}','${item.direccion_id}','${tipoEquipo}')"`;
                    html += `       class='btn btn-icon btn-primary btn-circle btn-sm mr-1'`;
                    html += `       id='btn_plus{{ $datos['id'] }}'>`;
                    html += `       <b>+</b>`;
                    html += `       </a>`;
                    html += `       ${item.subdireccion}`;
                    html += `</td>`;
                    html += `    <td style='width: 5%' class='text-left' >${item.total}</td>`;
                    html += `<td style='width: 50%' class='project_progress'>`;
                    html += `        <div class='progress progress_sm'>`;
                    html += `        <div class='progress-bar bg-green' role='progressbar' data-transitiongoal='${item.porciento}' aria-valuenow='${item.porciento}' style='width: ${item.porciento}%;'></div>`;
                    html += `        </div>`;
                    html += `        <small>${item.porciento} %</small>`;
                    html += `        </td>`;
                    html += `</tr>`;

                    // }else{
                    // {{--html += `<tr>`;--}}
                    // {{--html += `    <td style='width: 5px; color: black'>${item.id}</td>`;--}}
                    // {{--html += `    <td class='text-left' ></td>`;--}}
                    // {{--html += `    <td class='text-left' >`;--}}
                    // {{--html += `       <a href='javascript:void(0);'`;--}}
                    // {{--html += `       onclick="activaPanelSub(${item.id},'${item.direccions}','${item.subdireccion_id}','${item.subdireccion}',${item.total})"`;--}}
                    // {{--html += `       class='btn btn-round btn-primary btn-xs'`;--}}
                    // {{--html += `       id='btn_plus{{ $datos['id'] }}'>`;--}}
                    // {{--html += `       <i class='fa fa-plus'></i>`;--}}
                    // {{--html += `       </a>`;--}}
                    // {{--html += `       ${item.subdireccion}`;--}}
                    // {{--html += `</td>`;--}}
                    // {{--html += `    <td class='text-left' >${item.total}</td>`;--}}
                    // {{--html += `<td class='project_progress'>`;--}}
                    // {{--html += `        <div class='progress progress_sm'>`;--}}
                    // {{--html += `        <div class='progress-bar bg-green' role='progressbar' data-transitiongoal='${item.porciento}' aria-valuenow='${item.porciento}' style='width: ${item.porciento}%;'></div>`;--}}
                    // {{--html += `        </div>`;--}}
                    // {{--html += `        <small>${item.porciento} %</small>`;--}}
                    // {{--html += `        </td>`;--}}
                    // {{--html += `</tr>`;--}}
                    // }

                    // if (dir_entidad != item.direccion){
                    //
                    //     dir_entidad = item.direccion;
                    // }

                });


                $('#totalSubdirecciones').html(html);

                $('#table_subdireccion').DataTable({
                    "language": {
                        "lengthMenu": "_MENU_ Registros",
                        "paginate": {
                            "previous": "Anterior",
                            "next": "Siguiente",
                            "last": "Último",
                            "first": "Primer"
                        },
                        "infoFiltered": "filtrados de _MAX_ total registros",
                        "emptyTable": "Sin información disponible",
                        "zeroRecords": "Sin resultados para tu búsqueda",
                        "loadingRecords": "Cargando...",
                        "info": "Mostrando del _START_ al _END_ de _TOTAL_ registros",
                        "search": "Buscar ",
                    }
                });

            }
            else {
                toastr.error('Ocurrió un error al comunicarse con el servidor');
            }
        }).fail(function (err) {
            toastr.error(err);
        })
    }
    else {
        let html = '';
    }

}

//******************************************************************************************************************
//MUESTA LA LISTA DE EQUIPOS A DETALLE DE UNA COORDINACION ELEGIDA
//******************************************************************************************************************

function getTotalPorCoordinacion(select,tipoEquipo) {

    debugger;
    value = select;

    if (!isNaN(parseInt(value))) {
        url="/equipos/cpu/"+value+"/"+tipoEquipo+"/getTotalPorCoordinacion";
        $.get(url, function (response) {
            if (response.status == 200) {

                tipo = response.response;

                /************************************************
                 * Total de equipos por coordinaciones
                 ************************************************/

                $('#totalCoordinaciones').html('');

                html = '';

                $.each(tipo, function (i, item){

                    html += `<tr>`;
                    html += `    <td  style='width: 2%' 'color: black'>${item.id}</td>`;

                    // if (entidad_dir != item.direccion){
                    html += `    <td  style='width: 10%' class='text-left' >${item.direccion}</td>`;
                    // }else{
                    //     html += `    <td class='text-left' ></td>`;
                    // }

                    // if (entidad_sub != item.subdireccion){
                    html += `    <td  style='width: 10%' class='text-left' >${item.subdireccion}</td>`;
                    // }else{
                    //     html += `    <td class='text-left' ></td>`;
                    // }

                    html += `    <td  style='width: 10%' class='text-left' >`;
                    html += `       <a href='javascript:void(0);'`;
                    html += `       onclick="activaPanelCor('${item.coordinacions_id}','${item.subdireccions_id}','${item.direccions_id}','${tipoEquipo}')"`;
                    html += `       class='btn btn-icon btn-primary btn-circle btn-sm mr-1'`;
                    html += `       id='btn_plus{{ $datos['id'] }}'>`;
                    html += `       <b>+</b>`;
                    html += `       </a>`;
                    html += `       ${item.cooridnacion}`;
                    html += `</td>`;

                    html += `    <td  style='width: 5%' class='text-left' >${item.total}</td>`;
                    html += `<td  style='width: 50%' class='project_progress'>`;
                    html += `        <div class='progress progress_sm'>`;
                    html += `        <div class='progress-bar bg-green' role='progressbar' data-transitiongoal='${item.porciento}' aria-valuenow='${item.porciento}' style='width: ${item.porciento}%;'></div>`;
                    html += `        </div>`;
                    html += `        <small>${item.porciento} %</small>`;
                    html += `        </td>`;
                    html += `</tr>`;

                });


                $('#totalCoordinaciones').html(html);

                $('#table_coordinacion').DataTable({
                    "language": {
                        "lengthMenu": "_MENU_ Registros",
                        "paginate": {
                            "previous": "Anterior",
                            "next": "Siguiente",
                            "last": "Último",
                            "first": "Primer"
                        },
                        "infoFiltered": "filtrados de _MAX_ total registros",
                        "emptyTable": "Sin información disponible",
                        "zeroRecords": "Sin resultados para tu búsqueda",
                        "loadingRecords": "Cargando...",
                        "info": "Mostrando del _START_ al _END_ de _TOTAL_ registros",
                        "search": "Buscar ",
                    }
                });
            }
            else {
                toastr.error('Ocurrió un error al comunicarse con el servidor');
            }
        }).fail(function (err) {
            toastr.error(err);
        })
    }
    else {
        let html = '';
    }

}
