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

                    <div class="jumbotron">
                        <div class="col-sm-12">
                            <center>
                                <h2 class="text-center">
                                    Transacción {{ $pay->responseReasonText }}
                                </h2>

                                <p>
                                    ID De la transacción: {{ $pay->transactionID }}
                                </p>

                                <a href="{{ route('transacciones.index') }}" class="btn btn-success">
                                    Ver Historial
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
