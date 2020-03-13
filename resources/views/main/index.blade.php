@extends('layouts.main', ['totalShorted' => $totalShorted])

@section('content')
    @isset($url)
        <div class="alert alert-success">
            <strong>Success!</strong> Your short link:
            <div><a href="{{ $url }}" target="_blank">{{ $url }}</a></div>
            <div>Feel free to create another short link below</div>
        </div>
    @endisset
    <div class="card text-white bg-dark" style="max-width: 80%; margin: auto">
        <div class="card-header">
            Create your short url
        </div>
        <div class="card-body">
            {!! Form::open(['route' => 'short']) !!}
            <div class="form-group">
                {!! Form::label('url', 'Your long url') !!}
                {!! Form::text('url', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Short link', ['class' => 'btn btn-primary float-right']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    {!! Form::close() !!}
@endsection
