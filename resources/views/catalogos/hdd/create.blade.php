<!-- CSFR token for ajax call -->
<meta name="_token" content="{{ csrf_token() }}"/>

<!--begin::Container-->
<div class="container">
    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
			<i class="icon-xl far fa-hdd text-primary"></i>
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
                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                       id="bk_tipo_hdd_catalogo">Tipo Disco Duro
                </label>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group">
                        <input type="text"
                               class="form-control"
                               id="tipo_hdd_catalogo"
                               placeholder="Escriba un Tipo de Disco Duro"/>

                        <span class="input-group-text">
                               <i class="far fa-hdd text-primary mr-0"></i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                       id="bk_tamaño_hdd_catalogo">Tamaño Físico
                </label>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group">
                        <input type="text"
                               class="form-control"
                               id="tamaño_hdd_catalogo"
                               placeholder="Escriba un Tamaño Físico de Disco Duro"/>

                        <span class="input-group-text">
                               <i class="far fa-hdd text-primary mr-0"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <div class="row">
                <div class="col-lg-9 ml-lg-auto">
                    <a href="javascript:void(0);" onclick="cargarformulario(5,0,2);" class="btn btn-secondary">Cancelar</a>
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


        errores=0;
        validaCtls();

        debugger;

        document.getElementById("duplicado").style.display="none";

        if (errores > 0 ){
            $("#msj_errores").html();
            $('#formModal').modal('show');
        }else{
            $.ajax({
                type: 'POST',
                '_token': CSRF_TOKEN,
                url: '/catalogos/hdd/store',
                data: {
                    '_token' : $('input[name=_token]').val(),
                    'tipo' : $('#tipo_hdd_catalogo').val(),
                    'tamanio' : $('#tamaño_hdd_catalogo').val()
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
                        cargarformulario(5,0,2);
                    }
                },
            })
        }
    });

</script>