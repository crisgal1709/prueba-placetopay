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
                    			<?php if (isset($error)): ?>
                    			<h2 class="text-center">
                    				Ha Ocurrido un error:
                    			</h2>

                    			<p class="alert alert-danger">
                    				<?php echo $error['message']; ?>
                    			</p>

                    			<p>
                    			</p>
                    			<?php endif ?>
                    			<a href="<?php echo url('transacciones') ?>" class="btn btn-success">
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
