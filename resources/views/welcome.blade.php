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
<div id="app">


    <div>
        <!-- Navigation Bar -->
        <nav-bar :selected="'accueil'"/>
    </div>
    <div class="container">
        <!-- Main Page Content -->
        <div>
            <br>
            <div class="row">
                <div class="col-4 offset-1">
                    <br><br>
                    <h1><b>Bienvenue sur le portail de demande des <span
                                style="color:#E05C5C">services sociaux</span></b></h1>
                </div>
                <div class="col-4 ms-auto">
                    <img src="/pictures/ramed.png" width="100%" style=" border-radius: 20px"/>
                </div>
            </div>

        </div>
        <br>
        <br><br>


        <div class="p-5" style="background: #FFF5F5">
            <h2 class="sub-title text-center fw-bold " style="color: #E05C5C">A propos du portail</h2>
            <br>
            <p class="fw-bold" style="color: #848484">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>


        <services/>

        <!--
        <div class="statistics">
            <h2 class="sub-title text-center">Statitiques</h2>

            <div class="stat-content">

            </div>
        </div>-->
    </div>
</div>
</body>
<style lang="scss">


</style>
</html>

