@extends('layouts.layout')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-4 mb-5">
                <br><br>
                <h1><b><span style="color:#E05C5C">Familial protection</span> service</b></h1>
            </div>
            <hr>

            <social-protection-table :demandes_sent="{{json_encode($demandes)}}"/>

        </div>
    </div>

@endsection
