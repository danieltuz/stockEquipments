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
			<i class="icon-xl fas fa-home text-primary"></i>
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

        <!--begin::Form-->
        <form class="form">
            <input type="hidden" name="hidden_id" id="hidden_id" value="{{ $id }}"/>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-form-label text-right col-lg-3 col-sm-12"
                           id="bk_direccion_id_catalogo">Nombre de la Dirección
                    </label>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="input-group">
                            <select name="direccion_id_catalogo" id="direccion_id_catalogo" class="form-control">
                                <option value="" disabled selected>Seleccione</option>
                                @foreach($direcciones as $direccion)
                                    <option {{ $subdirecciones->direccion_id==$direccion->id ? "selected" : "" }}
                                            value="{{ $direccion->id }}">{{ $direccion->nombre }} </option>
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
                           id="bk_nombre_subdireccion_catalogo">Nombre de la SubDirección
                    </label>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="input-group">
                            <input type="text"
                                   class="form-control"
                                   id="nombre_subdireccion_catalogo"
                                   value="{{ $subdireccion }}"
                                   placeholder="Escriba un Nombre de Una Subdirección"/>

                            <span class="input-group-text">
                                    <i class="fas fa-home text-primary mr-0"></i>
                            </span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-9 ml-lg-auto">
                        <a href="javascript:void(0);" onclick="cargarformulario(2,0,2);" class="btn btn-secondary">Cancelar</a>
                        <a href="#" name="action_button" id="action_button" class="btn btn-success mr-2">Actualizar</a>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Form-->

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

        }else {
            $.ajax({
                url: '/catalogos/subdireccion/update',
                method: 'post',
                data: {
                    '_token': CSRF_TOKEN,
                    'id'            : id,
                    'direccion_id'  : $('#direccion_id_catalogo').val(),
                    'nombre'        : $('#nombre_subdireccion_catalogo').val()
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
                        cargarformulario(2,0,2);
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError);
                },
            })
        }
    });
</script>