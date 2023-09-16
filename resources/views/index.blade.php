@extends('layouts.appmain')
@include('inc.navbar')

@section('content')
<body>
    <main class="home">
         <!-- HERO -->
        <div class="hero">
            <div class="hero-txt">
                <h1>Full stack <br> Developer.</h1>
                <p>I present clients with the best user-friendly software products.</p>
            </div>
            <figure class="img-area">
                <span class="header-image"></span>
            </figure>
        </div>
        <!-- /HERO -->
        <div class="border"></div>
        <!-- ABOUT -->
        <section class="about">
            
            <div class="left">
                <svg id="padding-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="50" height="50"><!--! Font Awesome Free 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) -->
                    <path d="M384 96V320H64L64 96H384zM64 32C28.7 32 0 60.7 0 96V320c0 35.3 28.7 64 64 64H181.3l-10.7 32H96c-17.7 0-32 14.3-32 32s14.3 32 32 32H352c17.7 0 32-14.3 32-32s-14.3-32-32-32H277.3l-10.7-32H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm464 0c-26.5 0-48 21.5-48 48V432c0 26.5 21.5 48 48 48h64c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48H528zm16 64h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H544c-8.8 0-16-7.2-16-16s7.2-16 16-16zm-16 80c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H544c-8.8 0-16-7.2-16-16zm32 224c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                </svg>
                <h2>Design</h2>
                <p>Desgins are admirable when the right tools and attention to details are observed. I present both of these in my quest to satisfy my clients (~_^). I commit to the best User experience while staying fashionable.</p>
            </div>
           
            <div class="right">
                <svg id="padding-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50" height="50"><!--! Font Awesome Free 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) -->
                    <path d="M469.3 19.3l23.4 23.4c25 25 25 65.5 0 90.5l-56.4 56.4L322.3 75.7l56.4-56.4c25-25 65.5-25 90.5 0zM44.9 353.2L299.7 98.3 413.7 212.3 158.8 467.1c-6.7 6.7-15.1 11.6-24.2 14.2l-104 29.7c-8.4 2.4-17.4 .1-23.6-6.1s-8.5-15.2-6.1-23.6l29.7-104c2.6-9.2 7.5-17.5 14.2-24.2zM249.4 103.4L103.4 249.4 16 161.9c-18.7-18.7-18.7-49.1 0-67.9L94.1 16c18.7-18.7 49.1-18.7 67.9 0l19.8 19.8c-.3 .3-.7 .6-1 .9l-64 64c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l64-64c.3-.3 .6-.7 .9-1l45.1 45.1zM408.6 262.6l45.1 45.1c-.3 .3-.7 .6-1 .9l-64 64c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l64-64c.3-.3 .6-.7 .9-1L496 350.1c18.7 18.7 18.7 49.1 0 67.9L417.9 496c-18.7 18.7-49.1 18.7-67.9 0l-87.4-87.4L408.6 262.6z"/>
                </svg>
                <h2>Engineering</h2>
                <p>Using HTML, CSS, JavaScript, PHP, and SQL makes nothing impossible to achieve. I am equipped with the right tools to develop fast, resilient solutions, the best performance for scalable projects. Best at PHP, Laravel Framework, JavaScript, React and Vue.</p>
            </div>
        </section>
        <!-- /ABOUT -->

        <!-- EXPERIENCE -->
        <section class="experience">
                <div class="side left">
                    <h2>In the <span class="next-line">last 4 years,</span></h2>
                    <p style="text-align: justify;">I have passionately pursued a career as a self-taught Software Developer, making valuable contributions to various companies worldwide. My focus has been on building secure, efficient, and user-friendly products to tackle complex problems. <br> Currently, I serve as a Senior Developer at VartAfrica, where I develop custom software products and provide insightful recommendations to solve client issues. Additionally, I work as a Technology Consultant and website developer for organizations such as Action for Social and Economic Transformation (ACSETUGANDA), Lango Indigenous Hip-Hop, and Organization for Community Advancement and Transformation (OCATUGANDA). Moreover, I co-founded AgricConnect Limited, leading the development of innovative technologies to combat climate change. <br> Prior to my software development career, I gained valuable experience in the Health and Agriculture sectors, enhancing my technical expertise and enabling me to guide clients effectively during product development. I am thrilled to contribute to Human Intervention Projects and business achievements. My journey has been one of determination, late-night coding sessions, and overcoming challenges. By crafting elegant solutions, providing valuable insights, and pushing the boundaries of innovation, I aspire to make a lasting impact on the digital landscape, one line of code at a time.
                    </p>
                </div>
                <div class="side right">
                    <img src="./assets/svg/5751386.jpg" alt="the-journey">
                </div> 
        </section>
        <!-- /EXPERIENCE -->

        <!-- MY WORK -->
        <section class="works">
            <div class="section-works-inner1">
              <h2>I build &amp; <br> design stuff</h2>
              <p>Web apps and experimentals.</p>
              <button><a class="btnColor" href="{{ url('work')}}">See my work</a></button>
            </div>
          
            <div class="divider"></div>
          
            <div class="section-works-inner2">
              <h2>I write,<br> sometimes</h2>
              <p>About new technologies and life.</p>
              <button><a class="btnColor" href="{{ url('rack')}}">Read my article</a></button>
            </div>
          </section>
          
        <!-- MY WORK -->

        <!-- MESSAGE -->
        <section class="message">
            <div class="section-message-inner1">
                <h2>Send me a message!</h2>
                <p>Got a question or proposal, or just want to say hello? Go ahead.</p>
            </div>
            <div class="section-message-form">
                <form action="https://formsubmit.co/hello@nassiff.dev" method="POST">
                    <div class="field">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" placeholder="Enter your name">
                    </div>
                    <div class="email">
                        <label for="email">Email</label>
                        <input type="text" name="email" placeholder="Enter your email">
                    </div>
                    <div class="message-box">
                        <label for="message">Your Message</label>
                        <textarea name="message" placeholder="Hi, I need a design for my website. How soon can you hop on to discuss this?"></textarea>
                    </div>
                    <button type="submit">Shoot</button>
                </form>
            </div>
        </section>
         <!-- /MESSAGE -->

@endsection