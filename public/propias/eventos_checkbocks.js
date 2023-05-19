
//**********************************************************************
//**********************************************************************
// controla los checkbox de la pantalla modal
//**********************************************************************
//**********************************************************************

// {{--Valida que el checkbox de la columna edificio este activado para que se muestre en la tabla--}}
$("input[name=ChkEdificio]").click(function(){
    if ($(this).val() == $("#hiddeEdificio").val()) {
        $("#ChkEdificio").val('1');

        $(".col_edificio").hide();
        $(".col_edificio2").hide();
    }else{
        $("#ChkEdificio").val('0');
        $(".col_edificio").show();
        $(".col_edificio2").show();
    }
});

// {{--Valida que el checkbox de la columna direccion este activado para que se muestre en la tabla--}}
$("input[name=ChkDireccion]").click(function(){
    if ($(this).val() == $("#hiddeDireccion").val()) {
        $("#ChkDireccion").val('1');

        $(".col_direccion").hide();
        $(".col_direccion2").hide();
    }else{
        $("#ChkDireccion").val('0');
        $(".col_direccion").show();
        $(".col_direccion2").show();
    }
});

// Valida que el checkbox de la columna subdireccion este activado para que se muestre en la tabla
$("input[name=ChkSubdireccion]").click(function(){
    debugger;
    if ($(this).val() == $("#hiddeSubdireccion").val()) {
        $("#ChkSubdireccion").val('1');

        $(".col_subdireccion").hide();
        $(".col_subdireccion2").hide();
    }else{
        $("#ChkSubdireccion").val('0');
        $(".col_subdireccion").show();
        $(".col_subdireccion2").show();
    }
});

// {{--Valida que el checkbox de la columna coordinacion este activado para que se muestre en la tabla--}}
$("input[name=ChkCoordinacion]").click(function(){
    if ($(this).val() == $("#hiddeCoordinacion").val()) {
        $("#ChkCoordinacion").val('1');

        $(".col_coordinacion").hide();
        $(".col_coordinacion2").hide();
    }else{
        $("#ChkCoordinacion").val('0');
        $(".col_coordinacion").show();
        $(".col_coordinacion2").show();
    }
});

// {{--Valida que el checkbox de la columna tipo cpu este activado para que se muestre en la tabla--}}
$("input[name=ChkTipoCpu]").click(function(){
    if ($(this).val() == $("#hiddeTipoCpu").val()) {
        $("#ChkTipoCpu").val('1');

        $(".col_tipo_equipo").hide();
        $(".col_tipo_equipo2").hide();
    }else{
        $("#ChkTipoCpu").val('0');
        $(".col_tipo_equipo").show();
        $(".col_tipo_equipo2").show();
    }
});

// {{--Valida que el checkbox de la columna marca este activado para que se muestre en la tabla--}}
$("input[name=ChkMarca]").click(function() {
    if ($(this).val() == $("#hiddeMarca").val()) {
        $("#ChkMarca").val('1');

        $(".col_tipo_marcas").hide();
        $(".col_tipo_marcas2").hide();
    } else {
        $("#ChkMarca").val('0');
        $(".col_tipo_marcas").show();
        $(".col_tipo_marcas2").show();
    }
});

// {{--Valida que el checkbox de la columna modelo este activado para que se muestre en la tabla--}}
$("input[name=ChkModelo]").click(function() {
    if ($(this).val() == $("#hiddeModelo").val()) {
        $("#ChkModelo").val('1');

        $(".col_tipo_modelos").hide();
        $(".col_tipo_modelos2").hide();
    } else {
        $("#ChkModelo").val('0');
        $(".col_tipo_modelos").show();
        $(".col_tipo_modelos2").show();
    }
});

// {{--Valida que el checkbox de la columna procesador este activado para que se muestre en la tabla--}}
$("input[name=ChkProcesador]").click(function() {
    if ($(this).val() == $("#hiddeProcesador").val()) {
        $("#ChkProcesador").val('1');

        $(".col_tipo_procesador").hide();
        $(".col_tipo_procesador2").hide();
    } else {
        $("#ChkProcesador").val('0');
        $(".col_tipo_procesador").show();
        $(".col_tipo_procesador2").show();
    }
});

