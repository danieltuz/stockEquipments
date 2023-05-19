<!-- CSFR token for ajax call -->
<meta name="_token" content="{{ csrf_token() }}"/>

<!--begin::Container-->
<div class="container">
    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
			<i class="icon-xl fa fa-bookmark text-primary"></i>
                </span>
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">{{ $nivel3 }}</h5>
                        <li>Agregar</li>
                        <!--end::Page Title-->
                    </div>
                    <!--end::Page Heading-->
                </div>
            </div>
        </div>

        <div class="card-body">

    <div class="alert alert-danger" role="alert" id="duplicado" style="display: none">
        Ya existe un registro con ese nombre en la base de datos.
    </div>

    <!--begin::Form-->
    <form class="form">
        @csrf
        <div class="card-body">
            <div class="form-group row">
                <label class="col-form-label text-right col-lg-3 col-sm-12"
                       id="bk_direccion_id_catalogo">Dirección
                </label>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group">
                        <select name="direccion_id_catalogo" id="direccion_id_catalogo" class="form-control">
                            <option value="Seleccione" selected>Seleccione</option>
                            @foreach($direcciones as $direccion)
                                <option value="{{ $direccion->id }}">{{ $direccion->nombre }} </option>
                            @endforeach
                        </select>

                        <span class="input-group-text">
                          <i class="far fa-building text-primary mr-0"></i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label text-right col-lg-3 col-sm-12"
                       id="bk_subdireccion_id_catalogo">Subdirección
                </label>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group">
                        <select name="subdireccion_id_catalogo" id="subdireccion_id_catalogo" class="form-control">
                            <option value="" disabled selected>Seleccione</option>
                        </select>

                        <span class="input-group-text">
                              <i class="fas fa-home text-primary mr-0"></i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label text-right col-lg-3 col-sm-12"
                       id="bk_nombre_coordinacion_catalogo" >Nombre de la Coordinación
                </label>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group">
                        <input type="text"
                               class="form-control"
                               id="nombre_coordinacion_catalogo"
                               placeholder="Escriba un Nombre de Una Coordinación"/>

                        <span class="input-group-text">
                            <i class="fa fa-bookmark text-primary mr-0"></i>
                        </span>
                    </div>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <div class="row">
                <div class="col-lg-9 ml-lg-auto">
                    <a href="javascript:void(0);" onclick="cargarformulario(3,0,2);" class="btn btn-secondary">Cancelar</a>
                    <a href="#" name="action_button" id="action_button" class="btn btn-success mr-2">Agregar</a>
                </div>
            </div>
        </div>
    </form>
    <!--end::Form-->
</div>

    </div>
    <!--end::Card-->
</div>
<!--end::Container-->

@include('includes.msg_error')     {{-- pantalla modal menaje de error --}}

<script src="{{ asset('propias/msg_errores.js') }}"></script>

<script>

    var CSRF_TOKEN = $('meta[name="_token"]').attr('content');

    $("#action_button").on('click', function() {

        debugger;
        errores=0;
        validaCtls();

            if (errores > 0 ){
                $("#msj_errores").html();
                $('#formModal').modal('show');
            }else{
                $.ajax({
                    type: 'POST',
                    '_token': CSRF_TOKEN,
                    url: '/catalogos/coordinacion/store',
                    data: {
                        '_token'         : $('input[name=_token]').val(),
                        'direccion_id'   : $('#direccion_id_catalogo').val(),
                        'subdireccion_id': $('#subdireccion_id_catalogo').val(),
                        'nombre'         : $('#nombre_coordinacion_catalogo').val()
                    },
                    success: function (data) {

                        // si hay error aparece un popup mostrando el error
                        if ((data.errors)) {
                            alert('error');
                        }

                        // si data es > 0 quiere decir que ya existe el registro en la base de datos
                        // y muestra el mensaje de existencia y no se guardaa
                        if ((data > 0)) {
                            document.getElementById("duplicado").style.display="block";
                        }

                        // si data = 0 quiere decir que no existe el registro en la base de datos
                        if ((data == 0)){
                            Swal.fire(
                                'Registro Creado!',
                                '',
                                'success'
                            );
                            document.getElementById("duplicado").style.display="none";
                            cargarformulario(3,0,2);
                        }

                    },
                })
            }
    });


    $("#direccion_id_catalogo").change(function() {

        var id=$("#direccion_id_catalogo").val();

        cargarSubdirecciones(id);

    });

    function cargarSubdirecciones(select) {

        value = select;
        debugger;
        if (!isNaN(parseInt(value))) {
            url="/catalogos/coordinacion/"+value+"/getSubdireccionSeleccion";
            $.get(url, function (response) {
                if (response.status == 200) {

                    tipo = response.response;

                    /************************************************
                     * Subdirecciones
                     ************************************************/
                    html = '';
                    html += `<option value="0" disabled selected >Seleccione</option>`;

                    $.each(tipo, function (i, item){
                        html += `<option value="${item.id}">${item.nombre}</option>`
                    });

                    $('#subdireccion_id_catalogo').html(html);
                }
                else {
                    toastr.error('{{ 'Ocurrió un error al comunicarse con el servidor' }}');
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
            html += '<option value="">{{ 'Seleccione' }}</option>';

        }

    }
</script>
