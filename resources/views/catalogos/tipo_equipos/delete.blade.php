<!--begin::Container-->
<div class="container">
    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
			<i class="icon-xl fas fa-magic text-primary"></i>
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
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"
                           id="bk_equipo">Equipo
                    </label>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="input-group">
                            <input type="text"
                                   class="form-control"
                                   id="equipo"
                                   value="{{ $nombre }}"
                                   disabled
                                   placeholder="Escriba un Equipo"/>

                            <span class="input-group-text">
                               <i class="fas fa-magic text-primary mr-0"></i>
                        </span>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"
                           id="bk_tipo_equipo">Tipo de Equipo
                    </label>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="input-group">
                            <input type="text"
                                   class="form-control"
                                   id="tipo_equipo"
                                   value="{{ $tipo }}"
                                   disabled
                                   placeholder="Escriba un Tipo de Equipo"/>

                            <span class="input-group-text">
                               <i class="fas fa-magic text-primary mr-0"></i>
                        </span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-9 ml-lg-auto">
                        <a href="javascript:void(0);" onclick="cargarformulario(50,0,2);" class="btn btn-secondary">Cancelar</a>

                        @if($existe == 0)
                            <a href="#" name="action_button" id="action_button" class="btn btn-danger">Borrar</a>
                        @elseif($existe == 1)
                            <a href="#" name="action_button" id="action_button" class="btn btn-danger" style="display: none">Borrar</a>
                        @endif
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
            url: '/catalogos/tipo_equipos/destroy/' +  id,
            method: 'get',
            success: function (response) {
                Swal.fire(
                    'Registro Borrado!',
                    '',
                    'success'
                );
                cargarformulario(50,0,2);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError);
            },
        })
    });

</script>