<?php
/**
 * Created by PhpStorm.
 * User: deye2
 * Date: 2/13/2016
 * Time: 10:58 AM
 */
?>
 @extends('layout')
@section('content')
    <div class="container">
        <h2>Register</h2>
        {{Form::open(array('action' => 'BuatController@prosesInput')) }}
        {{ Form::label('firstname', 'First Name') }}
        {{ Form::text('firstname', '', array('class' => 'form-control')) }}
        {{ Form::label('lastname','Last Name') }}
        {{ Form::text('lastname','',array('class' => 'form-control')) }}
        {{ Form::label('email','Email') }}
        {{ Form::text('email','',array('class'=>'form-control')) }}
        {{ Form::label('password','Password') }}
        {{ Form::text('password','',array('class'=>'form-control')) }}
        {{ Form::label('repassword','Retype Password') }}
        {{ Form::password('repassword',array('class'=>'form-control')) }}
        <br>
        {{ Form::submit('Registrasi',array('class'=>'btn btn-primary')) }}
        {{ Form::close() }}
    </div>
@endsection