@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
<div class="container">

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card card-widget widget-user">
                    <div class="widget-user-header text-white" style="background: url('gambar/bg.jpg') center center; background-size:cover;">
                        <h3 class="widget-user-username text-center">RPL Book Store</h3>
                        <br>
                        <h5 class="widget-user-desc text-center">SMK Wikrama Bogor</h5>
                    </div>
                    <div class="card-footer">
                        <center><img src="gambar/logorpl.png" width="90%"></center>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card card-widget widget-user">
                    <div class="widget-user-header text-white" style="background: url('gambar/bg.jpg') center center; background-size:cover;">
                        <h3 class="widget-user-username text-center">Fahsa Aula Nasaul Husna</h3>
                        <h5 class="widget-user-desc text-center">SMK Wikrama Bogor</h5>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle" src="gambar/avatar_linda.png">
                    </div>
                    <div class="card-footer">
                        <center><img src="gambar/fahsa.jpeg" width="90%"></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop