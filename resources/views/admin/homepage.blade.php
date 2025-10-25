@extends('layouts.main')

@section('content')
<div class="container-xxl text-center">
    <div class="row">
        <div class="col">
            <h1 class="italianno-regular">Homepage Admin</h1>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col col-lg-4"></div>
        <div class="col col-md-auto text-start">
            <h2>Profilo Admin Loggato:</h2>
            <h3>ID: <i>{{ auth()->user()->idu }}</i></h3>
            <h3>Nome: <i>{{ auth()->user()->name }}</i></h3>
            <h3>Email: <i>{{ auth()->user()->email }}</i></h3>
        </div>
        <div class="col col-lg-4"></div>
    </div>

    <div class="row">
        <div class="col col-lg-4"></div>

        <div class="col col-md-auto text-center">
            <a class="btn btn-primary" href="{{ url('/admin/database')}}" role="button">Database</a>
            <a class="btn btn-primary" href="{{ url('/admin/edit-users')}}" role="button">Gestione Utenti</a>
            <a class="btn btn-primary" href="{{ url('/admin/loans-list')}}" role="button">Elenco Prestiti</a>
            <a class="btn btn-primary" href="{{ url('/admin/expired-loans')}}" role="button">Prestiti Scaduti</a>
            <a class="btn btn-primary" href="{{ url('/admin/populate')}}" role="button">Popola Database</a>
        </div>

        <div class="col col-lg-4"></div>
    </div>
</div>
@endsection