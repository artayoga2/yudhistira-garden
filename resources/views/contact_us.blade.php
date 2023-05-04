@extends('layouts.default')

@push('styles')
@endpush

@section('content')
<!-- Section 2 -->
<div class="section-second">
    <img class="mx-auto" src="{{ URL::asset('images/hydroponics6.png') }}" alt="image description">
</div>
<!-- /.Section 2 -->
<!-- Content 1 -->
<div class="container mx-auto px-0 xl:px-14">
    <div class="flex my-5 justify-end px-5">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-sm font-medium text-white hover:text-green-700">
                        <u>Home</u>
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    <span class="ml-1 text-sm font-medium text-white md:ml-2">Contact Us</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    <!-- Section 3 -->
    <div class="grid grid-cols-1 gap-4 px-2">
        <div class="text-center">
            <h2 class="text-white text-xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-1 md:mb-5">
                CONTACT US
            </h2>
            <div class="grid justify-items-center">
                <div class="w-full sm:w-2/3 lg:w-1/2">
                    <p class="text-white text-xs md:text-base">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Section 3 -->

    <!-- Section 1 -->
    <div class="grid grid-cols-1 mt-5">
        <section class="text-white">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <form action="#" class="space-y-8">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium">Your email</label>
                        <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
                    </div>
                    <div>
                        <label for="subject" class="block mb-2 text-sm font-medium">Subject</label>
                        <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block mb-2 text-sm font-medium">Your message</label>
                        <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
                    </div>
                    <button type="submit" class="badge-main w-fit text-xs sm:text-sm btn-second font-bold">Send message</button>
                </form>
            </div>
        </section>
    </div>
    <!-- /.Section 1 -->
</div>
<!-- /.Content 1 -->
@stop

@push('scripts')
@endpush
