<nav class="navbar">
            <!-- LOGO -->
            <div class="logo">
                <a href="">
                    <a href="{{ url('index')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-letter-n" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d274f8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M7 20v-16l10 16v-16" />
                        </svg><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-letter-a" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d274f8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M7 20v-12a4 4 0 0 1 4 -4h2a4 4 0 0 1 4 4v12" />
                            <line x1="7" y1="13" x2="17" y2="13" />
                        </svg><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-letter-s" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d274f8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M17 8a4 4 0 0 0 -4 -4h-2a4 4 0 0 0 0 8h2a4 4 0 0 1 0 8h-2a4 4 0 0 1 -4 -4" />
                        </svg> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-braces" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d274f8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M7 4a2 2 0 0 0 -2 2v3a2 3 0 0 1 -2 3a2 3 0 0 1 2 3v3a2 2 0 0 0 2 2" />
                            <path d="M17 4a2 2 0 0 1 2 2v3a2 3 0 0 0 2 3a2 3 0 0 0 -2 3v3a2 2 0 0 1 -2 2" />
                        </svg>
                        </a>
                </a>
            </div>
            <!-- NAVIGATION MENU -->
            <ul class="nav-links">
              <!-- USING CHECKBOX HACK -->
              <input type="checkbox" id="checkbox_toggle" />
              <label for="checkbox_toggle" class="hamburger">&#9776;</label>
              <!-- NAVIGATION MENUS -->
              <div class="menu">
                <li><a href="{{ url('index')}}">Home</a></li>
                <li><a href="{{ url('work')}}">Work</a></li>
                <li class="services">
                  <a href="{{ url('rack')}}">Rack</a>
                </li>
                <li><a href="{{ url('resume')}}">Resume</a></li>
              </div>
            </ul>
        </nav>