<!-- CSFR token for ajax call -->
<meta name="_token" content="{{ csrf_token() }}"/>

<div class="content d-flex flex-column flex-column-fluid">
@include('includes.top_view')

<div class="card-body">

    <div class="alert alert-danger" role="alert" id="duplicado" style="display: none">
        Ya existe un usuario con el mismo E-Mail Address registrado en la base de datos.
    </div>

    <!--begin::Form-->
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="card-body">
            <div class="form-group row">
                <label class="col-form-label text-right col-lg-3 col-sm-12"
                id="bk_nombre_usuario">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name"
                           type="text"
                           class="form-control @error('name') is-invalid @enderror"
                           name="name"
                           value="{{ old('name') }}"
                           placeholder="Escriba un nombre de usuario"
                           autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

            </div>

            <div class="form-group row">

                <label for="email"
                       class="col-form-label text-right col-lg-3 col-sm-12"
                       id="bk_email_usuario">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email"
                           type="email"
                           class="form-control"
                           onblur="validaEmail()"
                           name="email"
                           value="{{ old('email') }}"
                           placeholder="Escriba un correo válido"
                           required>
                    <li id="emailOK" style="color: red"></li>
                    <li id="emailOK2" style="color: green"></li>
                </div>
            </div>

            <div class="form-group row">
                <label for="password"
                       class="col-form-label text-right col-lg-3 col-sm-12"
                       id="bk_password_usuario">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password"
                           type="password"
                           class="form-control"
                           name="password"
                           placeholder="Escriba una contraseña">
                </div>

            </div>

            <div class="form-group row">
                <label for="password-confirm"
                       class="col-form-label text-right col-lg-3 col-sm-12"
                       id="bk_password2_usuario">{{ __('Confirme su Password') }}</label>


                <div class="col-md-6">
                    <input id="password_confirm"
                           type="password"
                           class="form-control"
                           name="password_confirmation"
                           placeholder="Repita su contraseña">
                </div>

            </div>

        </div>

        <div class="card-footer">
            <div class="row">
                <div class="col-lg-9 ml-lg-auto">
                    <a href="javascript:void(0);" onclick="cargarformulario(16,0,1);" class="btn btn-secondary">Cancelar</a>
                    <a href="#" name="action_button" id="action_button" class="btn btn-success mr-2">Registrar</a>
                    {{--<input type="hidden" id="emailOK" value="">--}}
                </div>
            </div>
        </div>
    </form>
    <!--end::Form-->
</div>

</div>
@include('includes.bottom_view')
@include('includes.msg_error')     {{-- pantalla modal menaje de error --}}

<script src="{{ asset('propias/msg_errores.js') }}"></script>

<script>

    var CSRF_TOKEN = $('meta[name="_token"]').attr('content');

    document.getElementById("emailOK2").style.display = "none";

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
                url: '/catalogos/usuarios/store',
                data: {
                    '_token'   : $('input[name=_token]').val(),
                    'name'     : $('#name').val(),
                    'email'    : $('#email').val(),
                    'password' : $('#password').val(),
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
                            "Usuario Creado!",
                            "",
                            "success");

                        document.getElementById("duplicado").style.display="none";
                        cargarformulario(16,0,1);
                    }
                },
            })
        }
    });

    function validaEmail(){

        // valor=$('#emailOK').val();
        //
        // switch (valor) {
        //     case 'válido':
        //         document.getElementById("emailOK2").style.display = "";
        //         document.getElementById("emailOK").style.display = "none";
        //         break;
        //
        //     case 'incorrecto':
        //         document.getElementById("emailOK").style.display = "";
        //         document.getElementById("emailOK2").style.display = "none";
        //         break;
        // }
    }

    document.getElementById('email').addEventListener('input', function() {
        campo = event.target;
        valido = document.getElementById('emailOK');

        emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
        //Se muestra un texto a modo de ejemplo, luego va a ser un icono
        if (emailRegex.test(campo.value)) {
            valido.innerText = "válido";
            $('#emailOK').val(valido.innerText);
            $('#emailOK2').val(valido.innerText);
        } else {
            valido.innerText = "incorrecto";
            $('#emailOK').val(valido.innerText);
            $('#emailOK2').val(valido.innerText);
        }

        valor=$('#emailOK').val();
debugger;
        switch (valor) {
            case 'válido':
                document.getElementById("emailOK2").style.display = "";
                document.getElementById("emailOK").style.display = "none";
                break;

            case 'incorrecto':
                document.getElementById("emailOK").style.display = "";
                document.getElementById("emailOK2").style.display = "none";
                break;
        }

    });

</script>