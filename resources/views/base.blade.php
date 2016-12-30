<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ url('/') }}/css/app.css"  >
    <title>Egons Kalnins</title>
</head>
<body>
{{-- NAVIGACIJA --}}
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('/')}}">Aktualitātes</a></li>
                <li><a href="{{url('/patversme')}}">Patversme</a></li>
                <li><a href="{{url('/dzivnieki')}}">Dzīvnieki</a></li>
                <li><a href="{{url('/dzivniekiunetika')}}">Dzivnieki un etika</a></li>
                <li><a href="{{url('/mirklisatputai')}}">Mirklis atpūtai</a></li>
                <li><a href="{{url('/projekti')}}">Projekti</a></li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Citi
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Merchandise</a></li>
                        <li><a href="#">Extras</a></li>
                        <li><a href="#">Media</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
            </ul>
        </div>
    </div>
</nav>




@yield('content')
</body>
@extends('footer')
