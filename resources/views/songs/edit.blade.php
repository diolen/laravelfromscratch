@extends('songs')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Fan club | edit song: {{ $song->title }}</div>

				<div class="panel-body">
                    {!! Form::model($song, ['route'=>['songs.update', $song->slug], 'method'=>'PATCH']) !!}
                    
                    @include('songs.form')
                    
                    {!! Form::close() !!}
                    
                    {!! delete_song(['songs.destroy', $song->slug]) !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection