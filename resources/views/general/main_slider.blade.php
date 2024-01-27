
<section class='course_gallery pl-4 py-12 px-3 lg:px-12' id='course_gallery'>

    <div class="swiper ">
        <div class="swiper-wrapper swiper-wrapper_flex ">

            <div class="swiper-slide swiper-slide_flex h-auto">
                <div class="slide__card relative bg-white bg-opacity-10 rounded-[20px] rounded-br-[95px]
                            max-w-[240px] h-[168px] flex justify-between p-5
                            min-[380px]:max-w-[300px] min-[380px]:h-[210px]
                            min-[480px]:max-w-[400px] min-[480px]:h-[280px]  ">
                    <h3 class="
                               w-[calc(100%-80px)]
                               min-[380px]:w-[calc(100%-110px)]
                               min-[480px]:w-[calc(100%-130px)]

                               uppercase text-[#fff] text-[20px] sm:text-[30px] font-[600] ">смотреть все курсы</h3>

                    <img class="w-[70px]
                                min-[380px]:w-[80px]
                                min-[480px]:w-[100px]

                                absolute  right-0 top-0" src="{{url('img/icons/link_courses_main.svg')}}" alt="">

                </div>
            </div>
            @foreach($courses as $course)
                <div class="swiper-slide swiper-slide_flex h-auto">
                    <div class="slide__card relative
                            max-w-[240px] h-[168px]
                            min-[380px]:max-w-[300px] min-[380px]:h-[210px]
                            min-[480px]:max-w-[400px] min-[480px]:h-[280px]  ">
                        <img class="absolute z-0 rounded-[20px]
                                    max-w-[240px] h-[168px]
                                    min-[380px]:max-w-[300px] min-[380px]:h-[210px]
                                    min-[480px]:max-w-[400px] min-[480px]:h-[280px]"
                             src="/storage/{{$course->avatar}}">
                        <h4 class="relative z-10 text-[#fff] text-[16px] sm:text-[26px] text-[700] p-6 ">{{$course->title}} </h4>
                    </div>
                </div>
            @endforeach




        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
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
