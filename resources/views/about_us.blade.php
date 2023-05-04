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
                    <span class="ml-1 text-sm font-medium text-white md:ml-2">About Us</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    <!-- Section 1 -->
    <div class="grid grid-cols-1 mt-5">
        <div class="text-white 2xl:container 2xl:mx-auto px-4">
            <div class="flex flex-col lg:flex-row justify-between gap-8">
                <div class="w-full lg:w-5/12 flex flex-col justify-center">
                    <h1 class="text-3xl lg:text-4xl font-bold leading-9 pb-4">About Us</h1>
                    <p class="font-normal text-base leading-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.In the first place we have granted to God, and by this our present charter confirmed for us and our heirs forever that the English Church shall be free, and shall have her rights entire, and her liberties inviolate; and we will that it be thus observed; which is apparent from</p>
                </div>
                <div class="w-full lg:w-8/12">
                    <img class="w-full h-full" src="https://i.ibb.co/FhgPJt8/Rectangle-116.png" alt="A group of People" />
                </div>
            </div>
            <div class="flex lg:flex-row flex-col justify-between gap-8 pt-12">
                <div class="w-full lg:w-5/12 flex flex-col justify-center">
                    <h1 class="text-3xl lg:text-4xl font-bold leading-9 pb-4">Our Story</h1>
                    <p class="font-normal text-base leading-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.In the first place we have granted to God, and by this our present charter confirmed for us and our heirs forever that the English Church shall be free, and shall have her rights entire, and her liberties inviolate; and we will that it be thus observed; which is apparent from</p>
                </div>
                <div class="w-full lg:w-8/12 lg:pt-8">
                    <div class="grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1 lg:gap-4">
                        <div class="p-4 pb-6 flex justify-center flex-col items-center">
                            <img class="md:block hidden" src="https://i.ibb.co/FYTKDG6/Rectangle-118-2.png" alt="Alexa featured Image" />
                            <img class="md:hidden block" src="https://i.ibb.co/zHjXqg4/Rectangle-118.png" alt="Alexa featured Image" />
                            <p class="font-medium text-xl leading-5 mt-4">Alexa</p>
                        </div>
                        <div class="p-4 pb-6 flex justify-center flex-col items-center">
                            <img class="md:block hidden" src="https://i.ibb.co/fGmxhVy/Rectangle-119.png" alt="Olivia featured Image" />
                            <img class="md:hidden block" src="https://i.ibb.co/NrWKJ1M/Rectangle-119.png" alt="Olivia featured Image" />
                            <p class="font-medium text-xl leading-5 mt-4">Olivia</p>
                        </div>
                        <div class="p-4 pb-6 flex justify-center flex-col items-center">
                            <img class="md:block hidden" src="https://i.ibb.co/Pc6XVVC/Rectangle-120.png" alt="Liam featued Image" />
                            <img class="md:hidden block" src="https://i.ibb.co/C5MMBcs/Rectangle-120.png" alt="Liam featued Image" />
                            <p class="font-medium text-xl leading-5 mt-4">Liam</p>
                        </div>
                        <div class="p-4 pb-6 flex justify-center flex-col items-center">
                            <img class="md:block hidden" src="https://i.ibb.co/7nSJPXQ/Rectangle-121.png" alt="Elijah featured image" />
                            <img class="md:hidden block" src="https://i.ibb.co/ThZBWxH/Rectangle-121.png" alt="Elijah featured image" />
                            <p class="font-medium text-xl leading-5 mt-4">Elijah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.Section 1 -->
</div>
<!-- /.Content 1 -->
@stop

@push('scripts')
@endpush
