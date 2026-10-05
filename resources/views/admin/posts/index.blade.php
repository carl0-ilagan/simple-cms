<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Posts - Simple CMS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            padding-top: 80px;
        }

        .modal-backdrop {
            background: rgba(15, 23, 42, 0.58);
            backdrop-filter: blur(6px);
        }

        .modal-panel {
            animation: modalIn 0.18s ease-out;
        }

        @keyframes modalIn {
            from {
                opacity: 0;
                transform: translateY(12px) scale(0.98);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }
    </style>
</head>


<body class="bg-gray-50 text-gray-900">


    <!-- =========================================================
         NAVBAR
    ========================================================== -->

    <nav class="fixed top-0 left-0 right-0 z-50 bg-gray-900 text-white shadow-lg">

        <div class="max-w-7xl mx-auto px-6">

            <div class="h-20 flex items-center justify-between">


                <!-- Brand -->

                <a
                    href="/admin/dashboard"
                    class="flex items-center gap-2 text-xl font-bold"
                >

                    <div class="bg-blue-600 p-2 rounded-lg">

                        <i
                            data-lucide="layout-dashboard"
                            class="w-5 h-5"
                        ></i>

                    </div>

                    Simple CMS

                </a>


                <!-- Navigation -->

                <div class="hidden md:flex items-center gap-6">

                    <a
                        href="/admin/dashboard"
                        class="flex items-center gap-2 text-gray-300 hover:text-white transition"
                    >

                        <i data-lucide="house" class="w-4 h-4"></i>

                        Dashboard

                    </a>


                    <a
                        href="/admin/posts"
                        class="flex items-center gap-2 text-white font-medium"
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



    <!-- =========================================================
         MAIN
    ========================================================== -->

    <main class="max-w-7xl mx-auto px-6 py-10">


        <!-- HEADER -->

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-5 mb-8">

            <div>

                <p class="text-sm font-semibold text-blue-600 uppercase tracking-wide mb-2">
                    Content Management
                </p>

                <h1 class="text-3xl md:text-4xl font-bold">
                    Posts
                </h1>

                <p class="text-gray-500 mt-2">
                    Create, edit, publish, and manage your website posts.
                </p>

            </div>


            <button
                type="button"
                onclick="openCreateModal()"
                class="inline-flex items-center justify-center gap-2 bg-blue-600 text-white px-5 py-3 rounded-lg font-semibold hover:bg-blue-700 transition shadow-sm"
            >

                <i data-lucide="plus" class="w-5 h-5"></i>

                Create Post

            </button>

        </div>



        <!-- SUCCESS -->

        @if(session('success'))

            <div
                class="flex items-center gap-3 bg-green-50 border border-green-200 text-green-700 rounded-xl p-4 mb-6"
            >

                <i
                    data-lucide="circle-check"
                    class="w-5 h-5 shrink-0"
                ></i>

                <p class="text-sm font-medium">
                    {{ session('success') }}
                </p>

            </div>

        @endif



        <!-- ERRORS -->

        @if($errors->any())

            <div
                class="bg-red-50 border border-red-200 rounded-xl p-4 mb-6"
            >

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



        <!-- =====================================================
             POSTS CARD
        ====================================================== -->

        <div
            class="bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden"
        >


            <!-- Card Header -->

            <div class="px-6 py-5 border-b border-gray-200">

                <div class="flex items-center gap-3">

                    <div class="bg-blue-100 text-blue-600 p-2 rounded-lg">

                        <i data-lucide="files" class="w-5 h-5"></i>

                    </div>


                    <div>

                        <h2 class="font-bold text-lg">
                            All Posts
                        </h2>

                        <p class="text-sm text-gray-500">
                            Manage your website content.
                        </p>

                    </div>

                </div>

            </div>



            @if($posts->count())


                <!-- DESKTOP -->

                <div class="hidden lg:block overflow-x-auto">

                    <table class="w-full">

                        <thead class="bg-gray-50 border-b border-gray-200">

                            <tr>

                                <th class="text-left px-6 py-4 text-xs font-semibold uppercase tracking-wide text-gray-500">
                                    Post
                                </th>

                                <th class="text-left px-6 py-4 text-xs font-semibold uppercase tracking-wide text-gray-500">
                                    Status
                                </th>

                                <th class="text-left px-6 py-4 text-xs font-semibold uppercase tracking-wide text-gray-500">
                                    Created
                                </th>

                                <th class="text-right px-6 py-4 text-xs font-semibold uppercase tracking-wide text-gray-500">
                                    Actions
                                </th>

                            </tr>

                        </thead>


                        <tbody class="divide-y divide-gray-100">

                            @foreach($posts as $post)

                                <tr class="hover:bg-blue-50/40 transition">


                                    <td class="px-6 py-5">

                                        <div class="flex items-start gap-3">

                                            <div
                                                class="w-10 h-10 shrink-0 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center"
                                            >

                                                <i data-lucide="file-text" class="w-5 h-5"></i>

                                            </div>


                                            <div class="min-w-0">

                                                <p class="font-semibold text-gray-900">
                                                    {{ $post->title }}
                                                </p>

                                                <p class="text-sm text-gray-500 mt-1">
                                                    {{ \Illuminate\Support\Str::limit($post->content, 100) }}
                                                </p>

                                            </div>

                                        </div>

                                    </td>



                                    <td class="px-6 py-5">

                                        @if($post->status === 'published')

                                            <span
                                                class="inline-flex items-center gap-2 bg-green-50 text-green-700 px-3 py-1.5 rounded-full text-xs font-semibold"
                                            >

                                                <span class="w-1.5 h-1.5 bg-green-600 rounded-full"></span>

                                                Published

                                            </span>

                                        @else

                                            <span
                                                class="inline-flex items-center gap-2 bg-gray-100 text-gray-600 px-3 py-1.5 rounded-full text-xs font-semibold"
                                            >

                                                <span class="w-1.5 h-1.5 bg-gray-500 rounded-full"></span>

                                                Draft

                                            </span>

                                        @endif

                                    </td>



                                    <td class="px-6 py-5">

                                        <div class="flex items-center gap-2">

                                            <i
                                                data-lucide="calendar-days"
                                                class="w-4 h-4 text-gray-400"
                                            ></i>

                                            <div>

                                                <p class="text-sm font-medium text-gray-700">
                                                    {{ $post->created_at->format('M d, Y') }}
                                                </p>

                                                <p class="text-xs text-gray-400">
                                                    {{ $post->created_at->format('h:i A') }}
                                                </p>

                                            </div>

                                        </div>

                                    </td>



                                    <td class="px-6 py-5">

                                        <div class="flex items-center justify-end gap-2">


                                            <button
                                                type="button"
                                                onclick="openEditModal(
                                                    {{ $post->id }},
                                                    @js($post->title),
                                                    @js($post->content),
                                                    @js($post->status)
                                                )"
                                                class="inline-flex items-center gap-2 px-3 py-2 bg-blue-50 text-blue-600 rounded-lg text-sm font-semibold hover:bg-blue-100 transition"
                                            >

                                                <i data-lucide="pencil" class="w-4 h-4"></i>

                                                Edit

                                            </button>


                                            <button
                                                type="button"
                                                onclick="openDeleteModal(
                                                    {{ $post->id }},
                                                    @js($post->title)
                                                )"
                                                class="inline-flex items-center justify-center p-2 bg-red-50 text-red-600 rounded-lg hover:bg-red-100 transition"
                                            >

                                                <i data-lucide="trash-2" class="w-4 h-4"></i>

                                            </button>

                                        </div>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>



                <!-- MOBILE -->

                <div class="lg:hidden divide-y divide-gray-200">

                    @foreach($posts as $post)

                        <div class="p-6">

                            <div class="flex items-start gap-3">

                                <div
                                    class="w-11 h-11 shrink-0 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center"
                                >

                                    <i data-lucide="file-text" class="w-5 h-5"></i>

                                </div>


                                <div class="min-w-0 flex-1">

                                    <h3 class="font-bold text-gray-900">
                                        {{ $post->title }}
                                    </h3>

                                    <p class="text-sm text-gray-500 mt-1">
                                        {{ \Illuminate\Support\Str::limit($post->content, 120) }}
                                    </p>

                                </div>

                            </div>


                            <div class="flex flex-wrap items-center gap-3 mt-5">

                                @if($post->status === 'published')

                                    <span class="inline-flex items-center gap-2 bg-green-50 text-green-700 px-3 py-1.5 rounded-full text-xs font-semibold">

                                        <span class="w-1.5 h-1.5 bg-green-600 rounded-full"></span>

                                        Published

                                    </span>

                                @else

                                    <span class="inline-flex items-center gap-2 bg-gray-100 text-gray-600 px-3 py-1.5 rounded-full text-xs font-semibold">

                                        <span class="w-1.5 h-1.5 bg-gray-500 rounded-full"></span>

                                        Draft

                                    </span>

                                @endif


                                <span class="text-xs text-gray-400">

                                    {{ $post->created_at->format('M d, Y') }}

                                </span>

                            </div>


                            <div class="flex gap-2 mt-5">

                                <button
                                    type="button"
                                    onclick="openEditModal(
                                        {{ $post->id }},
                                        @js($post->title),
                                        @js($post->content),
                                        @js($post->status)
                                    )"
                                    class="flex-1 inline-flex items-center justify-center gap-2 bg-blue-600 text-white px-4 py-2.5 rounded-lg text-sm font-semibold hover:bg-blue-700 transition"
                                >

                                    <i data-lucide="pencil" class="w-4 h-4"></i>

                                    Edit

                                </button>


                                <button
                                    type="button"
                                    onclick="openDeleteModal(
                                        {{ $post->id }},
                                        @js($post->title)
                                    )"
                                    class="inline-flex items-center justify-center px-4 py-2.5 bg-red-50 text-red-600 rounded-lg hover:bg-red-100 transition"
                                >

                                    <i data-lucide="trash-2" class="w-4 h-4"></i>

                                </button>

                            </div>

                        </div>

                    @endforeach

                </div>


            @else


                <!-- EMPTY -->

                <div class="px-6 py-20 text-center">

                    <div
                        class="w-16 h-16 mx-auto bg-gray-100 text-gray-500 rounded-2xl flex items-center justify-center mb-5"
                    >

                        <i data-lucide="file-plus-2" class="w-8 h-8"></i>

                    </div>


                    <h3 class="text-xl font-bold">
                        No posts yet
                    </h3>


                    <p class="text-gray-500 max-w-md mx-auto mt-2">
                        Create your first post to start publishing content
                        on your website.
                    </p>


                    <button
                        type="button"
                        onclick="openCreateModal()"
                        class="inline-flex items-center gap-2 mt-6 bg-blue-600 text-white px-5 py-3 rounded-lg font-semibold hover:bg-blue-700 transition"
                    >

                        <i data-lucide="plus" class="w-4 h-4"></i>

                        Create Your First Post

                    </button>

                </div>

            @endif

        </div>

    </main>



    <!-- =========================================================
         CREATE MODAL
    ========================================================== -->

    <div
        id="createModal"
        class="fixed inset-0 z-[100] hidden modal-backdrop items-center justify-center p-4"
    >

        <div
            class="modal-panel bg-white w-full max-w-xl rounded-2xl shadow-2xl overflow-hidden"
            onclick="event.stopPropagation()"
        >


            <!-- MODAL HEADER -->

            <div class="px-6 py-5 border-b border-gray-100">

                <div class="flex items-start justify-between gap-4">

                    <div class="flex items-center gap-3">

                        <div class="w-11 h-11 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center">

                            <i data-lucide="file-plus-2" class="w-5 h-5"></i>

                        </div>


                        <div>

                            <h2 class="text-xl font-bold text-gray-900">
                                Create Post
                            </h2>

                            <p class="text-sm text-gray-500 mt-0.5">
                                Add new content to your website.
                            </p>

                        </div>

                    </div>


                    <button
                        type="button"
                        onclick="closeCreateModal()"
                        class="shrink-0 p-2 text-gray-400 hover:text-gray-700 hover:bg-gray-100 rounded-lg transition"
                    >

                        <i data-lucide="x" class="w-5 h-5"></i>

                    </button>

                </div>

            </div>



            <!-- CREATE FORM -->

            <form
                action="/admin/posts"
                method="POST"
            >

                @csrf


                <div class="px-6 py-6 space-y-5">


                    <!-- TITLE -->

                    <div>

                        <label
                            for="create_title"
                            class="block text-sm font-semibold text-gray-700 mb-2"
                        >
                            Post Title
                        </label>

                        <input
                            type="text"
                            id="create_title"
                            name="title"
                            value="{{ old('title') }}"
                            required
                            placeholder="e.g. Welcome to our website"
                            class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm transition focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500"
                        >

                    </div>



                    <!-- CONTENT -->

                    <div>

                        <div class="flex items-center justify-between mb-2">

                            <label
                                for="create_content"
                                class="block text-sm font-semibold text-gray-700"
                            >
                                Content
                            </label>

                            <span class="text-xs text-gray-400">
                                Main post content
                            </span>

                        </div>


                        <textarea
                            id="create_content"
                            name="content"
                            rows="7"
                            required
                            placeholder="Write your post content here..."
                            class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm leading-relaxed transition focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 resize-y"
                        >{{ old('content') }}</textarea>

                    </div>



                    <!-- STATUS -->

                    <div>

                        <label
                            for="create_status"
                            class="block text-sm font-semibold text-gray-700 mb-2"
                        >
                            Publication Status
                        </label>


                        <div class="relative">

                            <i
                                data-lucide="eye"
                                class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400 pointer-events-none"
                            ></i>


                            <select
                                id="create_status"
                                name="status"
                                required
                                class="w-full bg-gray-50 border border-gray-200 rounded-xl pl-10 pr-4 py-3 text-sm appearance-none transition focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500"
                            >

                                <option value="draft" {{ old('status', 'draft') === 'draft' ? 'selected' : '' }}>
                                    Draft
                                </option>

                                <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>
                                    Published
                                </option>

                            </select>

                        </div>


                        <p class="text-xs text-gray-400 mt-2">
                            Published posts will be visible on the public website.
                        </p>

                    </div>

                </div>



                <!-- FOOTER -->

                <div class="flex items-center justify-end gap-3 px-6 py-4 bg-gray-50 border-t border-gray-100">

                    <button
                        type="button"
                        onclick="closeCreateModal()"
                        class="px-4 py-2.5 text-sm font-semibold text-gray-600 hover:text-gray-900 hover:bg-white border border-transparent hover:border-gray-200 rounded-lg transition"
                    >
                        Cancel
                    </button>


                    <button
                        type="submit"
                        class="inline-flex items-center gap-2 px-5 py-2.5 bg-blue-600 text-white text-sm font-semibold rounded-lg hover:bg-blue-700 transition shadow-sm"
                    >

                        <i data-lucide="plus" class="w-4 h-4"></i>

                        Create Post

                    </button>

                </div>

            </form>

        </div>

    </div>



    <!-- =========================================================
         EDIT MODAL
    ========================================================== -->

    <div
        id="editModal"
        class="fixed inset-0 z-[100] hidden modal-backdrop items-center justify-center p-4"
    >

        <div
            class="modal-panel bg-white w-full max-w-xl rounded-2xl shadow-2xl overflow-hidden"
            onclick="event.stopPropagation()"
        >


            <!-- HEADER -->

            <div class="px-6 py-5 border-b border-gray-100">

                <div class="flex items-start justify-between gap-4">

                    <div class="flex items-center gap-3">

                        <div class="w-11 h-11 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center">

                            <i data-lucide="pencil" class="w-5 h-5"></i>

                        </div>


                        <div>

                            <h2 class="text-xl font-bold text-gray-900">
                                Edit Post
                            </h2>

                            <p class="text-sm text-gray-500 mt-0.5">
                                Update your existing website content.
                            </p>

                        </div>

                    </div>


                    <button
                        type="button"
                        onclick="closeEditModal()"
                        class="shrink-0 p-2 text-gray-400 hover:text-gray-700 hover:bg-gray-100 rounded-lg transition"
                    >

                        <i data-lucide="x" class="w-5 h-5"></i>

                    </button>

                </div>

            </div>



            <!-- EDIT FORM -->

            <form
                id="editPostForm"
                method="POST"
            >

                @csrf
                @method('PUT')


                <div class="px-6 py-6 space-y-5">


                    <!-- TITLE -->

                    <div>

                        <label
                            for="edit_title"
                            class="block text-sm font-semibold text-gray-700 mb-2"
                        >
                            Post Title
                        </label>

                        <input
                            type="text"
                            id="edit_title"
                            name="title"
                            required
                            class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm transition focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500"
                        >

                    </div>



                    <!-- CONTENT -->

                    <div>

                        <label
                            for="edit_content"
                            class="block text-sm font-semibold text-gray-700 mb-2"
                        >
                            Content
                        </label>


                        <textarea
                            id="edit_content"
                            name="content"
                            rows="7"
                            required
                            class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm leading-relaxed transition focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 resize-y"
                        ></textarea>

                    </div>



                    <!-- STATUS -->

                    <div>

                        <label
                            for="edit_status"
                            class="block text-sm font-semibold text-gray-700 mb-2"
                        >
                            Publication Status
                        </label>


                        <div class="relative">

                            <i
                                data-lucide="eye"
                                class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400 pointer-events-none"
                            ></i>


                            <select
                                id="edit_status"
                                name="status"
                                required
                                class="w-full bg-gray-50 border border-gray-200 rounded-xl pl-10 pr-4 py-3 text-sm appearance-none transition focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500"
                            >

                                <option value="draft">
                                    Draft
                                </option>

                                <option value="published">
                                    Published
                                </option>

                            </select>

                        </div>


                        <p class="text-xs text-gray-400 mt-2">
                            Published posts will be visible on the public website.
                        </p>

                    </div>

                </div>



                <!-- FOOTER -->

                <div class="flex items-center justify-between px-6 py-4 bg-gray-50 border-t border-gray-100">

                    <button
                        type="button"
                        onclick="closeEditModal()"
                        class="px-4 py-2.5 text-sm font-semibold text-gray-600 hover:text-gray-900 hover:bg-white border border-transparent hover:border-gray-200 rounded-lg transition"
                    >
                        Cancel
                    </button>


                    <button
                        type="submit"
                        class="inline-flex items-center gap-2 px-5 py-2.5 bg-blue-600 text-white text-sm font-semibold rounded-lg hover:bg-blue-700 transition shadow-sm"
                    >

                        <i data-lucide="save" class="w-4 h-4"></i>

                        Save Changes

                    </button>

                </div>

            </form>

        </div>

    </div>



    <!-- =========================================================
         DELETE MODAL
    ========================================================== -->

    <div
        id="deleteModal"
        class="fixed inset-0 z-[110] hidden modal-backdrop items-center justify-center p-4"
    >

        <div
            class="modal-panel bg-white w-full max-w-sm rounded-2xl shadow-2xl overflow-hidden"
            onclick="event.stopPropagation()"
        >


            <div class="px-6 pt-7 pb-5 text-center">

                <div
                    class="w-14 h-14 mx-auto bg-red-50 text-red-600 rounded-2xl flex items-center justify-center"
                >

                    <i data-lucide="trash-2" class="w-6 h-6"></i>

                </div>


                <h2 class="text-xl font-bold text-gray-900 mt-5">
                    Delete Post?
                </h2>


                <p class="text-sm text-gray-500 mt-2 leading-relaxed">

                    This will permanently delete

                    <span
                        id="deletePostTitle"
                        class="font-semibold text-gray-800"
                    ></span>.

                </p>

                <p class="text-xs text-gray-400 mt-2">
                    This action cannot be undone.
                </p>

            </div>


            <form
                id="deletePostForm"
                method="POST"
            >

                @csrf
                @method('DELETE')


                <div class="flex gap-3 px-6 py-4 bg-gray-50 border-t border-gray-100">

                    <button
                        type="button"
                        onclick="closeDeleteModal()"
                        class="flex-1 px-4 py-2.5 text-sm font-semibold text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 transition"
                    >
                        Cancel
                    </button>


                    <button
                        type="submit"
                        class="flex-1 inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-red-600 text-white text-sm font-semibold rounded-lg hover:bg-red-700 transition"
                    >

                        <i data-lucide="trash-2" class="w-4 h-4"></i>

                        Delete

                    </button>

                </div>

            </form>

        </div>

    </div>



    <!-- =========================================================
         JAVASCRIPT
    ========================================================== -->

    <script>

        lucide.createIcons();


        /* =========================
           CREATE
        ========================== */

        function openCreateModal() {

            const modal = document.getElementById('createModal');

            modal.classList.remove('hidden');
            modal.classList.add('flex');

            document.body.classList.add('overflow-hidden');

            setTimeout(() => {

                document.getElementById('create_title').focus();

            }, 150);

        }


        function closeCreateModal() {

            const modal = document.getElementById('createModal');

            modal.classList.add('hidden');
            modal.classList.remove('flex');

            document.body.classList.remove('overflow-hidden');

        }



        /* =========================
           EDIT
        ========================== */

        function openEditModal(id, title, content, status) {

            const modal = document.getElementById('editModal');

            const form = document.getElementById('editPostForm');


            form.action = '/admin/posts/' + id;


            document.getElementById('edit_title').value = title;

            document.getElementById('edit_content').value = content;

            document.getElementById('edit_status').value = status;


            modal.classList.remove('hidden');
            modal.classList.add('flex');

            document.body.classList.add('overflow-hidden');


            setTimeout(() => {

                document.getElementById('edit_title').focus();

            }, 150);

        }


        function closeEditModal() {

            const modal = document.getElementById('editModal');

            modal.classList.add('hidden');
            modal.classList.remove('flex');

            document.body.classList.remove('overflow-hidden');

        }



        /* =========================
           DELETE
        ========================== */

        function openDeleteModal(id, title) {

            const modal = document.getElementById('deleteModal');

            const form = document.getElementById('deletePostForm');


            form.action = '/admin/posts/' + id;


            document.getElementById('deletePostTitle').textContent =
                '"' + title + '"';


            modal.classList.remove('hidden');
            modal.classList.add('flex');

            document.body.classList.add('overflow-hidden');

        }


        function closeDeleteModal() {

            const modal = document.getElementById('deleteModal');

            modal.classList.add('hidden');
            modal.classList.remove('flex');

            document.body.classList.remove('overflow-hidden');

        }



        /* =========================
           BACKDROP CLICK
        ========================== */

        document.getElementById('createModal').addEventListener('click', function () {

            closeCreateModal();

        });


        document.getElementById('editModal').addEventListener('click', function () {

            closeEditModal();

        });


        document.getElementById('deleteModal').addEventListener('click', function () {

            closeDeleteModal();

        });



        /* =========================
           ESC
        ========================== */

        document.addEventListener('keydown', function (event) {

            if (event.key === 'Escape') {

                closeCreateModal();
                closeEditModal();
                closeDeleteModal();

            }

        });

    </script>

</body>

</html>
