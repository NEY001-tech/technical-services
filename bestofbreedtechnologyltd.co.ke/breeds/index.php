<!DOCTYPE html>
<html lang="en" class="light scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best of Breed Technology - Leading Tech Solutions Provider</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }

        /* Enhanced Gradient Background */
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
        }

        .gradient-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.1) 50%, transparent 70%);
            animation: shimmer 3s infinite;
        }

        /* Hero Background Image */
        .hero-bg-image {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('image/background.jpg');
            background-size: cover;
            background-position: center;
            opacity: 0.3;
            z-index: 0;
        }

        @keyframes shimmer {
            0%, 100% { transform: translateX(-100%); }
            50% { transform: translateX(100%); }
        }

        /* Glassmorphism Effect */
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .dark .glass {
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Animated Header */
        .header {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        .dark .header.scrolled {
            background: rgba(26, 32, 44, 0.95);
        }

        /* Hero Animation */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .float-animation {
            animation: float 6s ease-in-out infinite;
        }

        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Card Hover Effects */
        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        /* Animated Button */
        .btn-animated {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .btn-animated::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .btn-animated:hover::before {
            width: 300px;
            height: 300px;
        }

        /* Particle Background */
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            animation: rise linear infinite;
        }

        @keyframes rise {
            0% {
                transform: translateY(100vh) scale(0);
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100vh) scale(1);
                opacity: 0;
            }
        }

        /* Stats Counter Animation */
        .counter {
            font-size: 3rem;
            font-weight: 700;
        }

        /* Service Icon Pulse */
        @keyframes pulse-ring {
            0% {
                transform: scale(0.9);
                opacity: 1;
            }
            100% {
                transform: scale(1.3);
                opacity: 0;
            }
        }

        .pulse-icon::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: inherit;
            animation: pulse-ring 1.5s infinite;
        }

        /* Timeline Design */
        .timeline-item {
            position: relative;
            padding-left: 50px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #667eea;
            border: 4px solid white;
            box-shadow: 0 0 0 4px #667eea33;
        }

        /* Mobile Menu Animation */
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s ease;
        }

        .mobile-menu.active {
            transform: translateX(0);
        }

        /* Scroll Progress Bar */
        .progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            height: 4px;
            background: linear-gradient(to right, #667eea, #764ba2);
            z-index: 9999;
            transition: width 0.1s ease;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .dark ::-webkit-scrollbar-track {
            background: #1a202c;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 5px;
        }

        /* Partner Logo Animation */
        .partner-logo {
            filter: grayscale(100%);
            opacity: 0.6;
            transition: all 0.3s ease;
            max-width: 100%;
            max-height: 80px;
            object-fit: contain;
        }

        .partner-logo:hover {
            filter: grayscale(0%);
            opacity: 1;
            transform: scale(1.1);
        }

        /* Section Reveal Animation */
        .reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* About Image Styling */
        .about-image {
            width: 100%;
            height: auto;
            border-radius: 1rem;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }

        /* CTA Section Gradient */
        .cta-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            background-size: 200% 200%;
            animation: gradient-shift 15s ease infinite;
        }

        @keyframes gradient-shift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        /* Enhanced Dark Mode */
        .dark {
            background-color: #0f172a;
            color: #e2e8f0;
        }

        /* Logo in header */
        .logo-img {
            width: 48px;
            height: 48px;
            object-fit: cover;
            border-radius: 0.5rem;
        }

        /* Responsive Utilities */
        @media (max-width: 768px) {
            .counter { font-size: 2rem; }
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    
    <!-- Scroll Progress Bar -->
    <div class="progress-bar" id="progressBar"></div>

    <!-- Header -->
    <header class="header py-4 px-6 md:px-8">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#home" class="flex items-center space-x-3 group">
                <img src="image/logo.png" alt="Best of Breed Logo" class="logo-img transform group-hover:rotate-12 transition-transform">
                <span class="text-xl font-bold gradient-text hidden md:inline">Best of Breed</span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#home" class="text-gray-700 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 font-medium transition-colors">Home</a>
                <a href="#about" class="text-gray-700 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 font-medium transition-colors">About</a>
                <a href="#services" class="text-gray-700 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 font-medium transition-colors">Services</a>
                <a href="#partners" class="text-gray-700 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 font-medium transition-colors">Partners</a>
                <a href="#contact" class="text-gray-700 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 font-medium transition-colors">Contact</a>
            </nav>

            <div class="flex items-center space-x-4">
                <button id="darkModeToggle" class="p-2 rounded-lg bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors">
                    <i class="fas fa-moon dark:hidden"></i>
                    <i class="fas fa-sun hidden dark:inline"></i>
                </button>
                <button id="menuToggle" class="md:hidden p-2">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="mobile-menu fixed top-0 right-0 w-64 h-full bg-white dark:bg-gray-800 shadow-2xl z-50 p-6">
        <button id="closeMenu" class="absolute top-4 right-4 text-2xl">&times;</button>
        <nav class="flex flex-col space-y-6 mt-12">
            <a href="#home" class="text-gray-700 dark:text-gray-300 hover:text-purple-600 text-lg font-medium mobile-link">Home</a>
            <a href="#about" class="text-gray-700 dark:text-gray-300 hover:text-purple-600 text-lg font-medium mobile-link">About</a>
            <a href="#services" class="text-gray-700 dark:text-gray-300 hover:text-purple-600 text-lg font-medium mobile-link">Services</a>
            <a href="#partners" class="text-gray-700 dark:text-gray-300 hover:text-purple-600 text-lg font-medium mobile-link">Partners</a>
            <a href="#contact" class="text-gray-700 dark:text-gray-300 hover:text-purple-600 text-lg font-medium mobile-link">Contact</a>
        </nav>
    </div>

    <!-- Hero Section -->
    <section id="home" class="gradient-bg min-h-screen flex items-center justify-center relative overflow-hidden pt-20">
        <div class="hero-bg-image"></div>
        <div class="particles" id="particles"></div>
        <div class="container mx-auto px-6 text-center relative z-10">
            <div class="float-animation">
                <h1 class="text-5xl md:text-7xl font-black text-white mb-6 leading-tight">
                    Welcome to<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-200 to-pink-300">Best of Breed Technology Ltd.</span>
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-12 max-w-2xl mx-auto">
                    Your Trusted Technology Partner - Delivering innovative solutions that transform businesses
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#services" class="btn-animated bg-white text-purple-600 px-8 py-4 rounded-full font-semibold hover:shadow-2xl transform hover:scale-105 transition-all">
                        Explore Our Services
                    </a>
                    <a href="#contact" class="btn-animated border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-purple-600 transition-all">
                        Get in Touch
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center reveal">
                    <div class="counter gradient-text" data-target="500">0</div>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">Projects Completed</p>
                </div>
                <div class="text-center reveal">
                    <div class="counter gradient-text" data-target="250">0</div>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">Happy Clients</p>
                </div>
                <div class="text-center reveal">
                    <div class="counter gradient-text" data-target="15">0</div>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">Years Experience</p>
                </div>
                <div class="text-center reveal">
                    <div class="counter gradient-text" data-target="25">0</div>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">Partners</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <div class="glass rounded-3xl p-8 md:p-12 card-hover reveal">
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <div>
                            <img src="image/about.jpg" alt="Best of Breed Technology Team" class="about-image">
                        </div>
                        <div>
                            <h2 class="text-4xl md:text-5xl font-bold mb-6 gradient-text">About Us</h2>
                            <p class="text-lg text-gray-700 dark:text-gray-300 mb-6 leading-relaxed">
                                Best of Breed Technology Ltd. is a leading technology solutions provider, committed to delivering innovative and reliable services. We have a proven track record of success.
                            </p>
                            <p class="text-lg text-gray-700 dark:text-gray-300 mb-8 leading-relaxed">
                                Our team of experts is passionate about technology and dedicated to helping our clients achieve their business goals. We pride ourselves on our customer-centric approach.
                            </p>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold mb-6 gradient-text mt-8">Our Core Values</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="timeline-item">
                            <h4 class="font-semibold text-lg mb-2">Integrity</h4>
                            <p class="text-gray-600 dark:text-gray-400">We conduct our business with the highest ethical standards</p>
                        </div>
                        <div class="timeline-item">
                            <h4 class="font-semibold text-lg mb-2">Innovation</h4>
                            <p class="text-gray-600 dark:text-gray-400">We embrace creativity and constantly seek better solutions</p>
                        </div>
                        <div class="timeline-item">
                            <h4 class="font-semibold text-lg mb-2">Collaboration</h4>
                            <p class="text-gray-600 dark:text-gray-400">We work closely with clients to achieve shared success</p>
                        </div>
                        <div class="timeline-item">
                            <h4 class="font-semibold text-lg mb-2">Excellence</h4>
                            <p class="text-gray-600 dark:text-gray-400">We strive for excellence in everything we do</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 reveal">
                <h2 class="text-4xl md:text-5xl font-bold mb-4 gradient-text">Our Services</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Comprehensive technology solutions tailored to your business needs
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Cards -->
                <div class="glass rounded-2xl p-8 card-hover reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mb-6 pulse-icon relative">
                        <i class="fas fa-video text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">IP Surveillance & Software</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        We build CCTV surveillance solutions based on the world's most advanced IP camera video technologies. Our solutions are best-of-class end-to-end solutions.
                    </p>
                </div>

                <div class="glass rounded-2xl p-8 card-hover reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mb-6 pulse-icon relative">
                        <i class="fas fa-fingerprint text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Access Control / Time & Attendance</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Control access to critical locations using our biometric, card, and PIN solutions. For accurate time and attendance management with overtime and leave management.
                    </p>
                </div>

                <div class="glass rounded-2xl p-8 card-hover reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mb-6 pulse-icon relative">
                        <i class="fas fa-phone-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Telecommunication</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Our analog, digital, pure IP, and hybrid systems provide voice communications from a small office to an enterprise distributed organization.
                    </p>
                </div>

                <div class="glass rounded-2xl p-8 card-hover reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center mb-6 pulse-icon relative">
                        <i class="fas fa-network-wired text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Enterprise Networks</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Build a future-proof network solution based on CAT 6, CAT 6A, CAT 7, and fiber international standards structured cabling solutions.
                    </p>
                </div>

                <div class="glass rounded-2xl p-8 card-hover reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-2xl flex items-center justify-center mb-6 pulse-icon relative">
                        <i class="fas fa-bolt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Power Solutions</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Our backup solutions combine easy-to-use tools with unique backup and restore technology to provide the fastest and easiest recovery available.
                    </p>
                </div>

                <div class="glass rounded-2xl p-8 card-hover reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-2xl flex items-center justify-center mb-6 pulse-icon relative">
                        <i class="fas fa-code text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Software Development</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Custom software solutions crafted to meet specific business requirements, enhancing productivity and user experience.
                    </p>
                </div>

                <div class="glass rounded-2xl p-8 card-hover reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-rose-500 rounded-2xl flex items-center justify-center mb-6 pulse-icon relative">
                        <i class="fas fa-puzzle-piece text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Systems Integration</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Seamless integration of disparate systems and processes to ensure efficiency and consistency across organizational operations.
                    </p>
                </div>

                <div class="glass rounded-2xl p-8 card-hover reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-pink-500 rounded-2xl flex items-center justify-center mb-6 pulse-icon relative">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Cybersecurity</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Comprehensive security solutions to protect businesses from evolving cyber threats, ensuring data integrity and confidentiality.
                    </p>
                </div>

                <div class="glass rounded-2xl p-8 card-hover reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-2xl flex items-center justify-center mb-6 pulse-icon relative">
                        <i class="fas fa-cloud text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Cloud Computing</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Scalable cloud services that offer flexibility, reliability, and cost-effectiveness, enabling businesses to innovate and grow.
                    </p>
                </div>

                <div class="glass rounded-2xl p-8 card-hover reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-500 rounded-2xl flex items-center justify-center mb-6 pulse-icon relative">
                        <i class="fas fa-chart-line text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Data Analytics</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Advanced analytics services that transform data into actionable insights, facilitating informed decision-making.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 reveal">
                <h2 class="text-4xl md:text-5xl font-bold mb-4 gradient-text">Why Choose Us?</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    We deliver excellence through innovation, expertise, and unwavering commitment
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 card-hover reveal">
                    <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-xl flex items-center justify-center mb-4">
                        <i class="fas fa-award text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Expertise & Experience</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Our team comprises highly skilled professionals with extensive industry knowledge and a proven track record of success.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 card-hover reveal">
                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-xl flex items-center justify-center mb-4">
                        <i class="fas fa-lightbulb text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Innovative Solutions</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        We are committed to staying ahead of technological trends, offering cutting-edge solutions that drive your business forward.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 card-hover reveal">
                    <div class="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-xl flex items-center justify-center mb-4">
                        <i class="fas fa-users text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Customer-Centric Approach</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Your unique needs are our priority. We tailor solutions to ensure they perfectly align with your business goals.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 card-hover reveal">
                    <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900 rounded-xl flex items-center justify-center mb-4">
                        <i class="fas fa-handshake text-orange-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Reliability & Trust</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        We deliver robust and dependable services, building long-term partnerships based on trust and consistent performance.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 card-hover reveal">
                    <div class="w-12 h-12 bg-red-100 dark:bg-red-900 rounded-xl flex items-center justify-center mb-4">
                        <i class="fas fa-headset text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Dedicated Support</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Our responsive and knowledgeable support team is always ready to assist you every step of the way.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 card-hover reveal">
                    <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-xl flex items-center justify-center mb-4">
                        <i class="fas fa-cogs text-indigo-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Seamless Integration</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        We ensure our solutions integrate smoothly with your existing systems, minimizing disruption and maximizing efficiency.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section id="partners" class="py-20 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 reveal">
                <h2 class="text-4xl md:text-5xl font-bold mb-4 gradient-text">Our Partners</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Collaborating with industry leaders to deliver world-class solutions
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/axis.jpg" alt="Axis Communications" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/bosch.jpg" alt="Bosch" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/hikvision.jpg" alt="Hikvision" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/uniview.jpg" alt="Uniview" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/avaya.jpg" alt="Avaya" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/yeaster.jpg" alt="Yeastar" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/cisco.jpg" alt="Cisco" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/grandstream.jpg" alt="Grandstream" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/giganet.jpg" alt="Giganet" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/siemon.jpg" alt="Siemon" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/d-link.jpg" alt="D-Link" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/commscope.jpg" alt="Commscope" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/tp-link.jpg" alt="TP-Link" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/ubiquity.jpg" alt="Ubiquiti" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/fortinet.jpg" alt="Fortinet" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/logitech.jpg" alt="Logitech" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/anviz.jpg" alt="Anviz" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/suprema.jpg" alt="Suprema" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/zkteco.jpg" alt="ZKTeco" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/huawei.jpg" alt="Huawei" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/hp.jpg" alt="HP" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/starlink.jpg" alt="Starlink" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/dell.jpg" alt="Dell" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/lenovo.jpg" alt="Lenovo" class="partner-logo">
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl card-hover reveal">
                    <img src="image/stone.jpg" alt="Stone" class="partner-logo">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 reveal">
                <h2 class="text-4xl md:text-5xl font-bold mb-4 gradient-text">Get In Touch</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Ready to transform your business? Contact us today
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="glass rounded-2xl p-8 text-center card-hover reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Our Location</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Canon Towers II, 2nd floor<br>
                        Moi Avenue, Mombasa<br>
                        81209-80100
                    </p>
                </div>

                <div class="glass rounded-2xl p-8 text-center card-hover reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-phone text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Call Us</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Phone: +254718874865<br>
                        <br>
                        Available 24/7
                    </p>
                </div>

                <div class="glass rounded-2xl p-8 text-center card-hover reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-envelope text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Email Us</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        sales@bestofbreed.co.ke<br>
                        <br>
                        Quick response guaranteed
                    </p>
                </div>
            </div>

            <div class="text-center mt-12 reveal">
                <div class="flex justify-center gap-6">
                    <a href="https://www.tiktok.com/@yourtech" target="_blank" class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                        <i class="fab fa-tiktok text-white text-xl"></i>
                    </a>
                    <a href="https://www.instagram.com/yourtech" target="_blank" class="w-12 h-12 bg-gradient-to-br from-pink-500 to-rose-500 rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                        <i class="fab fa-instagram text-white text-xl"></i>
                    </a>
                    <a href="https://wa.me/254718874865" target="_blank" class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                        <i class="fab fa-whatsapp text-white text-xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 dark:bg-black text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 gradient-text">Best of Breed Technology</h3>
                    <p class="text-gray-400">
                        Your trusted partner for innovative technology solutions and exceptional service.
                    </p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-purple-400 transition-colors">Home</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-purple-400 transition-colors">About</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-purple-400 transition-colors">Services</a></li>
                        <li><a href="#partners" class="text-gray-400 hover:text-purple-400 transition-colors">Partners</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-phone mr-2"></i> +254718874865</li>
                        <li><i class="fas fa-envelope mr-2"></i> sales@bestofbreed.co.ke</li>
                        <li><i class="fas fa-map-marker-alt mr-2"></i> Mombasa, Kenya</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 text-center">
                <p class="text-gray-400">
                    &copy; 2025 Best of Breed Technology Ltd. All rights reserved. | 
                    <a href="#" class="hover:text-purple-400 transition-colors">Privacy Policy</a> | 
                    <a href="#" class="hover:text-purple-400 transition-colors">Terms of Service</a>
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Dark Mode Toggle
        const darkModeToggle = document.getElementById('darkModeToggle');
        const html = document.documentElement;
        
        // Check for saved theme preference
        const currentTheme = localStorage.getItem('theme') || 'light';
        html.classList.add(currentTheme);
        
        darkModeToggle.addEventListener('click', () => {
            if (html.classList.contains('dark')) {
                html.classList.remove('dark');
                html.classList.add('light');
                localStorage.setItem('theme', 'light');
            } else {
                html.classList.remove('light');
                html.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        });

        // Mobile Menu Toggle
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        const closeMenu = document.getElementById('closeMenu');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.add('active');
        });

        closeMenu.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
        });

        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
            });
        });

        // Header Scroll Effect
        const header = document.querySelector('.header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Progress Bar
        const progressBar = document.getElementById('progressBar');
        window.addEventListener('scroll', () => {
            const scrollTop = window.scrollY;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPercent = (scrollTop / docHeight) * 100;
            progressBar.style.width = scrollPercent + '%';
        });

        // Particle Animation
        const particlesContainer = document.getElementById('particles');
        for (let i = 0; i < 50; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.animationDuration = (Math.random() * 3 + 2) + 's';
            particle.style.animationDelay = Math.random() * 5 + 's';
            particlesContainer.appendChild(particle);
        }

        // Counter Animation
        const counters = document.querySelectorAll('.counter');
        const animateCounter = (counter) => {
            const target = parseInt(counter.getAttribute('data-target'));
            const duration = 2000;
            const increment = target / (duration / 16);
            let current = 0;

            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    counter.textContent = Math.floor(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target + '+';
                }
            };
            updateCounter();
        };

        // Reveal Animation
        const revealElements = document.querySelectorAll('.reveal');
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    
                    // Animate counters when they come into view
                    if (entry.target.querySelector('.counter')) {
                        const counter = entry.target.querySelector('.counter');
                        animateCounter(counter);
                    }
                }
            });
        }, { threshold: 0.1 });

        revealElements.forEach(element => {
            revealObserver.observe(element);
        });

        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
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