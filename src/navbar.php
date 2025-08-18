<nav class="border-b bg-white/95 backdrop-blur supports-[backdrop-filter]:bg-white/60 sticky top-0 z-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <a class="flex items-center gap-3" href="index.php">
                <img src="images/new-logo.png" alt="True Golf Singapore" class="h-12 w-12" />
                <span class="text-2xl font-bold text-[#073c2f]">True Golf Singapore</span>
            </a>
            <div class="hidden lg:flex space-x-8 p-4">
                <a class="transition-colors text-[#073c2f] font-medium" href="index.php">Home</a>
                <a class="transition-colors text-gray-700 hover:text-[#073c2f]" href="about.php">About Us</a>
                <a class="transition-colors text-gray-700 hover:text-[#073c2f]" href="coaches.php">Coaches</a>
                <a class="transition-colors text-gray-700 hover:text-[#073c2f]" href="rates.php">Rates</a>
                <a class="transition-colors text-gray-700 hover:text-[#073c2f]" href="contact.php">Contact</a>
            </div>
            <div class="hidden md:block">
                <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 text-primary-foreground h-10 px-4 py-2 bg-[#073c2f] hover:bg-[#073c2f]/90"
                    href="contact.php">Book a Lesson</a>
            </div>
            <!-- Language Toggle -->
            <div class="relative ml-4 mr-2 md:mr-8">
                <button id="lang-toggle-btn"
                    class="flex items-center gap-2 px-3 py-2 rounded-md border border-gray-300 bg-white text-gray-700 hover:bg-gray-50 transition-colors font-medium focus:outline-none focus:ring-2 focus:ring-[#073c2f]"
                    aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#073c2f]" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <circle cx="12" cy="12" r="10" stroke-width="2" />
                        <path d="M2 12h20M12 2a15.3 15.3 0 0 1 0 20M12 2a15.3 15.3 0 0 0 0 20"
                            stroke-width="2" />
                    </svg>
                    <span id="current-lang">English</span>
                    <svg class="h-4 w-4 ml-1" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M6 9l6 6 6-6" />
                    </svg>
                </button>
                <div id="lang-dropdown"
                    class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg z-50 hidden">
                    <a href="index.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">English</a>
                    <a href="home/zh.html" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">简体中文</a>
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Bahasa Malaysia</a>
                </div>
            </div>
            <button
                class="lg:hidden p-2 rounded-lg text-gray-700 hover:text-[#073c2f] hover:bg-gray-100 transition-colors md:absolute md:right-2"
                aria-label="Toggle menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-menu h-6 w-6">
                    <line x1="4" x2="20" y1="12" y2="12"></line>
                    <line x1="4" x2="20" y1="6" y2="6"></line>
                    <line x1="4" x2="20" y1="18" y2="18"></line>
                </svg>
            </button>
        </div>
    </div>
</nav>
