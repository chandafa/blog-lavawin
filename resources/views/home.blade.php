<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home | Blog Chan</title>
    <link href="https://www.logolynx.com/images/logolynx/f4/f40d4ad97b9cb450abc35af8e7359f40.png" rel="icon" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css"
    rel="stylesheet" />
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<style>
    @tailwind base;
    @tailwind components;
    @tailwind utilities;

    .light {
    background-color: rgb(255, 255, 255);
    color: black;
}

.dark {
    background-color: rgb(17, 24, 39);
    color: rgb(255, 255, 255);
}

header nav {
    background-color: rgb(255, 255, 255);
}

.button {
    width: 110px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 10px;
    background-color: rgb(23, 56, 128);
    border-radius: 30px;
    color: rgb(255, 255, 255);
    font-weight: 600;
    border: none;
    position: relative;
    cursor: pointer;
    transition-duration: 0.2s;
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.116);
    padding-left: 8px;
    transition-duration: 0.5s;
    border: 1px solid rgb(158, 157, 157);
}

.svgIcon {
    height: 25px;
    transition-duration: 1.5s;
}

.bell path {
    fill: rgb(233, 233, 233);
}

.button:hover {
    background-color: rgb(68, 0, 255);
    transition-duration: 0.5s;
}

.button:active {
    transform: scale(0.97);
    transition-duration: 0.2s;
}

.button:hover .svgIcon {
    transform: rotate(250deg);
    transition-duration: 1.5s;
}

#course .course:hover {
    box-shadow: 0px 0px 10px blueviolet;
}

</style>

