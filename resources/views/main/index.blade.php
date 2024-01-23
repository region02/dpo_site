<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css']);

    @vite(['resources/js/app.js']);
    @stack('scripts');
    <!-- resources/views/welcome.blade.php -->
    <script type="module" defer src="{{ asset('build/assets/feedback-w40geAFS.js') }}"></script>

</head>

<body class='bg-color-main'>
    @include('general/header')

    <main class="max-w-screen-2xl w-full mx-auto ">
        <section class="hero pb-5" id="hero">

            <div class="grid grid-cols-1 sm:grid-cols-2  ">
                <div class="flex flex-col items-center justify-center border-[1px] border-[#ffffff] border-opacity-15 border-r-0 border-l-0 pt-[8.5rem] pb-[8.5rem]">
                    <div class="m-0 p-5
                    md:m-2 md:p-5 bg-gradient-to-r from-[#DA22FF] to-[#9733EE] rounded-[6.25rem]">
                        <h3 class="uppercase font-sans text-[#E5E5E5]
                        text-[2.5rem] font-[800] tracking-wider leading-[1.375rem]
                        max-[500px]:text-[1.5rem] max-[500px]:font-[700] max-[500px]:tracking-wider max-[500px]:leading-[0.5rem]
                        sm:text-[1.5rem] sm:font-[800] sm:tracking-wider sm:leading-[0.5rem]
                        md:text-[2.0rem] md:font-[800] md:tracking-wider md:leading-[1.2rem]
                        lg:text-[2.3rem] lg:font-[800] lg:tracking-wider lg:leading-[1.35rem]
                        xl:text-[2.5rem] xl:font-[800] xl:tracking-wider xl:leading-[1.375rem]">эффективное</h3>
                    </div>
                    <div class="
                    m-1 p-5
                    md:m-2 md:p-5">
                        <h3 class="uppercase font-sans text-[#E5E5E5]
                        text-[2.5rem] font-[800] tracking-wider leading-[1.375rem]
                        max-[500px]:text-[1.5rem] max-[500px]:font-[700] max-[500px]:tracking-wider max-[500px]:leading-[0.5rem]
                        sm:text-[1.5rem] sm:font-[800] sm:tracking-wider sm:leading-[0.5rem]
                        md:text-[2.0rem] md:font-[800] md:tracking-wider md:leading-[1.2rem]
                        lg:text-[2.3rem] lg:font-[800] lg:tracking-wider lg:leading-[1.35rem]
                        xl:text-[2.5rem] xl:font-[800] xl:tracking-wider xl:leading-[1.375rem]">обучение для</h3>
                    </div>
                    <div class="
                    m-0 p-5
                    md:m-2 md:p-5 bg-gradient-to-r from-[#DA22FF] to-[#9733EE] rounded-[6.25rem]">
                        <h3 class="uppercase font-sans text-[#E5E5E5]
                        text-[2.5rem] font-[800] tracking-wider leading-[1.375rem]
                        max-[500px]:text-[1.5rem] max-[500px]:font-[700] max-[500px]:tracking-wider max-[500px]:leading-[0.5rem]
                        sm:text-[1.5rem] sm:font-[800] sm:tracking-wider sm:leading-[0.5rem]
                        md:text-[2.0rem] md:font-[800] md:tracking-wider md:leading-[1.2rem]
                        lg:text-[2.3rem] lg:font-[800] lg:tracking-wider lg:leading-[1.35rem]
                        xl:text-[2.5rem] xl:font-[800] xl:tracking-wider xl:leading-[1.375rem]">вас</h3>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 border-0 sm:border-l-[2px] lg:border-b-[1px] lg:border-t-[1px]  border-[#ffffff] border-opacity-15 ">
                    <div class="border-[2px] border-[#ffffff] border-opacity-15 border-l-0 border-t-0 pr-1 relative">
                        <p class="uppercase font-sans text-white font-bold
                                    text-sm leading-[1.1rem]
                                    sm:text-lg sm:leading-[1.55rem]
                                    md:text-lg md:leading-[1.55rem]
                                    lg:text-xl lg:leading-[1.6rem]
                                    xl:text-2xl xl:leading-[1.675rem]
                                    tracking-wider hyphens-auto
                                    pt-[25px] px-[25px] sm:pt-[50px]
                                    pb-[65px] sm:pb-[90px]">
                                Освойте новую профессию
                        </p>
                        <div class="hero__info-dots py-[25px] px-[30px] sm:py-[30px] sm:px-[15px] absolute
                                    right-0 bottom-0 flex gap-[10px]">
                            <img src="{{ url('img/icons/info-dots.svg') }}">
                        </div>
                    </div>
                    <div class="border-[2px] border-[#ffffff] border-opacity-15 border-t-0 border-l-0 lg:border-r-0 pr-1 relative">
                        <p class="uppercase font-sans text-white font-bold
                                    text-sm leading-[1.1rem]
                                    sm:text-lg sm:leading-[1.55rem]
                                    md:text-lg md:leading-[1.55rem]
                                    lg:text-xl lg:leading-[1.6rem]
                                    xl:text-2xl xl:leading-[1.675rem]
                                    tracking-wider hyphens-auto
                                    pt-[25px] px-[25px] sm:pt-[50px]
                                    pb-[65px] sm:pb-[90px]">
                            Развивайте навыки
                        </p>
                        <div class="hero__info-dots py-[25px] px-[30px] sm:py-[30px] sm:px-[15px] absolute
                                    right-0 bottom-0 flex gap-[10px]">
                            <img src="{{ url('img/icons/info-dots.svg') }}">
                            <img src="{{ url('img/icons/info-dots.svg') }}">
                        </div>
                    </div>
                    <div class="border-[2px] border-[#ffffff] border-opacity-15 border-b-0 border-t-0 border-l-0 pr-1 relative">
                        <p class="uppercase font-sans text-white font-bold
                                    text-sm leading-[1.1rem]
                                    sm:text-lg sm:leading-[1.55rem]
                                    md:text-lg md:leading-[1.55rem]
                                    lg:text-xl lg:leading-[1.6rem]
                                    xl:text-2xl xl:leading-[1.675rem]
                                    tracking-wider hyphens-auto
                                    pt-[25px] px-[25px] sm:pt-[50px]
                                    pb-[65px] sm:pb-[90px]">
                            Повысьте свой доход
                        </p>
                        <div class="hero__info-dots py-[25px] px-[30px] sm:py-[30px] sm:px-[15px] absolute
                                    right-0 bottom-0 flex gap-[10px]">
                            <img src="{{ url('img/icons/info-dots.svg') }}">
                            <img src="{{ url('img/icons/info-dots.svg') }}">
                            <img src="{{ url('img/icons/info-dots.svg') }}">
                        </div>
                    </div>
                    <div class="border-r-[2px] border-t-2 border-b-[1px] border-solid border-[#ffffff] border-opacity-15 pr-1  relative lg:border-t-0 lg:border-r-0 xl:border-b-0">
                        <p class="uppercase font-sans text-white font-bold
                                    text-sm leading-[1.1rem]
                                    sm:text-lg sm:leading-[1.55rem]
                                    md:text-lg md:leading-[1.55rem]
                                    lg:text-xl lg:leading-[1.6rem]
                                    xl:text-2xl xl:leading-[1.675rem]
                                    tracking-wider hyphens-auto
                                    pt-[25px] px-[25px] sm:pt-[50px]
                                    pb-[65px] sm:pb-[90px]">
                            Найдите единомышленников
                        </p>
                        <div class="hero__info-dots py-[25px] px-[30px] sm:py-[30px] sm:px-[15px] absolute
                                    right-0 bottom-0 flex gap-[10px]">
                            <img src="{{ url('img/icons/info-dots.svg') }}">
                            <img src="{{ url('img/icons/info-dots.svg') }}">
                            <img src="{{ url('img/icons/info-dots.svg') }}">
                            <img src="{{ url('img/icons/info-dots.svg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        @include('general/main_slider')


        <section id="categories" class="categories px-3 lg:px-20">
            <ul class="flex flex-col">
                <li class=" border-b-[1px] border-t-[1px] border-[#ffffff] border-opacity-10">
                    <a href="#" class="flex flex-row content-center justify-between items-center font-semibold p-5 cursor-pointer">
                        <span class="font-sans text-white text-lg xs:text-xl font-bold tracking-wider">Повышение квалификации</span>
                        <img src="{{ url('img/icons/link_categories_main.svg') }}" alt="иконка ссылки">
                    </a>
                </li>
                <li class=" border-b-[1px] border-[#ffffff] border-opacity-10">
                    <a href="#" class="flex flex-row content-center justify-between items-center font-semibold p-5 cursor-pointer">
                        <span class="font-sans text-white text-lg xs:text-xl font-bold tracking-wider">Профессиональная переподготовка</span>
                        <img src="{{ url('img/icons/link_categories_main.svg') }}" alt="иконка ссылки">
                    </a>
                </li>
                <li class=" border-b-[1px] border-[#ffffff] border-opacity-10">
                    <a href="#" class="flex flex-row content-center justify-between items-center font-semibold p-5 cursor-pointer">
                        <span class="font-sans text-white text-lg xs:text-xl font-bold tracking-wider">Летние/Зимние/Осенние/Весенние ШКОЛЫ</span>
                        <img src="{{ url('img/icons/link_categories_main.svg') }}" alt="иконка ссылки">
                    </a>
                </li>
                <li class=" border-b-[1px] border-[#ffffff] border-opacity-10">
                    <a href="#" class="flex flex-row content-center justify-between items-center font-semibold p-5 cursor-pointer">
                        <span class="font-sans text-white text-lg xs:text-xl font-bold tracking-wider">Курсы для детей</span>
                        <img src="{{ url('img/icons/link_categories_main.svg') }}" alt="иконка ссылки">
                    </a>
                </li>
                <li class=" border-b-[1px] border-[#ffffff] border-opacity-10">
                    <a href="#" class="flex flex-row content-center justify-between items-center font-semibold p-5 cursor-pointer">
                        <span class="font-sans text-white text-xl font-bold tracking-wider">Вебинары</span>
                        <img src="{{ url('img/icons/link_categories_main.svg') }}" alt="иконка ссылки">
                    </a>
                </li>
            </ul>
        </section>

        @include('general/questions')
        @include('general/footer')

    </main>

</body>


</html>
