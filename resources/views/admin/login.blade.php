<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login - Simple CMS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="min-h-screen bg-gray-50 text-gray-900">

    <!-- Fixed Navbar -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md border-b border-gray-200 shadow-sm">

        <div class="max-w-7xl mx-auto px-6">

            <div class="h-20 flex items-center justify-between">

                <a
                    href="/"
                    class="flex items-center gap-2 text-xl font-bold text-gray-900 hover:text-blue-600 transition"
                >
                    <div class="bg-blue-600 text-white p-2 rounded-lg">
                        <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                    </div>

                    Simple CMS
                </a>

                <a
                    href="/"
                    class="inline-flex items-center gap-2 text-gray-600 hover:text-blue-600 font-medium transition"
                >
                    <i data-lucide="arrow-left" class="w-4 h-4"></i>
                    Back to Website
                </a>

            </div>

        </div>

    </nav>


    <!-- Login -->
    <main class="min-h-screen flex items-center justify-center px-6 pt-20">

        <div class="w-full max-w-md">

            <!-- Header -->
            <div class="text-center mb-8">

                <div
                    class="w-14 h-14 mx-auto bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mb-5"
                >
                    <i data-lucide="shield-check" class="w-7 h-7"></i>
                </div>

                <h1 class="text-3xl font-bold text-gray-900">
                    Admin Login
                </h1>

                <p class="text-gray-500 mt-2">
                    Sign in to manage your website.
                </p>

            </div>


            <!-- Login Card -->
            <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-7">

                @if(session('error'))

                    <div class="flex items-start gap-3 bg-red-50 border border-red-200 text-red-700 rounded-lg p-4 mb-6">

                        <i data-lucide="circle-alert" class="w-5 h-5 mt-0.5"></i>

                        <p class="text-sm">
                            {{ session('error') }}
                        </p>

                    </div>

                @endif


                <form action="/admin/login" method="POST">

                    @csrf


                    <!-- Username -->
                    <div class="mb-5">

                        <label
                            for="username"
                            class="block text-sm font-semibold text-gray-700 mb-2"
                        >
                            Username
                        </label>

                        <div class="relative">

                            <i
                                data-lucide="user"
                                class="absolute left-3 top-3.5 w-5 h-5 text-gray-400"
                            ></i>

                            <input
                                type="text"
                                id="username"
                                name="username"
                                required
                                autocomplete="username"
                                placeholder="Enter username"
                                class="w-full border border-gray-300 rounded-lg pl-11 pr-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            >

                        </div>

                    </div>


                    <!-- Password -->
                    <div class="mb-6">

                        <label
                            for="password"
                            class="block text-sm font-semibold text-gray-700 mb-2"
                        >
                            Password
                        </label>

                        <div class="relative">

                            <i
                                data-lucide="lock"
                                class="absolute left-3 top-3.5 w-5 h-5 text-gray-400"
                            ></i>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                required
                                autocomplete="current-password"
                                placeholder="Enter password"
                                class="w-full border border-gray-300 rounded-lg pl-11 pr-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            >

                        </div>

                    </div>


                    <!-- Submit -->
                    <button
                        type="submit"
                        class="w-full inline-flex items-center justify-center gap-2 bg-blue-600 text-white py-3.5 rounded-lg font-semibold hover:bg-blue-700 transition shadow-sm"
                    >
                        <i data-lucide="log-in" class="w-5 h-5"></i>

                        Sign In
                    </button>

                </form>

            </div>


            <p class="text-center text-sm text-gray-400 mt-6">
                Simple CMS Administration
            </p>

        </div>

    </main>


    <script>
        lucide.createIcons();
    </script>

</body>
</html>