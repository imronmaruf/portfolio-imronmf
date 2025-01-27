<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio Imron</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.0.0/dist/flowbite.min.js"></script>

    <!-- Styles -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif

    <!-- Add smooth scroll behavior -->
    <style>
        html {
            scroll-behavior: smooth;
        }

        /* Add padding to sections to prevent header overlap */
        section {
            scroll-margin-top: 5rem;
            transition: all 0.3s ease-in-out;
        }

        /* Improve section spacing */
        /* .section-padding {
            padding: 2rem 0;
        } */

        /* Add fade-in animation for sections */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Improve card hover effects */
        .project-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <!-- Add scroll progress indicator -->
    <div class="fixed top-0 left-0 w-full h-1 bg-gray-200 dark:bg-gray-700 z-50">
        <div id="scroll-progress" class="h-full bg-blue-600 transition-all duration-300"></div>
    </div>

    <!-- Rest of your existing nav code remains the same -->
    <nav
        class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700 sticky top-0 z-40 backdrop-blur-sm bg-white/90 dark:bg-gray-900/90">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <svg class="w-[39px] h-[39px] text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.9"
                        d="m8 8-4 4 4 4m8 0 4-4-4-4m-2-3-4 14" />
                </svg>
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Imronmf</span>
            </a>
            <button data-collapse-toggle="navbar-multi-level" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-multi-level" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div id="navbar-multi-level" class="hidden w-full md:block md:w-auto">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/"
                            class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent"
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="#about"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Tentang
                            Saya</a>
                    </li>
                    <li>
                        <a href="#portfolio"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Portfolio</a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                            Blog
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdownNavbar"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#contact"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Hero Section with parallax effect -->
    <section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/hero-1.png') }}" class="w-full h-full object-cover" alt="Hero background">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>

        <div class="relative z-10 text-center px-4 mx-auto max-w-screen-xl py-24 lg:py-56">
            <!-- Your existing hero content -->
            <h1 class="text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                Halo semua 👋</h1>
            <br>
            <h1 class="mb-4 text-xl font-extrabold tracking-tight leading-none text-white md:text-md lg:text-2xl">
                Saya Imron Ma'ruf Fajaruddin</h1>

            <p class= "mb-8 text-lg font-normal lg:text-xl sm:px-16 lg:px-48 text-gray-300 dark:text-gray-400">Track
                work
                across the enterprise through
                an open,
                collaborative
                {{-- platform. <a href="#"
                    class="font-semibold text-gray-300 underline dark:text-white decoration-indigo-500">Link issues
                    across Jira</a> and ingest data from other --}}
                <span
                    class="font-semibold text-blue-300 underline dark:text-white decoration-blue-500">incidents</span>,

            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Resume
                    {{-- <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg> --}}
                    <svg class="w-5 h-5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M13 11.15V4a1 1 0 1 0-2 0v7.15L8.78 8.374a1 1 0 1 0-1.56 1.25l4 5a1 1 0 0 0 1.56 0l4-5a1 1 0 1 0-1.56-1.25L13 11.15Z"
                            clip-rule="evenodd" />
                        <path fill-rule="evenodd"
                            d="M9.657 15.874 7.358 13H5a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.358l-2.3 2.874a3 3 0 0 1-4.685 0ZM17 16a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H17Z"
                            clip-rule="evenodd" />
                    </svg>

                </a>
                <a href="#"
                    class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Hubungi Saya
                </a>
            </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding bg-white dark:bg-gray-800 fade-in">
        <!-- Your existing about content -->
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Timeline Column -->
                <div>
                    <!-- About Intro -->
                    <div class="max-w-3xl mb-10">
                        <h1 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                            Hi there I'm Imron Ma'ruf Fajaruddin,
                        </h1>
                        <p class="mb-6 text-lg text-gray-500 dark:text-gray-400">
                            Seorang lulusan Sistem Informasi dengan hampir 2 tahun pengalaman dalam pengembangan web
                            serta keterampilan administrasi yang
                            kuat. Menguasai Microsoft Office, terutama Excel, dengan kemampuan dalam pengelolaan data
                            dan pelaporan. Memiliki kemampuan
                            komunikasi yang baik, teliti, dan berpengalaman bekerja dalam tim serta individu.
                            Berpengalaman dalam mengelola proses administrasi
                            dan dokumentasi dengan inisiatif yang tinggi dan integritas. Berpengalaman dalam memberikan
                            solusi efisien untuk berbagai masalah
                            administratif dan teknis.
                        </p>
                    </div>

                    <!-- Timeline -->
                    <ol class="relative border-l border-gray-200 dark:border-gray-700">
                        <!-- Current Role -->
                        <li class="mb-4 ml-4">
                            <div
                                class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                            </div>
                            <time class="mb-1 text-sm font-normal leading-none text-blue-600 dark:text-blue-500">2019 -
                                PRESENT</time>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Freelance Web Developer
                            </h3>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Working happily on my own
                                web
                                projects</p>
                        </li>
                        <!-- Senior Designer -->
                        <li class="mb-4 ml-4">
                            <div
                                class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                            </div>
                            <time class="mb-1 text-sm font-normal leading-none text-blue-600 dark:text-blue-500">2017 -
                                2018</time>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Senior Web Designer</h3>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Inhouse web designer for
                                ecommerce firm</p>
                        </li>

                        <!-- Junior Designer -->
                        <li class="ml-4">
                            <div
                                class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                            </div>
                            <time class="mb-1 text-sm font-normal leading-none text-blue-600 dark:text-blue-500">2016 -
                                2017</time>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Junior Web Designer</h3>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Junior web designer for
                                small
                                web agency</p>
                        </li>
                    </ol>
                </div>

                <!-- Tech Stack Card Column -->
                <div class="w-full p-4">
                    <div
                        class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white">
                            Tech Stack
                        </h5>
                        <p class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-6">
                            Technologies and tools I use in my daily workflow
                        </p>
                        <ul class="my-4 space-y-3">
                            <li>
                                <a href="#"
                                    class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png"
                                        class="h-6" alt="Laravel">
                                    <span class="flex-1 ms-3 whitespace-nowrap">Laravel</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                    <img src="https://www.php.net/images/logos/new-php-logo.svg" class="h-6"
                                        alt="PHP">
                                    <span class="flex-1 ms-3 whitespace-nowrap">PHP</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                    <img src="https://code.visualstudio.com/assets/images/code-stable.png"
                                        class="h-6" alt="VS Code">
                                    <span class="flex-1 ms-3 whitespace-nowrap">VS Code</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                    <img src="https://www.mysql.com/common/logos/logo-mysql-170x115.png"
                                        class="h-6" alt="MySQL">
                                    <span class="flex-1 ms-3 whitespace-nowrap">MySQL</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png"
                                        class="h-6" alt="JavaScript">
                                    <span class="flex-1 ms-3 whitespace-nowrap">JavaScript</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                    <img src="https://www.w3.org/html/logo/badge/html5-badge-h-solo.png"
                                        class="h-6" alt="HTML5">
                                    <span class="flex-1 ms-3 whitespace-nowrap">HTML5</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->

    <section id="portfolio" class="section-padding bg-gray-100 dark:bg-gray-900 fade-in py-20">
        <!-- Section Header -->
        <div class="flex flex-col items-center justify-center mb-12">
            <span
                class="bg-blue-100 text-blue-800 text-lg font-bold px-4 py-2 rounded-xl dark:bg-blue-900 dark:text-blue-300 mb-4">
                Project Experience
            </span>
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white text-center">
                Recent Projects
            </h2>
            <p class="mt-4 text-gray-600 dark:text-gray-400 text-center max-w-2xl">
                Here are some of the projects I've worked on. Each project represents unique challenges and solutions.
            </p>
        </div>

        <!-- Projects Grid Container -->
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Project Card 1 -->
                <div class="project-card group">
                    <div
                        class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl">
                        <div class="relative overflow-hidden">
                            <!-- Project Image -->
                            <img class="w-full h-48 object-cover object-center transform transition-transform duration-500 group-hover:scale-110"
                                src="{{ asset('assets/img/image.png') }}" alt="Project 1" />
                            <!-- Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-4 left-4">
                                    <span class="px-3 py-1 bg-blue-600 text-white text-sm rounded-full">Web App</span>
                                </div>
                            </div>
                        </div>

                        <!-- Project Content -->
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                                E-Commerce Platform
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">
                                A full-featured e-commerce platform built with Laravel and Vue.js. Includes user
                                authentication, product management, and payment integration.
                            </p>

                            <!-- Tech Stack -->
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 text-sm rounded-full">Laravel</span>
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 text-sm rounded-full">Vue.js</span>
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 text-sm rounded-full">MySQL</span>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex justify-between items-center">
                                <a href="#"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-colors duration-300">
                                    View Project
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 transition-colors duration-300">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Card 2 -->
                <div class="project-card group">
                    <div
                        class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl">
                        <div class="relative overflow-hidden">
                            <img class="w-full h-48 object-cover object-center transform transition-transform duration-500 group-hover:scale-110"
                                src="{{ asset('assets/img/image.png') }}" alt="Project 2" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-4 left-4">
                                    <span class="px-3 py-1 bg-green-600 text-white text-sm rounded-full">Mobile
                                        App</span>
                                </div>
                            </div>
                        </div>

                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                                Task Management System
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">
                                A collaborative task management system with real-time updates, team management, and
                                progress tracking features.
                            </p>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 text-sm rounded-full">React</span>
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 text-sm rounded-full">Node.js</span>
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 text-sm rounded-full">MongoDB</span>
                            </div>

                            <div class="flex justify-between items-center">
                                <a href="#"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-colors duration-300">
                                    View Project
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 transition-colors duration-300">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Card 3 -->
                <div class="project-card group">
                    <div
                        class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl">
                        <div class="relative overflow-hidden">
                            <img class="w-full h-48 object-cover object-center transform transition-transform duration-500 group-hover:scale-110"
                                src="{{ asset('assets/img/image.png') }}" alt="Project 3" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-4 left-4">
                                    <span class="px-3 py-1 bg-purple-600 text-white text-sm rounded-full">API
                                        Service</span>
                                </div>
                            </div>
                        </div>

                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                                Analytics Dashboard
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">
                                Real-time analytics dashboard with customizable widgets, data visualization, and
                                automated reporting features.
                            </p>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 text-sm rounded-full">Python</span>
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 text-sm rounded-full">Django</span>
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 text-sm rounded-full">PostgreSQL</span>
                            </div>

                            <div class="flex justify-between items-center">
                                <a href="#"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-colors duration-300">
                                    View Project
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 transition-colors duration-300">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View All Projects Button -->
            <div class="flex justify-center mt-12">
                <a href="#"
                    class="inline-flex items-center px-6 py-3 text-base font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-colors duration-300">
                    View All Projects
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section-padding bg-white dark:bg-gray-800 fade-in">
        <!-- Your existing contact content -->
        <div class="w-full p-4 text-center bg-white  sm:p-8 dark:bg-gray-800 dark:border-gray-700">
            <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Hubungi saya untuk kenal lebih dekat</h5>
            <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Jika Anda ingin berbincang atau ada
                yang ingin ditanyakan, saya di sini untuk Anda. Ayo hubungi saya sekarang!</p>
            <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
                <a href="#"
                    class="w-full sm:w-auto bg-gray-800 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-green-400 dark:focus:ring-gray-700">
                    <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab"
                        data-icon="whatsapp" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="none" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                            clip-rule="evenodd" />
                        <path fill="currentColor"
                            d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                    </svg>
                    <div class="text-left rtl:text-right">
                        <div class="mb-1 text-xs">Hubungi Melalui</div>
                        <div class="-mt-1 font-sans text-sm font-semibold">WhatsApp</div>
                    </div>
                </a>
                <a href="#"
                    class="w-full sm:w-auto bg-gray-800 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-indigo-400 dark:focus:ring-gray-700">
                    <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab"
                        data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                            clip-rule="evenodd" />
                    </svg>
                    <div class="text-left rtl:text-right">
                        <div class="mb-1 text-xs">Ikuti saya</div>
                        <div class="-mt-1 font-sans text-sm font-semibold">Instagram</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="py-2 lg:py-8 px-4 mx-auto max-w-screen-md">
            <form action="#" class="space-y-8">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                        email</label>
                    <input type="email" id="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="name@flowbite.com" required>
                </div>
                <div>
                    <label for="subject"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                    <input type="text" id="subject"
                        class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="Let us know how we can help you" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your
                        message</label>
                    <textarea id="message" rows="6"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Leave a comment..."></textarea>
                </div>
                <button type="submit"
                    class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send
                    message</button>
            </form>
        </div>
    </section>

    <!-- Footer remains the same -->
    <footer class="bg-gray-50 dark:bg-gray-900">
        <!-- Your existing footer content -->
        <div class="mx-auto w-full max-w-screen-xl p-6 lg:py-8">
            <div class="md:flex md:justify-between md:items-center">
                <!-- Logo and Branding -->
                <div class="mb-6 md:mb-0">
                    <a href="https://flowbite.com/" class="flex items-center">
                        <svg class="w-[39px] h-[39px] text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.9" d="m8 8-4 4 4 4m8 0 4-4-4-4m-2-3-4 14" />
                        </svg>
                        {{-- <img src="{{ asset('assets/code.svg') }}" class="h-10 me-3" alt="Logo" /> --}}
                        <span class="text-2xl font-bold text-gray-900 dark:text-white">Imronmf</span>
                    </a>
                    {{-- <p class="mt-2 text-gray-500 dark:text-gray-400">
                        Membangun solusi web yang inovatif dan efisien.
                    </p> --}}
                </div>

                <!-- Links Section -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                    <div>
                        <h2 class="mb-4 text-sm font-semibold text-gray-900 uppercase dark:text-white">Dibuat Dengan
                        </h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-2">
                                <a href="https://laravel.com/" class="hover:underline">Laravel</a>
                            </li>
                            <li class="mb-2">
                                <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-4 text-sm font-semibold text-gray-900 uppercase dark:text-white">Tautan</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-2"><a href="#" class="hover:underline">Beranda</a></li>
                            <li class="mb-2"><a href="#" class="hover:underline">Tentang Saya</a></li>
                            <li class="mb-2"><a href="#" class="hover:underline">Portfolio</a></li>
                            <li class="mb-2"><a href="#" class="hover:underline">Blog</a></li>
                            <li><a href="#" class="hover:underline">Kontak</a></li>
                        </ul>
                    </div>

                    <div>
                        <h2 class="mb-4 text-sm font-semibold text-gray-900 uppercase dark:text-white">Ikuti Saya</h2>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Facebook</span>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M22 5.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.343 8.343 0 0 1-2.605.981A4.13 4.13 0 0 0 15.85 4a4.068 4.068 0 0 0-4.1 4.038c0 .31.035.618.105.919A11.705 11.705 0 0 1 3.4 4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 6.1 13.635a4.192 4.192 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 2 18.184 11.732 11.732 0 0 0 8.291 20 11.502 11.502 0 0 0 19.964 8.5c0-.177 0-.349-.012-.523A8.143 8.143 0 0 0 22 5.892Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Twitter</span>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Instagram</span>
                            </a>

                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z"
                                        clip-rule="evenodd" />
                                    <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                                </svg>
                                <span class="sr-only">LinkedIn</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <hr class="my-6 border-gray-200 dark:border-gray-700" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
                    © 2025 Dibuat dengan ❤️ oleh <a href="https://flowbite.com/"
                        class="hover:underline font-semibold">Imronmf</a>. All Rights Reserved.
                </span>
            </div>
        </div>
    </footer>

    <!-- Add intersection observer for fade-in effect -->
    <script>
        // Scroll progress indicator
        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.getElementById('scroll-progress').style.width = scrolled + '%';
        });

        // Fade-in animation
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.fade-in').forEach((el) => observer.observe(el));

        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>

</html>
