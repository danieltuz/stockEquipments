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
                        <li>Borrar</li>
                        <!--end::Page Title-->
                    </div>
                    <!--end::Page Heading-->
                </div>
            </div>
        </div>

        <div class="card-body">
    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

        @if($existe == 0)
            {{--se oculta el mensaje--}}
            <div class="form-group" hidden>
                <label class="col-lg-2 control-label">&nbsp;&nbsp;</label>
                <div class="col-lg-12">

                    <div class="alert alert-custom alert-outline-danger fade show mb-5" role="alert">
                        <div class="alert-icon">
                            <i class="flaticon-warning"></i>
                        </div>
                        <div class="alert-text">El registro no se puede borrar porque esta en uso.</div>
                    </div>
                </div>
            </div>

        @elseif($existe == 1)

            {{--se muestra el mensaje--}}
            <div class="form-group">
                <label class="col-lg-2 control-label">&nbsp;&nbsp;</label>
                <div class="col-lg-12">
                    <div class="alert alert-custom alert-outline-danger fade show mb-5" role="alert">
                        <div class="alert-icon">
                            <i class="flaticon-warning"></i>
                        </div>
                        <div class="alert-text">El registro no se puede borrar porque esta en uso.</div>
                    </div>
                </div>
            </div>
        @endif

        @csrf
        <input type="hidden" name="hidden_id" id="hidden_id" value="{{ $id }}"/>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-form-label text-right col-lg-3 col-sm-12"
                       id="bk_direccion_id_catalogo">Nombre de la Dirección
                </label>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group">
                        <select name="direccion_id_catalogo" id="direccion_id_catalogo" class="form-control" disabled>
                            <option value="" disabled selected>Seleccione</option>
                            @foreach($direcciones as $direccion)
                                <option {{ $coordinaciones->direccion_id==$direccion->id ? "selected" : "" }}
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
                       id="bk_subdireccion_id_catalogo">Nombre de la Subdirección
                </label>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group">
                        <select name="subdireccion_id_catalogo" id="subdireccion_id_catalogo" class="form-control" disabled>
                            <option value="" disabled selected>Seleccione</option>
                            @foreach($subdirecciones as $subdireccion)
                                <option {{ $coordinaciones->subdireccion_id==$subdireccion->id ? "selected" : "" }}
                                        value="{{ $subdireccion->id }}">{{ $subdireccion->nombre }} </option>
                            @endforeach
                        </select>

                        <span class="input-group-text">
                              <i class="fas fa-home text-primary mr-0"></i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label text-right col-lg-3 col-sm-12"
                       id="bk_nombre_coordinacion_catalogo">Nombre de la Coordinación
                </label>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group">
                        <input type="text"
                               class="form-control"
                               id="nombre_coordinacion_catalogo"
                               disabled
                               value="{{ $coordinacion }}"
                               placeholder="Escriba el Nombre de Una Coordinación"/>

                        <span class="input-group-text">
                             <i class="fa fa-bookmark text-primary mr-0"></i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-9 ml-lg-auto">
                        <a href="javascript:void(0);" onclick="cargarformulario(3,0,2);" class="btn btn-secondary">Cancelar</a>

                        @if($existe == 0)
                            <a href="#" name="action_button" id="action_button" class="btn btn-danger">Borrar</a>
                        @elseif($existe == 1)
                            <a href="#" name="action_button" id="action_button" class="btn btn-danger" style="display: none">Borrar</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

    </div>
    <!--end::Card-->
</div>
<!--end::Container-->

@include('includes.msg_error')     {{-- pantalla modal menaje de error --}}

<script src="{{ asset('propias/msg_errores.js') }}"></script>


<script>

    $("#action_button").on('click', function() {

        var id=$("#hidden_id").val();
        debugger;
        $.ajax({
            url: '/catalogos/coordinacion/destroy/' +  id,
            method: 'get',
            success: function (response) {
                Swal.fire(
                    'Registro Borrado!',
                    '',
                    'success'
                );
                cargarformulario(3,0,2);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError);
            },
        })
    });
</script>