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
                    <span class="ml-1 text-sm font-medium text-white md:ml-2">Plant</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    <!-- Section 3 -->
    <div class="grid grid-cols-1 gap-4 p-2">
        <div class="text-center">
            <h2 class="text-white text-xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-1 md:mb-5">
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

    <!-- Section 1 -->
    <div class="grid grid-cols-1 gap-4">
        <div class="mb-4 border-b border-gray-200">
            <ul class="flex flex-wrap -mb-px text-sm font-extrabold text-center text-white" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">ALL</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">HERBS</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">VEGETABLES</button>
                </li>
                <li role="presentation">
                    <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">FRUITS</button>
                </li>
            </ul>
        </div>
        <div id="myTabContent">
            <div class="hidden p-4 rounded-lg" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-2 lg:mt-20 text-center">
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
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-2 lg:mt-20 text-center">
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
            </div>
            <div class="hidden p-4 rounded-lg" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-2 mt-20 text-center">
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
            </div>
            <div class="hidden p-4 rounded-lg" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                &nbsp;
            </div>
            <div class="hidden p-4 rounded-lg" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                &nbsp;
            </div>
        </div>
    </div>
    <!-- /.Section 1 -->
</div>
<!-- /.Content 1 -->
@stop

@push('scripts')
@endpush
