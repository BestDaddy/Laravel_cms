@extends('layouts.admin')

@section('content')
    <h1>Create Post:</h1>
    {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store']) !!}
    <div class="form-group">
        {!! Form::label ('title', 'Title:') !!}
        {!! Form::text ('title', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('content', 'Content:') !!}
        {!! Form::text ('content', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('category_id', 'Category:') !!}
        {!! Form::select ('category_id', [''=>'Choose role'] + $categories, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit ('Create post', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

    @include('includes.formError')

@stop