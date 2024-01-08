<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Pages 2</title>
</head>

<body>
    <!-- Navbar -->

    <div class="bg-white ">
        <header class="absolute inset-x-0 top-0 z-50">

            <nav
                class="bg-dark dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                        <span
                            class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                    </a>
                    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

                        <a href="<?= url('login'); ?>">
                            <button type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login
                            </button>
                        </a>

                        <button data-collapse-toggle="navbar-sticky" type="button"
                            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="navbar-sticky" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                    </div>
                    <div class="items-center  justify-between hidden w-full md:flex md:w-auto md:order-1"
                        id="navbar-sticky">
                        <ul
                            class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                            <li>
                                <a href="#"
                                    class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                    aria-current="page">Home</a>
                            </li>
                            <li>
                                <a href="#blog"
                                    class="block py-2 px-3 dark:text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Blog</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-3 dark:text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-3 dark:text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                            </li>
                            <button id="theme-toggle" type="button"
                                class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5">
                                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z">
                                    </path>
                                </svg>
                                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                        fill-rule="evenodd" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>

    <!-- Hero section -->
    <div class="relative isolate px-6 pt-14 lg:px-8 ">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
            aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div
                    class="relative rounded-full px-3 py-1 text-sm leading-6  ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    Announcing our next round of funding. <a href="#" class="font-semibold text-indigo-600"><span
                            class="absolute inset-0" aria-hidden="true"></span>Read more <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-indigo-600 sm:text-6xl">Data to enrich your online
                    business</h1>
                <p class="mt-6 text-lg leading-8 dark:text-white">Anim aute id magna aliqua ad ad non
                    deserunt sunt.
                    Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="">
                        <button class="button">
                            <svg class="svgIcon" viewBox="0 0 512 512" height="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm50.7-186.9L162.4 380.6c-19.4 7.5-38.5-11.6-31-31l55.5-144.3c3.3-8.5 9.9-15.1 18.4-18.4l144.3-55.5c19.4-7.5 38.5 11.6 31 31L325.1 306.7c-3.2 8.5-9.9 15.1-18.4 18.4zM288 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z">
                                </path>
                            </svg>
                            Explore
                        </button>

                    </a>

                    <a href="#" class="text-sm font-semibold leading-6 ">Learn more <span
                            aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>

    <!-- Blog section 2 -->
    <!-- component -->
    <!-- This is an example component -->
    <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
        <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-satu">Our
            Blog</h2>
        <p class="font-light  sm:text-xl">We use an agile approach to test
            assumptions and connect with the needs of your audience early and often.</p>
    </div>

    <section class="flex flex-row flex-wrap mx-auto px-24">
        <!-- Card Component -->
        <div class="transition-all duration-150 flex w-full px-4 py-6 md:w-1/2 lg:w-1/3">
            <div
                class="flex flex-col items-stretch min-h-full pb-4 mb-6 transition-all duration-150 dark:bg-gray-800 rounded-lg shadow-lg hover:shadow-2xl">
                <div class="md:flex-shrink-0">
                    <img src="https://www.unfe.org/wp-content/uploads/2019/04/SM-placeholder-1024x512.png"
                        alt="Blog Cover" class="object-fill w-full rounded-lg rounded-b-none md:h-56" />
                </div>
                <div class="flex items-center justify-between px-4 py-2 overflow-hidden">
                    <span class="text-xs font-medium text-blue-600 uppercase">
                        Web Programming
                    </span>
                    <div class="flex flex-row items-center">
                        <div class="text-xs font-medium  flex flex-row items-center mr-2">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                            <span>1.5k</span>
                        </div>

                        <div class="text-xs font-medium  flex flex-row items-center mr-2">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                </path>
                            </svg>
                            <span>25</span>
                        </div>

                        <div class="text-xs font-medium  flex flex-row items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5">
                                </path>
                            </svg>
                            <span>7</span>
                        </div>
                    </div>
                </div>
                <hr class="border-gray-300" />
                <div class="flex flex-wrap items-center flex-1 px-4 py-1 text-center mx-auto">
                    <a href="#" class="hover:underline">
                        <h2 class="text-2xl font-bold tracking-normal ">
                            Ho to Yawn in 7 Days
                        </h2>
                    </a>
                </div>
                <hr class="border-gray-300" />
                <p class="flex flex-row flex-wrap w-full px-4 py-2 overflow-hidden text-sm text-justify ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, magni
                    fugiat, odit incidunt necessitatibus aut nesciunt exercitationem aliquam
                    id voluptatibus quisquam maiores officia sit amet accusantium aliquid
                    quo obcaecati quasi.
                </p>
                <hr class="border-gray-300" />
                <section class="px-4 py-2 mt-2">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center flex-1">
                            <img class="object-cover h-10 rounded-full"
                                src="https://thumbs.dreamstime.com/b/default-avatar-photo-placeholder-profile-icon-eps-file-easy-to-edit-default-avatar-photo-placeholder-profile-icon-124557887.jpg"
                                alt="Avatar" />
                            <div class="flex flex-col mx-2">
                                <a href="" class="font-semibold  hover:underline">
                                    Fajrian Aidil Pratama
                                </a>
                                <span class="mx-1 text-xs ">28 Sep 2020</span>
                            </div>
                        </div>
                        <p class="mt-1 text-xs ">9 minutes read</p>
                    </div>
                </section>
            </div>
        </div>
        <!-- Card Component -->
        <div class="transition-all duration-150 flex w-full px-4 py-6 md:w-1/2 lg:w-1/3">
            <div
                class="flex flex-col items-stretch min-h-full pb-4 mb-6 transition-all duration-150 dark:bg-gray-800 rounded-lg shadow-lg hover:shadow-2xl">
                <div class="md:flex-shrink-0">
                    <img src="https://www.unfe.org/wp-content/uploads/2019/04/SM-placeholder-1024x512.png"
                        alt="Blog Cover" class="object-fill w-full rounded-lg rounded-b-none md:h-56" />
                </div>
                <div class="flex items-center justify-between px-4 py-2 overflow-hidden">
                    <span class="text-xs font-medium text-blue-600 uppercase">
                        Web Programming
                    </span>
                    <div class="flex flex-row items-center">
                        <div class="text-xs font-medium  flex flex-row items-center mr-2">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                            <span>1.5k</span>
                        </div>

                        <div class="text-xs font-medium  flex flex-row items-center mr-2">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                </path>
                            </svg>
                            <span>25</span>
                        </div>

                        <div class="text-xs font-medium  flex flex-row items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5">
                                </path>
                            </svg>
                            <span>7</span>
                        </div>
                    </div>
                </div>
                <hr class="border-gray-300" />
                <div class="flex flex-wrap items-center flex-1 px-4 py-1 text-center mx-auto">
                    <a href="#" class="hover:underline">
                        <h2 class="text-2xl font-bold tracking-normal ">
                            Ho to Yawn in 7 Days
                        </h2>
                    </a>
                </div>
                <hr class="border-gray-300" />
                <p class="flex flex-row flex-wrap w-full px-4 py-2 overflow-hidden text-sm text-justify ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, magni
                    fugiat, odit incidunt necessitatibus aut nesciunt exercitationem aliquam
                    id voluptatibus quisquam maiores officia sit amet accusantium aliquid
                    quo obcaecati quasi.
                </p>
                <hr class="border-gray-300" />
                <section class="px-4 py-2 mt-2">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center flex-1">
                            <img class="object-cover h-10 rounded-full"
                                src="https://thumbs.dreamstime.com/b/default-avatar-photo-placeholder-profile-icon-eps-file-easy-to-edit-default-avatar-photo-placeholder-profile-icon-124557887.jpg"
                                alt="Avatar" />
                            <div class="flex flex-col mx-2">
                                <a href="" class="font-semibold  hover:underline">
                                    Fajrian Aidil Pratama
                                </a>
                                <span class="mx-1 text-xs ">28 Sep 2020</span>
                            </div>
                        </div>
                        <p class="mt-1 text-xs ">9 minutes read</p>
                    </div>
                </section>
            </div>
        </div>
        <!-- Card Component -->
        <div class="transition-all duration-150 flex w-full px-4 py-6 md:w-1/2 lg:w-1/3">
            <div
                class="flex flex-col items-stretch min-h-full pb-4 mb-6 transition-all duration-150 dark:bg-gray-800 rounded-lg shadow-lg hover:shadow-2xl">
                <div class="md:flex-shrink-0">
                    <img src="https://www.unfe.org/wp-content/uploads/2019/04/SM-placeholder-1024x512.png"
                        alt="Blog Cover" class="object-fill w-full rounded-lg rounded-b-none md:h-56" />
                </div>
                <div class="flex items-center justify-between px-4 py-2 overflow-hidden">
                    <span class="text-xs font-medium text-blue-600 uppercase">
                        Web Programming
                    </span>
                    <div class="flex flex-row items-center">
                        <div class="text-xs font-medium  flex flex-row items-center mr-2">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                            <span>1.5k</span>
                        </div>

                        <div class="text-xs font-medium  flex flex-row items-center mr-2">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                </path>
                            </svg>
                            <span>25</span>
                        </div>

                        <div class="text-xs font-medium  flex flex-row items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5">
                                </path>
                            </svg>
                            <span>7</span>
                        </div>
                    </div>
                </div>
                <hr class="border-gray-300" />
                <div class="flex flex-wrap items-center flex-1 px-4 py-1 text-center mx-auto">
                    <a href="#" class="hover:underline">
                        <h2 class="text-2xl font-bold tracking-normal ">
                            Ho to Yawn in 7 Days
                        </h2>
                    </a>
                </div>
                <hr class="border-gray-300" />
                <p class="flex flex-row flex-wrap w-full px-4 py-2 overflow-hidden text-sm text-justify ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, magni
                    fugiat, odit incidunt necessitatibus aut nesciunt exercitationem aliquam
                    id voluptatibus quisquam maiores officia sit amet accusantium aliquid
                    quo obcaecati quasi.
                </p>
                <hr class="border-gray-300" />
                <section class="px-4 py-2 mt-2">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center flex-1">
                            <img class="object-cover h-10 rounded-full"
                                src="https://thumbs.dreamstime.com/b/default-avatar-photo-placeholder-profile-icon-eps-file-easy-to-edit-default-avatar-photo-placeholder-profile-icon-124557887.jpg"
                                alt="Avatar" />
                            <div class="flex flex-col mx-2">
                                <a href="" class="font-semibold  hover:underline">
                                    Fajrian Aidil Pratama
                                </a>
                                <span class="mx-1 text-xs ">28 Sep 2020</span>
                            </div>
                        </div>
                        <p class="mt-1 text-xs ">9 minutes read</p>
                    </div>
                </section>
            </div>
        </div>
        <!-- Card Component -->
        <div class="transition-all duration-150 flex w-full px-4 py-6 md:w-1/2 lg:w-1/3">
            <div
                class="flex flex-col items-stretch min-h-full pb-4 mb-6 transition-all duration-150 dark:bg-gray-800 rounded-lg shadow-lg hover:shadow-2xl">
                <div class="md:flex-shrink-0">
                    <img src="https://www.unfe.org/wp-content/uploads/2019/04/SM-placeholder-1024x512.png"
                        alt="Blog Cover" class="object-fill w-full rounded-lg rounded-b-none md:h-56" />
                </div>
                <div class="flex items-center justify-between px-4 py-2 overflow-hidden">
                    <span class="text-xs font-medium text-blue-600 uppercase">
                        Web Programming
                    </span>
                    <div class="flex flex-row items-center">
                        <div class="text-xs font-medium  flex flex-row items-center mr-2">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                            <span>1.5k</span>
                        </div>

                        <div class="text-xs font-medium  flex flex-row items-center mr-2">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                </path>
                            </svg>
                            <span>25</span>
                        </div>

                        <div class="text-xs font-medium  flex flex-row items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5">
                                </path>
                            </svg>
                            <span>7</span>
                        </div>
                    </div>
                </div>
                <hr class="border-gray-300" />
                <div class="flex flex-wrap items-center flex-1 px-4 py-1 text-center mx-auto">
                    <a href="#" class="hover:underline">
                        <h2 class="text-2xl font-bold tracking-normal ">
                            Ho to Yawn in 7 Days
                        </h2>
                    </a>
                </div>
                <hr class="border-gray-300" />
                <p class="flex flex-row flex-wrap w-full px-4 py-2 overflow-hidden text-sm text-justify ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, magni
                    fugiat, odit incidunt necessitatibus aut nesciunt exercitationem aliquam
                    id voluptatibus quisquam maiores officia sit amet accusantium aliquid
                    quo obcaecati quasi.
                </p>
                <hr class="border-gray-300" />
                <section class="px-4 py-2 mt-2">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center flex-1">
                            <img class="object-cover h-10 rounded-full"
                                src="https://thumbs.dreamstime.com/b/default-avatar-photo-placeholder-profile-icon-eps-file-easy-to-edit-default-avatar-photo-placeholder-profile-icon-124557887.jpg"
                                alt="Avatar" />
                            <div class="flex flex-col mx-2">
                                <a href="" class="font-semibold  hover:underline">
                                    Fajrian Aidil Pratama
                                </a>
                                <span class="mx-1 text-xs ">28 Sep 2020</span>
                            </div>
                        </div>
                        <p class="mt-1 text-xs ">9 minutes read</p>
                    </div>
                </section>
            </div>
        </div>
        <!-- Card Component -->
        <div class="transition-all duration-150 flex w-full px-4 py-6 md:w-1/2 lg:w-1/3">
            <div
                class="flex flex-col items-stretch min-h-full pb-4 mb-6 transition-all duration-150 dark:bg-gray-800 rounded-lg shadow-lg hover:shadow-2xl">
                <div class="md:flex-shrink-0">
                    <img src="https://www.unfe.org/wp-content/uploads/2019/04/SM-placeholder-1024x512.png"
                        alt="Blog Cover" class="object-fill w-full rounded-lg rounded-b-none md:h-56" />
                </div>
                <div class="flex items-center justify-between px-4 py-2 overflow-hidden">
                    <span class="text-xs font-medium text-blue-600 uppercase">
                        Web Programming
                    </span>
                    <div class="flex flex-row items-center">
                        <div class="text-xs font-medium  flex flex-row items-center mr-2">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                            <span>1.5k</span>
                        </div>

                        <div class="text-xs font-medium  flex flex-row items-center mr-2">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                </path>
                            </svg>
                            <span>25</span>
                        </div>

                        <div class="text-xs font-medium  flex flex-row items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5">
                                </path>
                            </svg>
                            <span>7</span>
                        </div>
                    </div>
                </div>
                <hr class="border-gray-300" />
                <div class="flex flex-wrap items-center flex-1 px-4 py-1 text-center mx-auto">
                    <a href="#" class="hover:underline">
                        <h2 class="text-2xl font-bold tracking-normal ">
                            Ho to Yawn in 7 Days
                        </h2>
                    </a>
                </div>
                <hr class="border-gray-300" />
                <p class="flex flex-row flex-wrap w-full px-4 py-2 overflow-hidden text-sm text-justify ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, magni
                    fugiat, odit incidunt necessitatibus aut nesciunt exercitationem aliquam
                    id voluptatibus quisquam maiores officia sit amet accusantium aliquid
                    quo obcaecati quasi.
                </p>
                <hr class="border-gray-300" />
                <section class="px-4 py-2 mt-2">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center flex-1">
                            <img class="object-cover h-10 rounded-full"
                                src="https://thumbs.dreamstime.com/b/default-avatar-photo-placeholder-profile-icon-eps-file-easy-to-edit-default-avatar-photo-placeholder-profile-icon-124557887.jpg"
                                alt="Avatar" />
                            <div class="flex flex-col mx-2">
                                <a href="" class="font-semibold  hover:underline">
                                    Fajrian Aidil Pratama
                                </a>
                                <span class="mx-1 text-xs ">28 Sep 2020</span>
                            </div>
                        </div>
                        <p class="mt-1 text-xs ">9 minutes read</p>
                    </div>
                </section>
            </div>
        </div>
        <!-- Card Component -->
        <div class="transition-all duration-150 flex w-full px-4 py-6 md:w-1/2 lg:w-1/3">
            <div
                class="flex flex-col items-stretch min-h-full pb-4 mb-6 transition-all duration-150 dark:bg-gray-800 rounded-lg shadow-lg hover:shadow-2xl">
                <div class="md:flex-shrink-0">
                    <img src="https://www.unfe.org/wp-content/uploads/2019/04/SM-placeholder-1024x512.png"
                        alt="Blog Cover" class="object-fill w-full rounded-lg rounded-b-none md:h-56" />
                </div>
                <div class="flex items-center justify-between px-4 py-2 overflow-hidden">
                    <span class="text-xs font-medium text-blue-600 uppercase">
                        Web Programming
                    </span>
                    <div class="flex flex-row items-center">
                        <div class="text-xs font-medium  flex flex-row items-center mr-2">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                            <span>1.5k</span>
                        </div>

                        <div class="text-xs font-medium  flex flex-row items-center mr-2">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                </path>
                            </svg>
                            <span>25</span>
                        </div>

                        <div class="text-xs font-medium  flex flex-row items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5">
                                </path>
                            </svg>
                            <span>7</span>
                        </div>
                    </div>
                </div>
                <hr class="border-gray-300" />
                <div class="flex flex-wrap items-center flex-1 px-4 py-1 text-center mx-auto">
                    <a href="#" class="hover:underline">
                        <h2 class="text-2xl font-bold tracking-normal ">
                            Ho to Yawn in 7 Days
                        </h2>
                    </a>
                </div>
                <hr class="border-gray-300" />
                <p class="flex flex-row flex-wrap w-full px-4 py-2 overflow-hidden text-sm text-justify ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, magni
                    fugiat, odit incidunt necessitatibus aut nesciunt exercitationem aliquam
                    id voluptatibus quisquam maiores officia sit amet accusantium aliquid
                    quo obcaecati quasi.
                </p>
                <hr class="border-gray-300" />
                <section class="px-4 py-2 mt-2">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center flex-1">
                            <img class="object-cover h-10 rounded-full"
                                src="https://thumbs.dreamstime.com/b/default-avatar-photo-placeholder-profile-icon-eps-file-easy-to-edit-default-avatar-photo-placeholder-profile-icon-124557887.jpg"
                                alt="Avatar" />
                            <div class="flex flex-col mx-2">
                                <a href="" class="font-semibold  hover:underline">
                                    Fajrian Aidil Pratama
                                </a>
                                <span class="mx-1 text-xs ">28 Sep 2020</span>
                            </div>
                        </div>
                        <p class="mt-1 text-xs ">9 minutes read</p>
                    </div>
                </section>
            </div>
        </div>


    </section>

    <!-- Team Section -->
    <section class="bg-dark dark:bg-gray-900" id="blog">
        <div class=" py-8 px-28 mx-auto max-w-screen-xl lg:py-16 lg:px-24">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-satu">Our
                    Team</h2>
                <p class="font-light  sm:text-xl">We use an agile approach to test
                    assumptions and connect with the needs of your audience early and often.</p>
            </div>
            <div class="grid gap-8 lg:grid-cols-2 ">
                <article
                    class="p-6 bg-dark  dark:bg-gray-800 rounded-lg border border-gray-200 shadow-md  dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span
                            class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                </path>
                            </svg>
                            Tutorial
                        </span>
                        <span class="text-sm">14 days ago</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight  dark:text-white"><a href="#">How to
                            quickly deploy a static website</a></h2>
                    <p class="mb-5 font-light  dark:text-white">Static websites are now used to
                        bootstrap lots of websites and are becoming the basis for a variety of tools that even influence
                        both web designers and developers influence both web designers and developers.</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="Jese Leos avatar" />
                            <span class="font-medium dark:text-white">
                                Jese Leos
                            </span>
                        </div>
                        <a href="#"
                            class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
                <article
                    class="p-6 bg-dark rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span
                            class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                    clip-rule="evenodd"></path>
                                <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                            </svg>
                            Article
                        </span>
                        <span class="text-sm">14 days ago</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight  dark:text-white"><a href="#">Our
                            first project with React</a></h2>
                    <p class="mb-5 font-light  dark:text-white">Static websites are now used to
                        bootstrap lots of websites and are becoming the basis for a variety of tools that even influence
                        both web designers and developers influence both web designers and developers.</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                                alt="Bonnie Green avatar" />
                            <span class="font-medium dark:text-white">
                                Bonnie Green
                            </span>
                        </div>
                        <a href="#"
                            class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
                <article
                    class="p-6 bg-dark dark:bg-gray-800 rounded-lg border border-gray-200 shadow-md  dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span
                            class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                </path>
                            </svg>
                            Tutorial
                        </span>
                        <span class="text-sm">14 days ago</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight dark:text-white"><a href="#">How
                            to
                            quickly deploy a static website</a></h2>
                    <p class="mb-5 font-light  dark:text-white">Static websites are now used to
                        bootstrap lots of websites and are becoming the basis for a variety of tools that even influence
                        both web designers and developers influence both web designers and developers.</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="Jese Leos avatar" />
                            <span class="font-medium dark:text-white">
                                Jese Leos
                            </span>
                        </div>
                        <a href="#"
                            class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
                <article
                    class="p-6 bg-dark rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span
                            class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                    clip-rule="evenodd"></path>
                                <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                            </svg>
                            Article
                        </span>
                        <span class="text-sm">14 days ago</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight  dark:text-white"><a href="#">Our
                            first project with React</a></h2>
                    <p class="mb-5 font-light  dark:text-white">Static websites are now used to
                        bootstrap lots of websites and are becoming the basis for a variety of tools that even influence
                        both web designers and developers influence both web designers and developers.</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                                alt="Bonnie Green avatar" />
                            <span class="font-medium dark:text-white">
                                Bonnie Green
                            </span>
                        </div>
                        <a href="#"
                            class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- course -->
    <div class="mx-auto max-w-screen-sm text-center lg:mb-2 mb-2 mt-10">
        <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-satu">Our
            Course</h2>
        <p class="font-light  sm:text-xl">We use an agile approach to test
            assumptions and connect with the needs of your audience early and often.</p>
    </div>
    <div class="p-16 flex flex-wrap items-center justify-center">

        <div
            class="flex-shrink-0 m-5 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs border dark:border-white shadow-lg">
            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
                style="transform: scale(1.5); opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div class="relative pt-10 px-10 flex items-center justify-center">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40"
                    src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                    alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Indoor</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">Peace Lily</span>
                    <span
                        class=" bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$36.00</span>
                </div>
            </div>
        </div>
        <div
            class="flex-shrink-0 m-5 relative overflow-hidden bg-teal-500 rounded-lg max-w-xs shadow-lg border dark:border-white">
            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
                style="transform: scale(1.5); opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div class="relative pt-10 px-10 flex items-center justify-center">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40"
                    src="https://user-images.githubusercontent.com/2805249/64069998-305de300-cc9a-11e9-8ae7-5a0fe00299f2.png"
                    alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Outdoor</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">Monstera</span>
                    <span
                        class=" bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$45.00</span>
                </div>
            </div>
        </div>
        <div
            class="flex-shrink-0 m-5 relative overflow-hidden bg-purple-500 rounded-lg max-w-xs shadow-lg border dark:border-white">
            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
                style="transform: scale(1.5); opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div class="relative pt-10 px-10 flex items-center justify-center">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40"
                    src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                    alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Outdoor</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">Oak Tree</span>
                    <span
                        class=" bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$68.50</span>
                </div>
            </div>
        </div>
        <div
            class="flex-shrink-0 m-5 relative overflow-hidden bg-purple-500 rounded-lg max-w-xs shadow-lg border dark:border-white">
            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
                style="transform: scale(1.5); opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div class="relative pt-10 px-10 flex items-center justify-center">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40"
                    src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                    alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Outdoor</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">Oak Tree</span>
                    <span
                        class=" bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$68.50</span>
                </div>
            </div>
        </div>

    </div>





    <!-- Js Darkmode -->
    <script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem(' color-theme') === 'dark' || (!('color-theme' in localStorage) &&
            window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark') //
        localStorage.setItem('color-theme', 'light'); //
        document.documentElement.classList.add('scroll-smooth focus:scroll-auto');
    }
    </script>
</body>




</html>
