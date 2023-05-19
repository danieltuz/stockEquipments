<!-- CSFR token for ajax call -->
<meta name="_token" content="{{ csrf_token() }}"/>
<br>
@include('includes.top_view')

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
                       id="bk_nombre_condicion_catalogo">Condición del Equipo
                </label>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group">
                        <input type="text"
                               class="form-control"
                               id="nombre_condicion_catalogo"
                               value="{{ $condicion }}"
                               placeholder="Escriba una Condición de Equipo"/>

                        <span class="input-group-text">
                              <i class="fa fa-exclamation-triangle text-primary mr-0"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <div class="row">
                <div class="col-lg-9 ml-lg-auto">
                    <a href="javascript:void(0);" onclick="cargarformulario(13,0,2);" class="btn btn-secondary">Cancelar</a>
                    <a href="#" name="action_button" id="action_button" class="btn btn-success mr-2">Actualizar</a>
                </div>
            </div>
        </div>
    </form>
    <!--end::Form-->
</div>

@include('includes.bottom_view')
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
                    url: '/catalogos/condicion/update',
                    method: 'post',
                    data: {
                        '_token': CSRF_TOKEN,
                        'id': id,
                        'nombre': $('#nombre_condicion_catalogo').val()
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
                            cargarformulario(13,0,2);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError);
                    },
                })
            }
    });


</script>