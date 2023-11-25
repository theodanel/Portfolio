<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=Nunito:400,700&display=swap" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    
</head>
<header>
<body >
    <div class="background2 bg-transparent text-white py-8 shadow-xl">
        <div class="max-w-5xl mx-auto px-3">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl">
                    <a href="/">THEO DANEL</a>
                </h1>
                <nav class=" space-x-3">
                    <a class="hover:underline underline-offset-8" href="/">Qui suis-je ?</a>
                    <a class="hover:underline underline-offset-8" href="/categories">Projets</a>
                    <a class="hover:underline underline-offset-8" href="/films">Compétences</a>
                    <a class="hover:underline underline-offset-8" href="/fiorella">Formations</a>
                    <a class="hover:underline underline-offset-8" href="/fiorella/emma?color=bleu">Me contacter</a>

                </nav>
                
            </div>
            
        </div>
        
<!-- Background animtion-->
<div class="background">
   <div class="cube"></div>
   <div class="cube"></div>
   <div class="cube"></div>
   <div class="cube"></div>
  <div class="cube"></div>
  <h1  class="text-6xl h-full text-white flex items-center justify-center"> 
  <span class="typewrite font-bold" data-period="1500" data-type='[ "Salut !<br> Je suis Théo.", "Je suis en formation DWWM.", "Je recherche un stage", "Voici mon portfolio !    "]'>
  
  </h1>
</div>

   
    </header>
      
    </div>
    <div class=" mx-auto">
        @yield('content')
    </div>

    <footer class="bg-stone-900 text-gray-300 py-8">
        <div class="max-w-5xl mx-auto px-3">
            <p class="text-center text-xl">Théo DANEL &copy; | Tous droits réservés.</p>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>

