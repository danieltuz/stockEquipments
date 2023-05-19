<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">!! ATENCIÓN ¡¡</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">


                    <div class="alert alert-custom alert-notice alert-light-danger fade show mb-5" role="alert">
                        <div class="alert-icon">
                            <i class="flaticon-warning"></i>
                        </div>
                        <label class="alert-text">Favor de Corregir las Siguientes Advertencias.
                        </label>
                    </div>

                    <ul>

                        {{--********************** DIRECCION *******************************--}}
                        <li id="msg_error_nombre_direccion_catalogo" hidden>El campo <b>DIRECCIÓN</b> no debe estar en Blanco </li>
                        <li id="msg_error_direccion_id_catalogo" hidden>El campo <b>DIRECCIÓN</b> debe ser diferente a Seleccione </li>
                        <li id="msg_error_direccions_create_id" hidden>El campo <b>DIRECCIÓN</b> debe ser diferente a Seleccione </li>

                        {{--********************** SUBDIRECCION *******************************--}}
                        <li id="msg_error_nombre_subdireccion_catalogo" hidden>El campo <b>SUBDIRECCIÓN</b> no debe estar en Blanco </li>
                        <li id="msg_error_subdireccion_id_catalogo" hidden>El campo <b>SUBDIRECCIÓN</b> debe ser diferente a Seleccione </li>
                        <li id="msg_error_subdireccion_create_id" hidden>El campo <b>SUBDIRECCIÓN</b> debe ser diferente a Seleccione </li>

                        {{--********************** COORDINACION *******************************--}}
                        <li id="msg_error_nombre_coordinacion_catalogo" hidden>El campo <b>COORDINACIÓN</b> no debe estar en Blanco </li>
                        <li id="msg_error_coordinacions_create_id" hidden>El campo <b>COORDINACIÓN</b> debe ser diferente a Seleccione </li>

                        {{--********************** EDIFICIO *******************************--}}
                        <li id="msg_error_nombre_edificio_catalogo" hidden>El campo <b>EDIFICIO</b> no debe estar en Blanco </li>
                        <li id="msg_error_edificios_create_id" hidden>El campo <b>EDIFICIO</b> debe ser diferente a Seleccione</li>

                        {{--********************** DISCO DURO *******************************--}}
                        <li id="msg_error_tipo_hdd_catalogo" hidden>El campo <b>TIPO DE DISCO DURO</b> no debe estar en Blanco </li>
                        <li id="msg_error_tamaño_hdd_catalogo" hidden>El campo <b>TAMAÑO FÍSICO</b> no debe estar en Blanco </li>
                        <li id="msg_error_hdds_create_id" hidden>El campo <b>DISCO DURO</b> debe ser diferente a Seleccione</li>

                        {{--********************** TIPO EQUIPO *******************************--}}
                        <li id="msg_error_equipo" hidden>El campo <b>EQUIPO</b> no debe estar en Blanco </li>
                        <li id="msg_error_tipo_equipo" hidden>El campo <b>TIPO EQUIPO</b> no debe estar en Blanco </li>

                        {{--********************** MARCA *******************************--}}
                        <li id="msg_error_nombre_marca_catalogo" hidden>El campo <b>MARCA</b> no debe estar en Blanco </li>
                        <li id="msg_error_marcas_id_catalogo" hidden>El campo <b>MARCA</b> debe ser diferente a Seleccione </li>
                        <li id="msg_error_markas_create_id" hidden>El campo <b>MARCA</b> debe ser diferente a Seleccione </li>

                        {{--********************** MODELO *******************************--}}
                        <li id="msg_error_nombre_modelo_catalogo" hidden>El campo <b>MODELO</b> no debe estar en Blanco </li>
                        <li id="msg_error_tipoEquipo_id_catalogo" hidden>El campo <b>TIPO DE EQUIPO</b> debe ser diferente a Seleccione </li>
                        <li id="msg_error_modelos_create_id" hidden>El campo <b>MODELO</b> debe ser diferente a Seleccione </li>

                        {{--********************** TIPO DE MONITOR *******************************--}}
                        <li id="msg_error_nombre_tipo_monitor_catalogo" hidden>El campo <b>TIPO DE MONITOR</b> no debe estar en Blanco </li>
                        <li id="msg_error_tipo_monitor_create_id" hidden>El campo <b>MONITOR</b> debe ser diferente a Seleccione</li>

                        {{--********************** TAMANIO DE MONITOR *******************************--}}
                        <li id="msg_error_tamanio" hidden>El campo <b>TAMAÑO DEL MONITOR</b> no debe estar en Blanco </li>

                        {{--********************** TIPO DE PROCESADOR *******************************--}}
                        <li id="msg_error_nombre_procesador_catalogo" hidden>El campo <b>TIPO DE PROCESADOR</b> no debe estar en Blanco </li>
                        <li id="msg_error_socket_procesador_catalogo" hidden>El campo <b>TIPO DE SOCKET</b> no debe estar en Blanco</li>
                        <li id="msg_error_procesadors_create_id" hidden>El campo <b>TIPO DE PROCESADOR</b> debe ser diferente a Seleccione</li>

                        {{--********************** MEMPORIA RAM *******************************--}}
                        <li id="msg_error_tipo_ram_catalogo" hidden>El campo <b>TIPO DE MEMORIA RAM</b> no debe estar en Blanco </li>
                        <li id="msg_error_frecuencia_ram_catalogo" hidden>El campo <b>FRECUENCIA DE MEMORIA RAM</b> no debe estar en Blanco </li>
                        <li id="msg_error_rams_create_id" hidden>El campo <b>Memoria RAM</b> debe ser diferente a Seleccione</li>

                        {{--********************** MEMPORIA RAM *******************************--}}
                        <li id="msg_error_n_bancos" hidden>El campo <b>#BANCOS</b> debe ser diferente a Seleccione </li>

                        {{--********************** BANCO 1,2,3,4 *******************************--}}
                        <li id="msg_error_tipo_frecuencia1" hidden>El campo <b>BANCO 1</b> debe ser diferente a Seleccione </li>
                        <li id="msg_error_tipo_frecuencia2" hidden>El campo <b>BANCO 2</b> debe ser diferente a Seleccione </li>
                        <li id="msg_error_tipo_frecuencia3" hidden>El campo <b>BANCO 3</b> debe ser diferente a Seleccione </li>
                        <li id="msg_error_tipo_frecuencia4" hidden>El campo <b>BANCO 4</b> debe ser diferente a Seleccione </li>

                        {{--********************** TAMA;O RAM 1,2,3,4 *******************************--}}
                        <li id="msg_error_tamanio_ram1" hidden>El campo <b>TAMAÑO 1 RAM</b> no debeestar en Blanco</li>
                        <li id="msg_error_tamanio_ram2" hidden>El campo <b>TAMAÑO 2 RAM</b> no debeestar en Blanco</li>
                        <li id="msg_error_tamanio_ram3" hidden>El campo <b>TAMAÑO 3 RAM</b> no debeestar en Blanco</li>
                        <li id="msg_error_tamanio_ram4" hidden>El campo <b>TAMAÑO 4 RAM</b> no debeestar en Blanco</li>

                        {{--********************** #DISCOS *******************************--}}
                        <li id="msg_error_n_discos" hidden>El campo <b>#DISCOS</b> debe ser diferente a Seleccione </li>

                        {{--********************** NUMERO DE DISCOS 1,2,3,4 *******************************--}}
                        <li id="msg_error_tipo_tamanio1" hidden>El campo <b>DISCO 1</b> debe ser diferente a Seleccione </li>
                        <li id="msg_error_tipo_tamanio2" hidden>El campo <b>DISCO 2</b> debe ser diferente a Seleccione </li>
                        <li id="msg_error_tipo_tamanio3" hidden>El campo <b>DISCO 3</b> debe ser diferente a Seleccione </li>
                        <li id="msg_error_tipo_tamanio4" hidden>El campo <b>DISCO 4</b> debe ser diferente a Seleccione </li>

                        {{--********************** TAMAÑO DE DISCOS 1,2,3,4 *******************************--}}
                        <li id="msg_error_tamanio_hdd1" hidden>El campo <b>TAMAÑO 1 HDD</b> no debe estar en blanco</li>
                        <li id="msg_error_tamanio_hdd2" hidden>El campo <b>TAMAÑO 2 HDD</b> no debe estar en blanco
                        <li id="msg_error_tamanio_hdd3" hidden>El campo <b>TAMAÑO 3 HDD</b> no debe estar en blanco
                        <li id="msg_error_tamanio_hdd4" hidden>El campo <b>TAMAÑO 4 HDD</b> no debe estar en blanco

                        {{--********************** NOMBRE DEL HOST *******************************--}}
                        <li id="msg_error_nombre_host" hidden>El campo <b>NOMBRE DEL HOST</b> no debe estar en blanco</li>

                        {{--********************** NOMBRE DEL HOST *******************************--}}
                        <li id="msg_error_tipo_red" hidden>El campo <b>TIPO DE RED</b> debe ser diferente a Seleccione</li>

                        {{--********************** ETHERNET IP *******************************--}}
                        <li id="msg_error_ethernet_ip" hidden>El campo <b>IP</b> no debe estar en blanco</li>

                        {{--********************** ETHERNET MAC *******************************--}}
                        <li id="msg_error_ethernet_mac" hidden>El campo <b>MAC</b> no debe estar en blanco</li>

                        {{--********************** ETHERNET VELOCIDAD *******************************--}}
                        <li id="msg_error_ethernet_speed" hidden>El campo <b>VELOCIDAD</b> debe ser diferente a Seleccione</li>

                        {{--********************** WIFI IP *******************************--}}
                        <li id="msg_error_wifi_ip" hidden>El campo <b>IP</b> no debe estar en Blanco</li>

                        {{--********************** WIFI MAC *******************************--}}
                        <li id="msg_error_wifi_mac" hidden>El campo <b>MAC</b> no debe estar en Blanco</li>

                        {{--********************** WIFI TIPO RED *******************************--}}
                        <li id="msg_error_tipo_red" hidden>El campo <b>TIPO RED</b> debe ser diferente a Seleccione</li>

                        {{--********************** CONDICION DEL EQUIPO*******************************--}}
                        <li id="msg_error_nombre_condicion_catalogo" hidden>El campo <b>CONDICION DEL EQUIPO</b> no debe estar en Blanco </li>
                        <li id="msg_error_condicions_create_id" hidden>El campo <b>CONDICION DEL EQUIPO</b> debe ser diferente a Seleccione</li>

                        {{--********************** SOFTWARE EQUIPO*******************************--}}
                        <li id="msg_error_nombre_sofware_catalogo" hidden>El campo <b>NOMBRE DEL SOFTWARE</b> no debe estar en Blanco </li>

                        {{--********************** SO EQUIPO*******************************--}}
                        <li id="msg_error_nombre_so_catalogo" hidden>El campo <b>ARQUITECTURA DEL SO</b> no debe estar en Blanco </li>
                        <li id="msg_error_sos_create_id" hidden>El campo <b>ARQUITECTURA DEL SO</b> debe ser diferente a Seleccione </li>

                        {{--********************** WINDOWS EQUIPO*******************************--}}
                        <li id="msg_error_nombre_sistema_operativo_catalogo" hidden>El campo <b>SISTEMA OPERATIVO</b> no debe estar en Blanco </li>
                        <li id="msg_error_version_sistema_operativo_catalogo" hidden>El campo <b>VERSIÓN</b> no debe estar en Blanco </li>
                        <li id="msg_error_windows_create_id" hidden>El campo <b>SISTEMA OPERATIVO</b> debe ser diferente a Seleccione</li>

                        {{--********************** TIPO DE EQUIPO*******************************--}}
                        <li id="msg_error_tipo_cpus_create_id" hidden>El campo <b>TIPO DE EQUIPO</b> debe ser diferente a Seleccione</li>

                        {{--********************** USUARIO EQUIPO*******************************--}}
                        <li id="msg_error_usuario_create" hidden>El campo <b>USUARIO</b> no debe estar en Blanco </li>

                        {{--********************** #INVENTARIO EQUIPO*******************************--}}
                        <li id="msg_error_inventario_create" hidden>El campo <b>#INVENTARIO</b> no debe estar en Blanco </li>

                        {{--********************** #SERIE EQUIPO*******************************--}}
                        <li id="msg_error_serie_create" hidden>El campo <b>#SERIE</b> no debe estar en Blanco </li>

                        {{--********************** BAJA EQUIPOS FECHA DEL REPORTE*******************************--}}
                        <li id="msg_error_baja_equipos_fecha_reporte" hidden>El campo <b>FECHA DEL REPORTE</b> debe tener una fecha valida</li>

                        {{--********************** BAJA EQUIPOS FECHA DEL REPORTE*******************************--}}
                        <li id="msg_error_baja_equipos" hidden>El campo <b>FECHA DEL REPORTE</b> debe tener una fecha valida</li>

                        {{--********************** BAJA EQUIPOS FECHA DE BAJA*******************************--}}
                        <li id="msg_error_baja_equipos_fecha_baja" hidden>El campo <b>FECHA DE BAJA</b> debe tener una fecha valida</li>

                        {{--********************** BAJA EQUIPOS NUMERO DE ORDEN*******************************--}}
                        <li id="msg_error_n_orden" hidden>El campo <b>NUMERO DE ORDEN</b> no debe estar en blanco</li>

                        {{--********************** BAJA EQUIPOS DESCRIPCION DE LA BAJA  *******************************--}}
                        <li id="msg_error_descripcion_baja" hidden>El campo <b>DESCRIPCION DE LA BAJA</b> no debe estar en blanco</li>

                        {{--********************** ALTA A SOFTWARE EN EQUIPOS *******************************--}}
                        <li id="msg_error_software_id" hidden>El campo <b>SOFTWARE</b> debe ser diferente a Seleccione</li>
                        <li id="msg_error_descripcion_software" hidden>El campo <b>DESCRIPCION</b> no debe estar en blanco</li>
                        <li id="fecha_instalacion" hidden>El campo <b>FECHA DE INSTALACIÓN</b> no debe estar en blanco</li>
                        <li id="msg_error_licencia" hidden>El campo <b>LICENCIA</b> no debe estar en blanco</li>
                        <li id="msg_error_llave_activacion" hidden>El campo <b>LLAVE DE ACTIVACIÓN</b> no debe estar en blanco</li>
                        <li id="msg_error_usuario_software" hidden>El campo <b>USUARIO</b> no debe estar en blanco</li>
                        <li id="msg_error_personal_instalo" hidden>El campo <b>PERSONAL QUE INSTALO</b> no debe estar en blanco</li>

                        {{--********************** CREAR USUARIOS*******************************--}}
                        <li id="msg_error_nombre_usuario" hidden>El campo <b>USUARIO</b> no debe estar en Blanco</li>
                        <li id="msg_error_email_usuario" hidden>El campo <b>EMAIL</b> no debe estar en Blanco</li>
                        <li id="msg_error_password_usuario" hidden>El campo <b>PASSWORD</b> no debe estar en Blanco</li>
                        <li id="msg_error_password2_usuario" hidden>El campo <b>CONFIRME SU PASSWORD</b> es diferente al campo PASSWORD</li>

                    </ul>
                </div>
                <br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>