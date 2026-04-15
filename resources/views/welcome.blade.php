<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Vikash Mishra | Laravel Developer Portfolio</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('logo1.png') }}?v=2" type="image/png">
    <link rel="shortcut icon" href="{{ asset('logo1.png') }}?v=2">
    <!-- Tailwind CSS + Font Awesome + Google Fonts + AOS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        * { scroll-behavior: smooth; }
        body { font-family: 'Inter', sans-serif; background: #0a0f1a; overflow-x: hidden; }
        .orb { position: fixed; width: 60vw; height: 60vw; border-radius: 50%; filter: blur(90px); z-index: -2; pointer-events: none; animation: floatOrb 20s infinite alternate ease-in-out; }
        .orb-1 { top: -20%; left: -20%; background: radial-gradient(circle, rgba(59,130,246,0.25), rgba(139,92,246,0.1)); }
        .orb-2 { bottom: -20%; right: -20%; background: radial-gradient(circle, rgba(6,182,212,0.2), rgba(59,130,246,0.08)); animation-duration: 25s; }
        @keyframes floatOrb { 0% { transform: translate(0,0) scale(1); opacity:0.3; } 100% { transform: translate(5%,8%) scale(1.2); opacity:0.6; } }
        .glass { background: rgba(15,23,42,0.65); backdrop-filter: blur(8px); border: 1px solid rgba(59,130,246,0.2); }
        .glass-card { background: rgba(15,23,42,0.6); backdrop-filter: blur(4px); transition: all 0.3s cubic-bezier(0.2,0.9,0.4,1.1); border: 1px solid rgba(59,130,246,0.15); }
        .glass-card:hover { transform: translateY(-6px); border-color: rgba(59,130,246,0.6); box-shadow: 0 20px 35px -12px rgba(0,0,0,0.5); }
        .btn-glow { position: relative; overflow: hidden; transition: all 0.3s; }
        .btn-glow:before { content: ""; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.15), transparent); transition: left 0.5s; }
        .btn-glow:hover:before { left: 100%; }
        .timeline-dot { box-shadow: 0 0 0 4px rgba(59,130,246,0.3); }
        .skill-bar { height: 6px; background: #1e293b; border-radius: 10px; overflow: hidden; }
        .skill-progress { width: 0%; height: 100%; background: linear-gradient(90deg, #3b82f6, #8b5cf6); border-radius: 10px; transition: width 1s ease-out; }
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #0f172a; }
        ::-webkit-scrollbar-thumb { background: #3b82f6; border-radius: 10px; }
        .active-nav { color: #3b82f6; font-weight: 600; position: relative; }
        .active-nav:after { content: ''; position: absolute; bottom: -6px; left: 0; width: 100%; height: 2px; background: #3b82f6; border-radius: 2px; }
        .animate-pulse-slow { animation: pulseSlow 4s infinite; }
        @keyframes pulseSlow { 0%,100% { box-shadow: 0 0 0 0 rgba(59,130,246,0.4); } 50% { box-shadow: 0 0 0 15px rgba(59,130,246,0); } }
        /* Fix for typing container */
        #typed-role { white-space: normal; word-break: break-word; display: inline-block; }
    </style>
</head>
<body class="text-white">

    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>

    <!-- Navbar - Fully Responsive -->
    <nav id="navbar" class="fixed top-0 w-full z-50 transition-all duration-300 glass shadow-lg">
        <div class="container mx-auto px-4 sm:px-6 py-3 md:py-4 flex justify-between items-center">
            <a href="#home" class="flex items-center gap-2 md:gap-3 group cursor-pointer">
                <!-- Logo - responsive size -->
                <img src="{{ asset('logo.png') }}" 
                     alt="Logo" 
                     class="h-8 sm:h-10 md:h-12 w-auto transition duration-300 group-hover:scale-110">
                <!-- Brand text - smaller on mobile -->
                <span class="text-base sm:text-lg md:text-2xl font-extrabold bg-gradient-to-r from-blue-400 to-indigo-400 bg-clip-text text-transparent">
                    Vikash Mishra
                </span>
            </a>
            <!-- Desktop Navigation -->
            <div class="hidden md:flex space-x-6 lg:space-x-8 text-sm font-medium">
                <a href="#home" class="nav-link hover:text-blue-400 transition">Home</a>
                <a href="#journey" class="nav-link hover:text-blue-400 transition">Journey</a>
                <a href="#projects" class="nav-link hover:text-blue-400 transition">Projects</a>
                <a href="#skills" class="nav-link hover:text-blue-400 transition">Skills</a>
                <a href="#contact" class="nav-link hover:text-blue-400 transition">Contact</a>
            </div>
            <!-- Mobile Hamburger Button -->
            <div class="md:hidden">
                <button id="mobileBtn" class="text-blue-400 text-2xl focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="md:hidden hidden glass flex-col px-4 py-4 space-y-3 border-t border-blue-500/20">
            <a href="#home" class="mobile-nav-link block py-2 text-base hover:text-blue-400 transition">Home</a>
            <a href="#journey" class="mobile-nav-link block py-2 text-base hover:text-blue-400 transition">Journey</a>
            <a href="#projects" class="mobile-nav-link block py-2 text-base hover:text-blue-400 transition">Projects</a>
            <a href="#skills" class="mobile-nav-link block py-2 text-base hover:text-blue-400 transition">Skills</a>
            <a href="#contact" class="mobile-nav-link block py-2 text-base hover:text-blue-400 transition">Contact</a>
        </div>
    </nav>

    <!-- Hero Section - Completely Mobile Optimized -->
    <section id="home" class="min-h-screen flex items-center justify-center relative pt-20 pb-12 overflow-hidden">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Stack vertically on mobile, row on desktop -->
            <div class="flex flex-col lg:flex-row items-center justify-center gap-8 md:gap-12 lg:gap-16">
                
                <!-- Left Content - Text Section -->
                <div class="text-center lg:text-left w-full lg:w-1/2 order-2 lg:order-1" data-aos="fade-right" data-aos-duration="1000">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 bg-blue-500/10 border border-blue-500/30 rounded-full px-3 py-1 md:px-4 md:py-1.5 mb-4 md:mb-6">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        <span class="text-xs md:text-sm text-blue-300 font-medium">Open to work</span>
                    </div>
                    
                    <!-- Heading - responsive text size -->
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight mb-3 md:mb-4">
                        Hi, I'm <span class="bg-gradient-to-r from-blue-400 to-indigo-400 bg-clip-text text-transparent">Vikash Mishra</span>
                    </h1>
                    
                    <!-- Typing animation with proper wrapping -->
                    <div class="flex flex-wrap justify-center lg:justify-start items-center gap-1 text-xl sm:text-2xl md:text-3xl lg:text-4xl font-semibold mb-4 md:mb-6">
                        <span class="text-gray-300">I'm a</span>
                        <span id="typed-role" class="text-blue-400 border-r-2 border-blue-400 inline-block max-w-full break-words"></span>
                    </div>
                    
                    <!-- Description -->
                    <p class="text-gray-300 text-sm sm:text-base md:text-lg leading-relaxed mb-6 md:mb-8 border-l-4 border-blue-500 pl-3 md:pl-5 text-center lg:text-left">
                        Laravel Developer with experience in PHP, Laravel, API development & database optimization. Passionate about clean code and scalable web apps.
                    </p>
                    
                    <!-- Buttons - stack vertically on mobile, row on tablet and up -->
                    <div class="flex flex-col sm:flex-row gap-3 md:gap-4 justify-center lg:justify-start">
                        <a href="#projects" class="btn-glow bg-blue-600 hover:bg-blue-500 px-5 md:px-6 py-2.5 md:py-3 rounded-xl font-semibold shadow-lg shadow-blue-600/30 flex items-center justify-center gap-2 text-sm md:text-base transition">
                            <i class="fas fa-code-branch"></i> View Work
                        </a>
                        <a href="#contact" class="border border-blue-500 hover:bg-blue-500/10 px-5 md:px-6 py-2.5 md:py-3 rounded-xl font-semibold flex items-center justify-center gap-2 text-sm md:text-base transition">
                            <i class="fas fa-paper-plane"></i> Hire Me
                        </a>
                        <a href="{{ asset('resume.pdf') }}" download class="bg-slate-800 hover:bg-slate-700 border border-gray-700 px-5 md:px-6 py-2.5 md:py-3 rounded-xl font-semibold transition flex items-center justify-center gap-2 text-sm md:text-base">
                            <i class="fas fa-download"></i> Resume
                        </a>
                    </div>
                    
                    <!-- Social Icons -->
                    <div class="flex gap-5 md:gap-6 mt-6 md:mt-8 justify-center lg:justify-start text-gray-400">
                        <a href="https://github.com/vikash103" target="_blank" class="hover:text-blue-400 text-lg md:text-xl transition"><i class="fab fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/vikash-mishra-717945287/" target="_blank" class="hover:text-blue-400 text-lg md:text-xl transition"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="hover:text-blue-400 text-lg md:text-xl transition"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                
                <!-- Right Content - Profile Image Section -->
                <div data-aos="zoom-in" class="relative order-1 lg:order-2 flex-shrink-0 flex items-center justify-center w-full lg:w-1/2 mb-6 lg:mb-0">
                    <div class="w-48 h-48 sm:w-64 sm:h-64 md:w-72 md:h-72 lg:w-80 lg:h-80 xl:w-96 xl:h-96 rounded-full bg-gradient-to-tr from-blue-500 via-indigo-500 to-purple-500 p-[4px] sm:p-[5px] md:p-[6px] shadow-[0_0_30px_rgba(59,130,246,0.4)] transition-all duration-500 hover:scale-105 mx-auto">
                     <div class="w-[350px] h-[350px] rounded-full overflow-hidden">
    <img src="{{ asset('image.png') }}" 
         class="w-full h-full object-cover object-[center_45%] scale-105">
</div>
                    </div>
                    <div class="absolute -bottom-2 -right-2 sm:-bottom-3 sm:-right-3 md:-bottom-4 md:-right-4 bg-slate-800 rounded-full p-2 md:p-3 shadow-lg border border-blue-500/40 animate-bounce">
                        <i class="fas fa-code text-blue-400 text-sm sm:text-base md:text-xl"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scroll Down Arrow -->
        <div class="absolute bottom-4 md:bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#journey" class="text-gray-400 hover:text-blue-400">
                <i class="fas fa-chevron-down text-xl md:text-2xl"></i>
            </a>
        </div>
    </section>

    <!-- Journey Timeline (unchanged but responsive) -->
    <section id="journey" class="py-16 md:py-24 bg-slate-950/50">
        <div class="container mx-auto px-4 sm:px-6 md:px-12 lg:px-20">
            <div class="text-center mb-12 md:mb-16" data-aos="fade-up">
                <h2 class="text-3xl sm:text-4xl font-bold">My <span class="text-blue-400">Professional Journey</span></h2>
                <div class="w-24 h-1 bg-blue-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-gray-400 mt-4 max-w-2xl mx-auto px-4">From intern to Laravel developer – a story of continuous learning and building impactful solutions.</p>
            </div>
            <div class="relative">
                <div class="absolute left-1/2 transform -translate-x-1/2 w-0.5 h-full bg-blue-500/30 hidden md:block"></div>
                <div class="relative mb-12 md:mb-16" data-aos="fade-right">
                    <div class="md:flex items-center">
                        <div class="md:w-1/2 md:pr-12 text-right hidden md:block"><span class="text-blue-400 font-bold">Aug 2025 – Present</span></div>
                        <div class="md:w-1/2 md:pl-12">
                            <div class="glass-card p-6 rounded-2xl ml-0 md:ml-0 relative">
                                <div class="absolute -left-3 top-6 w-4 h-4 rounded-full bg-blue-500 timeline-dot hidden md:block"></div>
                                <h3 class="text-xl font-bold">PHP Developer</h3>
                                <p class="text-blue-300 text-sm">Saman Technosys Pvt. Ltd.</p>
                                <p class="text-gray-400 text-sm mt-2">Developing web apps with PHP & Laravel, building RESTful APIs, optimizing databases, and collaborating with frontend teams.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative mb-12 md:mb-16" data-aos="fade-left">
                    <div class="md:flex items-center flex-row-reverse">
                        <div class="md:w-1/2 md:pl-12 text-left hidden md:block"><span class="text-blue-400 font-bold">Jan 2025 – Apr 2025</span></div>
                        <div class="md:w-1/2 md:pr-12">
                            <div class="glass-card p-6 rounded-2xl mr-0 md:mr-0 relative">
                                <div class="absolute -right-3 top-6 w-4 h-4 rounded-full bg-blue-500 timeline-dot hidden md:block"></div>
                                <h3 class="text-xl font-bold">Laravel Developer</h3>
                                <p class="text-blue-300 text-sm">SME Consulting Services</p>
                                <p class="text-gray-400 text-sm mt-2">Built REST APIs, authentication, optimized MySQL queries, and enhanced performance.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative mb-12" data-aos="fade-right">
                    <div class="md:flex items-center">
                        <div class="md:w-1/2 md:pr-12 text-right hidden md:block"><span class="text-blue-400 font-bold">Jul 2024 – Sep 2024</span></div>
                        <div class="md:w-1/2 md:pl-12">
                            <div class="glass-card p-6 rounded-2xl ml-0 md:ml-0 relative">
                                <div class="absolute -left-3 top-6 w-4 h-4 rounded-full bg-blue-500 timeline-dot hidden md:block"></div>
                                <h3 class="text-xl font-bold">.NET Developer Intern</h3>
                                <p class="text-blue-300 text-sm">ISA ERP Solutions Pvt. Ltd.</p>
                                <p class="text-gray-400 text-sm mt-2">Worked on ASP.NET Core, SQL Server, and ERP system enhancements.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section (unchanged but ensure responsiveness) -->
    <section id="projects" class="py-16 md:py-24 bg-slate-900/40">
        <div class="container mx-auto px-4 sm:px-6 md:px-12 lg:px-20">
            <div class="text-center mb-12 md:mb-14" data-aos="fade-up">
                <h2 class="text-3xl sm:text-4xl font-bold">Featured <span class="text-blue-400">Projects</span></h2>
                <p class="text-gray-400 mt-3">Real-world solutions I've crafted with Laravel & PHP</p>
            </div>
            <div class="grid sm:grid-cols-2 gap-6 md:gap-8">
                <!-- Project 1 -->
                <div class="glass-card rounded-2xl overflow-hidden group" data-aos="flip-left">
                    <div class="h-48 bg-gradient-to-r from-blue-900/50 to-indigo-900/50 flex items-center justify-center">
                        <i class="fas fa-hospital-user text-6xl text-blue-300 group-hover:scale-110 transition"></i>
                    </div>
                    <div class="p-5 md:p-6">
                        <h3 class="text-xl md:text-2xl font-bold mb-2">Patient Management System</h3>
                        <p class="text-gray-300 text-sm md:text-base">CRUD operations, role-based access (RBAC), normalized MySQL schema, pagination, validation, API integration, query optimization with indexing.</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="text-xs bg-slate-800 px-3 py-1 rounded-full">Laravel</span>
                            <span class="text-xs bg-slate-800 px-3 py-1 rounded-full">MySQL</span>
                            <span class="text-xs bg-slate-800 px-3 py-1 rounded-full">REST API</span>
                        </div>
                        <div class="flex gap-3 mt-5">
                            <a href="#" class="inline-flex items-center gap-2 px-3 md:px-4 py-2 rounded-lg bg-blue-600/20 border border-blue-500 text-blue-300 text-xs md:text-sm font-medium hover:bg-blue-600 hover:text-white transition-all duration-300">
                                <i class="fas fa-external-link-alt text-xs"></i> Live Demo
                            </a>
                            <a href="#" class="inline-flex items-center gap-2 px-3 md:px-4 py-2 rounded-lg bg-slate-800/80 border border-gray-700 text-gray-300 text-xs md:text-sm font-medium hover:bg-slate-700 hover:text-white transition-all duration-300">
                                <i class="fab fa-github"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="glass-card rounded-2xl overflow-hidden group" data-aos="flip-right">
                    <div class="h-48 bg-gradient-to-r from-indigo-900/50 to-purple-900/50 flex items-center justify-center">
                        <i class="fas fa-hotel text-6xl text-indigo-300 group-hover:scale-110 transition"></i>
                    </div>
                    <div class="p-5 md:p-6">
                        <h3 class="text-xl md:text-2xl font-bold mb-2">Hotel Management System</h3>
                        <p class="text-gray-300 text-sm md:text-base">Built with Django, booking system, relational database design, business logic implementation, and admin dashboard.</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="text-xs bg-slate-800 px-3 py-1 rounded-full">Django</span>
                            <span class="text-xs bg-slate-800 px-3 py-1 rounded-full">PostgreSQL</span>
                            <span class="text-xs bg-slate-800 px-3 py-1 rounded-full">Python</span>
                        </div>
                        <div class="flex gap-3 mt-5">
                            <a href="#" class="inline-flex items-center gap-2 px-3 md:px-4 py-2 rounded-lg bg-blue-600/20 border border-blue-500 text-blue-300 text-xs md:text-sm font-medium hover:bg-blue-600 hover:text-white transition-all duration-300">
                                <i class="fas fa-external-link-alt text-xs"></i> Live Demo
                            </a>
                            <a href="#" class="inline-flex items-center gap-2 px-3 md:px-4 py-2 rounded-lg bg-slate-800/80 border border-gray-700 text-gray-300 text-xs md:text-sm font-medium hover:bg-slate-700 hover:text-white transition-all duration-300">
                                <i class="fab fa-github"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="glass-card rounded-2xl overflow-hidden group" data-aos="flip-left">
                    <div class="h-48 bg-gradient-to-r from-cyan-900/50 to-blue-900/50 flex items-center justify-center">
                        <i class="fas fa-tachometer-alt text-6xl text-cyan-300 group-hover:scale-110 transition"></i>
                    </div>
                    <div class="p-5 md:p-6">
                        <h3 class="text-xl md:text-2xl font-bold mb-2">Admin Panel System</h3>
                        <p class="text-gray-300 text-sm md:text-base">Developed a full-featured admin panel using Laravel, React.js, and Tailwind CSS. Implemented authentication, role-based access control, and dashboard analytics.</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="text-xs bg-slate-800 px-3 py-1 rounded-full">Laravel</span>
                            <span class="text-xs bg-slate-800 px-3 py-1 rounded-full">React.js</span>
                            <span class="text-xs bg-slate-800 px-3 py-1 rounded-full">Tailwind CSS</span>
                        </div>
                        <div class="flex gap-3 mt-5">
                            <a href="#" class="inline-flex items-center gap-2 px-3 md:px-4 py-2 rounded-lg bg-blue-600/20 border border-blue-500 text-blue-300 text-xs md:text-sm font-medium hover:bg-blue-600 hover:text-white transition-all duration-300">
                                <i class="fas fa-external-link-alt text-xs"></i> Live Demo
                            </a>
                            <a href="#" class="inline-flex items-center gap-2 px-3 md:px-4 py-2 rounded-lg bg-slate-800/80 border border-gray-700 text-gray-300 text-xs md:text-sm font-medium hover:bg-slate-700 hover:text-white transition-all duration-300">
                                <i class="fab fa-github"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="glass-card rounded-2xl overflow-hidden group" data-aos="flip-right">
                    <div class="h-48 bg-gradient-to-r from-purple-900/50 to-pink-900/50 flex items-center justify-center">
                        <i class="fas fa-bell text-6xl text-purple-300 group-hover:scale-110 transition"></i>
                    </div>
                    <div class="p-5 md:p-6">
                        <h3 class="text-xl md:text-2xl font-bold mb-2">User Registration Notification System</h3>
                        <p class="text-gray-300 text-sm md:text-base">Implemented a notification system that sends automated WhatsApp and email messages when a user registers. Integrated APIs and used Laravel queue system to handle background jobs efficiently and ensure reliable message delivery.</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="text-xs bg-slate-800 px-3 py-1 rounded-full">Laravel</span>
                            <span class="text-xs bg-slate-800 px-3 py-1 rounded-full">API Integration</span>
                            <span class="text-xs bg-slate-800 px-3 py-1 rounded-full">Queue System</span>
                        </div>
                        <div class="flex gap-3 mt-5">
                            <a href="#" class="inline-flex items-center gap-2 px-3 md:px-4 py-2 rounded-lg bg-blue-600/20 border border-blue-500 text-blue-300 text-xs md:text-sm font-medium hover:bg-blue-600 hover:text-white transition-all duration-300">
                                <i class="fas fa-external-link-alt text-xs"></i> Live Demo
                            </a>
                            <a href="#" class="inline-flex items-center gap-2 px-3 md:px-4 py-2 rounded-lg bg-slate-800/80 border border-gray-700 text-gray-300 text-xs md:text-sm font-medium hover:bg-slate-700 hover:text-white transition-all duration-300">
                                <i class="fab fa-github"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-16 md:py-24 bg-slate-950/50">
        <div class="container mx-auto px-4 sm:px-6 md:px-12 lg:px-20">
            <div class="text-center mb-10 md:mb-12" data-aos="fade-up">
                <h2 class="text-3xl sm:text-4xl font-bold">Technical <span class="text-blue-400">Expertise</span></h2>
                <div class="w-20 h-1 bg-blue-500 mx-auto mt-4 rounded-full"></div>
            </div>
            <div class="grid md:grid-cols-2 gap-8 md:gap-12">
                <div data-aos="fade-right">
                    <h3 class="text-xl font-semibold mb-4">Backend & Databases</h3>
                    <div class="space-y-4">
                        <div><div class="flex justify-between"><span>PHP (7.4/8.x)</span><span>90%</span></div><div class="skill-bar"><div class="skill-progress" data-width="90"></div></div></div>
                        <div><div class="flex justify-between"><span>Laravel (8/9)</span><span>88%</span></div><div class="skill-bar"><div class="skill-progress" data-width="88"></div></div></div>
                        <div><div class="flex justify-between"><span>MySQL / PostgreSQL</span><span>85%</span></div><div class="skill-bar"><div class="skill-progress" data-width="85"></div></div></div>
                        <div><div class="flex justify-between"><span>RESTful APIs</span><span>90%</span></div><div class="skill-bar"><div class="skill-progress" data-width="90"></div></div></div>
                    </div>
                </div>
                <div data-aos="fade-left">
                    <h3 class="text-xl font-semibold mb-4">Frontend & Tools</h3>
                    <div class="space-y-4">
                        <div><div class="flex justify-between"><span>HTML5/CSS3/Tailwind</span><span>85%</span></div><div class="skill-bar"><div class="skill-progress" data-width="85"></div></div></div>
                        <div><div class="flex justify-between"><span>JavaScript/jQuery</span><span>75%</span></div><div class="skill-bar"><div class="skill-progress" data-width="75"></div></div></div>
                        <div><div class="flex justify-between"><span>Git & GitHub</span><span>80%</span></div><div class="skill-bar"><div class="skill-progress" data-width="80"></div></div></div>
                        <div><div class="flex justify-between"><span>Composer / Artisan</span><span>85%</span></div><div class="skill-bar"><div class="skill-progress" data-width="85"></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section (unchanged but responsive) -->
    <section id="contact" class="py-16 md:py-24 bg-slate-900/60">
        <div class="container mx-auto px-4 sm:px-6 md:px-12 lg:px-20">
            <div class="text-center mb-10 md:mb-12" data-aos="fade-up">
                <h2 class="text-3xl sm:text-4xl font-bold">Let's <span class="text-blue-400">Connect</span></h2>
                <p class="text-gray-400 mt-2">Have a project? Let's build something great together.</p>
            </div>
            <div class="max-w-4xl mx-auto glass rounded-2xl p-6 md:p-10" data-aos="zoom-in">
                <div class="grid md:grid-cols-2 gap-6 md:gap-8">
                    <div>
                        <h3 class="text-xl md:text-2xl font-semibold mb-4">Contact Info</h3>
                        <div class="space-y-4">
                            <div class="flex items-center gap-3"><i class="fas fa-map-marker-alt text-blue-400 w-5"></i><span class="text-sm md:text-base">Mumbai, Maharashtra, India – 400091</span></div>
                            <div class="flex items-center gap-3"><i class="fas fa-phone-alt text-blue-400 w-5"></i><span class="text-sm md:text-base">+91 8873463079</span></div>
                            <div class="flex items-center gap-3"><i class="fas fa-envelope text-blue-400 w-5"></i><span class="text-sm md:text-base break-all">vikashkumarmishramdnbn22@gmail.com</span></div>
                        </div>
                        <div class="mt-8">
                            <h3 class="text-lg md:text-xl font-semibold mb-2">Education</h3>
                            <p class="text-gray-300 text-sm md:text-base">BCA, Ravindranath Tagore University (2023) – CGPA: 7.8</p>
                            <p class="text-gray-400 text-xs md:text-sm mt-1">Full-Stack Web Development Certification (Udemy)</p>
                        </div>
                    </div>
                    <div>
                        <form id="ajaxContactForm">
                            @csrf
                            <div class="mb-4">
                                <input type="text" name="name" id="ajax_name" placeholder="Full Name" required class="w-full bg-slate-800 border border-gray-700 rounded-xl p-3 text-sm md:text-base focus:outline-none focus:border-blue-500">
                            </div>
                            <div class="mb-4">
                                <input type="email" name="email" id="ajax_email" placeholder="Email Address" required class="w-full bg-slate-800 border border-gray-700 rounded-xl p-3 text-sm md:text-base focus:outline-none focus:border-blue-500">
                            </div>
                            <div class="mb-4">
                                <input type="text" name="subject" id="ajax_subject" placeholder="Subject" class="w-full bg-slate-800 border border-gray-700 rounded-xl p-3 text-sm md:text-base focus:outline-none focus:border-blue-500">
                            </div>
                            <div class="mb-4">
                                <textarea name="message" id="ajax_message" rows="4" placeholder="Your Message" required class="w-full bg-slate-800 border border-gray-700 rounded-xl p-3 text-sm md:text-base focus:outline-none focus:border-blue-500"></textarea>
                            </div>
                            <button type="submit" id="ajaxSubmitBtn" class="w-full bg-blue-600 hover:bg-blue-500 py-3 rounded-xl font-semibold transition flex items-center justify-center gap-2 text-sm md:text-base">
                                <i class="fas fa-paper-plane"></i> Send Message
                            </button>
                            <div id="ajaxFormMessage" class="text-center text-xs md:text-sm mt-4 hidden"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="border-t border-gray-800 py-6 md:py-8 text-center text-gray-500 text-xs md:text-sm">
        <p>© 2026 Vikash Tirthnarayan Mishra — Built with Laravel spirit & Tailwind CSS</p>
        <div class="flex justify-center gap-5 mt-3">
            <a href="https://github.com/vikash103" target="_blank" class="hover:text-blue-400"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/vikash-mishra-717945287/" target="_blank" class="hover:text-blue-400"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="hover:text-blue-400"><i class="fab fa-twitter"></i></a>
        </div>
    </footer>

    <button id="backToTop" class="fixed bottom-6 right-6 bg-blue-600 p-3 rounded-full shadow-lg text-white opacity-0 invisible transition-all duration-300 hover:bg-blue-500 z-50"><i class="fas fa-arrow-up"></i></button>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        AOS.init({ duration: 800, once: true, offset: 120 });
        new Typed('#typed-role', { 
            strings: ['Laravel Developer', 'PHP Artisan', 'API Architect', 'Problem Solver'], 
            typeSpeed: 70, 
            backSpeed: 40, 
            backDelay: 1500, 
            loop: true, 
            showCursor: true, 
            cursorChar: '|'
        });

        // Skill bars animation
        const skillBars = document.querySelectorAll('.skill-progress');
        const animateSkills = () => { skillBars.forEach(bar => { const width = bar.getAttribute('data-width'); const rect = bar.getBoundingClientRect(); if (rect.top < window.innerHeight - 100 && rect.bottom > 0) bar.style.width = width + '%'; }); };
        window.addEventListener('scroll', animateSkills); animateSkills();

        // Active nav highlight
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.nav-link');
        const mobileLinks = document.querySelectorAll('.mobile-nav-link');
        function updateActive() {
            let current = '';
            sections.forEach(section => { const top = section.offsetTop - 120; const bottom = top + section.offsetHeight; if (window.scrollY >= top && window.scrollY < bottom) current = section.getAttribute('id'); });
            navLinks.forEach(link => { link.classList.remove('active-nav'); if (link.getAttribute('href') === `#${current}`) link.classList.add('active-nav'); });
            mobileLinks.forEach(link => { if (link.getAttribute('href') === `#${current}`) link.style.color = '#3b82f6'; else link.style.color = ''; });
        }
        window.addEventListener('scroll', updateActive); updateActive();

        // Back to top
        const backBtn = document.getElementById('backToTop');
        window.addEventListener('scroll', () => { if (window.scrollY > 400) backBtn.classList.add('opacity-100', 'visible'); else backBtn.classList.remove('opacity-100', 'visible'); });
        backBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

        // Mobile menu
        const mobileBtn = document.getElementById('mobileBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        mobileBtn.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
        document.querySelectorAll('.mobile-nav-link').forEach(link => link.addEventListener('click', () => mobileMenu.classList.add('hidden')));

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => { anchor.addEventListener('click', function(e) { const target = document.querySelector(this.getAttribute('href')); if (target) { e.preventDefault(); target.scrollIntoView({ behavior: 'smooth', block: 'start' }); } }); });

        // AJAX Contact Form
        const form = document.getElementById('ajaxContactForm');
        const messageDiv = document.getElementById('ajaxFormMessage');
        const submitBtn = document.getElementById('ajaxSubmitBtn');

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            messageDiv.classList.add('hidden');
            messageDiv.innerHTML = '';
            
            const formData = new FormData(form);
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-pulse"></i> Sending...';
            
            try {
                const response = await fetch('/contact', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                        'Accept': 'application/json',
                    },
                    body: formData
                });
                
                const data = await response.json();
                
                if (response.ok) {
                    messageDiv.innerHTML = `<i class="fas fa-check-circle mr-1"></i> ${data.message || 'Message sent successfully!'}`;
                    messageDiv.classList.remove('hidden', 'text-red-400');
                    messageDiv.classList.add('text-green-400');
                    form.reset();
                } else {
                    let errorMsg = data.message || 'Something went wrong.';
                    if (data.errors) errorMsg = Object.values(data.errors).flat().join(', ');
                    messageDiv.innerHTML = `<i class="fas fa-exclamation-triangle mr-1"></i> ${errorMsg}`;
                    messageDiv.classList.remove('hidden', 'text-green-400');
                    messageDiv.classList.add('text-red-400');
                }
            } catch (error) {
                messageDiv.innerHTML = '<i class="fas fa-exclamation-triangle mr-1"></i> Network error. Please try again.';
                messageDiv.classList.remove('hidden', 'text-green-400');
                messageDiv.classList.add('text-red-400');
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Send Message';
                setTimeout(() => messageDiv.classList.add('hidden'), 5000);
            }
        });
    </script>
</body>
</html>