<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

```
<title>Simple CMS</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Lucide Icons -->
<script src="https://unpkg.com/lucide@latest"></script>

<style>
    html {
        scroll-behavior: smooth;
        scroll-padding-top: 80px;
    }
</style>
```

</head>

<body class="bg-gray-50 text-gray-900">

```
<!-- =========================
     FIXED NAVIGATION
========================== -->
<nav
    class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md border-b border-gray-200 shadow-sm"
>
    <div class="max-w-7xl mx-auto px-6">

        <div class="h-20 flex items-center justify-between">

            <!-- Logo -->
            <a
                href="#home"
                class="flex items-center gap-2 text-xl font-bold text-gray-900 hover:text-blue-600 transition"
            >
                <div class="bg-blue-600 text-white p-2 rounded-lg">
                    <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                </div>

                Simple CMS
            </a>


            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center gap-8">

                <a
                    href="#home"
                    class="nav-link text-blue-600 font-medium transition"
                >
                    Home
                </a>

                <a
                    href="#posts"
                    class="nav-link text-gray-600 hover:text-blue-600 font-medium transition"
                >
                    Posts
                </a>

                <a
                    href="#about"
                    class="nav-link text-gray-600 hover:text-blue-600 font-medium transition"
                >
                    About
                </a>

                <a
                    href="#contact"
                    class="nav-link text-gray-600 hover:text-blue-600 font-medium transition"
                >
                    Contact
                </a>

            </div>


            <!-- Desktop Contact Button -->
            <a
                href="#contact"
                class="hidden md:inline-flex items-center gap-2 bg-blue-600 text-white px-5 py-2.5 rounded-lg font-semibold hover:bg-blue-700 transition shadow-sm"
            >
                <i data-lucide="mail" class="w-4 h-4"></i>

                Get in Touch
            </a>


            <!-- Mobile Menu Button -->
            <button
                id="menuButton"
                type="button"
                class="md:hidden text-gray-700 hover:text-blue-600 transition"
                aria-label="Open menu"
            >
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>

        </div>


        <!-- Mobile Navigation -->
        <div
            id="mobileMenu"
            class="hidden md:hidden border-t border-gray-200 py-4"
        >

            <div class="flex flex-col gap-4">

                <a
                    href="#home"
                    class="mobile-link flex items-center gap-3 text-gray-700 hover:text-blue-600"
                >
                    <i data-lucide="home" class="w-5 h-5"></i>
                    Home
                </a>

                <a
                    href="#posts"
                    class="mobile-link flex items-center gap-3 text-gray-700 hover:text-blue-600"
                >
                    <i data-lucide="file-text" class="w-5 h-5"></i>
                    Posts
                </a>

                <a
                    href="#about"
                    class="mobile-link flex items-center gap-3 text-gray-700 hover:text-blue-600"
                >
                    <i data-lucide="info" class="w-5 h-5"></i>
                    About
                </a>

                <a
                    href="#contact"
                    class="mobile-link flex items-center gap-3 text-gray-700 hover:text-blue-600"
                >
                    <i data-lucide="mail" class="w-5 h-5"></i>
                    Contact
                </a>

            </div>

        </div>

    </div>
</nav>


<!-- =========================
     HERO / HOME
========================== -->
<section
    id="home"
    class="min-h-screen flex items-center bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 text-white pt-20"
>

    <div class="max-w-7xl mx-auto px-6 py-24 w-full">

        <div class="max-w-3xl">

            <!-- Badge -->
            <div
                class="inline-flex items-center gap-2 bg-white/10 border border-white/20 px-4 py-2 rounded-full mb-6"
            >
                <span class="w-2 h-2 bg-green-400 rounded-full"></span>

                <span class="text-sm text-blue-100">
                    Simple Content Management System
                </span>
            </div>


            <!-- Heading -->
            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6">

                Welcome to

                <span class="text-blue-200">
                    Simple CMS
                </span>

            </h1>


            <!-- Description -->
            <p class="text-lg md:text-xl text-blue-100 leading-relaxed max-w-2xl mb-8">

                A simple and modern website powered by Laravel.
                Browse our latest updates, learn more about us,
                or send us a message.

            </p>


            <!-- Buttons -->
            <div class="flex flex-wrap gap-4">

                <a
                    href="#posts"
                    class="inline-flex items-center gap-2 bg-white text-blue-700 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition shadow-lg"
                >
                    <i data-lucide="file-text" class="w-5 h-5"></i>

                    Explore Posts
                </a>


                <a
                    href="#contact"
                    class="inline-flex items-center gap-2 border border-white/40 text-white px-6 py-3 rounded-lg font-semibold hover:bg-white/10 transition"
                >
                    <i data-lucide="mail" class="w-5 h-5"></i>

                    Contact Us
                </a>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     POSTS
========================== -->
<section
    id="posts"
    class="py-24 bg-gray-50"
>

    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-14">

            <div
                class="inline-flex items-center justify-center w-12 h-12 bg-blue-100 text-blue-600 rounded-xl mb-4"
            >
                <i data-lucide="newspaper" class="w-6 h-6"></i>
            </div>

            <p class="text-blue-600 font-semibold uppercase tracking-wide text-sm mb-2">
                Latest Updates
            </p>

            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Latest Posts
            </h2>

            <p class="text-gray-600">
                Stay updated with our latest announcements,
                news, and information.
            </p>

        </div>


        <!-- Dynamic Posts -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-7">

            @forelse($posts as $post)

                <article
                    class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-lg hover:-translate-y-1 transition duration-300"
                >

                    <div class="h-1.5 bg-blue-600"></div>

                    <div class="p-7">

                        <div class="flex items-center justify-between mb-4">

                            <span
                                class="inline-flex items-center gap-1.5 text-xs font-semibold uppercase tracking-wide text-blue-600 bg-blue-50 px-3 py-1.5 rounded-full"
                            >
                                <i data-lucide="check-circle" class="w-3.5 h-3.5"></i>

                                Published
                            </span>

                            <span class="text-sm text-gray-400">
                                {{ $post->created_at->format('M d, Y') }}
                            </span>

                        </div>


                        <h3 class="text-xl font-bold text-gray-900 mb-3">
                            {{ $post->title }}
                        </h3>


                        <p class="text-gray-600 leading-relaxed">
                            {{ \Illuminate\Support\Str::limit($post->content, 160) }}
                        </p>

                    </div>

                </article>

            @empty

                <div class="sm:col-span-2 lg:col-span-3">

                    <div
                        class="bg-white border border-dashed border-gray-300 rounded-2xl p-12 text-center"
                    >

                        <div
                            class="w-14 h-14 mx-auto mb-4 bg-gray-100 text-gray-500 rounded-full flex items-center justify-center"
                        >
                            <i data-lucide="file-x" class="w-7 h-7"></i>
                        </div>

                        <h3 class="text-xl font-bold mb-2">
                            No Posts Yet
                        </h3>

                        <p class="text-gray-500">
                            Check back soon for new updates and announcements.
                        </p>

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</section>


<!-- =========================
     ABOUT
========================== -->
<section
    id="about"
    class="py-24 bg-white border-y border-gray-200"
>

    <div class="max-w-5xl mx-auto px-6">

        <div class="grid md:grid-cols-2 gap-12 items-center">

            <!-- About Text -->
            <div>

                <div
                    class="inline-flex items-center justify-center w-12 h-12 bg-blue-100 text-blue-600 rounded-xl mb-5"
                >
                    <i data-lucide="info" class="w-6 h-6"></i>
                </div>

                <p class="text-blue-600 font-semibold uppercase tracking-wide text-sm mb-3">
                    About Us
                </p>

                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Simple. Modern. Dynamic.
                </h2>

                <p class="text-gray-600 leading-relaxed mb-5">
                    Simple CMS is a basic content management system
                    built using Laravel. It allows administrators to
                    manage website content while visitors can easily
                    browse published information.
                </p>

                <p class="text-gray-600 leading-relaxed">
                    New posts published by the administrator
                    automatically appear on the website, making
                    content management simple and efficient.
                </p>

            </div>


            <!-- Features -->
            <div class="grid grid-cols-2 gap-4">

                <!-- Fast -->
                <div class="bg-blue-50 rounded-2xl p-6">

                    <div
                        class="w-11 h-11 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4"
                    >
                        <i data-lucide="zap" class="w-5 h-5"></i>
                    </div>

                    <h3 class="font-bold mb-2">
                        Fast
                    </h3>

                    <p class="text-sm text-gray-600">
                        Simple and lightweight website experience.
                    </p>

                </div>


                <!-- Secure -->
                <div class="bg-indigo-50 rounded-2xl p-6">

                    <div
                        class="w-11 h-11 bg-indigo-100 text-indigo-600 rounded-lg flex items-center justify-center mb-4"
                    >
                        <i data-lucide="shield-check" class="w-5 h-5"></i>
                    </div>

                    <h3 class="font-bold mb-2">
                        Reliable
                    </h3>

                    <p class="text-sm text-gray-600">
                        Content is managed through a centralized system.
                    </p>

                </div>


                <!-- Responsive -->
                <div class="bg-gray-50 rounded-2xl p-6">

                    <div
                        class="w-11 h-11 bg-gray-100 text-gray-600 rounded-lg flex items-center justify-center mb-4"
                    >
                        <i data-lucide="smartphone" class="w-5 h-5"></i>
                    </div>

                    <h3 class="font-bold mb-2">
                        Responsive
                    </h3>

                    <p class="text-sm text-gray-600">
                        Works smoothly across different screen sizes.
                    </p>

                </div>


                <!-- Dynamic -->
                <div class="bg-blue-50 rounded-2xl p-6">

                    <div
                        class="w-11 h-11 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4"
                    >
                        <i data-lucide="database" class="w-5 h-5"></i>
                    </div>

                    <h3 class="font-bold mb-2">
                        Dynamic
                    </h3>

                    <p class="text-sm text-gray-600">
                        Admin-managed content appears automatically.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     CONTACT
========================== -->
<section
    id="contact"
    class="py-24 bg-gray-50"
>

    <div class="max-w-6xl mx-auto px-6">

        <!-- Contact Header -->
        <div class="text-center max-w-2xl mx-auto mb-12">

            <div
                class="inline-flex items-center justify-center w-12 h-12 bg-blue-100 text-blue-600 rounded-xl mb-4"
            >
                <i data-lucide="mail" class="w-6 h-6"></i>
            </div>

            <p class="text-blue-600 font-semibold uppercase tracking-wide text-sm mb-2">
                Get in Touch
            </p>

            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Contact Us
            </h2>

            <p class="text-gray-600">
                Have a question, suggestion, or inquiry?
                Send us a message and we'll get back to you.
            </p>

        </div>


        <!-- Contact Form -->
        <div class="max-w-3xl mx-auto">

            <div
                class="bg-white rounded-2xl shadow-sm border border-gray-200 p-7 md:p-9"
            >

                @if(session('success'))

                    <div
                        class="flex items-start gap-3 bg-green-50 border border-green-200 text-green-700 rounded-lg p-4 mb-6"
                    >
                        <i data-lucide="check-circle" class="w-5 h-5 mt-0.5"></i>

                        <p>
                            {{ session('success') }}
                        </p>
                    </div>

                @endif


                <form action="/contact" method="POST">

                    @csrf


                    <!-- Name -->
                    <div class="mb-5">

                        <label
                            for="name"
                            class="block text-sm font-semibold text-gray-700 mb-2"
                        >
                            Name
                        </label>

                        <div class="relative">

                            <i
                                data-lucide="user"
                                class="absolute left-3 top-3.5 w-5 h-5 text-gray-400"
                            ></i>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                placeholder="Your name"
                                class="w-full border border-gray-300 rounded-lg pl-11 pr-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            >

                        </div>

                        @error('name')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    <!-- Email -->
                    <div class="mb-5">

                        <label
                            for="email"
                            class="block text-sm font-semibold text-gray-700 mb-2"
                        >
                            Email
                        </label>

                        <div class="relative">

                            <i
                                data-lucide="mail"
                                class="absolute left-3 top-3.5 w-5 h-5 text-gray-400"
                            ></i>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                placeholder="you@example.com"
                                class="w-full border border-gray-300 rounded-lg pl-11 pr-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            >

                        </div>

                        @error('email')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    <!-- Subject -->
                    <div class="mb-5">

                        <label
                            for="subject"
                            class="block text-sm font-semibold text-gray-700 mb-2"
                        >
                            Subject
                        </label>

                        <div class="relative">

                            <i
                                data-lucide="file-text"
                                class="absolute left-3 top-3.5 w-5 h-5 text-gray-400"
                            ></i>

                            <input
                                type="text"
                                id="subject"
                                name="subject"
                                value="{{ old('subject') }}"
                                required
                                placeholder="What is your message about?"
                                class="w-full border border-gray-300 rounded-lg pl-11 pr-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            >

                        </div>

                        @error('subject')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    <!-- Message -->
                    <div class="mb-6">

                        <label
                            for="message"
                            class="block text-sm font-semibold text-gray-700 mb-2"
                        >
                            Message
                        </label>

                        <div class="relative">

                            <i
                                data-lucide="message-square"
                                class="absolute left-3 top-3.5 w-5 h-5 text-gray-400"
                            ></i>

                            <textarea
                                id="message"
                                name="message"
                                rows="6"
                                required
                                placeholder="Write your message here..."
                                class="w-full border border-gray-300 rounded-lg pl-11 pr-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            >{{ old('message') }}</textarea>

                        </div>

                        @error('message')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    <!-- Submit -->
                    <button
                        type="submit"
                        class="w-full inline-flex items-center justify-center gap-2 bg-blue-600 text-white py-3.5 rounded-lg font-semibold hover:bg-blue-700 transition shadow-sm"
                    >
                        <i data-lucide="send" class="w-5 h-5"></i>

                        Send Message
                    </button>

                </form>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     FOOTER
========================== -->
<footer class="bg-gray-900 text-gray-400">

    <div class="max-w-7xl mx-auto px-6 py-10">

        <div class="flex flex-col md:flex-row justify-between items-center gap-6">

            <!-- Footer Brand -->
            <div class="text-center md:text-left">

                <div class="flex items-center justify-center md:justify-start gap-2">

                    <div class="bg-blue-600 text-white p-2 rounded-lg">

                        <i data-lucide="layout-dashboard" class="w-4 h-4"></i>

                    </div>

                    <p class="text-white font-bold text-lg">
                        Simple CMS
                    </p>

                </div>

                <p class="text-sm mt-2">
                    A simple Laravel-powered content management system.
                </p>

            </div>


            <!-- Footer Links -->
            <div class="flex gap-6 text-sm">

                <a
                    href="#home"
                    class="hover:text-white transition"
                >
                    Home
                </a>

                <a
                    href="#posts"
                    class="hover:text-white transition"
                >
                    Posts
                </a>

                <a
                    href="#about"
                    class="hover:text-white transition"
                >
                    About
                </a>

                <a
                    href="#contact"
                    class="hover:text-white transition"
                >
                    Contact
                </a>

            </div>

        </div>


        <!-- Copyright -->
        <div class="border-t border-gray-800 mt-8 pt-6 text-center">

            <p class="text-sm">
                © {{ date('Y') }} Simple CMS. All rights reserved.
            </p>

        </div>

    </div>

</footer>


<!-- =========================
     JAVASCRIPT
========================== -->
<script>

    // Initialize Lucide icons
    lucide.createIcons();


    // Mobile menu
    const menuButton = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    menuButton.addEventListener('click', () => {

        mobileMenu.classList.toggle('hidden');

    });


    // Close mobile menu after clicking a link
    document.querySelectorAll('.mobile-link').forEach(link => {

        link.addEventListener('click', () => {

            mobileMenu.classList.add('hidden');

        });

    });


    // Active navigation
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    window.addEventListener('scroll', () => {

        let current = 'home';

        sections.forEach(section => {

            const sectionTop = section.offsetTop - 120;

            if (window.scrollY >= sectionTop) {

                current = section.getAttribute('id');

            }

        });


        navLinks.forEach(link => {

            link.classList.remove('text-blue-600');
            link.classList.add('text-gray-600');

            if (link.getAttribute('href') === '#' + current) {

                link.classList.remove('text-gray-600');
                link.classList.add('text-blue-600');

            }

        });

    });

</script>
```

</body>
</html>
