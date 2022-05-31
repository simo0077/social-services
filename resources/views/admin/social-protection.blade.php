@extends('layouts.layout')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-4 offset-1">
                <br><br>
                <h1><b>Service de <span style="color:#E05C5C">protection sociale</span></b></h1>
            </div>
            <hr>
            <div>
                //Espace de barre de recherche et filtres

            </div>

            <br>
            <hr>
            <br>
            <social-protection-table :demandes="{{json_encode($demandes)}}"/>

        </div>
    </div>

@endsection
