<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Alpine.js -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    </head>
    <body class="antialiased">
    <div class="bg-blue-100 h-screen flex flex-col items-center justify-center gap-12">
        <div class="mx-auto max-w-sm lg:max-w-3xl">
            <section class="flex flex-col rounded-lg shadow-2xl mx-7 mt-24 lg:flex-row">
                <div class="h-[200px] bg-cover bg-no-repeat bg-left-top overflow-hidden rounded-t-lg lg:h-[300px] lg:w-full lg:rounded-none lg:rounded-l-lg" style="background-image: url('{{asset('./images/drawers.jpg')}}')">
                </div>
                <article class="grow flex flex-col justify-between bg-white rounded-b-lg lg:rounded-none lg:rounded-r-lg">
                    <div class="px-8 pt-10 pb-8 lg:pt-8 lg:pb-6">
                        <h1 class="text-blue-400 text-lg font-bold pb-4 lg:text-xl">
                            Shift the overall look and feel by adding these wonderful
                            touches to furniture in your home
                        </h1>
                        <p class="text-base text-blue-300">
                            Ever been in a room and felt like something was missing? Perhaps
                            it felt slightly bare and uninviting. I’ve got some simple tips
                            to help you make any room feel complete.
                        </p>
                    </div>
                    <div class="relative flex items-center justify-between gap-4 px-8 pb-4 lg:px-12 lg:pb-8 lg:static">
                        <div class="flex items-center gap-4">
                            <div class="shrink-0">
                                <img class="rounded-full w-10 h-10" src="{{asset('images/avatar-michelle.jpg')}}" alt="user avatar">
                            </div>
                            <div class="flex flex-col">
                                <span class="text-base text-blue-400 font-bold">Michelle Appleton</span>
                                <span class="text-base text-blue-300">28 Jun 2020</span>
                            </div>
                        </div>
                        <div
                            x-data="{show: false}"
                            class="lg:relative"
                        >
                            <button
                                x-on:click="show =  ! show"
                                type="button"
                                title="Share"
                                class="rounded-full bg-blue-100 text-blue-300 p-2 hover:bg-blue-200 hover:text-white ease-in-out duration-150"
                            >
                                <svg width="15" height="13"><path fill="currentColor" d="M15 6.495L8.766.014V3.88H7.441C3.33 3.88 0 7.039 0 10.936v2.049l.589-.612C2.59 10.294 5.422 9.11 8.39 9.11h.375v3.867L15 6.495z"/></svg>
                            </button>
                            <div
                                x-show="show"
                                x-transition:enter="transition ease-out duration-150"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0"
                                style="display:none;"
                                class="absolute inset-x-0 bottom-0 rounded-b-lg bg-blue-400 text-white lg:min-w-min lg:rounded-lg lg:inset-auto lg:-translate-y-28 lg:mt-2 lg:-translate-x-1/2 lg:ml-2"
                            >
                                <div class="relative w-full flex items-center justify-between gap-4 px-8 py-5 lg:py-4">
                                    <div class="hidden lg:block lg:absolute lg:inset-x-1/2 lg:translate-y-6 lg:inset-b-0 lg:w-4 lg:h-4 lg:rotate-45 lg:bg-blue-400"></div>
                                    <div class="relative flex items-center gap-4">
                                        <span class="uppercase text-base tracking-[.3em]">Share</span>
                                        <div class="flex items-center gap-4">
                                            <a href="#">
                                                <svg aria-label="facebook logo" class="w-5 h-5"><path fill="#FFF" d="M18.896 0H1.104C.494 0 0 .494 0 1.104v17.793C0 19.506.494 20 1.104 20h9.58v-7.745H8.076V9.237h2.606V7.01c0-2.583 1.578-3.99 3.883-3.99 1.104 0 2.052.082 2.329.119v2.7h-1.598c-1.254 0-1.496.597-1.496 1.47v1.928h2.989l-.39 3.018h-2.6V20h5.098c.608 0 1.102-.494 1.102-1.104V1.104C20 .494 19.506 0 18.896 0z"/></svg>
                                            </a>
                                            <a href="#">
                                                <svg aria-label="twitter logo" class="w-5" width="20" height="17"><path fill="#FFF" d="M20 2.172a8.192 8.192 0 01-2.357.646 4.11 4.11 0 001.804-2.27 8.22 8.22 0 01-2.605.996A4.096 4.096 0 0013.847.248c-2.65 0-4.596 2.472-3.998 5.037A11.648 11.648 0 011.392 1a4.109 4.109 0 001.27 5.478 4.086 4.086 0 01-1.858-.513c-.045 1.9 1.318 3.679 3.291 4.075a4.113 4.113 0 01-1.853.07 4.106 4.106 0 003.833 2.849A8.25 8.25 0 010 14.658a11.616 11.616 0 006.29 1.843c7.618 0 11.922-6.434 11.663-12.205A8.354 8.354 0 0020 2.172z"/></svg>
                                            </a>
                                            <a href="#">
                                                <svg aria-label="pinterest logo" class="w-5 h-5" width="20" height="20"><path fill="#FFF" d="M10 0C4.478 0 0 4.477 0 10c0 4.237 2.636 7.855 6.356 9.312-.088-.791-.167-2.005.035-2.868.182-.78 1.172-4.97 1.172-4.97s-.299-.6-.299-1.486c0-1.39.806-2.428 1.81-2.428.852 0 1.264.64 1.264 1.408 0 .858-.545 2.14-.828 3.33-.236.995.5 1.807 1.48 1.807 1.778 0 3.144-1.874 3.144-4.58 0-2.393-1.72-4.068-4.177-4.068-2.845 0-4.515 2.135-4.515 4.34 0 .859.331 1.781.745 2.281a.3.3 0 01.069.288l-.278 1.133c-.044.183-.145.223-.335.134-1.249-.581-2.03-2.407-2.03-3.874 0-3.154 2.292-6.052 6.608-6.052 3.469 0 6.165 2.473 6.165 5.776 0 3.447-2.173 6.22-5.19 6.22-1.013 0-1.965-.525-2.291-1.148l-.623 2.378c-.226.869-.835 1.958-1.244 2.621.937.29 1.931.446 2.962.446 5.522 0 10-4.477 10-10S15.522 0 10 0z"/></svg>
                                            </a>
                                        </div>
                                    </div>
                                    <button
                                        x-on:click="show =  ! show"
                                        type="button" title="Share"
                                        class="rounded-full bg-blue-300 text-blue-100 p-2 hover:bg-blue-100 hover:text-blue-300 ease-in-out duration-150 lg:hidden"
                                    >
                                        <svg width="15" height="13"><path fill="currentColor" d="M15 6.495L8.766.014V3.88H7.441C3.33 3.88 0 7.039 0 10.936v2.049l.589-.612C2.59 10.294 5.422 9.11 8.39 9.11h.375v3.867L15 6.495z"/></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </div>
        <footer class="text-center text-blue-300 px-6 pb-6">
            Challenge by <a class="font-normal text-blue-400 hover:underline" href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>.
            Coded by <a class="font-normal text-blue-400 hover:underline" href="https://www.frontendmentor.io/profile/wendyhamel" target="_blank">Wendy Hamel</a>.
        </footer>
    </div>
    </body>
</html>
