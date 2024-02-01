@extends('layouts.master')

@section('title', 'SabiMONI: Financial Literacy Course')

@section('content')
    <!-- HOME -->
    <section id="home">
        <div style="width: 100%">

            <div class="owl-carousel owl-theme home-slider">
                <div class="item item-first">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-12">
                                <h1>SabiMONI: Your Path to Financial Literacy</h1>
                                <h3>Learn how to manage your money. Start your journey here: Anywhere, anytime at your own
                                    pace.</h3>
                                <a href="#about" class="section-btn btn btn-default smoothScroll">Discover more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item item-second">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-12">
                                <h1>SabiMONI: The Financial Literacy e-Learning Platform</h1>
                                <h3>Our online courses are built in partnership with technology leaders and are designed to
                                    meet industry demands.</h3>
                                <a href="#courses" class="section-btn btn btn-default smoothScroll">Take a course</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item item-third">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-12">
                                <h1>SabiMONI: Free for All</h1>
                                <h3>The SabiMoni e-learning platform is designed to train as many people as possible with
                                    up-to-date financial tools and resources at no-cost. It is free for all! </h3>
                                <a href="#contact" class="section-btn btn btn-default smoothScroll">Let's chat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- FEATURE -->
    <section id="feature">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-4 text-center">
                    <div class="feature-thumb">
                        <span><i class="fa fa-users"></i></span>
                        <h3>Interactive Courses</h3>
                        <p style="text-align: center">We provide interactive financial literacy courses with a friendly
                            tone.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 text-center">
                    <div class="feature-thumb">
                        <span><i class="fa fa-clock-o"></i></span>
                        <h3>Self-Paced Learning</h3>
                        <p>We provide outmost convenience to learners over what we teach.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 text-center">
                    <div class="feature-thumb">
                        <span><i class="fa fa-certificate"></i></span>
                        <h3>Certification</h3>
                        <p>After final assessments, user's certificate is signed/endsored by the CBN.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                        <h2>About <strong>SabiMONI</strong></h2>
                        <p align="justify">Financial literacy impacts almost every aspect of our lives today. Whether we go
                            to the market,
                            discuss our family budget, manage our businesses or prepare for retirement, our understanding of
                            how money works has a strong effect on the quality of our lives.</p>

                        <p align="justify">This e-learning platform offers Financial education tailored towards
                            those interested in becoming Certified Financial Literacy Trainer (CFLT) as well as consumers who want to improve their financial wellbeing.</p>

                        <figure>
                            <span><i class="fa fa-users"></i></span>
                            <figcaption>
                                <h3>The Team</h3>
                                <p>The SabiMONI has been put together by a team of experts to help increase your financial
                                    Skills, Knowledge, and Attitude.</p>
                            </figcaption>
                        </figure>

                       <!-- <figure>
                              <span><i class="fa fa-certificate"></i></span>
                              <figcaption>
                                   <h3>International Certifications</h3>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                              </figcaption>
                         </figure>  -->

                        <figure>
                            <span><i class="fa fa-bar-chart-o"></i></span>
                            <figcaption>
                                <h3>Free for Everyone</h3>
                                <p>The SabiMONI e-learning platform is designed to train as many people as possible with
                                    up-to-date financial tools and resources at no-cost.</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                        <div class="button-edit">
                            <video style="width: 100%;" height="350" controls id="video">
                                <source src="{{ asset('assets/images/videos/dgvideowsound.mp4') }}" type="video/mp4">

                                Your browser does not support the video tag.
                            </video>
                        </div>


                        <div style="display:inline-block; vertical-align: middle;">
                            <div style="font-weight:bold;">Mrs. Aishah Ahmad CFA</div>
                            <div> Deputy Governor, Financial System Stability, Central Bank Of Nigeria</div>
                        </div>

                    </div>
                </div>

                <!-- <div class="col-md-offset-1 col-md-4 col-sm-12">
                    <div class="entry-form">
                         <form action="#" method="post">
                              <h2>Signup today</h2>
                              <input type="text" name="full name" class="form-control" placeholder="Full name" required="">
 
                              <input type="email" name="email" class="form-control" placeholder="Your email address" required="">
 
                              <input type="password" name="password" class="form-control" placeholder="Your password" required="">
 
                              <button class="submit-btn form-control" id="form-submit">Get started</button>
                         </form>
                    </div>
               </div>  -->

            </div>
        </div>
    </section>

    <!-- Courses -->
    <section id="courses">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>Core Courses <small>The following courses are available on SabiMONI</small></h2>
                    </div>

                    <div class="owl-carousel owl-theme owl-courses">
                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="courses-thumb">
                                    <div class="courses-top">
                                        <div class="courses-image">
                                            <img src="{{ asset('assets/images/modules/courses-image1.jpg') }}"
                                                class="img-responsive" alt="certified financial literacy trainer">
                                        </div>
                                        <div class="courses-date">
                                        </div>
                                    </div>

                                    <div class="courses-detail">
                                        <h3><a href="/index.php/about_cflt" class="disabled">Certified Financial Literacy
                                                Trainer (CFLT)</a></h3>
                                        <p class="text-justify">An individual who has taken all the Financial Literacy
                                            Modules, Learning Methodology on the SabiMONI platform and obtained a pass mark
                                            of
                                            60% and undergone an assessment session (physical/virtual) to demonstrate that
                                            he or she
                                            can teach and transfer the...<a href="/index.php/about_cflt">Read More</a></p>

                                    </div>

                                    <div class="courses-info">
                                        <div class="courses-author">
                                            <img src="{{ asset('assets/images/author-image1.jpg') }}" class="img-responsive"
                                                alt="cflt cohort">
                                            <span>CFLT Course</span>
                                        </div>
                                        <div class="courses-price free">
                                            <a href="https://sabimoni.org.ng/start/login/signup.php"
                                                target="_blank"><span>Enroll</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="courses-thumb">
                                    <div class="courses-top">
                                        <div class="courses-image">
                                            <img src="{{ asset('assets/images/modules/courses-image3.jpg') }}"
                                                class="img-responsive" alt="sanef">
                                        </div>
                                        <div class="courses-date">
                                            {{-- <span><i class="fa fa-calendar"></i> 5 / 10 / 2018</span>
                                            <span><i class="fa fa-clock-o"></i> 10 Hours</span> --}}
                                        </div>
                                    </div>

                                    <div class="courses-detail">
                                        <h3><a href="/index.php/about_sanef">Shared Agent Network Expansion Facility (SANEF)</a></h3>
                                        <p class="text-justify">The SANEF training aims to equip it's Agent with basic
                                            financial literacy knowledge to better serve their clients, improve their
                                            businesses and their level of financial literacy with the goal of promoting the
                                            uptake of financial services especially at...<a href="/index.php/about_sanef">Read More</a></p>
                                    </div>

                                    <div class="courses-info">
                                        <div class="courses-author">
                                            <img src="{{ asset('assets/images/author-image2.jpg') }}" class="img-responsive"
                                                alt="sanef">
                                            <span>SANEF Course</span>
                                        </div>
                                        <div class="courses-price free">

                                            <a href="https://sabimoni.org.ng/start/login/signup.php"
                                                target="_blank"><span>Enroll</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="courses-thumb">
                                    <div class="courses-top">
                                        <div class="courses-image">
                                            <img src="{{ asset('assets/images/modules/courses-image2.jpg') }}"
                                                class="img-responsive" alt="napgep">
                                        </div>
                                        <div class="courses-date">
                                            {{-- <span><i class="fa fa-calendar"></i> 5 / 10 / 2018</span>
                                            <span><i class="fa fa-clock-o"></i> 10 Hours</span> --}}
                                        </div>
                                    </div>

                                    <div class="courses-detail">
                                        <h3><a href="/index.php/about_napgep">National Peer Group Educator Programme
                                                (NAPGEP)</a></h3>
                                        <p class="text-justify">This programme leverages on the platform of the National
                                            Youth Services Corps (NYSC) to train selected Volunteer Corps Members (VCMs) on
                                            Financial Literacy in order to deliver financial education in rural communities
                                            and environs
                                            during their Community...<a href="/index.php/about_napgep">Read More</a></p>
                                    </div>

                                    <div class="courses-info">
                                        <div class="courses-author">
                                            <img src="{{ asset('assets/images/author-image2.jpg') }}"
                                                class="img-responsive" alt="napgep">
                                            <span>NAPGEP Course</span>
                                        </div>
                                        <div class="courses-price free">
                                            <a href="https://sabimoni.org.ng/start/login/signup.php"
                                                target="_blank"><span>Enroll</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
    </section>

    <!-- TEAM -->
   <section id="team">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6" style="display: flex; flex-direction: column; align-items: center">
                    <div class="section-title latest-news-title">
                        <h2>Related Information<small>Read through our blog for recent updates</small></h2>
                    </div>
                    {{-- testing lates news start --}}


                    <div class="owl-carousel owl-theme owl-news">

                        <div class="item" style=" background: white;">
                            <div class="courses-thumb" style="background: white">

                                <div class="courses-detail">
                                    <h3 style="text-align: left"><a href="javascript:void(0)" class="disabled">Fraud and
                                            Scam in Digital Financial Services</a></h3>
                                    <p class="text-justify">Today, more and more purchases are done through digital
                                        channels, especially via online payments. The internet offers the convenience and
                                        ease of buying goods or paying for services via your computer, tablet or mobile
                                        phones. However, the use of online payments ... <a
                                            href="/index.php/fraud_scam"><span><b>Read
                                                    More</b></span></a>

                                </div>


                            </div>
                        </div>
                        <div class="item" style=" background: white;">
                            <div class="courses-thumb" style="background: white">


                                <div class="courses-detail">
                                    <h3 style="text-align: left"><a href="javascript:void(0)" class="disabled">Your
                                            Rights and Responsibilites as a Financial Consumer </a></h3>
                                    <p class="text-justify">One of the core mandates of the Central bank of Nigeria (CBN)
                                        is to ensure Financial System Stability. The role of the Consumer Protection
                                        department therefore is to engender confidence in Financial consumers by
                                        ensuring: Consumers are equipped with adequate Financial Education ... <a
                                            href="/index.php/rights_responsiblities"><span><b>Read
                                                    More</b></span></a>

                                </div>
                            </div>
                        </div>

                        <div class="item" style=" background: white;">
                            <div class="courses-thumb" style="background: white">
                                <div class="courses-detail">
                                    <h3 style="text-align: left"><a href="javascript:void(0)" class="disabled">e
                                            -Naira</a></h3>
                                    <p class="text-justify">The eNaira is the Central Bank of Nigeria-issued digital
                                        currency.
                                        It is the digital representation of the Nigerian Naira and constitutes a direct
                                        liability of the Central Bank of Nigeria (CBN). The eNaira was launched by the
                                        President
                                        of the Federal Republic of Nigeria on October 25, 2021 ... <a
                                            href="/index.php/e_naira" class="read-more"><span><b>Read
                                                    More</b></span></a>

                                </div>
                            </div>
                        </div>

                    </div>


                    {{-- testing lates news end --}}
                </div>
                <div class="col-md-6 col-sm-6 col-6 second-news-res">
                    <div class="section-title latest-news-title">
                        <h2>News<small>Read through our blog for recent updates</small></h2>
                    </div>
                    <div class="owl-carousel owl-theme owl-news">
                        @forelse ($news as $key => $item)
                        <div class="item" style=" background: white;">
                            <div class="courses-thumb" style="background: white">
                                <div class="courses-detail">
                                    
                                    
                                            {!! $item['title'] !!}
                                         
                                            {!! \Illuminate\Support\Str::limit($item->news, 290, $end='...') !!}
                                        <a href=" {{ route('single.news', ['id' => $item['id'] ]) }} "><span><b>Read More</b></span></a>

                                </div>
                            </div>
                        </div>
                        @empty
                        News coming soon!
                        @endforelse
                    </div>

                    
                </div>
            </div>
    </section> 

    <!-- TESTIMONIAL -->
    <section id="testimonial">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>Testimonials<small>What users say about SabiMONI</small></h2>
                    </div>
                    {{-- <h4 style="color:red;">
                        <marquee width="60%" direction="right" height="100px">
                            The Testimonial section to be populated soon...
                        </marquee>
                    </h4> --}}

                    <div class="owl-carousel owl-theme owl-client">
                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="tst-image">
                                    <img src="{{ asset('assets/images/tst-image2.jpeg') }}" class="img-responsive"
                                        alt="profile image">
                                </div>
                                <div class="tst-author">
                                    <h4>Florence Onwumere</h4>
                                    <span>Women Enterprise Alliance</span>
                                </div>
                                <p class="text-justify">The online courses were deep and insightful. I was able to use
                                    the teachings to solve business issues. I learnt great business lessons from each
                                    course.</p>
                                <div class="tst-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="tst-image">
                                    <img src="{{ asset('assets/images/tst-image1.jpg') }}" class="img-responsive"
                                        alt="profile">
                                </div>
                                <div class="tst-author">
                                    <h4>Lani Gbogboade</h4>
                                    <span>Women Enterprise Alliance</span>
                                </div>
                                <p class="text-justify">The courses were rich and enlightening. It was applicable to my
                                    businesses and finances - everyone should take the course.</p>
                                <div class="tst-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="tst-image">
                                    <img src="{{ asset('assets/images/tst-image4.jpg') }}" class="img-responsive"
                                        alt="profile">
                                </div>
                                <div class="tst-author">
                                    <h4>Ofornagolu Chioma</h4>
                                    <span>Farmers' Home Foundation</span>
                                </div>
                                <p class="text-justify">My orientation about life and money changed, due to the
                                    explanatory nature of the Course. The imagery explanation of each topic were amazing.
                                </p>
                                <div class="tst-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="tst-image">
                                    <img src="{{ asset('assets/images/tst-image4.jpg') }}" class="img-responsive"
                                        alt="profile">
                                </div>
                                <div class="tst-author">
                                    <h4>Chima Glory</h4>
                                    <span>Farmers' Home Foundation</span>
                                </div>
                                <p class="text-justify"> I understood the actual meaning of needs and want. I can now
                                    boldly go for my needs because they are basic things one cannot live without while wants
                                    are luxuries.</p>
                                <div class="tst-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="tst-image">
                                    <img src="{{ asset('assets/images/tst-image4.jpg') }}" class="img-responsive"
                                        alt="profile">
                                </div>
                                <div class="tst-author">
                                    <h4>Olivia</h4>
                                    <span>Farmers' Home Foundation</span>
                                </div>
                                <p class="text-justify">I was happy to learn on the SabiMONI platform that businesses
                                    fail when records are not kept. I recommend this course for business owners and
                                    entrepreneurs.</p>
                                <div class="tst-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="tst-image">
                                    <img src="{{ asset('assets/images/tst-image4.jpg') }}" class="img-responsive"
                                        alt="profile">
                                </div>
                                <div class="tst-author">
                                    <h4>Loveth U. Ehihia</h4>
                                    <span>Farmers' Home Foundation</span>
                                </div>
                                <p class="text-justify">I learnt a lot from the training. I got a clear understanding of
                                    what needs and wants were.</p>
                                <div class="tst-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
    </section>


    <!-- CONTACT -->
    <section id="contact">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="section-title text-center">
                        <h2>SabiMONI Mobile Application Now Available </h2>
                    </div>

                    <div class="contact-image">
                        <a href="https://play.google.com/store/apps/details?id=com.sabimoni.ng" target="_blank"
                            rel="noopener noreferrer">
                            <img src="{{ asset('assets/images/sabiMONI_Phone.png') }}" class="img-responsive"
                                alt="Sabi MONI Mobile Application">
                        </a>

                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <form id="contact-form" role="form" action="/index.php/contact_us" method="post">
                        {{ csrf_field() }}
                        <div class="section-title text-center">
                            <h2>Contact Us <small>For enquiries. please contact us</small></h2>
                        </div>

                        @if (session()->has('success'))
                            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show">
                                <div class="alert alert-success" role="alert">
                                    <strong>Success</strong> {{ session()->get('success') }}
                                </div>
                            </div>
                        @endif

                        <div class="col-md-12 col-sm-12">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12" style="margin-bottom: 5px;">
                                    <input type="text"
                                        class="form-control textarea @error('name') is-invalid @enderror"
                                        placeholder="Enter full name" name="name" value="{{ old('name') }}"
                                        required style="margin-bottom: 0px;">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 col-sm-12" style="margin-bottom: 5px;">
                                    <input type="email"
                                        class="form-control textarea @error('email') is-invalid @enderror"
                                        placeholder="Enter email address" name="email" value="{{ old('email') }}"
                                        required style="margin-bottom: 0px;">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control textarea @error('subject') is-invalid @enderror"
                                    placeholder="Enter subject...." name="subject" value="{{ old('subject') }}"
                                    required>
                                @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea class="form-control textarea @error('message') is-invalid @enderror" rows="6" placeholder="Message"
                                    name="message" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div
                                class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }} d-flex justify-content-space-between">
                                {{-- <label class="col-md-4 control-label">Captcha</label> --}}
                                <div class="col-lg-10 col-md-6 col-sm-12" style="padding-left:0px!important;">
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! app('captcha')->display() !!}
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-4 col-sm-12 d-flex flex-row justify-content-center text-center"
                                    style="width: 100%">
                                    <div style="display: flex; align-items: center;">
                                        <input type="submit" class="form-control" name="send message"
                                            value="Send Message" style="width: 40%">
                                        <a href="#">
                                            {{-- <p style="color: white; margin-top: 10px">Quick Line</p> --}}
                                            <img src="{{ asset('assets/images/whatsapp.png') }}" class="img-responsive"
                                                style="width: 30px; height: 30px; margin-left: 25px" alt="profile"
                                                data-toggle="tooltip" data-placement="bottom" title="Live Chat">
                                        </a>
                                    </div>



                                </div>

                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>

        </div>
        </div>
    </section>

    {{-- Start of Partners' Section --}}

    <section id="partners">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" data-animation="fadeInLeft">
                    <!-- Title -->
                    <div class="section-title">
                        <h2>Our Partners<small>from around the world</small></h2>
                    </div>
                    {{-- <h3 class="no-margin bottom-margin-md-10 text-color2 mainFont">Our Partners</h3> --}}
                    <br>
                </div>
                {{-- <div class="col-md-12 text-center">
                    <img src="{{ asset('assets/images/clients/cbn.png') }}" width="120" height="90" alt="image not found">
                    <img src="{{ asset('assets/images/clients/giz.png') }}" width="120" height="90" alt="image not found">
                    <img src="{{ asset('assets/images/clients/ndic.png') }}" width="120" height="90" alt="image not found">
                    <img src="{{ asset('assets/images/clients/pencom.png') }}" width="120" height="90" alt="image not found">
                    <img src="{{ asset('assets/images/clients/securities.png') }}" width="120" height="90" alt="image not found">
                    <img src="{{ asset('assets/images/clients/naicom.png') }}" width="120" height="90" alt="image not found">
                    <img src="{{ asset('assets/images/clients/fmys.png') }}" width="120" height="90" alt="image not found">
                    <img src="{{ asset('assets/images/clients/ncc.png') }}" width="120" height="90" alt="image not found">
                    <img src="{{ asset('assets/images/clients/smedan.png') }}" width="120" height="90" alt="image not found">
                    <img src="{{ asset('assets/images/clients/education.png') }}" width="120" height="90" alt="image not found">
                    <img src="{{ asset('assets/images/clients/nsitf.png') }}" width="120" height="90" alt="image not found">
                    <img src="{{ asset('assets/images/clients/nia.png') }}" width="120" height="90" alt="image not found">
                    <img src="{{ asset('assets/images/clients/fmic2.png') }}" width="120" height="90" alt="image not found">
                    <img src="{{ asset('assets/images/clients/mercy.png') }}" width="120" height="90" alt="image not found">
                    <img src="{{ asset('assets/images/clients/bankers.png') }}" width="120" height="90" alt="image not found">
                    <img src="{{ asset('assets/images/clients/fmof.png') }}" width="120" height="90" alt="image not found">
                    <img src="{{ asset('assets/images/clients/stock.png') }}" width="120" height="90" alt="image not found">
                </div> --}}
                <div class="col-md-12 text-center">
                    <div class="carousel">
                        <div class="image-container" id="imgs">
                            <img src="{{ asset('assets/images/clients/cbn.png') }}" width="120" height="90"
                                alt="cbn">
                            <img src="{{ asset('assets/images/clients/giz.png') }}" width="120" height="90"
                                alt="giz">
                            <img src="{{ asset('assets/images/clients/ndic.png') }}" width="120" height="90"
                                alt="ndic">
                            <img src="{{ asset('assets/images/clients/pencom.png') }}" width="120" height="90"
                                alt="pencom">
                            <img src="{{ asset('assets/images/clients/securities.png') }}" width="120" height="90"
                                alt="securities">
                            <img src="{{ asset('assets/images/clients/naicom.png') }}" width="120" height="90"
                                alt="naicom">
                            <img src="{{ asset('assets/images/clients/fmys.png') }}" width="120" height="90"
                                alt="fmys">
                            <img src="{{ asset('assets/images/clients/ncc.png') }}" width="120" height="90"
                                alt="ncc">
                            <img src="{{ asset('assets/images/clients/smedan.png') }}" width="120" height="90"
                                alt="smedan">
                            <img src="{{ asset('assets/images/clients/education.png') }}" width="120" height="90"
                                alt="education">
                            <img src="{{ asset('assets/images/clients/nsitf.png') }}" width="120" height="90"
                                alt="nsitf">
                            <img src="{{ asset('assets/images/clients/nia.png') }}" width="120" height="90"
                                alt="nia">
                            <img src="{{ asset('assets/images/clients/fmic2.png') }}" width="120" height="90"
                                alt="fmic2">
                            <img src="{{ asset('assets/images/clients/mercy.png') }}" width="120" height="90"
                                alt="mercy">
                            <img src="{{ asset('assets/images/clients/bankers.png') }}" width="120" height="90"
                                alt="bankers">
                            <img src="{{ asset('assets/images/clients/fmof.png') }}" width="120" height="90"
                                alt="fmof">
                            <img src="{{ asset('assets/images/clients/stock.png') }}" width="120" height="90"
                                alt="stock">

                            <img src="{{ asset('assets/images/clients/cbn.png') }}" width="120" height="90"
                                alt="cbn">
                            <img src="{{ asset('assets/images/clients/giz.png') }}" width="120" height="90"
                                alt="giz">
                            <img src="{{ asset('assets/images/clients/ndic.png') }}" width="120" height="90"
                                alt="ndic">
                            <img src="{{ asset('assets/images/clients/pencom.png') }}" width="120" height="90"
                                alt="pencom">
                            <img src="{{ asset('assets/images/clients/securities.png') }}" width="120" height="90"
                                alt="securities">
                            <img src="{{ asset('assets/images/clients/naicom.png') }}" width="120" height="90"
                                alt="naicom">
                            <img src="{{ asset('assets/images/clients/fmys.png') }}" width="120" height="90"
                                alt="fmys">
                            <img src="{{ asset('assets/images/clients/ncc.png') }}" width="120" height="90"
                                alt="ncc">
                            <img src="{{ asset('assets/images/clients/smedan.png') }}" width="120" height="90"
                                alt="smedan">
                            <img src="{{ asset('assets/images/clients/education.png') }}" width="120" height="90"
                                alt="education">
                            <img src="{{ asset('assets/images/clients/nsitf.png') }}" width="120" height="90"
                                alt="nsitf">
                            <img src="{{ asset('assets/images/clients/nia.png') }}" width="120" height="90"
                                alt="nia">
                            <img src="{{ asset('assets/images/clients/fmic2.png') }}" width="120" height="90"
                                alt="fmic2">
                            <img src="{{ asset('assets/images/clients/mercy.png') }}" width="120" height="90"
                                alt="mercy">
                            <img src="{{ asset('assets/images/clients/bankers.png') }}" width="120" height="90"
                                alt="bankers">
                            <img src="{{ asset('assets/images/clients/fmof.png') }}" width="120" height="90"
                                alt="fmof">
                            <img src="{{ asset('assets/images/clients/stock.png') }}" width="120" height="90"
                                alt="stock">
                        </div>
                        <div class="buttons-container">
                            <div id="left" class="carousel-btn"><i class="fa fa-solid fa-chevron-left"></i></div>
                            <div id="right" class="carousel-btn"><i class="fa fa-solid fa-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Partners section -->


@endsection
