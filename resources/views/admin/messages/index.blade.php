<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Messages - Simple CMS</title>

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

    <!-- =========================
         FIXED NAVBAR
    ========================== -->
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
                        class="flex items-center gap-2 text-gray-300 hover:text-white transition"
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
                        class="flex items-center gap-2 text-white font-medium"
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


    <!-- =========================
         MAIN CONTENT
    ========================== -->
    <main class="max-w-7xl mx-auto px-6 pt-28 pb-12">


        <!-- =========================
             PAGE HEADER
        ========================== -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-8">

            <div>

                <p class="text-sm font-semibold text-blue-600 uppercase tracking-wide mb-2">
                    Communication
                </p>

                <h1 class="text-3xl md:text-4xl font-bold text-gray-900">
                    Visitor Messages
                </h1>

                <p class="text-gray-500 mt-2 max-w-2xl">
                    Manage and review messages submitted through your website's
                    contact form.
                </p>

            </div>


            <!-- Message Count -->
            <div
                class="inline-flex items-center gap-3 bg-white border border-gray-200 rounded-xl px-5 py-3 shadow-sm"
            >

                <div class="bg-blue-100 text-blue-600 p-2 rounded-lg">
                    <i data-lucide="inbox" class="w-5 h-5"></i>
                </div>

                <div>

                    <p class="text-xs text-gray-500">
                        Total Messages
                    </p>

                    <p class="text-lg font-bold">
                        {{ $messages->count() }}
                    </p>

                </div>

            </div>

        </div>


        <!-- =========================
             MESSAGE STATS
        ========================== -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 mb-8">

            <!-- Total -->
            <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">

                <div class="flex items-start justify-between">

                    <div>

                        <p class="text-sm text-gray-500">
                            Total Messages
                        </p>

                        <p class="text-3xl font-bold mt-2">
                            {{ $messages->count() }}
                        </p>

                        <p class="text-xs text-gray-400 mt-2">
                            All visitor inquiries
                        </p>

                    </div>


                    <div class="bg-blue-100 text-blue-600 p-3 rounded-xl">

                        <i data-lucide="messages-square" class="w-6 h-6"></i>

                    </div>

                </div>

            </div>


            <!-- Latest -->
            <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">

                <div class="flex items-start justify-between">

                    <div>

                        <p class="text-sm text-gray-500">
                            Latest Message
                        </p>

                        <p class="text-lg font-bold mt-2">

                            @if($messages->count())
                                {{ $messages->first()->created_at->format('M d, Y') }}
                            @else
                                No messages
                            @endif

                        </p>

                        <p class="text-xs text-gray-400 mt-2">
                            Most recent submission
                        </p>

                    </div>


                    <div class="bg-indigo-100 text-indigo-600 p-3 rounded-xl">

                        <i data-lucide="clock-3" class="w-6 h-6"></i>

                    </div>

                </div>

            </div>


            <!-- Status -->
            <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">

                <div class="flex items-start justify-between">

                    <div>

                        <p class="text-sm text-gray-500">
                            Inbox Status
                        </p>

                        <p class="text-lg font-bold mt-2">
                            Active
                        </p>

                        <p class="text-xs text-gray-400 mt-2">
                            Contact form is receiving messages
                        </p>

                    </div>


                    <div class="bg-green-100 text-green-600 p-3 rounded-xl">

                        <i data-lucide="circle-check" class="w-6 h-6"></i>

                    </div>

                </div>

            </div>

        </div>


        <!-- =========================
             INBOX
        ========================== -->
        <div class="bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">


            <!-- Inbox Header -->
            <div class="px-6 py-5 border-b border-gray-200">

                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">

                    <div class="flex items-center gap-3">

                        <div class="bg-blue-100 text-blue-600 p-2 rounded-lg">

                            <i data-lucide="inbox" class="w-5 h-5"></i>

                        </div>


                        <div>

                            <h2 class="font-bold text-lg">
                                Inbox
                            </h2>

                            <p class="text-sm text-gray-500">
                                Recent messages from website visitors.
                            </p>

                        </div>

                    </div>


                    @if($messages->count())

                        <span
                            class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 px-3 py-1.5 rounded-full text-xs font-semibold"
                        >

                            <span class="w-1.5 h-1.5 bg-blue-600 rounded-full"></span>

                            {{ $messages->count() }}
                            {{ $messages->count() === 1 ? 'message' : 'messages' }}

                        </span>

                    @endif

                </div>

            </div>


            <!-- =========================
                 MESSAGES
            ========================== -->

            @if($messages->count())


                <!-- Desktop Table -->
                <div class="hidden lg:block overflow-x-auto">

                    <table class="w-full">

                        <thead class="bg-gray-50 border-b border-gray-200">

                            <tr>

                                <th class="text-left px-6 py-4 text-xs font-semibold uppercase tracking-wide text-gray-500">
                                    Visitor
                                </th>

                                <th class="text-left px-6 py-4 text-xs font-semibold uppercase tracking-wide text-gray-500">
                                    Subject
                                </th>

                                <th class="text-left px-6 py-4 text-xs font-semibold uppercase tracking-wide text-gray-500">
                                    Message
                                </th>

                                <th class="text-left px-6 py-4 text-xs font-semibold uppercase tracking-wide text-gray-500">
                                    Received
                                </th>

                            </tr>

                        </thead>


                        <tbody class="divide-y divide-gray-100">

                            @foreach($messages as $message)

                                <tr class="hover:bg-blue-50/40 transition">


                                    <!-- Visitor -->
                                    <td class="px-6 py-5 align-top">

                                        <div class="flex items-start gap-3">

                                            <div
                                                class="w-10 h-10 shrink-0 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center"
                                            >
                                                <i data-lucide="user" class="w-5 h-5"></i>
                                            </div>


                                            <div class="min-w-0">

                                                <p class="font-semibold text-gray-900">
                                                    {{ $message->name }}
                                                </p>

                                                <p class="text-sm text-gray-500 mt-0.5 break-all">
                                                    {{ $message->email }}
                                                </p>

                                            </div>

                                        </div>

                                    </td>


                                    <!-- Subject -->
                                    <td class="px-6 py-5 align-top">

                                        <div class="flex items-start gap-2">

                                            <i
                                                data-lucide="file-text"
                                                class="w-4 h-4 text-gray-400 mt-0.5 shrink-0"
                                            ></i>

                                            <p class="font-semibold text-gray-800">
                                                {{ $message->subject }}
                                            </p>

                                        </div>

                                    </td>


                                    <!-- Message -->
                                    <td class="px-6 py-5 align-top max-w-lg">

                                        <p class="text-sm text-gray-600 leading-relaxed">
                                            {{ \Illuminate\Support\Str::limit($message->message, 180) }}
                                        </p>

                                    </td>


                                    <!-- Date -->
                                    <td class="px-6 py-5 align-top whitespace-nowrap">

                                        <div class="flex items-start gap-2">

                                            <i
                                                data-lucide="calendar-days"
                                                class="w-4 h-4 text-gray-400 mt-0.5"
                                            ></i>

                                            <div>

                                                <p class="text-sm font-medium text-gray-700">
                                                    {{ $message->created_at->format('M d, Y') }}
                                                </p>

                                                <p class="text-xs text-gray-400 mt-1">
                                                    {{ $message->created_at->format('h:i A') }}
                                                </p>

                                            </div>

                                        </div>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>


                <!-- =========================
                     TABLET / MOBILE CARDS
                ========================== -->
                <div class="lg:hidden divide-y divide-gray-200">

                    @foreach($messages as $message)

                        <div class="p-6 hover:bg-gray-50 transition">

                            <!-- Visitor -->
                            <div class="flex items-start gap-3">

                                <div
                                    class="w-11 h-11 shrink-0 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center"
                                >
                                    <i data-lucide="user" class="w-5 h-5"></i>
                                </div>


                                <div class="min-w-0 flex-1">

                                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-1">

                                        <h3 class="font-bold text-gray-900">
                                            {{ $message->name }}
                                        </h3>

                                        <span class="text-xs text-gray-400">
                                            {{ $message->created_at->format('M d, Y • h:i A') }}
                                        </span>

                                    </div>

                                    <p class="text-sm text-gray-500 break-all mt-0.5">
                                        {{ $message->email }}
                                    </p>

                                </div>

                            </div>


                            <!-- Subject -->
                            <div class="mt-5 bg-blue-50/70 border border-blue-100 rounded-xl p-4">

                                <div class="flex items-start gap-2">

                                    <i
                                        data-lucide="file-text"
                                        class="w-4 h-4 text-blue-600 mt-0.5 shrink-0"
                                    ></i>

                                    <div>

                                        <p class="text-xs font-semibold uppercase tracking-wide text-blue-600 mb-1">
                                            Subject
                                        </p>

                                        <p class="font-semibold text-gray-900">
                                            {{ $message->subject }}
                                        </p>

                                    </div>

                                </div>

                            </div>


                            <!-- Message -->
                            <div class="mt-4">

                                <p class="text-xs font-semibold uppercase tracking-wide text-gray-400 mb-2">
                                    Message
                                </p>

                                <p class="text-sm text-gray-600 leading-relaxed whitespace-pre-line">
                                    {{ $message->message }}
                                </p>

                            </div>


                            <!-- Email Action -->
                            <div class="mt-5">

                                <a
                                    href="mailto:{{ $message->email }}"
                                    class="inline-flex items-center gap-2 bg-blue-600 text-white px-4 py-2.5 rounded-lg text-sm font-semibold hover:bg-blue-700 transition"
                                >

                                    <i data-lucide="reply" class="w-4 h-4"></i>

                                    Reply by Email

                                </a>

                            </div>

                        </div>

                    @endforeach

                </div>


            @else


                <!-- Empty State -->
                <div class="px-6 py-20 text-center">

                    <div
                        class="w-16 h-16 mx-auto bg-gray-100 text-gray-500 rounded-2xl flex items-center justify-center mb-5"
                    >
                        <i data-lucide="inbox" class="w-8 h-8"></i>
                    </div>


                    <h3 class="text-xl font-bold text-gray-900">
                        Your inbox is empty
                    </h3>


                    <p class="text-gray-500 max-w-md mx-auto mt-2">
                        No visitor messages have been submitted yet.
                        Messages from your contact form will appear here.
                    </p>


                    <a
                        href="/"
                        target="_blank"
                        class="inline-flex items-center gap-2 mt-6 bg-blue-600 text-white px-5 py-3 rounded-lg font-semibold hover:bg-blue-700 transition"
                    >

                        <i data-lucide="external-link" class="w-4 h-4"></i>

                        View Website

                    </a>

                </div>


            @endif

        </div>


        <!-- =========================
             BOTTOM INFO
        ========================== -->
        @if($messages->count())

            <div class="mt-6 flex items-start gap-3 bg-blue-50 border border-blue-100 rounded-xl p-4">

                <i
                    data-lucide="info"
                    class="w-5 h-5 text-blue-600 mt-0.5 shrink-0"
                ></i>

                <p class="text-sm text-blue-700">
                    Messages are automatically saved when visitors submit
                    the contact form on the public website.
                </p>

            </div>

        @endif

    </main>


    <!-- =========================
         ICON INITIALIZATION
    ========================== -->
    <script>
        lucide.createIcons();
    </script>

</body>
</html>