<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - Simple CMS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 90px;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900">

    <!-- Fixed Navbar -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-gray-900 text-white shadow-lg">

        <div class="max-w-7xl mx-auto px-6">

            <div class="h-20 flex items-center justify-between">

                <!-- Brand -->
                <a
                    href="/admin/dashboard"
                    class="flex items-center gap-2 text-xl font-bold"
                >
                    <div class="bg-blue-600 p-2 rounded-lg">
                        <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                    </div>

                    Simple CMS
                </a>


                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center gap-6">

                    <a
                        href="/admin/dashboard"
                        class="flex items-center gap-2 text-white font-medium"
                    >
                        <i data-lucide="house" class="w-4 h-4"></i>
                        Dashboard
                    </a>

                    <a
                        href="/admin/posts"
                        class="flex items-center gap-2 text-gray-300 hover:text-white transition"
                    >
                        <i data-lucide="file-text" class="w-4 h-4"></i>
                        Posts
                    </a>

                    <a
                        href="/admin/messages"
                        class="flex items-center gap-2 text-gray-300 hover:text-white transition"
                    >
                        <i data-lucide="mail" class="w-4 h-4"></i>
                        Messages
                    </a>

                    <a
                        href="/"
                        target="_blank"
                        class="flex items-center gap-2 text-gray-300 hover:text-white transition"
                    >
                        <i data-lucide="external-link" class="w-4 h-4"></i>
                        Website
                    </a>

                </div>


                <!-- Logout -->
                <a
                    href="/admin/logout"
                    class="inline-flex items-center gap-2 text-gray-300 hover:text-white transition"
                >
                    <i data-lucide="log-out" class="w-4 h-4"></i>

                    <span class="hidden sm:inline">
                        Logout
                    </span>
                </a>

            </div>

        </div>

    </nav>


    <!-- Main -->
    <main class="max-w-7xl mx-auto px-6 pt-28 pb-12">

        <!-- Header -->
        <div class="mb-8">

            <p class="text-sm font-semibold text-blue-600 mb-2">
                ADMINISTRATION
            </p>

            <h1 class="text-3xl md:text-4xl font-bold">
                Dashboard
            </h1>

            <p class="text-gray-500 mt-2">
                Manage your website content and visitor messages.
            </p>

        </div>


        <!-- Stats -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">

            <!-- Total Posts -->
            <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">

                <div class="flex items-start justify-between">

                    <div>

                        <p class="text-sm text-gray-500">
                            Total Posts
                        </p>

                        <p class="text-3xl font-bold mt-2">
                            {{ $totalPosts }}
                        </p>

                        <p class="text-sm text-gray-400 mt-2">
                            All website posts
                        </p>

                    </div>

                    <div class="bg-blue-100 text-blue-600 p-3 rounded-xl">
                        <i data-lucide="file-text" class="w-6 h-6"></i>
                    </div>

                </div>

            </div>


            <!-- Published -->
            <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">

                <div class="flex items-start justify-between">

                    <div>

                        <p class="text-sm text-gray-500">
                            Published Posts
                        </p>

                        <p class="text-3xl font-bold mt-2">
                            {{ $publishedPosts }}
                        </p>

                        <p class="text-sm text-gray-400 mt-2">
                            Visible to visitors
                        </p>

                    </div>

                    <div class="bg-green-100 text-green-600 p-3 rounded-xl">
                        <i data-lucide="check-circle" class="w-6 h-6"></i>
                    </div>

                </div>

            </div>


            <!-- Messages -->
            <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">

                <div class="flex items-start justify-between">

                    <div>

                        <p class="text-sm text-gray-500">
                            Messages
                        </p>

                        <p class="text-3xl font-bold mt-2">
                            {{ $totalMessages }}
                        </p>

                        <p class="text-sm text-gray-400 mt-2">
                            Visitor inquiries
                        </p>

                    </div>

                    <div class="bg-indigo-100 text-indigo-600 p-3 rounded-xl">
                        <i data-lucide="mail" class="w-6 h-6"></i>
                    </div>

                </div>

            </div>

        </div>


        <!-- Quick Actions -->
        <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm mb-8">

            <div class="flex items-center gap-3 mb-5">

                <div class="bg-blue-100 text-blue-600 p-2 rounded-lg">
                    <i data-lucide="zap" class="w-5 h-5"></i>
                </div>

                <div>

                    <h2 class="font-bold text-lg">
                        Quick Actions
                    </h2>

                    <p class="text-sm text-gray-500">
                        Common administrative tasks
                    </p>

                </div>

            </div>


            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">

                <a
                    href="/admin/posts/create"
                    class="group border border-gray-200 rounded-xl p-5 hover:border-blue-300 hover:bg-blue-50 transition"
                >

                    <i data-lucide="plus-circle" class="w-6 h-6 text-blue-600 mb-4"></i>

                    <h3 class="font-bold">
                        Create New Post
                    </h3>

                    <p class="text-sm text-gray-500 mt-1">
                        Publish a new website update.
                    </p>

                </a>


                <a
                    href="/admin/posts"
                    class="group border border-gray-200 rounded-xl p-5 hover:border-blue-300 hover:bg-blue-50 transition"
                >

                    <i data-lucide="file-pen-line" class="w-6 h-6 text-blue-600 mb-4"></i>

                    <h3 class="font-bold">
                        Manage Posts
                    </h3>

                    <p class="text-sm text-gray-500 mt-1">
                        Edit, publish, or delete posts.
                    </p>

                </a>


                <a
                    href="/admin/messages"
                    class="group border border-gray-200 rounded-xl p-5 hover:border-blue-300 hover:bg-blue-50 transition"
                >

                    <i data-lucide="inbox" class="w-6 h-6 text-blue-600 mb-4"></i>

                    <h3 class="font-bold">
                        View Messages
                    </h3>

                    <p class="text-sm text-gray-500 mt-1">
                        Review visitor inquiries.
                    </p>

                </a>

            </div>

        </div>


        <!-- Website Preview -->
        <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-2xl p-7 text-white">

            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">

                <div>

                    <div class="flex items-center gap-2 mb-2">

                        <i data-lucide="globe" class="w-5 h-5"></i>

                        <span class="text-sm font-semibold text-blue-100">
                            PUBLIC WEBSITE
                        </span>

                    </div>

                    <h2 class="text-2xl font-bold">
                        View your website
                    </h2>

                    <p class="text-blue-100 mt-1">
                        See how your published content looks to visitors.
                    </p>

                </div>


                <a
                    href="/"
                    target="_blank"
                    class="inline-flex items-center justify-center gap-2 bg-white text-blue-700 px-5 py-3 rounded-lg font-semibold hover:bg-gray-100 transition"
                >
                    Open Website

                    <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                </a>

            </div>

        </div>

    </main>


    <script>
        lucide.createIcons();
    </script>

</body>
</html>