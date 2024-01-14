{{-- deze code zorgt er voor dat de html code uit layout.blade.php word toegepast/toegevoegd aan deze bestand. --}}
@extends('layouts.layout')


@section('content')
    <h1>KAPSALON AMSTERDAM</h1>
    <p>Welkom bij Kapsalon Amsterdam</p>
    <span>
        <a href="Afspraak.html"><button class="Afspraak">Afspraak</button></a>
        <a href="About us.html"><button class="Contact">Contact</button></a>
    </span> 
@endsection