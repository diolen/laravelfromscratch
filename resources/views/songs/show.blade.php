@extends('songs')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Fan club</div>

				<div class="panel-body">
					{{ $song->title }}
                    
                    @if($song->lyrics)
                        <article>
                            {!! nl2br($song->lyrics) !!}
                        </article>
                    @endif
                    
                    {!! link_to_route('songs.index', 'Go back home') !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection