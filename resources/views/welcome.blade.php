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
                    <h1><b>Welcome to the <span
                                style="color:#E05C5C">social services</span> platform</b></h1>
                </div>
                <div class="col-4 ms-auto">
                    <img src="/pictures/ramed.png" width="100%" style=" border-radius: 20px"/>
                </div>
            </div>

        </div>
        <br>
        <br><br>


        <div class="p-5" style="background: #FFF5F5">
            <h2 class="sub-title text-center fw-bold " style="color: #E05C5C">About the platform</h2>
            <br>
            <p class="fw-bold" style="color: #848484">The platform you are in right now is a platform developed by the
                social services department
                in of the interior ministry of Morocco. In this platform you can make a request of a specific service,
                like the social protection one.
                After you fulfill the requested informations, you can send your request that will be treated after a
                while. You will receive a response including the state of your request in the platform.
            </p>
        </div>

        <div>
            <services/>

        </div>
        <br>
        <div>
            <statistics :all_requests="{{$all_requests}}" :rejected_requests="{{$rejected_requests}}" :accepted_requests="{{$accepted_requests}}"/>

        </div>



    </div>
</div>


<footer class="mt-5 bg-light text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright:
        <a class="text-dark" href="https://aseds.com/">Aseds.com</a>
    </div>
    <!-- Copyright -->
</footer>
</body>

<style lang="scss">


</style>

</html>

