<!DOCTYPE html>
<html lang="en">

<head>

    <title> @yield('title', 'SabiMONI Welcome Page') </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.jpg') }}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="
    SabiMONI is a Financial Literacy Learning Platform that offers training to both individuals aspiring to be Certified
    Financial Literacy Trainers (CFLTs) and also to consumers looking to enhance their financial well-being.">
    <meta name="keywords"
        content="sabimoni, CBN Financial Learning Management System, Free Financial Literacy, Professional Trainers, Free Financial Literacy for anyone">
    <meta name="author" content="CBN, GIZ, Federal University of Technology Minna">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    @include('roots._css')
    <style>
        #backToTOP {
            position: fixed;
            bottom: 160px;
            right: 20px;
            z-index: 10000;
            background: #29ca8e;
            border-radius: 50%;
            border: none;
            color: white;
            height: 50px;
            width: 50px;
            font-size: 20px;
            transition: .5 ease-in;
            display: none;
            animation-name: backtop;
            animation-duration: 1s
        }

        #backToTOP:hover {
            background-color: green;
        }

        html {
            scroll-behavior: smooth;
        }

        .header-text {
            width: 100%;
            height: 242px;
            background-image: url('../assets/images/slider/image1.jpg');
            background-repeat: no-repeat;
            background-position: center;
            font-size: 30px;
            display: flex;
            flex-direction: column;
            align-content: center;
            justify-content: center;
            color: #ffffff;
            margin-bottom: 50px;
        }

        @keyframes backtop {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .accordion {

            /* margin: 2rem auto; */
        }

        .accordion-head {
            padding: 1rem;
            line-height: 2.25rem;
            display: flex;
            align-items: center;
            position: relative;
            justify-content: space-between;
            cursor: pointer;
        }

        .accordion-head::after {
            content: "\002B";
            font-size: 2rem;
            position: absolute;
            right: 1rem;
            transition: .5s ease-in-out;
        }

        .accordion-head.active::after {
            content: "\2212";
        }

        .accordion-item {
            background-color: white;
            color: #333;
            margin: 1rem 0 3rem;
            border-radius: 10px;
            box-shadow: 1px 2px 20px rgba(0, 0, 0, 0.1);

        }

        .accordion-body {
            padding: 10px;
            background-color: #f3f6fa;
            display: none;

        }

        .accordion-head.active+.accordion-body {
            animation: .5s ease;
            display: block;
        }

        .main {
            display: flex;
            flex-direction: column;
            width: 100%;
            border-radius: 5px;
            box-shadow: 0.778571px 1.55714px 15.5714px rgba(0, 0, 0, 0.1);
            padding: 0;

            margin-bottom: 20px;
        }

        .part1 {
            width: 100%;
            /* background-image: url('../assets/images/slider-image1.jpg'); */
            background-repeat: no-repeat;
            height: 5% !important;

        }

        .part2 {
            width: 100%;
            padding: 20px;
            height: 70%;
        }

        .margin-2 {
            margin-bottom: 500px;
        }

        .back a {
            font-size: 20px;
            text-transform: capitalize;


        }

        .back {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        @media(max-width: 786px) {
            .part1 {
                width: 100%;
                padding: 20px;
                height: 70%;
            }

            .part2 {
                width: 100%;
                padding: 20px;
                height: 70%;
            }

            .main {
                margin: 20px auto;
                width: 50%;

            }

        }

    </style>

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!----------Whatsapp chat handle------------->
    {{-- <a href="#">
        <img src="{{ asset('assets/images/whatsapp.png') }}" class="img-responsive"
            style="position: fixed; bottom: 50%; right: 20px; z-index: 2000; width: 30px; height: 30px; " alt="profile">
    </a> --}}

    <a href="{{ asset('assets/users_guide.pdf') }}" download="user_guide" target="_blank" hidden>


        <!-- back to top button -->
        <button id="backToTOP"><i class="fa fa-angle-double-up"></i></button>

        <!-- PRE LOADER -->
        <section class="preloader">
            <div class="spinner">

                <span class="spinner-rotate"></span>

            </div>
        </section>


        @include('partials.header')

        @yield('content')

        @include('partials.footer')

        @include('roots._javascript')


        <script>
            const accordion_head = document.querySelectorAll('.accordion-head');
            accordion_head.forEach((accordion) => {
                accordion.addEventListener('click', function() {
                    accordion.classList.toggle('active')
                })

            })
            const forHome = document.querySelectorAll('.forHome');
            const forFaq = document.querySelectorAll('.forFaq');
            const forAbout = document.querySelectorAll('.forAbout')
            const forCourse = document.querySelectorAll('.forCourse')
            const forNews = document.querySelectorAll('.forNews')
            const forTeam = document.querySelectorAll('.forTeam')
            const forTest = document.querySelectorAll('.forTest')
            const forContact = document.querySelectorAll('.forContact')

            if (window.location.pathname === "/index.php/faqs") {
                forFaq.forEach(home => home.setAttribute('href', "#top"))
                forHome.forEach(home => home.setAttribute('href', "{{ route('home') }}"))
                forAbout.forEach(home => home.setAttribute('href', "{{ route('home') }}#about"))
                forCourse.forEach(home => home.setAttribute('href', "{{ route('home') }}#courses"))
                forContact.forEach(home => home.setAttribute('href', "{{ route('home') }}#contact"))
                forTeam.forEach(home => home.setAttribute('href', "{{ route('home') }}#team"))
                forTest.forEach(home => home.setAttribute('href', "{{ route('home') }}#testimonial"))
            }
            if (window.location.pathname === "/index.php/sabi_news") {
                forNews.forEach(home => home.setAttribute('href', "#top"))
                forHome.forEach(home => home.setAttribute('href', "{{ route('home') }}"))
                forAbout.forEach(home => home.setAttribute('href', "{{ route('home') }}#about"))
                forCourse.forEach(home => home.setAttribute('href', "{{ route('home') }}#courses"))
                forContact.forEach(home => home.setAttribute('href', "{{ route('home') }}#contact"))
                forTeam.forEach(home => home.setAttribute('href', "{{ route('home') }}#team"))
                forTest.forEach(home => home.setAttribute('href', "{{ route('home') }}#testimonial"))
            }
        </script>
</body>

</html>
