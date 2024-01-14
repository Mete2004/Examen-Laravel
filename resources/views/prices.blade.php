{{-- deze code zorgt er voor dat de html code uit layout.blade.php word toegepast/toegevoegd aan deze bestand. --}}
@extends('layouts.layout')


@section('content')
<div class="Prijslijst"> 
    <br>

   <h1>Prijslijst</h1>
   <div class="price-list">

    <div class="service1">
        <span class="service-name">Heren </span>
        <span class="service-price"></span>
    </div>

       <div class="service">
           <span class="service-name">Knippen</span>
           <span class="service-price">€24,99</span>
       </div>

       <div class="service">
        <span class="service-name">Knippen + Baard</span>
        <span class="service-price">€39,99</span>
    </div> 

    <div class="service">
        <span class="service-name">Baard</span>
        <span class="service-price">€14,99</span>
    </div> 

    <div class="service">
        <span class="service-name">Wassen</span>
        <span class="service-price">€9,99</span>
    </div>

    <div class="service">
        <span class="service-name">Föhnen</span>
        <span class="service-price">€4,99</span>
    </div>

    <div class="service">
        <span class="service-name">Kleurbehandeling</span>
        <span class="service-price">€59,99</span>
    </div>

    <div class="service1">
        <span class="service-name">Dames</span>
        <span class="service-price"></span>
    </div>

       <div class="service">
           <span class="service-name">knippen</span>
           <span class="service-price">€49,99</span>
       </div>

       <div class="service">
        <span class="service-name">Wassen</span>
        <span class="service-price">€9,99</span>
    </div>

    <div class="service">
        <span class="service-name">Föhnen</span>
        <span class="service-price">€4,99</span>
    </div>

       <div class="service">
           <span class="service-name">Haarstyling</span>
           <span class="service-price">€19,99</span>
       </div>
       <div class="service">
           <span class="service-name">Kleurbehandeling</span>
           <span class="service-price">€89,99</span>
       </div>

       <div class="service1">
        <span class="service-name">Kinderen knippen</span>
        <span class="service-price"></span>
    </div>

    <div class="service">
        <span class="service-name">Knippen</span>
        <span class="service-price">€14,99</span>
    </div>

    <div class="service">
        <span class="service-name">Wassen</span>
        <span class="service-price">€4,99</span>
    </div>

    <div class="service">
        <span class="service-name">Haarstyling</span>
        <span class="service-price">€9,99</span>
    </div>

    <div class="service">
        <span class="service-name">Kleurbehandeling</span>
        <span class="service-price">€29,99</span>
    </div>

     </div>
   </div>
@endsection