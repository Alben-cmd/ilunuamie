<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container nav-space">

        
            

            <!-- lOGO TEXT HERE -->
            <a href="{{ route('home') }}" class="navbar-brand"><img
                    src="{{ asset('assets/images/sabi_icon.png') }}" alt="sabimoni" srcset=""></a>

      
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
        </button>
        
        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <li><a href="#top" class="forHome smoothScroll nav-res-1a">Home</a></li>
                <li><a href="#about" class="forAbout smoothScroll nav-res-1a">About Us</a></li>
                <li><a href="#courses" class="forCourse smoothScroll nav-res-1a">Courses</a></li>
                <li><a href="/index.php/sabi_news" class="forNews smoothScroll nav-res-1a">News</a></li>
                <li><a href="#testimonial" class="forTest smoothScroll nav-res-1a">Testimonials</a></li>
                <li><a href="#contact" class="forContact smoothScroll nav-res-1a">Contact</a></li>
                <li><a href="/index.php/faqs" class="forFaq smoothScroll">FAQS</a></li>
                
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://sabimoni.org.ng/start/login/signup.php" class="nav-res-2" target="_blank"><i
                            class="fa fa-sign-in "></i>Register</a></li>
                <li><a href="https://sabimoni.org.ng/start/login/index.php" class="nav-res-2" target="_blank"><i
                            class="fa fa-user-circle " aria-hidden="true"></i>Login</a></li>
            </ul>
        </div>

    </div>
</section>
