@extends('layouts.app')

@section('content')






<section class="container-fluid bg-white mt-5" id="apropos">

        <div class="row justify-content-center mx-auto flex flex-wrap flex-col w-1/2">
            <div class="col-md-6 text-center flex flex-wrap flex-col">
                <h2 class="font-bold mb-4 text-2xl">Bienvenue sur mon portfolio en ligne !</h2>
               
                <hr class="w-14 h-1 bg-red-500 flex  m-auto mb-12 mt-4">

                <div class="flex">

                    <div class="flex-1">
                        <img src='https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortFlat&accessoriesType=Round&hairColor=BrownDark&facialHairType=BeardLight&facialHairColor=BrownDark&clotheType=BlazerSweater&eyeType=Happy&eyebrowType=Default&mouthType=Default&skinColor=Light' alt="Avatar" />
                    </div>
                    
                    <div class="flex-1">
                        <p class="mb-12">Actuellement en formation Développeur Web et Web Mobile chez M2I Formation, j'ai l'opportunité d'explorer divers langages tels que HTML, CSS, PHP, JavaScript.. Et plus encore.</p>
                        <p class="mb-12">Mon parcours m'a permis de développer des compétences solides dans la création d'interfaces web dynamiques et attrayantes.</p>
                        <p>C'est donc passionné que je vous présente mon portfolio dans l'espoir de pouvoir décrocher mon stage et de contribuer à de futurs projets stimulants.</p>
                    </div>

                </div>

                </div>
                <hr class="w-14 h-1 bg-red-500 flex  m-auto mb-12 mt-4">
 
                <div class="mt-5 flex items-center justify-center">
                <a href="{{ asset('pdf/CV.pdf') }}" download="DANEL Théo">
                    <p class="flex rounded-2xl px-5 py-3 bg-[#4961db] bg-gradient-to-r from-[#6a98ef] to-[#4961db] hover:bg-[#3244a2] text-white hover:to-transparent transition-colors duration-300x arrow-container">
                        <i class="fas fa-arrow-right mx-2 mt-1"></i> 
                            Téléchargez mon CV
                        <i class="fas fa-arrow-left mx-2 mt-1"></i> 
                    </p>
                </a>
                 
                </div>
            </div>
        </div>

        <div class="row justify-content-center justify-content-between mb-12 mt-5 mx-auto col-md-6 md:flex md:grid-cols-1 col-lg-2 ">
            <div class="col-lg-2 col-md-6 mx-auto text-center ">
                <div class="mb-12 rounded-lg shadow-md shadow-blue-500">
                <i class="fa-solid fa-magnifying-glass text-5xl text-sky-700 "></i>
                    <h3 class="mt-2 fw-light fw-1 ">Résolution de problèmes</h3>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 mx-auto text-center">
                <div class="mb-12 rounded-lg shadow-md shadow-blue-500">
                <i class="fa-solid fa-hourglass text-5xl text-sky-700"></i>
                    <h3 class="mt-2 fw-light">Patience et persévérance</h3>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 mx-auto text-center col-md-6 md:flex md:grid-cols-1 col-lg-2 ">
                <div class="mb-12 rounded-lg shadow-md shadow-blue-500">
                <i class="fa-solid fa-people-group text-5xl text-sky-700"></i>
                    <h3 class="mt-2 fw-light">Travail en collaboration et esprit d'équipe</h3>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 mx-auto text-center col-md-6 md:flex md:grid-cols-1 col-lg-2 ">
                <div class="mb-12 rounded-lg shadow-md shadow-blue-500">
                <i class="fa-solid fa-book text-5xl text-sky-700"></i>
                    <h3 class="mt-2 fw-light">Capacité d'adaptation et organisation</h3>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 mx-auto text-center col-md-6 md:flex md:grid-cols-1 col-lg-2 ">
                <div class="mb-12 rounded-lg shadow-md shadow-blue-500">
                <i class="fa-solid fa-book text-5xl text-sky-700"></i>
                    <h3 class="mt-2 fw-light">Curiosité et soif d'apprendre</h3>
                </div>
            </div>
        </div>
        <br>
    </section>

@endsection
