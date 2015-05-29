@extends('songs')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Fan club</div>

				<div class="panel-body">
					@foreach($songs as $song)
                        <li>
                            {!! link_to_route('songs.show', $song->title, [$song->slug]) !!}
<!--                            <a href="/songs/{{ $song->slug }}">{{ $song->title }}</a>-->
                        </li>
                    @endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection