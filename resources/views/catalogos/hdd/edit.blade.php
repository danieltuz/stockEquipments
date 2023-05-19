<!-- CSFR token for ajax call -->
<meta name="_token" content="{{ csrf_token() }}"/>
<br>
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
                        <li>Editar</li>
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
        <input type="hidden" name="hidden_id" id="hidden_id" value="{{ $id }}"/>
        <div class="card-body">
            <div class="form-group row">
                <label class="col-form-label text-right col-lg-3 col-sm-12"
                       id="bk_tipo_hdd_catalogo">Tipo Disco Duro
                </label>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group">
                        <input type="text"
                               class="form-control"
                               id="tipo_hdd_catalogo"
                               value="{{ $tipo }}"
                               placeholder="Escriba un Tamaño de Disco Duro"/>

                        <span class="input-group-text">
                              <i class="far fa-hdd text-primary mr-0"></i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label text-right col-lg-3 col-sm-12"
                       id="bk_tamaño_hdd_catalogo">Tamaño Físico
                </label>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group">
                        <input type="text"
                               class="form-control"
                               id="tamaño_hdd_catalogo"
                               value="{{ $tamanio }}"
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
                    <a href="#" name="action_button" id="action_button" class="btn btn-success mr-2">Actualizar</a>
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

        var id=$("#hidden_id").val();

        debugger;
        errores=0;
        validaCtls();

            if (errores > 0 ){
                $("#msj_errores").html();
                $('#formModal').modal('show');

            }else{
                $.ajax({
                    url: '/catalogos/hdd/update',
                    method: 'post',
                    data: {
                        '_token': CSRF_TOKEN,
                        'id': id,
                        'tipo' : $('#tipo_hdd_catalogo').val(),
                        'tamanio' : $('#tamaño_hdd_catalogo').val()
                    },
                    success: function (data) {

                        if ((data.errors)) {
                            console.log('error');
                        } else {
                            Swal.fire(
                                'Registro Actualizado!',
                                '',
                                'success'
                            );
                            cargarformulario(5,0,2);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError);
                    },
                })
            }
    });


</script>