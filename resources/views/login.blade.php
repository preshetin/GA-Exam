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

                    <a href="oauth/github" class="btn btn-lg btn-primary btn-block">Log in with Github</a>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
