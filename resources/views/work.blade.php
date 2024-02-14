@extends('layouts.appmain')
@include('inc.navbar')

@section('content')

         <section class="portfolio">
            <h1 class="bighead"><span class="dim">/</span>work.</h1>
            <p class="sub-heading">Explore projects I have worked on.</p>
            <div class="projects">
              <div class="project">
                <div class="thumbnail">
                  <a href="https://vartafrica.com"><img src="assets/Vart africa Solution Origninal with slogan.png" alt="Project 1"></a>
                </div>
                <div class="project-info">
                  {{-- <h3 class="title">Vartafrica Solutions Limited</h3> --}}
                </div>
              </div>
              <div class="project">
                <div class="thumbnail">
                  <a href="https://agricconnect.org"><img src="assets/logo.png" alt="Project 2"></a>
                </div>
                <div class="project-info">
                  {{-- <h3 class="title">AgricConnect International</h3> --}}
                </div>
              </div>
              <div class="project">
                <div class="thumbnail">
                 <a href="https://acsetuganda.org"><img src="assets/ACSET_logo.jpg" alt="Project 3"></a>
                </div>
                <div class="project-info">
                  {{-- <h3 class="title">ACSETUGANDA</h3> --}}
                </div>
              </div>
              <div class="project">
                <div class="thumbnail">
                  <a href="https://ocatuganda.org"><img src="assets/Ocat Logo.png" alt="Project 4"></a>
                </div>
                <div class="project-info">
                  {{-- <h3 class="title">OCATUGANDA</h3> --}}
                </div>
              </div>
              <div class="project">
                <div class="thumbnail">
                  <a href="https://asokwachildrenshospital.com"><img src="assets/IMG_9691.PNG" alt="Project 1"></a>
                </div>
                <div class="project-info">
                  {{-- <h3 class="title">Asokwa Children's Hospital</h3> --}}
                </div>
              </div>
              <div class="project">
                <div class="thumbnail">
                  <a href="https://langoindigenoushiphop.org"><img  src="assets/LIH.png" alt="Project 1"></a>
                </div>
                <div class="project-info">
                  {{-- <h3 class="title">Lango Indigenous Hip-Hop</h3> --}}
                </div>
              </div>
              <div class="project">
                <div class="thumbnail">
                  <a href="https://planetsaver.nassifdauda.com"><img  src="assets/LIH.png" alt="Project 1"></a>
                </div>
                <div class="project-info">
                  {{-- <h3 class="title">Planet Saver</h3> --}}
                </div>
              </div>
            </div>
          </section>
@endsection