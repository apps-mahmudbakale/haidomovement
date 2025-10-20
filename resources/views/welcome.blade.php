<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sokotoforum.ng/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Sep 2025 18:10:27 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Shamsuddeen Aliyu (Haido) Solidarity Movement</title>
    <script>
        // Configure Tailwind to use class-based dark mode
        if (typeof window !== 'undefined') {
            // Force Tailwind to use class-based dark mode
            document.documentElement.classList.add('dark-mode-class-based');
        }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Force class-based dark mode for all elements */
        body {
            background-color: var(--bg-color);
            color: var(--text-color);
        }

        /* Dark mode overrides for Tailwind classes */
        body.dark .bg-white {
            background-color: var(--bg-dark) !important;
        }

        body.dark .bg-gray-50 {
            background-color: var(--card-dark) !important;
        }

        body.dark .bg-green-50 {
            background-color: var(--card-dark) !important;
        }

        body.dark .bg-gray-100 {
            background-color: var(--card-dark) !important;
        }

        body.dark .text-gray-800 {
            color: var(--text-dark) !important;
        }

        body.dark .text-gray-700 {
            color: var(--text-dark) !important;
        }

        body.dark .text-gray-600 {
            color: var(--text-secondary-dark) !important;
        }

        body.dark .text-gray-500 {
            color: var(--text-secondary-dark) !important;
        }

        body.dark .text-gray-400 {
            color: var(--text-secondary-dark) !important;
        }

        body.dark .border-gray-200 {
            border-color: var(--border-dark) !important;
        }

        body.dark .border-gray-300 {
            border-color: var(--border-dark) !important;
        }

        /* Gradient backgrounds for dark mode */
        body.dark .bg-gradient-to-br.from-gray-50.to-gray-100 {
            background: linear-gradient(to bottom right, var(--card-dark), var(--bg-dark)) !important;
        }

        body.dark .bg-gradient-to-br.from-green-50.to-green-100 {
            background: linear-gradient(to bottom right, var(--card-dark), var(--bg-dark)) !important;
        }

        /* Card and section backgrounds */
        body.dark section.bg-white,
        body.dark .card {
            background-color: var(--card-dark) !important;
        }

        /* Footer dark mode */
        body.dark footer {
            background-color: var(--footer-bg-dark) !important;
            color: var(--footer-text-dark) !important;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <header id="header" class="py-4 px-6 transition-all duration-300 bg-white dark:bg-gray-900">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="flex items-center">
                <!-- Updated Logo -->
                <img src="./logo.png" alt="Dr. Shamsuddeen Aliyu Haido " class="h-20 md:h-24 logo-fade-in">
            </a>

            <nav class="hidden md:flex items-center">
                <a href="#about" class="nav-link text-gray-800 dark:text-gray-200 hover:text-green-700 dark:hover:text-green-400">About</a>
                <a href="#objectives" class="nav-link text-gray-800 dark:text-gray-200 hover:text-green-700 dark:hover:text-green-400">Objectives</a>
                <a href="/register" class="nav-link text-gray-800 dark:text-gray-200 hover:text-green-700 dark:hover:text-green-400">Join Movement</a>

                <button id="theme-toggle" class="ml-6 p-2 rounded-full bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 focus:outline-none micro-animation transition-colors duration-200">
                    <i id="theme-icon" class="fas fa-moon text-gray-700 dark:text-yellow-300"></i>
                </button>
            </nav>

            <button id="mobile-menu-button" class="md:hidden p-2 rounded-md text-gray-800 dark:text-gray-200 focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div id="overlay" class="overlay"></div>
    <div id="mobile-menu" class="mobile-menu p-6">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-xl font-bold text-green-700 dark:text-green-500">Menu</h2>
            <button id="close-menu" class="p-2 rounded-md focus:outline-none text-gray-800 dark:text-gray-200">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        <nav class="flex flex-col space-y-4">
            <a href="#about" class="py-2 text-gray-800 dark:text-gray-200 hover:text-green-700 dark:hover:text-green-400 border-b border-gray-200 dark:border-gray-700">About</a>
            <a href="#objectives" class="py-2 text-gray-800 dark:text-gray-200 hover:text-green-700 dark:hover:text-green-400 border-b border-gray-200 dark:border-gray-700">Objectives</a>
            <a href="registration.html" class="py-2 text-gray-800 dark:text-gray-200 hover:text-green-700 dark:hover:text-green-400 border-b border-gray-200 dark:border-gray-700">Join SAF</a>

            <div class="flex items-center mt-4">
                <span class="mr-3 text-gray-800 dark:text-gray-200">Theme:</span>
                <button id="mobile-theme-toggle" class="p-2 rounded-full bg-gray-200 dark:bg-gray-700 focus:outline-none">
                    <i id="mobile-theme-icon" class="fas fa-moon text-gray-800 dark:text-yellow-300"></i>
                </button>
            </div>
        </nav>
    </div>

    <!-- Hero Section -->
    <section class="py-20 md:py-28 bg-gradient-to-br from-green-50 to-green-100 dark:from-gray-900 dark:to-gray-800 transition-all duration-500">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-10 md:mb-0" data-aos="fade-up" data-aos-duration="1000">
                    <!-- Added Logo to Hero Section -->
                    <img src="./logo.png" alt="Dr. Shamsuddeen Aliyu Haido" class="h-32 md:h-40 mx-auto md:mx-0 mb-6 logo-fade-in" data-aos="fade-down" data-aos-delay="200">
                    <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 mb-8">"Unity and Progress Through Visionary Leadership"</p>
                    <p class="text-gray-700 dark:text-gray-300 mb-8 leading-relaxed">
                        A grassroots movement dedicated to supporting Dr. Shamsuddeen Aliyu Haido's vision for transformative leadership and sustainable development in Sokoto State.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="registration.html" class="btn-animated bg-green-700 hover:bg-green-800 text-white font-medium py-3 px-6 rounded-lg transition-all duration-300 text-center">
                            <i class="fas fa-users mr-2"></i> Join the Movement
                        </a>
                        <a href="#about" class="btn-animated bg-transparent border-2 border-green-700 text-green-700 dark:text-green-500 hover:bg-green-700 hover:text-white dark:hover:bg-green-800 font-medium py-3 px-6 rounded-lg transition-all duration-300 text-center">
                            <i class="fas fa-info-circle mr-2"></i> Learn More
                        </a>
                    </div>

                    <!-- Mobile app download badges -->
                    <div class="mt-6 flex items-center justify-center sm:justify-start space-x-3" aria-hidden="false">
                        <a href="https://apps.apple.com/app/your-app-id" target="_blank" rel="noopener noreferrer" class="inline-flex items-center bg-black text-white px-4 py-2 rounded-lg hover:opacity-90" data-store="appstore" aria-label="Download on the App Store">
                            <i class="fab fa-apple text-2xl mr-3"></i>
                            <div class="text-left">
                                <div class="text-xs">Download on the</div>
                                <div class="font-semibold">App Store</div>
                            </div>
                        </a>

                        <a href="https://play.google.com/store/apps/details?id=your.app.id" target="_blank" rel="noopener noreferrer" class="inline-flex items-center bg-black text-white px-4 py-2 rounded-lg hover:opacity-90" data-store="googleplay" aria-label="Get it on Google Play">
                            <i class="fab fa-google-play text-2xl mr-3"></i>
                            <div class="text-left">
                                <div class="text-xs">GET IT ON</div>
                                <div class="font-semibold">Google Play</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                    <div class="relative w-full max-w-md">
                        <div class="absolute inset-0 bg-green-200 dark:bg-green-900 rounded-3xl transform rotate-6 scale-110 opacity-30"></div>
                        <div class="relative bg-white dark:bg-gray-800 rounded-3xl shadow-xl p-8 border border-green-100 dark:border-green-900">
                            <div class="flex justify-center mb-6">
                                <i class="fas fa-users text-6xl text-green-600 dark:text-green-500"></i>
                            </div>
                            <h3 class="text-xl md:text-2xl font-bold text-center text-gray-800 dark:text-gray-200 mb-4">Our Movement's Pillars</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-center mb-6">
                                Uniting diverse groups across Sokoto State in support of Dr. Shamsuddeen's transformative vision.
                            </p>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="flex flex-col items-center p-3 rounded-lg bg-green-50 dark:bg-green-900/30">
                                    <i class="fas fa-users text-2xl text-green-600 dark:text-green-400 mb-2"></i>
                                    <p class="text-sm text-center text-gray-700 dark:text-gray-300">Youth & Community Leaders</p>
                                </div>
                                <div class="flex flex-col items-center p-3 rounded-lg bg-green-50 dark:bg-green-900/30">
                                    <i class="fas fa-graduation-cap text-2xl text-green-600 dark:text-green-400 mb-2"></i>
                                    <p class="text-sm text-center text-gray-700 dark:text-gray-300">Students & Academics</p>
                                </div>
                                <div class="flex flex-col items-center p-3 rounded-lg bg-green-50 dark:bg-green-900/30">
                                    <i class="fas fa-hands-helping text-2xl text-green-600 dark:text-green-400 mb-2"></i>
                                    <p class="text-sm text-center text-gray-700 dark:text-gray-300">Grassroots Supporters</p>
                                </div>
                                <div class="flex flex-col items-center p-3 rounded-lg bg-green-50 dark:bg-green-900/30">
                                    <i class="fas fa-heart text-2xl text-green-600 dark:text-green-400 mb-2"></i>
                                    <p class="text-sm text-center text-gray-700 dark:text-gray-300">Community Volunteers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white dark:bg-gray-900 transition-all duration-500">
        <div class="container mx-auto px-6">
            <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-800 dark:text-gray-200 text-center mb-8" data-aos="fade-up">About The Movement</h2>

            <div class="max-w-4xl mx-auto mb-16" data-aos="fade-up" data-aos-delay="100">
                <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed text-justify">
                    The Dr. Shamsuddeen Aliyu Haido Solidarity Movement emerged from a shared vision of progress and development for Sokoto State. Founded by passionate supporters who believe in Dr. Shamsuddeen's exceptional leadership qualities and commitment to community development, our movement has grown into a powerful force for positive change. We represent a diverse coalition of youth, professionals, community leaders, and citizens united in their support for Dr. Shamsuddeen's transformative agenda. Our strength lies in our collective belief that through his leadership and our united efforts, we can create lasting positive impact across Sokoto State.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card p-8 rounded-xl shadow-md" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex justify-center mb-6">
                        <div class="w-14 h-14 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center">
                            <i class="fas fa-lightbulb text-2xl text-green-600 dark:text-green-400"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-center text-gray-800 dark:text-gray-200 mb-4">Who We Are</h3>
                    <p class="text-gray-600 text-justify dark:text-gray-400 leading-relaxed">
                        The Dr. Shamsuddeen Aliyu Haido Solidarity Movement is a grassroots organization dedicated to supporting the visionary leadership and community development initiatives of Dr. Shamsuddeen Aliyu Haido in Sokoto State.
                    </p>
                </div>

                <div class="card p-8 rounded-xl shadow-md" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex justify-center mb-6">
                        <div class="w-14 h-14 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center">
                            <i class="fas fa-eye text-2xl text-green-600 dark:text-green-400"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-center text-gray-800 dark:text-gray-200 mb-4">Vision</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-justify leading-relaxed">
                        To unite and mobilize supporters of Dr. Shamsuddeen Aliyu Haido's transformative agenda for Sokoto State, creating a strong network of advocates committed to positive change and sustainable development in our communities.
                    </p>
                </div>

                <div class="card p-8 rounded-xl shadow-md" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex justify-center mb-6">
                        <div class="w-14 h-14 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center">
                            <i class="fas fa-bullseye text-2xl text-green-600 dark:text-green-400"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-center text-gray-800 dark:text-gray-200 mb-4">Mission</h3>
                    <p class="text-gray-600 text-justify dark:text-gray-400 leading-relaxed">
                        To promote and support Dr. Shamsuddeen Aliyu Haido's vision for inclusive governance, educational advancement, healthcare improvement, and economic development while fostering unity and progress across all communities in Sokoto State.
                    </p>
                </div>
            </div>

            <!-- Purpose Section -->
            <div class="mt-16" data-aos="fade-up" data-aos-delay="400">
                <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-8 text-center">Our Core Objectives</h3>
                <div class="bg-green-50 dark:bg-gray-800 rounded-xl p-8">
                    <div class="max-w-4xl mx-auto">
                        <p class="text-gray-700 text-justify dark:text-gray-300 mb-6 text-lg leading-relaxed">
                            The Dr. Shamsuddeen Aliyu Haido Solidarity Movement serves as a unified platform for supporters who believe in his vision and commitment to transforming Sokoto State through inclusive leadership and sustainable development initiatives.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <i class="fas fa-users text-green-600 dark:text-green-400 mt-1 mr-3"></i>
                                    <span class="text-gray-700 dark:text-gray-300">Unite supporters and advocates of Dr. Shamsuddeen's vision for Sokoto</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-lightbulb text-green-600 dark:text-green-400 mt-1 mr-3"></i>
                                    <span class="text-gray-700 dark:text-gray-300">Promote his initiatives for educational reform and youth empowerment</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-handshake text-green-600 dark:text-green-400 mt-1 mr-3"></i>
                                    <span class="text-gray-700 dark:text-gray-300">Support community engagement and grassroots development programs</span>
                                </li>
                            </ul>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <i class="fas fa-bullhorn text-green-600 dark:text-green-400 mt-1 mr-3"></i>
                                    <span class="text-gray-700 dark:text-gray-300">Raise awareness about his transformative leadership agenda</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-heart text-green-600 dark:text-green-400 mt-1 mr-3"></i>
                                    <span class="text-gray-700 dark:text-gray-300">Foster unity and collaboration among supporters across all communities</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-hands-helping text-green-600 dark:text-green-400 mt-1 mr-3"></i>
                                    <span class="text-gray-700 dark:text-gray-300">Mobilize resources and support for community development initiatives</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Context & Challenge Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-900 transition-all duration-500">
        <div class="container mx-auto px-6">
            <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-800 dark:text-gray-200 text-center mb-16" data-aos="fade-up">Why We Stand With Dr. Shamsuddeen</h2>

            <div class="max-w-6xl mx-auto">
                <!-- Leadership Qualities -->
                <div class="mb-16" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-green-600 dark:bg-green-700 text-white p-8 rounded-xl">
                        <h3 class="text-2xl font-bold mb-6 text-center">Dr. Shamsuddeen's Leadership Qualities</h3>
                        <p class="text-lg leading-relaxed mb-6 text-center">
                            "Dr. Shamsuddeen Aliyu Haido embodies the qualities of visionary leadership, integrity, and unwavering commitment to community development that Sokoto State needs for transformative progress."
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="text-center">
                                <div class="w-16 h-16 rounded-full bg-white bg-opacity-20 flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-lightbulb text-3xl text-white"></i>
                                </div>
                                <h4 class="font-bold mb-2">Visionary Leader</h4>
                                <p class="text-sm opacity-90">A proven track record of innovative solutions and forward-thinking initiatives</p>
                            </div>
                            <div class="text-center">
                                <div class="w-16 h-16 rounded-full bg-white bg-opacity-20 flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-hands-helping text-3xl text-white"></i>
                                </div>
                                <h4 class="font-bold mb-2">Community Champion</h4>
                                <p class="text-sm opacity-90">Dedicated to grassroots development and community empowerment</p>
                            </div>
                            <div class="text-center">
                                <div class="w-16 h-16 rounded-full bg-white bg-opacity-20 flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-star text-3xl text-white"></i>
                                </div>
                                <h4 class="font-bold mb-2">Proven Excellence</h4>
                                <p class="text-sm opacity-90">Distinguished career marked by integrity, achievements, and service</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Our Vision -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-gradient-to-r from-green-600 to-green-800 text-white p-8 rounded-xl">
                        <h3 class="text-2xl font-bold mb-6">Our Shared Vision</h3>
                        <blockquote class="text-xl font-medium italic mb-6">
                            "Together with Dr. Shamsuddeen Aliyu Haido's leadership, we envision a transformed Sokoto State where every citizen has access to quality education, healthcare, and economic opportunities. A state where progress, unity, and sustainable development are not just goals, but realities."
                        </blockquote>
                        <p class="text-lg opacity-90">
                            This vision requires the collective effort of all supporters and stakeholders. Through our solidarity movement, we stand united behind Dr. Shamsuddeen's leadership to make this transformative vision a reality for all communities in Sokoto State.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Objectives Section -->
    <section id="objectives" class="py-20 bg-green-50 dark:bg-gray-800 transition-all duration-500">
        <div class="container mx-auto px-6">
            <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-800 dark:text-gray-200 text-center mb-16" data-aos="fade-up">Movement Objectives</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Objective 1 -->
                <div class="card p-6 rounded-xl shadow-md" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center mr-4">
                            <i class="fas fa-users text-2xl text-green-600 dark:text-green-400"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 dark:text-gray-200">Mobilize Support</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-3">
                        To unite and mobilize diverse groups of supporters who believe in Dr. Shamsuddeen's vision for a progressive and developed Sokoto State.
                    </p>
                </div>

                <!-- Objective 2 -->
                <div class="card p-6 rounded-xl shadow-md" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center mr-4">
                            <i class="fas fa-bullhorn text-2xl text-green-600 dark:text-green-400"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 dark:text-gray-200">Promote Vision</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-3">
                        To actively promote and support Dr. Shamsuddeen's transformative vision and initiatives for comprehensive development across Sokoto State.
                    </p>
                </div>

                <!-- Objective 3 -->
                <div class="card p-6 rounded-xl shadow-md" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center mr-4">
                            <i class="fas fa-handshake text-2xl text-green-600 dark:text-green-400"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 dark:text-gray-200">Community Engagement</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-3">
                        To facilitate grassroots engagement and support for Dr. Shamsuddeen's community development initiatives across all local government areas.
                    </p>
                </div>

                <!-- Objective 4 -->
                <div class="card p-6 rounded-xl shadow-md" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center mr-4">
                            <i class="fas fa-graduation-cap text-2xl text-green-600 dark:text-green-400"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 dark:text-gray-200">Youth Empowerment</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-3">
                        To support Dr. Shamsuddeen's initiatives for youth development, education, and skills acquisition programs across Sokoto State.
                    </p>
                </div>

                <!-- Objective 5 -->
                <div class="card p-6 rounded-xl shadow-md" data-aos="fade-up" data-aos-delay="500">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center mr-4">
                            <i class="fas fa-hands-helping text-2xl text-green-600 dark:text-green-400"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 dark:text-gray-200">Resource Mobilization</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-3">
                        To coordinate and mobilize resources, expertise, and support for implementing Dr. Shamsuddeen's development agenda effectively.
                    </p>
                </div>

                <!-- Objective 6 -->
                <div class="card p-6 rounded-xl shadow-md" data-aos="fade-up" data-aos-delay="600">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center mr-4">
                            <i class="fas fa-heart text-2xl text-green-600 dark:text-green-400"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 dark:text-gray-200">Unity & Progress</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-3">
                        To foster unity and collaboration among all supporters while promoting inclusive progress and sustainable development initiatives.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section id="action" class="py-20 bg-gradient-to-br from-green-600 to-green-800 dark:from-green-900 dark:to-green-700 text-white transition-all duration-500">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16" data-aos="fade-up">Stand With Dr. Shamsuddeen</h2>

            <div class="max-w-4xl mx-auto text-center">
                <div data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-2xl font-bold mb-8">Your Support Makes the Difference</h3>
                    <p class="mb-8 text-lg text-gray-100 leading-relaxed">
                        Join the growing movement of supporters who believe in Dr. Shamsuddeen Aliyu Haido's vision for a transformed Sokoto State. Your participation, whether as a community volunteer, youth advocate, or resource person, strengthens our collective impact.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                        <div class="bg-white bg-opacity-10 rounded-lg p-6">
                            <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-user-plus text-2xl text-green-600"></i>
                            </div>
                            <h4 class="font-bold mb-2">Join the Movement</h4>
                            <p class="text-sm opacity-90">Become part of our growing network of dedicated supporters and advocates</p>
                        </div>

                        <div class="bg-white bg-opacity-10 rounded-lg p-6">
                            <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-hands-helping text-2xl text-green-600"></i>
                            </div>
                            <h4 class="font-bold mb-2">Volunteer</h4>
                            <p class="text-sm opacity-90">Support our grassroots initiatives and community engagement programs</p>
                        </div>

                        <div class="bg-white bg-opacity-10 rounded-lg p-6">
                            <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-bullhorn text-2xl text-green-600"></i>
                            </div>
                            <h4 class="font-bold mb-2">Spread the Vision</h4>
                            <p class="text-sm opacity-90">Help share Dr. Shamsuddeen's transformative message in your community</p>
                        </div>

                        <div class="bg-white bg-opacity-10 rounded-lg p-6">
                            <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-users text-2xl text-green-600"></i>
                            </div>
                            <h4 class="font-bold mb-2">Build Networks</h4>
                            <p class="text-sm opacity-90">Connect with other supporters and strengthen our collective impact</p>
                        </div>
                    </div>

                    <div class="bg-white bg-opacity-10 rounded-xl p-8 mb-8">
                        <p class="font-medium text-lg mb-4">
                            "Today, we invite you to be part of a historic movement that stands with Dr. Shamsuddeen Aliyu Haido's vision for progress. Your support, your voice, and your commitment are crucial in our journey toward a better Sokoto State. Together, we can amplify his message of hope, unity, and transformative development."
                        </p>
                        <p class="font-medium italic text-lg">
                            Join us in supporting Dr. Shamsuddeen's vision for a prosperous, educated, and united Sokoto State. May Allah (SWT) guide our steps, bless our efforts, and crown our movement with success. <strong>Ameen.</strong>
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6">
                        <a href="registration.html" class="btn-animated bg-white text-green-700 hover:bg-gray-100 font-bold py-4 px-8 rounded-lg transition-all duration-300 text-lg shadow-lg">
                            <i class="fas fa-users mr-2"></i> Join the Movement
                        </a>
                        <a href="#about" class="btn-animated border-2 border-white text-white hover:bg-white hover:text-green-700 font-medium py-4 px-8 rounded-lg transition-all duration-300 text-lg">
                            <i class="fas fa-info-circle mr-2"></i> Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center mb-8">
                <div class="mb-6 md:mb-0">
                    <img src="./logo.png" alt="Dr. Shamsuddeen Aliyu Haido" class="h-16">
                </div>

                <div class="flex items-center space-x-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-green-700 hover:bg-green-600 flex items-center justify-center transition-all duration-300">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-green-700 hover:bg-green-600 flex items-center justify-center transition-all duration-300">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-green-700 hover:bg-green-600 flex items-center justify-center transition-all duration-300">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-green-700 hover:bg-green-600 flex items-center justify-center transition-all duration-300">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <!-- Download badges -->
                    <div class="ml-4 flex items-center space-x-3">
                        <a href="https://apps.apple.com/app/your-app-id" target="_blank" rel="noopener noreferrer" class="inline-flex items-center bg-black text-white px-3 py-2 rounded-lg hover:opacity-90" data-store="appstore" aria-label="Download on the App Store">
                            <i class="fab fa-apple text-xl mr-2"></i>
                            <span class="text-sm">App Store</span>
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=your.app.id" target="_blank" rel="noopener noreferrer" class="inline-flex items-center bg-black text-white px-3 py-2 rounded-lg hover:opacity-90" data-store="googleplay" aria-label="Get it on Google Play">
                            <i class="fab fa-google-play text-xl mr-2"></i>
                            <span class="text-sm">Google Play</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                    <div>
                        <h4 class="text-lg font-bold mb-4">Contact Us</h4>
                        <p class="mb-2 flex items-start">
                            <i class="fas fa-map-marker-alt mr-3 mt-1"></i>
                            <span>Movement Headquarters<br>
                                Sokoto City<br>
                                Sokoto State, Nigeria</span>
                        </p>
                        <p class="mb-2 flex items-start">
                            <i class="fas fa-phone-alt mr-3 mt-1"></i>
                            <span>+234 XXX XXX XXXX<br>
                                +234 XXX XXX XXXX</span>
                        </p>
                        <p class="mb-2 flex items-start">
                            <i class="fas fa-envelope mr-3 mt-1"></i>
                            <span>contact@drshamsmovement.org</span>
                        </p>
                    </div>

                    <div>
                        <h4 class="text-lg font-bold mb-4">Quick Links</h4>
                        <ul class="space-y-2">
                            <li><a href="#about" class="hover:text-green-400 transition-all duration-300">About the Movement</a></li>
                            <li><a href="#objectives" class="hover:text-green-400 transition-all duration-300">Our Objectives</a></li>
                            <li><a href="registration.html" class="hover:text-green-400 transition-all duration-300">Join the Movement</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-lg font-bold mb-4">Get Involved</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="hover:text-green-400 transition-all duration-300">Volunteer Opportunities</a></li>
                            <li><a href="#" class="hover:text-green-400 transition-all duration-300">Community Programs</a></li>
                            <li><a href="#" class="hover:text-green-400 transition-all duration-300">Support Our Cause</a></li>
                        </ul>
                    </div>
                </div>

                <div class="text-center text-gray-400 text-sm">
                    <p>&copy; 2025 Dr. Shamsuddeen Aliyu Haido Solidarity Movement. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js" defer></script>
    <script>
        // Debug script for main page dark mode
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Main page dark mode debug loaded');

            // Monitor theme changes
            const observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                        console.log('Body class changed:', document.body.className);
                        const isDark = document.body.classList.contains('dark');
                        console.log('Is dark mode:', isDark);

                        // Log CSS custom property values
                        const computedStyle = getComputedStyle(document.body);
                        console.log('CSS Variables:', {
                            bgColor: computedStyle.getPropertyValue('--bg-color'),
                            textColor: computedStyle.getPropertyValue('--text-color'),
                            cardBg: computedStyle.getPropertyValue('--card-bg')
                        });
                    }
                });
            });

            observer.observe(document.body, {
                attributes: true,
                attributeFilter: ['class']
            });

            // Initial state
            console.log('Initial body class:', document.body.className);
            console.log('Theme toggle button exists:', !!document.getElementById('theme-toggle'));
        });

        // Download badge click tracking
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('a[data-store]').forEach(el => {
                el.addEventListener('click', (e) => {
                    const store = el.getAttribute('data-store');
                    console.log(`Download badge clicked: ${store}`);
                    // Example: push to dataLayer if available
                    if (window.dataLayer) {
                        window.dataLayer.push({ event: 'app_download_click', store });
                    }
                });
            });
        });
    </script>
</body>
</html>
