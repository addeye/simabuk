<?php
/**
 * Created by PhpStorm.
 * User: deye2
 * Date: 2/13/2016
 * Time: 9:03 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manajemen Data Buku</title>

    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
    {{ HTML::style('css/bootstrap.min.css') }}
</head>
<body>
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"> Aplikasi Manajemen Data Buku</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
            </ul>
        </div>
    </nav>
<div class="container">
    @yield('content')
</div>

{{ HTML::script('js/jquery.min.js') }}
{{ HTML::script('js/bootstrap.js') }}

</body>
</html>
