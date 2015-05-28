@extends('songs')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Fan club</div>

				<div class="panel-body">
					@foreach($songs as $song)
                    <li><a href="/songs/{{ $song->slug }}">{{ $song->title }}</li>
                    @endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection