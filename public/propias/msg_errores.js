function validaCtls(n_rams,n_hdds) {

    //n_rams = numero de memorias ram que se van a guardar
    //n_hdds = numero de discos duros que se van a guardar

    //**********************************
    //      DIRECCION - CATALOGO
    //**********************************

    if ($("#nombre_direccion_catalogo").val() === "") {
        errores = errores + 1;
        $("#msg_error_nombre_direccion_catalogo").prop('hidden', false);
        $('#bk_nombre_direccion_catalogo').css('color', 'red');
    } else {
        $("#msg_error_nombre_direccion_catalogo").prop('hidden', true);
        $('#bk_nombre_direccion_catalogo').css('color', 'black');
    }

    switch ($("#direccion_id_catalogo").val()) {
        case 'Seleccione':
            errores = errores + 1;
            $("#msg_error_direccion_id_catalogo").prop('hidden', false);
            $('#bk_direccion_id_catalogo').css('color', 'red');
            break;
        case '16':
            errores = errores + 1;
            $("#msg_error_direccion_id_catalogo").prop('hidden', false);
            $('#bk_direccion_id_catalogo').css('color', 'red');
            break;
        default :
            $("#msg_error_direccion_id_catalogo").prop('hidden', true);
            $('#bk_direccion_id_catalogo').css('color', 'black');
            break;
    }


    //**********************************
    //      DIRECCION - CPU
    //**********************************

    if ($("#direccions_create_id").val() === "16" ){
        errores = errores + 1;
        $("#msg_error_direccions_create_id").prop('hidden',false);
        $('#bk_direccions_create_id').css('color', 'red');
    }else{
        $("#msg_error_direccions_create_id").prop('hidden',true);
        $('#bk_direccions_create_id').css('color', 'black');
    }

    //**********************************
    //      SUBDIRECCION - CATALOGO
    //**********************************


    if ($("#nombre_subdireccion_catalogo").val() === "") {
        errores = errores + 1;
        $("#msg_error_nombre_subdireccion_catalogo").prop('hidden', false);
        $('#bk_nombre_subdireccion_catalogo').css('color', 'red');
    } else {
        $("#msg_error_nombre_subdireccion_catalogo").prop('hidden', true);
        $('#bk_nombre_subdireccion_catalogo').css('color', 'black');
    }

    switch ($("#subdireccion_id_catalogo").val()) {
        case 'Seleccione':
            errores = errores + 1;
            $("#msg_error_subdireccion_id_catalogo").prop('hidden', false);
            $('#bk_subdireccion_id_catalogo').css('color', 'red');
            break;
        case null:
            errores = errores + 1;
            $("#msg_error_subdireccion_id_catalogo").prop('hidden', false);
            $('#bk_subdireccion_id_catalogo').css('color', 'red');
            break;
        default :
            $("#msg_error_subdireccion_id_catalogo").prop('hidden', true);
            $('#bk_subdireccion_id_catalogo').css('color', 'black');
            break;
    }

    //**********************************
    //      SUBDIRECCION - CPU
    //**********************************

    if ($("#subdireccion_create_id").val() === null ){
        errores = errores + 1;
        $("#msg_error_subdireccion_create_id").prop('hidden',false);
        $('#bk_subdireccion_create_id').css('color', 'red');
    }else{
        $("#msg_error_subdireccion_create_id").prop('hidden',true);
        $('#bk_subdireccion_create_id').css('color', 'black');
    }

    //**********************************
    //      COORDINACION - CATALOGO
    //**********************************

    if ($("#nombre_coordinacion_catalogo").val() === "") {
        errores = errores + 1;
        $("#msg_error_nombre_coordinacion_catalogo").prop('hidden', false);
        $('#bk_nombre_coordinacion_catalogo').css('color', 'red');
    } else {
        $("#msg_error_nombre_coordinacion_catalogo").prop('hidden', true);
        $('#bk_nombre_coordinacion_catalogo').css('color', 'black');
    }

    //**********************************
    //      COORDINACION - CPU
    //**********************************

    if ($("#coordinacions_create_id").val() === null ){
        errores = errores + 1;
        $("#msg_error_coordinacions_create_id").prop('hidden',false);
        $('#bk_coordinacions_create_id').css('color', 'red');
    }else{
        $("#msg_error_coordinacions_create_id").prop('hidden',true);
        $('#bk_coordinacions_create_id').css('color', 'black');
    }

    //**********************************
    //      EDIFICIO - CATALOGO
    //**********************************

    if ($("#nombre_edificio_catalogo").val() === "") {
        errores = errores + 1;
        $("#msg_error_nombre_edificio_catalogo").prop('hidden', false);
        $('#bk_nombre_edificio_catalogo').css('color', 'red');
    } else {
        $("#msg_error_nombre_edificio_catalogo").prop('hidden', true);
        $('#bk_nombre_edificio_catalogo').css('color', 'black');
    }

    //**********************************
    //      EDIFICIO - CPU
    //**********************************

    if ($("#edificios_create_id").val() === "1" ){              //pantalla crear equipo
        errores = errores + 1;
        $("#msg_error_edificios_create_id").prop('hidden',false);
        $('#bk_edificios_create_id').css('color', 'red');
    }else{
        $("#msg_error_edificios_create_id").prop('hidden',true);
        $('#bk_edificios_create_id').css('color', 'black');
    }


    //**********************************
    //      DISCO DURO - CATALOGO
    //**********************************

    if ($("#tipo_hdd_catalogo").val() === "") {
        errores = errores + 1;
        $("#msg_error_tipo_hdd_catalogo").prop('hidden', false);
        $('#bk_tipo_hdd_catalogo').css('color', 'red');
    } else {
        $("#msg_error_tipo_hdd_catalogo").prop('hidden', true);
        $('#bk_tipo_hdd_catalogo').css('color', 'black');
    }

    if ($("#tamaño_hdd_catalogo").val() === "") {
        errores = errores + 1;
        $("#msg_error_tamaño_hdd_catalogo").prop('hidden', false);
        $('#bk_tamaño_hdd_catalogo').css('color', 'red');
    } else {
        $("#msg_error_tamaño_hdd_catalogo").prop('hidden', true);
        $('#bk_tamaño_hdd_catalogo').css('color', 'black');
    }

    //**********************************
    //      TIPO DE EQUIPO - CATALOGO
    //**********************************

    if ($("#equipo").val() === "") {
        errores = errores + 1;
        $("#msg_error_equipo").prop('hidden', false);
        $('#bk_equipo').css('color', 'red');
    } else {
        $("#msg_error_equipo").prop('hidden', true);
        $('#bk_equipo').css('color', 'black');
    }

    if ($("#tipo_equipo").val() === "") {
        errores = errores + 1;
        $("#msg_error_tipo_equipo").prop('hidden', false);
        $('#bk_tipo_equipo').css('color', 'red');
    } else {
        $("#msg_error_tipo_equipo").prop('hidden', true);
        $('#bk_tipo_equipo').css('color', 'black');
    }



    //**********************************
    //      DISCO DURO - CPU
    //**********************************

    if ($("#hdds_create_id").val() === "1" ){
        errores = errores + 1;
        $("#msg_error_hdds_create_id").prop('hidden',false);
        $('#bk_hdds_create_id').css('color', 'red');
    }else{
        $("#msg_error_hdds_create_id").prop('hidden',true);
        $('#bk_hdds_create_id').css('color', 'black');
    }

    //**********************************
    //      MARCAS - CATALOGO
    //**********************************

    if ($("#nombre_marca_catalogo").val() === "") {
        errores = errores + 1;
        $("#msg_error_nombre_marca_catalogo").prop('hidden', false);
        $('#bk_nombre_marca_catalogo').css('color', 'red');
    } else {
        $("#msg_error_nombre_marca_catalogo").prop('hidden', true);
        $('#bk_nombre_marca_catalogo').css('color', 'black');
    }

    switch ($("#marcas_id_catalogo").val()) {
        case "1":
            errores = errores + 1;
            $("#msg_error_marcas_id_catalogo").prop('hidden', false);
            $('#bk_marcas_id_catalogo').css('color', 'red');
            break;
        default :
            $("#msg_error_marcas_id_catalogo").prop('hidden', true);
            $('#bk_marcas_id_catalogo').css('color', 'black');
            break;
    }

    //**********************************
    //      MARCAS - CPU
    //**********************************

    if ($("#markas_create_id").val() === "1" ){
        errores = errores + 1;
        $("#msg_error_markas_create_id").prop('hidden',false);
        $('#bk_markas_create_id').css('color', 'red');
    }else{
        $("#msg_error_markas_create_id").prop('hidden',true);
        $('#bk_markas_create_id').css('color', 'black');
    }

    //**********************************
    //      MODELOS - CATALOGO
    //**********************************

    if ($("#nombre_modelo_catalogo").val() === "") {
        errores = errores + 1;
        $("#msg_error_nombre_modelo_catalogo").prop('hidden', false);
        $('#bk_nombre_modelo_catalogo').css('color', 'red');
    } else {
        $("#msg_error_nombre_modelo_catalogo").prop('hidden', true);
        $('#bk_nombre_modelo_catalogo').css('color', 'black');
    }

    if ($("#tipoEquipo_id_catalogo").val() === "Seleccione") {
        errores = errores + 1;
        $("#msg_error_tipoEquipo_id_catalogo").prop('hidden', false);
        $('#bk_tipoEquipo_id_catalogo').css('color', 'red');
    } else {
        $("#msg_error_tipoEquipo_id_catalogo").prop('hidden', true);
        $('#bk_tipoEquipo_id_catalogo').css('color', 'black');
    }

    //**********************************
    //      MODELOS - CPU
    //**********************************

    if ($("#modelos_create_id").val() === "1" ){
        errores = errores + 1;
        $("#msg_error_modelos_create_id").prop('hidden',false);
        $('#bk_modelos_create_id').css('color', 'red');
    }else{
        $("#msg_error_modelos_create_id").prop('hidden',true);
        $('#bk_modelos_create_id').css('color', 'black');
    }


    if ($("#modelos_create_id").val() === "Seleccione" ){
        errores = errores + 1;
        $("#msg_error_modelos_create_id").prop('hidden',false);
        $('#bk_modelos_create_id').css('color', 'red');
    }else{
        $("#msg_error_modelos_create_id").prop('hidden',true);
        $('#bk_modelos_create_id').css('color', 'black');
    }

    //**********************************
    //      TIPO DE MONITOR - CATALOGO
    //**********************************


    if ($("#tamanio").val() === "") {
        errores = errores + 1;
        $("#msg_error_tamanio").prop('hidden', false);
        $('#bk_tamanio').css('color', 'red');
    } else {
        $("#msg_error_tamanio").prop('hidden', true);
        $('#bk_tamanio').css('color', 'black');
    }


    if ($("#nombre_tipo_monitor_catalogo").val() === "") {
        errores = errores + 1;
        $("#msg_error_nombre_tipo_monitor_catalogo").prop('hidden', false);
        $('#bk_nombre_tipo_monitor_catalogo').css('color', 'red');
    } else {
        $("#msg_error_nombre_tipo_monitor_catalogo").prop('hidden', true);
        $('#bk_nombre_tipo_monitor_catalogo').css('color', 'black');
    }

    if ($("#tipo_monitor_create_id").val() === "Seleccione" ){
        errores = errores + 1;
        $("#msg_error_tipo_monitor_create_id").prop('hidden',false);
        $('#bk_tipo_monitor_create_id').css('color', 'red');
    }else{
        $("#msg_error_tipo_monitor_create_id").prop('hidden',true);
        $('#bk_tipo_monitor_create_id').css('color', 'black');
    }

    if ($("#tipo_monitor_create_id").val() === "1" ){
        errores = errores + 1;
        $("#msg_error_tipo_monitor_create_id").prop('hidden',false);
        $('#bk_tipo_monitor_create_id').css('color', 'red');
    }else{
        $("#msg_error_tipo_monitor_create_id").prop('hidden',true);
        $('#bk_tipo_monitor_create_id').css('color', 'black');
    }

    //**********************************
    //      TIPO DE PROCESADOR - CATALOGO
    //**********************************

    if ($("#nombre_procesador_catalogo").val() === "") {
        errores = errores + 1;
        $("#msg_error_nombre_procesador_catalogo").prop('hidden', false);
        $('#bk_nombre_procesador_catalogo').css('color', 'red');
    } else {
        $("#msg_error_nombre_procesador_catalogo").prop('hidden', true);
        $('#bk_nombre_procesador_catalogo').css('color', 'black');
    }

    if ($("#socket_procesador_catalogo").val() === "") {
        errores = errores + 1;
        $("#msg_error_socket_procesador_catalogo").prop('hidden', false);
        $('#bk_socket_procesador_catalogo').css('color', 'red');
    } else {
        $("#msg_error_socket_procesador_catalogo").prop('hidden', true);
        $('#bk_socket_procesador_catalogo').css('color', 'black');
    }


    //**********************************
    //      TIPO DE PROCESADOR - CPU
    //**********************************

    if ($("#procesadors_create_id").val() === "1" ){
        errores = errores + 1;
        $("#msg_error_procesadors_create_id").prop('hidden',false);
        $('#bk_procesadors_create_id').css('color', 'red');
    }else{
        $("#msg_error_procesadors_create_id").prop('hidden',true);
        $('#bk_procesadors_create_id').css('color', 'black');
    }

    //**********************************
    //      MEMORIA RAM - CATALOGO
    //**********************************

    if ($("#tipo_ram_catalogo").val() === "") {
        errores = errores + 1;
        $("#msg_error_tipo_ram_catalogo").prop('hidden', false);
        $('#bk_tipo_ram_catalogo').css('color', 'red');
    } else {
        $("#msg_error_tipo_ram_catalogo").prop('hidden', true);
        $('#bk_tipo_ram_catalogo').css('color', 'black');
    }

    if ($("#frecuencia_ram_catalogo").val() === "") {
        errores = errores + 1;
        $("#msg_error_frecuencia_ram_catalogo").prop('hidden', false);
        $('#bk_fracuencia_ram_catalogo').css('color', 'red');
    } else {
        $("#msg_error_frecuencia_ram_catalogo").prop('hidden', true);
        $('#bk_fracuencia_ram_catalogo').css('color', 'black');
    }


    //**********************************
    //      MEMORIA RAM - CPU
    //**********************************

    if ($("#rams_create_id").val() === "1" ){
        errores = errores + 1;
        $("#msg_error_rams_create_id").prop('hidden',false);
        $('#bk_rams_create_id').css('color', 'red');
    }else{
        $("#msg_error_rams_create_id").prop('hidden',true);
        $('#bk_rams_create_id').css('color', 'black');
    }

    //**********************************
    //      CONDICION DELEQUIPO - CATALOGO
    //**********************************

    if ($("#nombre_condicion_catalogo").val() === "") {
        errores = errores + 1;
        $("#msg_error_nombre_condicion_catalogo").prop('hidden', false);
        $('#bk_nombre_condicion_catalogo').css('color', 'red');
    } else {
        $("#msg_error_nombre_condicion_catalogo").prop('hidden', true);
        $('#bk_nombre_condicion_catalogo').css('color', 'black');
    }

    //**********************************
    //      CONDICION DELEQUIPO - CPU
    //**********************************

    if ($("#condicions_create_id").val() === "1" ){
        errores = errores + 1;
        $("#msg_error_condicions_create_id").prop('hidden',false);
        $('#bk_condicions_create_id').css('color', 'red');
    }else{
        $("#msg_error_condicions_create_id").prop('hidden',true);
        $('#bk_condicions_create_id').css('color', 'black');
    }


    //**********************************
    //      SOFTWARE - CATALOGO
    //**********************************

    if ($("#nombre_sofware_catalogo").val() === "") {
        errores = errores + 1;
        $("#msg_error_nombre_sofware_catalogo").prop('hidden', false);
        $('#bk_nombre_sofware_catalogo').css('color', 'red');
    } else {
        $("#msg_error_nombre_sofware_catalogo").prop('hidden', true);
        $('#bk_nombre_sofware_catalogo').css('color', 'black');
    }

    //**********************************
    //      SO - CATALOGO
    //**********************************

    if ($("#nombre_so_catalogo").val() === "") {
        errores = errores + 1;
        $("#msg_error_nombre_so_catalogo").prop('hidden', false);
        $('#bk_nombre_so_catalogo').css('color', 'red');
    } else {
        $("#msg_error_nombre_so_catalogo").prop('hidden', true);
        $('#bk_nombre_so_catalogo').css('color', 'black');
    }

    if ($("#version_sistema_operativo_catalogo").val() === "") {
        errores = errores + 1;
        $("#msg_error_version_sistema_operativo_catalogo").prop('hidden', false);
        $('#bk_version_sistema_operativo_catalogo').css('color', 'red');
    } else {
        $("#msg_error_version_sistema_operativo_catalogo").prop('hidden', true);
        $('#bk_version_sistema_operativo_catalogo').css('color', 'black');
    }


    //**********************************
    //      SO - CPU
    //**********************************

    if ($("#sos_create_id").val() === "1" ){
        errores = errores + 1;
        $("#msg_error_sos_create_id").prop('hidden',false);
        $('#bk_sos_create_id').css('color', 'red');
    }else{
        $("#msg_error_sos_create_id").prop('hidden',true);
        $('#bk_sos_create_id').css('color', 'black');
    }

    //**********************************
    //      SISTEMA OPERATIVO - CATALOGO
    //**********************************

    if ($("#nombre_sistema_operativo_catalogo").val() === "") {
        errores = errores + 1;
        $("#msg_error_nombre_sistema_operativo_catalogo").prop('hidden', false);
        $('#bk_nombre_sistema_operativo_catalogo').css('color', 'red');
    } else {
        $("#msg_error_nombre_sistema_operativo_catalogo").prop('hidden', true);
        $('#bk_nombre_sistema_operativo_catalogo').css('color', 'red');
    }

    //**********************************
    //      SISTEMA OPERATIVO - CPU
    //**********************************


    if ($("#windows_create_id").val() === "1" ){
        errores = errores + 1;
        $("#msg_error_windows_create_id").prop('hidden',false);
        $('#bk_windows_create_id').css('color', 'red');
    }else{
        $("#msg_error_windows_create_id").prop('hidden',true);
        $('#bk_windows_create_id').css('color', 'black');
    }

    //**********************************
    //      TIPO DE EQUIPO - CPU
    //**********************************

    if ($("#tipo_cpus_create_id").val() === "Seleccione" ){
        errores = errores + 1;
        $("#msg_error_tipo_cpus_create_id").prop('hidden',false);
        $('#bk_tipo_cpus_create_id').css('color', 'red');
    }else{
        $("#msg_error_tipo_cpus_create_id").prop('hidden',true);
        $('#bk_tipo_cpus_create_id').css('color', 'black');
    }

    //**********************************
    //      USUARIO - CPU
    //**********************************

    if ($("#usuario_create").val() === "" ){
        errores = errores + 1;
        $("#msg_error_usuario_create").prop('hidden',false);
        $('#bk_usuario_create').css('color', 'red');
    }else{
        $("#msg_error_usuario_create").prop('hidden',true);
        $('#bk_usuario_create').css('color', 'black');
    }

    //**********************************
    //      #INVENTAIO - CPU
    //**********************************
    if ($("#inventario_create").val() === "" ){
        errores = errores + 1;
        $("#msg_error_inventario_create").prop('hidden',false);
        $('#bk_inventario_create').css('color', 'red');
    }else{
        $("#msg_error_inventario_create").prop('hidden',true);
        $('#bk_inventario_create').css('color', 'black');
    }

    //**********************************
    //      #SERIE - CPU
    //**********************************

    if ($("#serie_create").val() === "" ){
        errores = errores + 1;
        $("#msg_error_serie_create").prop('hidden',false);
        $('#bk_serie_create').css('color', 'red');
    }else{
        $("#msg_error_serie_create").prop('hidden',true);
        $('#bk_serie_create').css('color', 'black');
    }

    //**********************************
    //      #BANCOS DE RAM - CPU
    //**********************************

    if ($("#n_bancos").val() === "Seleccione" ){
        errores = errores + 1;
        $("#msg_error_n_bancos").prop('hidden',false);
        $('#bk_n_bancos').css('color', 'red');
    }else{
        $("#msg_error_n_bancos").prop('hidden',true);
        $('#bk_n_bancos').css('color', 'black');
    }

    hidde_msg_error_ram();

    debugger;
    switch (n_rams) {
        case "1":

            //**********************************
            //      #BANCO 1 RAM - CPU
            //**********************************

            if ($("#tipo_frecuencia1").val() === "Seleccione" ){
                errores = errores + 1;
                $("#msg_error_tipo_frecuencia1").prop('hidden',false);
                $('#bk_tipo_frecuencia1').css('color', 'red');
            }else{
                $("#msg_error_tipo_frecuencia1").prop('hidden',true);
                $('#bk_tipo_frecuencia1').css('color', 'black');
            }

            //**********************************
            //      #TAMA;O 1 RAM - CPU
            //**********************************

            if ($("#tamanio_ram1").val() === "" ){
                errores = errores + 1;
                $("#msg_error_tamanio_ram1").prop('hidden',false);
                $('#bk_tamanio_ram1').css('color', 'red');
            }else{
                $("#msg_error_tamanio_ram1").prop('hidden',true);
                $('#bk_tamanio_ram1').css('color', 'black');
            }

            break;

        case "2" :

            //**********************************
            //      #BANCO 1 RAM - CPU
            //**********************************

            if ($("#tipo_frecuencia1").val() === "Seleccione" ){
                errores = errores + 1;
                $("#msg_error_tipo_frecuencia1").prop('hidden',false);
                $('#bk_tipo_frecuencia1').css('color', 'red');
            }else{
                $("#msg_error_tipo_frecuencia1").prop('hidden',true);
                $('#bk_tipo_frecuencia1').css('color', 'black');
            }

            //**********************************
            //      #TAMA;O 1 RAM - CPU
            //**********************************

            if ($("#tamanio_ram1").val() === "" ){
                errores = errores + 1;
                $("#msg_error_tamanio_ram1").prop('hidden',false);
                $('#bk_tamanio_ram1').css('color', 'red');
            }else{
                $("#msg_error_tamanio_ram1").prop('hidden',true);
                $('#bk_tamanio_ram1').css('color', 'black');
            }

            //**********************************
            //      #BANCO 2 RAM - CPU
            //**********************************

            if ($("#tipo_frecuencia2").val() === "Seleccione" ){
                errores = errores + 1;
                $("#msg_error_tipo_frecuencia2").prop('hidden',false);
                $('#bk_tipo_frecuencia2').css('color', 'red');
            }else{
                $("#msg_error_tipo_frecuencia2").prop('hidden',true);
                $('#bk_tipo_frecuencia2').css('color', 'black');
            }

            //**********************************
            //      #TAMA;O 2 RAM - CPU
            //**********************************

            if ($("#tamanio_ram2").val() === "" ){
                errores = errores + 1;
                $("#msg_error_tamanio_ram2").prop('hidden',false);
                $('#bk_tamanio_ram2').css('color', 'red');
            }else{
                $("#msg_error_tamanio_ram2").prop('hidden',true);
                $('#bk_tamanio_ram2').css('color', 'black');
            }

            break;

        case "3" :

            //**********************************
            //      #BANCO 1 RAM - CPU
            //**********************************

            if ($("#tipo_frecuencia1").val() === "Seleccione" ){
                errores = errores + 1;
                $("#msg_error_tipo_frecuencia1").prop('hidden',false);
                $('#bk_tipo_frecuencia1').css('color', 'red');
            }else{
                $("#msg_error_tipo_frecuencia1").prop('hidden',true);
                $('#bk_tipo_frecuencia1').css('color', 'black');
            }

            //**********************************
            //      #TAMA;O 1 RAM - CPU
            //**********************************

            if ($("#tamanio_ram1").val() === "" ){
                errores = errores + 1;
                $("#msg_error_tamanio_ram1").prop('hidden',false);
                $('#bk_tamanio_ram1').css('color', 'red');
            }else{
                $("#msg_error_tamanio_ram1").prop('hidden',true);
                $('#bk_tamanio_ram1').css('color', 'black');
            }

            //**********************************
            //      #BANCO 2 RAM - CPU
            //**********************************

            if ($("#tipo_frecuencia2").val() === "Seleccione" ){
                errores = errores + 1;
                $("#msg_error_tipo_frecuencia2").prop('hidden',false);
                $('#bk_tipo_frecuencia2').css('color', 'red');
            }else{
                $("#msg_error_tipo_frecuencia2").prop('hidden',true);
                $('#bk_tipo_frecuencia2').css('color', 'black');
            }

            //**********************************
            //      #TAMA;O 2 RAM - CPU
            //**********************************

            if ($("#tamanio_ram2").val() === "" ){
                errores = errores + 1;
                $("#msg_error_tamanio_ram2").prop('hidden',false);
                $('#bk_tamanio_ram2').css('color', 'red');
            }else{
                $("#msg_error_tamanio_ram2").prop('hidden',true);
                $('#bk_tamanio_ram2').css('color', 'black');
            }

            //**********************************
            //      #BANCO 3 RAM - CPU
            //**********************************

            if ($("#tipo_frecuencia3").val() === "Seleccione" ){
                errores = errores + 1;
                $("#msg_error_tipo_frecuencia3").prop('hidden',false);
                $('#bk_tipo_frecuencia3').css('color', 'red');
            }else{
                $("#msg_error_tipo_frecuencia3").prop('hidden',true);
                $('#bk_tipo_frecuencia3').css('color', 'black');
            }

            //**********************************
            //      #TAMA;O 3 RAM - CPU
            //**********************************

            if ($("#tamanio_ram3").val() === "" ){
                errores = errores + 1;
                $("#msg_error_tamanio_ram3").prop('hidden',false);
                $('#bk_tamanio_ram3').css('color', 'red');
            }else{
                $("#msg_error_tamanio_ram3").prop('hidden',true);
                $('#bk_tamanio_ram3').css('color', 'black');
            }

            break;

        case "4" :

            //**********************************
            //      #BANCO 1 RAM - CPU
            //**********************************

            if ($("#tipo_frecuencia1").val() === "Seleccione" ){
                errores = errores + 1;
                $("#msg_error_tipo_frecuencia1").prop('hidden',false);
                $('#bk_tipo_frecuencia1').css('color', 'red');
            }else{
                $("#msg_error_tipo_frecuencia1").prop('hidden',true);
                $('#bk_tipo_frecuencia1').css('color', 'black');
            }

            //**********************************
            //      #TAMA;O 1 RAM - CPU
            //**********************************

            if ($("#tamanio_ram1").val() === "" ){
                errores = errores + 1;
                $("#msg_error_tamanio_ram1").prop('hidden',false);
                $('#bk_tamanio_ram1').css('color', 'red');
            }else{
                $("#msg_error_tamanio_ram1").prop('hidden',true);
                $('#bk_tamanio_ram1').css('color', 'black');
            }

            //**********************************
            //      #BANCO 2 RAM - CPU
            //**********************************

            if ($("#tipo_frecuencia2").val() === "Seleccione" ){
                errores = errores + 1;
                $("#msg_error_tipo_frecuencia2").prop('hidden',false);
                $('#bk_tipo_frecuencia2').css('color', 'red');
            }else{
                $("#msg_error_tipo_frecuencia2").prop('hidden',true);
                $('#bk_tipo_frecuencia2').css('color', 'black');
            }

            //**********************************
            //      #TAMA;O 2 RAM - CPU
            //**********************************

            if ($("#tamanio_ram2").val() === "" ){
                errores = errores + 1;
                $("#msg_error_tamanio_ram2").prop('hidden',false);
                $('#bk_tamanio_ram2').css('color', 'red');
            }else{
                $("#msg_error_tamanio_ram2").prop('hidden',true);
                $('#bk_tamanio_ram2').css('color', 'black');
            }

            //**********************************
            //      #BANCO 3 RAM - CPU
            //**********************************

            if ($("#tipo_frecuencia3").val() === "Seleccione" ){
                errores = errores + 1;
                $("#msg_error_tipo_frecuencia3").prop('hidden',false);
                $('#bk_tipo_frecuencia3').css('color', 'red');
            }else{
                $("#msg_error_tipo_frecuencia3").prop('hidden',true);
                $('#bk_tipo_frecuencia3').css('color', 'black');
            }

            //**********************************
            //      #TAMA;O 3 RAM - CPU
            //**********************************

            if ($("#tamanio_ram3").val() === "" ){
                errores = errores + 1;
                $("#msg_error_tamanio_ram3").prop('hidden',false);
                $('#bk_tamanio_ram3').css('color', 'red');
            }else{
                $("#msg_error_tamanio_ram3").prop('hidden',true);
                $('#bk_tamanio_ram3').css('color', 'black');
            }
            //**********************************
            //      #BANCO 4 RAM - CPU
            //**********************************

            if ($("#tipo_frecuencia4").val() === "Seleccione" ){
                errores = errores + 1;
                $("#msg_error_tipo_frecuencia4").prop('hidden',false);
                $('#bk_tipo_frecuencia4').css('color', 'red');
            }else{
                $("#msg_error_tipo_frecuencia4").prop('hidden',true);
                $('#bk_tipo_frecuencia4').css('color', 'black');
            }

            //**********************************
            //      #TAMA;O 4 RAM - CPU
            //**********************************

            if ($("#tamanio_ram4").val() === "" ){
                errores = errores + 1;
                $("#msg_error_tamanio_ram4").prop('hidden',false);
                $('#bk_tamanio_ram4').css('color', 'red');
            }else{
                $("#msg_error_tamanio_ram4").prop('hidden',true);
                $('#bk_tamanio_ram4').css('color', 'black');
            }

            break;
    }


    //**********************************
    //      #BANCOS DE HDDS - CPU
    //**********************************

    if ($("#n_discos").val() === "Seleccione" ){
        errores = errores + 1;
        $("#msg_error_n_discos").prop('hidden',false);
        $('#bk_n_discos').css('color', 'red');
    }else{
        $("#msg_error_n_discos").prop('hidden',true);
        $('#bk_n_discos').css('color', 'black');
    }

    hidde_msg_error_hdd();
debugger;
    switch (n_hdds) {
        case "1" :
            //**********************************
            //      #DISCO 1- CPU
            //**********************************

            if ($("#tipo_tamanio1").val() === "Seleccione" ){
                errores = errores + 1;
                $("#msg_error_tipo_tamanio1").prop('hidden',false);
                $('#bk_tipo_tamanio1').css('color', 'red');
            }else{
                $("#msg_error_tipo_tamanio1").prop('hidden',true);
                $('#bk_tipo_tamanio1').css('color', 'black');
            }

            //**********************************
            //      #TAMAÑO DISCO 1- CPU
            //**********************************

            if ($("#tamanio_hdd1").val() === "" ){
                errores = errores + 1;
                $("#msg_error_tamanio_hdd1").prop('hidden',false);
                $('#bk_tamanio_hdd1').css('color', 'red');
            }else{
                $("#msg_error_tamanio_hdd1").prop('hidden',true);
                $('#bk_tamanio_hdd1').css('color', 'black');
            }

            break;

        case "2" :
            //**********************************
            //      #DISCO 1- CPU
            //**********************************

            if ($("#tipo_tamanio1").val() === "Seleccione" ){
                errores = errores + 1;
                $("#msg_error_tipo_tamanio1").prop('hidden',false);
                $('#bk_tipo_tamanio1').css('color', 'red');
            }else{
                $("#msg_error_tipo_tamanio1").prop('hidden',true);
                $('#bk_tipo_tamanio1').css('color', 'black');
            }

            //**********************************
            //      #TAMAÑO DISCO 1- CPU
            //**********************************

            if ($("#tamanio_hdd1").val() === "" ){
                errores = errores + 1;
                $("#msg_error_tamanio_hdd1").prop('hidden',false);
                $('#bk_tamanio_hdd1').css('color', 'red');
            }else{
                $("#msg_error_tamanio_hdd1").prop('hidden',true);
                $('#bk_tamanio_hdd1').css('color', 'black');
            }

            //**********************************
            //      #DISCO 2- CPU
            //**********************************

            if ($("#tipo_tamanio2").val() === "Seleccione" ){
                errores = errores + 1;
                $("#msg_error_tipo_tamanio2").prop('hidden',false);
                $('#bk_tipo_tamanio2').css('color', 'red');
            }else{
                $("#msg_error_tipo_tamanio2").prop('hidden',true);
                $('#bk_tipo_tamanio2').css('color', 'black');
            }

            //**********************************
            //      #TAMAÑO DISCO 2- CPU
            //**********************************

            if ($("#tamanio_hdd2").val() === "" ){
                errores = errores + 1;
                $("#msg_error_tamanio_hdd2").prop('hidden',false);
                $('#bk_tamanio_hdd2').css('color', 'red');
            }else{
                $("#msg_error_tamanio_hdd2").prop('hidden',true);
                $('#bk_tamanio_hdd2').css('color', 'black');
            }

            break;

        case "3" :
            //**********************************
            //      #DISCO 1- CPU
            //**********************************

            if ($("#tipo_tamanio1").val() === "Seleccione" ){
                errores = errores + 1;
                $("#msg_error_tipo_tamanio1").prop('hidden',false);
                $('#bk_tipo_tamanio1').css('color', 'red');
            }else{
                $("#msg_error_tipo_tamanio1").prop('hidden',true);
                $('#bk_tipo_tamanio1').css('color', 'black');
            }

            //**********************************
            //      #TAMAÑO DISCO 1- CPU
            //**********************************

            if ($("#tamanio_hdd1").val() === "" ){
                errores = errores + 1;
                $("#msg_error_tamanio_hdd1").prop('hidden',false);
                $('#bk_tamanio_hdd1').css('color', 'red');
            }else{
                $("#msg_error_tamanio_hdd1").prop('hidden',true);
                $('#bk_tamanio_hdd1').css('color', 'black');
            }

            //**********************************
            //      #DISCO 2- CPU
            //**********************************

            if ($("#tipo_tamanio2").val() === "Seleccione" ){
                errores = errores + 1;
                $("#msg_error_tipo_tamanio2").prop('hidden',false);
                $('#bk_tipo_tamanio2').css('color', 'red');
            }else{
                $("#msg_error_tipo_tamanio2").prop('hidden',true);
                $('#bk_tipo_tamanio2').css('color', 'black');
            }

            //**********************************
            //      #TAMAÑO DISCO 2- CPU
            //**********************************

            if ($("#tamanio_hdd2").val() === "" ){
                errores = errores + 1;
                $("#msg_error_tamanio_hdd2").prop('hidden',false);
                $('#bk_tamanio_hdd2').css('color', 'red');
            }else{
                $("#msg_error_tamanio_hdd2").prop('hidden',true);
                $('#bk_tamanio_hdd2').css('color', 'black');
            }

            //**********************************
            //      #DISCO 3- CPU
            //**********************************

            if ($("#tipo_tamanio3").val() === "Seleccione" ){
                errores = errores + 1;
                $("#msg_error_tipo_tamanio3").prop('hidden',false);
                $('#bk_tipo_tamanio3').css('color', 'red');
            }else{
                $("#msg_error_tipo_tamanio3").prop('hidden',true);
                $('#bk_tipo_tamanio3').css('color', 'black');
            }

            //**********************************
            //      #TAMAÑO DISCO 3- CPU
            //**********************************

            if ($("#tamanio_hdd3").val() === "" ){
                errores = errores + 1;
                $("#msg_error_tamanio_hdd3").prop('hidden',false);
                $('#bk_tamanio_hdd3').css('color', 'red');
            }else{
                $("#msg_error_tamanio_hdd3").prop('hidden',true);
                $('#bk_tamanio_hdd3').css('color', 'black');
            }

            break;

        case "4" :
            //**********************************
            //      #DISCO 1- CPU
            //**********************************

            if ($("#tipo_tamanio1").val() === "Seleccione" ){
                errores = errores + 1;
                $("#msg_error_tipo_tamanio1").prop('hidden',false);
                $('#bk_tipo_tamanio1').css('color', 'red');
            }else{
                $("#msg_error_tipo_tamanio1").prop('hidden',true);
                $('#bk_tipo_tamanio1').css('color', 'black');
            }

            //**********************************
            //      #TAMAÑO DISCO 1- CPU
            //**********************************

            if ($("#tamanio_hdd1").val() === "" ){
                errores = errores + 1;
                $("#msg_error_tamanio_hdd1").prop('hidden',false);
                $('#bk_tamanio_hdd1').css('color', 'red');
            }else{
                $("#msg_error_tamanio_hdd1").prop('hidden',true);
                $('#bk_tamanio_hdd1').css('color', 'black');
            }

            //**********************************
            //      #DISCO 2- CPU
            //**********************************

            if ($("#tipo_tamanio2").val() === "Seleccione" ){
                errores = errores + 1;
                $("#msg_error_tipo_tamanio2").prop('hidden',false);
                $('#bk_tipo_tamanio2').css('color', 'red');
            }else{
                $("#msg_error_tipo_tamanio2").prop('hidden',true);
                $('#bk_tipo_tamanio2').css('color', 'black');
            }

            //**********************************
            //      #TAMAÑO DISCO 2- CPU
            //**********************************

            if ($("#tamanio_hdd2").val() === "" ){
                errores = errores + 1;
                $("#msg_error_tamanio_hdd2").prop('hidden',false);
                $('#bk_tamanio_hdd2').css('color', 'red');
            }else{
                $("#msg_error_tamanio_hdd2").prop('hidden',true);
                $('#bk_tamanio_hdd2').css('color', 'black');
            }

            //**********************************
            //      #DISCO 3- CPU
            //**********************************

            if ($("#tipo_tamanio3").val() === "Seleccione" ){
                errores = errores + 1;
                $("#msg_error_tipo_tamanio3").prop('hidden',false);
                $('#bk_tipo_tamanio3').css('color', 'red');
            }else{
                $("#msg_error_tipo_tamanio3").prop('hidden',true);
                $('#bk_tipo_tamanio3').css('color', 'black');
            }

            //**********************************
            //      #TAMAÑO DISCO 3- CPU
            //**********************************

            if ($("#tamanio_hdd3").val() === "" ){
                errores = errores + 1;
                $("#msg_error_tamanio_hdd3").prop('hidden',false);
                $('#bk_tamanio_hdd3').css('color', 'red');
            }else{
                $("#msg_error_tamanio_hdd3").prop('hidden',true);
                $('#bk_tamanio_hdd3').css('color', 'black');
            }

            //**********************************
            //      #DISCO 4- CPU
            //**********************************

            if ($("#tipo_tamanio4").val() === "Seleccione" ){
                errores = errores + 1;
                $("#msg_error_tipo_tamanio4").prop('hidden',false);
                $('#bk_tipo_tamanio4').css('color', 'red');
            }else{
                $("#msg_error_tipo_tamanio4").prop('hidden',true);
                $('#bk_tipo_tamanio4').css('color', 'black');
            }

            //**********************************
            //      #TAMAÑO DISCO 4- CPU
            //**********************************

            if ($("#tamanio_hdd4").val() === "" ){
                errores = errores + 1;
                $("#msg_error_tamanio_hdd4").prop('hidden',false);
                $('#bk_tamanio_hdd4').css('color', 'red');
            }else{
                $("#msg_error_tamanio_hdd4").prop('hidden',true);
                $('#bk_tamanio_hdd4').css('color', 'black');
            }

            break;
    }

    //**********************************
    //      #NOMBRE DEL HOST- CPU
    //**********************************

    if ($("#nombre_host").val() === "" ){
        errores = errores + 1;
        $("#msg_error_nombre_host").prop('hidden',false);
        $('#bk_nombre_host').css('color', 'red');
    }else{
        $("#msg_error_nombre_host").prop('hidden',true);
        $('#bk_nombre_host').css('color', 'black');
    }

    //**********************************
    //      #TIPO DE RED - CPU
    //**********************************

    if ($("#tipo_red").val() === "Seleccione" ){
        errores = errores + 1;
        $("#msg_error_tipo_red").prop('hidden',false);
        $('#bk_tipo_red').css('color', 'red');
    }else{
        $("#msg_error_tipo_red").prop('hidden',true);
        $('#bk_tipo_red').css('color', 'black');
    }

    //**********************************
    //      #ETHERNET IP - CPU
    //**********************************

    if ($("#ethernet_ip").val() === "" ){
        errores = errores + 1;
        $("#msg_error_ethernet_ip").prop('hidden',false);
        $('#bk_ethernet_ip').css('color', 'red');
    }else{
        $("#msg_error_ethernet_ip").prop('hidden',true);
        $('#bk_ethernet_ip').css('color', 'black');
    }

    //**********************************
    //      #ETHERNET MAC- CPU
    //**********************************

    if ($("#ethernet_mac").val() === "" ){
        errores = errores + 1;
        $("#msg_error_ethernet_mac").prop('hidden',false);
        $('#bk_ethernet_mac').css('color', 'red');
    }else{
        $("#msg_error_ethernet_mac").prop('hidden',true);
        $('#bk_ethernet_mac').css('color', 'black');
    }

    //**********************************
    //      #ETHERNET VELOCIDAD - CPU
    //**********************************

    if ($("#ethernet_speed").val() === "Seleccione" ){
        errores = errores + 1;
        $("#msg_error_ethernet_speed").prop('hidden',false);
        $('#bk_ethernet_speed').css('color', 'red');
    }else{
        $("#msg_error_ethernet_speed").prop('hidden',true);
        $('#bk_ethernet_speed').css('color', 'black');
    }

    //**********************************
    //      #WIFI IP - CPU
    //**********************************

    if ($("#wifi_ip").val() === "" ){
        errores = errores + 1;
        $("#msg_error_wifi_ip").prop('hidden',false);
        $('#bk_wifi_ip').css('color', 'red');
    }else{
        $("#msg_error_wifi_ip").prop('hidden',true);
        $('#bk_wifi_ip').css('color', 'black');
    }

    //**********************************
    //      #WIFI MAC - CPU
    //**********************************

    if ($("#wifi_mac").val() === "" ){
        errores = errores + 1;
        $("#msg_error_wifi_mac").prop('hidden',false);
        $('#bk_wifi_mac').css('color', 'red');
    }else{
        $("#msg_error_wifi_mac").prop('hidden',true);
        $('#bk_wifi_mac').css('color', 'black');
    }


    //**********************************
    //      BAJA EQUIPOS- FECHA DEL REPORTE
    //**********************************

    if ($("#kt_datepicker_1").val() === "" ){
        errores = errores + 1;
        $("#msg_error_baja_equipos_fecha_reporte").prop('hidden',false);
        $('#bk_fecha_reporte').css('color', 'red');
    }else{
        $("#msg_error_baja_equipos_fecha_reporte").prop('hidden',true);
        $('#bk_fecha_reporte').css('color', 'black');
    }

    //**********************************
    //      BAJA EQUIPOS- FECHA DE BAJA
    //**********************************

    if ($("#kt_datepicker_2").val() === "" ){
        errores = errores + 1;
        $("#msg_error_baja_equipos_fecha_baja").prop('hidden',false);
        $('#bk_fecha_baja').css('color', 'red');
    }else{
        $("#msg_error_baja_equipos_fecha_baja").prop('hidden',true);
        $('#bk_fecha_baja').css('color', 'black');
    }

    //**********************************
    //      BAJA EQUIPOS- NUMERO DE ORDEN
    //**********************************

    if ($("#n_orden").val() === "" ){
        errores = errores + 1;
        $("#msg_error_n_orden").prop('hidden',false);
        $('#bk_n_orden').css('color', 'red');
    }else{
        $("#msg_error_n_orden").prop('hidden',true);
        $('#bk_n_orden').css('color', 'black');
    }

    //**********************************
    //      BAJA EQUIPOS- DESCRIPCION DE LA BAJ
    //**********************************

    if ($("#descripcion_baja").val() === "" ){
        errores = errores + 1;
        $("#msg_error_descripcion_baja").prop('hidden',false);
        $('#bk_descripcion_baja').css('color', 'red');
    }else{
        $("#msg_error_descripcion_baja").prop('hidden',true);
        $('#bk_descripcion_baja').css('color', 'black');
    }


    //**********************************
    //      INSTALACION DE SOFTWARE
    //**********************************

    if ($("#software_id").val() === "1" ){
        errores = errores + 1;
        $("#msg_error_software_id").prop('hidden',false);
        $('#bk_software_id').css('color', 'red');
    }else{
        $("#msg_error_software_id").prop('hidden',true);
        $('#bk_software_id').css('color', 'black');
    }

    if ($("#descripcion_software").val() === "" ){
        errores = errores + 1;
        $("#msg_error_descripcion_software").prop('hidden',false);
        $('#bk_descripcion_software').css('color', 'red');
    }else{
        $("#msg_error_descripcion_software").prop('hidden',true);
        $('#bk_descripcion_software').css('color', 'black');
    }

    if ($("#fecha_instalacion").val() === "" ){
        errores = errores + 1;
        $("#msg_error_fecha_instalacion").prop('hidden',false);
        $('#bk_fecha_instalacion').css('color', 'red');
    }else{
        $("#msg_error_fecha_instalacion").prop('hidden',true);
        $('#bk_fecha_instalacion').css('color', 'black');
    }

    if ($("#licencia").val() === "" ){
        errores = errores + 1;
        $("#msg_error_licencia").prop('hidden',false);
        $('#bk_licencia').css('color', 'red');
    }else{
        $("#msg_error_licencia").prop('hidden',true);
        $('#bk_licencia').css('color', 'black');
    }

    if ($("#llave_activacion").val() === "" ){
        errores = errores + 1;
        $("#msg_error_llave_activacion").prop('hidden',false);
        $('#bk_llave_activacion').css('color', 'red');
    }else{
        $("#msg_error_llave_activacion").prop('hidden',true);
        $('#bk_llave_activacion').css('color', 'black');
    }

    if ($("#usuario_software").val() === "" ){
        errores = errores + 1;
        $("#msg_error_usuario_software").prop('hidden',false);
        $('#bk_usuario_software').css('color', 'red');
    }else{
        $("#msg_error_usuario_software").prop('hidden',true);
        $('#bk_usuario_software').css('color', 'black');
    }

    if ($("#personal_instalo").val() === "" ){
        errores = errores + 1;
        $("#msg_error_personal_instalo").prop('hidden',false);
        $('#bk_personal_instalo').css('color', 'red');
    }else{
        $("#msg_error_personal_instalo").prop('hidden',true);
        $('#bk_personal_instalo').css('color', 'black');
    }


    //**********************************
    //      CREAR USUARIO
    //**********************************

    if ($("#name").val() === "" ){
        errores = errores + 1;
        $("#msg_error_nombre_usuario").prop('hidden',false);
        $('#bk_nombre_usuario').css('color', 'red');
    }else{
        $("#msg_error_nombre_usuario").prop('hidden',true);
        $('#bk_nombre_usuario').css('color', 'black');
    }

    if ($("#email").val() === "" ){
        errores = errores + 1;
        $("#msg_error_email_usuario").prop('hidden',false);
        $('#bk_email_usuario').css('color', 'red');
    }else{
        $("#msg_error_email_usuario").prop('hidden',true);
        $('#bk_email_usuario').css('color', 'black');
    }

    if ($("#password").val() === "" ){
        errores = errores + 1;
        $("#msg_error_password_usuario").prop('hidden',false);
        $('#bk_password_usuario').css('color', 'red');
    }else{
        $("#msg_error_password_usuario").prop('hidden',true);
        $('#bk_password_usuario').css('color', 'black');
    }

    if ($("#password_confirm").val() === "" ){
        errores = errores + 1;
        $("#msg_error_password2_usuario").prop('hidden',false);
        $('#bk_password2_usuario').css('color', 'red');
    }else{
        $("#msg_error_password2_usuario").prop('hidden',true);
        $('#bk_password2_usuario').css('color', 'black');
    }

    if ($("#password_confirm").val() != $("#password").val() ){
        errores = errores + 1;
        $("#msg_error_password2_usuario").prop('hidden',false);
        $('#bk_password2_usuario').css('color', 'red');
    }else{
        $("#msg_error_password2_usuario").prop('hidden',true);
        $('#bk_password2_usuario').css('color', 'black');
    }
}

function hidde_msg_error_ram()
{
    $("#msg_error_tipo_frecuencia1").prop('hidden',true);
    $("#msg_error_tamanio_ram1").prop('hidden',true);
    $('#bk_tipo_frecuencia1').css('color', 'black');
    $('#bk_tamanio_ram1').css('color', 'black');

    $("#msg_error_tipo_frecuencia2").prop('hidden',true);
    $("#msg_error_tamanio_ram2").prop('hidden',true);
    $('#bk_tipo_frecuencia2').css('color', 'black');
    $('#bk_tamanio_ram2').css('color', 'black');

    $("#msg_error_tipo_frecuencia3").prop('hidden',true);
    $("#msg_error_tamanio_ram3").prop('hidden',true);
    $('#bk_tipo_frecuencia3').css('color', 'black');
    $('#bk_tamanio_ram3').css('color', 'black');

    $("#msg_error_tipo_frecuencia4").prop('hidden',true);
    $("#msg_error_tamanio_ram4").prop('hidden',true);
    $('#bk_tipo_frecuencia4').css('color', 'black');
    $('#bk_tamanio_ram4').css('color', 'black');
}

function hidde_msg_error_hdd()
{
    $("#msg_error_tipo_tamanio1").prop('hidden',true);
    $('#bk_tipo_tamanio1').css('color', 'black');
    $("#msg_error_tamanio_hdd1").prop('hidden',true);
    $('#bk_tamanio_hdd1').css('color', 'black');

    $("#msg_error_tipo_tamanio2").prop('hidden',true);
    $('#bk_tipo_tamanio2').css('color', 'black');
    $("#msg_error_tamanio_hdd2").prop('hidden',true);
    $('#bk_tamanio_hdd2').css('color', 'black');

    $("#msg_error_tipo_tamanio3").prop('hidden',true);
    $('#bk_tipo_tamanio3').css('color', 'black');
    $("#msg_error_tamanio_hdd3").prop('hidden',true);
    $('#bk_tamanio_hdd3').css('color', 'black');

    $("#msg_error_tipo_tamanio4").prop('hidden',true);
    $('#bk_tipo_tamanio4').css('color', 'black');
    $("#msg_error_tamanio_hdd4").prop('hidden',true);
    $('#bk_tamanio_hdd4').css('color', 'black');
}
