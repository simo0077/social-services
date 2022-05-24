<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <script src="{{ mix('js/app.js') }}" defer></script>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body class="antialiased">
<?php $success = Session::get('success'); ?>
<!-- Navigation Bar -->
<div id="app">

    <div>
        <Nav-bar :selected="'services'"/>
    </div>
    <br>


    <!-- Form Content -->
    <br>
    <div class="container">
        @if($success==true)
            <div class="alert alert-success" role="alert">
                <strong>Votre demande a été créée avec success est sera traitée dans le plus bref délai</strong>
            </div>
        @endif
        <div class="row">
            <div class="col-4 offset-1">
                <br><br>
                <h1><b>Service de <span style="color:#E05C5C">protection sociale</span></b></h1>
            </div>

        </div>
        <br>
        <div class="p-5" style="background: #FFF5F5">
            <h2 class="sub-title text-center fw-bold " style="color: #E05C5C">Description du service</h2>
            <p class="fw-bold" style="color: #848484">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo
                consequat.</p>
        </div>
        <br>
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                <strong>{{$error}}</strong>
            </div>
        @endforeach


        <form id="myform" enctype="multipart/form-data" action="social-protection/create" method="post">
            @csrf
            <social-protection-form>
            </social-protection-form>

        </form>
    </div>


</div>
</body>
<style lang="scss">


</style>
</html>

