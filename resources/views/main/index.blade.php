<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css'])

    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


    @vite(['resources/js/app.js'])
    @vite('resources/js/feedback.js')
    @vite('resources/js/main_slider.js')
    @stack('scripts')
    <!-- resources/views/welcome.blade.php -->


</head>

<body class='bg-color-main'>
    @include('general/header')

    <main class=" w-full mx-auto ">
        <section class="hero" id="hero">
            <style>
                @keyframes flyThrough {
                    0% {
                        opacity: 1;
                        transform: translateY(-400%);
                    }
                    100% {
                        opacity: 1;
                        transform: translateY(400%);
                    }
                }

                @keyframes settleIn {
                    0% {
                        opacity: 1;
                        transform: translateY(-400%);
                    }
                    100% {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }

                .letter {
                    display: inline-block;
                    opacity: 0;
                }

                .letter.animate {
                    animation: flyThrough 0.35s forwards, settleIn 0.35s 0.35s forwards;
                }


                @keyframes settleOut {
                    0% {
                        opacity: 1;
                        transform: translateY(0);
                    }
                    100% {
                        opacity: 1;
                        transform: translateY(400%);
                    }
                }
                .letter.fall {
                    animation: settleOut 0.35s forwards;
                }

                .transition-width {
                    transition: width 1s;
                }
            </style>
            <div class="hero-content grid sm:grid-col-[45%_55%] sm:grid-rows-1  sm:min-h-[70dvh]">
                <div class="h-[300px] md:h-[450px] xl:h-auto overflow-hidden flex flex-col items-center justify-center
                border-[1px] border-[#ffffff] border-opacity-10 pt-[6.5rem] pb-[6.5rem] 2xl:gap-4"
                     x-data="{
            text1: '',
            text2: '',
            textArray1: ['эффективное', 'актуальное', 'интересное', 'востребованное'],
            textArray2: ['для вас', 'для партнеров', 'для бизнеса', 'для вузов'],
            textIndex1: 0,
            textIndex2: 0,
            containerWidth1: 'auto',
            containerWidth2: 'auto',
            animateText1() {
                this.resetAnimation('text1');
                setTimeout(() => {
                    this.text1 = this.textArray1[this.textIndex1].replace(/ /g, '\u00A0');
                    this.textIndex1 = (this.textIndex1 + 1) % this.textArray1.length;
                    this.$nextTick(() => {
                        this.animateLetters('text1');
                        this.adjustContainerWidth('text1', 'containerWidth1');
                    });
                }, 350);
            },
            animateText2() {
                this.resetAnimation('text2');
                setTimeout(() => {
                    this.text2 = this.textArray2[this.textIndex2].replace(/ /g, '\u00A0');
                    this.textIndex2 = (this.textIndex2 + 1) % this.textArray2.length;

                    this.$nextTick(() => {
                        this.animateLetters('text2');
                        this.adjustContainerWidth('text2', 'containerWidth2');
                    });
                }, 350);
            },
            resetAnimation(textKey) {
                let elements = this.$refs[textKey].querySelectorAll('.letter');
                elements.forEach((el, index) => {
                    setTimeout(() => {
                        el.classList.add('fall');
                    }, index * 60); // Задержка 0.06 секунды для каждой буквы
                });
            },
            animateLetters(textKey) {
                let elements = this.$refs[textKey].querySelectorAll('.letter');
                elements.forEach((el, index) => {
                    setTimeout(() => {
                        el.classList.remove('fall', 'hidden');
                        el.classList.add('animate');
                    }, index * 60); // Задержка 0.06 секунды для каждой буквы
                });
            },
            adjustContainerWidth(textKey, widthKey) {
                setTimeout(() => {
                    let width = this.$refs[textKey].offsetWidth;
                    this[widthKey] = (width + 30) + 'px';
                }, 50);
            }
        }"
                     x-init="animateText1(); animateText2(); setInterval(() => { animateText1(); animateText2(); }, 4000)">
                    <div :style="{ width: containerWidth1 }" class="transition-width whitespace-nowrap overflow-hidden relative flex items-center justify-center h-auto 1-1-lane m-0 p-5 md:m-2 2xl:p-8 bg-gradient-to-r from-[#DA22FF] to-[#9733EE] rounded-[6.25rem]">
                        <h3 class="first-lane uppercase font-sans text-[#E5E5E5]
                       text-[2.5rem] font-[800] tracking-wider leading-[1.375rem]
                       max-[500px]:text-[1.75rem] max-[500px]:font-[700] max-[500px]:tracking-wider max-[500px]:leading-[0.5rem]
                       sm:text-[2.0rem] sm:font-[800] sm:tracking-wider sm:leading-[0.5rem]
                       md:text-[2.0rem] md:font-[800] md:tracking-wider md:leading-[1.2rem]
                       lg:text-[2.3rem] lg:font-[800] lg:tracking-wider lg:leading-[1.35rem]
                       xl:text-[2.5rem] xl:font-[800] xl:tracking-wider xl:leading-[1.375rem]
                       2xl:text-[3.7rem] 2xl:font-[800] 2xl:tracking-wider 2xl:leading-[1.475rem]"
                            x-ref="text1">
                            <template x-for="(char, index) in text1.split('')" :key="index">
                                <span class="letter hidden" x-text="char"></span>
                            </template>
                        </h3>
                    </div>
                    <div class="w-fit m-1 p-5 md:m-2 md:p-5">
                        <h3 class="uppercase font-sans text-[#E5E5E5]
                        text-[2.5rem] font-[800] tracking-wider leading-[1.375rem]
                        max-[500px]:text-[1.75rem] max-[500px]:font-[700] max-[500px]:tracking-wider max-[500px]:leading-[0.5rem]
                        sm:text-[2.0rem] sm:font-[800] sm:tracking-wider sm:leading-[0.5rem]
                        md:text-[2.0rem] md:font-[800] md:tracking-wider md:leading-[1.2rem]
                        lg:text-[2.3rem] lg:font-[800] lg:tracking-wider lg:leading-[1.35rem]
                        xl:text-[2.5rem] xl:font-[800] xl:tracking-wider xl:leading-[1.375rem]
                        2xl:text-[3.2rem] 2xl:font-[800] 2xl:tracking-wider 2xl:leading-[1.475rem]">
                            обучение
                        </h3>
                    </div>
                    <div :style="{ width: containerWidth2 }" class="transition-width whitespace-nowrap overflow-hidden relative flex items-center justify-center h-auto 1-1-lane m-0 p-5 md:m-2 2xl:p-8 bg-gradient-to-r from-[#DA22FF] to-[#9733EE] rounded-[6.25rem]">
                        <h3 class="last-lane uppercase font-sans text-[#E5E5E5]
                        text-[2.5rem] font-[800] tracking-wider leading-[1.375rem]
                        max-[500px]:text-[1.75rem] max-[500px]:font-[700] max-[500px]:tracking-wider max-[500px]:leading-[0.5rem]
                        sm:text-[2.0rem] sm:font-[800] sm:tracking-wider sm:leading-[0.5rem]
                        md:text-[2.0rem] md:font-[800] md:tracking-wider md:leading-[1.2rem]
                        lg:text-[2.3rem] lg:font-[800] lg:tracking-wider lg:leading-[1.35rem]
                        xl:text-[2.5rem] xl:font-[800] xl:tracking-wider xl:leading-[1.375rem]
                        2xl:text-[3.7rem] 2xl:font-[800] 2xl:tracking-wider 2xl:leading-[1.475rem]"
                            x-ref="text2">
                            <template x-for="(char, index) in text2.split('')" :key="index">
                                <span class="letter hidden" x-text="char"></span>
                            </template>
                        </h3>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2
                            border-0 sm:border-l-[2px] lg:border-b-[1px]
                            lg:border-t-[1px]  border-[#ffffff] border-opacity-15
                            ">
                    <div class="border-[2px] border-[#ffffff] border-opacity-15
                                border-l-0 border-t-0
                                 relative pr-3 lg:pr-12">
                        <p class="uppercase font-sans text-white font-bold
                                    text-[16px] leading-[1.1rem]
                                    sm:text-lg sm:leading-[1.55rem]
                                    md:text-lg md:leading-[1.55rem]
                                    lg:text-xl lg:leading-[1.6rem]
                                    xl:text-2xl xl:leading-[1.675rem]
                                    2xl:text-[30px] 2xl:leading-normal
                                    tracking-wider hyphens-auto
                                    pt-[25px] px-[25px] sm:pt-[50px]
                                    pb-[65px] sm:pb-[90px]">
                                Освойте новую профессию
                        </p>
                        <div class="hero__info-dots py-[25px] px-[30px] sm:py-[30px] sm:px-[15px] absolute
                                    right-0 bottom-0 flex gap-[10px] ">
                            <img class="info-dots w-[20px] sm:w-[30px]" src="{{ url('img/icons/info-dots.svg') }}">
                        </div>
                    </div>
                    <div class="border-[2px] border-[#ffffff] border-opacity-15
                                border-t-0 border-l-0 lg:border-r-0 relative
                                pr-3 lg:pr-12">
                        <p class="uppercase font-sans text-white font-bold
                                    text-[16px] leading-[1.1rem]
                                    sm:text-lg sm:leading-[1.55rem]
                                    md:text-lg md:leading-[1.55rem]
                                    lg:text-xl lg:leading-[1.6rem]
                                    xl:text-2xl xl:leading-[1.675rem]
                                    2xl:text-[30px] 2xl:leading-normal
                                    tracking-wider hyphens-auto
                                    pt-[25px] px-[25px] sm:pt-[50px]
                                    pb-[65px] sm:pb-[90px]">
                            Развивайте <br> навыки
                        </p>
                        <div class="hero__info-dots py-[25px] px-[30px] sm:py-[30px] sm:px-[15px] absolute
                                    right-0 bottom-0 flex gap-[10px] lg:pr-[70px] ">
                            <img class="info-dots w-[20px] sm:w-[30px]" src="{{ url('img/icons/info-dots.svg') }}">
                            <img class="info-dots w-[20px] sm:w-[30px]" src="{{ url('img/icons/info-dots.svg') }}">
                        </div>
                    </div>
                    <div class="border-[2px] border-[#ffffff] border-opacity-15
                                border-b-0 border-t-0 border-l-0
                                 relative pr-3 lg:pr-12">
                        <p class="uppercase font-sans text-white font-bold
                                    text-[16px] leading-[1.1rem]
                                    sm:text-lg sm:leading-[1.55rem]
                                    md:text-lg md:leading-[1.55rem]
                                    lg:text-xl lg:leading-[1.6rem]
                                    xl:text-2xl xl:leading-[1.675rem]
                                    2xl:text-[30px] 2xl:leading-normal
                                    tracking-wider hyphens-auto
                                    pt-[25px] px-[25px] sm:pt-[50px]
                                    pb-[65px] sm:pb-[90px]">
                            Повысьте <br> свой доход
                        </p>
                        <div class="hero__info-dots py-[25px] px-[30px] sm:py-[30px] sm:px-[15px] absolute
                                    right-0 bottom-0 flex gap-[10px]">
                            <img class="info-dots w-[20px] sm:w-[30px]" src="{{ url('img/icons/info-dots.svg') }}">
                            <img class="info-dots w-[20px] sm:w-[30px]" src="{{ url('img/icons/info-dots.svg') }}">
                            <img class="info-dots w-[20px] sm:w-[30px]" src="{{ url('img/icons/info-dots.svg') }}">
                        </div>
                    </div>
                    <div class="border-r-[2px] border-t-2 border-b-[1px]
                                border-solid border-[#ffffff] border-opacity-15
                                relative lg:border-t-0 lg:border-r-0 xl:border-b-0
                                pr-3 lg:pr-12">
                        <p class="uppercase font-sans text-white font-bold
                                    text-[16px] leading-[1.1rem]
                                    sm:text-lg sm:leading-[1.55rem]
                                    md:text-lg md:leading-[1.55rem]
                                    lg:text-xl lg:leading-[1.6rem]
                                    xl:text-2xl xl:leading-[1.675rem]
                                    2xl:text-[30px] 2xl:leading-normal
                                    tracking-wider hyphens-auto
                                    pt-[25px] px-[25px] sm:pt-[50px]
                                    pb-[65px] sm:pb-[90px]">
                            Найдите единомышленников
                        </p>
                        <div class="hero__info-dots py-[25px] px-[30px] sm:py-[30px] sm:px-[15px] absolute
                                    right-0 bottom-0 flex gap-[10px] lg:pr-[70px]">
                            <img class="info-dots w-[20px] sm:w-[30px]" src="{{ url('img/icons/info-dots.svg') }}">
                            <img class="info-dots w-[20px] sm:w-[30px]" src="{{ url('img/icons/info-dots.svg') }}">
                            <img class="info-dots w-[20px] sm:w-[30px]" src="{{ url('img/icons/info-dots.svg') }}">
                            <img class="info-dots w-[20px] sm:w-[30px]" src="{{ url('img/icons/info-dots.svg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        @include('general/main_slider')
        <section id="categories" class="categories">
            <ul class="flex flex-col px-3 lg:px-12 mt-10">
                @foreach($types as $type)
                    <style>
                        .gradient-change-{{ $loop->index }}{
                            transform: scale(0);

                        }
                        .type__avatar{
                            transition: all .5s;
                            transform: scale(0);

                            border-radius: 30px;
                        }
                        .avatar__bg-{{$type->id}}{
                            background: linear-gradient(to right, {{$type->color_from}} 0%, {{$type->color_to}} 100%);
                        }
                        .type__avatar img{
                            transition: all .5s;
                            border-radius: 30px;
                            margin: 0;

                        }
                        .gradient-change-circle-{{ $loop->index }}{

                            transition: all .5s;
                            transform: scale(0%);
                        }
                        .type__link:hover{

                            .gradient-change-{{ $loop->index }}{
                                transition: all .5s;
                                transform: scale(100%);
                            }
                            .type__avatar{

                                transform: scale(100%);
                            }
                            .gradient-change-circle-{{ $loop->index }}{

                                transform: scale(100%);
                            }

                        }
                        @media screen and (max-width:800px)  {
                            .gradient-change-circle-{{ $loop->index }}{
                                transform: scale(0%) !important;
                            }
                            .gradient-change-{{ $loop->index }}{
                                transform: scale(100%);
                            }
                        }
                        .type__avatar:hover img{

                            margin: -10px;
                        }
                        .gradient-change-{{ $loop->index }} rect {
                            fill: url(#paint{{ $type->id }}_linear);
                        }
                        .gradient-change-circle-{{ $loop->index }} circle {
                            fill: url(#paint{{ $type->id }}_linear);
                        }

                    </style>
                    <li class="border-b-[1px] border-[#ffffff] border-opacity-10">
                        <a href="{{ route('course.all') }}?filter_type[]={{ $type->id }}" class="flex flex-row content-center justify-between items-center font-semibold p-5 gap-[10px] cursor-pointer type__link">
                            <div class=" w-[80%] flex items-center gap-[20px]">
                                <span class="font-sans text-white text-lg sm:text-xl  font-bold tracking-wider
                                             transition-all  active:text-purple-700 sm:active:text-white">
                                    {{ $type->text }}
                                </span>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="gradient-change-circle-{{ $loop->index }} ">
                                    <circle cx="7.5" cy="7.5" r="7.5" fill="url(#paint{{ $type->id }}_linear_circle)"/>
                                    <defs>
                                        <linearGradient id="paint{{ $type->id }}_linear_circle" x1="0" y1="39" x2="78" y2="39" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="{{ $type->color_from }}"/>
                                            <stop offset="1" stop-color="{{ $type->color_to }}"/>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <div class="relative w-[50px] sm:w-[70px] type__pics">
                                <svg width="100%" height="auto" viewBox="0 0 78 78" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                    <rect x="0.5" y="0.5" width="77" height="77" rx="19.5" fill="none" stroke="none"/>
                                </svg>
                                <svg width="100%" height="auto" viewBox="0 0 78 78" fill="none" xmlns="http://www.w3.org/2000/svg" class=" absolute top-0 z-20">
                                    <rect x="0.5" y="0.5" width="77" height="77" rx="19.5" fill="none" stroke="white"/>
                                    <path d="M33.1531 23.12H49.2298V39.2346" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M49.2301 23.12L27.7693 44.5808" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.75 56.6005C30.4996 61.5297 46.5004 61.5297 61.25 56.6005" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>

                                </svg>
                                <svg width="100%" height="auto" viewBox="0 0 78 78" fill="none" xmlns="http://www.w3.org/2000/svg" class="gradient-change-{{ $loop->index }} absolute top-0 z-10  ">
                                    <rect x="0.5" y="0.5" width="77" height="77" rx="19.5" fill="url(#paint{{ $type->id }}_linear);" stroke="none"/>
                                    <defs>
                                        <linearGradient id="paint{{ $type->id }}_linear" x1="0" y1="39" x2="78" y2="39" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="{{ $type->color_from }}"/>
                                            <stop offset="1" stop-color="{{ $type->color_to }}"/>
                                        </linearGradient>
                                    </defs>
                                </svg>

                                <div class="absolute right-[120px] w-[165px] h-[165px] top-[-90%] hidden min-[850px]:block  type__avatar avatar__bg-{{$type->id}}">
                                    <img width="100%" src="/storage/{{$type->avatar}}">
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>

        @include('general/questions')
        @include('general/footer')



    </main>




</body>


</html>
