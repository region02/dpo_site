<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class='bg-color-main'>
    @include('general/header')

    <main class="max-w-screen-2xl w-full mx-auto px-4">
        <section class="hero" id="hero">
            <div class="grid sm:grid-flow-col sm:grid-rows-1 sm:grid-cols-2">
                <div class="flex flex-col items-center justify-center border-[1px] border-[#ffffff] border-opacity-10 pt-[6.5rem] pb-[6.5rem]">
                    <div class="
                    m-0 p-5
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
                <div class="grid ls:grid-flow-col lg:grid-rows-2 lg:grid-cols-2 max-md:grid-rows-2 max-md:grid-cols-1 text-left">
                    <div class="flex items-center border-[1px] border-[#ffffff] border-opacity-10 relative">
                        <!-- <div class="pt-[3.25rem] pr-[5.43rem] pb-[1.875rem] pl-[1.25rem]">sdfsdfsdfds</div> -->
                        <div class="pt-[0.7rem] pr-[3rem] pl-[1rem] h-[3rem]
                                    sm:pt-[1rem] sm:pr-[5.4375rem] sm:pl-[1.25rem] sm:h-[6rem]
                                    md:pt-0 md:pr-[5.4375rem] md:pl-[1.25rem] md:h-[2.4375rem]
                                    lg:pt-[3.25rem] lg:pr-[5.43rem] lg:pl-[1.25rem] lg:h-[16.875rem] text-left">
                            <p class="uppercase font-sans text-white font-bold
                                    text-sm leading-[1.1rem] 
                                    sm:text-lg sm:leading-[1.3rem] 
                                    md:text-lg md:leading-[1.3rem] 
                                    lg:text-lg lg:leading-[1.3rem] 
                                    xl:text-xl xl:leading-[1.375rem]
                                    tracking-wider hyphens-auto">
                                Освойте новую профессию
                            </p>
                        </div>
                        <div class="absolute flex
                                bottom-1 right-2 gap-1
                                sm:bottom-4 sm:right-4 sm:gap-2">
                            <div class="rounded-full bg-gradient-to-r from-[#DA22FF] to-[#9733EE] h-3 w-3 "></div>
                        </div>
                    </div>
                    <div class="flex items-center border-[1px] border-[#ffffff] border-opacity-10 relative">
                        <div class="pt-[0.7rem] pr-[3rem] pl-[1rem] h-[3rem]
                                    sm:pt-[1rem] sm:pr-[5.4375rem] sm:pl-[1.25rem] sm:h-[6rem]
                                    md:pt-0 md:pr-[5.4375rem] md:pl-[1.25rem] md:h-[2.4375rem]
                                    lg:pt-[3.25rem] lg:pr-[5.43rem] lg:pl-[1.25rem] lg:h-[16.875rem] text-left">
                            <p class="uppercase font-sans text-white font-bold
                                    text-sm leading-[1.1rem] 
                                    sm:text-lg sm:leading-[1.3rem] 
                                    md:text-lg md:leading-[1.3rem] 
                                    lg:text-lg lg:leading-[1.3rem] 
                                    xl:text-xl xl:leading-[1.375rem]
                                    tracking-wider hyphens-auto">
                                Повысьте свой доход
                            </p>
                        </div>
                        <div class="absolute flex
                                bottom-1 right-2 gap-1
                                sm:bottom-4 sm:right-4 sm:gap-2">
                            <div class="rounded-full bg-gradient-to-r from-[#DA22FF] to-[#9733EE] h-3 w-3 "></div>
                            <div class="rounded-full bg-gradient-to-r from-[#DA22FF] to-[#9733EE] h-3 w-3 "></div>
                        </div>
                    </div>
                    <div class="flex items-center border-[1px] border-[#ffffff] border-opacity-10 relative">
                        <div class="pt-[0.7rem] pr-[3rem] pl-[1rem] h-[3rem]
                                    sm:pt-[1rem] sm:pr-[5.4375rem] sm:pl-[1.25rem] sm:h-[6rem]
                                    md:pt-0 md:pr-[5.4375rem] md:pl-[1.25rem] md:h-[2.4375rem]
                                    lg:pt-[3.25rem] lg:pr-[5.43rem] lg:pl-[1.25rem] lg:h-[16.875rem] text-left">
                            <p class="uppercase font-sans text-white font-bold
                                    text-sm leading-[1.1rem] 
                                    sm:text-lg sm:leading-[1.3rem]
                                    md:text-lg md:leading-[1.3rem] 
                                    lg:text-lg lg:leading-[1.3rem] 
                                    xl:text-xl xl:leading-[1.375rem]
                                    tracking-wider  hyphens-auto">
                                Развивайте навыки
                            </p>
                        </div>
                        <div class="absolute flex
                                bottom-1 right-2 gap-1
                                sm:bottom-4 sm:right-4 sm:gap-2">
                            <div class="rounded-full bg-gradient-to-r from-[#DA22FF] to-[#9733EE] h-3 w-3"></div>
                            <div class="rounded-full bg-gradient-to-r from-[#DA22FF] to-[#9733EE] h-3 w-3"></div>
                            <div class="rounded-full bg-gradient-to-r from-[#DA22FF] to-[#9733EE] h-3 w-3 "></div>
                        </div>
                    </div>
                    <div class="flex items-center border-[1px] border-[#ffffff] border-opacity-10 relative">
                        <div class="pt-[0.7rem] pr-[3rem] pl-[1rem] h-[3rem]
                                    sm:pt-[1rem] sm:pr-[5.4375rem] sm:pl-[1.25rem] sm:h-[6rem]
                                    md:pt-0 md:pr-[5.4375rem] md:pl-[1.25rem] md:h-[2.4375rem]
                                    lg:pt-[3.25rem] lg:pr-[5.43rem] lg:pl-[1.25rem] lg:h-[16.875rem] text-left">
                            <p class="uppercase font-sans text-white font-bold
                                    text-sm leading-[1.1rem] 
                                    sm:text-lg sm:leading-[1.3rem] 
                                    md:text-lg md:leading-[1.3rem] 
                                    lg:text-lg lg:leading-[1.3rem] 
                                    xl:text-xl xl:leading-[1.375rem]
                                    tracking-wider hyphens-auto">
                                Найдите единомышленников
                            </p>
                        </div>
                        <div class="absolute flex
                                bottom-1 right-2 gap-1
                                sm:bottom-4 sm:right-4 sm:gap-2">
                            <div class="rounded-full bg-gradient-to-r from-[#DA22FF] to-[#9733EE] h-3 w-3"></div>
                            <div class="rounded-full bg-gradient-to-r from-[#DA22FF] to-[#9733EE] h-3 w-3"></div>
                            <div class="rounded-full bg-gradient-to-r from-[#DA22FF] to-[#9733EE] h-3 w-3"></div>
                            <div class="rounded-full bg-gradient-to-r from-[#DA22FF] to-[#9733EE] h-3 w-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        @include('general/main_slider')
        <section id="categories" class="categories">
            <ul class="flex flex-col">
                <li class=" border-b-[1px] border-t-[1px] border-[#ffffff] border-opacity-10">
                    <a href="#" class="flex flex-row content-center justify-between items-center font-semibold p-3 cursor-pointer">
                        <span class="font-sans text-white text-xl font-bold tracking-wider">Повышение квалификации</span>
                        <img src="{{ url('img/icons/link_categories_main.svg') }}" alt="иконка ссылки">
                    </a>
                </li>
                <li class=" border-b-[1px] border-[#ffffff] border-opacity-10">
                    <a href="#" class="flex flex-row content-center justify-between items-center font-semibold p-3 cursor-pointer">
                        <span class="font-sans text-white text-xl font-bold tracking-wider">Профессиональная переподготовка</span>
                        <img src="{{ url('img/icons/link_categories_main.svg') }}" alt="иконка ссылки">
                    </a>
                </li>
                <li class=" border-b-[1px] border-[#ffffff] border-opacity-10">
                    <a href="#" class="flex flex-row content-center justify-between items-center font-semibold p-3 cursor-pointer">
                        <span class="font-sans text-white text-xl font-bold tracking-wider">Летние/Зимние/Осенние/Весенние ШКОЛЫ</span>
                        <img src="{{ url('img/icons/link_categories_main.svg') }}" alt="иконка ссылки">
                    </a>
                </li>
                <li class=" border-b-[1px] border-[#ffffff] border-opacity-10">
                    <a href="#" class="flex flex-row content-center justify-between items-center font-semibold p-3 cursor-pointer">
                        <span class="font-sans text-white text-xl font-bold tracking-wider">Курсы для детей</span>
                        <img src="{{ url('img/icons/link_categories_main.svg') }}" alt="иконка ссылки">
                    </a>
                </li>
                <li class=" border-b-[1px] border-[#ffffff] border-opacity-10">
                    <a href="#" class="flex flex-row content-center justify-between items-center font-semibold p-3 cursor-pointer">
                        <span class="font-sans text-white text-xl font-bold tracking-wider">Вебинары</span>
                        <img src="{{ url('img/icons/link_categories_main.svg') }}" alt="иконка ссылки">
                    </a>
                </li>
            </ul>
        </section>
        
        @include('general/questions')
    </main>

</body>

@stack('scripts')
</html>