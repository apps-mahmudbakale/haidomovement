<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join The Movement | Dr. Shamsuddeen Aliyu Haido Solidarity Movement</title>
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

        /* Form specific styles */
        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
        }

        .form-progress {
            transition: width 0.3s ease;
        }

        /* Loading spinner */
        .spinner {
            border: 3px solid #f3f4f6;
            border-top: 3px solid #10b981;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Error and success messages */
        .alert {
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 16px;
            border: 1px solid;
        }

        .alert-error {
            background-color: #fef2f2;
            border-color: #fca5a5;
            color: #dc2626;
        }

        .alert-success {
            background-color: #f0fdf4;
            border-color: #86efac;
            color: #16a34a;
        }

        .alert-warning {
            background-color: #fffbeb;
            border-color: #fbbf24;
            color: #d97706;
        }

        body.dark .alert-error {
            background-color: #7f1d1d;
            border-color: #dc2626;
            color: #fca5a5;
        }

        body.dark .alert-success {
            background-color: #14532d;
            border-color: #16a34a;
            color: #86efac;
        }

        body.dark .alert-warning {
            background-color: #451a03;
            border-color: #d97706;
            color: #fbbf24;
        }

        /* Multi-select styling */
        .multi-select {
            position: relative;
        }

        .multi-select-dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            max-height: 200px;
            overflow-y: auto;
            z-index: 1000;
            display: none;
        }

        body.dark .multi-select-dropdown {
            background: var(--card-dark);
            border-color: var(--border-dark);
        }

        .multi-select-option {
            padding: 10px;
            cursor: pointer;
            border-bottom: 1px solid #f3f4f6;
        }

        body.dark .multi-select-option {
            border-bottom-color: var(--border-dark);
        }

        .multi-select-option:hover {
            background-color: #f9fafb;
        }

        body.dark .multi-select-option:hover {
            background-color: var(--bg-dark);
        }

        .multi-select-option.selected {
            background-color: #e5f3ff;
        }

        body.dark .multi-select-option.selected {
            background-color: #065f46;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <header id="header" class="py-4 px-6 transition-all duration-300 bg-white dark:bg-gray-900">
        <div class="container mx-auto flex justify-between items-center">
            <a href="index.html" class="flex items-center">
                <img src="./logo.png" alt="Dr. Shamsuddeen Aliyu Haido" class="h-20 md:h-24 logo-fade-in">
            </a>
            </a>

            <nav class="hidden md:flex items-center">
                <a href="index.html#about" class="nav-link text-gray-800 dark:text-gray-200 hover:text-green-700 dark:hover:text-green-400">About</a>
                <a href="index.html#objectives" class="nav-link text-gray-800 dark:text-gray-200 hover:text-green-700 dark:hover:text-green-400">Objectives</a>

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
            <a href="index.html#about" class="py-2 text-gray-800 dark:text-gray-200 hover:text-green-700 dark:hover:text-green-400 border-b border-gray-200 dark:border-gray-700">About</a>
            <a href="index.html#objectives" class="py-2 text-gray-800 dark:text-gray-200 hover:text-green-700 dark:hover:text-green-400 border-b border-gray-200 dark:border-gray-700">Objectives</a>

            <div class="flex items-center mt-4">
                <span class="mr-3 text-gray-800 dark:text-gray-200">Theme:</span>
                <button id="mobile-theme-toggle" class="p-2 rounded-full bg-gray-200 dark:bg-gray-700 focus:outline-none">
                    <i id="mobile-theme-icon" class="fas fa-moon text-gray-800 dark:text-yellow-300"></i>
                </button>
            </div>
        </nav>
    </div>

    <!-- Registration Form Section -->
    <section class="py-20 from-green-50 to-green-100 dark:from-gray-900 dark:to-gray-800 min-h-screen">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <!-- Header -->
                <div class="text-center mb-12" data-aos="fade-up">
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white mb-4">Join Dr. Shamsuddeen's Movement</h1>
                    <p class="text-xl text-gray-600 dark:text-gray-300 mb-8">Stand with Dr. Shamsuddeen Aliyu Haido and be part of the transformative vision for Sokoto State. Your support strengthens our collective impact.</p>

                    <!-- Single-page form: all sections shown -->
                </div>

                <!-- Registration Form -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8" data-aos="fade-up" data-aos-delay="200">
                    <!-- Alert Messages -->
                    <div id="alert-container"></div>

                    <form id="registration-form">
                        <!-- CSRF token will be fetched from the server and stored here -->
                        <input type="hidden" id="csrfToken" name="csrf_token" value="">
                        <!-- Step 1: Personal Information -->
                        <div id="step-1" class="form-step active">
                            <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-6">Personal Information</h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="md:col-span-2">
                                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="fullname">
                                        Full Name <span class="text-red-500">*</span>
                                    </label>
                                    <input class="w-full px-3 py-3 text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" id="fullname" type="text" required placeholder="Enter your full name">
                                </div>

                                <div>
                                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="gender">
                                        Gender <span class="text-red-500">*</span>
                                    </label>
                                    <select class="w-full px-3 py-3 text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" id="gender" required>
                                        <option value="">Select gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="ageRange">
                                        Age Range <span class="text-red-500">*</span>
                                    </label>
                                    <select class="w-full px-3 py-3 text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" id="ageRange" required>
                                        <option value="">Select age range</option>
                                        <option value="18-24">18 - 24</option>
                                        <option value="25-34">25 - 34</option>
                                        <option value="35-44">35 - 44</option>
                                        <option value="45-54">45 - 54</option>
                                        <option value="55-64">55 - 64</option>
                                        <option value="65+">65+</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="phone">
                                        Phone Number <span class="text-red-500">*</span>
                                    </label>
                                    <input class="w-full px-3 py-3 text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" id="phone" type="tel" required placeholder="Enter your phone number">
                                </div>

                                <div>
                                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="email">
                                        Email Address
                                    </label>
                                    <input class="w-full px-3 py-3 text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" id="email" type="email" placeholder="Enter your email address">
                                </div>

                                <div class="md:col-span-2">
                                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="address">
                                        Residential Address <span class="text-red-500">*</span>
                                    </label>
                                    <textarea class="w-full px-3 py-3 text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" id="address" rows="2" required placeholder="Enter your residential address"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2: Voting Information -->
                        <div id="step-2" class="form-step active">
                            <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-6">Voting Information</h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="lga">
                                        Local Government Area <span class="text-red-500">*</span>
                                    </label>
                                    <select class="w-full px-3 py-3 text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" id="lga" required>
                                        <option value="">Select LGA</option>
                                        <option value="binji">Binji</option>
                                        <option value="bodinga">Bodinga</option>
                                        <option value="dange-shuni">Dange-Shuni</option>
                                        <option value="gada">Gada</option>
                                        <option value="goronyo">Goronyo</option>
                                        <option value="gudu">Gudu</option>
                                        <option value="gwadabawa">Gwadabawa</option>
                                        <option value="illela">Illela</option>
                                        <option value="isa">Isa</option>
                                        <option value="kebbe">Kebbe</option>
                                        <option value="kware">Kware</option>
                                        <option value="rabah">Rabah</option>
                                        <option value="sabon-birni">Sabon Birni</option>
                                        <option value="shagari">Shagari</option>
                                        <option value="silame">Silame</option>
                                        <option value="sokoto-north">Sokoto North</option>
                                        <option value="sokoto-south">Sokoto South</option>
                                        <option value="tambuwal">Tambuwal</option>
                                        <option value="tangaza">Tangaza</option>
                                        <option value="tureta">Tureta</option>
                                        <option value="wamako">Wamako</option>
                                        <option value="wurno">Wurno</option>
                                        <option value="yabo">Yabo</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="ward">
                                        Ward <span class="text-red-500">*</span>
                                    </label>
                                    <select class="w-full px-3 py-3 text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" id="ward" required>
                                        <option value="">Select ward</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="pollingUnit">
                                        Polling Unit <span class="text-red-500">*</span>
                                    </label>
                                    <select class="w-full px-3 py-3 text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" id="pollingUnit" required>
                                        <option value="">Select polling unit</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="hasVoterCard">
                                        Do you have a Voter's Card? <span class="text-red-500">*</span>
                                    </label>
                                    <select id="hasVoterCard" class="w-full px-3 py-3 text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                                        <option value="">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>



                                <div class="md:col-span-2">
                                    <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg mb-4">
                                        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-2">Undertaking</h4>
                                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                                            I hereby declare that:
                                        </p>
                                        <ul class="list-disc list-inside text-gray-600 dark:text-gray-400 space-y-2">
                                            <li>All information provided above is true and accurate</li>
                                            <li>I am a registered voter in Sokoto State</li>
                                            <li>I support Dr. Shamsuddeen Aliyu Haido's vision for Sokoto State</li>
                                            <li>I will participate actively in the movement's activities</li>
                                        </ul>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <input type="checkbox" id="agreement" class="w-4 h-4 text-green-600 border-gray-300 rounded focus:ring-green-500 dark:bg-gray-700 dark:border-gray-600" required>
                                        <label for="agreement" class="ml-2 text-gray-700 dark:text-gray-300">
                                            I agree to the undertaking and confirm all information is correct <span class="text-red-500">*</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Professional & committee sections removed per request -->

                        <!-- Navigation Buttons -->
                        <div class="flex justify-between items-center mt-8">
                            <button type="button" id="prev-btn" class="hidden bg-gray-500 hover:bg-gray-600 text-white font-medium py-3 px-6 rounded-lg transition-all duration-300">
                                <i class="fas fa-arrow-left mr-2"></i> Previous
                            </button>

                            <div class="flex-1"></div>

                            <button type="button" id="next-btn" class="hidden bg-green-700 hover:bg-green-800 text-white font-medium py-3 px-6 rounded-lg transition-all duration-300">
                                Next <i class="fas fa-arrow-right ml-2"></i>
                            </button>

                            <button type="submit" id="submit-btn" class="bg-green-700 hover:bg-green-800 text-white font-medium py-3 px-6 rounded-lg transition-all duration-300">
                                <span id="submit-text">
                                    <i class="fas fa-paper-plane mr-2"></i> Submit Application
                                </span>
                                <span id="submit-loading" class="hidden">
                                    <div class="spinner inline-block mr-2"></div> Submitting...
                                </span>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Success Message -->
                <div id="success-message" class="hidden bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 mt-8 text-center" data-aos="fade-up">
                    <div class="text-green-600 dark:text-green-400 text-6xl mb-4">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4">Application Submitted Successfully!</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">
                        Thank you for joining Dr. Shamsuddeen's Solidarity Movement. Your registration has been received, and we're excited to have you as part of our mission for a better Sokoto State. You will receive a confirmation via email or SMS shortly.
                    </p>
                    <a href="index.html" class="inline-block bg-green-700 hover:bg-green-800 text-white font-medium py-3 px-6 rounded-lg transition-all duration-300">
                        <i class="fas fa-home mr-2"></i> Return to Home
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center mb-8">
                <div class="mb-6 md:mb-0">
                    <img src="./logo.png" alt="Dr. Shamsuddeen Aliyu Haido" class="h-16 rounded-lg">
                </div>

                <div class="flex space-x-4">
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
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8">
                <div class="text-center text-gray-400 text-sm">
                    <p>&copy; 2025 Dr. Shamsuddeen Aliyu Haido Solidarity Movement. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="config.js"></script>
    <script src="script.js" defer></script>
    <script>
        // Registration form configuration
        const DIRECTUS_API_URL = CONFIG?.DIRECTUS_API_URL || 'http://haido.test';

        // Ward data for each LGA in Sokoto State
        const wardData = {


        };
        // Form state
        let currentStep = 1;
        const totalSteps = 1;
        let formData = {};

        // Initialize the form when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Registration form loaded');
            initializeForm();
            setupLGAAndWard();
            setupPollingUnits();
            // Attempt to fetch a CSRF token (if available) and populate hidden field
            fetchCsrfToken();
        });

        // Initialize form components
        function initializeForm() {
            setupStepNavigation();
        }

        // Setup LGA and Ward dropdowns
        function setupLGAAndWard() {
            const lgaSelect = document.getElementById('lga');
            const wardSelect = document.getElementById('ward');

            lgaSelect.addEventListener('change', (e) => {
                const selectedLGA = e.target.value;
                populateWards(selectedLGA);
            });

            // Populate wards for the default selected LGA, if any
            if (lgaSelect.value) {
                populateWards(lgaSelect.value);
            }
        }

        // Voter card number removed; only the Yes/No select remains

        // Populate ward dropdown based on selected LGA
        function populateWards(lga) {
            const wardSelect = document.getElementById('ward');
            wardSelect.innerHTML = '<option value="">Select ward</option>';
            if (!lga) return;
            const url = `${DIRECTUS_API_URL}/lgas/${encodeURIComponent(lga)}/wards`;

            (async () => {
                try {
                    const res = await fetch(url);
                    if (!res.ok) throw new Error('Network response was not ok');
                    const json = await res.json();

                    // Normalize possible envelopes. Examples:
                    // { data: { wards: [...] } }
                    // { data: [...] }
                    // { wards: [...] }
                    // [ ... ]
                    let wards = [];
                    if (Array.isArray(json)) {
                        wards = json;
                    } else if (json && Array.isArray(json.data)) {
                        wards = json.data;
                    } else if (json && json.data && Array.isArray(json.data.wards)) {
                        wards = json.data.wards;
                    } else if (json && Array.isArray(json.wards)) {
                        wards = json.wards;
                    }

                    if (Array.isArray(wards) && wards.length > 0) {
                        wards.forEach(w => {
                            const option = document.createElement('option');
                            const name = (typeof w === 'string') ? w : (w.name || w.title || w.ward || '').toString();
                            const id = (w && w.id !== undefined && w.id !== null) ? w.id : null;
                            option.value = id !== null ? id : name.toLowerCase().replace(/\//g, '-').replace(/\s+/g, '-');
                            option.textContent = name || option.value;
                            wardSelect.appendChild(option);
                        });
                        // done
                        const pu = document.getElementById('pollingUnit');
                        if (pu) pu.innerHTML = '<option value="">Select polling unit</option>';
                        return;
                    }
                } catch (err) {
                    console.warn('populateWards API attempt failed for', url, err);
                }

                // Fallback to offline wardData
                if (wardData[lga]) {
                    wardData[lga].sort().forEach(ward => {
                        const option = document.createElement('option');
                        option.value = ward.toLowerCase().replace(/\//g, '-').replace(/\s+/g, '-');
                        option.textContent = ward;
                        wardSelect.appendChild(option);
                    });
                }

                const pu = document.getElementById('pollingUnit');
                if (pu) pu.innerHTML = '<option value="">Select polling unit</option>';
            })();
        }

        // Setup Polling Unit dropdown
        function setupPollingUnits() {
            const wardSelect = document.getElementById('ward');
            wardSelect.addEventListener('change', (e) => {
                const selectedWard = e.target.value;
                const lgaSelect = document.getElementById('lga');
                const selectedLGA = lgaSelect.value;
                if (selectedLGA && selectedWard) {
                    populatePollingUnits(selectedWard);
                }
            });
        }

        // Attempt to fetch CSRF token from server and place it in the hidden input
        async function fetchCsrfToken() {
            const input = document.getElementById('csrfToken');
            if (!input) return null;

            // Candidate endpoints to try (can be overridden by CONFIG)
            const candidates = [];
            try {
                if (typeof CONFIG !== 'undefined' && CONFIG?.ENDPOINTS && CONFIG.ENDPOINTS.CSRF_TOKEN) {
                    candidates.push(CONFIG.ENDPOINTS.CSRF_TOKEN);
                }
                if (typeof CONFIG !== 'undefined' && CONFIG?.API && CONFIG.API.SUBMIT && CONFIG.API.SUBMIT.CSRF_ENDPOINT) {
                    candidates.push(CONFIG.API.SUBMIT.CSRF_ENDPOINT);
                }
            } catch (e) {
                // ignore
            }

            // default fallbacks
            const base = (typeof CONFIG !== 'undefined' && CONFIG?.DIRECTUS_API_URL) ? CONFIG.DIRECTUS_API_URL : DIRECTUS_API_URL || '';
            candidates.push(base.replace(/\/$/, '') + '/csrf-token');
            candidates.push(base.replace(/\/$/, '') + '/session/csrf');

                for (const url of candidates) {
                if (!url) continue;
                try {
                    // optionally include credentials when fetching token if configured in CONFIG
                    const fetchOpts = { method: 'GET', headers: { 'Accept': 'application/json' } };
                    try {
                        if (typeof CONFIG !== 'undefined' && CONFIG?.API && CONFIG.API.SUBMIT && CONFIG.API.SUBMIT.CSRF_USE_CREDENTIALS) {
                            fetchOpts.credentials = 'include';
                        }
                    } catch (e) { /* ignore */ }

                    const res = await fetch(url, fetchOpts);
                    if (!res.ok) continue;

                    // Try to read token from headers first
                    const headerToken = res.headers.get('x-csrf-token') || res.headers.get('x-xsrf-token');
                    if (headerToken) {
                        input.value = headerToken;
                        console.log('CSRF token obtained from header:', url);
                        return headerToken;
                    }

                    const json = await res.json().catch(() => null);
                    if (!json) continue;

                    // possible shapes: { csrf_token: '...' }, { csrf: '...' }, { token: '...' }, { data: { csrf_token: '...' }}
                    const token = json.csrf_token || json.csrf || json.token || (json.data && (json.data.csrf_token || json.data.token));
                    if (token) {
                        input.value = token;
                        console.log('CSRF token obtained from', url);
                        return token;
                    }
                } catch (err) {
                    console.warn('fetchCsrfToken: failed to fetch', url, err);
                    continue;
                }
            }

            console.info('No CSRF token found from candidates; proceeding without one.');
            return null;
        }

        // Populate polling unit dropdown based on LGA and ward
        function populatePollingUnits(ward) {
            const pollingUnitSelect = document.getElementById('pollingUnit');
            pollingUnitSelect.innerHTML = '<option value="">Select polling unit</option>';
            console.log(ward)
            // Try several endpoint patterns and normalize envelopes like:
            // { data: { polling_units: [...] } } (your example)
            // { data: [...] }
            // { polling_units: [...] }
            // direct array [...]
            const endpoints = [
                `${DIRECTUS_API_URL}/wards/${encodeURIComponent(ward)}/polling-units`,
                `${DIRECTUS_API_URL}/polling-units?filter[ward][_eq]=${encodeURIComponent(ward)}`,
                `${DIRECTUS_API_URL}/items/polling_units?filter[ward][_eq]=${encodeURIComponent(ward)}`
            ];

            const tryFetch = async () => {
                for (const url of endpoints) {
                    try {
                        const res = await fetch(url);
                        if (!res.ok) continue;
                        const json = await res.json();

                        let units = [];
                        if (Array.isArray(json)) units = json;
                        else if (json && Array.isArray(json.data)) units = json.data;
                        else if (json && json.data && Array.isArray(json.data.polling_units)) units = json.data.polling_units;
                        else if (json && Array.isArray(json.polling_units)) units = json.polling_units;

                        if (!Array.isArray(units) || units.length === 0) continue;

                        units.forEach(unit => {
                            const option = document.createElement('option');
                            const name = (typeof unit === 'string') ? unit : (unit.name || unit.title || '').toString();
                            const id = (unit && unit.id !== undefined && unit.id !== null) ? unit.id : name.toLowerCase().replace(/\s+/g, '-');
                            option.value = id;
                            option.textContent = name || id;
                            pollingUnitSelect.appendChild(option);
                        });

                        return true;
                    } catch (err) {
                        console.warn('populatePollingUnits: failed to fetch from', url, err);
                        continue;
                    }
                }
                return false;
            };

            tryFetch().then(found => {
                if (!found) {
                    // Fallback to local pollingUnitData (if ward keyed by slug/name)
                    // Try to locate by ward name or ward slug
                    let foundLocal = false;
                    for (const lgaKey in pollingUnitData) {
                        const wardMap = pollingUnitData[lgaKey];
                        if (!wardMap) continue;
                        // exact match
                        if (wardMap[ward]) {
                            wardMap[ward].sort().forEach(pu => {
                                const option = document.createElement('option');
                                option.value = pu.toLowerCase().replace(/\//g, '-').replace(/\s+/g, '-');
                                option.textContent = pu;
                                pollingUnitSelect.appendChild(option);
                            });
                            foundLocal = true;
                            break;
                        }
                        // try case-insensitive match
                        const matchKey = Object.keys(wardMap).find(k => k.toLowerCase() === ward.toString().toLowerCase());
                        if (matchKey) {
                            wardMap[matchKey].sort().forEach(pu => {
                                const option = document.createElement('option');
                                option.value = pu.toLowerCase().replace(/\//g, '-').replace(/\s+/g, '-');
                                option.textContent = pu;
                                pollingUnitSelect.appendChild(option);
                            });
                            foundLocal = true;
                            break;
                        }
                    }

                    if (!foundLocal) {
                        const option = document.createElement('option');
                        option.value = '';
                        option.textContent = 'No polling units available – enter manually';
                        option.disabled = true;
                        pollingUnitSelect.appendChild(option);
                        showAlert('Polling unit data loading from API in production. Using samples for demo.', 'warning');
                    }
                }
            });
        }

        // Setup step navigation
        function setupStepNavigation() {
            const nextBtn = document.getElementById('next-btn');
            const prevBtn = document.getElementById('prev-btn');
            const submitBtn = document.getElementById('submit-btn');
            const form = document.getElementById('registration-form');

            nextBtn.addEventListener('click', () => {
                if (validateCurrentStep()) {
                    nextStep();
                }
            });

            prevBtn.addEventListener('click', () => {
                prevStep();
            });

            form.addEventListener('submit', (e) => {
                e.preventDefault();
                if (validateCurrentStep()) {
                    submitForm();
                }
            });
        }

        // Step navigation functions
        function nextStep() {
            // single-page form: navigation not required
        }

        function prevStep() {
            // single-page form: navigation not required
        }

        function updateProgress() {
            // single-page form: no progress bar
        }

        function updateButtons() {
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');
            const submitBtn = document.getElementById('submit-btn');
            // Ensure submit is visible on single-page form
            if (prevBtn) prevBtn.classList.add('hidden');
            if (nextBtn) nextBtn.classList.add('hidden');
            if (submitBtn) submitBtn.classList.remove('hidden');
        }

        // Form validation
        function validateCurrentStep() {
            const currentStepElement = document.getElementById(`step-${currentStep}`);
            const requiredFields = currentStepElement.querySelectorAll('[required]');
            let isValid = true;

            clearErrors();

            requiredFields.forEach(field => {
                // Some selects may have non-string values; guard .value
                const val = (field.value || '').toString();
                if (!val.trim()) {
                    isValid = false;
                    field.classList.add('border-red-500');
                    field.classList.remove('border-gray-300');
                }
            });

            // Voter card number removed; only Yes/No select is required (already in requiredFields)

            if (!isValid) {
                showAlert('Please fill in all required fields.', 'error');
            }

            return isValid;
        }

        function clearErrors() {
            const inputs = document.querySelectorAll('input, select, textarea');
            inputs.forEach(input => {
                input.classList.remove('border-red-500');
                input.classList.add('border-gray-300');
            });
        }

        // Submit form
        async function submitForm() {
            const submitBtn = document.getElementById('submit-btn');
            const submitText = document.getElementById('submit-text');
            const submitLoading = document.getElementById('submit-loading');

            submitText.classList.add('hidden');
            submitLoading.classList.remove('hidden');
            submitBtn.disabled = true;

            try {
                const formDataToSubmit = collectFormData();

                // Resolve submit URL: prefer configured endpoint, fall back to Directus default
                function getSubmitUrl() {
                    const configured = (typeof CONFIG !== 'undefined' && CONFIG?.ENDPOINTS && CONFIG.ENDPOINTS.MEMBERSHIP_APPLICATION) ? CONFIG.ENDPOINTS.MEMBERSHIP_APPLICATION : null;
                    const endpoint = configured || '/items/membership_application';
                    // If configured is a full URL, use as-is
                    if (/^https?:\/\//i.test(endpoint)) return endpoint;
                    const base = (typeof CONFIG !== 'undefined' && CONFIG?.DIRECTUS_API_URL) ? CONFIG.DIRECTUS_API_URL : DIRECTUS_API_URL || '';
                    return base.replace(/\/$/, '') + '/' + endpoint.replace(/^\//, '');
                }

                const submitUrl = getSubmitUrl();
                console.log('Submitting application to', submitUrl, formDataToSubmit);

                // Build headers and fetch options based on config
                const headers = {
                    'Content-Type': 'application/json'
                };
                // Attach CSRF or Authorization if configured
                try {
                    if (typeof CONFIG !== 'undefined' && CONFIG?.API?.SUBMIT) {
                        const submitCfg = CONFIG.API.SUBMIT || {};
                        if (submitCfg.CSRF_TOKEN) {
                            headers['X-CSRF-TOKEN'] = submitCfg.CSRF_TOKEN;
                        }
                        if (submitCfg.AUTH_BEARER) {
                            headers['Authorization'] = 'Bearer ' + submitCfg.AUTH_BEARER;
                        }
                    }
                } catch (e) {
                    console.warn('Unable to read CONFIG for submit headers', e);
                }

                // If we fetched a CSRF token into the hidden field, attach it to headers and payload
                try {
                    const hidden = document.getElementById('csrfToken');
                    if (hidden && hidden.value) {
                        headers['X-CSRF-TOKEN'] = hidden.value;
                        // Attach common alternative header name too
                        headers['X-XSRF-TOKEN'] = hidden.value;
                        // also include in the payload for servers expecting it in body
                        formDataToSubmit.csrf_token = hidden.value;
                    }
                } catch (e) {
                    console.warn('Unable to attach hidden CSRF token', e);
                }

                // Log final payload so you can inspect in DevTools console and verify csrf_token presence
                try {
                    console.log('Final form payload (about to submit):', formDataToSubmit);
                } catch (e) { /* ignore logging errors */ }

                const fetchOptions = {
                    method: 'POST',
                    headers,
                    body: JSON.stringify(formDataToSubmit)
                };

                // Note: credentials (cookies) are no longer added by default. If your server requires session cookies
                // to be sent, update the client/server agreement and re-enable credentials explicitly.

                const response = await fetch(submitUrl, fetchOptions);

                if (!response.ok) {
                    // Handle 419 specifically (Laravel-style CSRF/session expired)
                    if (response.status === 419) {
                        showAlert('Session expired (419). Please reload the page, ensure cookies are enabled, and try again.', 'error');
                        submitText.classList.remove('hidden');
                        submitLoading.classList.add('hidden');
                        submitBtn.disabled = false;
                        return;
                    }

                    let text = '';
                    try { text = await response.text(); } catch (e) { /* ignore */ }
                    throw new Error('Failed to submit application: ' + (text || response.status));
                }

                document.getElementById('registration-form').parentElement.classList.add('hidden');
                document.getElementById('success-message').classList.remove('hidden');

                document.getElementById('success-message').scrollIntoView({ behavior: 'smooth' });

            } catch (error) {
                console.error('Error submitting form:', error);
                showAlert('Failed to submit application. Please try again.', 'error');

                submitText.classList.remove('hidden');
                submitLoading.classList.add('hidden');
                submitBtn.disabled = false;
            }
        }

        // Collect form data
        function collectFormData() {
            const emailValue = document.getElementById('email').value.trim();

            return {
                full_name: document.getElementById('fullname').value.trim(),
                gender: document.getElementById('gender').value,
                age_range: document.getElementById('ageRange').value || null,
                mobile_phone: document.getElementById('phone').value.trim(),
                email: emailValue || 'no-email@placeholder.com',
                address_of_residence: document.getElementById('address').value.trim() || null,
                lga: document.getElementById('lga').value || null,
                ward: document.getElementById('ward').value || null,
                polling_unit: document.getElementById('pollingUnit').value || null,
                has_voter_card: (document.getElementById('hasVoterCard') ? document.getElementById('hasVoterCard').value === 'yes' : null),
                additional_notes: document.getElementById('additionalNotes') ? document.getElementById('additionalNotes').value.trim() : null,
                status: 'pending',
                notification_method: emailValue ? 'email' : 'sms'
            };
        }

        // Show alert message
        function showAlert(message, type = 'error') {
            const container = document.getElementById('alert-container');
            const alert = document.createElement('div');
            alert.className = `alert alert-${type}`;
            alert.innerHTML = `
                <div class="flex justify-between items-center">
                    <span>${message}</span>
                    <button onclick="this.parentElement.parentElement.remove()" class="ml-4 text-lg font-bold">&times;</button>
                </div>
            `;
            container.appendChild(alert);

            setTimeout(() => {
                if (alert.parentElement) {
                    alert.remove();
                }
            }, 5000);
        }
    </script>
</body>
</html>
