<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Post - Simple CMS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-gray-50 text-gray-900">

    <!-- Fixed Navbar -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-gray-900 text-white shadow-lg">

        <div class="max-w-7xl mx-auto px-6">

            <div class="h-20 flex items-center justify-between">

                <a
                    href="/admin/dashboard"
                    class="flex items-center gap-2 text-xl font-bold"
                >
                    <div class="bg-blue-600 p-2 rounded-lg">
                        <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                    </div>

                    Simple CMS
                </a>


                <div class="hidden md:flex items-center gap-6">

                    <a href="/admin/dashboard" class="flex items-center gap-2 text-gray-300 hover:text-white">
                        <i data-lucide="house" class="w-4 h-4"></i>
                        Dashboard
                    </a>

                    <a href="/admin/posts" class="flex items-center gap-2 text-white font-medium">
                        <i data-lucide="file-text" class="w-4 h-4"></i>
                        Posts
                    </a>

                    <a href="/admin/messages" class="flex items-center gap-2 text-gray-300 hover:text-white">
                        <i data-lucide="mail" class="w-4 h-4"></i>
                        Messages
                    </a>

                    <a href="/" target="_blank" class="flex items-center gap-2 text-gray-300 hover:text-white">
                        <i data-lucide="external-link" class="w-4 h-4"></i>
                        Website
                    </a>

                </div>


                <a
                    href="/admin/logout"
                    class="inline-flex items-center gap-2 text-gray-300 hover:text-white"
                >
                    <i data-lucide="log-out" class="w-4 h-4"></i>
                    <span class="hidden sm:inline">Logout</span>
                </a>

            </div>

        </div>

    </nav>


    <main class="max-w-4xl mx-auto px-6 pt-28 pb-12">

        <!-- Header -->
        <div class="mb-8">

            <a
                href="/admin/posts"
                class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-blue-600 mb-4"
            >
                <i data-lucide="arrow-left" class="w-4 h-4"></i>
                Back to Posts
            </a>

            <p class="text-sm font-semibold text-blue-600 mb-2">
                CONTENT MANAGEMENT
            </p>

            <h1 class="text-3xl font-bold">
                Create New Post
            </h1>

            <p class="text-gray-500 mt-2">
                Add a new announcement or website content.
            </p>

        </div>


        <!-- Form -->
        <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-7">

            @if($errors->any())

                <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-6">

                    <div class="flex items-center gap-2 text-red-700 font-semibold mb-2">

                        <i data-lucide="circle-alert" class="w-5 h-5"></i>

                        Please fix the following:

                    </div>

                    <ul class="list-disc list-inside text-sm text-red-600 space-y-1">

                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach

                    </ul>

                </div>

            @endif


            <form action="/admin/posts" method="POST">

                @csrf


                <!-- Title -->
                <div class="mb-6">

                    <label
                        for="title"
                        class="block text-sm font-semibold text-gray-700 mb-2"
                    >
                        Post Title
                    </label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        value="{{ old('title') }}"
                        required
                        placeholder="Enter post title"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    >

                </div>


                <!-- Content -->
                <div class="mb-6">

                    <label
                        for="content"
                        class="block text-sm font-semibold text-gray-700 mb-2"
                    >
                        Content
                    </label>

                    <textarea
                        id="content"
                        name="content"
                        rows="10"
                        required
                        placeholder="Write your post content here..."
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 resize-y"
                    >{{ old('content') }}</textarea>

                </div>


                <!-- Status -->
                <div class="mb-8">

                    <label
                        for="status"
                        class="block text-sm font-semibold text-gray-700 mb-2"
                    >
                        Status
                    </label>

                    <select
                        id="status"
                        name="status"
                        required
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    >

                        <option value="draft" {{ old('status') === 'draft' ? 'selected' : '' }}>
                            Draft
                        </option>

                        <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>
                            Published
                        </option>

                    </select>

                    <p class="text-xs text-gray-500 mt-2">
                        Published posts will appear on the public website.
                    </p>

                </div>


                <!-- Actions -->
                <div class="flex flex-col sm:flex-row gap-3 sm:justify-end">

                    <a
                        href="/admin/posts"
                        class="inline-flex items-center justify-center gap-2 px-5 py-3 border border-gray-300 text-gray-700 rounded-lg font-semibold hover:bg-gray-50 transition"
                    >
                        <i data-lucide="x" class="w-4 h-4"></i>
                        Cancel
                    </a>

                    <button
                        type="submit"
                        class="inline-flex items-center justify-center gap-2 bg-blue-600 text-white px-5 py-3 rounded-lg font-semibold hover:bg-blue-700 transition"
                    >
                        <i data-lucide="save" class="w-4 h-4"></i>
                        Save Post
                    </button>

                </div>

            </form>

        </div>

    </main>


    <script>
        lucide.createIcons();
    </script>

</body>
</html>