function cargarformulario(arg,id,pantalla)
{

    //************************************************************
    //*******************PANEL CATALOGOS**********************
    //************************************************************

    if(arg ==1.5)  {var url = "catalogos/panel";}

    //************************************************************
    //*******************CATALOGOS DIRECCION**********************
    //************************************************************

    if(arg ==1)  {var url = "catalogos/direccion";}
    if(arg ==1.2){var url = "catalogos/direccion/create";}
    if(arg ==1.3){var url = "catalogos/direccion/"+ id +"/edit";}
    if(arg ==1.4){var url = "catalogos/direccion/"+ id +"/getDestroy";}

    //*******************CATALOGOS SUBDIRECCION**********************

    if(arg ==2)  {var url = "catalogos/subdireccion";}
    if(arg ==2.2){var url = "catalogos/subdireccion/create";}
    if(arg ==2.3){var url = "catalogos/subdireccion/"+ id +"/edit";}
    if(arg ==2.4){var url = "catalogos/subdireccion/"+ id +"/getDestroy";}

    //*******************CATALOGOS COORDINACION**********************

    if(arg ==3)  {var url = "catalogos/coordinacion";}
    if(arg ==3.2){var url = "catalogos/coordinacion/create";}
    if(arg ==3.3){var url = "catalogos/coordinacion/"+ id +"/edit";}
    if(arg ==3.4){var url = "catalogos/coordinacion/"+ id +"/getDestroy";}

    //*******************CATALOGOS EDIFICIO**********************

    if(arg ==4)  {var url = "catalogos/edificio";}
    if(arg ==4.2){var url = "catalogos/edificio/create";}
    if(arg ==4.3){var url = "catalogos/edificio/"+ id +"/edit";}
    if(arg ==4.4){var url = "catalogos/edificio/"+ id +"/getDestroy";}

    //*******************CATALOGOS HDD**********************

    if(arg ==5)  {var url = "catalogos/hdd";}
    if(arg ==5.2){var url = "catalogos/hdd/create";}
    if(arg ==5.3){var url = "catalogos/hdd/"+ id +"/edit";}
    if(arg ==5.4){var url = "catalogos/hdd/"+ id +"/getDestroy";}

    //*******************CATALOGOS MRCAS**********************

    if(arg ==6)  {var url = "catalogos/marca";}
    if(arg ==6.2){var url = "catalogos/marca/create";}
    if(arg ==6.3){var url = "catalogos/marca/"+ id +"/edit";}
    if(arg ==6.4){var url = "catalogos/marca/"+ id +"/getDestroy";}

    //*******************CATALOGOS MODELOs**********************

    if(arg ==7)  {var url = "catalogos/modelo";}
    if(arg ==7.2){var url = "catalogos/modelo/create";}
    if(arg ==7.3){var url = "catalogos/modelo/"+ id +"/edit";}
    if(arg ==7.4){var url = "catalogos/modelo/"+ id +"/getDestroy";}

    //*******************CATALOGOS MONITOR**********************

    if(arg ==8)  {var url = "catalogos/monitor";}
    if(arg ==8.2){var url = "catalogos/monitor/create";}
    if(arg ==8.3){var url = "catalogos/monitor/"+ id +"/edit";}
    if(arg ==8.4){var url = "catalogos/monitor/"+ id +"/getDestroy";}

    //*******************CATALOGOS PROCESADOR**********************

    if(arg ==9)  {var url = "catalogos/procesador";}
    if(arg ==9.2){var url = "catalogos/procesador/create";}
    if(arg ==9.3){var url = "catalogos/procesador/"+ id +"/edit";}
    if(arg ==9.4){var url = "catalogos/procesador/"+ id +"/getDestroy";}

    //*******************CATALOGOS RAM**********************

    if(arg ==10)  {var url = "catalogos/ram";}
    if(arg ==10.2){var url = "catalogos/ram/create";}
    if(arg ==10.3){var url = "catalogos/ram/"+ id +"/edit";}
    if(arg ==10.4){var url = "catalogos/ram/"+ id +"/getDestroy";}

    //*******************CATALOGOS SO**********************

    if(arg ==11)  {var url = "catalogos/so";}
    if(arg ==11.2){var url = "catalogos/so/create";}
    if(arg ==11.3){var url = "catalogos/so/"+ id +"/edit";}
    if(arg ==11.4){var url = "catalogos/so/"+ id +"/getDestroy";}

    //*******************CATALOGOS WINDOWS**********************

    if(arg ==12)  {var url = "catalogos/windows";}
    if(arg ==12.2){var url = "catalogos/windows/create";}
    if(arg ==12.3){var url = "catalogos/windows/"+ id +"/edit";}
    if(arg ==12.4){var url = "catalogos/windows/"+ id +"/getDestroy";}

    //*******************CATALOGOS CONDICION**********************

    if(arg ==13)  {var url = "catalogos/condicion";}
    if(arg ==13.2){var url = "catalogos/condicion/create";}
    if(arg ==13.3){var url = "catalogos/condicion/"+ id +"/edit";}
    if(arg ==13.4){var url = "catalogos/condicion/"+ id +"/getDestroy";}

    //*******************CATALOGOS PROGRAMAS**********************

    if(arg ==16)  {var url = "catalogos/programa";}
    if(arg ==16.2){var url = "catalogos/programa/create";}
    if(arg ==16.3){var url = "catalogos/programa/"+ id +"/edit";}
    if(arg ==16.4){var url = "catalogos/programa/"+ id +"/getDestroy";}

    //*******************CATALOGOS TIPO EQUIPOS**********************

    if(arg ==50)  {var url = "catalogos/tipo_equipos";}
    if(arg ==50.2){var url = "catalogos/tipo_equipos/create";}
    if(arg ==50.3){var url = "catalogos/tipo_equipos/"+ id +"/edit";}
    if(arg ==50.4){var url = "catalogos/tipo_equipos/"+ id +"/getDestroy";}

    //************************************************************
    //*******************EQUIPOS CPU******************************
    //************************************************************

    if(arg ==14)  {var url = "equipos/cpu";}
    if(arg ==14.2){var url = "equipos/cpu/create";}
    if(arg ==14.3){var url = "equipos/cpu/"+ id +"/edit";}
    if(arg ==14.4){var url = "equipos/cpu/"+ id +"/getDestroy";}
    if(arg ==14.5){var url = "equipos/cpu/"+ id +"/verBaja";}
    if(arg ==14.6){var url = "equipos/cpu/"+ id +"/verSoftware";}

    //************************************************************
    //*******************EQUIPOS MONITOR**************************
    //************************************************************

    if(arg ==15)  {var url = "equipos/display";}
    if(arg ==15.2){var url = "equipos/display/create";}
    if(arg ==15.3){var url = "equipos/display/"+ id +"/edit";}
    if(arg ==15.4){var url = "equipos/display/"+ id +"/getDestroy";}
    if(arg ==15.5){var url = "equipos/display/"+ id +"/verBaja";}

    //************************************************************
    //*******************SOFTWARE**************************
    //************************************************************

    if(arg ==18)  {var url = "software";}
    if(arg ==18.2){var url = "software/create";}
    if(arg ==18.3){var url = "software/"+ id +"/edit";}
    if(arg ==18.4){var url = "software/"+ id +"/getDestroy";}
    if(arg ==18.5){var url = "software/"+ id +"/verBaja";}

    //************************************************************
    //*******************MENU USUARIOS**************************
    //************************************************************

    if(arg ==17)  {var url = "catalogos/usuarios";}
    if(arg ==17.2){var url = "catalogos/usuarios/create";}
    if(arg ==17.3){var url = "catalogos/usuarios/"+ id +"/edit";}
    if(arg ==17.4){var url = "catalogos/usuarios/"+ id +"/getDestroy";}
    if(arg ==17.5){var url = "catalogos/usuarios/"+ id +"/verBaja";}

    $.get(url, function (resul) {

        switch (pantalla) {
            //contenido principal
            case 1 :
                $("#contenido_principal").html(resul);

                var url = "catalogos/edificio";
                $.get(url, function (resul2) {
                    $("#cuerpo_catalogos").html(resul2);
                });
                break;
            //cuerpo del catalogo
            case 2:
                $("#cuerpo_catalogos").html(resul);
                break;
        }

    });


}