// {{--Valida que el checkbox de la columna ram este activado para que se muestre en la tabla--}}
$("input[name=ChkRam]").click(function() {
    if ($(this).val() == $("#hiddeRam").val()) {
        $("#ChkRam").val('1');

        $(".col_tipo_ram").hide();
        $(".col_tipo_ram2").hide();
    } else {
        $("#ChkRam").val('0');
        $(".col_tipo_ram").show();
        $(".col_tipo_ram2").show();
    }
});

// {{--Valida que el checkbox de la columna hdd este activado para que se muestre en la tabla--}}
$("input[name=ChkHdd]").click(function() {
    if ($(this).val() == $("#hiddeHdd").val()) {
        $("#ChkHdd").val('1');

        $(".col_tipo_hdd").hide();
        $(".col_tipo_hdd2").hide();
    } else {
        $("#ChkHdd").val('0');
        $(".col_tipo_hdd").show();
        $(".col_tipo_hdd2").show();
    }
});

// {{--Valida que el checkbox de la columna windows este activado para que se muestre en la tabla--}}
$("input[name=ChkWindows]").click(function() {
    if ($(this).val() == $("#hiddeWindows").val()) {
        $("#ChkWindows").val('1');

        $(".col_tipo_windows").hide();
        $(".col_tipo_windows2").hide();
    } else {
        $("#ChkWindows").val('0');
        $(".col_tipo_windows").show();
        $(".col_tipo_windows2").show();
    }
});

// {{--Valida que el checkbox de la columna so este activado para que se muestre en la tabla--}}
$("input[name=ChkSo]").click(function() {
    if ($(this).val() == $("#hiddeSo").val()) {
        $("#ChkSo").val('1');

        $(".col_tipo_so").hide();
        $(".col_tipo_so2").hide();
    } else {
        $("#ChkSo").val('0');
        $(".col_tipo_so").show();
        $(".col_tipo_so2").show();
    }
});

// {{--Valida que el checkbox de la columna usuario este activado para que se muestre en la tabla--}}
$("input[name=ChkUsuario]").click(function() {
    if ($(this).val() == $("#hiddeUsuario").val()) {
        $("#ChkUsuario").val('1');

        $(".col_tipo_usuario").hide();
        $(".col_tipo_usuario2").hide();
    } else {
        $("#ChkUsuario").val('0');
        $(".col_tipo_usuario").show();
        $(".col_tipo_usuario2").show();
    }
});

// Valida que el checkbox de la columna inventario este activado para que se muestre en la tabla
$("input[name=ChkInventario]").click(function() {
    if ($(this).val() == $("#hiddeInventario").val()) {
        $("#ChkInventario").val('1');

        $(".col_tipo_inventario").hide();
        $(".col_tipo_inventario2").hide();
    } else {
        $("#ChkInventario").val('0');
        $(".col_tipo_inventario").show();
        $(".col_tipo_inventario2").show();
    }
});

// Valida que el checkbox de la columna serie este activado para que se muestre en la tabla
$("input[name=ChkSerie]").click(function() {
    if ($(this).val() == $("#hiddeSerie").val()) {
        $("#ChkSerie").val('1');

        $(".col_tipo_serie").hide();
        $(".col_tipo_serie2").hide();
    } else {
        $("#ChkSerie").val('0');
        $(".col_tipo_serie").show();
        $(".col_tipo_serie2").show();
    }
});

// {{--Valida que el checkbox de la columna condicion este activado para que se muestre en la tabla--}}
$("input[name=ChkCondicion]").click(function() {
    if ($(this).val() == $("#hiddeCondicion").val()) {
        $("#ChkCondicion").val('1');

        $(".col_tipo_condicion").hide();
        $(".col_tipo_condicion2").hide();
    } else {
        $("#ChkCondicion").val('0');
        $(".col_tipo_condicion").show();
        $(".col_tipo_condicion2").show();
    }
});
