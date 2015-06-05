@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
            <h1>Hi guest.</h1>
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">

                    @include('errors.list')

                    <a href="oauth/facebook" class="btn btn-block btn-social btn-lg btn-facebook"><i class="fa fa-facebook"></i>Log in with Facebook</a>
                    <a href="oauth/google" class="btn btn-block btn-social btn-lg btn-google"><i class="fa fa-google"></i>Log in with Google</a>
                </div>
			</div>
		</div>
	</div>
</div>
@endsection
