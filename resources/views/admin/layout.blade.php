<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
   
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-100">
    <nav class="bg-emerald-500 shadow-lg fixed w-full top-0 z-10">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-wrap items-center justify-between ">
                <!-- Logo Section -->
                <a href="#" class="flex items-center space-x-2">
                    <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="h-14 sm:h-18">
                    <span class="font-semibold text-gray-500 text-lg"></span>
                </a>
    
                <!-- Title Section -->
                <div class="text-white text-lg font-bold text-center flex-grow">
                    Admin Dashboard
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Add spacing below the navbar to prevent content overlap -->
    <div class="mt-16"></div>
    
   
    <div class="p-6 mt-20">
        @yield('content')
    </div>


    <footer class="bg-emerald-500 text-white p-2 flex justify-between fixed bottom-0 w-full">
        
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="bg-red-500 px-3 py-1 rounded">Logout</button>
        </form>
    </footer>
</body>
</html>
