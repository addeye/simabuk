<?php
/**
 * Created by PhpStorm.
 * User: deye2
 * Date: 2/13/2016
 * Time: 10:40 AM
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Layout Blade</title>
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />

    {{ HTML::style('css/bootstrap.min.css') }}
</head>
<body>
@yield('content')
{{ HTML::script('js/jquery.min.js') }}
{{ HTML::script('js/bootstrap.js') }}
</body>
</html>