<?php
/**
 * Created by PhpStorm.
 * User: deye2
 * Date: 2/13/2016
 * Time: 1:34 PM
 */
?>
@extends('layout')
@section('content')
<div class="container">
    <div class="col-md-5 col-md-offset-3">
        @if(Session::has('pesan'))
            {{Session::get('pesan')}}
        @endif
        <h2>File Upload</h2>
        <hr >

        @if(Session::has('success'))
            <div class="alert alert-success">
                <h2>{{Session::get('success')}}</h2>
            </div>
            @endif
        {{ Form::open(array('action' => 'ValidateController@upload','files'=>TRUE)) }}
        {{ Form::label('upload','Upload File') }}
        {{ Form::file('image','',array('class'=>'form-control')) }}
        <p class="has-error">{{$errors->first('image')}}</p>
        @if(Session::has('error'))
            <p class="has-error">{{ Session::get('error') }}</p>
            @endif
        {{ Form::submit('Upload', array('class'=>'btn btn-primary')) }}
        {{ Form::close() }}
    </div>
</div>
@endsection
