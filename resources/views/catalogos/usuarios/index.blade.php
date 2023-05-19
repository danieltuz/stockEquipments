
<div class="content d-flex flex-column flex-column-fluid">
<!--begin::Container-->
<div class="container">
    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                        <span class="card-icon">
                          <i class="icon-xl fas fa-coffee text-primary"></i>
                        </span>
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Usuairos</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a href="" class="text-muted"></a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="" class="text-muted"></a>
                            </li>
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>
            </div>
            <div class="card-toolbar">
                <!--begin::Button-->
                <a href="javascript:;" class="btn btn-primary font-weight-bolder" onclick="cargarformulario(16.2,0,1);">
                    <i class="la la-plus"></i>Nuevo Usuario</a>
                <!--end::Button-->
            </div>
        </div>

        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-hover" id="kt_datatable" style="margin-top: 13px !important">
                <thead>
                <tr>
                    <td style="width: 5px" class="text-center"></td>
                    <td style="width: 1000px" class="text-center">Nombre</td>
                    <td style="width: 200px" class="text-center">E-mail</td>
                    <td style="width: 200px" class="text-center">Estatus</td>
                    <td style="width: 200px" class="text-center">Tipo</td>
                    <td style="width: 200px" class="text-center">Acciones</td>
                </tr>
                </thead>
            </table>
            <!--end: Datatable-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Container-->
</div>

<script>

    $('#kt_datatable').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('catalogos.usuarios.getUsers') }}",
        "columns":[
            { "data": "id" ,className: "text-center",},
            { "data": "name" ,className: "text-center",},
            { "data": "email" ,className: "text-center",},
            { "data": "activo" ,className: "text-center",},
            { "data": "tipo" ,className: "text-center",},
            { "data": "action", orderable:false, searchable: false,className: "text-center",},
        ],
        "language": {
            "info": "_TOTAL_ registros",
            "search": "Buscar",
            "paginate": {
                "next": "Siguiente",
                "previous": "Anterior",
            },
            "lengthMenu": 'Mostrar <select>'+
                '<option value="10">10</option>'+
                '<option value="25">25</option>'+
                '<option value="30">30</option>'+
                '<option value="50">50</option>'+
                '<option value="-1">Todos</option>'+
                '</select> registros',
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "emptyTable": "No hay datos",
            "zeroRecords": "No hay coincidencias",
            "infoEmpty": "",
            "infoFiltered":""
        }
    });

</script>

