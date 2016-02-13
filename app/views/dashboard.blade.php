<?php
/**
 * Created by PhpStorm.
 * User: deye2
 * Date: 2/13/2016
 * Time: 8:20 PM
 */
?>
@extends('layout')
@section('content')
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">AuthApp</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="tambah"><i class="glyphicon glyphicon-book"></i> Tambah</a></li>
                    <li><a href="logout"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>Dashboard</h1>
    </div>
@endsection
