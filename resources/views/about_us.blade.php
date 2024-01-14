{{-- deze code zorgt er voor dat de html code uit layout.blade.php word toegepast/toegevoegd aan deze bestand. --}}
@extends('layouts.layout')


@section('content')
    <div class="Kaart"> 
        <iframe
        width="700"
        height="500"
        frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24549.810184110735!2d4.895168694541603!3d52.37021574717442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c2f807919f%3A0x6f2449c8eb6898bf!2sReguliersgracht%2095%2C%201017%20LN%20Amsterdam!5e0!3m2!1sen!2sus!4v1633926641965!5m2!1sen!2sus"
        allowfullscreen>
        </iframe>
    </div>

    <div class="container1">

     <div class="opening-hours-container">
       <h2 class="h2openingstijden">Openingstijden</h2>
       <ul>
           <li><span class="day">Maandag:</span> <span class="highlight">9:00 - 18:00</span></li>
           <li><span class="day">Dinsdag:</span> <span class="highlight">9:00 - 18:00</span></li>
           <li><span class="day">Woensdag:</span> <span class="highlight">9:00 - 18:00</span></li>
           <li><span class="day">Donderdag:</span> <span class="highlight">9:00 - 18:00</span></li>
           <li><span class="day">Vrijdag:</span> <span class="highlight">9:00 - 18:00</span></li>
           <li><span class="day">Zaterdag:</span> <span class="highlight">10:00 - 15:00</span></li>
           <li><span class="day">Zondag:</span> <span class="highlight1">Gesloten</span></li>
       </ul>
      </div>

    <div class="opening-hours-container">
       <h2 class="h2contact">Contact</h2>

       <h3>Bel ons</h3>

       <ul>
           <li><span class="day"></span> <span class="highlight">020 - 331 85 46</span></li>
       </ul>

       <h3>E-mail</h3>

       <ul>
           <li><span class="day"></span> <span class="highlight">info@styles.nl</span></li>
       </ul>

       <h3>Adres</h3>

       <ul>
           <li><span class="day"></span> <span class="highlight">Reguliersgracht 95, 1017 LN Amsterdam, Netherlands</span></li>
       </ul>
    </div>
    

   </div>
    
@endsection