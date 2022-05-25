@extends('layouts.layout')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-4 offset-1">
            <br><br>
            <h1><b>Service de <span style="color:#E05C5C">protection sociale</span></b></h1>
            {{$demandes}}
        </div>


    </div>
</div>
@endsection
