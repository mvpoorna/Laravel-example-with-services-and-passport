@extends('layouts.app')

@section('content')
    <h1>HOME</h1>

    {!! Form::open(['url' => 'contact/submit']) !!}
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', '', ['placeholder' => 'Enter Name']) }}
        </div>
        <div class="form-group">
            {{ Form::label('email', 'E-Mail Address') }}
            {{ Form::text('email', '',['placeholder' => 'Enter Email']) }}
        </div>
        <div>
            {{Form::submit('Submit',['class'=> 'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}
@endsection