@extends('layouts.admin')

@section('content')
    <h1>Edit User:</h1>
    {!! Form::model($user, ['method'=>'PATCh', 'action'=>['AdminUsersController@update', $user->id]]) !!}
    <div class="form-group">
        {!! Form::label ('name', 'Name:') !!}
        {!! Form::text ('name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('email', 'Email:') !!}
        {!! Form::email ('email', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('password', 'Password:') !!}
        {!! Form::password ('password', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('role_id', 'Role:') !!}
        {!! Form::select ('role_id', $roles, null,  ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('is_active', 'Status:') !!}
        {!! Form::select ('is_active', array(1=>'Active', 0=>'Not Active'), null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit ('Create user', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

    @include('includes.formError')

@stop