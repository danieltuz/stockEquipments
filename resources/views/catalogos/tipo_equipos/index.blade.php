<!--begin::Container-->
<div class="container">
    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
                    <i class="icon-xl fas fa-magic  text-primary"></i>
                </span>
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">{{ $nivel3 }}</h5>
                        <!--end::Page Title-->

                    </div>
                    <!--end::Page Heading-->
                </div>
            </div>
            <div class="card-toolbar">
                <!--begin::Button-->
                <a href="javascript:;" class="btn btn-primary font-weight-bolder" onclick="cargarformulario(50.2,0,2);">
                    <i class="la la-plus"></i>Nuevo Registro</a>
                <!--end::Button-->
            </div>
        </div>

        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-hover" id="kt_datatable" style="margin-top: 13px !important">
                <thead>
                <tr>
                    <td style="width: 5px" class="text-center"></td>
                    <td style="width: 1000px" class="text-left">
                        <b>Equipo</b>
                        <input type="text" class="form-control datatable-input" data-col-index="1" id="txt_equipo" />
                    </td>
                    <td style="width: 1000px" class="text-left">
                        <b>Tipo de Equipo</b>
                        <input type="text" class="form-control datatable-input" data-col-index="2" id="txt_tipo"/>
                    </td>
                    <td style="width: 200px" class="text-center">
                        <b>Acciones</b>
                        <button type="button" class="btn btn-light-primary font-weight-bolder" id="kt_reset">
                         <span>
                            <i class="la la-close"></i>
                            <span>
                                Borrar
                            </span>
                        </span>
                        </button>
                    </td>
                </tr>
                </thead>
            </table>
            <!--end: Datatable-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Container-->

<script>

    var KTDatatablesSearchOptionsAdvancedSearch = function() {

        var initTable1 = function() {
            // begin first table
            var table = $('#kt_datatable').DataTable({
                responsive: true,
                // Pagination settings
                dom: `<'row'<'col-sm-12'tr>>
			<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,
                // read more: https://datatables.net/examples/basic_init/dom.html

                lengthMenu: [5, 10, 25, 50],

                pageLength: 10,

                language: {
                    info: "_TOTAL_ registros",
                    paginate: {
                        next: "Siguiente",
                        previous: "Anterior",
                    },
                    lengthMenu: 'Mostrar &nbsp;&nbsp;<select>'+
                        '<option value="10">10</option>'+
                        '<option value="25">25</option>'+
                        '<option value="30">30</option>'+
                        '<option value="50">50</option>'+
                        '<option value="-1">Todos</option>'+
                        '</select>&nbsp;&nbsp; registros',
                    loadingRecords: "Cargando...",
                    processing: "Procesando...",
                    emptyTable: "No hay datos",
                    zeroRecords: "No hay coincidencias",
                    infoEmpty: "",
                    infoFiltered:""

                },

                searchDelay: 500,
                processing: true,
                serverSide: true,
                ajax: {
                    url: '/catalogos/tipo_equipos/getTipoEquipos',
                    type: 'GET',
                },
                columnDefs:[{
                    targets: "_all",
                    sortable: false
                }],
                columns: [
                    {data: 'id'},
                    {data: 'nombre', className: "text-left"},
                    {data: 'tipo' , className: "text-left"},
                    {data: 'action', orderable:false, searchable: false,className: "text-center"},
                ],

            });

            $('#kt_reset').on('click', function(e) {
                e.preventDefault();
                $('.datatable-input').each(function() {
                    $(this).val('');
                    table.column($(this).data('col-index')).search('', false, false);
                });
                table.table().draw();
            });


            $("#txt_equipo").change(function(e) {
                e.preventDefault();

                var params = {};
                $('.datatable-input').each(function() {
                    var i = $(this).data('col-index');
                    if (params[i]) {
                        params[i] += '|' + $(this).val();
                    }
                    else {
                        params[i] = $(this).val();
                    }
                });
                $.each(params, function(i, val) {
                    debugger;
                    // apply search params to datatable
                    table.column(i).search(val ? val : '', false, false);
                });
                table.table().draw();

            });

            $("#txt_tipo").change(function(e) {
                e.preventDefault();

                var params = {};
                $('.datatable-input').each(function() {
                    var i = $(this).data('col-index');
                    if (params[i]) {
                        params[i] += '|' + $(this).val();
                    }
                    else {
                        params[i] = $(this).val();
                    }
                });
                $.each(params, function(i, val) {
                    debugger;
                    // apply search params to datatable
                    table.column(i).search(val ? val : '', false, false);
                });
                table.table().draw();

            });

        };

        return {

            //main function to initiate the module
            init: function() {
                initTable1();
            },

        };

    }();

    jQuery(document).ready(function() {
        KTDatatablesSearchOptionsAdvancedSearch.init();
    });

</script>

