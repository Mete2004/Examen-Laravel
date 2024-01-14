<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="main">
        <div class="header">
            <ul>
                <a href="/"><button>Home</button></a>
                <li><a href="/service">Service</a></li>
                <li><a href="/prices">Prices</a></li>
                <li><a href="/about_us">About us</a></li>
                <li><a href="/registreren">Registreren</a></li>
                <li><a href="/login">Inloggen</a></li>
               </ul>

           <input type="text" placeholder="search">
       </div>
       <div class="body-section">
        {{-- deze code haalt de section (content) naar binnen --}}
        @yield('content')
                
       </div>
    </div>
</body>
</html>