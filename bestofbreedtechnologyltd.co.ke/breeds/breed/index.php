<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technology Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <style>
        /* Custom styles to override or enhance Tailwind */
        body {
            font-family: 'Inter', sans-serif;
            transition: background-color 0.3s ease, color 0.3s ease; /* Smooth transition for dark mode */
        }

        /* Light mode colors */
        .light body {
            background-color: #f8fafc; /* neutral-100 */
            color: #1a202c; /* gray-900 */
        }
        .light .header {
            background-color: #ffffff; /* white */
            border-bottom: 1px solid #e2e8f0; /* gray-200 */
        }
        .light .nav-links a,
        .light .dropdown-toggle {
            color: #4a5568; /* gray-600 */
        }
        .light .nav-links a:hover,
        .light .dropdown-toggle:hover {
            color: #2b6cb0; /* blue-600 */
        }
        .light .dropdown-content {
            background-color: #ffffff;
            border: 1px solid #e2e8f0;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.1);
        }
        .light .dropdown-content a {
            color: #4a5568;
        }
        .light .dropdown-content a:hover {
            background-color: #f0f4f8; /* gray-100 */
            color: #2b6cb0;
        }
        .light .hamburger-menu .bar {
            background-color: #4a5568;
        }
        .light .mobile-nav {
            background-color: #ffffff;
            border-left: 1px solid #e2e8f0;
        }
        .light .mobile-nav a {
            color: #4a5568;
        }
        .light .mobile-nav a:hover {
            background-color: #f0f4f8;
            color: #2b6cb0;
        }
        .light .mobile-dropdown-content a {
            color: #4a5568;
        }
        .light .mobile-dropdown-content a:hover {
            background-color: #f0f4f8;
            color: #2b6cb0;
        }
        .light .hero .hero-content h1,
        .light .hero .hero-content p,
        .light .hero .hero-content .button {
            color: #1a202c; /* Dark text for light background */
        }
        .light .hero .hero-content .button {
            background-color: #2b6cb0; /* Blue button */
            color: #ffffff;
        }
        .light .hero .hero-content .button:hover {
            background-color: #2c5282; /* Darker blue */
        }
        .light .about-redesign-section {
            background-color: #f7fafc; /* Light gray background for the section */
        }
        .light .about-card {
            background-color: #ffffff; /* White card background */
            color: #1a202c; /* Dark text for light card */
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .light .about-card h2 {
            color: #2b6cb0; /* Blue heading */
        }
        .light .about-card strong {
            color: #2c5282; /* Darker blue for emphasis */
        }
        .light .social-icon {
            background-color: #e2e8f0; /* Light gray for icon background */
            color: #4a5568; /* Dark gray for icon */
        }
        .light .social-icon:hover {
            background-color: #cbd5e0; /* Slightly darker gray on hover */
        }
        .light .services-redesign {
            background-color: #2d3748; /* Darker gray background for light mode */
            color: #e2e8f0; /* Light text on dark background */
        }
        .light .services-redesign h2 {
            color: #63b3ed; /* Light blue heading */
        }
        .light .service-item {
            background-color: #4a5568; /* Slightly lighter dark background for cards */
            color: #e2e8f0;
        }
        .light .service-item h3 {
            color: #90cdf4; /* Lighter blue for service headings */
        }
        .light .service-icon {
            background-color: #63b3ed; /* Pop blue for icon background */
            color: #1a202c; /* Dark text on pop blue */
        }
        .light .why-choose-us-section {
            background-color: #f0f4f8; /* Very light blue-gray background */
            color: #1a202c;
        }
        .light .why-choose-us-card {
            background-color: #ffffff;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        .light .why-choose-us-card h2 {
            color: #2b6cb0; /* Blue heading */
        }
        .light .why-choose-us-icon {
            background-color: #2b6cb0; /* Blue icon background */
            color: #ffffff;
        }
        .light .why-choose-us-reason h3 {
            color: #2c5282; /* Darker blue for reason headings */
        }
        .light .our-partners-section {
            background: linear-gradient(135deg, #e0f2f7, #cfd8dc, #e3f2fd); /* Light blue-gray gradient */
            background-size: 200% 200%;
        }
        .light .our-partners-section h2 {
            color: #2b6cb0; /* Blue heading */
        }
        .light .partner-item {
            background-color: #ffffff;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .light .info-contacts-support {
            background-color: #f7fafc; /* Light gray background */
            color: #1a202c;
        }
        .light .info-contacts-support h2 {
            color: #2b6cb0; /* Blue heading */
        }
        .light .info-card {
            background-color: #ffffff;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .light .info-card h3 {
            color: #2c5282; /* Darker blue for headings */
        }
        .light .info-icon {
            background-color: #63b3ed; /* Pop blue for icon background */
            color: #1a202c;
        }
        .light footer {
            background-color: #1a202c; /* Dark background for footer in light mode */
            color: #e2e8f0; /* Light text */
            border-top: 1px solid #2d3748;
        }
        .light footer a {
            color: #90cdf4; /* Light blue links */
        }
        .light footer a:hover {
            color: #63b3ed; /* Darker blue on hover */
        }


        /* Dark mode colors */
        .dark body {
            background-color: #1a202c; /* gray-900 */
            color: #e2e8f0; /* gray-200 */
        }
        .dark .header {
            background-color: #2d3748; /* gray-800 */
            border-bottom: 1px solid #4a5568; /* gray-700 */
        }
        .dark .nav-links a,
        .dark .dropdown-toggle {
            color: #cbd5e0; /* gray-300 */
        }
        .dark .nav-links a:hover,
        .dark .dropdown-toggle:hover {
            color: #63b3ed; /* blue-300 */
        }
        .dark .dropdown-content {
            background-color: #2d3748;
            border: 1px solid #4a5568;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }
        .dark .dropdown-content a {
            color: #cbd5e0;
        }
        .dark .dropdown-content a:hover {
            background-color: #4a5568;
            color: #63b3ed;
        }
        .dark .hamburger-menu .bar {
            background-color: #cbd5e0;
        }
        .dark .mobile-nav {
            background-color: #2d3748;
            border-left: 1px solid #4a5568;
        }
        .dark .mobile-nav a {
            color: #cbd5e0;
        }
        .dark .mobile-nav a:hover {
            background-color: #4a5568;
            color: #63b3ed;
        }
        .dark .mobile-dropdown-content a {
            color: #cbd5e0;
        }
        .dark .mobile-dropdown-content a:hover {
            background-color: #4a5568;
            color: #63b3ed;
        }
        .dark .hero .hero-content h1,
        .dark .hero .hero-content p,
        .dark .hero .hero-content .button {
            color: #e2e8f0; /* Light text for dark background */
        }
        .dark .hero .hero-content .button {
            background-color: #63b3ed; /* Light blue button */
            color: #1a202c;
        }
        .dark .hero .hero-content .button:hover {
            background-color: #90cdf4; /* Lighter blue */
        }
        .dark .about-redesign-section {
            background-color: #1f2937; /* Darker gray background for the section */
        }
        .dark .about-card {
            background-color: #2d3748; /* Darker gray card background */
            color: #e2e8f0; /* Light text for dark card */
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.5), 0 2px 4px -1px rgba(0, 0, 0, 0.4);
        }
        .dark .about-card h2 {
            color: #63b3ed; /* Light blue heading */
        }
        .dark .about-card strong {
            color: #90cdf4; /* Lighter blue for emphasis */
        }
        .dark .social-icon {
            background-color: #4a5568; /* Dark gray for icon background */
            color: #cbd5e0; /* Light gray for icon */
        }
        .dark .social-icon:hover {
            background-color: #63b3ed; /* Light blue on hover */
            color: #1a202c;
        }
        .dark .services-redesign {
            background-color: #1a202c; /* Even darker gray background for dark mode */
            color: #e2e8f0; /* Light text on dark background */
        }
        .dark .services-redesign h2 {
            color: #90cdf4; /* Even lighter blue heading */
        }
        .dark .service-item {
            background-color: #2d3748; /* Slightly lighter dark background for cards */
            color: #e2e8f0;
        }
        .dark .service-item h3 {
            color: #90cdf4; /* Lighter blue for service headings */
        }
        .dark .service-icon {
            background-color: #63b3ed; /* Pop blue for icon background */
            color: #1a202c;
        }
        .dark .why-choose-us-section {
            background-color: #1f2937; /* Darker background for this section */
            color: #e2e8f0;
        }
        .dark .why-choose-us-card {
            background-color: #2d3748;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.4), 0 4px 6px -2px rgba(0, 0, 0, 0.2);
        }
        .dark .why-choose-us-card h2 {
            color: #63b3ed; /* Light blue heading */
        }
        .dark .why-choose-us-icon {
            background-color: #63b3ed; /* Light blue icon background */
            color: #1a202c;
        }
        .dark .why-choose-us-reason h3 {
            color: #90cdf4; /* Lighter blue for reason headings */
        }
        .dark .our-partners-section {
            background: linear-gradient(135deg, #2d3748, #4a5568, #2c5282); /* Darker blue-gray gradient */
            background-size: 200% 200%;
        }
        .dark .our-partners-section h2 {
            color: #63b3ed; /* Light blue heading */
        }
        .dark .partner-item {
            background-color: #374151; /* Slightly lighter dark background for partner cards */
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.5), 0 2px 4px -1px rgba(0, 0, 0, 0.4);
        }
        .dark .info-contacts-support {
            background-color: #1a202c; /* Even darker gray background */
            color: #e2e8f0;
        }
        .dark .info-contacts-support h2 {
            color: #90cdf4; /* Even lighter blue heading */
        }
        .dark .info-card {
            background-color: #2d3748;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.5), 0 2px 4px -1px rgba(0, 0, 0, 0.4);
        }
        .dark .info-card h3 {
            color: #90cdf4; /* Lighter blue for headings */
        }
        .dark .info-icon {
            background-color: #63b3ed; /* Pop blue for icon background */
            color: #1a202c;
        }
        .dark footer {
            background-color: #0f172a; /* Even darker background for footer in dark mode */
            color: #cbd5e0; /* Slightly lighter text */
            border-top: 1px solid #2d3748;
        }
        .dark footer a {
            color: #90cdf4; /* Light blue links */
        }
        .dark footer a:hover {
            color: #63b3ed; /* Darker blue on hover */
        }


        /* General Dropdown Styles */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none; /* Hidden by default, now controlled by JS */
            position: absolute;
            min-width: 160px;
            z-index: 100;
            border-radius: 0.5rem; /* rounded-lg */
            overflow: hidden; /* Ensures rounded corners apply to children */
            top: 100%; /* Position below the toggle */
            left: 50%; /* Center dropdown */
            transform: translateX(-50%); /* Adjust for centering */
            margin-top: 0.5rem; /* Space below toggle */
            white-space: nowrap; /* Prevent wrapping of long links */
        }

        .dropdown-content a {
            padding: 0.75rem 1rem; /* py-3 px-4 */
            text-decoration: none;
            display: block;
            text-align: left;
            transition: background-color 0.2s ease, color 0.2s ease;
        }

        /* Hamburger menu animation */
        .hamburger-menu.active .bar:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }
        .hamburger-menu.active .bar:nth-child(2) {
            opacity: 0;
        }
        .hamburger-menu.active .bar:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }

        /* Mobile Dropdown Arrow Rotation */
        .mobile-dropdown-toggle.active .fa-chevron-down {
            transform: rotate(180deg);
        }

        /* Header scroll behavior */
        .header {
            position: fixed; /* Make header fixed so it can slide in/out */
            width: 100%;
            top: 0;
            left: 0;
            z-index: 50; /* Ensure it's above other content */
            transition: transform 0.3s ease-in-out; /* Smooth slide transition */
        }
        .header.hidden-scroll {
            transform: translateY(-100%); /* Hide by moving up */
        }

        /* Hero Section with Three.js Background */
        .hero {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Full viewport height */
            overflow: hidden; /* Hide overflow from canvas */
            text-align: center;
            padding-top: 80px; /* Space for fixed header */
        }

        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0; /* Behind content */
        }

        .hero-background canvas {
            display: block; /* Remove extra space below canvas */
        }

        .hero-content {
            position: relative;
            z-index: 10; /* Above background */
            max-width: 800px;
            padding: 2rem;
            color: #ffffff; /* Default text color for hero content */
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5); /* For readability over smoke */
        }

        .hero-content h1 {
            font-size: 3rem; /* text-5xl */
            font-weight: 700; /* font-bold */
            margin-bottom: 1rem; /* mb-4 */
        }

        .hero-content p {
            font-size: 1.5rem; /* text-2xl */
            margin-bottom: 2rem; /* mb-8 */
        }

        .hero-content .button {
            display: inline-block;
            padding: 0.75rem 2rem; /* py-3 px-8 */
            border-radius: 9999px; /* rounded-full */
            font-weight: 600; /* font-semibold */
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        /* Scroll Animation Styles */
        .scroll-up, .scroll-in, .scroll-left, .scroll-right {
            opacity: 0;
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .scroll-up {
            transform: translateY(20px);
        }
        .scroll-up.active {
            opacity: 1;
            transform: translateY(0);
        }

        .scroll-in {
            transform: scale(0.95);
        }
        .scroll-in.active {
            opacity: 1;
            transform: scale(1);
        }

        .scroll-left {
            transform: translateX(-50px);
        }
        .scroll-left.active {
            opacity: 1;
            transform: translateX(0);
        }

        .scroll-right {
            transform: translateX(50px);
        }
        .scroll-right.active {
            opacity: 1;
            transform: translateX(0);
        }

        /* About Us Redesign Styles (Card-like) */
        .about-redesign-section {
            padding: 4rem 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh; /* Ensure section takes up enough space */
        }
        .about-redesign-container {
            max-width: 900px; /* Max width for the card */
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }
        .about-card {
            border-radius: 1.5rem; /* More rounded corners for card */
            padding: 2rem;
            display: flex;
            flex-direction: column; /* Stack on mobile */
            gap: 2rem;
            align-items: center; /* Center items on mobile */
            position: relative; /* For image positioning */
            overflow: hidden; /* Ensure content doesn't spill out */
        }
        @media (min-width: 768px) {
            .about-card {
                flex-direction: row; /* Side-by-side on desktop */
                text-align: left;
                padding: 3rem; /* More padding on desktop */
            }
            .about-card-image-wrapper {
                flex-shrink: 0; /* Don't shrink image */
                width: 300px; /* Fixed width for image container */
                height: 300px; /* Fixed height for image container */
                margin-right: 2rem; /* Space between image and content */
            }
            .about-card-content {
                flex-grow: 1; /* Allow content to take remaining space */
            }
        }
        .about-card-image-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            max-width: 250px; /* Max width for image container on mobile */
            height: 250px; /* Fixed height for a consistent look */
            overflow: hidden;
            border-radius: 1rem; /* Rounded corners for the image container */
            position: relative;
            padding: 0.5rem; /* Padding to create the inner border effect */
            background-clip: padding-box;
            background-color: #e2e8f0; /* Light border color */
            box-shadow: inset 0 0 0 2px #cbd5e0; /* Inner shadow for border effect */
        }
        .dark .about-card-image-wrapper {
            background-color: #4a5568; /* Dark border color */
            box-shadow: inset 0 0 0 2px #63b3ed; /* Inner shadow for border effect */
        }

        .about-card-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0.75rem; /* Slightly smaller border-radius for image inside */
            transition: transform 0.3s ease-in-out;
        }
        .about-card-image-wrapper img:hover {
            transform: scale(1.05); /* Subtle zoom on hover */
        }

        .about-card-content h2 {
            font-size: 2.5rem; /* text-3xl */
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        .about-card-content h3 {
            font-size: 1.5rem; /* text-xl */
            font-weight: 500; /* medium */
            color: #63b3ed; /* Pop color for title */
            margin-bottom: 1rem;
        }
        .dark .about-card-content h3 {
            color: #90cdf4; /* Lighter pop color for dark mode */
        }
        .about-card-content p {
            line-height: 1.75; /* leading-relaxed */
            margin-bottom: 1rem;
        }
        .about-card-content .social-icons {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
            justify-content: center; /* Center on mobile */
        }
        @media (min-width: 768px) {
            .about-card-content .social-icons {
                justify-content: flex-start; /* Align left on desktop */
            }
        }
        .social-icon {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 48px;
            height: 48px;
            border-radius: 50%; /* Circular icons */
            font-size: 1.5rem;
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.2s ease;
        }
        .social-icon:hover {
            transform: translateY(-3px); /* Lift effect on hover */
        }

        /* Services Section Styles */
        .services-redesign {
            padding: 4rem 1rem;
            text-align: center;
        }
        .services-redesign h2 {
            font-size: 3.5rem; /* text-5xl */
            font-weight: 700; /* font-bold */
            margin-bottom: 3rem;
        }
        .services-grid-redesign {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); /* Responsive grid */
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        .service-item {
            border-radius: 1rem; /* Rounded corners */
            padding: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .service-item:hover {
            transform: translateY(-5px); /* Lift effect on hover */
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.2), 0 4px 6px -2px rgba(0, 0, 0, 0.1);
        }
        .service-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            flex-shrink: 0; /* Prevent icon from shrinking */
        }
        .service-icon img {
            width: 60%;
            height: 60%;
            object-fit: contain;
        }
        .service-item h3 {
            font-size: 1.75rem; /* text-2xl */
            font-weight: 600; /* font-semibold */
            margin-bottom: 1rem;
        }
        .service-item p {
            font-size: 1rem; /* text-base */
            line-height: 1.6;
        }

        /* Why Choose Us Section Styles */
        .why-choose-us-section {
            padding: 4rem 1rem;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
        }
        .why-choose-us-container {
            max-width: 900px;
            width: 100%;
            margin: 0 auto;
        }
        .why-choose-us-card {
            border-radius: 1.5rem;
            padding: 3rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2rem;
        }
        .why-choose-us-card h2 {
            font-size: 3.5rem; /* text-5xl */
            font-weight: 700;
            margin-bottom: 2rem;
        }
        .why-choose-us-icon {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 4rem;
            margin-bottom: 1.5rem;
            flex-shrink: 0;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .why-choose-us-reasons-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
            width: 100%;
        }
        .why-choose-us-reason {
            text-align: left;
            padding: 1.5rem;
            border-radius: 0.75rem;
            background-color: rgba(255,255,255,0.1); /* Subtle background for reasons */
            transition: transform 0.3s ease-in-out, background-color 0.3s ease;
        }
        .light .why-choose-us-reason {
            background-color: #f8fafc; /* Light background for reasons in light mode */
        }
        .dark .why-choose-us-reason {
            background-color: #2d3748; /* Darker background for reasons in dark mode */
        }
        .why-choose-us-reason:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        }
        .why-choose-us-reason h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        .why-choose-us-reason p {
            font-size: 1rem;
            line-height: 1.6;
        }

        /* Animated gradient background for partners section */
        @keyframes gradient-animation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .our-partners-section {
            animation: gradient-animation 15s ease infinite; /* Adjust speed as needed */
        }

        /* Partners Section Styles */
        .our-partners-section {
            padding: 4rem 1rem;
            text-align: center;
        }
        .our-partners-section h2 {
            font-size: 3.5rem; /* text-5xl */
            font-weight: 700;
            margin-bottom: 3rem;
        }
        .partners-grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); /* Responsive grid for logos */
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        .partner-item {
            padding: 1.5rem;
            border-radius: 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150px; /* Fixed height for consistent cards */
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            cursor: pointer;
        }
        .partner-item:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 10px 20px -5px rgba(0,0,0,0.2);
        }
        .partner-item img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain; /* Ensure entire logo is visible */
            filter: grayscale(100%); /* Grayscale effect */
            opacity: 0.7; /* Slightly faded */
            transition: filter 0.3s ease, opacity 0.3s ease;
        }
        .partner-item:hover img {
            filter: grayscale(0%); /* Color on hover */
            opacity: 1; /* Full opacity on hover */
        }

        /* Info, Contacts, Support Section Styles */
        .info-contacts-support {
            padding: 4rem 1rem;
            text-align: center;
        }
        .info-contacts-support h2 {
            font-size: 3.5rem; /* text-5xl */
            font-weight: 700;
            margin-bottom: 3rem;
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            max-width: 1000px;
            margin: 0 auto;
        }
        .info-card {
            border-radius: 1rem;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.2), 0 4px 6px -2px rgba(0, 0, 0, 0.1);
        }
        .info-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            flex-shrink: 0;
        }
        .info-card h3 {
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        .info-card p {
            font-size: 1rem;
            line-height: 1.6;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-200 transition-colors duration-300">

    <header class="header flex justify-between items-center py-4 px-6 md:px-8 shadow-sm rounded-b-lg">
        <a href="index.php" class="logo-link flex items-center space-x-2">
            <img src="image/logo.png" alt="Logo" class="logo h-10 w-10 rounded-full object-cover">
            <span class="text-xl font-bold text-blue-600 dark:text-blue-300"></span>
        </a>

        <nav class="nav-links hidden md:flex items-center space-x-8">
            <a href="index.php" class="text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-300 font-medium transition-colors duration-200 rounded-md py-2 px-3">Home</a>
            <a href="#about" class="text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-300 font-medium transition-colors duration-200 rounded-md py-2 px-3">About</a>

            <div class="dropdown">
                <a href="#" class="dropdown-toggle flex items-center text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-300 font-medium transition-colors duration-200 rounded-md py-2 px-3">
                    Products & Solutions
                    <i class="fas fa-chevron-down ml-2 text-xs"></i> </a>
                <div class="dropdown-content rounded-lg shadow-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                    <a href="#1" class="block py-3 px-4 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700 rounded-t-lg">IP Surveillance & Software</a>
                    <a href="#2" class="block py-3 px-4 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Access control</a>
                    <a href="#3" class="block py-3 px-4 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Telecommunication</a>
                    <a href="#4" class="block py-3 px-4 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Enterprise Networks</a>
                    <a href="#5" class="block py-3 px-4 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Power solutions</a>
                    <a href="#6" class="block py-3 px-4 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Software Development</a>
                    <a href="#7" class="block py-3 px-4 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Systems Integration</a>
                    <a href="#8" class="block py-3 px-4 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Cybersecurity</a>
                    <a href="#9" class="block py-3 px-4 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Cloud Computing</a>
                    <a href="#10" class="block py-3 px-4 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Data Analytics</a>
                    
                </div>
            </div>
            <a href="#info-contacts-support" class="text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-300 font-medium transition-colors duration-200 rounded-md py-2 px-3">Contact</a>
        </nav>

        <div class="flex items-center space-x-4 md:space-x-6">
            <button id="darkModeToggle" class="p-2 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors duration-200">
                <i class="fas fa-moon text-lg dark:hidden"></i> <i class="fas fa-sun text-lg hidden dark:inline-block"></i> </button>

            <div class="hamburger-menu md:hidden cursor-pointer p-2 rounded-md transition-all duration-300 ease-in-out">
                <div class="bar w-6 h-0.5 bg-gray-700 dark:bg-gray-200 my-1 transition-all duration-300 ease-in-out rounded-full"></div>
                <div class="bar w-6 h-0.5 bg-gray-700 dark:bg-gray-200 my-1 transition-all duration-300 ease-in-out rounded-full"></div>
                <div class="bar w-6 h-0.5 bg-gray-700 dark:bg-gray-200 my-1 transition-all duration-300 ease-in-out rounded-full"></div>
            </div>
        </div>
    </header>

    <nav class="mobile-nav fixed top-0 right-0 h-full w-64 bg-white dark:bg-gray-800 shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-50 md:hidden">
        <div class="close-button text-4xl cursor-pointer p-4 text-gray-700 dark:text-gray-200 text-right">&times;</div>
        <div class="flex flex-col p-4 space-y-4">
            <a href="index.php" class="text-gray-700 hover:text-blue-600 dark:text-gray-200 dark:hover:text-blue-300 text-lg font-medium py-2 rounded-md px-3 transition-colors duration-200">Home</a>
            <a href="#about" class="text-gray-700 hover:text-blue-600 dark:text-gray-200 dark:hover:text-blue-300 text-lg font-medium py-2 rounded-md px-3 transition-colors duration-200">About</a>

            <div class="mobile-dropdown">
                <a href="#" class="mobile-dropdown-toggle flex items-center justify-between py-2 px-3 text-gray-700 hover:text-blue-600 dark:text-gray-200 dark:hover:text-blue-300 text-lg font-medium rounded-md transition-colors duration-200">
                    Products & Solutions
                    <i class="fas fa-chevron-down ml-2 text-xs transition-transform duration-200"></i>
                </a>
                <div class="mobile-dropdown-content hidden flex-col pl-6">
                <a href="#1" class="block py-3 px-4 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700 rounded-t-lg">IP Surveillance & Software</a>
                    <a href="#2" class="block py-3 px-4 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Access control</a>
                    <a href="#3" class="block py-3 px-4 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Telecommunication</a>
                    <a href="#4" class="block py-3 px-4 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Enterprise Networks</a>
                    <a href="#5" class="block py-3 px-4 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Power solutions</a>
                    <a href="#6" class="block py-3 px-4 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Software Development</a>
                    <a href="#7" class="block py-3 px-4 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Systems Integration</a>
                    <a href="#8" class="block py-3 px-4 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Cybersecurity</a>
                    <a href="#9" class="block py-3 px-4 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Cloud Computing</a>
                    <a href="#10" class="block py-3 px-4 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Data Analytics</a>
                </div>
            </div>
            <a href="#info-contacts-support" class="text-gray-700 hover:text-blue-600 dark:text-gray-200 dark:hover:text-blue-300 text-lg font-medium py-2 rounded-md px-3 transition-colors duration-200">Contact</a>
        </div>
    </nav>

    <section id="home" class="hero">
        <div id="hero-background" class="hero-background"></div>
        <div class="hero-content container">
            <h1 class="scroll-up text-5xl font-bold">Welcome to Best of Breed Technology Ltd.</h1>
            <p class="scroll-up text-2xl">Your Trusted Technology Partner</p>
            <a href="#services" class="button scroll-up">Explore Our Services</a>
        </div>
    </section>

    <section id="about" class="about-redesign-section py-16 px-4">
        <div class="about-redesign-container">
            <div class="about-card rounded-lg shadow-lg p-8">
                <div class="about-card-image-wrapper scroll-left">
                    <img src="image/about.jpg" alt="Best of Breed Technology Team">
                </div>
                <div class="about-card-content scroll-right">
                    <h2 class="text-3xl font-bold mb-4 scroll-in" style="transition-delay: 0s;">About Us</h2>
                    <p class="text-lg leading-relaxed mb-4 scroll-in" style="transition-delay: 0.1s;">
                        Best of Breed Technology Ltd. is a leading technology solutions provider, committed to delivering
                        innovative and reliable services. We have a proven track record of success.
                    </p>
                    <p class="text-lg leading-relaxed mb-4 scroll-in" style="transition-delay: 0.2s;">
                        Our team of experts is passionate about technology and dedicated to helping our clients achieve
                        their business goals. We pride ourselves on our customer-centric approach.
                    </p>

                    <h3 class="text-2xl font-bold mt-8 mb-4 scroll-in" style="transition-delay: 0.3s;">Our Core Values</h3>
                    <ul class="text-lg leading-relaxed space-y-2 scroll-in" style="transition-delay: 0.4s;">
                        <li><strong>Integrity:</strong> We conduct our business with the highest ethical standards.</li>
                        <li><strong>Innovation:</strong> We embrace creativity and are always looking for better ways to do things.</li>
                        <li><strong>Collaboration:</strong> We work closely with our clients to achieve shared success.</li>
                        <li><strong>Excellence:</strong> We strive for excellence in all that we do.</li>
                    </ul>

                    
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services-redesign py-16 px-4 light:bg-gray-800 dark:bg-gray-900">
        <h2 class="scroll-up text-center text-5xl font-bold mb-12 light:text-blue-300 dark:text-blue-400">Our Services</h2>
        <div class="services-grid-redesign">
            <div class="service-item scroll-in light:bg-gray-700 dark:bg-gray-800 rounded-xl shadow-lg" id="1"style="transition-delay: 0s;">
                <div class="service-icon light:bg-blue-600 dark:bg-blue-500 text-white">
                    <i class="fas fa-video"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4 light:text-blue-200 dark:text-blue-300">IP Surveillance & Software</h3>
                <p class="text-base leading-relaxed light:text-gray-100 dark:text-gray-200">We build CCTV surveillance solutions based on the world's most advanced IP camera video technologies. Our solutions are best-of-class end-to-end solutions.</p>
            </div>

            <div class="service-item scroll-in light:bg-gray-700 dark:bg-gray-800 rounded-xl shadow-lg" id="2"style="transition-delay: 0.1s;">
                <div class="service-icon light:bg-blue-600 dark:bg-blue-500 text-white">
                    <i class="fas fa-fingerprint"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4 light:text-blue-200 dark:text-blue-300">Access Control / Time & Attendance</h3>
                <p class="text-base leading-relaxed light:text-gray-100 dark:text-gray-200">Control access to critical locations using our biometric, card, and PIN solutions. For accurate time and attendance management with overtime and leave management, our time and attendance solutions offer simplified configuration and advanced reporting.</p>
            </div>

            <div class="service-item scroll-in light:bg-gray-700 dark:bg-gray-800 rounded-xl shadow-lg" id="3"style="transition-delay: 0.2s;">
                <div class="service-icon light:bg-blue-600 dark:bg-blue-500 text-white">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4 light:text-blue-200 dark:text-blue-300">Telecommunication</h3>
                <p class="text-base leading-relaxed light:text-gray-100 dark:text-gray-200">Our analog, digital, pure IP, and hybrid systems provide voice communications from a small office to an enterprise distributed organization. Our voice communication solutions are built to connect to CO lines, ISDN lines, SIP, and GSM networks, providing the customer with communication flexibility and calling cost control options.</p>
            </div>

            <div class="service-item scroll-in light:bg-gray-700 dark:bg-gray-800 rounded-xl shadow-lg" id="4"style="transition-delay: 0.3s;">
                <div class="service-icon light:bg-blue-600 dark:bg-blue-500 text-white">
                    <i class="fas fa-network-wired"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4 light:text-blue-200 dark:text-blue-300">Enterprise Networks</h3>
                <p class="text-base leading-relaxed light:text-gray-100 dark:text-gray-200">Build a future-proof network solution based on CAT 6, CAT 6A, CAT 7, and fiber international standards structured cabling solutions and active networks.</p>
            </div>

            <div class="service-item scroll-in light:bg-gray-700 dark:bg-gray-800 rounded-xl shadow-lg" id="5"style="transition-delay: 0.4s;">
                <div class="service-icon light:bg-blue-600 dark:bg-blue-500 text-white">
                    <i class="fas fa-bolt"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4 light:text-blue-200 dark:text-blue-300">Power Solutions</h3>
                <p class="text-base leading-relaxed light:text-gray-100 dark:text-gray-200">Our backup solutions combine easy-to-use tools with unique backup and restore technology to provide the fastest and easiest recovery available.</p>
            </div>

            <div class="service-item scroll-in light:bg-gray-700 dark:bg-gray-800 rounded-xl shadow-lg"id="6" style="transition-delay: 0.5s;">
                <div class="service-icon light:bg-blue-600 dark:bg-blue-500 text-white">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4 light:text-blue-200 dark:text-blue-300">Software Development</h3>
                <p class="text-base leading-relaxed light:text-gray-100 dark:text-gray-200">Custom software solutions crafted to meet specific business requirements, enhancing productivity and user experience.</p>
            </div>

            <div class="service-item scroll-in light:bg-gray-700 dark:bg-gray-800 rounded-xl shadow-lg" id="7"style="transition-delay: 0.6s;">
                <div class="service-icon light:bg-blue-600 dark:bg-blue-500 text-white">
                    <i class="fas fa-puzzle-piece"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4 light:text-blue-200 dark:text-blue-300">Systems Integration</h3>
                <p class="text-base leading-relaxed light:text-gray-100 dark:text-gray-200">Seamless integration of disparate systems and processes to ensure efficiency and consistency across organizational operations.</p>
            </div>

            <div class="service-item scroll-in light:bg-gray-700 dark:bg-gray-800 rounded-xl shadow-lg" id="8"style="transition-delay: 0.7s;">
                <div class="service-icon light:bg-blue-600 dark:bg-blue-500 text-white">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4 light:text-blue-200 dark:text-blue-300">Cybersecurity</h3>
                <p class="text-base leading-relaxed light:text-gray-100 dark:text-gray-200">Comprehensive security solutions to protect businesses from evolving cyber threats, ensuring data integrity and confidentiality.</p>
            </div>

            <div class="service-item scroll-in light:bg-gray-700 dark:bg-gray-800 rounded-xl shadow-lg" id="9"style="transition-delay: 0.8s;">
                <div class="service-icon light:bg-blue-600 dark:bg-blue-500 text-white">
                    <i class="fas fa-cloud"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4 light:text-blue-200 dark:text-blue-300">Cloud Computing</h3>
                <p class="text-base leading-relaxed light:text-gray-100 dark:text-gray-200">Scalable cloud services that offer flexibility, reliability, and cost-effectiveness, enabling businesses to innovate and grow.</p>
            </div>

            <div class="service-item scroll-in light:bg-gray-700 dark:bg-gray-800 rounded-xl shadow-lg" id="10"style="transition-delay: 0.9s;">
                <div class="service-icon light:bg-blue-600 dark:bg-blue-500 text-white">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4 light:text-blue-200 dark:text-blue-300">Data Analytics</h3>
                <p class="text-base leading-relaxed light:text-gray-100 dark:text-gray-200">Advanced analytics services that transform data into actionable insights, facilitating informed decision-making.</p>
            </div>
        </div>
    </section>

    <section id="why-choose-us" class="why-choose-us-section py-16 px-4 light:bg-blue-50 dark:bg-gray-800">
        <div class="why-choose-us-container">
            <div class="why-choose-us-card rounded-lg light:bg-white dark:bg-gray-700 shadow-lg p-8">
                <h2 class="scroll-up text-center text-5xl font-bold mb-8 light:text-blue-700 dark:text-blue-300">Why Choose Us?</h2>
                
                <div class="why-choose-us-icon scroll-in light:bg-blue-600 dark:bg-blue-500 text-white">
                    <i class="fas fa-handshake"></i> </div>

                <div class="why-choose-us-reasons-grid">
                    <div class="why-choose-us-reason scroll-in" style="transition-delay: 0s;">
                        <h3 class="text-xl font-semibold mb-2 light:text-blue-800 dark:text-blue-200">Expertise & Experience</h3>
                        <p class="text-base light:text-gray-700 dark:text-gray-300">Our team comprises highly skilled professionals with extensive industry knowledge and a proven track record of success.</p>
                    </div>
                    <div class="why-choose-us-reason scroll-in" style="transition-delay: 0.1s;">
                        <h3 class="text-xl font-semibold mb-2 light:text-blue-800 dark:text-blue-200">Innovative Solutions</h3>
                        <p class="text-base light:text-gray-700 dark:text-gray-300">We are committed to staying ahead of technological trends, offering cutting-edge solutions that drive your business forward.</p>
                    </div>
                    <div class="why-choose-us-reason scroll-in" style="transition-delay: 0.2s;">
                        <h3 class="text-xl font-semibold mb-2 light:text-blue-800 dark:text-blue-200">Customer-Centric Approach</h3>
                        <p class="text-base light:text-gray-700 dark:text-gray-300">Your unique needs are our priority. We tailor solutions to ensure they perfectly align with your business goals.</p>
                    </div>
                    <div class="why-choose-us-reason scroll-in" style="transition-delay: 0.3s;">
                        <h3 class="text-xl font-semibold mb-2 light:text-blue-800 dark:text-blue-200">Reliability & Trust</h3>
                        <p class="text-base light:text-gray-700 dark:text-gray-300">We deliver robust and dependable services, building long-term partnerships based on trust and consistent performance.</p>
                    </div>
                    <div class="why-choose-us-reason scroll-in" style="transition-delay: 0.4s;">
                        <h3 class="text-xl font-semibold mb-2 light:text-blue-800 dark:text-blue-200">Dedicated Support</h3>
                        <p class="text-base light:text-gray-700 dark:text-gray-300">Our responsive and knowledgeable support team is always ready to assist you every step of the way.</p>
                    </div>
                    <div class="why-choose-us-reason scroll-in" style="transition-delay: 0.5s;">
                        <h3 class="text-xl font-semibold mb-2 light:text-blue-800 dark:text-blue-200">Seamless Integration</h3>
                        <p class="text-base light:text-gray-700 dark:text-gray-300">We ensure our solutions integrate smoothly with your existing systems, minimizing disruption and maximizing efficiency.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="our-partners" class="our-partners-section py-16 px-4">
        <div class="container mx-auto">
            <h2 class="scroll-up text-center text-5xl font-bold mb-12">Our Partners</h2>
            <div class="partners-grid-container">
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 0s;">
                    <img src="image/axis.jpg" alt="Axis Communications">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 0.1s;">
                    <img src="image/bosch.jpg" alt="Bosch">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 0.2s;">
                    <img src="image/hikvision.jpg" alt="Hikvision">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 0.3s;">
                    <img src="image/uniview.jpg" alt="Uniview">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 0.4s;">
                    <img src="image/avaya.jpg" alt="Avaya">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 0.5s;">
                    <img src="image/yeaster.jpg" alt="Yeastar">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 0.6s;">
                    <img src="image/cisco.jpg" alt="Cisco">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 0.7s;">
                    <img src="image/grandstream.jpg" alt="Grandstream">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 0.8s;">
                    <img src="image/giganet.jpg" alt="Giganet">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 0.9s;">
                    <img src="image/siemon.jpg" alt="Siemon">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 1.0s;">
                    <img src="image/d-link.jpg" alt="D-Link">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 1.1s;">
                    <img src="image/commscope.jpg" alt="Commscope">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 1.2s;">
                    <img src="image/tp-link.jpg" alt="TP-Link">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 1.3s;">
                    <img src="image/ubiquity.jpg" alt="Ubiquiti">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 1.4s;">
                    <img src="image/fortinet.jpg" alt="Fortinet">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 1.5s;">
                    <img src="image/logitech.jpg" alt="Logitech">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 1.6s;">
                    <img src="image/anviz.jpg" alt="Anviz">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 1.7s;">
                    <img src="image/suprema.jpg" alt="Suprema">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 1.8s;">
                    <img src="image/zkteco.jpg" alt="ZKTeco">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 1.9s;">
                    <img src="image/huawei.jpg" alt="Huawei">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 2.0s;">
                    <img src="image/hp.jpg" alt="HP">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 2.1s;">
                    <img src="image/starlink.jpg" alt="Starlink">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 2.2s;">
                    <img src="image/dell.jpg" alt="Dell">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 2.3s;">
                    <img src="image/lenovo.jpg" alt="Lenovo">
                </div>
                <div class="partner-item scroll-in rounded-lg" style="transition-delay: 2.4s;">
                    <img src="image/stone.jpg" alt="Stone">
                </div>
            </div>
        </div>
    </section>

    <section id="info-contacts-support" class="info-contacts-support py-16 px-4">
        <h2 class="scroll-up text-center text-5xl font-bold mb-12">Information, Contacts, Support</h2>
        <div class="info-grid">
            <div class="info-card scroll-in rounded-lg" style="transition-delay: 0s;">
                <div class="info-icon rounded-full">
                    <i class="fas fa-info-circle"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4">Our Information</h3>
                <p class="text-base leading-relaxed">Best of Breed Technology Ltd.</p>
                <p class="text-base leading-relaxed">Canon Towers II, 2nd floor, Moi Avenue MOMBASA</p>
                <p class="text-base leading-relaxed">81209-80100</p>
                <p class="text-base leading-relaxed">Email: sales@bestofbreed.co.ke</p>
            </div>

            <div class="info-card scroll-in rounded-lg" style="transition-delay: 0.1s;">
                <div class="info-icon rounded-full">
                    <i class="fas fa-phone-volume"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4">Contact Us</h3>
                <p class="text-base leading-relaxed">Phone: +254718874865</p>
                <div class="flex justify-center gap-4 mt-4">
                    <a href="https://www.tiktok.com/@yourtech" target="_blank" aria-label="TikTok" class="text-gray-600 hover:text-blue-500 dark:text-gray-300 dark:hover:text-blue-400 text-3xl transition-colors duration-200">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="https://www.instagram.com/yourtech" target="_blank" aria-label="Instagram" class="text-gray-600 hover:text-blue-500 dark:text-gray-300 dark:hover:text-blue-400 text-3xl transition-colors duration-200">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/254718874865" target="_blank" aria-label="WhatsApp" class="text-gray-600 hover:text-blue-500 dark:text-gray-300 dark:hover:text-blue-400 text-3xl transition-colors duration-200">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <div class="info-card scroll-in rounded-lg" style="transition-delay: 0.2s;">
                <div class="info-icon rounded-full">
                    <i class="fas fa-life-ring"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4">Support</h3>
                <p class="text-base leading-relaxed">Technical Support: sales@bestofbreed.co.ke</p>
                <p class="text-base leading-relaxed">Customer Service: sales@bestofbreed.co.ke</p>
                <p class="text-base leading-relaxed">Phone: +254718874865</p>
            </div>
        </div>
    </section>

    <main class="listing-page-header p-8">
    </main>

    <footer class="scroll-up py-8 px-4 border-t light:border-gray-700 dark:border-gray-800 light:bg-gray-900 dark:bg-gray-950">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0 text-sm">
            <div class="footer-info text-center md:text-left light:text-gray-300 dark:text-gray-400">
                &copy; 2025 Best of Breed Technology Ltd. All rights reserved.
            </div>
            <div class="footer-contact text-center md:text-right light:text-gray-300 dark:text-gray-400">
                Phone: +254718874865 | Email: sales@bestofbreed.co.ke
            </div>
            <nav class="footer-nav">
                <ul class="flex space-x-4">
                    <li><a href="#" class="light:text-blue-300 dark:text-blue-400 hover:underline transition-colors duration-200">Privacy Policy</a></li>
                    <li><a href="#" class="light:text-blue-300 dark:text-blue-400 hover:underline transition-colors duration-200">Terms of Service</a></li>
                </ul>
            </nav>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const header = document.querySelector('.header');
            const hamburgerMenu = document.querySelector('.hamburger-menu');
            const mobileNav = document.querySelector('.mobile-nav');
            const closeButton = document.querySelector('.close-button');
            const darkModeToggle = document.getElementById('darkModeToggle');
            const htmlElement = document.documentElement; // The <html> tag

            let lastScrollY = window.scrollY;
            const scrollThreshold = 50; // Pixels to scroll before hiding header

            // --- Header Scroll Behavior ---
            window.addEventListener('scroll', () => {
                const currentScrollY = window.scrollY;

                // Hide header on scroll down
                if (currentScrollY > lastScrollY && currentScrollY > scrollThreshold) {
                    header.classList.add('hidden-scroll');
                }
                // Show header on scroll up
                else if (currentScrollY < lastScrollY) {
                    header.classList.remove('hidden-scroll');
                }
                lastScrollY = currentScrollY;
            });

            // --- Mobile Navigation Toggle ---
            hamburgerMenu.addEventListener('click', () => {
                mobileNav.classList.remove('translate-x-full');
                mobileNav.classList.add('translate-x-0');
                hamburgerMenu.classList.add('active'); // Add active class for animation
            });

            closeButton.addEventListener('click', () => {
                mobileNav.classList.remove('translate-x-0');
                mobileNav.classList.add('translate-x-full');
                hamburgerMenu.classList.remove('active'); // Remove active class
                // Also close the mobile dropdown when the main mobile nav closes
                const mobileDropdownContent = document.querySelector('.mobile-dropdown-content');
                const mobileDropdownToggle = document.querySelector('.mobile-dropdown-toggle');
                if (mobileDropdownContent) {
                    mobileDropdownContent.classList.add('hidden');
                    mobileDropdownToggle.classList.remove('active');
                }
            });

            // Close mobile nav when a link is clicked
            mobileNav.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    // Only close if the clicked link is NOT a mobile dropdown toggle itself
                    if (!link.classList.contains('mobile-dropdown-toggle')) {
                        mobileNav.classList.remove('translate-x-0');
                        mobileNav.classList.add('translate-x-full');
                        hamburgerMenu.classList.remove('active');
                        // Also close the mobile dropdown when a sub-link is clicked
                        const mobileDropdownContent = document.querySelector('.mobile-dropdown-content');
                        const mobileDropdownToggle = document.querySelector('.mobile-dropdown-toggle');
                        if (mobileDropdownContent) {
                            mobileDropdownContent.classList.add('hidden');
                            mobileDropdownToggle.classList.remove('active');
                        }
                    }
                });
            });

            // --- Dark Mode Toggle ---
            // Set initial theme based on localStorage or default to dark
            const currentTheme = localStorage.getItem('theme');
            if (currentTheme === 'light') {
                htmlElement.classList.remove('dark');
                htmlElement.classList.add('light');
            } else {
                // Default to dark mode if no preference is saved or if it's 'dark'
                htmlElement.classList.add('dark');
                htmlElement.classList.remove('light');
                localStorage.setItem('theme', 'dark'); // Save dark as default
            }

            darkModeToggle.addEventListener('click', () => {
                if (htmlElement.classList.contains('dark')) {
                    htmlElement.classList.remove('dark');
                    htmlElement.classList.add('light');
                    localStorage.setItem('theme', 'light');
                } else {
                    htmlElement.classList.remove('light');
                    htmlElement.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                }
            });

            // --- Desktop Dropdown (for Products & Solutions) - Click to toggle ---
            const dropdownToggle = document.querySelector('.dropdown-toggle');
            const dropdownContent = document.querySelector('.dropdown-content');

            dropdownToggle.addEventListener('click', (event) => {
                event.preventDefault(); // Prevent default link navigation

                // Toggle visibility of the dropdown content
                if (dropdownContent.style.display === 'block') {
                    dropdownContent.style.display = 'none';
                } else {
                    dropdownContent.style.display = 'block';
                }
            });

            // Close dropdown if clicked outside
            document.addEventListener('click', (event) => {
                const isClickInsideDropdown = dropdownToggle.contains(event.target) || dropdownContent.contains(event.target);
                if (!isClickInsideDropdown && dropdownContent.style.display === 'block') {
                    dropdownContent.style.display = 'none';
                }
            });

            // --- Mobile Dropdown (for Products & Solutions) - Click to toggle ---
            const mobileDropdownToggle = document.querySelector('.mobile-dropdown-toggle');
            const mobileDropdownContent = document.querySelector('.mobile-dropdown-content');

            if (mobileDropdownToggle && mobileDropdownContent) {
                mobileDropdownToggle.addEventListener('click', (event) => {
                    event.preventDefault(); // Prevent default link navigation

                    // Toggle hidden class for visibility
                    mobileDropdownContent.classList.toggle('hidden');
                    // Toggle active class for arrow rotation
                    mobileDropdownToggle.classList.toggle('active');
                });
            }

            // --- Three.js Smoke Effect Background ---
            let scene, camera, renderer, planeMesh;
            const heroBackgroundContainer = document.getElementById('hero-background');

            function initThreeJs() {
                // Ensure THREE is defined before proceeding
                if (typeof THREE === 'undefined') {
                    console.error("THREE.js library not loaded. Retrying initialization...");
                    return; // Exit if THREE is not yet defined
                }

                // Scene
                scene = new THREE.Scene();

                // Camera
                camera = new THREE.PerspectiveCamera(75, heroBackgroundContainer.clientWidth / heroBackgroundContainer.clientHeight, 0.1, 1000);
                camera.position.z = 1; // Position camera slightly back

                // Renderer
                renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true }); // alpha: true for transparency
                renderer.setSize(heroBackgroundContainer.clientWidth, heroBackgroundContainer.clientHeight);
                heroBackgroundContainer.appendChild(renderer.domElement);

                // Geometry
                const planeGeometry = new THREE.PlaneGeometry(2, 2); // A plane that covers the screen

                // Shader Material for Smoke Effect
                const smokeMaterial = new THREE.ShaderMaterial({
                    uniforms: {
                        time: { value: 0.0 },
                        resolution: { value: new THREE.Vector2() },
                        color1: { value: new THREE.Color(0x2b6cb0) }, // Blue color for light mode smoke
                        color2: { value: new THREE.Color(0x4a5568) }, // Gray color for light mode smoke
                        darkColor1: { value: new THREE.Color(0x63b3ed) }, // Light blue for dark mode smoke
                        darkColor2: { value: new THREE.Color(0xcbd5e0) },  // Light gray for dark mode smoke
                        isDarkMode: { value: 0.0 } // New uniform to pass dark mode state (0.0 for light, 1.0 for dark)
                    },
                    vertexShader: `
                        void main() {
                            gl_Position = vec4(position, 1.0);
                        }
                    `,
                    fragmentShader: `
                        uniform float time;
                        uniform vec2 resolution;
                        uniform vec3 color1;
                        uniform vec3 color2;
                        uniform vec3 darkColor1;
                        uniform vec3 darkColor2;
                        uniform float isDarkMode; // Receive dark mode state

                        // Simple hash function for pseudo-randomness
                        float hash(vec2 p) {
                            return fract(sin(dot(p, vec2(12.9898, 78.233))) * 43758.5453);
                        }

                        // Simple 2D noise function (combining multiple octaves of hash)
                        float noise(vec2 p) {
                            vec2 i = floor(p);
                            vec2 f = fract(p);
                            vec2 u = f * f * (3.0 - 2.0 * f); // Corrected smoothstep interpolation

                            float a = hash(i);
                            float b = hash(i + vec2(1.0, 0.0));
                            float c = hash(i + vec2(0.0, 1.0));
                            float d = hash(i + vec2(1.0, 1.0));

                            return mix(mix(a, b, u.x), mix(c, d, u.x), u.y);
                        }

                        // Fractional Brownian Motion (fBm) for more complex noise
                        float fbm(vec2 p) {
                            float value = 0.0;
                            float amplitude = 0.5;
                            float frequency = 1.0;
                            for (int i = 0; i < 4; ++i) { // 4 octaves
                                value += amplitude * noise(p * frequency);
                                amplitude *= 0.5;
                                frequency *= 2.0;
                            }
                            return value;
                        }

                        void main() {
                            vec2 uv = gl_FragCoord.xy / resolution.xy;
                            uv.x -= 0.5;
                            uv.y -= 0.5;
                            uv.x *= resolution.x / resolution.y; // Aspect ratio correction

                            // Animate noise
                            vec2 p = uv * 4.0; // Scale noise
                            p.x += time * 0.1; // Move noise horizontally
                            p.y += sin(time * 0.05) * 0.1; // Subtle vertical movement

                            float n = fbm(p); // Generate noise
                            n = pow(n * 1.5, 2.0); // Sharpen and enhance contrast

                            // Determine colors based on dark mode uniform
                            vec3 finalColor;
                            if (isDarkMode > 0.5) { // Check if dark mode is active (float comparison)
                                finalColor = mix(darkColor1, darkColor2, n);
                            } else {
                                finalColor = mix(color1, color2, n);
                            }

                            gl_FragColor = vec4(finalColor, n * 0.8); // Alpha based on noise for transparency
                        }
                    `,
                    transparent: true, // Enable transparency
                    blending: THREE.AdditiveBlending // Good for smoke/glow effects
                });

                planeMesh = new THREE.Mesh(planeGeometry, smokeMaterial);
                scene.add(planeMesh);

                // Initial resolution uniform update
                smokeMaterial.uniforms.resolution.value.x = heroBackgroundContainer.clientWidth;
                smokeMaterial.uniforms.resolution.value.y = heroBackgroundContainer.clientHeight;
            }

            function animate() {
                requestAnimationFrame(animate);

                // Update time uniform for animation
                if (planeMesh && planeMesh.material.uniforms.time) {
                    planeMesh.material.uniforms.time.value += 0.005; // Adjust speed
                }

                // Update isDarkMode uniform based on current theme
                const isDark = htmlElement.classList.contains('dark');
                if (planeMesh && planeMesh.material.uniforms.isDarkMode) {
                    planeMesh.material.uniforms.isDarkMode.value = isDark ? 1.0 : 0.0;
                }

                renderer.render(scene, camera);
            }

            function onWindowResize() {
                if (camera && renderer && heroBackgroundContainer) {
                    camera.aspect = heroBackgroundContainer.clientWidth / heroBackgroundContainer.clientHeight;
                    camera.updateProjectionMatrix();
                    renderer.setSize(heroBackgroundContainer.clientWidth, heroBackgroundContainer.clientHeight);
                    if (planeMesh && planeMesh.material.uniforms.resolution) {
                        planeMesh.material.uniforms.resolution.value.x = heroBackgroundContainer.clientWidth;
                        planeMesh.material.uniforms.resolution.value.y = heroBackgroundContainer.clientHeight;
                    }
                }
            }

            // Initialize Three.js when the DOM is ready, with a check for THREE
            if (heroBackgroundContainer) {
                const checkThreeJsReady = setInterval(() => {
                    if (typeof THREE !== 'undefined') {
                        clearInterval(checkThreeJsReady); // Stop checking once loaded
                        initThreeJs();
                        animate();
                        window.addEventListener('resize', onWindowResize);
                    }
                }, 100); // Check every 100ms
            } else {
                console.error("Hero background container not found. Three.js not initialized.");
            }

            // --- Intersection Observer for Scroll Animations ---
            const observerOptions = {
                root: null, // viewport
                rootMargin: '0px',
                threshold: 0.1 // Trigger when 10% of element is visible
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        // Optionally, stop observing once animated
                        // observer.unobserve(entry.target);
                    } else {
                        // Optional: remove 'active' class if you want animation to reset on scroll out
                        // entry.target.classList.remove('active');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.scroll-up, .scroll-in, .scroll-left, .scroll-right').forEach(element => {
                observer.observe(element);
            });
        });
    </script>
</body>
</html>
