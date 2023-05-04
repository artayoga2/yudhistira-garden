@extends('layouts.default')

@push('styles')
@endpush

@section('content')
<!-- Content 1 -->
<div class="container mx-auto px-0 xl:px-14">
    <!-- Main Banner -->
    <div class="grid grid-cols-2 gap-4 p-5 sm:p-2 border-b-2 border-slate-400">
        <div class="grid content-center">
            <div class="badge-main w-fit text-xs sm:text-base">
                <i class="far fa-square-check"></i> &nbsp;&nbsp;Garden
            </div>
            <h2 class="text-white text-xl sm:text-3xl md:text-6xl lg:text-7xl font-bold mt-2 lg:mb-2">
                MODERN AGRICULTURE & GARDEN
            </h2>
            <p class="text-white text-xs md:text-base">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
            </p>
            <div class="mt-2 lg:mt-5">
                <a href="#" class="badge-main w-fit text-xs sm:text-sm btn-second font-bold">
                    Read More
                </a>
            </div>
        </div>
        <div>
            <img class="mx-auto" src="{{ URL::asset('images/service3Modify.png') }}" alt="image description">
        </div>
    </div>
    <!-- /.Main Banner -->
    <!-- Section 1 -->
    <div class="grid grid-cols-1 gap-4 p-2">
        <div class="text-center">
            <h2 class="text-white text-xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mt-5 mb-1 md:mt-20 md:mb-5">
                BEST GARDEN
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
    <!-- /.Section 1 -->
    <!-- Section 2 -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-2 mt-5 md:mt-20 text-center">
        <div class="grid justify-items-center">
            <div class="w-3/4">
                <img class="mx-auto" src="{{ URL::asset('images/iconRecycle.png') }}" alt="image description">
                <h3 class="text-white text-sm md:text-xl font-bold mb-1 mt-5 sm:mt-10 md:mb-5">
                    EASY GARDENING
                </h3>
                <p class="text-white text-xs md:text-sm">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                </p>
            </div>
        </div>
        <div class="grid justify-items-center">
            <div class="w-3/4">
                <img class="mx-auto" src="{{ URL::asset('images/iconRecycle.png') }}" alt="image description">
                <h3 class="text-white text-sm md:text-xl font-bold mb-1 mt-5 sm:mt-10 md:mb-5">
                    STARTING SEEDS INDOOR
                </h3>
                <p class="text-white text-xs md:text-sm">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                </p>
            </div>
        </div>
        <div class="grid justify-items-center">
            <div class="w-3/4">
                <img class="mx-auto" src="{{ URL::asset('images/iconRecycle.png') }}" alt="image description">
                <h3 class="text-white text-sm md:text-xl font-bold mb-1 mt-5 sm:mt-10 md:mb-5">
                    GARDENING AT HOME
                </h3>
                <p class="text-white text-xs md:text-sm">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                </p>
            </div>
        </div>
    </div>
    <!-- /.Section 2 -->
    <!-- Section 3 -->
    <div class="grid grid-cols-2 gap-4 p-2 mt-24 lg:mt-32 text-center">
        <div>
            <img class="mx-auto" src="{{ URL::asset('images/hydroponics2.png') }}" alt="image description">
        </div>
        <div class="text-left grid justify-items-center">
            <div class="w-3/4">
                <h2 class="text-white text-xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-1 md:mb-5">
                    PLANTING YOUR GARDEN
                </h2>
                <div class="mt-4 md:mt-10 lg:mt-24">
                    <p class="text-white text-xs md:text-base">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                    <div class="mt-2 lg:mt-5">
                        <a href="#" class="badge-main w-fit text-xs sm:text-sm btn-second font-bold">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Section 3 -->
</div>
<!-- /.Content 1 -->

