@extends('layouts.main')

@section('content')
    <h4>Create your short url</h4>
    {!! Form::open(['route' => 'short', 'class' => 'short-form']) !!}
    <div class="d-flex align-items-end">
        <div class="flex-grow-1">
            <div>
                {!! Form::label('url', 'Your long url') !!}
            </div>
            <div>
                {!! Form::text('url', null, ['class' => 'form-control short-url']) !!}
            </div>
        </div>
        <div>
            {!! Form::submit('Short link', ['class' => 'btn short-btn']) !!}
        </div>
    </div>
    {!! Form::close() !!}
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/shortform.css') }}">
@endsection
