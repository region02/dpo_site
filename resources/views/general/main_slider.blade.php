
<section class='course_gallery pl-4 py-12 px-3 lg:px-12' id='course_gallery'>

    <div class="flex justify-between items-center mb-[40px]">
        <h2 class="uppercase font-sans text-[#E5E5E5]
                        text-[2.5rem] font-[800] tracking-wider leading-[2.975rem] sm:leading-[1.975rem]
                        max-[500px]:text-[1.5rem] max-[500px]:font-[700] max-[500px]:tracking-wider
                        sm:text-[1.5rem] sm:font-[800] sm:tracking-wider
                        md:text-[2.0rem] md:font-[800] md:tracking-wider
                        lg:text-[2.3rem] lg:font-[800] lg:tracking-wider
                        xl:text-[2.5rem] xl:font-[800] xl:tracking-wider ">Курсы</h2>
        <div class="relative h-full flex items-center gap-4 sm:gap-10">
            <div class="relative h-[50px] w-[50px]">
                <img class=" swiper-button-prev !left-0 !right-0 !translate-x-0 !translate-y-0 !relative inset-0 !h-[50px] !w-[50px] object-cover rotate-180" src="{{ url('img/icons/next-arrow-slider.svg') }}" alt="slider-arrow">
            </div>
            <div class="relative h-[50px] w-[50px]">
                <img class=" swiper-button-next !left-0 !right-0 !translate-x-0 !translate-y-0  !relative inset-0 !h-[50px] !w-[50px] object-cover " src="{{ url('img/icons/next-arrow-slider.svg') }}" alt="slider-arrow">
            </div>
        </div>

    </div>
    <div class="swiper">
        <div class="swiper-wrapper swiper-wrapper_flex ">

            <div class="swiper-slide swiper-slide_flex h-auto">
                <a href="{{route('course.all')}}" class="slide__card all-courses_animation relative  rounded-[20px] rounded-br-[95px]
                            max-w-[280px] h-[168px] flex justify-between p-5
                            min-[380px]:max-w-[300px] min-[380px]:h-[210px]
                            min-[480px]:max-w-[400px] min-[480px]:h-[280px]
                            border-1 border-solid border-transparent hover:border-[#ffffff]">
                    <h3 class=" z-10
                               w-[calc(100%-80px)]
                               min-[380px]:w-[calc(100%-110px)]
                               min-[480px]:w-[calc(100%-130px)]

                               uppercase text-[#fff] text-[20px] sm:text-[30px] font-[600] ">Смотреть все курсы</h3>

                    <div class="w-[70px]
                                min-[380px]:w-[80px]
                                min-[480px]:w-[100px]
                                absolute  right-0 top-0 z-10"  >
                        <svg class="link_course_main  "  viewBox="0 0 78 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="77" height="77" rx="19.5" fill="url(#paint0_linear_791_365)" stroke="white"/>
                            <path d="M33.1531 23.12H49.2298V39.2346" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M49.2301 23.12L27.7693 44.5808" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.75 56.6005C30.4996 61.5297 46.5004 61.5297 61.25 56.6005" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <defs>
                                <linearGradient id="paint0_linear_791_365" x1="0" y1="39" x2="78" y2="39" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#DA22FF"/>
                                    <stop offset="1" stop-color="#9733EE"/>
                                </linearGradient>
                            </defs>
                        </svg>

                    </div>

                </a>
            </div>
            @foreach($courses as $course)
                <div class="swiper-slide swiper-slide_flex h-auto">
                    <a href="{{route('course.show',$course)}}" class="slide__card relative border-1 border-solid border-transparent
                                                                      max-w-[230px] h-[168px] after:transition after:duration-150 after:ease-out
                                                                      after:content-[''] after:absolute after:bg-[#00000080] after:w-[100%]
                                                                      after:h-[inherit] after:top-0 after:rounded-[20px] hover:after:bg-[#00000000]
                                                                      min-[380px]:max-w-[300px] min-[380px]:h-[210px]
                                                                      min-[480px]:max-w-[400px] min-[480px]:h-[280px]
                    ">
                        <img class="z-0 rounded-[20px]
                                    max-w-[230px] h-[168px]
                                    min-[380px]:max-w-[300px] min-[380px]:h-[210px]
                                    min-[480px]:max-w-[400px] min-[480px]:h-[280px]"
                             loading="lazy"
                             src="/storage/{{$course->avatar}}" alt="курс">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        <h4 class="absolute top-0 z-10 text-[#fff] text-[16px] sm:text-[26px] text-[700] p-6 ">{{$course->title}} </h4>
                    </a>
                </div>
            @endforeach




        </div>

    </div>














    {{--    <div id="gallery" class="relative w-[90%] mx-auto" data-carousel="slide">--}}
{{--        <!-- Carousel wrapper -->--}}
{{--        <div class="relative h-auto overflow-hidden rounded-lg md:h-auto--}}
{{--        grid grid-cols-1 grid-rows-1--}}
{{--        2xl:grid-rows-2 2xl:grid-cols-3--}}
{{--        px-28 ">--}}
{{--             <!-- Item 1 -->--}}
{{--            <div class=" duration-700 ease-in-out relative min-h-[192px] lg:min-h-[280px] " data-carousel-item>--}}
{{--                <img class="absolute z-[-1]" src="{{url("img/test-bg__1.png")}}" alt="">--}}
{{--                <p class="z-10">Научитесь искусству перевода--}}
{{--                    по-переводчески</p>--}}
{{--            </div>--}}
{{--            <!-- Item 2 -->--}}
{{--            <div class=" duration-700 ease-in-out relative min-h-[192px] lg:min-h-[280px] " data-carousel-item>--}}
{{--                <img class="absolute z-[-1]" src="{{url("img/test-bg__1.png")}}" alt="">--}}
{{--                <p class="z-10">Научитесь искусству перевода--}}
{{--                    по-переводчески</p>--}}
{{--            </div>--}}
{{--            <!-- Item 3 -->--}}
{{--            <div class=" duration-700 ease-in-out relative min-h-[192px] lg:min-h-[280px] " data-carousel-item>--}}
{{--                <img class="absolute z-[-1]" src="{{url("img/test-bg__1.png")}}" alt="">--}}
{{--                <p class="z-10">Научитесь искусству перевода--}}
{{--                    по-переводчески</p>--}}
{{--            </div>--}}
{{--            <!-- Item 4 -->--}}
{{--            <div class=" duration-700 ease-in-out relative min-h-[192px] lg:min-h-[280px] " data-carousel-item>--}}
{{--                <img class="absolute z-[-1]" src="{{url("img/test-bg__1.png")}}" alt="">--}}
{{--                <p class="z-10">Научитесь искусству перевода--}}
{{--                    по-переводчески</p>--}}
{{--            </div>--}}
{{--            <!-- Item 5 -->--}}
{{--            <div class=" duration-700 ease-in-out relative min-h-[192px] lg:min-h-[280px] " data-carousel-item>--}}
{{--                <img class="absolute z-[-1]" src="{{url("img/test-bg__1.png")}}" alt="">--}}
{{--                <p class="z-10">Научитесь искусству перевода--}}
{{--                    по-переводчески</p>--}}
{{--            </div>--}}
{{--            <!-- Item 6 -->--}}
{{--            <div class=" duration-700 ease-in-out relative min-h-[192px] lg:min-h-[280px] " data-carousel-item>--}}
{{--                <img class="absolute z-[-1]" src="{{url("img/test-bg__1.png")}}" alt="">--}}
{{--                <p class="z-10">Научитесь искусству перевода--}}
{{--                    по-переводчески</p>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--        <!-- Slider controls -->--}}
{{--        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>--}}
{{--            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">--}}
{{--                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">--}}
{{--                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>--}}
{{--                </svg>--}}
{{--                <span class="sr-only">Previous</span>--}}
{{--            </span>--}}
{{--        </button>--}}
{{--        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>--}}
{{--            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">--}}
{{--                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">--}}
{{--                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>--}}
{{--                </svg>--}}
{{--                <span class="sr-only">Next</span>--}}
{{--            </span>--}}
{{--        </button>--}}
{{--    </div>--}}

@push('scripts')
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
@endpush
</div>


</section>
