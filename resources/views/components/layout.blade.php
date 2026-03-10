<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Document {{ $title ?? 'Body' }}</title>
</head>

<body class="bg-gray-50 text-gray-800 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-6xl mx-auto px-6">

            <div class="flex justify-between items-center h-16">

                <!-- Logo -->
                <a href="/" class="text-xl font-bold text-indigo-600">
                    MyBlog
                </a>

                <!-- Menu + Auth -->
                <div class="flex items-center gap-8">

                    <!-- Links -->
                    <div class="flex space-x-6 text-sm font-medium">
                        <a href="/" class="hover:text-indigo-600 transition">Home</a>
                        <a href="/about" class="hover:text-indigo-600 transition">About</a>
                        <a href="/blog" class="hover:text-indigo-600 transition">Blog</a>
                        <a href="/contact" class="hover:text-indigo-600 transition">Contact</a>
                    </div>

                    <!-- Auth Buttons -->
                    <div class="flex items-center gap-3">
                        @auth
                            <span class="text-sm font-medium text-gray-600">{{ Auth::User()->name }}</span>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit"
                                    class="text-sm font-medium text-gray-600 hover:text-indigo-600 transition">
                                    Logout
                                </button>
                            </form>
                        @else
                            <a href="/login" class="text-sm font-medium text-gray-600 hover:text-indigo-600 transition">
                                Login
                            </a>

                            <a href="/signup"
                                class="px-4 py-2 text-sm font-medium bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                                Sign Up
                            </a>
                        @endauth


                    </div>

                </div>

            </div>

        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 max-w-6xl mx-auto px-6 py-10">
        {{ $slot }}
    </main>

</body>

</html>
