<?php
/**
 * Created by PhpStorm.
 * User: deye2
 * Date: 2/13/2016
 * Time: 7:45 PM
 */
?>
@extends('layout')
@section('content')
    <div class="container">
        <h2>Laravel Authentication</h2>
        <?php $messages=$errors->all('<p style="color: red">:message</p>') ?>
        <?php foreach($messages as $msg):?>
            <?= $msg ?>
        <?php  endforeach; ?>

        {{ Form::open(array('action'=>'RegistrationController@store')) }}

        {{ Form::label('email','Email') }}
        {{ Form::text('email','',array('Input::old(email)','class'=>'form-control')) }}

        {{ Form::label('password','Password') }}
        {{ Form::password('password',array('class'=>'form-control')) }}

        {{ Form::label('password_confirm','Retype-Password') }}
        {{ Form::password('password_confirm',array('class'=>'form-control')) }}

        {{ Form::label('name','Name') }}
        {{ Form::text('name','',array('Input::old(name)','class'=>'form-control')) }}

        {{ Form::label('admin','Admin') }}
        {{ Form::checkbox('admin','true','',array('Input::old(admin)')) }}
        <br>
        {{ Form::submit('Register!',array('class'=>'btn btn-primary')) }}
        {{ Form::close() }}
    </div>
@endsection
