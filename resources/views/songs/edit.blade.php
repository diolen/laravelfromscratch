@extends('songs')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Fan club | edit song: {{ $song->title }}</div>

				<div class="panel-body">
                    {!! Form::model($song, ['url'=>'songs/' . $song->slug, 'method'=>'PATCH']) !!}
                    
                    <div class="form-group">
                        {!! Form::text('title', null, ['class'=>'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::textarea('lyrics', null, ['class'=>'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::submit('Update Song', null, ['class'=>'btn btn-primary']) !!}
                    </div>
                    
                    {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection