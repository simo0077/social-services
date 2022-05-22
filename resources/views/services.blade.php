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
        <nav-bar :selected="'services'"/>
    </div>
    <!-- Navigation Bar -->


    <div class="container">
        <!-- Main Page Content -->
        <div>
            <br>
            <div class="row">
                <div class="col-4 offset-1">

                    <h1><b>Veuillez le choisir le <span style="color:#E05C5C ">service</span> que vous souhaitez </b>
                    </h1>
                </div>
                <div class="col-4 ms-auto">
                    <img src="/pictures/cards.png" width="100%"/>
                </div>
            </div>

        </div>
        <br>
        <br><br>
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

