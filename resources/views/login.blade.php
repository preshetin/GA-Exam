@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
            <h1>Привет, гость</h1>
			<div class="panel panel-default">
				<div class="panel-heading">Войти</div>
				<div class="panel-body">

                    @include('errors.list')

                    <a href="oauth/facebook" class="btn btn-block btn-social btn-lg btn-facebook"><i class="fa fa-facebook"></i>Войти через Facebook</a>
                    <a href="oauth/google" class="btn btn-block btn-social btn-lg btn-google"><i class="fa fa-google"></i>Войти через Google</a>
                </div>
			</div>
		</div>
	</div>
</div>
@endsection
