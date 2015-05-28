@extends('songs')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Fan club | create new song</div>

				<div class="panel-body">
                    {!! Form::open(['route'=>'songs.store']) !!}
                    
                    @include('songs.form')
                    
                    {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection