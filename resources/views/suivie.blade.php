<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <script src="{{ mix('js/app.js') }}" defer></script>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

</head>
<body class="antialiased">
<div id="app">
    <div>
        <nav-bar :selected="'suivie'"/>
    </div>
    <!-- Navigation Bar -->


    <div class="container">
        <!-- Main Page Content -->
        <div>
            <br>
            <div class="row mt-5">
                <div class="col-4 ms-5 mt-5">

                    <h1><b>Faire le suivie de vos <span style="color:#E05C5C ">demandes</span> en toutes simplicité </b>
                    </h1>
                </div>
                <div class="col-3 ms-auto">
                    <img src="/pictures/checklist.png" width="90%" style="border-radius: 25px"/>
                </div>
            </div>

        </div>
        <br>
        <br><br>
        <suivie/>


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
<script>

</script>
</html>

