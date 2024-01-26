<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $title = 'fixwebstudio';
}; ?>

<div class="relative">
    {{-- start Hero Section --}}
    <section id="hero" class="bg-[#524BAD]">
        <div class="container relative mx-auto  text-white w-screen">
            {{-- navbar --}}
            @livewire('layout.mynav')
            {{-- navbar --}}
            <div
                class="hero-content pt-36  relative flex-col lg:flex-row-reverse justify-between lg:mx-32 text-center lg:text-start">
                <img class="motion-safe:animate-spin md:right-[40rem] md:w-10 md:top-[23rem] absolute w-7 lg:w-12 top-[13rem] right-7 lg:right-[27rem] lg:top-[24rem]"
                    src="{{ asset('img/particel/Group 2.png') }}" alt="">
                <img class="animate-bounce absolute w-12 md:w-16 md:right-[38rem] md:top-[7rem]  right-[22rem] lg:top-20 lg:right-[24rem]"
                    src="{{ asset('img/particel/g312.png') }}" alt="">
                <img src="{{ asset('img/Mask group.png') }}"
                    class="max-w-sm hidden sm:block lg:block rounded-lg shadow-2xl lg:w-[50rem] lg:right-20 lg:top-[10rem]" />
                <div class="lg:w-[30rem]">
                    <h1 class=" text-5xl font-bold font-hind leading-snug">Realisasikan Ide Kreatif Anda Secara Digital!
                    </h1>
                    <p class="relative py-6 font-hind md:text-[1rem] md:mx-40 lg:ms-0 lg:me-10">Kami bersedia mendukung
                        pertumbuhan bisnis Anda melalui platform digital dengan beragam konsep desain yang menarik!</p>
                    <button
                        class="btn hover:translate-y-2 hover:bg-[#D77D3F] text-white border-none  bg-[#FF9247] w-44">Get
                        Started</button>
                </div>
            </div>
        </div>
    </section>
    {{-- Start wave --}}
    <img class="max-h-full" src="{{ asset('img/wave/pattern (2).svg') }}" alt="">
    {{-- End wave --}}
    {{-- End start Hero Section --}}

    {{-- start servce --}}
    <section id="service">
        <div class="container mx-auto">
            <div class="content-title w-full flex-col px-5">
                <h1 class="font-hind font-bold text-[2rem] lg:text-[3rem]  text-center leading-normal mt-16">Apa saja
                    yang
                    bisa kami bantu?
                </h1>
                <p class="text-center xl:text-2xl lg:mx-32 lg:mt-7">Fixwebstudio melayani pengembangan website &
                    aplikasi
                    dengan mengutamakan
                    kualitas & kepuasans
                    pelanggan. Kami melayani project seperti:</p>
            </div>
            <div
                class="content-cart py-10 lg:px-32 w-full grid grid-cols-1 gap-5 place-items-center lg:grid-cols-4 lg:gap-5">
                {{-- landing page cart --}}
                <div class="card w-80 lg:w-60 bg-base-100 shadow-xl lg:h-80">
                    <div class="card-body flex items-center">
                        <img class="w-24 " src="{{ asset('img/icon/landing-page.png') }}" alt="">
                        <h2 class="card-title text-center">Landing Page</h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                    </div>
                </div>
                <div class="card w-80 lg:w-60 bg-base-100 shadow-xl lg:h-80">
                    <div class="card-body flex items-center">
                        <img class="w-24 " src="{{ asset('img/icon/professional-portfolio.png') }}" alt="">
                        <h2 class="card-title">Bio Link</h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                    </div>
                </div>
                <div class="card w-80 lg:w-60 bg-base-100 shadow-xl lg:h-80">
                    <div class="card-body flex items-center">
                        <img class="w-24" src="{{ asset('img/icon/web-shopping.png') }}" alt="">
                        <h2 class="card-title ">Toko Online</h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                    </div>
                </div>
                <div class="card w-80 lg:w-60 bg-base-100 shadow-xl lg:h-80">
                    <div class="card-body flex-col items-center">
                        <img class="w-24 " src="{{ asset('img/icon/dating-app.png') }}" alt="">
                        <div class="text-wrap">
                            <h2 class="card-title">WEB undangan</h2>
                        </div>
                        <h2 class="card-title -mt-3">Pernikahan</h2>
                        <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, hic?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <img src="{{ asset('img/wave/pattern.svg') }}" alt="">
    {{-- End servce --}}

    {{-- Start Paket --}}
    <section id="price" class="bg-[#524BAD]">
        <div class="container mx-auto w-screen pb-20 ">
            <div class="content-wrapper lg:mx-36">
                <h1 class="text-white text-5xl font-hind font-bold text-center  py-10">Pilih Paket Anda</h1>
                <div class="mb-4">
                    <ul class="flex flex-wrap justify-center -mb-px text-sm font-medium text-center" id="default-tab"
                        data-tabs-toggle="#default-tab-content" role="tablist">
                        <li class="me-2" role="presentation">
                            <button
                                class="font-hind  border-b-white focus:border-b-red-600 inline-block p-4 border-b-2 rounded-t-lg hover:text-[#FE52A2]  text-white"
                                id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                                aria-controls="profile" aria-selected="false">Bio Link</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button
                                class="font-hind border-b-white focus:border-b-red-600 inline-block p-4 border-b-2 rounded-t-lg text-white hover:text-[#FE52A2] hover:border-gray-300 dark:hover:text-gray-300"
                                id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                                aria-controls="dashboard" aria-selected="false">Custom WEB</button>
                        </li>
                    </ul>
                </div>

                <div id="default-tab-content">
                    <div class="hidden p-4 rounded-lg bg-[#524BAD] dark:bg-gray-800" id="profile" role="tabpanel"
                        aria-labelledby="profile-tab">
                        {{-- paket biolink --}}
                        <div class="price-wrap grid gap-3 place-items-center grid-cols-1 lg:grid-cols-2 lg:gap-3 ">
                            <div class="card w-80 lg:w-[25rem]  bg-base-100 shadow-xl lg:h-80">
                                <div class="card-body flex items-center">
                                    <h2 class="card-title text-2xl">Paket Bio Link 1</h2>
                                    <h2 class="card-title text-2xl">IDR 50.000</h2>
                                    <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            1 1 Logo Display
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            5 Tombol Tautan
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            Custom Background
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            Bebas Request Tautan
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            URL fixweblabs.com/namacustomer
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card w-80 lg:w-[25rem]  bg-base-100 shadow-xl lg:h-80">
                                <div class="card-body flex items-center">
                                    <h2 class="card-title text-2xl">Paket Bio Link 2</h2>
                                    <h2 class="card-title text-2xl">IDR 230.000</h2>
                                    <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            1 1 Logo Display
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            Custom Tombol Tautan
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            Custom Background
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            Bebas Request Tautan
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            Free domain 1 Tahun (.com, .xyz, .id)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end paket bio link --}}
                    {{-- Start Paket Custom --}}
                    <div class="hidden p-4 rounded-lg bg-[#524BAD] dark:bg-gray-800" id="dashboard" role="tabpanel"
                        aria-labelledby="dashboard-tab">
                        <div class="price-wrap grid gap-3  place-items-center grid-cols-1 lg:grid-cols-2 lg:gap-10 ">
                            <div class="card w-80 lg:w-full  bg-base-100 shadow-xl lg:h-80">
                                <div class="card-body flex items-center">
                                    <h2 class="card-title text-2xl">Paket Basic</h2>
                                    <h2 class="card-title text-2xl">IDR 300.000</h2>
                                    <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            Free Hosting Domain
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            7 Layout
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            Boleh Request Design
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            Free 1x Revisi
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            Gratis Domain .com 1 tahun
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card w-80 lg:w-full  bg-base-100 shadow-xl lg:h-80">
                                <div class="card-body flex items-center">
                                    <h2 class="card-title text-2xl">Paket Pro</h2>
                                    <h2 class="card-title text-2xl">IDR 350.000</h2>
                                    <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            Free Hosting Domain
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            12 Layout
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            Boleh Request Design
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            Free Revisi
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            Gratis Domain .com 1
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card w-80 lg:w-full  bg-base-100 shadow-xl lg:h-80">
                                <div class="card-body flex items-center">
                                    <h2 class="card-title text-2xl">Paket Advance</h2>
                                    <h2 class="card-title text-2xl">IDR 400.000</h2>
                                    <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            Free Hosting Domain
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            15 Layout
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            Boleh Request Design
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            Free Revisi
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            Gratis Domain .com 1
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ENd Paket Custom --}}
                </div>
            </div>
        </div>
    </section>
    <img src="{{ asset('img/wave/pattern3.svg') }}" alt="">
    {{-- Start Paket --}}

    {{-- start preset --}}
    <section id="preset">
        <div class="container mx-auto">
            <div class="content-title w-full flex-col px-5">
                <h1 class="font-hind font-bold text-[2rem] lg:text-[3rem]  text-center leading-normal mt-16">
                    Preset Membuatmu Lebih Mudah
                </h1>
                <p class="text-center xl:text-2xl lg:mx-32 lg:mt-7">44 Presets tersedia. Dengan adanya preset kamu
                    tinggal pilih design undangan sesuai dengan yang kamu mau!</p>
            </div>
            <div class="content-wrap py-16 mx-7 grid grid-cols-1 lg:grid-cols-3 gap-4">
                <div style="background-image: url({{ asset('img/template/wedding.jpeg') }})"
                    class="bg-cover bg-center content  h-[273px] rounded-xl relative">
                    <div class=" badge-primary rounded-se-xl rounded-bl-2xl bottom-0 absolute">
                        <p class="mx-2">primary</p>
                    </div>
                </div>
                <div style="background-image: url({{ asset('img/template/wedding.jpeg') }})"
                    class="bg-cover bg-center content  h-[273px] rounded-xl relative">
                    <div class=" badge-primary rounded-se-xl rounded-bl-2xl bottom-0 absolute">
                        <p class="mx-2">primary</p>
                    </div>
                </div>
                <div style="background-image: url({{ asset('img/template/wedding.jpeg') }})"
                    class="bg-cover bg-center content  h-[273px] rounded-xl relative">
                    <div class=" badge-primary rounded-se-xl rounded-bl-2xl bottom-0 absolute">
                        <p class="mx-2">primary</p>
                    </div>
                </div>
                <div style="background-image: url({{ asset('img/template/wedding.jpeg') }})"
                    class="bg-cover bg-center content  h-[273px] rounded-xl relative">
                    <div class=" badge-primary rounded-se-xl rounded-bl-2xl bottom-0 absolute">
                        <p class="mx-2">primary</p>
                    </div>
                </div>
                <div style="background-image: url({{ asset('img/template/wedding.jpeg') }})"
                    class="bg-cover bg-center content  h-[273px] rounded-xl relative">
                    <div class=" badge-primary rounded-se-xl rounded-bl-2xl bottom-0 absolute">
                        <p class="mx-2">primary</p>
                    </div>
                </div>
                <div style="background-image: url({{ asset('img/template/wedding.jpeg') }})"
                    class="bg-cover bg-center content  h-[273px] rounded-xl relative">
                    <div class=" badge-primary rounded-se-xl rounded-bl-2xl bottom-0 absolute">
                        <p class="mx-2">primary</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <img src="{{ asset('img/wave/pattern.svg') }}" alt="">
    {{-- end preset --}}
    <section id="footer" class=" bg-[#524BAD]">
        <div class="container mx-auto  min-h-64 py-5">
            <div class="contentwrap grid grid-cols-1 lg:grid-cols-2 lg:gap-10 lg:mx-44">
                <div class="metodepembayaran text-white">
                    <h1 class="text-2xl px-10 mb-5"> Metode Pembayaran</h1>
                    <div class="metode-pembayaran flex mx-8">
                        <div class="payment-content mx-2 bg-white flex justify-center rounded-full h-7 w-7 lg:w-10 lg:h-10">
                            <img class="mx-1  " src="{{ asset('img/logopaymen/bni.svg') }}" alt="">
                        </div>
                        <div class="payment-content mx-2 bg-white flex justify-center items-center rounded-full h-7 w-7 lg:w-10 lg:h-10">
                            <img class="mx-1 w-5 h-5 " src="{{ asset('img/logopaymen/shopay.png') }}" alt="">
                        </div>
                        <div class="payment-content mx-2 bg-white flex justify-center rounded-full h-7 w-7 lg:w-10 lg:h-10">
                            <img class="mx-1 " src="{{ asset('img/logopaymen/gopay.png') }}" alt="">
                        </div>
                        <div class="payment-content mx-2 bg-white flex justify-center items-center rounded-full h-7 w-7 lg:w-10 lg:h-10">
                            <img class="mx-1 w-7 h-3" src="{{ asset('img/logopaymen/ALFAMART_LOGO.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="sosmed-wrap text-white">
                    <h1 class="text-2xl mb-5 px-10 mt-5">Lebih Dekat dengan Kami</h1>
                    <div class="px-10 sosmed grid grid-cols-1 lg:grid-cols-2 gap-5">
                        <div class="sosmed-wa flex">
                            <img class="h-6 me-3" src="{{ asset('img/icon/wa.svg') }}" alt="">
                            <h1>081315272539</h1>
                        </div>
                        <div class="sosmed-wa flex">
                            <img class="h-6 me-3" src="{{ asset('img/icon/instagram.svg') }}" alt="">
                            <h1>fixwebstudio</h1>
                        </div>
                        <div class="sosmed-wa flex">
                            <img class="h-6 me-3" src="{{ asset('img/icon/email.svg') }}" alt="">
                            <h1>sarofiqs@gmail.com</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="cr w-screen px-20">
            <p class="text-white text-center py-5">Copyright © 2024 fixwebstudio All Right Reserved</p>
        </div>
    </section>
</div>