<!-- Content 2 -->
<!-- Section 1 -->
<div class="section-second -mt-32 md:-mt-32 xl:-mt-72">
    <div class="container mx-auto px-0 xl:px-14">
        <div class="grid grid-cols-2 gap-4 p-2 text-center pt-36 lg:pt-40 xl:pt-96">
            <div>
                <h2 class="text-left text-second text-xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-1 md:mb-5">
                    DIFFERENCE <br>YOUR <br>PLANT
                </h2>
            </div>
            <div class="text-left">
                <div class="flex">
                    <div class="dot-modify h-fit w-fit text-sm">
                        1
                    </div>
                    <div class="ml-5 text-second text-xs md:text-base">
                        <h4 class="font-bold">PLANT</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>
                    </div>
                </div>
                <div class="flex mt-10">
                    <div class="dot-modify h-fit w-fit text-sm">
                        2
                    </div>
                    <div class="ml-5 text-second text-xs md:text-base">
                        <h4 class="font-bold">GARDEN</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>
                    </div>
                </div>
                <div class="flex mt-10">
                    <div class="dot-modify h-fit w-fit text-sm">
                        3
                    </div>
                    <div class="ml-5 text-second text-xs md:text-base">
                        <h4 class="font-bold">FERTILIZER</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.Section 1 -->
<!-- Section 2 -->
<div class="section-second pt-20">
    <img class="mx-auto" src="{{ URL::asset('images/hydroponics4.png') }}" alt="image description">
</div>
<!-- /.Section 2 -->
<!-- Section 3 -->
<div class="grid grid-cols-1 gap-4 p-2">
    <div class="text-center">
        <h2 class="text-white text-xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mt-5 mb-1 md:mt-20 md:mb-5">
            PLANT MODEL
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
<!-- Section 4 -->
<div class="container mx-auto px-0 xl:px-14">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-2 mt-5 md:mt-52 text-center">
        <div class="grid grid-cols-1 lg:grid-cols-2 container-product px-7 py-10">
            <div class="mt-0 lg:mt-20">
                <div class="badge-second text-xs w-fit">
                    Plant 1
                </div>
                <div class="text-white text-base font-bold my-2 text-left">
                    Garden Exploration Modul 1
                </div>
                <div class="mt-5 text-left">
                    <a href="{{ route('plant_detail') }}" class="badge-main w-fit text-xs sm:text-sm btn-second font-bold">
                        Detail
                    </a>
                </div>
            </div>
            <div class="mt-5 lg:-mt-32">
                <img class="mx-auto" src="{{ URL::asset('images/tanaman01.png') }}" alt="image description">
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 container-product px-7 py-10">
            <div class="mt-0 lg:mt-20">
                <div class="badge-second text-xs w-fit">
                    Plant 2
                </div>
                <div class="text-white text-base font-bold my-2 text-left">
                    Garden Exploration Modul 2
                </div>
                <div class="mt-5 text-left">
                    <a href="{{ route('plant_detail') }}" class="badge-main w-fit text-xs sm:text-sm btn-second font-bold">
                        Detail
                    </a>
                </div>
            </div>
            <div class="mt-5 lg:-mt-32">
                <img class="mx-auto" src="{{ URL::asset('images/tanaman02.png') }}" alt="image description">
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 container-product px-7 py-10">
            <div class="mt-0 lg:mt-20">
                <div class="badge-second text-xs w-fit">
                    Plant 3
                </div>
                <div class="text-white text-base font-bold my-2 text-left">
                    Garden Exploration Modul 3
                </div>
                <div class="mt-5 text-left">
                    <a href="{{ route('plant_detail') }}" class="badge-main w-fit text-xs sm:text-sm btn-second font-bold">
                        Detail
                    </a>
                </div>
            </div>
            <div class="mt-5 lg:-mt-32">
                <img class="mx-auto" src="{{ URL::asset('images/tanaman03.png') }}" alt="image description">
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-2 mt-5 md:mt-52 text-center">
        <div class="flex justify-center">
            <div class="md:w-3/4 text-left">
                <h2 class="text-left text-white text-xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-1 md:mb-5">
                    NEVER MISS AN OFFER
                </h2>
                <p class="text-white text-xs md:text-base">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    <br><br>
                </p>
                <p class="text-white text-xs md:text-base">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <div class="mt-2 lg:mt-5">
                    <a href="#" class="badge-main w-fit text-xs sm:text-sm btn-second font-bold">
                        Read More
                    </a>
                </div>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="md:w-3/4">
                <img class="mx-auto" src="{{ URL::asset('images/hydroponics5.png') }}" alt="image description">
            </div>
        </div>
    </div>
</div>
<!-- /.Section 4 -->
<!-- /.content 2 -->
@stop

@push('scripts')
@endpush
