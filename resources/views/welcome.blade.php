<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Pavo is a mobile app Tailwind CSS HTML template created to help you present benefits, features and information about mobile apps in order to convince visitors to download them" />
    <meta name="author" content="Your name" />

    
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image" /> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>PPDB SMK WIKRAMA BOGOR</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet" />
    <link href="{{ asset('pavo/css/fontawesome-all.css') }}" rel="stylesheet" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link href="{{ asset('pavo/css/swiper.css') }}" rel="stylesheet" />
    <link href="css/magnific-popup.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('pavo/css/styles.css') }}">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Navigation -->
    <nav class="navbar fixed-top">
        <div class="container sm:px-4 lg:px-8 flex flex-wrap items-center justify-between lg:flex-nowrap">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="text-gray-800 font-semibold text-3xl leading-4 no-underline page-scroll" href="index.html">Pavo</a> -->

            <!-- Image Logo -->
            <a class="inline-block mr-4 py-0.5 text-xl whitespace-nowrap hover:no-underline focus:no-underline"
                href="/">
                <img src="{{ asset('https://media-exp1.licdn.com/dms/image/C510BAQG1Nyx-6PqmhQ/company-logo_200_200/0?e=2159024400&v=beta&t=FhWoXyf9Ns_GDeg3sN-p2NbLyRQgAoy1_dq6aokBohw ')  }}" alt="1" class="h-8" />
            </a>

            <button
                class="background-transparent rounded text-xl leading-none hover:no-underline focus:no-underline lg:hidden lg:text-gray-400"
                type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon inline-block w-8 h-8 align-middle"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow lg:items-center"
                id="navbarsExampleDefault">
                <ul class="pl-0 mt-3 mb-2 ml-auto flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row">
                    <li>
                        <a class="nav-link page-scroll active" href="/">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    
                    {{-- <li class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Drop</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item page-scroll" href="article.html">Article Details</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="terms.html">Terms Conditions</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="privacy.html">Privacy Policy</a>
                        </div>
                    </li> --}}
                    @if(!Auth::check())
                    <li>
                        <a class="nav-link page-scroll" href="/login">Masuk</a>
                    </li>
                    <li>
                        <a class="nav-link page-scroll" href="/register">Daftar</a>
                    </li>
                    @else
                    <li>
                        <a class="nav-link page-scroll" href="/user">Dashboard</a>
                    </li>
                    @endif
                    
                </ul>
                
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- Header -->
    <header id="header" class="header py-2 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-32">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
            <div class="mb-16 lg:mt-32 xl:mt-40 xl:mr-12">
                <span class="font-bold text-black"></span>
                <h1 class="h1-large mb-5">PPDB TP 2023-2024
SMK Wikrama Bogor</h1>
                <p class="p-large mb-8">Ayo! segera daftarkan dirimu ke SMK Wikrama dengan cara klik PENDAFTARAN PPDB dibawah ini!
Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah.
        </p>
                <a class="btn-solid-lg" href="/register"><i class="fas fa-sign-in-alt"></i> Daftar Sekarang PPDB</a>
            </div>
            <div class="xl:text-right">
                <img class="inline" src="{{ asset('https://tse1.mm.bing.net/th?id=OIP.Jp_r-s-1Vmjpq6hZXeE7JwHaEK&pid=Api&P=0') }}" alt="Sekolah WK" />
            </div>
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->





    <!-- Features -->
    <div id="features" class="cards-1">
        <div class="container px-4 sm:px-8 xl:px-4">

            <!-- Card -->
            <div class="card">
                <div class="card-image">
                </div>
                <div class="card-body">
                    <h5 class="card-title">MOTTO</h5>
                    <p class="mb-4">Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
                <div class="card-image">
                </div>
                <div class="card-body">
                    <h5 class="card-title">AFIRMASI</h5>
                    <p class="mb-4">
                        <div class="flex justify-center"><img src="{{ asset('') }}" alt=""></div>
                        Padamu negeri - kami berjanji - lulus Wikrama siap membangun negeri
                    </p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
                <div class="card-image">
                
                </div>
                <div class="card-body">
                    <h5 class="card-title">ATITUDE</h5>
                    <p class="mb-4">
                        <div class="flex justify-center"><img src="{{ asset('') }}" alt=""></div>
                        Aku ada lingkunganku bahagia
                    </p>
                </div>
            </div>
           
        

            

        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of features -->

    <div class="jurusan">
        <div class="title">
                    </div>
                    <h1>Jurusan </h1>

    <!-- Details 1 -->
    <div id="details" class="pt-12 pb-16 lg:pt-16">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
            <div class="lg:col-span-5">
                <div class="mb-16 lg:mb-0 xl:mt-16">
                    <h2 class="mb-6">Pengembangan Perangkat Lunak Dan Gim </h2>
                    <p class="mb-4">Desktop Programming, Web Programming, Mobile Programming,Bussiness Analyst, Database Administration.</p>
                    
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-7">
                <div class="xl:ml-14">
                    <img class="inline" src="{{ asset('https://tse1.mm.bing.net/th?id=OIP.XwEjQ8bE8Ya1ckrWd446TQHaE7&pid=Api&P=0') }}" alt="PPLG" />
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of container -->
    </div>



    <!-- Details 2 -->
    <div class="py-24">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
            <div class="lg:col-span-7">
                <div class="mb-12 lg:mb-0 xl:mr-14">
                    <img class="inline" src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.g533odXrSHsT0_SHJ5mUSwHaE8&pid=Api&P=0') }}" alt="TKJ" />
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-5">
                <div class="xl:mt-12">
                    <h2 class="mb-6">Teknik Jaringan Kompoter</h2>
                    <p class="mb-4">
                    Potensi Keahlian Teknik Kompter Jaringan Sudah Memiliki Sertifikasi Nasional Seperti CNAP 
                    </p>
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of container -->
    </div>
    <!-- lanjut j -->
    <div class="py-24">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
            <div class="lg:col-span-7">
                <div class="mb-12 lg:mb-0 xl:mr-14">
                <img class="inline" src="{{ asset('https://tse4.mm.bing.net/th?id=OIP.t4GO8aEibFgEOrJwHHPGrwHaE8&pid=Api&P=0') }}" alt="MMD" />
                    </div>
                        </div>
                    <div class="lg:col-span-5">
                        <div class="xl:mt-12">
                            <h2 class="mb-6"> DESAIN KOMUNIKASI VISUAL </h2>
                            <p class="mb-4">
                        Lulusan  Dapat Memiliki Kesempatan Yang Luas Dibidang Periklanan,
                        radio Dan Televisi,Foto , Percetakan Grafis dll.
                    </p>
                    </div>
                        </div>
                    </div>
                </div>
<!-- lanjut 2 --->
<div class="py-24">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
            <div class="lg:col-span-7">
                <div class="mb-12 lg:mb-0 xl:mr-14">
                <img class="inline" src="{{ asset('https://ppdb.smkwikrama.sch.id/assets/landing%20page/images/PMN.jpg') }}" alt="PMN" />
                    </div>
                        </div>
                    <div class="lg:col-span-5">
                        <div class="xl:mt-12">
                            <h2 class="mb-6"> Pemasaran </h2>
                            <p class="mb-4">
                        Kompetensi Keahlian  Bisnis Daring Dan Pemasaran Memiliki Kompetensi Yang Mirip
                        Dengan Program Multimedia Dan Perkantoran,
                        Lulusan Program INI Diharuskan Mampu Membuat Foto Produk,Designer,Copy Writing dll.
                    </p>
                    </div>
                        </div>
                    </div>
                </div>
<!-- Lanjut 3 --->
<div class="py-24">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
            <div class="lg:col-span-7">
                <div class="mb-12 lg:mb-0 xl:mr-14">
                <img class="inline" src="{{ asset('https://1.bp.blogspot.com/-gYEPaTRiMPo/X4ZRrrr8XkI/AAAAAAAAA3Y/dgPpZClvERsKFOJEv97WM-fRlXJ-a1-MgCLcBGAsYHQ/s1024/IMG_8646.JPG') }}" alt="MPLB" />
                    </div>
                        </div>
                    <div class="lg:col-span-5">
                        <div class="xl:mt-12">
                            <h2 class="mb-6"> MPLB </h2>
                            <p class="mb-4">
                        Kompetensi Keahlian  Otomatisasi Dan Memiliki Mengelola Perkantoran/Administration Perkantoran Memiliki Keunggulan
                        Dibidang Prestasi Peserta Didik 
                    
                    </p>
                    </div>
                        </div>
                    </div>
                </div>
<!-- cukup br0 -->


    {{-- <!-- Details Lightbox -->
    <!-- Lightbox -->
    <div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="lg:grid lg:grid-cols-12 lg:gap-x-8">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="lg:col-span-8">
                <div class="mb-12 text-center lg:mb-0 lg:text-left xl:mr-6">
                    <img class="inline rounded-lg" src="images/details-lightbox.jpg" alt="alternative" />
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-4">
                <h3 class="mb-2">Goals Setting</h3>
                <hr class="w-11 h-0.5 mt-0.5 mb-4 ml-0 border-none bg-indigo-600" />
                <p>The app can easily help you track your personal development evolution if you take the time to set it
                    up.</p>
                <h4 class="mt-7 mb-2.5">User Feedback</h4>
                <p class="mb-4">This is a great app which can help you save time and make your live easier. And it
                    will help improve your productivity.</p>
                <ul class="list mb-6 space-y-2">
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Splash screen panel</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Statistics graph report</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Events calendar layout</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Location details screen</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Onboarding steps interface</div>
                    </li>
                </ul>
                <a class="btn-solid-reg mfp-close page-scroll" href="#download">Download</a>
                <button class="btn-outline-reg mfp-close as-button" type="button">Back</button>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of details lightbox -->


    <!-- Details 3 -->
    <div class="pt-16 pb-12">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
            <div class="lg:col-span-5">
                <div class="mb-16 lg:mb-0 xl:mt-16">
                    <h2 class="mb-6">Platform integration and life time free updates</h2>
                    <p class="mb-4">Get a glimpse of what this app can do for your marketing automation and
                        understand why current users are so excited when using Pavo
                        together with their teams.</p>
                    <p class="mb-4">We will promptly answer any questions and honor your requests based on the
                        service level agreement</p>
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-7">
                <div class="ml-14">
                    <img class="inline" src="images/details-3.jpg" alt="alternative" />
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of container -->
    </div>
    <!-- end of details 3 -->


    <!-- Statistics -->
    <div class="counter">
        <div class="container px-4 sm:px-8">

            <!-- Counter -->
            <div id="counter">
                <div class="cell">
                    <div class="counter-value number-count" data-count="231">1</div>
                    <p class="counter-info">Happy Users</p>
                </div>
                <div class="cell">
                    <div class="counter-value number-count" data-count="385">1</div>
                    <p class="counter-info">Issues Solved</p>
                </div>
                <div class="cell">
                    <div class="counter-value number-count" data-count="159">1</div>
                    <p class="counter-info">Good Reviews</p>
                </div>
                <div class="cell">
                    <div class="counter-value number-count" data-count="127">1</div>
                    <p class="counter-info">Case Studies</p>
                </div>
                <div class="cell">
                    <div class="counter-value number-count" data-count="211">1</div>
                    <p class="counter-info">Orders Received</p>
                </div>
            </div>
            <!-- end of counter -->

        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of statistics -->


    <!-- Testimonials -->
    <div class="slider-1 py-32 bg-gray">
        <div class="container px-4 sm:px-8">
            <h2 class="mb-12 text-center lg:max-w-xl lg:mx-auto">What do users think about Pavo</h2>

            <!-- Card Slider -->
            <div class="slider-container">
                <div class="swiper-container card-slider">
                    <div class="swiper-wrapper">

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-1.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">It's been so fun to work with Pavo, I've managed to
                                        integrate it properly into my business flow and it's great</p>
                                    <p class="testimonial-author">Jude Thorn - Designer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-2.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">We were so focused on launching as many campaigns as
                                        possible that we've forgotten to target our loyal customers</p>
                                    <p class="testimonial-author">Roy Smith - Developer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-3.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">I've been searching for a tool like Pavo for so long. I love
                                        the reports it generates and the amazing high accuracy</p>
                                    <p class="testimonial-author">Marsha Singer - Marketer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-4.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">We've been waiting for a powerful piece of software that can
                                        help businesses manage their marketing projects</p>
                                    <p class="testimonial-author">Tim Shaw - Designer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-5.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">Searching for a great prototyping and layout design app was
                                        difficult but thankfully I found app suite quickly</p>
                                    <p class="testimonial-author">Lindsay Spice - Marketer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-6.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">The app support team is amazing. They've helped me with some
                                        issues and I am so grateful to the entire team</p>
                                    <p class="testimonial-author">Ann Blake - Developer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                    </div> <!-- end of swiper-wrapper -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- end of add arrows -->

                </div> <!-- end of swiper-container -->
            </div> <!-- end of slider-container -->
            <!-- end of card slider -->

        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->


    <!-- Pricing -->
    <div id="pricing" class="cards-2">
        <div class="absolute bottom-0 h-40 w-full bg-white"></div>
        <div class="container px-4 pb-px sm:px-8">
            <h2 class="mb-2.5 text-white lg:max-w-xl lg:mx-auto">Pricing options for all budgets</h2>
            <p class="mb-16 text-white lg:max-w-3xl lg:mx-auto"> Our pricing plans are setup in such a way that any
                user can start enjoying Pavo without worrying so much about costs. They are flexible and work for any
                type of industry </p>

            <!-- Card-->
            <div class="card">
                <div class="card-body">
                    <div class="card-title">STANDARD</div>
                    <div class="price"><span class="currency">$</span><span class="value">29</span></div>
                    <div class="frequency">monthly</div>
                    <p>This basic package covers the marketing needs of small startups</p>
                    <ul class="list mb-7 space-y-2 text-left">
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>List building and relations</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Seamless platform integration</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Great performance on devices</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Community support and videos</div>
                        </li>
                    </ul>
                    <div class="button-wrapper">
                        <a class="btn-solid-reg page-scroll" href="#download">Download</a>
                    </div>
                </div>
            </div> <!-- end of card -->
            <!-- end of card -->

            <!-- Card-->
            <div class="card">
                <div class="card-body">
                    <div class="card-title">ADVANCED</div>
                    <div class="price"><span class="currency">$</span><span class="value">39</span></div>
                    <div class="frequency">monthly</div>
                    <p>This is a more advanced package suited for medium companies</p>
                    <ul class="list mb-7 space-y-2 text-left">
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>List building and relations</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Seamless platform integration</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Great performance on devices</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Community support and videos</div>
                        </li>
                    </ul>
                    <div class="button-wrapper">
                        <a class="btn-solid-reg page-scroll" href="#download">Download</a>
                    </div>
                </div>
            </div> <!-- end of card -->
            <!-- end of card -->

            <!-- Card-->
            <div class="card">
                <div class="card-body">
                    <div class="card-title">COMPLETE</div>
                    <div class="price"><span class="currency">$</span><span class="value">49</span></div>
                    <div class="frequency">monthly</div>
                    <p>This is a comprehensive package designed for big organizations</p>
                    <ul class="list mb-7 text-left space-y-2">
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>List building and relations</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Seamless platform integration</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Great performance on devices</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Community support and videos</div>
                        </li>
                    </ul>
                    <div class="button-wrapper">
                        <a class="btn-solid-reg page-scroll" href="#download">Download</a>
                    </div>
                </div>
            </div> <!-- end of card -->
            <!-- end of card -->

        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->


    <!-- Conclusion -->
    <div id="download" class="basic-5">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2">
            <div class="mb-16 lg:mb-0">
                <img src="images/conclusion-smartphone.png" alt="alternative" />
            </div>
            <div class="lg:mt-24 xl:mt-44 xl:ml-12">
                <p class="mb-9 text-gray-800 text-3xl leading-10">Team management mobile applications don’t get much
                    better than Pavo. Download it today</p>
                <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>Download</a>
                <a class="btn-solid-lg secondary" href="#your-link"><i class="fab fa-google-play"></i>Download</a>
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of basic-5 -->
    <!-- end of conclusion -->
     --}}
    <div class="w-full flex justify-center text-center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.015891056513!2d106.84162231404841!3d-6.6449477668054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c89505b4c37d%3A0x307fc4a38e65fa2b!2sSMK%20Wikrama%20Bogor!5e0!3m2!1sid!2sid!4v1672817818901!5m2!1sid!2sid" width="3100" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container px-4 sm:px-8">
            {{-- <h4 class="mb-8 lg:max-w-3xl lg:mx-auto">Pavo is a mobile application for marketing automation and you can
                reach the team at <a class="text-indigo-600 hover:text-gray-500"
                    href="mailto:email@domain.com">email@domain.com</a></h4>
            <div class="social-container">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-pinterest-p fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-instagram fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-youtube fa-stack-1x"></i>
                    </a>
                </span> --}}
            </div> <!-- end of social-container -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-3">
            <ul class="mb-4 list-unstyled p-small">
            
            </ul>
            <p class="pb-2 p-small statement">Copyright © <a href="#your-link" class="no-underline">2023</a></p>

            
        </div>

        <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="{{ asset('pavo/js/jquery.min.js') }}"></script> <!-- jQuery for JavaScript plugins -->
    <script src="{{ asset('pavo/js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('pavo/js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('pavo/js/jquery.magnific-popup.js') }}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{ asset('pavo/js/scripts.js') }}"></script> <!-- Custom scripts -->
</body>

</html>
