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

                    <a href="oauth/facebook" class="btn btn-lg btn-primary btn-block">Log in with Facebook</a>

                    <a href="oauth/google" class="btn btn-lg btn-danger btn-block">Log in with Google</a>

                </div>
			</div>
		</div>
	</div>
</div>
@endsection