<body>
    <!-- Navbar -->

    <div class="bg-white ">
        <header class="absolute inset-x-0 top-0 z-50">

            <nav
                class="bg-dark dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                        <span
                            class="self-center text-2xl font-bold whitespace-nowrap dark:text-white">Blog CK</span>
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
                                <a href="#about"
                                    class="block py-2 px-3 dark:text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                            </li>
                            <li>
                                <a href="#blog"
                                    class="block py-2 px-3 dark:text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Blog</a>
                            </li>
                            <li>
                                <a href="#static"
                                    class="block py-2 px-3 dark:text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Static</a>
                            </li>
                            <li>
                                <a href="#belajar"
                                    class="block py-2 px-3 dark:text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Course</a>
                            </li>
                            <button id="theme-toggle" type="button"
                                class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5">
                                {{-- <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z">
                                    </path>
                                </svg> --}}
                                <i id="theme-toggle-dark-icon" class="ri-moon-fill hidden w-5 h-5"></i>
                                <i id="theme-toggle-light-icon" class="ri-sun-fill hidden w-5 h-5"></i>
                                {{-- <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                        fill-rule="evenodd" clip-rule="evenodd"></path>
                                </svg> --}}
                            </button>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>

    <!-- Hero section -->
    <div class="relative isolate h-dvh px-6 pt-14 lg:px-8 lg:h-1/2">
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


 <!-- About -->
    <div class="dark:bg-gray-900 py-24 sm:py-32" id="about">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-x-8 gap-y-16 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2">
        <div class="lg:pr-4">
          <div class="relative overflow-hidden rounded-3xl bg-gray-900 px-6 pb-9 pt-64 shadow-2xl sm:px-12 lg:max-w-lg lg:px-8 lg:pb-8 xl:px-10 xl:pb-10">
            <img class="absolute inset-0 h-full w-full object-cover brightness-125 saturate-0" src="https://images.unsplash.com/photo-1630569267625-157f8f9d1a7e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2669&q=80" alt="">
            <div class="absolute inset-0 bg-gray-900 mix-blend-multiply"></div>
            <div class="absolute left-1/2 top-1/2 -ml-16 -translate-x-1/2 -translate-y-1/2 transform-gpu blur-3xl" aria-hidden="true">
              <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-40" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <figure class="relative isolate">
              <svg viewBox="0 0 162 128" fill="none" aria-hidden="true" class="absolute -left-2 -top-4 -z-10 h-32 stroke-white/20">
                <path id="0ef284b8-28c2-426e-9442-8655d393522e" d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924L44.4799 71.9955L44.4726 71.9988C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394L35.4047 77.2457L35.3938 77.2525C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558L6.47976 47.558L6.47682 47.5647C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404L3.8558 96.8445C6.08991 102.749 9.12394 108.02 12.959 112.654L12.959 112.654L12.9646 112.661C16.8027 117.138 21.2829 120.739 26.4034 123.459L26.4033 123.459L26.4144 123.465C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148L55.5376 125.148L55.5477 125.144C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z" />
                <use href="#0ef284b8-28c2-426e-9442-8655d393522e" x="86" />
              </svg>
              <blockquote class="mt-6 text-xl font-semibold leading-8 text-white">
                <p>“"What happens is not as important as how you react to what happens." "The journey of a thousand miles begins with one step." "The only true wisdom is in knowing you know nothing." "Just as treasures are uncovered from the earth, so virtue appears from good deeds, and wisdom appears from a pure and peaceful mind..”</p>
              </blockquote>
              <figcaption class="mt-6 text-sm leading-6 text-gray-300"><strong class="font-semibold text-white">Shehab Najib,</strong> ceo of ISREN</figcaption>
            </figure>
          </div>
        </div>
        <div>
          <div class="text-base leading-7 text-gray-700 lg:max-w-lg">
            <p class="text-base font-semibold leading-7 text-yellow-400">wisdom values</p>
            <h1 class="mt-2 text-3xl font-bold tracking-tight  sm:text-4xl dark:text-white">Peaceful minds</h1>
            <div class="max-w-xl dark:text-white">
              <p class="mt-6">You won't ever have a peaceful mind unless you have a peace ful life and equal times you have a time with your religion then time for fun then time for work and study.</p>
              <p class="mt-8">You want to have a peaceful day try ignoring problems that are blamed on you but you are sure you didn't do the mistake.</p>
              <p class="mt-8">Try dividing your life days into equal times and do every thing on it's time.</p>
            </div>
          </div>
          <dl class="mt-10 grid grid-cols-2 gap-8 border-t border-gray-900/10 pt-10 sm:grid-cols-4">
            <div>
              <dt class="text-sm font-semibold leading-6 dark:text-white">Founded</dt>
              <dd class="mt-2 text-3xl font-bold leading-10 tracking-tight dark:text-white">end of 2023</dd>
            </div>
            <div>
              <dt class="text-sm font-semibold leading-6 dark:text-white">Employees</dt>
              <dd class="mt-2 text-3xl font-bold leading-10 tracking-tight dark:text-white">uncounted</dd>
            </div>
            <div>
              <dt class="text-sm font-semibold leading-6 dark:text-white">Countries</dt>
              <dd class="mt-2 text-3xl font-bold leading-10 tracking-tight dark:text-white">2</dd>
            </div>
            <div>
              <dt class="text-sm font-semibold leading-6 dark:text-white">Raised</dt>
              <dd class="mt-2 text-3xl font-bold leading-10 tracking-tight dark:text-white">$1.5K</dd>
            </div>
          </dl>
          <div class="mt-10 flex">
            <a href="#" class="text-base font-semibold leading-7 text-yellow-500">Learn more about our company <span aria-hidden="true">&rarr;</span></a>
          </div>
        </div>
      </div>
    </div>
    </div>


    <!-- Blog section 2 -->
    <!-- component -->
    <!-- This is an example component -->
    <div class="mx-auto max-w-screen-sm text-center lg:mb-16" id="blog">
        <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-satu">Our
            Blog</h2>
        <p class="font-light px-10 sm:text-xl">We use an agile approach to test
            assumptions and connect with the needs of your audience early and often.</p>
    </div>

    <section class="flex flex-row flex-wrap mx-auto px-10"">
        <!-- Card Component -->
        <div class="transition-all duration-150 flex w-full py-6 md:w-1/2 lg:w-1/3 lg:px-4 md:px-4">
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
                                    Candra Kirana
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
        <div class="transition-all duration-150 flex w-full py-6 md:w-1/2 lg:w-1/3 lg:px-4 md:px-4">
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
                                    Candra Kirana
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
        <div class="transition-all duration-150 flex w-full py-6 md:w-1/2 lg:w-1/3 lg:px-4 md:px-4">
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
                                    Candra Kirana
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
        <div class="transition-all duration-150 flex w-full py-6 md:w-1/2 lg:w-1/3 lg:px-4 md:px-4">
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
                                    Candra Kirana
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
        <div class="transition-all duration-150 flex w-full py-6 md:w-1/2 lg:w-1/3 lg:px-4 md:px-4">
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
                                    Candra Kirana
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
        <div class="transition-all duration-150 flex w-full py-6 md:w-1/2 lg:w-1/3 lg:px-4 md:px-4">
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
                                    Candra Kirana
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
    <nav aria-label="Page navigation example" class="mx-auto max-w-screen-sm flex justify-center mt-8 mb-10">
        <ul class="inline-flex -space-x-px text-sm">
          <li>
            <a href="/" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
          </li>
          <li>
            <a href="<?= url('pages1'); ?>" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
          </li>
          <li>
            <a href="<?= url('pages2'); ?>" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
          </li>
          <li>
            <a href="<?= url('pages3'); ?>" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
          </li>

          <li>
            <a href="<?= url('pages4'); ?>" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
          </li>
          <li>
            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
          </li>
          <li>
            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
          </li>
        </ul>
      </nav>







    <!-- Static Section -->
    <div class="flex flex-col justify-center items-center py-40" id="static">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-satu">Our
                Statistik</h2>
            <p class="font-light px-10 sm:text-xl">We use an agile approach to test
                assumptions and connect with the needs of your audience early and often.</p>
        </div>
        <div class="min-w-[375px] md:min-w-[700px] xl:min-w-[800px] mt-3 grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-3 3xl:grid-cols-6">
            <div class="relative flex flex-grow !flex-row flex-col items-center rounded-[10px] rounded-[10px] border-[1px] border-gray-200  bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                <div class="ml-[18px] flex h-[90px] w-auto flex-row items-center">
                <div class="rounded-full bg-lightPrimary p-3 dark:bg-navy-700">
                    <span class="flex items-center text-brand-500 dark:text-white">
                    <svg
                        stroke="currentColor"
                        fill="currentColor"
                        stroke-width="0"
                        viewBox="0 0 24 24"
                        class="h-7 w-7"
                        height="1em"
                        width="1em"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path d="M4 9h4v11H4zM16 13h4v7h-4zM10 4h4v16h-4z"></path>
                    </svg>
                    </span>
                </div>
                </div>
                <div class="h-50 ml-4 flex w-auto flex-col justify-center">
                <p class="font-dm text-sm font-medium text-gray-600">Earnings</p>
                <h4 class="text-xl font-bold text-navy-700 dark:text-white">$340.5</h4>
                </div>
            </div>
            <div class="relative flex flex-grow !flex-row flex-col items-center rounded-[10px] rounded-[10px] border-[1px] border-gray-200  bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                <div class="ml-[18px] flex h-[90px] w-auto flex-row items-center">
                <div class="rounded-full bg-lightPrimary p-3 dark:bg-navy-700">
                    <span class="flex items-center text-brand-500 dark:text-white">
                    <svg
                        stroke="currentColor"
                        fill="currentColor"
                        stroke-width="0"
                        viewBox="0 0 512 512"
                        class="h-6 w-6"
                        height="1em"
                        width="1em"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path d="M298.39 248a4 4 0 002.86-6.8l-78.4-79.72a4 4 0 00-6.85 2.81V236a12 12 0 0012 12z"></path>
                        <path d="M197 267a43.67 43.67 0 01-13-31v-92h-72a64.19 64.19 0 00-64 64v224a64 64 0 0064 64h144a64 64 0 0064-64V280h-92a43.61 43.61 0 01-31-13zm175-147h70.39a4 4 0 002.86-6.8l-78.4-79.72a4 4 0 00-6.85 2.81V108a12 12 0 0012 12z"></path>
                        <path d="M372 152a44.34 44.34 0 01-44-44V16H220a60.07 60.07 0 00-60 60v36h42.12A40.81 40.81 0 01231 124.14l109.16 111a41.11 41.11 0 0111.83 29V400h53.05c32.51 0 58.95-26.92 58.95-60V152z"></path>
                    </svg>
                    </span>
                </div>
                </div>
                <div class="h-50 ml-4 flex w-auto flex-col justify-center">
                <p class="font-dm text-sm font-medium text-gray-600">Spend this month</p>
                <h4 class="text-xl font-bold text-navy-700 dark:text-white">$642.39</h4>
                </div>
            </div>
            <div class="relative flex flex-grow !flex-row flex-col items-center rounded-[10px] rounded-[10px] border-[1px] border-gray-200  bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                <div class="ml-[18px] flex h-[90px] w-auto flex-row items-center">
                <div class="rounded-full bg-lightPrimary p-3 dark:bg-navy-700">
                    <span class="flex items-center text-brand-500 dark:text-white">
                    <svg
                        stroke="currentColor"
                        fill="currentColor"
                        stroke-width="0"
                        viewBox="0 0 24 24"
                        class="h-7 w-7"
                        height="1em"
                        width="1em"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path d="M4 9h4v11H4zM16 13h4v7h-4zM10 4h4v16h-4z"></path>
                    </svg>
                    </span>
                </div>
                </div>
                <div class="h-50 ml-4 flex w-auto flex-col justify-center">
                <p class="font-dm text-sm font-medium text-gray-600">Sales</p>
                <h4 class="text-xl font-bold text-navy-700 dark:text-white">$574.34</h4>
                </div>
            </div>
            <div class="relative flex flex-grow !flex-row flex-col items-center rounded-[10px] rounded-[10px] border-[1px] border-gray-200  bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                <div class="ml-[18px] flex h-[90px] w-auto flex-row items-center">
                <div class="rounded-full bg-lightPrimary p-3 dark:bg-navy-700">
                    <span class="flex items-center text-brand-500 dark:text-white">
                    <svg
                        stroke="currentColor"
                        fill="currentColor"
                        stroke-width="0"
                        viewBox="0 0 24 24"
                        class="h-6 w-6"
                        height="1em"
                        width="1em"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"></path>
                    </svg>
                    </span>
                </div>
                </div>
                <div class="h-50 ml-4 flex w-auto flex-col justify-center">
                <p class="font-dm text-sm font-medium text-gray-600">Your Balance</p>
                <h4 class="text-xl font-bold text-navy-700 dark:text-white">$1,000</h4>
                </div>
            </div>
            <div class="relative flex flex-grow !flex-row flex-col items-center rounded-[10px] rounded-[10px] border-[1px] border-gray-200  bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                <div class="ml-[18px] flex h-[90px] w-auto flex-row items-center">
                <div class="rounded-full bg-lightPrimary p-3 dark:bg-navy-700">
                    <span class="flex items-center text-brand-500 dark:text-white">
                    <svg
                        stroke="currentColor"
                        fill="currentColor"
                        stroke-width="0"
                        viewBox="0 0 24 24"
                        class="h-7 w-7"
                        height="1em"
                        width="1em"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path d="M4 9h4v11H4zM16 13h4v7h-4zM10 4h4v16h-4z"></path>
                    </svg>
                    </span>
                </div>
                </div>
                <div class="h-50 ml-4 flex w-auto flex-col justify-center">
                <p class="font-dm text-sm font-medium text-gray-600">New Tasks</p>
                <h4 class="text-xl font-bold text-navy-700 dark:text-white">145</h4>
                </div>
            </div>
            <div class="relative flex flex-grow !flex-row flex-col items-center rounded-[10px] rounded-[10px] border-[1px] border-gray-200  bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                <div class="ml-[18px] flex h-[90px] w-auto flex-row items-center">
                <div class="rounded-full bg-lightPrimary p-3 dark:bg-navy-700">
                    <span class="flex items-center text-brand-500 dark:text-white">
                    <svg
                        stroke="currentColor"
                        fill="currentColor"
                        stroke-width="0"
                        viewBox="0 0 512 512"
                        class="h-6 w-6"
                        height="1em"
                        width="1em"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path d="M208 448V320h96v128h97.6V256H464L256 64 48 256h62.4v192z"></path>
                    </svg>
                    </span>
                </div>
                </div>
                <div class="h-50 ml-4 flex w-auto flex-col justify-center">
                <p class="font-dm text-sm font-medium text-gray-600">Total Projects</p>
                <h4 class="text-xl font-bold text-navy-700 dark:text-white">$2433</h4>
                </div>
            </div>
            </div>
    </div>

    <!-- course -->
    <div class="mx-auto max-w-screen-sm text-center mb-20 lg:mb-10 mt-10" id="belajar">
        <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-satu">Our
            Course</h2>
        <p class="font-light px-16 sm:text-xl">We use an agile approach to test
            assumptions and connect with the needs of your audience early and often.</p>
    </div>
    <div class="px-16 flex flex-wrap items-center justify-center" id="course">

        <div
            class="course flex-shrink-0 m-5 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs border dark:border-white shadow-lg hover:shadow-2xl">
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
                    src="https://www.svgrepo.com/show/353884/html-5.svg"
                    alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Frontend</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">HTML</span>
                    <span
                        class=" bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">Lihat</span>
                </div>
            </div>
        </div>
        <div
            class="course flex-shrink-0 m-5 relative overflow-hidden bg-teal-500 rounded-lg max-w-xs shadow-lg border dark:border-white">
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
                    src="https://www.svgrepo.com/show/353623/css-3.svg"
                    alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Frontend</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">CSS</span>
                    <span
                        class=" bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center">Lihat</span>
                </div>
            </div>
        </div>
        <div
            class="course flex-shrink-0 m-5 relative overflow-hidden bg-purple-500 rounded-lg max-w-xs shadow-lg border dark:border-white">
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
                    src="https://www.svgrepo.com/show/452045/js.svg"
                    alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Frontend</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">Javascript</span>
                    <span
                        class=" bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">Lihat</span>
                </div>
            </div>
        </div>
        <div
            class="course flex-shrink-0 m-5 relative overflow-hidden bg-red-500 rounded-lg max-w-xs shadow-lg border dark:border-white">
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
                    src="https://www.svgrepo.com/show/452210/git.svg"
                    alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Frontend</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">Git</span>
                    <span
                        class=" bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">Lihat</span>
                </div>
            </div>
        </div>
        <div
            class="course flex-shrink-0 m-5 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs border dark:border-white shadow-lg">
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
                    src="https://www.svgrepo.com/show/353884/html-5.svg"
                    alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Frontend</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">HTML</span>
                    <span
                        class=" bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">Lihat</span>
                </div>
            </div>
        </div>
        <div
            class="course flex-shrink-0 m-5 relative overflow-hidden bg-teal-500 rounded-lg max-w-xs shadow-lg border dark:border-white">
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
                    src="https://www.svgrepo.com/show/353623/css-3.svg"
                    alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Frontend</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">CSS</span>
                    <span
                        class=" bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center">Lihat</span>
                </div>
            </div>
        </div>
        <div
            class="course flex-shrink-0 m-5 relative overflow-hidden bg-purple-500 rounded-lg max-w-xs shadow-lg border dark:border-white">
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
                    src="https://www.svgrepo.com/show/452045/js.svg"
                    alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Frontend</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">Javascript</span>
                    <span
                        class=" bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">Lihat</span>
                </div>
            </div>
        </div>
        <div
            class="course flex-shrink-0 m-5 relative overflow-hidden bg-red-500 rounded-lg max-w-xs shadow-lg border dark:border-white">
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
                    src="https://www.svgrepo.com/show/452210/git.svg"
                    alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Frontend</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">Git</span>
                    <span
                        class=" bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">Lihat</span>
                </div>
            </div>
        </div>

    </div>


    {{-- Footer --}}
    <!-- component -->
{{-- <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">  --}}
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<footer class="relative bg-blueGray-200 pt-8 pb-6">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap text-left lg:text-left">
      <div class="w-full lg:w-6/12 px-4">
        <h4 class="text-3xl fonat-semibold text-blueGray-700">Let's keep in touch!</h4>
        <h5 class="text-lg mt-0 mb-2 text-blueGray-600">
          Find us on any of these platforms, we respond 1-2 business days.
        </h5>
        <div class="mt-6 lg:mb-0 mb-6">
          <button class="dark:bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
            <i></i>
            <i class="fab fa-twitter"></i></button><button class="dark:bg-white dark:text-black text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
            <i class="fab fa-facebook-square"></i></button><button class="dark:bg-white dark:text-black text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
            <i class="fab fa-dribbble"></i></button><button class="dark:bg-white dark:text-black text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
            <i class="fab fa-github"></i>

          </button>
        </div>
      </div>
      <div class="w-full lg:w-6/12 px-4">
        <div class="flex flex-wrap items-top mb-6">
          <div class="w-full lg:w-4/12 px-4 ml-auto">
            <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Useful Links</span>
            <ul class="list-unstyled">
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://www.creative-tim.com/presentation?ref=njs-profile">About Us</a>
              </li>
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://blog.creative-tim.com?ref=njs-profile">Blog</a>
              </li>
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://www.github.com/creativetimofficial?ref=njs-profile">Github</a>
              </li>
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://www.creative-tim.com/bootstrap-themes/free?ref=njs-profile">Free Products</a>
              </li>
            </ul>
          </div>
          <div class="w-full lg:w-4/12 px-4">
            <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Other Resources</span>
            <ul class="list-unstyled">
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-profile">MIT License</a>
              </li>
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://creative-tim.com/terms?ref=njs-profile">Terms &amp; Conditions</a>
              </li>
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://creative-tim.com/privacy?ref=njs-profile">Privacy Policy</a>
              </li>
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://creative-tim.com/contact-us?ref=njs-profile">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <hr class="my-6 border-blueGray-300">
    <div class="flex flex-wrap items-center md:justify-between justify-center">
      <div class="w-full md:w-4/12 px-4 mx-auto text-center">
        <div class="text-sm text-blueGray-500 font-semibold py-1">
          Copyright © <span id="get-current-year">2024</span><a href="https://candrakirana.netlify.app" class="text-blueGray-500 hover:text-gray-800" target="_blank"> Blogs By Chandra IT

        </div>
      </div>
    </div>
  </div>
</footer>





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
