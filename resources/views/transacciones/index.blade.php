@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Transacciones</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                <table class="table table-bordered" id="transacciones-table" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>ID Transacción</th>
                      <th>Estado</th>
                      <th>Fecha</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function(e){
        transacciones = $('#transacciones-table').DataTable( {
            "searching": true,
            "processing": true,
            "order": false,
            "ordering": false,
            "serverSide": true,
            "ajax": {
                "url": '/transacciones/listado',
            },
            "destroy":true,
            "language": {
                processing:     "Procesando",
                search:         "Buscar:",
                lengthMenu:    "Mostrar _MENU_ Elementos",
                info:           "Mostrando registros del _START_ al _END_ de _TOTAL_ elementos",
                infoEmpty:      "Mostrando registros del 0 al 0 de un total de 0 registros",
                infoFiltered:   "(Filtrado de _MAX_ registros en total)",
                infoPostFix:    "",
                loadingRecords: "Carga en curso...",
                zeroRecords:    "Ningún dato para mostrar",
                emptyTable:     "No hay datos disponibles",
                paginate: {
                    first:      "Primero",
                    previous:   "Anterior",
                    next:       "Siguiente",
                    last:       "Último"
                }
            },
            "columnDefs": [ {
                "targets"  : 'no-sort',
                "orderable": false,
            }],

            "dom":"Bfrtip",

            "buttons":[
            "reset","reload"
            ],

            "createdRow": function( row, data, dataIndex){

            }
        });

        $('#transacciones-table_length').addClass('display-none')
    })
    </script>
@endpush
