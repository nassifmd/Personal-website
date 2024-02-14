<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nassif Dauda: Fullstack developer</title>
    <link rel="stylesheet" href="{{ asset('styles.css')}}">
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=DynaPuff')}}">
</head>

<body>

@yield('content')

</body>

         <footer class="footer">
            <div class="footer-container">
                <div class="footer-top">
                    <h4>Say Hello</h4>
                    <ul>
                        <li><a href="mailto:hello@nassiff.dev">hello@nassifinnovations.com</a></li>
                        <li><a href="https://api.whatsapp.com/send?phone=233233302007" target="_blank">Chat on WhatsApp</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-mid">
                <ul>
                    <li><a href="{{ url('work')}}">My Work</a></li>
                    <li><a href="{{ url('rack')}}">My Rack</a></li>
                    <li><a href="{{ url('resume')}}">My Resume</a></li>
                </ul>
                </div>
            </div>
            <div class="hr"></div>
            <div class="signature">&#169; Nassif Dauda</div>
            <div class="footer-buttom">
                <ul>
                    <li><a href="https://twitter.com/nassifdev">TW</a></li>
                    <li><a href="https://github.com/nassifdauda">GH</a></li>
                    <li><a href="https://www.linkedin.com/in/nassif-dauda-80ab00133">LN</a></li>
                    <li><a href="https://www.youtube.com/@Techsolutions0">YT</a></li>
                </ul>
            </div>
        </footer>
</main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://kit.fontawesome.com/d3b6543391.js" crossorigin="anonymous"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v18.0&appId=144614331883792&autoLogAppEvents=1" nonce="MxNeirhb"></script>
    <script src="app.js"></script>
    <script>
        const stars = document.querySelectorAll('#sparkling-stars .stars polygon');

        let delay = 0;
        const delayIncrement = 0.2;

        stars.forEach((star) => {
        star.style.animationDelay = `${delay}s`;
        delay += delayIncrement;

        star.style.opacity = '1';
        });
    </script>
</body>
</html>