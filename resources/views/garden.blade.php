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
                    <span class="ml-1 text-sm font-medium text-white md:ml-2">Garden</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    <!-- Section 3 -->
    <div class="grid grid-cols-1 gap-4 px-2">
        <div class="text-center">
            <h2 class="text-white text-xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-1 md:mb-5">
                GARDEN MODEL
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
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-5">
        <div class="w-full rounded-lg shadow container-product">
            <a href="#">
                <img class="rounded-t-lg mx-auto" src="{{ URL::asset('images/hydroponics7.png') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight">Noteworthy technology acquisitions 2021</h5>
                </a>
                <p class="mb-3 font-normal">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order...</p>
                <a href="{{ route('garden_detail') }}" class="badge-main w-fit text-xs sm:text-sm btn-second font-bold">
                    Detail
                </a>
            </div>
        </div>
        <div class="w-full rounded-lg shadow container-product">
            <a href="#">
                <img class="rounded-t-lg mx-auto" src="{{ URL::asset('images/hydroponics8.png') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight">Hydroponics Drip Systems</h5>
                </a>
                <p class="mb-3 font-normal">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order...</p>
                <a href="{{ route('garden_detail') }}" class="badge-main w-fit text-xs sm:text-sm btn-second font-bold">
                    Detail
                </a>
            </div>
        </div>
        <div class="w-full rounded-lg shadow container-product">
            <a href="#">
                <img class="rounded-t-lg mx-auto" src="{{ URL::asset('images/hydroponics9.png') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight">Aeroponics System</h5>
                </a>
                <p class="mb-3 font-normal">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order...</p>
                <a href="{{ route('garden_detail') }}" class="badge-main w-fit text-xs sm:text-sm btn-second font-bold">
                    Detail
                </a>
            </div>
        </div>
        <div class="w-full rounded-lg shadow container-product">
            <a href="#">
                <img class="rounded-t-lg mx-auto" src="{{ URL::asset('images/hydroponics10.png') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight">Aquaponics Systems</h5>
                </a>
                <p class="mb-3 font-normal">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order...</p>
                <a href="{{ route('garden_detail') }}" class="badge-main w-fit text-xs sm:text-sm btn-second font-bold">
                    Detail
                </a>
            </div>
        </div>
    </div>
    <!-- /.Section 1 -->
</div>
<!-- /.Content 1 -->
@stop

@push('scripts')
@endpush
