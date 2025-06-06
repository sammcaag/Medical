<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $title ?? 'NBSC HOS' }}
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('images/nbsc-logo.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

</head>
<script>
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>

<body class="bg-gray-50 dark:bg-gray-800 h-screen ">
    <livewire:navbar />
    <div
        class="flex flex-col min-h-full pt-[70px] print:pt-0 overflow-hidden @if (Auth::user()->is_staff) lg:ml-64 @endif bg-gray-50 dark:bg-gray-900">
        @if (Auth::user()->is_staff)
            <livewire:sidebar />
        @endif
        <div class="min-h-[70vh] bg-white dark:bg-gray-900">
            {{ $slot }}
        </div>
        <livewire:footer />
        <p class="my-10 text-sm text-center text-gray-500">
            &copy; 2024 <a href="https://nbsc.edu.ph/" class="hover:underline" target="_blank">Northern Bukidnon
                State College</a>.
            All rights reserved.
        </p>
    </div>
</body>

</html>
