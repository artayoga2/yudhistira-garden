<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body class="body-main font-Inter">
    <!-- component -->
    <section class="flex flex-col md:flex-row h-screen items-center">
        <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
            <img src="{{ URL::asset('images/hydroponics12.png') }}" alt="" class="w-full h-full object-cover">
        </div>
        <div class="w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12 flex items-center justify-center text-white">
            <div class="w-full h-100">
                <div class="flex justify-center mt-20">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ URL::asset('images/logo-yudisthira-garden.png') }}" class="h-20 mr-3" alt="Flowbite Logo" />
                    </a>
                </div>
                <h1 class="text-xl md:text-2xl font-bold leading-tight mt-2">Log in to your account</h1>
                <form class="mt-6" action="#" method="POST">
                    <div>
                        <label class="block">Email Address</label>
                        <input type="email" name="" id="" placeholder="Enter Email Address" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
                    </div>
                    <div class="mt-4">
                        <label class="block">Password</label>
                        <input type="password" name="" id="" placeholder="Enter Password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                            focus:bg-white focus:outline-none" required>
                    </div>
                    {{-- <div class="text-right mt-2">
                        <a href="#" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">Forgot Password?</a>
                    </div> --}}
                    <button type="submit" class="w-full block btn-second font-semibold rounded-lg
                        px-4 py-3 mt-6">Log In</button>
                </form>
                <hr class="my-6 border-gray-300 w-full">
                <p class="mt-8">Need an account? <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-700 font-semibold">Create an
                        account</a></p>
            </div>
        </div>
    </section>
    <script src="{{ URL::asset('js/flowbite/dist/flowbite.min.js') }}"></script>
    @stack('scripts')
</body>
</html>
