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
                  <h3 class="title">Vartafrica Solutions Limited</h3>
                  <a class="link" href="https://vartafrica.com" target="_blank">vartafrica.com</a>
                </div>
              </div>
              <div class="project">
                <div class="thumbnail">
                  <a href="https://agricconnect.org"><img src="assets/logo.png" alt="Project 2"></a>
                </div>
                <div class="project-info">
                  <h3 class="title">AgricConnect International</h3>
                  <a class="link" href="https://agricconnect.org" target="_blank">agricconnect.org</a>
                </div>
              </div>
              <div class="project">
                <div class="thumbnail">
                 <a href="https://acsetuganda.org"><img src="assets/ACSET_logo.jpg" alt="Project 3"></a>
                </div>
                <div class="project-info">
                  <h3 class="title">ACSETUGANDA</h3>
                  <a class="link" href="https://acsetuganda.org" target="_blank">acsetuganda.org</a>
                </div>
              </div>
              <div class="project">
                <div class="thumbnail">
                  <a href="https://ocatuganda.org"><img src="assets/Ocat Logo.png" alt="Project 4"></a>
                </div>
                <div class="project-info">
                  <h3 class="title">OCATUGANDA</h3>
                  <a class="link" href="https://ocatuganda.org" target="_blank">ocatuganda.org</a>
                </div>
              </div>
              <div class="project">
                <div class="thumbnail">
                  <a href="https://asokwachildrenshospital.com"><img src="assets/IMG_9691.PNG" alt="Project 1"></a>
                </div>
                <div class="project-info">
                  <h3 class="title">Asokwa Children's Hospital</h3>
                  <a class="link" href="https://asokwachildrenshospital.com" target="_blank">asokwachildrenshospital.com</a>
                </div>
              </div>
              <div class="project">
                <div class="thumbnail">
                  <a href="https://langoindigenoushiphop.org"><img  src="assets/LIH.png" alt="Project 1"></a>
                </div>
                <div class="project-info">
                  <h3 class="title">Lango Indigenous Hip-Hop</h3>
                  <a class="link" href="https://langoindigenoushiphop.org/" target="_blank">langoindigenoushiphop.orgm</a>
                </div>
              </div>
              <div class="project">
                <div class="thumbnail">
                  <a href="nojaplusventures.com"><img src="assets/noja.jpeg" alt="Project 1"></a>
                </div>
                <div class="project-info">
                  <h3 class="title">Noja plus ventures</h3>
                  <a class="link" href="nojaplusventures.com" target="_blank">Noja plus ventures</a>
                </div>
              </div>
              <div class="project">
                <div class="thumbnail">
                  <a href="ophebee.com"><img src="assets/ophebee.jpeg" alt="Project 1"></a>
                </div>
                <div class="project-info">
                  <h3 class="title">ophebee Cosmetics</h3>
                  <a class="link" href="ophebee.com" target="_blank">ophebee Cosmetics</a>
                </div>
              </div>
              <div class="project">
                <div class="thumbnail">
                  <a href="#"><img src="assets/360.jpg" alt="Project 1"></a>
                </div>
                <div class="project-info">
                  <h3 class="title">Beauty 360 Saloon</h3>
                  <a class="link" href="#" target="_blank">Beauty 360 Saloon</a>
                </div>
              </div>
            </div>
          </section>
@endsection